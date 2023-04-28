<?php

namespace Herocreative\PluginStarter\Admin;

class AdminMenu
{
  public function __construct()
  {
    add_action('admin_menu', [$this, 'addMenu']);
  }

  public function addMenu()
  {
    add_menu_page(
      'Plugin Starter',
      'Plugin Starter',
      'manage_options',
      'plugin-starter',
      [$this, 'renderMenuPage'],
      'dashicons-admin-plugins',
      100
    );
  }

  public function renderMenuPage()
  {
    ?>
    <div class="wrap">
      <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
      <p>This is a custom admin menu page</p>
    </div>
    <?php
  }
}
