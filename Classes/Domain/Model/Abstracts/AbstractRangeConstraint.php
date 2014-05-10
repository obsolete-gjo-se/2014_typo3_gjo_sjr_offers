<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2009 Jochen Rau <jochen.rau@typoplanet.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

namespace Gjo\GjoSjrOffers\Domain\Model\Abstracts;

use TYPO3\CMS\Extbase\DomainObject\AbstractValueObject;

	/**
	 * An abstract range constraint
	 * @author gregory.jo
	 * @version 1.0
	 * @updated 01-Mai-2014 18:17:41
	 */
abstract class AbstractRangeConstraint extends AbstractValueObject
{
    /**
     * @var int The maximum value
     **/
    protected $maximumValue;

    /**
     * @var int The minimum value
     **/
    protected $minimumValue;

    /**
     * @param int $minimumValue
     * @param int $maximumValue
     */
    public function __construct($minimumValue = NULL, $maximumValue = NULL) {
        $this->setMinimumValue($minimumValue);
        $this->setMaximumValue($maximumValue);
    }

    /**
     * @param int $maximumValue
     */
    public function setMaximumValue($maximumValue = NULL)
    {
        $this->maximumValue = $this->normalizeValue($maximumValue);
    }

    /**
     * @return int
     */
    public function getMaximumValue()
    {
        return $this->maximumValue;
    }

    /**
     * @param int $minimumValue
     */
    public function setMinimumValue($minimumValue = NULL)
    {
        $this->minimumValue = $this->normalizeValue($minimumValue);
    }

    /**
     * @return int
     */
    public function getMinimumValue()
    {
        return $this->minimumValue;
    }

    /**
     * This method is called every time a value should be set. It is used to convert the
     * given value to the targeted format.
     *
     * @param mixed $value The value to be normalized
     * @return int The normalized value
     */
    public function normalizeValue($value = NULL) {
        if ($value !== NULL && $value !== '') {
            $value = abs(intval($value));
        } else {
            $value = NULL;
        }
        return $value;
    }

} 