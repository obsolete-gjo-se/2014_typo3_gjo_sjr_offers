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
	 * A status of an organization
	 * @author gregory.jo
	 * @version 1.0
	 * @updated 01-Mai-2014 19:28:05
	 */
class Status extends AbstractEntity{

    /**
     * @var string The title of the status
     **/
    protected $title;

    /**
     * @var string The description of the status.
     **/
    protected $description = '';

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gjo\GjoSjrOffers\Domain\Model\Category> The allowed categories for the organization having the status
     **/
    protected $m_Category;

    /**
     * @param string $title
     */
    public function __construct($title) {
        $this->setTitle($title);
        $this->setCategories(new ObjectStorage());
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
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function setCategories(ObjectStorage $allowedCategories) {
        $this->m_Category = $allowedCategories;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gjo\GjoSjrOffers\Domain\Model\Category>
     */
    public function getCategories() {
//        return clone $this->m_Category; // TODO: auch Test anpassen
        return $this->m_Category;
    }

    /**
     * @param \Gjo\GjoSjrOffers\Domain\Model\Category
     */
    public function addCategory(Category $allowedCategory) {
        $this->getCategories()->attach($allowedCategory);
    }

    /**
     * @param \Gjo\GjoSjrOffers\Domain\Model\Category
     */
    public function removeCategory(Category $allowedCategory) {
        $this->getCategories()->detach($allowedCategory);
    }

    /**
     * @return string
     */
    public function __toString() {
//        return (string)$this->getTitle();
    }
} 