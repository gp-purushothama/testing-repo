 
<?php

$data = '*/10 * * * * /usr/bin/wget -q /var/www/optimization/Web-Report/application/logs/cronerror.txt http://localhost/optimization/Web-Report/index.php/cron/index';

$filename = 'check_cron.txt';

$output_array = array();

file_put_contents($filename, $data);

exec('crontab /var/www/check_cron.txt',$output_array);

//edited for branch 2
var_dump($output_array);
//echo exec('whoami');
/*
 $a_keys = array( "0","1","2","3","4","5","6","7","8","9",
        "A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z",
        "(",")","+","-","*","#","@","!","?","=","_",".","$","~","^",":","{","}","`","|","&","/","<",">");


$string  = '>>>>';

$str_array = str_split($string);


$new_array = str_split($string);


//var_dump( array_search('a', $str_array));

if($str_array[3] != '>')
{
	//search a index in a_keys array and add + 1 to it to increment.
	$temp = array_search($str_array[3], $a_keys) + 1;

	//add incremented value to new array
	$new_array[3] = $a_keys[$temp];
}
else
{
	//add incremented value to new array
	$new_array[3] = 0;

	if($str_array[2] != '>')
	{
		//search a index in a_keys array and add + 1 to it to increment.
		$temp = array_search($str_array[2], $a_keys) + 1;

		//add incremented value to new array
		$new_array[2] = $a_keys[$temp];
	}
	else
	{
		//add incremented value to new array
		$new_array[2] = 0;

		if($str_array[1] != '>')
		{
			//search a index in a_keys array and add + 1 to it to increment.
			$temp = array_search($str_array[1], $a_keys) + 1;

			//add incremented value to new array
			$new_array[1] = $a_keys[$temp];
		}
		else
		{
			//add incremented value to new array
			$new_array[1] = 0;

			if($str_array[0] != '>')
			{
				//search a index in a_keys array and add + 1 to it to increment.
				$temp = array_search($str_array[0], $a_keys) + 1;

				//add incremented value to new array
				$new_array[0] = $a_keys[$temp];
			}
			else
			{
				// finished or reached last id of uniqueness.
				echo 'reached';
			}
		}
	}
}
var_dump($a_keys);

echo "<br>";
var_dump(time());

*/
