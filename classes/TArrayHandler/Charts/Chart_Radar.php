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
 * @subpackage         	: Creates a radar chart from the array data.
 * @source             	: afw-examples/classes/TArrayHandler/Charts/Chart_Radar.php
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
<ENGLISH>   Data for the radar chart
<GREEK>     Δεδομένα για το διάγραμμα ραντάρ
*/
$arrayData = [
    'A' => [50, 60, 70, 80],
    'B' => [70, 80, 90, 100],
    'C' => [90, 70, 50, 60],
    'D' => [60, 50, 40, 30]  // Ακραία τιμή
];

/*
<ENGLISH>   Labels for the radar chart
<GREEK>     Ετικέτες για το διάγραμμα ραντάρ
*/
$labels = ['Parameter 1', 'Parameter 2', 'Parameter 3', 'Very Long Parameter 4 That Exceeds Limit'];

/*
<ENGLISH>   Create an object with data
<GREEK>     Δημιουργία αντικειμένου με δεδομένα
*/
$objArrayGraph = new TArrayGraphHandler($arrayData, [
    'width' => 600, 
    'height' => 600, 
    'fontPath' => $afw_examples_fonts.'/Murecho/Murecho-Regular.ttf', 
    'backgroundColorIndex' => 1, // 0=Black, 1=White, 2=Red, 3=Green, 4=Blue, 5=Yellow, 6=Cyan, 7=Magenta, 8=Maroon, 9=Dark Green, 10=Navy, 11=Olive, 12=Purple, 13=Teal, 14=Orange, 15=Pink, 16=Indigo, 17=Deep Pink
    'lineColorIndex' => 0, // Δείκτης χρώματος για τις γραμμές του πλέγματος
    'dataColorIndices' => [2, 3, 4, 5], // Δείκτες χρωμάτων για τα δεδομένα
    'labels' => $labels, // Προαιρετικές ετικέτες για τα τμήματα
    'labelsPerRow' => 3, // Ρύθμιση αριθμού ετικετών ανά σειρά
    'showAxes' => true // Προαιρετική εμφάνιση άξονων
]);

/*
<ENGLISH>   Create a radar chart and save to a file.
<GREEK>     Δημιουργία διαγράμματος ραντάρ και αποθήκευση σε αρχείο
*/
$objArrayGraph->createRadarChart('radar_chart.png');

/*
<ENGLISH> Display the image to the user
<GREEK> Εμφάνιση της εικόνας στον χρήστη
*/
echo '<img src="radar_chart.png" alt="Radar Chart">';
