<?php
/*
Template Name: Logout
*/
header("Location: " . wp_logout_url("/"));
die();
?>
