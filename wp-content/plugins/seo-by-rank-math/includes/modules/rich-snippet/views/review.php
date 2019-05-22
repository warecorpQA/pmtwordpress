<?php
/**
 * Metabox - Review Rich Snippet
 *
 * @package    RankMath
 * @subpackage RankMath\RichSnippet
 */

$review = [ [ 'rank_math_rich_snippet', 'review' ] ];

$cmb->add_field([
	'id'         => 'rank_math_snippet_review_worst_rating',
	'name'       => esc_html__( 'Worst Rating', 'rank-math' ),
	'type'       => 'text',
	'default'    => 1,
	'dep'        => $review,
	'attributes' => [ 'type' => 'number' ],
]);

$cmb->add_field([
	'id'         => 'rank_math_snippet_review_best_rating',
	'name'       => esc_html__( 'Best Rating', 'rank-math' ),
	'type'       => 'text',
	'default'    => 5,
	'dep'        => $review,
	'attributes' => [ 'type' => 'number' ],
]);

$cmb->add_field([
	'id'         => 'rank_math_snippet_review_rating_value',
	'name'       => esc_html__( 'Rating Value', 'rank-math' ),
	'type'       => 'text',
	'dep'        => $review,
	'attributes' => [
		'type' => 'number',
		'min'  => 1,
		'max'  => 5,
		'step' => 0.1,
	],
]);

$cmb->add_field([
	'id'      => 'rank_math_snippet_review_location',
	'name'    => esc_html__( 'Review Location', 'rank-math' ),
	'type'    => 'select',
	'dep'     => $review,
	'classes' => 'nob',
	'default' => 'bottom',
	'options' => [
		'bottom' => esc_html__( 'Below Content', 'rank-math' ),
		'top'    => esc_html__( 'Above Content', 'rank-math' ),
		'both'   => esc_html__( 'Above & Below Content', 'rank-math' ),
		'custom' => esc_html__( 'Custom (use shortcode)', 'rank-math' ),
	],
]);

$cmb->add_field([
	'id'         => 'rank_math_snippet_review_shortcode',
	'name'       => ' ',
	'type'       => 'text',
	'classes'    => 'nopt',
	'desc'       => esc_html__( 'Copy & paste this shortcode in the content.', 'rank-math' ),
	'dep'        => [
		'relation' => 'and',
		[ 'rank_math_rich_snippet', 'review' ],
		[ 'rank_math_snippet_review_location', 'custom' ],
	],
	'attributes' => [
		'readonly' => 'readonly',
		'value'    => '[rank_math_review_snippet]',
	],
]);