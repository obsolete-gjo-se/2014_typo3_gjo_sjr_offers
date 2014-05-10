<?php
namespace Gjo\GjoSjrOffers\Tests\Domain\Proxy;

use Gjo\GjoSjrOffers\Domain\Model\Abstracts\AbstractRangeConstraint;

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

class AbstractRangeConstraintProxy extends AbstractRangeConstraint{

    /**
     * @param int $minimumValue
     * @param int $maximumValue
     */
    public function __construct($minimumValue = NULL, $maximumValue = NULL) {
        parent::__construct($minimumValue, $maximumValue);
    }
}