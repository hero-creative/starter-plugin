<?php

namespace Herocreative\PluginStarter\Endpoints;

class MyEndpointController
{
  public function __construct()
  {
    add_action('rest_api_init', [$this, registerRoutes]);
  }

  public function registerRoutes()
  {
    register_rest_route('plugin-starter/v1', '/my-endpoint', [
      'methods' => 'GET',
      'callback' => [$this, 'getMyData'],
      'permission_callback' => [$this, 'getMyDataPermissions'],
    ]);
  }

  public function getMyData(\WP_REST_Request $request)
  {
    $data = [
      'message' => 'hello there'
    ];

    return new \WP_REST_Response($data, 200);
  }

  public function getMyDataPermissions() 
  {
    return true;
  }
}
