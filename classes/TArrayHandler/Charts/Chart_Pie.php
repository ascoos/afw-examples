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
 * @subpackage         	: Creates a pie chart from the array data.
 * @source             	: afw-examples/classes/TArrayHandler/Charts/Chart_Pie.php
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


/*
<ENGLISH>   Change this value to switch between one-dimensional and multidimensional data
<GREEK>     Αλλαγή αυτής της τιμής για να εναλλάσσεις μεταξύ μονοδιάστατων και πολυδιάστατων δεδομένων
*/
$multidimensional = true;  

if (!$multidimensional) {
    /*
    <ENGLISH>   Data for one-dimensional diagram
    <GREEK>     Δεδομένα για μονοδιάστατο διάγραμμα
    */
    $arrayData = [
        'Ελληνικά' => 10,       // Greek
        'Français' => 15,       // French
        'English' => 20,        // English
        'Россия' => 25,         // Russian
        '中文 （简体）' => 30,   // Chinese (Simplified)
        '中文 （繁體）' => 40,   // Chinese (Traditional)      
        '日本語' => 35          // Japanese
    ];
} else {
    /*
    <ENGLISH>   Data for a multidimensional diagram
    <GREEK>     Δεδομένα για πολυδιάστατο διάγραμμα
    */
    $arrayData = [
        'Ελληνικά' => [10, 20, 30],     // Greek
        'Français' => [5, 15, 20],      // French
        'English' => [12, 8, 5],        // English
        'Россия' => [8, 7, 10],         // Russian
        '中文 （简体）' => [6, 4, 5],    // Chinese (Simplified)
        '中文 （繁體）' => [2, 2, 1],    // Chinese (Traditional)        
        '日本語' => [4, 3, 3]           // Japanese
    ];
}

/*
<ENGLISH>   Create an object with data
<GREEK>     Δημιουργία αντικειμένου με δεδομένα
*/
$objArrayGraph = new TArrayGraphHandler($arrayData, [
    'width' => 800, 
    'height' => 600, 
    '3D' => true, 
    'fontPath' => $afw_examples_fonts.'/Murecho/Murecho-Regular.ttf', 
    'backgroundColorIndex' => 1, // 0=Black, 1=White, 2=Red, 3=Green, 4=Blue, 5=Yellow, 6=Cyan, 7=Magenta, 8=Maroon, 9=Dark Green, 10=Navy, 11=Olive, 12=Purple, 13=Teal, 14=Orange, 15=Pink, 16=Indigo, 17=Deep Pink
    'colorIndices' => range(2, 29) // Δείκτες χρωμάτων για τις φέτες
]);


/*
<ENGLISH>   Create a pie chart and save to a file.
<GREEK>     Δημιουργία διαγράμματος πίτας και αποθήκευση σε αρχείο
*/
if (!$multidimensional) {
    $objArrayGraph->createPieChart('pie_chart_single.png');
} else {
    $objArrayGraph->createPieChart('pie_chart_multi.png');
}

$objArrayGraph->Free($objArrayGraph);

/*
<ENGLISH> Display the image to the user
<GREEK> Εμφάνιση της εικόνας στον χρήστη
*/
echo $multidimensional ? '<img src="pie_chart_multi.png" alt="Pie Chart Multi">' : '<img src="pie_chart_single.png" alt="Pie Chart Single">';

?>
