<?php
/**
 * Register the dashboard widgets.
 *
 * @package AntispamBee\Admin
 */

namespace AntispamBee\Admin;

use AntispamBee\GeneralOptions\Statistics;
use AntispamBee\Helpers\DashboardHelper;
use AntispamBee\Helpers\Settings;

/**
 * Class DashboardWidgets
 */
class DashboardWidgets {

	/**
	 * Initialize the dashboard widgets.
	 */
	public static function init() {
		if ( DashboardHelper::is_dashboard_page() ) {
			add_action( 'antispam_bee_count', [ __CLASS__, 'the_spam_count' ] );
			add_filter( 'dashboard_glance_items', [ __CLASS__, 'add_dashboard_count' ] );
			add_action( 'wp_dashboard_setup', [ __CLASS__, 'add_dashboard_chart' ] );
		}
	}

	/**
	 * Display the spam counter on the dashboard
	 *
	 * @param array $items Initial array with dashboard items.
	 *
	 * @return  array $items  Merged array with dashboard items.
	 * @since  0.1
	 * @since  2.6.5
	 */
	public static function add_dashboard_count( $items = array() ) {
		if ( ! current_user_can( 'manage_options' ) || ! Settings::get_option( Statistics::get_option_name( Statistics::DASHBOARD_CHART_OPTION ) ) ) {
			return $items;
		}

		echo '<style>#dashboard_right_now .ab-count:before {content: "\f117"}</style>';

		$items[] = '<span class="ab-count">' . esc_html(
				sprintf(
				// translators: The number of spam comments Antispam Bee blocked so far.
					__( '%s Blocked', 'antispam-bee' ),
					self::get_spam_count()
				)
			) . '</span>';

		return $items;
	}

	/**
	 * Initialize the dashboard chart
	 *
	 * @since  1.9
	 * @since  2.5.6
	 */
	public static function add_dashboard_chart() {
		if ( ! current_user_can( 'publish_posts' ) || ! Settings::get_option( Statistics::get_option_name( Statistics::DASHBOARD_CHART_OPTION ) ) ) {
			return;
		}

		wp_add_dashboard_widget(
			'ab_widget',
			'Antispam Bee',
			[ __CLASS__, 'show_spam_chart' ]
		);
	}

	/**
	 * Print dashboard html
	 *
	 * @since  1.9.0
	 * @since  2.5.8
	 */
	public static function show_spam_chart() {
		$items = (array) Settings::get_option( 'daily_stats', '' );

		if ( empty( $items ) ) {
			echo sprintf(
				'<div id="ab_chart"><p>%s</p></div>',
				esc_html__( 'No data available.', 'antispam-bee' )
			);

			return;
		}

		ksort( $items, SORT_NUMERIC );

		$html = "<table id=ab_chart_data>\n";

		$html .= "<tfoot><tr>\n";
		foreach ( $items as $date => $count ) {
			$html .= '<th>' . date_i18n( 'j. F Y', $date ) . "</th>\n";
		}
		$html .= "</tr></tfoot>\n";

		$html .= "<tbody><tr>\n";
		foreach ( $items as $date => $count ) {
			$html .= '<td>' . (int) $count . "</td>\n";
		}
		$html .= "</tr></tbody>\n";

		$html .= "</table>\n";

		echo wp_kses_post( '<div id="ab_chart">' . $html . '</div>' );
	}

	/**
	 * Return the number of spam comments
	 *
	 * @since  0.1
	 * @since  2.4
	 */
	private static function get_spam_count() {
		$count = Settings::get_option( 'spam_count', '' );

		return ( get_locale() === 'de_DE' ? number_format( $count, 0, '', '.' ) : number_format_i18n( $count ) );
	}

	/**
	 * Output the number of spam comments
	 *
	 * @since  0.1
	 * @since  2.4
	 */
	public static function the_spam_count() {
		echo esc_html( self::get_spam_count() );
	}
}
