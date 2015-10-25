<?php
// Check if this is a request for the legacy help screens; they display a separate layout
$task = isset($_REQUEST['task']) ? $_REQUEST['task'] : 'display';
$task = filter_var($task, FILTER_SANITIZE_STRING);

if ($task == 'findkey')
{
	include __DIR__ . '/layouts/help.php';
}
else
{
	include __DIR__ . '/layouts/main.php';
}
