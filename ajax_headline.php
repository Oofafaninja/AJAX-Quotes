<?php
/**
 * ajax_headline.php along with ajax_headline1.htm or ajax_headline2.htm to demonstrate simple event based AJAX 
 * 
 * @package WEB150
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 1.0 2009/10/06
 * @link http://www.billnsara.com/js/ 
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see ajax_headline1.htm
 * @see ajax_headline2.htm 
 * @todo none
 */

//if letter "h" is sent via GET, print a random headline 
if(isset($_GET["h"])){$myTest = $_GET["h"];}else{$myTest = "";}

if($myTest == "yes")
{//get headline!
	$aHeadline = array();
    $aHeadline[0] = "House, always wins.";
    $aHeadline[1] = "Oke.";
    $aHeadline[2] = "Why, because I can.";
    $aHeadline[3] = "CHAAAAARGE!";
    $aHeadline[4] = "Character is revealed by when one retreats.";
    $aHeadline[5] = "Others try—I succeed.";
    $aHeadline[6] = "Burdens of the past.";
    $aHeadline[7] = "Learn from your mistakes.";
    $aHeadline[8] = "No more hesitation.";
    $aHeadline[9] = "No looking back.";
	srand(time());
	$random = (rand()%9);
	print $aHeadline[$random];
}else{
	print "This is an AJAX page, and you didn't say the magic word!";	
}	
?>
