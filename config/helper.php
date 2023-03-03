<?php

if (!function_exists('base_url')) {
    function base_url(){   
        $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']!='off') ? 'https://' : 'http://';
        $base_url .= $_SERVER['HTTP_HOST'].'/';

        // return $base_url; 
        return 'http://localhost/adipura-native/'; 
    
    }} 

?>