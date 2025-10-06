<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$entry_header_classes = '';

if ( is_singular() ) {
	$entry_header_classes .= ' header-footer-group';
}

?>

<header class="entry-header has-text-align-center<?php echo esc_attr( $entry_header_classes ); ?>">

	<div class="entry-header-inner section-inner medium">
	<!-- them moi date box -->
	<div class="date-box">
			<span class="day"><?php echo get_the_date('d'); ?></span>
			<span class="month"><?php echo mb_strtoupper( get_the_date('F Y') ); ?></span>
		</div>

		<div class="content-box">

		<?php
		/**
		 * Allow child themes and plugins to filter the display of the categories in the entry header.
		 *
		 * @since Twenty Twenty 1.0
		 *
		 * @param bool Whether to show the categories in header. Default true.
		 */
		$show_categories = apply_filters( 'twentytwenty_show_categories_in_entry_header', true );

		if ( true === $show_categories && has_category() ) {
			?>

			<div class="entry-categories">
				<span class="screen-reader-text">
					<?php
					/* translators: Hidden accessibility text. */
					_e( 'Categories', 'twentytwenty' );
					?>
				</span>
				<div class="entry-categories-inner">
					<?php the_category( ' ' ); ?>
				</div><!-- .entry-categories-inner -->
			</div><!-- .entry-categories -->

			<?php
		}

		if ( is_singular() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			the_title( '<h5 class="entry-title heading-size-1"><a href="' . esc_url( get_permalink() ) . '">', '</a></h5>' );
		}

		$intro_text_width = '';

		if ( is_singular() ) {
			$intro_text_width = ' small';
		} else {
			$intro_text_width = ' thin';
		}

		if ( has_excerpt() && is_singular() ) {
			?>

			<div class="intro-text section-inner max-percentage<?php echo $intro_text_width; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>">
				<?php the_excerpt(); ?>
			</div>

			<?php
		}

		// Default to displaying the post meta.
		twentytwenty_the_post_meta( get_the_ID(), 'single-top' );
		?>

	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->

<style>
	.entry-header.danh-sach {
    display: flex;
    align-items: flex-start;
    border: 1px solid #ddd;
    margin-bottom: 20px;
    background: #fff;
    padding: 15px;
}

.entry-header.danh-sach .date-box {
    width: 80px;
    text-align: center;
    border-right: 1px solid #ccc;
    margin-right: 15px;
    font-family: Arial, sans-serif;
}

.entry-header.danh-sach .date-box .day {
    font-size: 32px;
    font-weight: bold;
    color: #333;
    display: block;
    line-height: 1;
}

.entry-header.danh-sach .date-box .month {
    font-size: 12px;
    text-transform: uppercase;
    color: #777;
    display: block;
    margin-top: 5px;
}

.entry-header.danh-sach .content-box {
    flex: 1;
}

.entry-header.danh-sach .content-box h1.entry-title,
.entry-header.danh-sach .content-box h5.entry-title {
    font-size: 18px;
    font-weight: bold;
    margin: 0 0 5px;
    color: #004b91;
}

.entry-header.danh-sach .content-box h1.entry-title a,
.entry-header.danh-sach .content-box h5.entry-title a {
    text-decoration: none;
    color: inherit;
}

.entry-header.danh-sach .content-box h1.entry-title a:hover,
.entry-header.danh-sach .content-box h5.entry-title a:hover {
    text-decoration: underline;
}

.entry-header.danh-sach .content-box .entry-excerpt {
    margin: 0;
    color: #555;
    font-size: 14px;
}

</style>