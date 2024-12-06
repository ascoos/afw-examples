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
 * @subpackage         	: Creates a donut chart from the array data.
 * @source             	: afw-examples/classes/TArrayHandler/Charts/Chart_Donut.php
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


$multidimensional = true;

if (!$multidimensional) {
    /*
    <ENGLISH> Data for Donut Chart (Non-Multidimensional Data)
    <GREEK> Δεδομένα για το Donut Chart (Μη πολυδιάστατα δεδομένα)
    */
    $arrayData = [30, 20, 50];

    $filename = 'donut_chart.png';
    $img_alt = 'Donut Chart';      
} else {
    /*
    <ENGLISH>   Data for Donut Chart (Example of multidimensional data)
    <GREEK>     Δεδομένα για το Donut Chart (Παράδειγμα δεδομένων πολλαπλών χαρακτηριστικών) 
    */
    $arrayData = [
        [30, 20, 50],
        [15, 35, 50],
        [10, 20, 70],
        [25, 25, 50]
    ];

    $filename = 'donut_chart_multidimensional.png';
    $img_alt = 'Donut Chart Multidimensional';     
}

$objArrayGraph = new TArrayGraphHandler($arrayData, [
    'width' => 800, 
    'height' => 600, 
    'backgroundColorIndex' => 1, // 0=Black, 1=White, 2=Red, 3=Green, 4=Blue, 5=Yellow, 6=Cyan, 7=Magenta, 8=Maroon, 9=Dark Green, 10=Navy, 11=Olive, 12=Purple, 13=Teal, 14=Orange, 15=Pink, 16=Indigo, 17=Deep Pink
    'outerRadius' => 100,        // Προαιρετική τιμή για ακτίνα εξωτερικού κύκλου
    'innerRadius' => 50,         // Προαιρετική τιμή για ακτίνα εσωτερικού κύκλου
    'colors' => [
        [255, 0, 0],   // Red
        [0, 255, 0],   // Green
        [0, 0, 255],   // Blue
        [255, 255, 0], // Yellow
        [255, 0, 255]  // Magenta
    ]
]);

/*
<ENGLISH>   Create a donut chart and save to a file.
<GREEK>     Δημιουργία διαγράμματος ντόνατ και αποθήκευση σε αρχείο.
*/
$objArrayGraph->createDonutChart($filename);

$objArrayGraph->Free($objArrayGraph);

/*
<ENGLISH> Display the image to the user.
<GREEK> Εμφάνιση της εικόνας στον χρήστη.
*/
echo '<img src="'.$filename.'" alt="'.$img_alt.'">';
?>
