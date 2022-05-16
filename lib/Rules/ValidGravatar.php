<?php

namespace AntispamBee\Rules;

use AntispamBee\Helpers\DataHelper;
use AntispamBee\Helpers\ItemTypeHelper;
use AntispamBee\Interfaces\Controllable;
use AntispamBee\Interfaces\Verifiable;

class ValidGravatar implements Verifiable, Controllable {

	use InitRule;
	use IsActive;

	public static function verify( $item ) {
		$email = DataHelper::get_values_where_key_contains( [ 'email' ], $item );
		if ( empty( $email ) ) {
			return 0;
		}
		$email = array_shift( $email );

		$response = wp_safe_remote_get(
			sprintf(
				'https://www.gravatar.com/avatar/%s?d=404',
				md5( strtolower( trim( $email ) ) )
			)
		);

		if ( is_wp_error( $response ) ) {
			return 0;
		}

		if ( wp_remote_retrieve_response_code( $response ) === 200 ) {
			return -1;
		}

		return 0;
	}

	public static function get_name() {
		return __( 'Valid Gravatar', 'antispam-bee' );
	}

	public static function get_weight() {
		return 1;
	}

	public static function get_slug() {
		return 'asb-valid-gravatar';
	}

	public static function is_final() {
		return false;
	}

	public static function get_label() {
		return __( 'Trust commenters with a Gravatar', 'antispam-bee' );
	}

	public static function get_description() {
		$link1 = sprintf(
			'<a href="%s" target="_blank" rel="noopener noreferrer">',
			esc_url(
				__( 'https://antispambee.pluginkollektiv.org/documentation/#trust-commenters-with-a-gravatar', 'antispam-bee' ),
				'https'
			)
		);
		return sprintf(
		/* translators: 1: opening <a> tag with link to documentation. 2: closing </a> tag */
			esc_html__( 'Check if commenter has a Gravatar image. Please note the %1$sprivacy notice%2$s for this option.', 'antispam-bee' ),
			wp_kses_post( $link1 ),
			'</a>'
		);
	}

	public static function get_options() {
		return null;
	}

	public static function get_supported_types() {
		return [ ItemTypeHelper::COMMENT_TYPE, ItemTypeHelper::TRACKBACK_TYPE ];
	}
}
