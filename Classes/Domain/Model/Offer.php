<?php
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

namespace Gjo\GjoSjrOffers\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity,
    TYPO3\CMS\Extbase\Persistence\ObjectStorage;

	/**
	 * An Offer
	 * @author gregory.jo
	 * @version 1.0
	 * @updated 01-Mai-2014 17:56:39
	 */
class Offer extends AbstractEntity
{
    /**
     * @var string The textual description of the dates. E.g. "Monday to Friday, 8-12"
     * @validate StringLength(maximum = 1000)
     **/
    protected $dates = '';

    /**
     * @var string The description of the offer. A longer text.
     * @validate StringLength(maximum = 2000)
     **/
    protected $description = '';

    /**
     * @var string A single image of the offer
     **/
    protected $image = '';

    /**
     * @var string The services of the offer.
     * @validate StringLength(maximum = 1000)
     **/
    protected $services = '';

    /**
     * @var string The teaser of the offer. A line of text.
     * @validate StringLength(maximum = 150)
     **/
    protected $teaser = '';

    /**
     * @var string The title of the offer
     * @validate NotEmpty
     * @validate StringLength(minimum = 3, maximum = 50)
     **/
    protected $title = '';

    /**
     * @var string The venue of the offer. This is simply a text describing the venue ("Bulding 2, 2nd floor")
     * @validate StringLength(maximum = 1000)
     **/
    protected $venue = '';

    /**
     * @var \Gjo\GjoSjrOffers\Domain\Model\AgeRange The age range of the offer.
     * @validate \Gjo\GjoSjrOffers\Domain\Validator\RangeConstraintValidator
     */
    protected $m_AgeRange;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gjo\GjoSjrOffers\Domain\Model\AttendanceFee> The attendance fees of the offer.
     * @lazy
     **/
    protected $m_AttendanceFee;

    /**
     * @var \Gjo\GjoSjrOffers\Domain\Model\AttendanceRange The attendance range of the offer.
     * @validate \Gjo\GjoSjrOffers\Domain\Validator\RangeConstraintValidator
     **/
    protected $m_AttendanceRange;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gjo\GjoSjrOffers\Domain\Model\Category> The categories the offer is assigned to
     * @lazy
     **/
    protected $m_Category;

    /**
     * @var \Gjo\GjoSjrOffers\Domain\Model\Contact
     **/
    protected $m_Contact;

    /**
     * @var \Gjo\GjoSjrOffers\Domain\Model\DateRange The date range of the offer is valid.
     * @validate \Gjo\GjoSjrOffers\Domain\Validator\RangeConstraintValidator
     **/
    protected $m_DateRange;

    /**
     * @var \Gjo\GjoSjrOffers\Domain\Model\Organization The organization the offer belongs to
     **/
    protected $m_Organization;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gjo\GjoSjrOffers\Domain\Model\Region> The regions the offer is available
     * @lazy
     **/
    protected $m_Region;

    /**
     * @param string $title
     */
    public function __construct($title) {
        $this->setTitle($title);
        $this->setAttendanceFees(new ObjectStorage());
        $this->setCategories(new ObjectStorage());
        $this->setRegions(new ObjectStorage());
    }

    /**
     * @param string $dates
     */
    public function setDates($dates)
    {
        $this->dates = $dates;
    }

    /**
     * @return string
     */
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $services
     */
    public function setServices($services)
    {
        $this->services = $services;
    }

    /**
     * @return string
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @param string $teaser
     */
    public function setTeaser($teaser)
    {
        $this->teaser = $teaser;
    }

    /**
     * @return string
     */
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $venue
     */
    public function setVenue($venue)
    {
        $this->venue = $venue;
    }

    /**
     * @return string
     */
    public function getVenue()
    {
        return $this->venue;
    }

    /**
     * @param \Gjo\GjoSjrOffers\Domain\Model\AgeRange
     */
    public function setAgeRange(AgeRange $ageRange = NULL)
    {
        $this->m_AgeRange = $ageRange;
    }

    /**
     * @return \Gjo\GjoSjrOffers\Domain\Model\AgeRange
     */
    public function getAgeRange()
    {
        return $this->m_AgeRange;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function setAttendanceFees(ObjectStorage $attendanceFees) {
        $this->m_AttendanceFee = $attendanceFees;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getAttendanceFees() {
        return $this->m_AttendanceFee;
    }

    /**
     * @param \Gjo\GjoSjrOffers\Domain\Model\AttendanceFee
     */
    public function addAttendanceFee(AttendanceFee $attendanceFee) {
        $this->getAttendanceFees()->attach($attendanceFee);
    }

    /**
     * @param \Gjo\GjoSjrOffers\Domain\Model\AttendanceFee
     */
    public function removeAttendanceFee(AttendanceFee $attendanceFee) {
        $this->getAttendanceFees()->detach($attendanceFee);

    }

    public function removeAllAttendanceFees() {
        $this->setAttendanceFees(new ObjectStorage());
    }

    /**
     * @param \Gjo\GjoSjrOffers\Domain\Model\AttendanceRange
     */
    public function setAttendanceRange(AttendanceRange $attendanceRange = NULL)
    {
        $this->m_AttendanceRange = $attendanceRange;
    }

    /**
     * @return \Gjo\GjoSjrOffers\Domain\Model\AttendanceRange
     */
    public function getAttendanceRange()
    {
        return $this->m_AttendanceRange;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function setCategories(ObjectStorage $categories) {
        $this->m_Category = $categories;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gjo\GjoSjrOffers\Domain\Model\Category>
     */
    public function getCategories() {
//        return clone $this->m_Category; // TODO: auch den Test anpassen
        return $this->m_Category;
    }

    /**
     * @param \Gjo\GjoSjrOffers\Domain\Model\Category
     */
    public function addCategory(Category $category) {
        $this->getCategories()->attach($category);
    }

    /**
     * @param \Gjo\GjoSjrOffers\Domain\Model\Category
     */
    public function removeCategory(Category $category) {
        $this->getCategories()->detach($category);
    }

    /**
     * @param \Gjo\GjoSjrOffers\Domain\Model\Contact $contact
     */
    public function setContact(Contact $contact = NULL) {
        $this->m_Contact = $contact;
    }

    /**
     * @return \Gjo\GjoSjrOffers\Domain\Model\Contact
     */
    public function getContact() {
        return $this->m_Contact;
    }

    public function removeContact() {
        $this->setContact(NULL);
    }

    /**
     * @param \Gjo\GjoSjrOffers\Domain\Model\DateRange
     */
    public function setDateRange(DateRange $dateRange = NULL)
    {
        $this->m_DateRange = $dateRange;
    }

    /**
     * @return \Gjo\GjoSjrOffers\Domain\Model\DateRange
     */
    public function getDateRange()
    {
        return $this->m_DateRange;
    }

    /**
     * @param \Gjo\GjoSjrOffers\Domain\Model\Organization
     */
    public function setOrganization(Organization $organization = NULL) {
        $this->m_Organization = $organization;
    }

    /**
     * @return \Gjo\GjoSjrOffers\Domain\Model\Organization
     */
    public function getOrganization() {
//        if ($this->m_Organization instanceof \TYPO3\CMS\Extbase\Persistence\LazyLoadingProxy) {
//            $this->m_Organization->_loadRealInstance();
//        }
        return $this->m_Organization;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function setRegions(ObjectStorage $regions) {
        $this->m_Region = $regions;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gjo\GjoSjrOffers\Domain\Model\Region>
     */
    public function getRegions() {
        return $this->m_Region;
    }

    /**
     * @param \Gjo\GjoSjrOffers\Domain\Model\Region
     */
    public function addRegion(Region $region) {
        $this->getRegions()->attach($region);
    }

    /**
     * @param \Gjo\GjoSjrOffers\Domain\Model\Region
     */
    public function removeRegion(Region $region) {
        $this->getRegions()->detach($region);
    }
}