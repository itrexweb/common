<?php

function dump($var, $line = null, $desc = null)
{
	echo '<br>';
	echo '<br>';
	echo '<div>';
	if($desc)
	{
		echo 'Description: <b>' . $desc . '</b>';
	}
	
	if($line)
	{
		echo 'On line <i>' . $line . '</i>'; 
	}
	echo '<pre>';
	var_export($var);
	echo '</pre>';
	echo '</div>';
	echo '<br>';
}