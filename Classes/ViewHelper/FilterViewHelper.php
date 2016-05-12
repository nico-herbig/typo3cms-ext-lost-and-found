<?php
namespace Systemmacher\LostAndFound\ViewHelper;

/* PROTECTED REGION ID(php.class.own.use.imports._18_0_3_16b8041b_1427145564420_830315_5916) ENABLED START */
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
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class FilterViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{

    /**
     * @var \Systemmacher\LostAndFound\Domain\Repository\FindRepository
     * @inject
     */
    protected $findRepository;

    /**
     * Iterates through elements of $category and renders child nodes.
     *
     * @param \Systemmacher\LostAndFound\Domain\Model\Category $category
     * @param string $as
     * @return string The rendered string.
     */
    public function render(\Systemmacher\LostAndFound\Domain\Model\Category $category, $as = 'finds')
    {
        /* PROTECTED REGION ID(php.operation.own.code._18_0_3_16b8041b_1427145649938_971544_5946) ENABLED START */
		$finds = $this->findRepository->findByCategory($category);
		
		$this->templateVariableContainer->add($as, $finds);
		$output = $this->renderChildren();
		$this->templateVariableContainer->remove($as);
		
		return $output;
		/* PROTECTED REGION END */
    }

    /* PROTECTED REGION ID(php.class.own.code._18_0_3_16b8041b_1427145564420_830315_5916) ENABLED START */
	/* PROTECTED REGION END */

}
