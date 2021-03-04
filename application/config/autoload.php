<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	$autoload['packages'] = array(APPPATH.'third_party');
	$autoload['libraries'] = array(
		'database',
		'datamapper',
		'fpdf',
		'pagination',
		'session',
		'common',
		'auth',
		'authentication',
		'email',
		'template',
		'form_validation',
		'pdftable','matrix','appsettings'
	);
	$autoload['helper'] = array('array','url','form','date','file','directory','text','cookie','download');
	$autoload['config'] = array();
	$autoload['language'] = array();
	$autoload['model'] = array(array('user'));
