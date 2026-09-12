<?php
/** Plugin Name: Transmission Playground setup */
defined('ABSPATH') || exit;
add_filter('openstation_native_window_config', function ($config, $id) {
    if ($id === 'transmission') $config['demoAutoload'] = true;
    return $config;
},10,2);
