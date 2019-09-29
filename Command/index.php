<?php
namespace Design_pattern\Command;

require_once 'autoload.php';

$invoker = new Invoker;
$receiver = new Receiver;

// command
$invoker->setOnStart(new SimpleCommand('command from simple command'));
// command
$invoker->setOnFinish(new ComplexCommand(new Receiver, 'send email', 'save report'));

// queue
$invoker->doSomethingImportant();