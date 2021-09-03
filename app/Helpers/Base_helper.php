<?php

function sanitize_phone($str){
	return '+'.preg_replace('/\D/', '', $str);
}

function cdn_url($relativePath = '', string $scheme = null){
	$config            = clone config('Site');
	$config->indexPage = '';

	return rtrim(site_url($relativePath, $scheme, $config), '/');
}