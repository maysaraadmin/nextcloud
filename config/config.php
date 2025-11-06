<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => 'redis',
    'password' => 'RedisCache2025!',
    'port' => 6379,
  ),
  'overwriteprotocol' => 'http',
  'upgrade.disable-web' => true,
  'instanceid' => 'oc7byukn67w4',
  'passwordsalt' => 'q+01YnuLoQmyru3QmHZZyMgOq8P3IO',
  'secret' => 'wMxXuxAoRQc+2A+XR076MfqObH/EYkRkOTIKn7j89snn00Qp',
  'trusted_domains' => 
  array (
    0 => 'localhost:8080',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'sqlite3',
  'version' => '27.1.5.1',
  'overwrite.cli.url' => 'http://localhost:8080',
  'installed' => true,
);
