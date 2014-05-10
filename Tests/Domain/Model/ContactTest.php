<?php
namespace Gjo\GjoSjrOffers\Tests\Domain\Model;

use TYPO3\CMS\Core\Tests\UnitTestCase;

use Gjo\GjoSjrOffers\Domain\Model\Contact,
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
 * Testcase for the Contact
 */
class ContactTest extends BaseUnitTestCase {

    /**
     * @var \Gjo\GjoSjrOffers\Domain\Model\Contact
     */
    protected $contactObj;

    const CONTACT_FQCN = '\Gjo\GjoSjrOffers\Domain\Model\Contact';

    public function setUp() {
        $this->contactObj = new Contact($this->shortString);
    }

    public function testAnInstanceOfTheOrganizationCanBeConstructed() {
        $this->assertInstanceOf(self::CONTACT_FQCN, $this->contactObj);
    }

    public function testSetAddress() {
        $this->contactObj->setAddress($this->shortString);
        $this->assertSame($this->shortString, $this->contactObj->getAddress());
    }


    public function testGetAddressInitiallyReturnsEmptyString() {
        $this->assertSame($this->emptyString, $this->contactObj->getAddress());
    }

    public function testSetEmail() {
        $this->contactObj->setEmail($this->shortString);
        $this->assertSame($this->shortString, $this->contactObj->getEmail());
    }

    public function testSetGetEmailInitiallyReturnsEmptyString() {
        $this->assertSame($this->emptyString, $this->contactObj->getEmail());
    }

    public function testSetFax() {
        $this->contactObj->setFax($this->shortString);
        $this->assertSame($this->shortString, $this->contactObj->getFax());
    }

    public function testGetFaxInitiallyReturnsEmptyString() {
        $this->assertSame($this->emptyString, $this->contactObj->getFax());
    }

    public function testSetName() {
        $this->contactObj->setName($this->shortString);
        $this->assertSame($this->shortString, $this->contactObj->getName());
    }

    public function testGetNameInitiallyReturnsName() {
        $this->assertSame($this->shortString, $this->contactObj->getName());
    }

    public function testSetPhone() {
        $this->contactObj->setPhone($this->shortString);
        $this->assertSame($this->shortString, $this->contactObj->getPhone());
    }

    public function testGetPhoneInitiallyReturnsEmptyString() {
        $this->assertSame($this->emptyString, $this->contactObj->getPhone());
    }

    public function testSetRole() {
        $this->contactObj->setUrl($this->shortString);
        $this->assertSame($this->shortString, $this->contactObj->getUrl());
    }

    public function testGetRoleInitiallyReturnsEmptyString() {
        $this->assertSame($this->emptyString, $this->contactObj->getUrl());
    }

    public function testSetUrl() {
        $this->contactObj->setUrl($this->shortString);
        $this->assertSame($this->shortString, $this->contactObj->getUrl());
    }

    public function testGetUrlInitiallyReturnsEmptyString() {
        $this->assertSame($this->emptyString, $this->contactObj->getUrl());
    }



}