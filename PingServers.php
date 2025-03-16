<?php

namespace Altum\Plugin;

use Altum\Plugin;

class PingServers {
    public static $plugin_id = 'ping-servers';

    public static function install() {

        /* Run the installation process of the plugin */
        $queries = [];

        foreach($queries as $query) {
            database()->query($query);
        }

        /* Clear the cache */
        cache()->deleteItem('ping_servers');

        return Plugin::save_status(self::$plugin_id, 'active');

    }

    public static function uninstall() {

        /* Run the installation process of the plugin */
        $queries = [];

        foreach($queries as $query) {
            database()->query($query);
        }

        /* Clear the cache */
        cache()->deleteItem('ping_servers');

        return Plugin::save_status(self::$plugin_id, 'uninstalled');

    }

    public static function activate() {

        /* Clear the cache */
        cache()->deleteItem('ping_servers');

        return Plugin::save_status(self::$plugin_id, 'active');
    }

    public static function disable() {

        /* Clear the cache */
        cache()->deleteItem('ping_servers');

        return Plugin::save_status(self::$plugin_id, 'installed');
    }

}
