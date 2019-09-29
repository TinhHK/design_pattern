<?php
namespace Design_pattern\Command;

class Receiver
{
	public function doSomething(string $a): void
	{
		echo 'Receiver: working on ( '. $a. ' ) <br>';
	}

	public function doSomethingElse(string $b): void
	{
		echo 'Receiver: working on ( '. $b . ' ) <br>';
	}
}