<?php

namespace Herocreative\PluginStarter\Assets;

class EnqueueStyles
{
  public function __construct()
  {
    add_action('wp_enqueue_scripts', [$this, 'enqueue']);
  }

  public function enqueue()
  {
    // Register and enqueue
    wp_enqueue_style('plugin-starter-style', plugins_url('assets/css/my-plugin-style.css', dirname(__FILE__, 2)), [], '1.0.0');
  }
}
