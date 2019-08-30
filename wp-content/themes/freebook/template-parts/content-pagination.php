<?php
/**
 * Template part for posts pagination.
 *
 * @package FreeBook
 */
the_posts_pagination( apply_filters( 'freebook_content_posts_pagination',
	array(
		'prev_text' => '<i class="linearicon linearicon-arrow-left"></i>',
		'next_text' => '<i class="linearicon linearicon-arrow-right"></i>',
	)
) );
