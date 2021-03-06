<?php
/**
 * HTML object for the root HTML element.
 *
 * PHP 5
 *
 * Cake Toolkit (http://caketoolkit.org)
 * Copyright 2012, James Watts (http://github.com/jameswatts)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2012, James Watts (http://github.com/jameswatts)
 * @link          http://caketoolkit.org Cake Toolkit
 * @package       Ctk.View.Factory.Html.Objects
 * @since         CakePHP(tm) v 2.2.0.0
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('HtmlElement', 'Ctk.View/Factory/Html/Objects');

/**
 * Creates an object representing the root HTML element in HTML.
 *
 * @package       Ctk.Factory
 */
class HtmlHtml extends HtmlElement {

/**
 * The template to use for this object.
 *
 * @var string The name of the template.
 */
	protected $_template = 'html';

/**
 * The configuration parameters used by the template for this object.
 *
 * @var array The template configuration parameters.
 */
	protected $_params = array(
		'manifest' => null,
		'xmlns' => null
	);

/**
 * The type of element this object represents.
 *
 * @var string The element type.
 */
	protected $_nodeType = 'html';

/**
 * Determines if the node can have a parent.
 *
 * @var boolean Set to FALSE to block adding to other nodes.
 */
	protected $_allowParent = false;

/**
 * Limits the children allowed on this node.
 *
 * @var array List of children allowed by name, or NULL for no limit.
 */
	protected $_limitChildren = array('HtmlHead', 'HtmlBody');

/**
 * Determines if the node accepts events.
 *
 * @var boolean Set to FALSE to block adding events.
 */
	protected $_allowEvents = false;
}

