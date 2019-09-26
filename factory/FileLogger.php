<?php

namespace Design_pattern\Factory;

class FileLogger implements Logger
{
	private $filePath;

	public function __construct(string $filePath)
	{
		$this->filePath = $filePath;
	}

	public function log(string $meg)
	{
		file_put_contents($this->filePath, $mes.PHP_EOL, FILE_APPEND);
	}
}