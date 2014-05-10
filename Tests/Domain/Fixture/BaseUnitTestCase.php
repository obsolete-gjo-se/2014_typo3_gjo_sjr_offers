<?php
namespace Gjo\GjoSjrOffers\Tests\Domain\Fixture;

use TYPO3\CMS\Core\Tests\UnitTestCase;

use Gjo\GjoSjrOffers\Tests\Domain\Fixture\DummyClass;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Gregory Jo <gregory.jo@gjo-se.com>
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
 * Base Class for Unit-testing
 */
class BaseUnitTestCase extends UnitTestCase {

    /**
     * @var \Gjo\GjoSjrOffers\Tests\Domain\Fixture\DummyClass
     */
    protected $dummyObj;

    /**
     * @var string
     */
    protected $emptyString;

    /**
     * @var string
     */
    protected $shortString;

    /**
     * @var int
     */
    protected $tinyInt;

    /**
     * @var int
     */
    protected $smallInt;

    /**
     * @var int
     */
    protected $mediumInt;

    /**
     * @var int
     */
    protected $int;

    /**
     * @var int
     */
    protected $bigInt;

    const OBJECT_STORAGE_FQCN = '\TYPO3\CMS\Extbase\Persistence\ObjectStorage';

    public function __construct() {

        $this->dummyObj = new DummyClass;
        $this->emptyString = '';
        $this->shortString = 'The first string line \n The second string line';
        $this->tinyInt = 128;
        $this->smallInt = 32767;
        $this->mediumInt = 8388607;
        $this->int = 2147483647;
        $this->bigInteger = 9223372036854775807;

    }

    public function testForBeToSkipped() {

        $this->markTestSkipped();
    }
}
 