<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=mysql.local;dbname=docker',
			'username'   => 'docker',
			'password'   => 'docker',
		),
	),
);
