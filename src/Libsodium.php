<?php

namespace RobinChat\Libsodium;

class Libsodium
{
    public function __construct()
    {
    
    }
    
    /**
     * @return Libsodium
     */
    public static function get_instance()
    {
        static $instance = null;
        
        if (is_null($instance)) {
            $instance = new self();
        }
        
        return $instance;
    }
}