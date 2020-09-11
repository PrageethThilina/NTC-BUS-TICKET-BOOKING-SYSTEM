<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('display_date_time_format'))
{
    function display_date_time_format($datetime)
    {
	   return date('d/m/y  H:i A', strtotime($datetime)); //$dateTime->format("d/m/y  H:i A"); 	   
    }  
}

if(!function_exists('asset_url'))
{
    function asset_url()
    {
        return base_url().'theme/';            
    }
}

 	function plugin_url()
    {
	   return base_url().'plugins/';	   
    }
      
?>