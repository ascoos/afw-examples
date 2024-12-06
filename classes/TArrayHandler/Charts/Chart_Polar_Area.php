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
 * @subpackage         	: Creates a polar area chart from the array data.
 * @source             	: afw-examples/classes/TArrayHandler/Charts/Chart_Polar_Area.php
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
<ENGLISH>   Data for the polar area chart
<GREEK>     Δεδομένα για το διάγραμμα πολικής περιοχής
*/
$arrayData = [
    'A' => 30,
    'B' => 200,  // Ακραία τιμή
    'C' => 50,
    'D' => 40,
    'E' => 5,    // Ακραία τιμή (μικρή)
    'F' => 100,
    'G' => 60,
    'H' => 300   // Ακραία τιμή
];

/*
<ENGLISH>   Labels for the polar area chart
<GREEK>     Ετικέτες για το διάγραμμα πολικής περιοχής
*/
$labels = [
    'Category A', 
    'Very Long Category B Name That Exceeds Limit', 
    'Category C', 
    'Category D', 
    'Category E', 
    'Category F', 
    'Category G', 
    'Category H'
];

/*
<ENGLISH>   Create an object with data
<GREEK>     Δημιουργία αντικειμένου με δεδομένα
*/
$objArrayGraph = new TArrayGraphHandler($arrayData, [
    'width' => 600, 
    'height' => 600, 
    'fontPath' => $afw_examples_fonts.'/Murecho/Murecho-Regular.ttf', 
    'backgroundColorIndex' => 1, // 0=Black, 1=White, 2=Red, 3=Green, 4=Blue, 5=Yellow, 6=Cyan, 7=Magenta, 8=Maroon, 9=Dark Green, 10=Navy, 11=Olive, 12=Purple, 13=Teal, 14=Orange, 15=Pink, 16=Indigo, 17=Deep Pink
    'colorIndices' => [0, 2, 3, 4, 5, 6, 7, 8], // Δείκτες χρωμάτων για τα τμήματα
    'labels' => $labels, // Προαιρετικές ετικέτες για τα τμήματα
    'labelsPerRow' => 4 // Ρύθμιση αριθμού ετικετών ανά σειρά
]);

/*
<ENGLISH>   Create a polar area chart and save to a file.
<GREEK>     Δημιουργία διαγράμματος πολικής περιοχής και αποθήκευση σε αρχείο
*/
$objArrayGraph->createPolarAreaChart('polar_area_chart.png');

/*
<ENGLISH> Display the image to the user
<GREEK> Εμφάνιση της εικόνας στον χρήστη
*/
echo '<img src="polar_area_chart.png" alt="Polar Area Chart">';
