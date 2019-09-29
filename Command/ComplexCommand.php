<?php
namespace Design_pattern\Command;

require_once "Command.php";

class ComplexCommand implements Command
{
	private $receiver;

	private $a;

	private $b;

	public function __construct(Receiver $receiver, string $a, string $b)
	{
		$this->receiver = $receiver;
		$this->a = $a;
		$this->b = $b;
	}

	// Commands can delegate to any methods of a receiver
	public function execute(): void
	{
		echo 'Complex Command: should be done by a receiver object <br>';
		$this->receiver->doSomething($this->a);
		$this->receiver->doSomethingElse($this->b);
	}

}