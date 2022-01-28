<?php

/**
 * Plugin Name: Oxygen Pods Gallery Workaround
 * Plugin URI: 
 * Description: Makes Oxygen's Gallery ACF Field look for Pods fields instead of ACF's
 * Version: 0.1
 * Author: Vitor Loureiro
 * Author URI: https://vitorloureiro.com
 **/

if (!defined('WPINC')) {
    die;
}

include_once(ABSPATH . 'wp-admin/includes/plugin.php');

if (is_plugin_active('oxygen/functions.php') AND is_plugin_active('pods/init.php')) {

    function change_key($array, $old_key, $new_key)
    {

        if (!array_key_exists($old_key, $array))
            return $array;

        $keys = array_keys($array);
        $keys[array_search($old_key, $keys)] = $new_key;

        return array_combine($keys, $array);
    }

    function get_field($fieldname)
    {

        if (!function_exists('pods_field')) {
            echo "PODS is not installed correctly or there is a compatibility issue.";
            return "";
        }



        $pods_field_array = pods_field($fieldname);
        foreach ($pods_field_array as $key => $field) {
            $pods_field_array[$key] = change_key($pods_field_array[$key], "ID", "id");
        }
        return $pods_field_array;
    }
}
