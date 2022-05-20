<?php
use StrategicPlan\Theme\Includes as Includes;

$obj              = ucfwp_get_queried_object();
$title            = ucfwp_get_header_title( $obj );
$subtitle         = ucfwp_get_header_subtitle( $obj );
$h1               = ucfwp_get_header_h1_option( $obj );
$h1_elem          = ucfwp_get_header_h1_elem( $obj );
$title_elem       = ( $h1 === 'title' ) ? $h1_elem : 'span';
$subtitle_elem    = ( $h1 === 'subtitle' ) ? $h1_elem : 'p';
$title_classes    = 'text-inverse display-3 font-condensed text-uppercase text-shadow-soft';
$subtitle_classes = 'pt-2 text-inverse font-size-lg text-shadow-soft';
$breadcrumb       = Includes\Header_Functions\get_breadcrumb();
?>

<?php if ( $title ): ?>
<div class="header-content-inner align-self-center py-5 pb-sm-4 mt-sm-5">
	<div class="container">
		<div class="row">
			<div class="col-10 col-sm-11 col-md-10 col-lg-7 col-xl-6">
				<?php echo $breadcrumb; ?>

				<<?php echo $title_elem; ?> class="<?php echo $title_classes; ?>">
					<?php echo $title; ?>
				</<?php echo $title_elem; ?>>

				<?php if ( $subtitle ): ?>
					<<?php echo $subtitle_elem; ?> class="<?php echo $subtitle_classes; ?>">
						<?php echo $subtitle; ?>
					</<?php echo $subtitle_elem; ?>>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
