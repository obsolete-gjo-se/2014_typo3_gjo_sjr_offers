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

namespace Gjo\GjoSjrOffers\Domain\Validator;
use TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator;

/**
 * Validator for AttendanceFees
 *
 * @author gregory.jo
 * @version 1.0
 * @updated 30-Apr-2014 09:04
 */
class AmountValidator extends AbstractValidator {

    /**
     * Returns TRUE, if the given value is a valid amount.
     *
     * If at least one error occurred, the result is FALSE.
     *
     * @param mixed $value The value that should be validated
     * @return boolean TRUE if the value is an amount, otherwise FALSE
     */
    public function isValid($value) {
        $this->errors = array();
        if (preg_match("/^([0-9]{1,3}(\.[0-9]{3})*(,[0-9]+)?|,[ 0-9]+)$/", $input, $matches)) {
            return TRUE;
        }
        $this->addError('Bitte geben Sie Betr�ge mit Komma als Dezimaltrenner und Punkt als Tausendertrenner ein.', 1234567678);
        return FALSE;
    }

} 