<?php
namespace Design_pattern\Factory;

use Design_pattern\Factory\StdoutLogger;
//use Design_pattern\Factory\Logger;

class StdoutLoggerFactory implements LoggerFactory
{
	public function createLogger(): Logger
	{
		return new StdoutLogger();
	}
}