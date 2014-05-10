<?php
namespace Gjo\GjoSjrOffers\Tests\Domain\Model;

use TYPO3\CMS\Core\Tests\UnitTestCase;

use Gjo\GjoSjrOffers\Domain\Model\AttendanceFee,
    Gjo\GjoSjrOffers\Tests\Domain\Fixture\BaseUnitTestCase;

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

/**
 * Testcase for the Organization
 */
class AttendanceFeeTest extends BaseUnitTestCase {

    /**
     * @var \Gjo\GjoSjrOffers\Domain\Model\AttendanceFee
     */
    protected $attendanceFeeObj;

    const ATTENDANCE_FEE_FQCN = '\Gjo\GjoSjrOffers\Domain\Model\AttendanceFee';

    public function setUp() {
        $this->attendanceFeeObj = new AttendanceFee($this->shortString, $this->shortString);
    }

    public function testSetAmount() {
        $this->attendanceFeeObj->setAmount($this->shortString);
        $this->assertSame($this->shortString, $this->attendanceFeeObj->getAmount());
    }

    public function testGetAmountInitiallyReturnsAmount() {
        $this->assertSame($this->shortString, $this->attendanceFeeObj->getAmount());
    }

    public function testSetComment() {
        $this->attendanceFeeObj->setComment($this->shortString);
        $this->assertSame($this->shortString, $this->attendanceFeeObj->getComment());
    }

    public function testGetCommentInitiallyReturnsComment() {
        $this->assertSame($this->shortString, $this->attendanceFeeObj->getComment());
    }

}