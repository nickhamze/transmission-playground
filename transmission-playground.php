<?php
/** Plugin Name: Transmission Playground setup */
defined('ABSPATH') || exit;
add_action('admin_enqueue_scripts', function () {
    if (!wp_script_is('openstation','registered')) return;
    wp_add_inline_script('transmission', "(function boot(attempt){ const os=window.wp?.os; if(typeof os?.whenReady==='function') { os.whenReady(function(){ if(!sessionStorage.getItem('transmission-demo-opened')) { sessionStorage.setItem('transmission-demo-opened','1'); os.openWindow('transmission'); } }); } else if(attempt<100) setTimeout(function(){boot(attempt+1);},100); })(0);", 'after');
},100);
