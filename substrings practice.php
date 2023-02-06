<?php
$name = "Brandon Eads";
$name_play = substr($name, 4, 8); // $fluff is "lint"
$playing_around = substr($name, 9); // $sound is "tone"

echo $name, '<br />';

echo $name_play, '<br />';

echo $playing_around, '<br /><br />';




$loads_of_text = <<< EndOfText
I can't tell you how awesome Japan is; Japan has sophisticated train system with bullet trains; Bullet trains always arrive on time;
Most countries the trains arrive around the time specified but in Japan they arrive at the correct specified time; The bullet trains in Japan go over 300 miles per hour; 
All of the trains in Japan are super clean; Japan train stations are also very modern with all types amentities;
You can find most of the popular foods in a train station in japan;
EndOfText;
$count = substr_count($loads_of_text, "Japan");
print("The word Japan occurs {$count} times.<br /><br />");

$name = "what is your name?";
$myname = substr_replace($name, "is my", 5, 7);


echo $name, '<br />';
echo $myname, '<br /><br />';


$name = "what is your name?";
$mother = substr_replace($name, " mother's", 12, 0);

echo $name, '<br />';
echo $mother, '<br /><br />';



$name = "what is your name?";
$what = substr_replace($name, "", 8);

echo $name, '<br />';
echo $what, '<br /><br />';


$name = "what is your name?";
$yourname = substr_replace($name,"How about starting with your name. ", 0,0);


echo $name, '<br />';
echo $yourname, '<br /><br />';




$name = "what is your name?";
$yourname = substr_replace($name,"major ", -5);


echo $name, '<br />';
echo $yourname, '<br /><br />';



$remember = "I can't remember what I did yesterday.";
$doyouknow = substr_replace($remember, "", -11, -1);


echo $remember, '<br />';
echo $doyouknow, '<br /><br />';
?>



