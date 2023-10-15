<?php
$hour = $_POST['hour'];
$day = $_POST['day'];

if(substr($day, 0, 4) == '2021'){
        $execString = 'ls -l files2021/' . $day . '/' . $hour . '/jpg  | grep -v total | tr -s \' \' | cut -d\' \' -f9 2>&1';
} else if(substr($day, 0, 4) == '2022'){
        $execString = 'ls -l files2022/' . $day . '/' . $hour . '/jpg  | grep -v total | tr -s \' \' | cut -d\' \' -f9 2>&1';
} else{
        $execString = 'ls -l files_current/' . $day . '/' . $hour . '/jpg  | grep -v total | tr -s \' \' | cut -d\' \' -f9 2>&1';
}

exec($execString, $output);
$printj_r[] = array('jpegs' => $output);

if(substr($day, 0, 4) == '2021'){
	$execString = 'ls -l files2021/' . $day . '/' . $hour . '/mp4  | grep -v idx$ | grep -v total | tr -s \' \' | cut -d\' \' -f9 2>&1';
} else if(substr($day, 0, 4) == '2022'){
	$execString = 'ls -l files2022/' . $day . '/' . $hour . '/mp4  | grep -v idx$ | grep -v total | tr -s \' \' | cut -d\' \' -f9 2>&1';
} else{
	$execString = 'ls -l files_current/' . $day . '/' . $hour . '/mp4  | grep -v idx$ | grep -v total | tr -s \' \' | cut -d\' \' -f9 2>&1';
}

exec($execString, $output2);
$printj_r[] = array('mp4s' => $output2);

echo json_encode($printj_r); //convert the array to JSON string

?>



