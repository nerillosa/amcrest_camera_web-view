<?php
$day = $_GET['day'];
//$day = "2020-05-24";
//echo "$day";

if(strlen($day)> 10 || !preg_match("/\d{4}-\d{2}-\d{2}/", $day)){
	echo("bad input");
	return;
}

//sed extracts two digits before 'hour' at the end: 04
//drwxrwxrwx 1 root root 224 Nov 11 05:06 04hour
if(substr($day, 0, 4) == '2021'){
	$execString = 'ls -l files2021/' . $day . ' | sed -En \'s/.*([0-2][0-9])hour$/\1/p\'';
}else if(substr($day, 0, 4) == '2022'){
	$execString = 'ls -l files2022/' . $day . ' | sed -En \'s/.*([0-2][0-9])hour$/\1/p\'';
}
else if(substr($day, 0, 4) == '2023'){
	$execString = 'ls -l files2023/' . $day . ' | sed -En \'s/.*([0-2][0-9])hour$/\1/p\'';
}
else{
	$execString = 'ls -l files2024/' . $day . ' | sed -En \'s/.*([0-2][0-9])hour$/\1/p\'';

}

exec($execString, $output);

echo json_encode($output); //convert the array to JSON string

?>



