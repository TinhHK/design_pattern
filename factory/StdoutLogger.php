<?php

namespace Design_pattern\Factory;

class StdoutLogger implements Logger
{
	public function log(string $meg)
	{
		echo $meg;
	}
}