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
<ENGLISH>   Change this value to switch between one-dimensional and multidimensional data.
<GREEK>     Αλλαγή αυτής της τιμής για να εναλλάσσεις μεταξύ μονοδιάστατων και πολυδιάστατων δεδομένων.
*/
$multidimensional = true;

if (!$multidimensional) {
    /*
    <ENGLISH>   Data for one-dimensional diagram.
    <GREEK>     Δεδομένα για μονοδιάστατο διάγραμμα.
    */
    $arrayData = [10, 20, 15, 25, 30, 35, 40, 45, 50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150, 200, 250, 300, 350];
} else {
    /*
    <ENGLISH>   Data for a multidimensional diagram.
    <GREEΚ>     Δεδομένα για πολυδιάστατο διάγραμμα.
    */
    $arrayData = [
        ['x' => 1, 'y' => 10],
        ['x' => 2, 'y' => 20],
        ['x' => 3, 'y' => 15],
        ['x' => 4, 'y' => 25],
        ['x' => 5, 'y' => 30],
        ['x' => 6, 'y' => 35],
        ['x' => 7, 'y' => 40],
        ['x' => 8, 'y' => 45],
        ['x' => 9, 'y' => 50],
        ['x' => 10, 'y' => 60],
        ['x' => 11, 'y' => 70],
        ['x' => 12, 'y' => 80],
        ['x' => 13, 'y' => 90],
        ['x' => 14, 'y' => 100],
        ['x' => 15, 'y' => 110],
        ['x' => 16, 'y' => 120],
        ['x' => 17, 'y' => 130],
        ['x' => 18, 'y' => 140],
        ['x' => 19, 'y' => 150],
        ['x' => 20, 'y' => 200],
        ['x' => 21, 'y' => 250],
        ['x' => 22, 'y' => 300],
        ['x' => 23, 'y' => 350],
        ['x' => 24, 'y' => 400]
    ];
}

/*
<ENGLISH>   Create an object with data.
<GREEK>     Δημιουργία αντικειμένου με δεδομένα.
*/
$objArrayGraph = new TArrayGraphHandler($arrayData, [
    'width' => 800, 
    'height' => 600,
    'showAxes' => true, // Εμφάνιση άξονων
    'fontPath' => $afw_examples_fonts.'/Murecho/Murecho-Regular.ttf', // Διαδρομή προς το αρχείο γραμματοσειράς
    'backgroundColorIndex' => 1, // 0=Black, 1=White, 2=Red, 3=Green, 4=Blue, 5=Yellow, 6=Cyan, 7=Magenta, 8=Maroon, 9=Dark Green, 10=Navy, 11=Olive, 12=Purple, 13=Teal, 14=Orange, 15=Pink, 16=Indigo, 17=Deep Pink
    'lineColorIndex' => 0, // Δείκτης χρώματος για τη γραμμή
    'axisColorIndex' => 0  // Δείκτης χρώματος για τους άξονες
]);

/*
<ENGLISH>   Create a line chart and save to a file.
<GREEK>     Δημιουργία γραφήματος γραμμών και αποθήκευση σε αρχείο.
*/
if (!$multidimensional) {
    $objArrayGraph->createLineChart('line_chart_single.png');
} else {
    $objArrayGraph->createLineChart('line_chart_multi.png');
}

$objArrayGraph->Free($objArrayGraph);

/*
<ENGLISH> Display the image to the user.
<GREEK> Εμφάνιση της εικόνας στον χρήστη.
*/
echo $multidimensional ? '<img src="line_chart_multi.png" alt="Line Chart Multi">' : '<img src="line_chart_single.png" alt="Line Chart Single">';
