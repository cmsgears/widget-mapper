<?php
/**
 * This file is part of CMSGears Framework. Please view License file distributed
 * with the source code for license details.
 *
 * @link https://www.cmsgears.org/
 * @copyright Copyright (c) 2015 VulpineCode Technologies Pvt. Ltd.
 */

namespace cmsgears\widgets\mapper;

// Yii Imports
use yii\helpers\Html;

// CMG Imports
use cmsgears\core\common\config\CoreGlobal;

/**
 * MapperSuggest maps categories to models using auto-suggest.
 *
 * @since 1.0.0
 */
class MapperSuggest extends \cmsgears\core\common\base\Widget {

	// Variables ---------------------------------------------------

	// Globals -------------------------------

	// Constants --------------

	// Public -----------------

	// Protected --------------

	// Variables -----------------------------

	// Public -----------------

	// Type to be used to search mapper models.
	public $type = CoreGlobal::TYPE_SYSTEM;

	public $parentType = null;

	// The model and column
	public $model;
	public $column;
	public $mapping;

	// Label for input field
	public $label;

	// Disable the searching and mapping.
	public $disabled = false;

	public $template = 'suggest';

	public $mapperClass = 'mapper mapper-inline mapper-auto mapper-auto-items';

	// Application
	public $app = 'core';

	// Controller where mapping request need to be triggered
	public $controller	= 'modelMapper';

	// Controller action to handle the search request
	public $action		= 'autoSearch';

	// Explicit URL to handle the controller search action request
	public $actionUrl	= 'core/category/auto-search';

	// Controller action to handle the mapping request
	public $mapAction	= 'mapItem';

	// Explicit URL to handle the controller mapping action request
	public $mapActionUrl	= null;

	// Controller action to handle the delete request
	public $deleteAction	= 'deleteItem';

	// Explicit URL to handle the controller delete action request
	public $deleteActionUrl	= null;

	// Protected --------------

	// Private ----------------

	// Traits ------------------------------------------------------

	// Constructor and Initialisation ------------------------------

	// Instance methods --------------------------------------------

	// Yii interfaces ------------------------

	// Yii parent classes --------------------

	// yii\base\Widget --------

	public function run() {

		// Configure parent type
		$this->parentType = isset( $this->parentType ) ? $this->parentType : $this->type;

		return $this->renderWidget();
	}

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

	// MapperSuggest -------------------------

	public function renderWidget( $config = [] ) {

		$widgetHtml = $this->render( $this->template, [ 'widget' => $this ] );

		if( $this->wrap ) {

			return Html::tag( $this->wrapper, $widgetHtml, $this->options );
		}

		return $widgetHtml;
	}

}
