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
	 * An Organization
	 * @author gregory.jo
	 * @version 1.0
	 * @updated 01-Mai-2014 14:03:08
	 */
class Organization extends AbstractEntity
{
    /**
     * @var string The address of the contact
     **/
    protected $address = '';

    /**
     * @var string The description of the organization
     **/
    protected $description = '';

    /**
     * @var string The email address of the homepage of the contact
     **/
    protected $email = '';

    /**
     * @var string The fax number of the contact
     **/
    protected $fax = '';

    /**
     * @var string An image (logo) of the organization
     **/
    protected $logo = '';

    /**
     * @var string The name of the organization
     **/
    protected $name = '';

    /**
     * @var string The telephone number of the contact
     **/
    protected $phone = '';

    /**
     * @var string The url of the homepage of the contact
     **/
    protected $url = '';

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gjo\GjoSjrOffers\Domain\Model\Contact> The contacts of the organization
     * @lazy
     **/
    protected $m_Contact;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gjo\GjoSjrOffers\Domain\Model\Offer> The offers of the organization
     * @lazy
     * @cascade remove
     **/
    protected $m_Offer;

    /**
     * @var \Gjo\GjoSjrOffers\Domain\Model\OrgaAdmin The administrator of the organization.
     * @lazy
     **/
    protected $m_OrgaAdmin;

    /**
     * @var \Gjo\GjoSjrOffers\Domain\Model\Status The status of the organization
     **/
    protected $m_Status;

    public function __construct($name = NULL) {
        $this->setName($name);
        $this->setContact(new ObjectStorage());
        $this->setOffer(new ObjectStorage());
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
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
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $fax
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param string $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $contact
     */
    public function setContact(ObjectStorage $contact)
    {
        $this->m_Contact = $contact;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gjo\GjoSjrOffers\Domain\Model\Contact>
     */
    public function getContact()
    {
        return $this->m_Contact;
    }

    /**
     * @param \Gjo\GjoSjrOffers\Domain\Model\Contact $contact
     */
    public function addContact(Contact $contact) {
        $this->getContact()->attach($contact);
    }

    /**
     * @param \Gjo\GjoSjrOffers\Domain\Model\Contact $contact
     */
    public function removeContact(Contact $contact) {
        $this->getContact()->detach($contact);
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gjo\GjoSjrOffers\Domain\Model\Contact>
     */
    public function getAllContacts() {
        $contacts = $this->getContact();

        foreach ($this->getOffer() as $offer) {
            $contact = $offer->getContact();
            if (is_object($contact)) {
                $contacts->attach($contact);
            }
        }
        return $contacts;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $offer
     */
    public function setOffer(ObjectStorage $offer) {
        $this->m_Offer = $offer;
    }

    /**
     *@return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gjo\GjoSjrOffers\Domain\Model\Offer>
     */
    public function getOffer()
    {
        return $this->m_Offer;
    }

    /**
     * @param \Gjo\GjoSjrOffers\Domain\Model\Offer $offer
     */
    public function addOffer(Offer $offer) {
        $this->getOffer()->attach($offer);
    }

    /**
     * @param \Gjo\GjoSjrOffers\Domain\Model\Offer $offer
     */
    public function removeOffer(Offer $offer) {
        $this->getOffer()->detach($offer);
    }

    public function removeAllOffers() {
        $this->setOffer(new ObjectStorage());
    }

    /**
     * @return  \Gjo\GjoSjrOffers\Domain\Model\OrgaAdmin
     */
    public function getOrgaAdmin() {
//        // TODO: LazyLoadingProxy gibt es nicht!!
//        if ($this->m_OrgaAdmin instanceof \TYPO3\CMS\Extbase\Persistence\LazyLoadingProxy) {
//            $this->m_OrgaAdmin->_loadRealInstance();
//        }
        return $this->m_OrgaAdmin;
    }

    /**
     * @param \Gjo\GjoSjrOffers\Domain\Model\Status $status
     */
    public function setStatus(Status $status) {
        $this->m_Status = $status;
    }

    /**
     * @return \Gjo\GjoSjrOffers\Domain\Model\Status $status
     */
    public function getStatus() {
        return $this->m_Status;
    }


}