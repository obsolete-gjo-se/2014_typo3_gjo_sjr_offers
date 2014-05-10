<?php
namespace Gjo\GjoSjrOffers\Tests\Domain\Model;

use Gjo\GjoSjrOffers\Domain\Model\Category,
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
class CategoryTest extends BaseUnitTestCase {

    /**
     * @var \Gjo\GjoSjrOffers\Domain\Model\Category
     */
    protected $categoryObj;

    const CATEGORY_FQCN = '\Gjo\GjoSjrOffers\Domain\Model\Category';

    public function setUp() {
        $this->categoryObj = new Category($this->shortString);
    }

    public function testAnInstanceOfTheOrganizationCanBeConstructed() {
        $this->assertInstanceOf(self::CATEGORY_FQCN, $this->categoryObj);
    }

    public function testSetDescription() {
        $this->categoryObj->setDescription($this->shortString);
        $this->assertSame($this->shortString, $this->categoryObj->getDescription());
    }

    public function testGetDescriptionInitiallyReturnsEmptyString() {
        $this->assertSame($this->emptyString, $this->categoryObj->getDescription());
    }

    public function testSetIsInternal() {
        $this->categoryObj->setIsInternal(TRUE);
        $this->assertTrue($this->categoryObj->getIsInternal());
    }

    public function testGetIsInternalInitiallyReturnsFalse() {
        $this->assertFalse($this->categoryObj->getIsInternal());
    }

    public function testSetTitle() {
        $this->categoryObj->setTitle($this->shortString);
        $this->assertSame($this->shortString, $this->categoryObj->getTitle());
    }

    public function testGetTitleInitiallyReturnsTitle() {
        $this->assertSame($this->shortString, $this->categoryObj->getTitle());
    }

}