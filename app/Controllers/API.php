<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\Request;


class API extends BaseController{
	use ResponseTrait;

	public function index(){
		return $this->fail(array('No Methods Defined '), 400);
	}
	public function send_query(){
		if($this->request->getMethod() == 'post'){
			$form = $this->request->getPost('form');
			$site = $this->config->site;
			
			$form_config = $this->config->form['contact'];
			if(empty($site['mail_to'])){
				return $this->fail(array('Invalid data, unable to send mail. Please contact site admin'), 400);
			}
			$to = $site['mail_to'];
			$subject = $this->key2value($form,$form_config['subject_1']);
			$message = $this->key2value($form,$form_config['message_1']);

            //return $this->respond(array('status'=>1,'message'=>'ok'), 200);
			if($this->send_mail($to,$subject,$message,$site['mail_cc'],$site['mail_bcc'])){
				if($site['mail_2'] == 1 && $form['email']){
					$to = $form['email'];
					$subject = $this->key2value($form,$form_config['subject_2']);
					$message = $this->key2value($form,$form_config['message_2']);
					$this->send_mail($to,$subject,$message);
				}

				return $this->respond(array('status'=>1,'message'=>'ok'), 200);
			}else{				
				return $this->fail(array('There was a Problem in sending your mail. Please try again later.'), 400);
			}
		}
		return $this->fail(array('Invalid Method'), 400);
	}
	private function send_mail($to,$subject,$message,$cc=false,$bcc=false){
		if(empty($to) || empty($subject) || empty($message)){
			return false;
		}
		$site = $this->config->site;
		$config = $this->config->mail_config;

		$email = \Config\Services::email();
		$email->initialize($config);
		$email->setFrom($site['mail_from'], $site['mail_name']);
		$email->setTo($to);
		if(!empty($cc)){
			$email->setCC($cc);
		}
		if(!empty($bcc)){
			$email->setBCC($bcc);
		}

		$email->setSubject($subject);
		$email->setMessage($message);
		return $email->send();
	}
	private function key2value($arr,$string){
	    if(!is_array($arr)){
	        return $string;
	    }
	    $search = array();
	    $replace = array();
	    foreach($arr as $key => $value){
	        $search[] = '{'.$key.'}';
	        $replace[] = nl2br($value);
	    }
	    return str_replace($search,$replace,$string);
	}
}
