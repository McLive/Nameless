<?php
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr2
 *
 *  License: MIT
 *
 *  Generate footer
 */

// Get social media icons if enabled
// Check cache
$cache->setCache('social_media');

$social_media_icons = array();

// Facebook
$social_media = $cache->retrieve('facebook');
if($social_media){
	$social_media_icons[] = array(
		'short' => 'fb',
		'long' => 'facebook',
		'link' => Output::getClean($social_media)
	);
}

// Twitter
$social_media = $cache->retrieve('twitter');
if($social_media){
	$social_media_icons[] = array(
		'short' => 'tw',
		'long' => 'twitter',
		'link' => Output::getClean($social_media)
	);
}

// Google Plus
$social_media = $cache->retrieve('google_plus');
if($social_media){
	$social_media_icons[] = array(
		'short' => 'gp',
		'long' => 'google-plus',
		'link' => Output::getClean($social_media)
	);
}

// Youtube
$social_media = $cache->retrieve('youtube');
if($social_media){
	$social_media_icons[] = array(
		'short' => 'gp',
		'long' => 'youtube',
		'link' => Output::getClean($social_media)
	);
}

// Always add contact link
$social_media_icons[] = array(
	'short' => 'em',
	'long' => 'envelope',
	'link' => URL::build('/contact')
);

// Smarty template
// Assign to Smarty variables
$smarty->assign(array(
	'SOCIAL_MEDIA_ICONS' => $social_media_icons, 
	'PAGE_LOAD_TIME' => ((isset($page_loading) && $page_loading == '1') ? true : false),
	'FOOTER_NAVIGATION' => $navigation->returnNav('footer')
));

// Terms
$smarty->assign('TERMS_LINK', URL::build('/terms'));
$smarty->assign('TERMS_TEXT', $language->get('user', 'terms_and_conditions'));