<?php
// Pass session data over. Only needed if not already passed by another script like WordPress.
session_start();

// Include the required dependencies.
require_once( '../vendor/autoload.php' );

// Initialize the Facebook PHP SDK v5.
$fb = new Facebook\Facebook([
  'app_id'                => '555445111584328',
  'app_secret'            => 'c4cf1416d78685e6d764ca154b3be1e4',
  'default_graph_version' => 'v2.10',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/fb-callback.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';