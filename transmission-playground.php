<?php
/** Plugin Name: Transmission Playground setup */
defined('ABSPATH') || exit;
add_action('admin_enqueue_scripts', function () {
    if (!wp_script_is('openstation','registered')) return;
    wp_add_inline_script('openstation', "window.wp?.os?.ready(function(){ if(!sessionStorage.getItem('transmission-demo-opened')) { sessionStorage.setItem('transmission-demo-opened','1'); wp.os.openWindow('transmission'); } });", 'after');
},100);
