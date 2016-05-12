<?php
namespace Systemmacher\LostAndFound\Domain\Repository;

/* PROTECTED REGION ID(php.class.own.use.imports._16_9_8a7027a_1297250863949_852308_2394) ENABLED START */
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
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
 * A repository for finds.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class FindRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     */
    public function __construct()
    {
        /* PROTECTED REGION ID(php.constructor.own.code._18_0_5_16b8041b_1462541347808_168677_5542) ENABLED START */
        $this->defaultOrderings = [
            'dateOfFinding' => QueryInterface::ORDER_DESCENDING,
        ];
        /* PROTECTED REGION END */
    }

    /* PROTECTED REGION ID(php.class.own.code._16_9_8a7027a_1297250863949_852308_2394) ENABLED START */
    /* PROTECTED REGION END */

}
