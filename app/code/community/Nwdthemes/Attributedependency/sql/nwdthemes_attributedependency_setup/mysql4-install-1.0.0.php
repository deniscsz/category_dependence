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

$this->startSetup();

$this->addAttribute('catalog_category', 'dependency', array(

	'group' => 'Dependency Sample',
	'position' => 100,

	'type' => 'int',
	'input' => 'select',
	'source'   => 'eav/entity_attribute_source_boolean',
	'input_renderer'=> 'attributedependency/adminhtml_catalog_category_dependency',

	'label' => 'Dependency sample',

	'backend' => '',
	'visible' => 1,
	'required' => 0,
	'visible_on_front' => 1,
	'wysiwyg_enabled' => 1,
	'is_html_allowed_on_front'	=> 1,
	'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,

));

$this->addAttribute('catalog_category', 'dependency_text', array(

	'group' => 'Dependency Sample',
	'position' => 120,

	'type' => 'text',
	'input' => 'textarea',

	'label' => 'Dependency HTML',

	'backend' => '',
	'visible' => 1,
	'required' => 0,
	'visible_on_front' => 1,
	'wysiwyg_enabled' => 1,
	'is_html_allowed_on_front'	=> 1,
	'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,

));

//reindex new attributes
$process = Mage::getModel('index/indexer')->getProcessByCode('catalog_category_flat');
$process->reindexAll();

$this->endSetup();