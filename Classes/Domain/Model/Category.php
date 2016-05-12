<?php
namespace Systemmacher\LostAndFound\Domain\Model;

/* PROTECTED REGION ID(php.class.own.use.imports._16_9_8a7027a_1297194795235_681189_1679) ENABLED START */
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
 * A category to which finds can be assigned.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Category extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * The icon of the category.
     *
     * @var string
     */
    protected $icon;

    /**
     * The name of the category.
     *
     * @var string
     */
    protected $name;

    /**
     * Get accessor for icon.
     *
     * @return string The icon of the category.
     */
    public function getIcon()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_3_16b8041b_1427122821072_480002_5689) START */
        return $this->icon;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for icon.
     *
     * @param string $icon The icon of the category.
     * @return void
     */
    public function setIcon($icon)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_3_16b8041b_1427122821072_480002_5689) ENABLED START */
        $this->icon = $icon;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for name.
     *
     * @return string The name of the category.
     */
    public function getName()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._16_9_8a7027a_1297194910826_608649_1757) START */
        return $this->name;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for name.
     *
     * @param string $name The name of the category.
     * @return void
     */
    public function setName($name)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._16_9_8a7027a_1297194910826_608649_1757) ENABLED START */
        if ($name !== '') {
            $this->name = $name;
        }
        /* PROTECTED REGION END */
    }

    /* PROTECTED REGION ID(php.class.own.code._16_9_8a7027a_1297194795235_681189_1679) ENABLED START */
    /* PROTECTED REGION END */

}
