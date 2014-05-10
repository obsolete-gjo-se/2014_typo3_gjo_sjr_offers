<?php
namespace Gjo\GjoSjrOffers\Tests\Domain\Model;

use Gjo\GjoSjrOffers\Domain\Model\Demand,
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
 * Testcase for the Demand
 */
class DemandTest extends BaseUnitTestCase {

    /**
     * @var \Gjo\GjoSjrOffers\Domain\Model\Demand
     */
    protected $demandObj;

    const DEMAND_FQCN = '\Gjo\GjoSjrOffers\Domain\Model\Demand';
    const ORGANIZATION_FQCN = '\Gjo\GjoSjrOffers\Domain\Model\Organization';
    const CATEGORY_FQCN = '\Gjo\GjoSjrOffers\Domain\Model\Category';
    const REGION_FQCN = '\Gjo\GjoSjrOffers\Domain\Model\Region';


    public function setUp() {
        $this->demandObj = new Demand();
    }

    public function testAnInstanceOfTheOrganizationCanBeConstructed() {
        $this->assertInstanceOf(self::DEMAND_FQCN, $this->demandObj);
    }

    public function testSetAge() {
        $this->demandObj->setAge($this->smallInt);
        $this->assertSame($this->smallInt, $this->demandObj->getAge());
    }

    public function testGetAgeInitiallyReturnsNull() {
        $this->assertNull($this->demandObj->getAge());
    }

    public function testSetSearchWord    () {
        $this->demandObj->setSearchWord($this->shortString);
        $this->assertSame($this->shortString, $this->demandObj->getSearchWord());
    }

    public function testGetSearchWordInitiallyReturnsEmptyString() {
        $this->assertSame($this->emptyString, $this->demandObj->getSearchWord());
    }

    public function testSetOrganization(){
        $this->demandObj->setOrganization($this->getMock(self::ORGANIZATION_FQCN));
        $this->assertInstanceOf(self::ORGANIZATION_FQCN, $this->demandObj->getOrganization());
    }

    public function testGetOrganizationInitiallyReturnsNull(){
        $this->assertNull($this->demandObj->getOrganization());
    }

    public function testSetCategory(){
        $this->demandObj->setCategory($this->getMock(self::CATEGORY_FQCN));
        $this->assertInstanceOf(self::CATEGORY_FQCN, $this->demandObj->getCategory());
    }

    public function testGetCategoryInitiallyReturnsNull(){
        $this->assertNull($this->demandObj->getCategory());
    }

    public function testSetRegion(){
        $this->demandObj->setRegion($this->getMock(self::REGION_FQCN));
        $this->assertInstanceOf(self::REGION_FQCN, $this->demandObj->getRegion());
    }

    public function testGetRegionInitiallyReturnsNull(){
        $this->assertNull($this->demandObj->getRegion());
    }

}