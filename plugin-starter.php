<?php
/**
 * Plugin Name: Plugin Starter
 * Description: A modular starter plugin with autoloading and composer package management
 * Version: 0.0.1
 * Author: Hero Creative
 * Author URI: https://herocreative.com
 * License: MIT
 */

 require_once __DIR__ . '/vender/autoload.php';

 use Herocreative\PluginStarter\PluginStarter;

 $pluginStarterInstance = new PluginStarter();