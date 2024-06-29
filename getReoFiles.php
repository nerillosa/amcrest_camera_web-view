<?php
$day = $_GET['day'];

//$execString = 'ls -l files/' . $day . ' | grep -v total | tr -s \' \' | cut -d \' \' -f8- | sed \'s/ E1 Zoom Neri//\'';
$execString = 'ls -l files/' . $day . ' | grep -v total | tr -s \' \' | cut -d \' \' -f8- | grep jpg';

exec($execString, $output);
//$printj_r[] = array('files' => $output);
//$printj_r[] = array($output);
//$printj_r[] = $output;
$printj_r[] = array('jpegs' => $output);

//echo json_encode($output); //convert the array to JSON string



$execString = 'ls -l files/' . $day . ' | grep -v total | tr -s \' \' | cut -d \' \' -f8- | grep mp4';
exec($execString, $output2);
$printj_r[] = array('mp4s' => $output2);

echo json_encode($printj_r); //convert the array to JSON string

?>



