<?php

/**
 * Nwdthemes Attributedependency Extension
 *
 * @package     Attributedependency
 * @author      Nwdthemes <mail@nwdthemes.com>
 * @link        http://nwdthemes.com/
 * @copyright   Copyright (c) 2015. Nwdthemes
 * @license     http://en.wikipedia.org/wiki/MIT_License
 */

class Nwdthemes_Attributedependency_Block_Adminhtml_Catalog_Category_Dependency extends Varien_Data_Form_Element_Select
{
	/**
	 * Retrieve Element HTML fragment
	 *
	 * @return string
	 */
	public function getElementHtml()
	{
		$this->setData('after_element_html', sprintf('<script>new categoryAttributeDependency("%s");</script>', $this->getHtmlId()));
		return parent::getElementHtml();
	}
}
