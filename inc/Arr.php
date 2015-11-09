<?php

/** Array helper
 *
 */
class Arr
{

    /** Check if key exists if no - return default value
     *
     * @param array  $array   Array of values
     * @param string $key     Pattern for search
     * @param string $default Default value if pattern doesn't exist
     *
     * @return string
     */
    public static function get($array, $key, $default = null)
    {
        return isset($array[$key]) ? $array[$key] : $default;
    }

}
