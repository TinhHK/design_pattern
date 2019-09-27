<?php

declare(strict_types = 1);

namespace Design_pattern\Singleton;

final class Singleton
{
	private static $instance;
	private static $hiuhiu = 3;

	public static function getInstance()
	{
		if(static::$instance === null){
			static::$instance = new static();
		} 
		return static::$instance;
	}

	public static function setHiuHiu(){
		static::$hiuhiu += 3;
	}
	public static function getHiuHiu(){
		return static::$hiuhiu;
	}

	private function __construct(){}
	private function __clone(){}
	private function __wakeup(){}
}