<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=mysql;dbname=fuel_dev',
			'username'   => 'root',
			'password'   => 'secret',
		),
	),
);
