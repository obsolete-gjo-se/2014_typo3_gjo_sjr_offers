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

namespace Gjo\GjoSjrOffers\Domain\Model;

/**
 * A date range specifying the period an offer is valid
 *
 * @author gregory.jo
 * @version 1.0
 * @updated 30-Apr-2014 08:16:00
 */
class DateRange extends Abstracts\AbstractRangeConstraint implements Interfaces\DateRangeInterface
{
    /**
     * @var \Gjo\GjoSjrOffers\Domain\Decorator\DateTimeDecorator The minimum value
     **/
    protected $minimumValue;

    /**
     * @var \Gjo\GjoSjrOffers\Domain\Decorator\DateTimeDecorator The maximum value
     **/
    protected $maximumValue;

    /**
     * This method is called every time a value should be set. It is used to convert the
     * given value to the targeted format.
     *
     * @param mixed $value The value to be normalized
     * @return int The normalized value
     */
    public function normalizeValue($value = NULL) {
        if (!($value instanceof \Gjo\GjoSjrOffers\Domain\Decorator\DateTimeDecorator)) {
            $value = NULL;
        }
        return $value;
    }

} 