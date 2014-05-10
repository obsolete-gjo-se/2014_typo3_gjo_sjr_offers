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

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

	/**
	 * An amount
	 * @author gregory.jo
	 * @version 1.0
	 * @updated 01-Mai-2014 19:45:19
	 */
class Demand extends AbstractEntity
{

    /**
     * @var int The age criteria of the demand
     **/
    protected $age;

    /**
     * @var string A search word
     **/
    protected $searchWord = '';

    /**
     * @var \Gjo\GjoSjrOffers\Domain\Model\Organization The demanded organization
     **/
    protected $m_Organization;

    /**
     * @var \Gjo\GjoSjrOffers\Domain\Model\Category The demanded category
     **/
    protected $m_Category;

    /**
     * @var \Gjo\GjoSjrOffers\Domain\Model\Region The demanded region
     **/
    protected $m_Region;

    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param string $searchWord
     */
    public function setSearchWord($searchWord)
    {
        $this->searchWord = $searchWord;
    }

    /**
     * @return string
     */
    public function getSearchWord()
    {
        return $this->searchWord;
    }

    /**
     * @param \Gjo\GjoSjrOffers\Domain\Model\Organization $organization
     */
    public function setOrganization(Organization $organization = NULL)
    {
        $this->m_Organization = $organization;
    }

    /**
     * @return \Gjo\GjoSjrOffers\Domain\Model\Organization
     */
    public function getOrganization()
    {
        return $this->m_Organization;
    }

    /**
     * @param \Gjo\GjoSjrOffers\Domain\Model\Category
     */
    public function setCategory(Category $category = NULL) {
        $this->m_Category = $category;
    }

    /**
     * @return \Gjo\GjoSjrOffers\Domain\Model\Category
     */
    public function getCategory() {
        return $this->m_Category;
    }

    /**
     * @param \Gjo\GjoSjrOffers\Domain\Model\Region
     * @return void
     */
    public function setRegion(Region $region = NULL) {
        $this->m_Region = $region;
    }

    /**
     * @return \Gjo\GjoSjrOffers\Domain\Model\Region
     */
    public function getRegion() {
        return $this->m_Region;
    }


}