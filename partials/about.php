<?php

$about_id = get_id_by_slug('acerca-de');
$about = get_post($about_id);
echo apply_filters( 'the_content', $about->post_content);
