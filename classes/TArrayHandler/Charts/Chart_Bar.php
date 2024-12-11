<?php
/**
 *   __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
 * 
 * 
 ************************************************************************************
 * @ASCOOS-NAME        	: ASCOOS CMS 24'                                            *
 * @ASCOOS-VERSION     	: 24.0.0                                                    *
 * @ASCOOS-CATEGORY    	: Framework (Frontend and Administrator Side)               *
 * @ASCOOS-CREATOR     	: Drogidis Christos                                         *
 * @ASCOOS-SITE        	: www.ascoos.com                                            *
 * @ASCOOS-LICENSE     	: [Commercial] http://docs.ascoos.com/lics/ascoos/AGL.html  *
 * @ASCOOS-COPYRIGHT   	: Copyright (c) 2007 - 2024, AlexSoft Software.             *
 ************************************************************************************
 *
 * @package            	: ASCOOS FRAMEWORK Examples
 * @subpackage         	: Creates a bar chart from the array data.
 * @source             	: afw-examples/classes/TArrayHandler/Charts/Chart_Bar.php
 * @fileNo             	: 
 * @version            	: 24.0.5
 * @created            	: 2024-12-05 07:00:00 UTC+3
 * @updated            	: 2024-12-10 07:00:00 UTC+3
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @license 			: AGL-F
 * 
 * @since PHP 8.2
 */ 
require_once '../../../autoload.php';
require_once "$afw_path/extras/arrays/TArrayGraphHandler.php";

use ASCOOS\FRAMEWORK\Extras\Arrays\Graphs\TArrayGraphHandler;


// 
/*
<ENGLISH>   Change this value to switch between one-dimensional and multidimensional data
<GREEK>     Αλλαγή αυτής της τιμής για να εναλλάσσεις μεταξύ μονοδιάστατων και πολυδιάστατων δεδομένων
*/
$multidimensional = true;  


if ($multidimensional) {
    /*
    <ENGLISH>   Data for a multidimensional diagram
    <GREEK>     Δεδομένα για πολυδιάστατο διάγραμμα
    */
    $data = [
        'Français' => [40, 20, 30],  // Population, GDP per capita, GDP
        'Português' => [30, 25, 35],
        'Россия' => [60, 40, 50],
        'English' => [50, 30, 40],
        'Ελληνικά' => [70, 50, 60]
    ];

    $filename = 'bar_multidimensional_chart.png';
    $img_alt = 'Bar Multidimensional Chart';     
} else {
    /*
    <ENGLISH>   Data for one-dimensional diagram
    <GREEK>     Δεδομένα για μονοδιάστατο διάγραμμα
    */
    $data = [
        'Français' => 40,
        'Português' => 30,
        'Россия' => 60,
        'English' => 50,    
        'Ελληνικά' => 70
    ];

    $filename = 'bar_chart.png';
    $img_alt = 'Bar Chart';    
}

/*
<ENGLISH>   Path to font file
<GREEK>     Διαδρομή προς το αρχείο γραμματοσειράς
*/
$fontPath = $afw_examples_fonts.'/Moderustic/Moderustic-Regular.ttf';

/*
<ENGLISH>   Create an object with data
<GREEK>     Δημιουργία αντικειμένου με δεδομένα
*/
$objArrayGraph = new TArrayGraphHandler($data, ['width'=>800, 'height'=>600]);

/*
<ENGLISH>   Create a diagram and save to a file.
<GREEK>     Δημιουργία διαγράμματος και αποθήκευση σε αρχείο
*/
$objArrayGraph->createBarChart($filename, $fontPath);
$objArrayGraph->Free($objArrayGraph);

/*
<ENGLISH> Display the image to the user
<GREEK> Εμφάνιση της εικόνας στον χρήστη
*/
echo '<img src="'.$filename.'" alt="'.$img_alt.'">';
?>
