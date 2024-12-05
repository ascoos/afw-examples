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
 * @subpackage         	: Creates a line chart from the array data.
 * @source             	: afw-examples/classes/TArrayHandler/Charts/Chart_Line.php
 * @fileNo             	: 
 * @version            	: 24.0.4
 * @created            	: 2024-12-05 07:00:00 UTC+3 
 * @updated            	:  
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @license 			: AGL-F
 * 
 * @since PHP 8.2
 */ 
require_once '../../../autoload.php';
require_once "$afw_path/extras/arrays/TArrayGraphHandler.php";

use ASCOOS\FRAMEWORK\Arrays\Extras\Graphs\TArrayGraphHandler;

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
    $arrayData = [10, 20, 15, 25, 30, 35, 40, 45, 50];
} else {
    /*
    <ENGLISH>   Data for a multidimensional diagram
    <GREEK>     Δεδομένα για πολυδιάστατο διάγραμμα
    */
    $arrayData = [
        ['x' => 1, 'y' => 10],
        ['x' => 2, 'y' => 20],
        ['x' => 3, 'y' => 15],
        ['x' => 4, 'y' => 25],
        ['x' => 5, 'y' => 30]
    ];
}

/*
<ENGLISH>   Create an object with data
<GREEK>     Δημιουργία αντικειμένου με δεδομένα
*/
$objArrayGraph = new TArrayGraphHandler($arrayData, ['width' => 800, 'height' => 600]);

/*
<ENGLISH>   Create a line chart and save to a file.
<GREEK>     Δημιουργία γραφήματος γραμμών και αποθήκευση σε αρχείο
*/
if (!$multidimensional) {
    $objArrayGraph->createLineChart('line_chart_single.png');
} else {
    $objArrayGraph->createLineChart('line_chart_multi.png');
}

$objArrayGraph->Free($objArrayGraph);

/*
<ENGLISH> Display the image to the user
<GREEK> Εμφάνιση της εικόνας στον χρήστη
*/
echo $multidimensional ? '<img src="line_chart_multi.png" alt="Line Chart Multi">' : '<img src="line_chart_single.png" alt="Line Chart Single">';
?>
