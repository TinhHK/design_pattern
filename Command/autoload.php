<?php
spl_autoload_register(function($class){
	$className = str_replace("\\", DIRECTORY_SEPARATOR, $class);
	if($className === 'Command'){
		require_once '/home/mrktinh/Projects/Design_pattern/Command/' . $className . '.php';
	} else {
		require_once '/home/mrktinh/Projects/' . $className . '.php';
	}

});