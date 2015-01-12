<?php
	//echo $argc;
	function secondsToTime($seconds) {
	    $dtF = new DateTime("@0");
	    $dtT = new DateTime("@$seconds");
	    return $dtF->diff($dtT)->format('%a days %h hours %i minutes %s seconds');
	}
	if ( $argc > 1 && $argc <4)	{

		$arg1 = $argv[1];
		echo secondsToTime($arg1);
		if ( $argc = 3) {
			echo "\n";
			for ($i = $argv[2]; $i > 0; --$i) {
			   echo $i;
			   usleep(250000);
			   echo '.';
			   usleep(250000);
			   echo '.';
			   usleep(250000);
			   echo '.';
			   usleep(250000);
			}
			exit();
		}

	}
	else
	{
		echo "Precisa introduzir pelo menos um argumento e nao introduzir mais que dois argumentos.\n";
	}


?>