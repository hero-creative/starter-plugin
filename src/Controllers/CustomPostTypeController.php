<?php

namespace Herocreative\PluginStarter\Controllers;

class CustomPostTypeController
{
  public function __construct()
  {
    add_action('init', [$this, 'registerCustomPostType']);
  }

  public function registerCustomPostType() 
  {
    // Register CPT here
  }
}
