<?php

define('IS_AJAX', (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'));

function is_email(string $str)
{
	return filter_var($str, FILTER_VALIDATE_EMAIL);
}

function response($data, $status = 200)
{
	return new Response($data, $status);
}

function dd($data)
{
	echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
}
