<?php
namespace Gjo\GjoSjrOffers\Tests\Domain\Model;

use Gjo\GjoSjrOffers\Domain\Model\Organization,
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
class OrganizationTest extends BaseUnitTestCase {

    /**
     * @var \Gjo\GjoSjrOffers\Domain\Model\Organization
     */
    protected $organizationObj;

    const ORGANIZATION_FQCN = '\Gjo\GjoSjrOffers\Domain\Model\Organization';
    const CONTACT_FQCN = '\Gjo\GjoSjrOffers\Domain\Model\Contact';
    const OFFER_FQCN =  '\Gjo\GjoSjrOffers\Domain\Model\Offer';
    const STATUS_FQCN =  '\Gjo\GjoSjrOffers\Domain\Model\Status';

    public function setUp() {
        $this->organizationObj = new Organization($this->shortString);
    }

	public function testAnInstanceOfTheOrganizationCanBeConstructed() {
        $this->assertInstanceOf(self::ORGANIZATION_FQCN, $this->organizationObj);
	}

    public function testSetAddress() {
        $this->organizationObj->setAddress($this->shortString);
        $this->assertSame($this->shortString, $this->organizationObj->getAddress());
    }

    public function testGetAddressInitiallyReturnsEmptyString() {
        $this->assertSame($this->emptyString, $this->organizationObj->getAddress());
    }

    public function testSetDescription() {
        $this->organizationObj->setDescription($this->shortString);
        $this->assertSame($this->shortString, $this->organizationObj->getDescription());
    }

    public function testGetDescriptionInitiallyReturnsEmptyString() {
        $this->assertSame($this->emptyString, $this->organizationObj->getDescription());
    }

    public function testSetEmail() {
        $this->organizationObj->setEmail($this->shortString);
        $this->assertSame($this->shortString, $this->organizationObj->getEmail());
    }

    public function testSetGetEmailInitiallyReturnsEmptyString() {
        $this->assertSame($this->emptyString, $this->organizationObj->getEmail());
    }

    public function testSetFax() {
        $this->organizationObj->setFax($this->shortString);
        $this->assertSame($this->shortString, $this->organizationObj->getFax());
    }

    public function testGetFaxInitiallyReturnsEmptyString() {
        $this->assertSame($this->emptyString, $this->organizationObj->getFax());
    }

    public function testSetLogo() {
        $this->organizationObj->setLogo($this->shortString);
        $this->assertSame($this->shortString, $this->organizationObj->getLogo());
    }

    public function testGetLogoInitiallyReturnsEmptyString() {
        $this->assertSame($this->emptyString, $this->organizationObj->getLogo());
    }

    public function testSetName() {
        $this->organizationObj->setName($this->shortString);
        $this->assertSame($this->shortString, $this->organizationObj->getName());
    }

    public function testGetNameInitiallyReturnsName() {
        $this->assertSame($this->shortString, $this->organizationObj->getName());
    }

    public function testSetPhone() {
        $this->organizationObj->setPhone($this->shortString);
        $this->assertSame($this->shortString, $this->organizationObj->getPhone());
    }

    public function testGetPhoneInitiallyReturnsEmptyString() {
        $this->assertSame($this->emptyString, $this->organizationObj->getPhone());
    }

    public function testSetUrl() {
        $this->organizationObj->setUrl($this->shortString);
        $this->assertSame($this->shortString, $this->organizationObj->getUrl());
    }

    public function testGetUrlInitiallyReturnsEmptyString() {
        $this->assertSame($this->emptyString, $this->organizationObj->getUrl());
    }

    public function testSetContact(){

        $mockObjectStorage = $this->getMock(parent::OBJECT_STORAGE_FQCN,array('contains'));
        $mockObjectStorage
            ->expects($this->once())
            ->method('contains')
            ->with($this->dummyObj)
            ->will($this->returnValue(TRUE));
        $this->organizationObj->setContact($mockObjectStorage);

        $this->assertTrue($this->organizationObj->getContact()->contains($this->dummyObj));
    }

    public function testGetContactInitiallyReturnsEmptyObjectStorage(){
        $this->assertInstanceOf(parent::OBJECT_STORAGE_FQCN, $this->organizationObj->getContact());
        $this->assertEquals(0, count($this->organizationObj->getContact()->toArray()));
    }

    public function testAddContact(){
        $mockContact = $this->getMock(self::CONTACT_FQCN);

        $this->assertEquals(0, count($this->organizationObj->getContact()));
        $this->organizationObj->addContact($mockContact);
        $this->assertEquals(1, count($this->organizationObj->getContact()));
		$this->assertTrue($this->organizationObj->getContact()->contains($mockContact));

    }

    public function testRemoveContact(){
        $mockContact = $this->getMock(self::CONTACT_FQCN);

        $this->organizationObj->addContact($mockContact);
        $this->assertEquals(1, count($this->organizationObj->getContact()));
        $this->organizationObj->removeContact($mockContact);
        $this->assertEquals(0, count($this->organizationObj->getContact()));
        $this->assertFalse($this->organizationObj->getContact()->contains($mockContact));

    }

    public function testGetAllContacts(){

        $this->markTestSkipped('Hier stimmt noch nix!');

        $mockContact1 = $this->getMock('\Gjo\GjoSjrOffers\Domain\Model\Contact');
        $this->organizationObj->addContact($mockContact1);
        $this->assertEquals(1, count($this->organizationObj->getContact()));

        $mockContact2 = $this->getMock('\Gjo\GjoSjrOffers\Domain\Model\Contact');
        $this->organizationObj->addContact($mockContact2);
        $this->assertEquals(2, count($this->organizationObj->getContact()));

        $mockContact3 = $this->getMock('\Gjo\GjoSjrOffers\Domain\Model\Offer');
        $this->organizationObj->addContact($mockContact2);
        $this->assertEquals(2, count($this->organizationObj->getContact()));

        $this->assertEquals(2, count($this->organizationObj->getAllContacts()->toArray()));

        //        $this->markTestSkipped();
        //
//		$mockPerson1 = $this->getMock('\\Gjo\\GjoSjrOffers\\Domain\\Model\\Contact', array(), array(), '', FALSE);
//		$mockPerson2 = $this->getMock('\\Gjo\\GjoSjrOffers\\Domain\\Model\\Contact', array(), array(), '', FALSE);
        //
//		$mockOffer1 = $this->getMock('\\Gjo\\GjoSjrOffers\\Domain\\Model\\Offer', array('getContact'), array(), '', FALSE);
//		$mockOffer1->expects($this->any())->method('getContact')->will($this->returnValue($mockPerson1));
//
//		$mockOffer2 = $this->getMock('\\Gjo\\GjoSjrOffers\\Domain\\Model\\Offer', array('getContact'), array(), '', FALSE);
//		$mockOffer2->expects($this->any())->method('getContact')->will($this->returnValue($mockPerson2));
//
//		$mockObjectStorage1 = $this->getMock('\\TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
//		$mockObjectStorage1->expects($this->at(0))->method('attach')->with($this->identicalTo($mockPerson1));
//		$mockObjectStorage1->expects($this->at(1))->method('attach')->with($this->identicalTo($mockPerson2));
//
//		$mockOrganization = $this->getMock('\\Gjo\\GjoSjrOffers\\Domain\\Model\\Organization', array('getContacts', 'getOffers'), array(), '', FALSE);
//		$mockOrganization->expects($this->once())->method('getContacts')->will($this->returnValue($mockObjectStorage1));
//		$mockOrganization->expects($this->once())->method('getOffers')->will($this->returnValue(array($mockOffer1, $mockOffer2)));
//
//		$mockOrganization->getAllContacts();
    }

    public function testSetOffer(){

        $mockObjectStorage = $this->getMock(parent::OBJECT_STORAGE_FQCN,array('contains'));
        $mockObjectStorage
            ->expects($this->once())
            ->method('contains')
            ->with($this->dummyObj)
            ->will($this->returnValue(TRUE));
        $this->organizationObj->setOffer($mockObjectStorage);

        $this->assertTrue($this->organizationObj->getOffer()->contains($this->dummyObj));
    }

    public function testGetOfferInitiallyReturnsEmptyObjectStorage(){
        $this->assertInstanceOf(parent::OBJECT_STORAGE_FQCN, $this->organizationObj->getOffer());
        $this->assertEquals(0, count($this->organizationObj->getOffer()->toArray()));
    }

    public function testAddOffer(){
        $mockOffer = $this->getMock(self::OFFER_FQCN, array(), array($this->shortString));

        $this->assertEquals(0, count($this->organizationObj->getOffer()));
        $this->organizationObj->addOffer($mockOffer);
        $this->assertEquals(1, count($this->organizationObj->getOffer()));
        $this->assertTrue($this->organizationObj->getOffer()->contains($mockOffer));

    }

    public function testRemoveOffer(){
        $mockOffer = $this->getMock(self::OFFER_FQCN, array(), array($this->shortString));

        $this->organizationObj->addOffer($mockOffer);
        $this->assertEquals(1, count($this->organizationObj->getOffer()));
        $this->organizationObj->removeOffer($mockOffer);
        $this->assertEquals(0, count($this->organizationObj->getOffer()));
        $this->assertFalse($this->organizationObj->getOffer()->contains($mockOffer));
    }

    public function testRemoveAllOffers(){
        $mockOffer1 = $this->getMock(self::OFFER_FQCN, array(), array($this->shortString));
        $this->organizationObj->addOffer($mockOffer1);
        $this->assertEquals(1, count($this->organizationObj->getOffer()));

        $mockOffer2 = $this->getMock(self::OFFER_FQCN, array(), array($this->shortString));
        $this->organizationObj->addOffer($mockOffer2);
        $this->assertEquals(2, count($this->organizationObj->getOffer()));

        $this->organizationObj->removeAllOffers();
        $this->assertEquals(0, count($this->organizationObj->getOffer()));
    }

    public function testGetOrgaAdminInitiallyReturnsEmptyObjectStorage(){
        $this->markTestSkipped('der stimmt nicht, da mir der setter fehlt - wo kommt der wert her?');
        $this->assertInstanceOf(parent::OBJECT_STORAGE_FQCN, $this->organizationObj->getOrgaAdmin());
        $this->assertEquals(0, count($this->organizationObj->getOrgaAdmin()->toArray()));
    }

    public function testSetStatus(){
        $mockObject = $this->getMock(self::STATUS_FQCN, array(), array($this->shortString));

        $this->organizationObj->setStatus($mockObject);
        $this->assertInstanceOf(self::STATUS_FQCN, $this->organizationObj->getStatus());
    }

    public function testGetStatusInitiallyReturnsNull(){
        $this->assertNull($this->organizationObj->getStatus());
    }
}