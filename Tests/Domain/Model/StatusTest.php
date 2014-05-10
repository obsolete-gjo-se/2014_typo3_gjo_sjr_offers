<?php
namespace Gjo\GjoSjrOffers\Tests\Domain\Model;

use Gjo\GjoSjrOffers\Domain\Model\Status,
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
class StatusTest extends BaseUnitTestCase {

    /**
     * @var \Gjo\GjoSjrOffers\Domain\Model\Status
     */
    protected $statusObj;

    const CATEGORY_FQCN = '\Gjo\GjoSjrOffers\Domain\Model\Category';
    const STATUS_FQCN = '\Gjo\GjoSjrOffers\Domain\Model\Status';


    public function setUp() {
        $this->statusObj = new Status($this->shortString);
    }

    public function testAnInstanceOfTheOrganizationCanBeConstructed() {
        $this->assertInstanceOf(self::STATUS_FQCN, $this->statusObj);
    }

    public function testSetDescription() {
        $this->statusObj->setDescription($this->shortString);
        $this->assertSame($this->shortString, $this->statusObj->getDescription());
    }

    public function testGetDescriptionInitiallyReturnsEmptyString() {
        $this->assertSame($this->emptyString, $this->statusObj->getDescription());
    }

    public function testSetTitle() {
        $this->statusObj->setTitle($this->shortString);
        $this->assertSame($this->shortString, $this->statusObj->getTitle());
    }

    public function testGetTitleInitiallyReturnsTitle() {
        $this->assertSame($this->shortString, $this->statusObj->getTitle());
    }

    public function testSetCategoryFee(){

        $mockObjectStorage = $this->getMock(parent::OBJECT_STORAGE_FQCN,array('contains'));
        $mockObjectStorage
            ->expects($this->once())
            ->method('contains')
            ->with($this->dummyObj)
            ->will($this->returnValue(TRUE));

        $this->statusObj->setCategories($mockObjectStorage);

        $this->assertTrue($this->statusObj->getCategories()->contains($this->dummyObj));
    }

    public function testGetCategoryInitiallyReturnsEmptyObjectStorage(){
        $this->assertInstanceOf(parent::OBJECT_STORAGE_FQCN, $this->statusObj->getCategories());
        $this->assertEquals(0, count($this->statusObj->getCategories()->toArray()));
    }

    public function testAddCategory(){
        $mockCategory = $this->getMock(self::CATEGORY_FQCN, array(), array($this->shortString));

        $this->assertEquals(0, count($this->statusObj->getCategories()));
        $this->statusObj->addCategory($mockCategory);
        $this->assertEquals(1, count($this->statusObj->getCategories()));
        $this->assertTrue($this->statusObj->getCategories()->contains($mockCategory));

    }

    public function testRemoveCategory(){
        $mockOffer = $this->getMock(self::CATEGORY_FQCN, array(), array($this->shortString));

        $this->statusObj->addCategory($mockOffer);
        $this->assertEquals(1, count($this->statusObj->getCategories()));
        $this->statusObj->removeCategory($mockOffer);
        $this->assertEquals(0, count($this->statusObj->getCategories()));
        $this->assertFalse($this->statusObj->getCategories()->contains($mockOffer));
    }

}