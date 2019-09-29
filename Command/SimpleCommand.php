<?php
namespace Design_pattern\Command;
require_once "Command.php";

class SimpleCommand implements Command
{
	private $payload;

	public function __construct(string $payload)
	{
		$this->payload = $payload;
	}

	public function execute(): void
	{
		echo 'Simple Command: '. $this->payload.'<br><br>';
	}
}