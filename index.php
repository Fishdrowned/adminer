<?php
function adminer_object()
{
    // required to run any plugin
    include_once __DIR__ . '/plugins/plugin.php';

    // autoloader
    foreach (glob(__DIR__ . '/plugins/*.php') as $filename) {
        include_once $filename;
    }
    $config = is_file($configFile = __DIR__ . '/config/local/config.php') ? include $configFile : [];
    $servers = is_file($serverConfigFile = __DIR__ . '/config/local/servers.php') ? include $serverConfigFile : [];

    $plugins = [
        new AdminerLoginServers($servers),
        new AdminerDumpBz2,
        new AdminerDumpDate,
        new AdminerTablesFilter,
        new AdminerLogoLink,
    ];
    empty($config['development_mode']) or $plugins[] = new AdminerLoginPasswordLess();

    return new AdminerPlugin($plugins);
}

// include original Adminer or Adminer Editor
include __DIR__ . '/adminer.php';
