<?php

namespace Design_pattern\Factory;

interface LoggerFactory
{
	public function createLogger(): Logger;
}