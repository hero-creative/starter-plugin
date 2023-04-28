<?php

namespace Herocreative\PluginStarter\Cron;

class MyCronTask
{
  const CRON_HOOK = 'plugin_starter_my_cron_hook';

  public function __construct()
  {
    add_action(self::CRON_HOOK, [$this, 'runTask']);
    add_action('wp', [$this, 'scheduleCron']);
  }

  public function scheduleCron()
  {
    if (!wp_next_scheduled(self::CRON_HOOK)) {
      wp_schedule_event(time(), 'daily', self::CRON_HOOK);
    }
  }

  public function runTask()
  {
    // Cron task logic here
  }

  public static function unscheduleCron()
  {
    $timestamp = wp_next_scheduled(self::CRON_HOOK);
    if ($timestamp) {
      wp_unschedule_event($timestamp, self::CRON_HOOK);
    }
  }
}