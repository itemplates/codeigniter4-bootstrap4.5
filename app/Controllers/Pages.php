<?php

namespace App\Controllers;

class Pages extends BaseController{
	public function index(){
		$segments = $this->request->uri->getSegments();
		$page = $this->request->uri->getPath();
		$page = rtrim($page,'/');
		$path = ltrim($page,'/');
		if(empty($page)){
			$page = 'index';
		}

		$data['config'] = $this->config;

        if (is_file(APPPATH.'/Views/'.$page.'/index.php')){
        	return view($page.'/index',$data);
        }
        
        if (is_file(APPPATH.'/Views/'.$page.'.php')){
        	return view($page,$data);
        }

        throw new \CodeIgniter\Exceptions\PageNotFoundException($page);

	}
}
