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
 * A Category
 *
 * @author gregory.jo
 * @version 1.0
 * @updated 30-Apr-2014 08:34
 */
class Category extends AbstractEntity {

    /**
     * @var string The description of the category.
     **/
    protected $description = '';

    /**
     * @var boolean Flag, indicating if the category is internal.
     **/
    protected $isInternal = FALSE;

    /**
     * @var string The title of the category
     **/
    protected $title;

    /**
     * @param string $title
     */
    public function __construct($title = NULL) {
        $this->setTitle($title);
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
     * @param boolean $isInternal
     */
    public function setIsInternal($isInternal)
    {
        $this->isInternal = (bool)$isInternal;
    }

    /**
     * @return boolean
     */
    public function getIsInternal()
    {
        return $this->isInternal;
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
     * @return string The string representation of the category
     */
    public function __toString() {
//        return (string)$this->getTitle();
    }



} 