<?php
namespace Systemmacher\LostAndFound\Domain\Model;

/* PROTECTED REGION ID(php.class.own.use.imports._16_9_8a7027a_1297194790786_915555_1655) ENABLED START */
/* PROTECTED REGION END */

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 - 2016 Nico Herbig
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
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * A find which is lost by a person and found by another person.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Find extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * The find number of the find.
     *
     * @var string
     */
    protected $number;

    /**
     * The name of the find.
     *
     * @var string
     */
    protected $name;

    /**
     * The date of finding of the find.
     *
     * @var \DateTime
     */
    protected $dateOfFinding;

    /**
     * The place of finding of the find.
     *
     * @var string
     */
    protected $placeOfFinding;

    /**
     * The category of the find.
     *
     * @var \Systemmacher\LostAndFound\Domain\Model\Category
     */
    protected $category;

    /**
     * Get accessor for number.
     *
     * @return string The find number of the find.
     */
    public function getNumber()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._17_0_6_8a7027a_1371151660454_327526_2590) START */
        return $this->number;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for number.
     *
     * @param string $number The find number of the find.
     * @return void
     */
    public function setNumber($number)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._17_0_6_8a7027a_1371151660454_327526_2590) ENABLED START */
        if ($number !== '') {
            $this->number = $number;
        }
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for name.
     *
     * @return string The name of the find.
     */
    public function getName()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._16_9_8a7027a_1297194882955_681374_1735) START */
        return $this->name;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for name.
     *
     * @param string $name The name of the find.
     * @return void
     */
    public function setName($name)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._16_9_8a7027a_1297194882955_681374_1735) ENABLED START */
        if ($name !== '') {
            $this->name = $name;
        }
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for dateOfFinding.
     *
     * @return \DateTime The date of finding of the find.
     */
    public function getDateOfFinding()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._16_9_8a7027a_1297194886910_832299_1741) START */
        return $this->dateOfFinding;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for dateOfFinding.
     *
     * @param \DateTime $dateOfFinding The date of finding of the find.
     * @return void
     */
    public function setDateOfFinding(\DateTime $dateOfFinding)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._16_9_8a7027a_1297194886910_832299_1741) ENABLED START */
        $this->dateOfFinding = $dateOfFinding;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for placeOfFinding.
     *
     * @return string The place of finding of the find.
     */
    public function getPlaceOfFinding()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._17_0_6_8a7027a_1371633069778_994285_2062) START */
        return $this->placeOfFinding;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for placeOfFinding.
     *
     * @param string $placeOfFinding The place of finding of the find.
     * @return void
     */
    public function setPlaceOfFinding($placeOfFinding)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._17_0_6_8a7027a_1371633069778_994285_2062) ENABLED START */
        if ($placeOfFinding !== '') {
            $this->placeOfFinding = $placeOfFinding;
        }
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for category.
     *
     * @return \Systemmacher\LostAndFound\Domain\Model\Category The category of the find.
     */
    public function getCategory()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._16_9_8a7027a_1297195352189_179879_2445)ENABLED  START */
        return $this->category;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for category.
     *
     * @param \Systemmacher\LostAndFound\Domain\Model\Category $category The category of the find.
     * @return void
     */
    public function setCategory(\Systemmacher\LostAndFound\Domain\Model\Category $category)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._16_9_8a7027a_1297195352189_179879_2445) ENABLED START */
        $this->category = $category;
        /* PROTECTED REGION END */
    }

    /* PROTECTED REGION ID(php.class.own.code._16_9_8a7027a_1297194790786_915555_1655) ENABLED START */
    /* PROTECTED REGION END */

}
