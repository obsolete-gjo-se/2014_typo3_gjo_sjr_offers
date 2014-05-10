<?php
namespace Gjo\GjoSjrOffers\Tests\Domain\Model;

use TYPO3\CMS\Core\Tests\UnitTestCase;

use Gjo\GjoSjrOffers\Domain\Model\Offer,
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
 * Testcase for the Offer
 */
class OfferTest extends BaseUnitTestCase {

    /**
     * @var \Gjo\GjoSjrOffers\Domain\Model\Offer
     */
    protected $offerObj;

    const AGE_RANGE_FQCN = '\Gjo\GjoSjrOffers\Domain\Model\AgeRange';
    const ATTENDANCE_RANGE_FQCN = '\Gjo\GjoSjrOffers\Domain\Model\AttendanceRange';
    const ATTENDANCE_FEE_FQCN = '\Gjo\GjoSjrOffers\Domain\Model\AttendanceFee';
    const CATEGORY_FQCN = '\Gjo\GjoSjrOffers\Domain\Model\Category';
    const CONTACT_FQCN = '\Gjo\GjoSjrOffers\Domain\Model\Contact';
    const DATE_RANGE_FQCN = '\Gjo\GjoSjrOffers\Domain\Model\DateRange';
    const OFFER_FQCN = '\Gjo\GjoSjrOffers\Domain\Model\Offer';
    const ORGANIZATION_FQCN = '\Gjo\GjoSjrOffers\Domain\Model\Organization';
    const REGION_FQCN = '\Gjo\GjoSjrOffers\Domain\Model\Region';


    public function setUp() {
        $this->offerObj = new Offer($this->shortString);
    }

    public function testAnInstanceOfTheOrganizationCanBeConstructed() {
        $this->assertInstanceOf(self::OFFER_FQCN, $this->offerObj);
    }

    public function testSetDates() {
        $this->offerObj->setDates($this->shortString);
        $this->assertSame($this->shortString, $this->offerObj->getDates());
    }

    public function testGetDatesInitiallyReturnsEmptyString() {
        $this->assertSame($this->emptyString, $this->offerObj->getDates());
    }

    public function testSetDescription() {
        $this->offerObj->setDescription($this->shortString);
        $this->assertSame($this->shortString, $this->offerObj->getDescription());
    }

    public function testGetDescriptionInitiallyReturnsEmptyString() {
        $this->assertSame($this->emptyString, $this->offerObj->getDescription());
    }

    public function testSetImage() {
        $this->offerObj->setImage($this->shortString);
        $this->assertSame($this->shortString, $this->offerObj->getImage());
    }

    public function testGetImageInitiallyReturnsEmptyString() {
        $this->assertSame($this->emptyString, $this->offerObj->getImage());
    }

    public function testSetServices() {
        $this->offerObj->setServices($this->shortString);
        $this->assertSame($this->shortString, $this->offerObj->getServices());
    }

    public function testGetServicesInitiallyReturnsEmptyString() {
        $this->assertSame($this->emptyString, $this->offerObj->getServices());
    }

    public function testSetTeaser() {
        $this->offerObj->setTeaser($this->shortString);
        $this->assertSame($this->shortString, $this->offerObj->getTeaser());
    }

    public function testGetTeaserInitiallyReturnsEmptyString() {
        $this->assertSame($this->emptyString, $this->offerObj->getTeaser());
    }

    public function testSetTitle() {
        $this->offerObj->setTitle($this->shortString);
        $this->assertSame($this->shortString, $this->offerObj->getTitle());
    }

    public function testGetTitleInitiallyReturnsTitle() {
        $this->assertSame($this->shortString, $this->offerObj->getTitle());
    }

    public function testSetVenue() {
        $this->offerObj->setVenue($this->shortString);
        $this->assertSame($this->shortString, $this->offerObj->getVenue());
    }

    public function testGetVenueInitiallyReturnsEmptyString() {
        $this->assertSame($this->emptyString, $this->offerObj->getVenue());
    }

    public function testSetAttendanceFee(){

        $mockObjectStorage = $this->getMock(parent::OBJECT_STORAGE_FQCN,array('contains'));
        $mockObjectStorage
            ->expects($this->once())
            ->method('contains')
            ->with($this->dummyObj)
            ->will($this->returnValue(TRUE));
        $this->offerObj->setAttendanceFees($mockObjectStorage);

        $this->assertTrue($this->offerObj->getAttendanceFees()->contains($this->dummyObj));
    }

    public function testGetAttendanceFeeInitiallyReturnsEmptyObjectStorage(){
        $this->assertInstanceOf(parent::OBJECT_STORAGE_FQCN, $this->offerObj->getAttendanceFees());
        $this->assertEquals(0, count($this->offerObj->getAttendanceFees()->toArray()));
    }

    public function testAddAttendanceFee(){
        $mockAttendanceFee = $this->getMock(self::ATTENDANCE_FEE_FQCN, array(), array($this->shortString));

        $this->assertEquals(0, count($this->offerObj->getAttendanceFees()));
        $this->offerObj->addAttendanceFee($mockAttendanceFee);
        $this->assertEquals(1, count($this->offerObj->getAttendanceFees()));
        $this->assertTrue($this->offerObj->getAttendanceFees()->contains($mockAttendanceFee));

    }

    public function testRemoveAttendanceFee(){
        $mockOffer = $this->getMock(self::ATTENDANCE_FEE_FQCN, array(), array($this->shortString));

        $this->offerObj->addAttendanceFee($mockOffer);
        $this->assertEquals(1, count($this->offerObj->getAttendanceFees()));
        $this->offerObj->removeAttendanceFee($mockOffer);
        $this->assertEquals(0, count($this->offerObj->getAttendanceFees()));
        $this->assertFalse($this->offerObj->getAttendanceFees()->contains($mockOffer));
    }

    public function testRemoveAllAttendanceFees(){
        $mockOffer1 = $this->getMock(self::ATTENDANCE_FEE_FQCN, array(), array($this->shortString));
        $this->offerObj->addAttendanceFee($mockOffer1);
        $this->assertEquals(1, count($this->offerObj->getAttendanceFees()));

        $mockOffer2 = $this->getMock(self::ATTENDANCE_FEE_FQCN, array(), array($this->shortString));
        $this->offerObj->addAttendanceFee($mockOffer2);
        $this->assertEquals(2, count($this->offerObj->getAttendanceFees()));

        $this->offerObj->removeAllAttendanceFees();
        $this->assertEquals(0, count($this->offerObj->getAttendanceFees()));
    }

    public function testSetAgeRange(){
        $this->offerObj->setAgeRange($this->getMock(self::AGE_RANGE_FQCN));
        $this->assertInstanceOf(self::AGE_RANGE_FQCN, $this->offerObj->getAgeRange());
    }

    public function testGetAgeRangeInitiallyReturnsNull(){
        $this->assertNull($this->offerObj->getAgeRange());
    }

    public function testSetAttendanceRange(){
        $this->offerObj->setAttendanceRange($this->getMock(self::ATTENDANCE_RANGE_FQCN));
        $this->assertInstanceOf(self::ATTENDANCE_RANGE_FQCN, $this->offerObj->getAttendanceRange());
    }

    public function testGetAttendanceRangeInitiallyReturnsNull(){
        $this->assertNull($this->offerObj->getAttendanceRange());
    }

    public function testSetCategoryFee(){

        $mockObjectStorage = $this->getMock(parent::OBJECT_STORAGE_FQCN,array('contains'));
        $mockObjectStorage
            ->expects($this->once())
            ->method('contains')
            ->with($this->dummyObj)
            ->will($this->returnValue(TRUE));

        $this->offerObj->setCategories($mockObjectStorage);

        $this->assertTrue($this->offerObj->getCategories()->contains($this->dummyObj));
    }

    public function testGetCategoryInitiallyReturnsEmptyObjectStorage(){
        $this->assertInstanceOf(parent::OBJECT_STORAGE_FQCN, $this->offerObj->getCategories());
        $this->assertEquals(0, count($this->offerObj->getCategories()->toArray()));
    }

    public function testAddCategory(){
        $mockCategory = $this->getMock(self::CATEGORY_FQCN, array(), array($this->shortString));

        $this->assertEquals(0, count($this->offerObj->getCategories()));
        $this->offerObj->addCategory($mockCategory);
        $this->assertEquals(1, count($this->offerObj->getCategories()));
        $this->assertTrue($this->offerObj->getCategories()->contains($mockCategory));

    }

    public function testRemoveCategory(){
        $mockOffer = $this->getMock(self::CATEGORY_FQCN, array(), array($this->shortString));

        $this->offerObj->addCategory($mockOffer);
        $this->assertEquals(1, count($this->offerObj->getCategories()));
        $this->offerObj->removeCategory($mockOffer);
        $this->assertEquals(0, count($this->offerObj->getCategories()));
        $this->assertFalse($this->offerObj->getCategories()->contains($mockOffer));
    }    public function testSetContact(){
        $this->offerObj->setContact($this->getMock(self::CONTACT_FQCN));
        $this->assertInstanceOf(self::CONTACT_FQCN, $this->offerObj->getContact());
    }

    public function testGetContactInitiallyReturnsNull(){
        $this->assertNull($this->offerObj->getContact());
    }

    public function testRemoveContactReturnsNull(){
        $this->offerObj->setContact($this->getMock(self::CONTACT_FQCN));
        $this->assertInstanceOf(self::CONTACT_FQCN, $this->offerObj->getContact());
        $this->offerObj->removeContact();
        $this->assertNull($this->offerObj->getContact());
    }

    public function testSetDateRange(){
    $this->offerObj->setDateRange($this->getMock(self::DATE_RANGE_FQCN));
    $this->assertInstanceOf(self::DATE_RANGE_FQCN, $this->offerObj->getDateRange());
    }

    public function testGetDateRangeInitiallyReturnsNull(){
        $this->assertNull($this->offerObj->getDateRange());
    }

    public function testSetOrganization(){
        $this->offerObj->setOrganization($this->getMock(self::ORGANIZATION_FQCN));
        $this->assertInstanceOf(self::ORGANIZATION_FQCN, $this->offerObj->getOrganization());
    }

    public function testGetOrganizationInitiallyReturnsNull(){
        $this->assertNull($this->offerObj->getOrganization());
    }

    public function testSetRegion(){

        $mockObjectStorage = $this->getMock(parent::OBJECT_STORAGE_FQCN,array('contains'));

        $mockObjectStorage
            ->expects($this->once())
            ->method('contains')
            ->with($this->dummyObj)
            ->will($this->returnValue(TRUE));

        $this->offerObj->setRegions($mockObjectStorage);

        $this->assertTrue($this->offerObj->getRegions()->contains($this->dummyObj));
    }

    public function testGetRegionInitiallyReturnsEmptyObjectStorage(){
        $this->assertInstanceOf(parent::OBJECT_STORAGE_FQCN, $this->offerObj->getRegions());
        $this->assertEquals(0, count($this->offerObj->getRegions()->toArray()));
    }

    public function testAddRegion(){

        $mockCategory = $this->getMock(self::REGION_FQCN, array(), array($this->shortString));

        $this->assertEquals(0, count($this->offerObj->getRegions()));
        $this->offerObj->addRegion($mockCategory);
        $this->assertEquals(1, count($this->offerObj->getRegions()));
        $this->assertTrue($this->offerObj->getRegions()->contains($mockCategory));

    }

    public function testRemoveRegion(){

        $mockOffer = $this->getMock(self::REGION_FQCN, array(), array($this->shortString));

        $this->offerObj->addRegion($mockOffer);
        $this->assertEquals(1, count($this->offerObj->getRegions()));
        $this->offerObj->removeRegion($mockOffer);
        $this->assertEquals(0, count($this->offerObj->getRegions()));
        $this->assertFalse($this->offerObj->getRegions()->contains($mockOffer));
    }
}
 