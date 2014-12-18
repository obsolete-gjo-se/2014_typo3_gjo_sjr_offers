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

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * An amount
 *
 * @author gregory.jo
 * @version 1.0
 * @updated 30-Apr-2014 08:24
 */
class AttendanceFee extends AbstractEntity
{

    /**
     * @var string The amount.
     * @validate \Gjo\GjoSjrOffers\Domain\Validator\AmountValidator
     **/
    protected $amount;

    /**
     * @var string The fee comment (e.g. a target group)
     **/
    protected $comment;

    /**
     * @param string $amount The amount
     * @param string $comment The comment
     */
    public function __construct($amount, $comment = '')
    {
        $this->setAmount($amount);
        $this->setComment($comment);
    }

    /**
     * @param string $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Normalizes a german amount to english format
     *
     * @param string $input The input
     * @return string The normalized string
     */
//    protected function normalizeAmount($input) {
//        if (!is_string($input)) return $input;

//        $input = str_replace('.', '', $input);
//        $input = str_replace(',', '.', $input);
//        return number_format($input, 2);
//    }



    /**
     * @return string
     */
    public function __toString()
    {
            return $this->getAmount() . ' (' . $this->getComment() . ')';
    }


}