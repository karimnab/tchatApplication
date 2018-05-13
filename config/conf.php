<?php
class Conf{
	
	static $debug = 1; 

	static $databases = array(

		'default' => array(
			'host'		=> 'localhost',
			'database'	=> 'tchat',
			'login'		=> 'root',
			'password'	=> ''
		)
	);


}

Router::prefix('chat','auth');


Router::connect('','users/login');
Router::connect('chat','chat/users/index');
