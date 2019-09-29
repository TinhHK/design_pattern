<?php
namespace Design_pattern\Command;

// the Invoker is associated with one or several commands. It sends a request to the command
class Invoker
{
	private $onStart;

	private $onFinish;

	public function setOnStart(Command $command): void
	{
		$this->onStart = $command;
	}

	public function setOnFinish(Command $command): void
	{
		$this->onFinish = $command;
	}

	/*The Invoker does not depend on concrete Command or Receiver classes.
	The Invoker passed a request to a receiver indirectly, by executing a command */
	public function doSomethingImportant()
	{
		echo "========== Invoker: before start ============<br>";
		if($this->onStart instanceof Command){
			$this->onStart->execute();
		}

		echo "========== Invoker: before finish ===========<br>";
		if($this->onFinish instanceof Command){
			$this->onFinish->execute();
		}
	}

}