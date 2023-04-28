<?php
/**
 * Plugin Name: Plugin Starter
 * Description: A modular starter plugin with autoloading and composer package management
 * Version: 0.0.1
 * Author: Hero Creative
 * Author URI: https://herocreative.com
 * License: MIT
 */

namespace Herocreative\PluginStarter;

if (!defined("ABSPATH")) {
  exit;
}

use Herocreative\PluginStarter\Admin\AdminMenu;
use Herocreative\PluginStarter\Assets\EnqueueScripts;
use Herocreative\PluginStarter\Assets\EnqueueStyles;
use Herocreative\PluginStarter\Controllers\CustomPostTypeController;
use Herocreative\PluginStarter\Controllers\CustomTaxonomyController;
use Herocreative\PluginStarter\Cron\MyCronTask;
use Herocreative\PluginStarter\Endpoints\MyEndpointController;
use Herocreative\PluginStarter\Handlers\PluginLifecycleHandler;
use Herocreative\PluginStarter\AnotherClass;

class PluginStarter
{
  public function __construct()
  {
    add_action('plugins_loaded', [$this, 'init']);
  }
  
  public function init()
  {
    new EnqueueScripts();
    new EnqueueStyles();
    new MyEndpointController();
    new CustomPostTypeController();
    new CustomTaxonomyController();
    new MyCronTask();
    new AnotherClass();
    new AdminMenu();
  }
}

$pluginStarterInstance = new PluginStarter();

// Register plugin lifecycle hooks
register_activation_hook(__FILE__, ['Herocreative\PluginStarter\Handlers\PluginLifecycleHandler', 'onActivate']);
register_deactivation_hook(__FILE__, ['Herocreative\PluginStarter\Handlers\PluginLifecycleHandler', 'onDeactivate']);
register_uninstall_hook(__FILE__, ['Herocreative\PluginStarter\Handlers\PluginLifecycleHandler', 'onUninstall']);