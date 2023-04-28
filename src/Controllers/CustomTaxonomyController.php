<?php

namespace Herocreative\PluginStarter\Controllers;

class CustomTaxonomyController
{
  public function __construct()
  {
    add_action('init', [$this, 'registerCustomTaxonomy']);
  }

  public function registerCustomTaxonomy() 
  {
    // Register custom tax here
  }
}
