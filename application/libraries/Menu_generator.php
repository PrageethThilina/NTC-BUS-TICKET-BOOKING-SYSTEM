<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_generator
{
	var $CI = null;

    public function __construct()
    {
        $this->CI =& get_instance();

		$main = '';
		$sub  = '';
		$sub2 = '';
    }
	
	public function generate_menu()
	{
		if($this->get_menu() == TRUE)
		{
			return $this->html_menu_generate();
		}
	}

	public function get_menu()
	{
	 	$this->CI->db->select('*');
		$this->CI->db->where('ssm_unm_status',1);

		$data = $this->CI->db->get('ssm_user_nav_menu')->result_array();

		$parent_menu = array();
		$child_menu  = array();
		$child_menu2 = array();

		foreach ($data as $d)
		{
			if($d['ssm_unm_menu_predecessor'] == null)
			{
				$parent_menu[$d['ssm_unm_id']] = array(
					'icon' 				=> $d['ssm_unm_menu_icon'],
					'mnu_title' 		=> $d['ssm_unm_menu_text']
				);
			}
			elseif ($d['ssm_unm_menu_predecessor'] <= 10)
			{
				$child_menu[$d['ssm_unm_id']] = array(
					'icon' 				=> $d['ssm_unm_menu_icon'],
					'mnu_title' 		=> $d['ssm_unm_menu_text'],
					'mnu_link' 			=> $d['ssm_unm_menu_link'],
					'menuPredecessor' 	=> $d['ssm_unm_menu_predecessor'],
					'mnu_access_link'	=> $d['ssm_unm_access_link']
				);	
			}elseif ($d['ssm_unm_menu_predecessor'] <= 1000)
			{
				$child_menu2[$d['ssm_unm_id']] = array(
					'icon' 				=> $d['ssm_unm_menu_icon'],
					'mnu_title' 		=> $d['ssm_unm_menu_text'],
					'mnu_link' 			=> $d['ssm_unm_menu_link'],
					'menuPredecessor' 	=> $d['ssm_unm_menu_predecessor'],
					'mnu_access_link'	=> $d['ssm_unm_access_link']
				);	
			}
		}

		$this->main = $parent_menu;
		$this->sub 	= $child_menu;
		$this->sub2 = $child_menu2;
		return true;
	}

	public function html_menu_generate()
	{
		$uri_seg2 = $this->CI->uri->segment(2);
		$uri_seg3 = $this->CI->uri->segment(3);
		$act      = '';
		$act_m    = '';
		$mag      = $uri_seg2.$uri_seg3;

		$menu_html = '';

		if (!empty($this->main))
		{
			foreach ($this->main as $key_m=>$m)
			{
		        $menu_html .= '<li class="'.$act_m.'"><a href="javascript:void(0)" class=""><i class="'.$m['icon'].'"></i><span class="nav-label"> 
		        '.$m['mnu_title'].' <span class="fa arrow"></span></a><ul class="nav nav-second-level" aria-expanded="true">';

	            foreach ($this->sub as $key_s => $s)
	            {
					//start sub menu
	            	if ($key_m == $s['menuPredecessor'] )
	            	{
	            		$menu_html .= '<li class="'.$act.'"> <a '. ($s['mnu_link'] != '' ? 'onclick="fetchPage(\''.$s['mnu_link'].'\',this);">' : '>') .$s['mnu_title'].'</a>';
	            			foreach ($this->sub2 as $s2)
	            			{
	            				if ($key_s == $s2['menuPredecessor'])
	            				{
	            				$menu_html .= '<ul class="nav nav-third-level"><li><a onclick="fetchPage(\''.$s2['mnu_link'].'\',this);" >'.$s2['mnu_title'].'</a></li></ul>';
	            				}
	            			}

	            		$menu_html .='</li>';
	            	}
	            }
                $menu_html .= '</ul></li>';
			}
		}
		return array('menu' =>$menu_html);
	}

}