<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Site extends BaseConfig{
    public $site = array(
        'name'          => 'Demo Site',
        'email'         => 'info@example.com',
        'phone'         => '(+91) 1234567890',
        'cdn_url'       => '',
        'address'       => 'Haryana, India',
        'mail_to'       => 'irahulsaini01@gmail.com',
        'mail_cc'       => '',
        'mail_bcc'      => '',
        'mail_name'     => 'Demo Site',
        'mail_from'     => 'info@example.com',
        'mail_2'        => 1,
        'facebook'      => '#',
        'linkedin'      => '#',
        'twitter'       => '#',
        'youtube'       => '#',
    );
    public $form = array(
        'contact'   => array(
            //admin subject
            'subject_1'     => 'You\'ve received a Query',
            //admin message
            'message_1'     => '<p>Please find the details below:</p><table ><tr><td valign="top"><strong>Name</strong></td><th valign="top">:</th><td valign="top">{name}</th></tr><tr><td valign="top"><strong>Email</strong></td><th valign="top">:</th><td valign="top">{email}</th></tr><tr><td valign="top"><strong>Subject</strong></td><th valign="top">:</th><td valign="top">{subject}</th></tr><tr><td valign="top"><strong>Message</strong></td><th valign="top">:</th><td valign="top">&nbsp;</th></tr><tr><td>{name}</td></tr></table><p>-</p>Demo Site<br/>www.example.com',
            //user subject
            'subject_2'     => 'Thank You for Contacting us',
            //user message
            'message_2'     => '<p>Dear {name},</p><p>Thank you for contacting us. Our team will revert you within 24-48 business days</p><p>-</p><p><strong>Thanks &amp; Regards</strong><br/>Demo Site<br/><a href="http://www.example.com">www.example.com</a></p>',
        )
    );
    public $mail_config = array(
        'userAgent'        => 'example.com',
        'protocol'         => 'mail',
        'mailpath'         => '',
        'SMTPHost'         => '',
        'SMTPUser'         => '',
        'SMTPPass'         => '',
        'SMTPPort'         => 25,
        'SMTPTimeout'      => 5,
        'SMTPKeepAlive'    => FALSE,
        'SMTPCrypto'       => '',
        'wordWrap'         => TRUE,
        'wrapChars'        => 76,
        'mailType'         => 'html',
        'charset'          => 'utf-8',
        'validate'         => 'TRUE',
        'priority'         => 3,
        'CRLF'             => "\n",
        'newline'          => "\n",
        'BCCBatchMode'     => FALSE,
        'BCCBatchSize'     => 200,
        'DSN'              => FALSE
    );
}