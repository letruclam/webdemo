<?php 
/**
Template Name: Frontpage
*/


get_header();

get_template_part('template-parts/sections/section','slider');
get_template_part('template-parts/sections/section','collection');
get_template_part('template-parts/sections/section','featuredproduct');

get_footer(); ?>