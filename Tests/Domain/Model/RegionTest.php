<?php
namespace Gjo\GjoSjrOffers\Tests\Domain\Model;

use Gjo\GjoSjrOffers\Domain\Model\Region,
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
 * Testcase for the Category
 */
class RegionTest extends BaseUnitTestCase {

    /**
     * @var \Gjo\GjoSjrOffers\Domain\Model\Region
     */
    protected $regionObj;

    const REGION_FQCN = '\Gjo\GjoSjrOffers\Domain\Model\Region';

    public function setUp() {
        $this->regionObj = new Region($this->shortString);
    }

    public function testAnInstanceOfTheOrganizationCanBeConstructed() {
        $this->assertInstanceOf(self::REGION_FQCN, $this->regionObj);
    }

    public function testSetName() {
        $this->regionObj->setName($this->shortString);
        $this->assertSame($this->shortString, $this->regionObj->getName());
    }

    public function testGetNameInitiallyReturnsName() {
        $this->assertSame($this->shortString, $this->regionObj->getName());
    }

}