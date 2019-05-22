<?php
/**
 * Metabox - Video Rich Snippet
 *
 * @package    RankMath
 * @subpackage RankMath\RichSnippet
 */

$video = [ [ 'rank_math_rich_snippet', 'video' ] ];

$cmb->add_field([
	'id'      => 'rank_math_snippet_video_url',
	'type'    => 'text_url',
	'name'    => esc_html__( 'Content URL', 'rank-math' ),
	'desc'    => esc_html__( 'A URL pointing to the actual video media file.', 'rank-math' ),
	'classes' => 'cmb-row-50',
	'dep'     => $video,
]);

$cmb->add_field([
	'id'      => 'rank_math_snippet_video_embed_url',
	'type'    => 'text_url',
	'name'    => esc_html__( 'Embed URL', 'rank-math' ),
	'desc'    => esc_html__( 'A URL pointing to the embeddable player for the video.', 'rank-math' ),
	'classes' => 'cmb-row-50',
	'dep'     => $video,
]);

$cmb->add_field([
	'id'         => 'rank_math_snippet_video_duration',
	'type'       => 'text',
	'name'       => esc_html__( 'Duration', 'rank-math' ),
	'desc'       => esc_html__( 'Duration of the video', 'rank-math' ),
	'classes'    => 'cmb-row-50 nob',
	'attributes' => [ 'placeholder' => 'Example: 12M30S' ],
	'dep'        => $video,
]);

$cmb->add_field([
	'id'         => 'rank_math_snippet_video_views',
	'type'       => 'text',
	'name'       => esc_html__( 'Views', 'rank-math' ),
	'desc'       => esc_html__( 'Number of views', 'rank-math' ),
	'classes'    => 'cmb-row-50 nob',
	'dep'        => $video,
	'attributes' => [ 'type' => 'number' ],
]);
