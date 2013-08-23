<?php

/*
 *	Plugin Name: Eventick Shortcodes
 *	Plugin URI: http://eventick.com.br
 *	Description: Integre o Eventick ao seu website e comece já a vender ingressos para seus eventos.
 *	Version: 1.0
 *	Author: Cadu de Castro Alves
 *	Author URI: http://twitter.com/castroalves
 */

/*
Eventick Shortcodes (Wordpress Plugin)
Copyright (C) 2013 Cadu de Castro Alves
Contact me at http://twitter.com/castroalves

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

//tell wordpress to register the demolistposts shortcode
add_shortcode("eventick", "eventick_shortcode");

function eventick_shortcode( $atts, $content = null ) {

	extract( shortcode_atts( array(
		'width' => '100%',
		'height' => '280px',
		'url' => '',
		'type' => 'tickets',
		'size' => 'm',
		'label' => 'vaga'
	), $atts ) );

	$content = ( $content != null ) ? $content : 'Compre seu ingresso no Eventick';

	$arr_size = array(
		'p' => 'small',
		'm' => 'medium',
		'g' => 'big'
	);

	$html = '';
	if( $type == 'tickets' ) {
		$html  = '<iframe ';
		$html .= 'src="' . untrailingslashit( $url ) . '/embedded" ';
		$html .= 'frameborder="0" ';
		$html .= 'height="' . $height . '" '; 
		$html .= 'width="'. $width .'" '; 
		$html .= 'vspace="0" '; 
		$html .= 'hspace="0" '; 
		$html .= 'marginheight="5" '; 
		$html .= 'marginwidth="5" '; 
		$html .= 'scrolling="auto" '; 
		$html .= 'allowtransparency="true">'; 
		$html .= '</iframe>';
	}

	if( $type == 'button' ) {
		$html  = '<a href="' . untrailingslashit( $url ) . '" target="_blank" ';
		$html .= 'title="' . $content . '"> ';
		$html .= '<img alt="' . $content . '" ';
		$html .= 'src="http://www.eventick.com.br/assets/buttons/' . $label . '-' . $arr_size[ strtolower($size) ] . '.png">';
		$html .= '</a>';
	}

	return $html;

}

?>