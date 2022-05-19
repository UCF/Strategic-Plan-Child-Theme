<?php
/**
 * Includes functions that handle customization and/or
 * overrides of headers from the UCF WordPress Theme.
 **/
namespace StrategicPlan\Theme\Includes\Header_Functions;


/**
 * Returns markup for a breadcrumb back to the homepage, for use above
 * page header title+subtitles.
 *
 * Copied from Coronavirus-Child-Theme.
 *
 * @since 1.0.0
 * @author Jo Dickson
 * @return string
 */
function get_breadcrumb() {
	$retval = '';
	if ( ! is_front_page() ) {
		$breadcrumb_text = trim( wptexturize( get_theme_mod( 'header_breadcrumb_text' ) ) );

		if ( $breadcrumb_text ) {
			ob_start();
		?>
			<nav aria-label="Home breadcrumb">
				<a class="badge badge-primary badge-lg font-size-sm mb-4" href="<?php echo get_home_url(); ?>">
					<?php echo $breadcrumb_text; ?>
				</a>
			</nav>
		<?php
			$retval = trim( ob_get_clean() );
		}
	}
	return $retval;
}
