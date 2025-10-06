<?php
/**
 * Template part for displaying the entry header with date box and content box
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 */
?>

<header class="entry-header danh-sach<?php echo esc_attr( $entry_header_classes ); ?>">

	<div class="date-box">
		<span class="day"><?php echo get_the_date( 'd' ); ?></span>
		<span class="month"><?php echo mb_strtoupper( get_the_date( 'M Y' ) ); ?></span>
	</div>

	<div class="content-box">

		<?php
		// Hiển thị category nếu có
		$show_categories = apply_filters( 'twentytwenty_show_categories_in_entry_header', true );
		if ( true === $show_categories && has_category() ) :
			?>
			<div class="entry-categories">
				<span class="screen-reader-text">
					<?php _e( 'Categories', 'twentytwenty' ); ?>
				</span>
				<div class="entry-categories-inner">
					<?php the_category( ' ' ); ?>
				</div>
			</div>
		<?php endif; ?>

		<?php
		// Tiêu đề
		if ( is_singular() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			the_title(
				'<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">',
				'</a></h2>'
			);
		}
		?>

		<?php
		// Excerpt
		if ( has_excerpt() ) :
			?>
			<p class="entry-excerpt"><?php the_excerpt(); ?></p>
		<?php endif; ?>

		<?php
		// Meta
		if ( is_singular() ) {
    twentytwenty_the_post_meta( get_the_ID(), 'single-top' );
}
		?>

	</div><!-- .content-box -->

</header><!-- .entry-header -->

<style>
	.entry-header.danh-sach {
    display: flex;
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
.entry-header.danh-sach .content-box h2.entry-title {
    font-size: 18px;
    font-weight: bold;
    margin: 0 0 5px;
    color: #004b91;
}

.entry-header.danh-sach .content-box h1.entry-title a,
.entry-header.danh-sach .content-box h2.entry-title a {
    text-decoration: none;
    color: inherit;
}

.entry-header.danh-sach .content-box h1.entry-title a:hover,
.entry-header.danh-sach .content-box h2.entry-title a:hover {
    text-decoration: underline;
}

.entry-header.danh-sach .content-box .entry-excerpt {
    margin: 0;
    color: #555;
    font-size: 14px;
}

</style>