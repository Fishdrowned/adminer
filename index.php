<?php
function adminer_object()
{
    // required to run any plugin
    include_once __DIR__ . '/plugins/plugin.php';

    // autoloader
    foreach (glob(__DIR__ . '/plugins/*.php') as $filename) {
        include_once $filename;
    }
    $servers = is_file($serverConfig = __DIR__ . '/config/servers.php') ? include $serverConfig : [];

    $plugins = [
        new AdminerLoginServers($servers),
        new AdminerDumpBz2,
        new AdminerDumpDate,
        new AdminerTablesFilter,
        new AdminerLogoLink,
        new AdminerLoginPasswordLess(),
    ];

    return new AdminerPlugin($plugins);
}

// include original Adminer or Adminer Editor
include __DIR__ . '/adminer.php';
