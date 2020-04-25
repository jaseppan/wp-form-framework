<?php

/**
 * The public-facing fields functionality of the plugin.
 *
 * Defines the
 *
 * @package    Wp_Form_Framework
 * @subpackage Wp_Form_Framework/public
 * @author     Janne Seppänen <j.v.seppanen@gmail.com>
 */
class Wp_Form_Framework_Fields {

	

	/**
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct() {



	}

	/**
	 * Function for creating input field
	 *
	 * @since    1.0.0
	 */
	public function input_field( $args ) {

		$type = $this->add_field_part('type',$args['type']);
		$id = $this->add_field_part('id',$args['id']);
		$name = $this->add_field_part('name',$args['name']);
		$value = $this->add_field_part('value',$args['value']);
		$attrs = $this->add_attrs($args['attrs']);


		$field = sprintf('<input %s %s %s %s %s>', $type, $id, $name, $value, $attrs );

		return $field;
		
	}

	
	/**
	 * Function for creating select field
	 *
	 * @since    1.0.0
	 */
	public function select_field( $args ) {

		$id = $this->add_field_part('id',$args['id']);
		$name = $this->add_field_part('name',$args['name']);
		$value = $this->add_field_part('value',$args['value']);
		$options = $this->add_options($args['options']);


		$field = sprintf('<select %s %s %s>$s</select>', $id, $name, $value, $options );

		return $field;
		
	}
	
	/**
	 * Function for creating textarea field
	 *
	 * @since    1.0.0
	 */

	public function textarea_field( $args ) {

		$id = $this->add_field_part('id',$args['id']);
		$name = $this->add_field_part('name',$args['name']);
		$value = $this->add_field_part('value',$args['value']);
		$options = $this->add_options($args['options']);


		$field = sprintf('<select %s %s %s>$s</select>', $id, $name, $value, $options );

		return $field;
		
	}

	/**
	 * Function for add type for input field
	 *
	 * @since    1.0.0
	 */

	private function add_field_part( $key, $value ) {

		$part = (isset($type)) ? sprintf('%s="%s"', $key, $value) : '';

		return $part;
		
	}

}