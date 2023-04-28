<?php

namespace Herocreative\PluginStarter\Assets;

class EnqueueScripts
{
  public function __construct()
  {
    add_action('wp_enqueue_scripts', [$this, 'enqueue']);
  }

  public function enqueue()
  {
    // Register and enqueue
    wp_enqueue_style('plugin-starter-script', plugins_url('assets/js/my-plugin-script.js', dirname(__FILE__, 2)), [], '1.0.0', true);
  }
}
