<?php
namespace Gjo\GjoSjrOffers\Tests\Domain\Model\Abstracts;

use Gjo\GjoSjrOffers\Tests\Domain\Proxy\AbstractRangeConstraintProxy,
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
 * Testcase for the AbstractRangeConstraint
 */
class AbstractRangeConstraintTest extends BaseUnitTestCase {

    /**
     * @var \Gjo\GjoSjrOffers\Tests\Domain\Proxy\AbstractRangeConstraintProxy
     */
    protected $abstractRangeConstraintObj;

    const ABSTRACT_RANGE_CONSTRAINT_FQCN = '\Gjo\GjoSjrOffers\Tests\Domain\Proxy\AbstractRangeConstraintProxy';

    public function setUp() {
        $this->abstractRangeConstraintObj = new AbstractRangeConstraintProxy($this->tinyInt, $this->int);
    }

    public function testAnInstanceOfTheOrganizationCanBeConstructed() {
        $this->assertInstanceOf(self::ABSTRACT_RANGE_CONSTRAINT_FQCN, $this->abstractRangeConstraintObj);
    }

    public function testSetMaximumValue() {
        $this->abstractRangeConstraintObj->setMaximumValue($this->int);
        $this->assertSame($this->int, $this->abstractRangeConstraintObj->getMaximumValue());
    }

    public function testGetMaximumValueInitiallyReturnsMaximumValue() {
        $this->assertSame($this->int, $this->abstractRangeConstraintObj->getMaximumValue());
    }

    public function testSetMinimumValue() {
        $this->abstractRangeConstraintObj->setMinimumValue($this->tinyInt);
        $this->assertSame($this->tinyInt, $this->abstractRangeConstraintObj->getMinimumValue());
    }

    public function testGetMinimumValueInitiallyReturnsMinimumValue() {
        $this->assertSame($this->tinyInt, $this->abstractRangeConstraintObj->getMinimumValue());
    }

}