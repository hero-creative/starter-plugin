<?php

namespace Herocreative\PluginStarter\Handlers;

use Herocreative\PluginStarter\Cron\MyCronTask;

class PluginLifecycleHandler
{
  public static function onActivate()
  {
    // Run lifecycle code here
  }

 

  public static function onDeactivate()
  {
    // Run lifecycle code here
    MyCronTask::unscheduleCron();

  }


  public static function onUninstall()
  {
    // Run lifecycle code here
  }
}
