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
 * @subpackage         	: Creates a scatter plot from the array data and additional data.
 * @source             	: afw-examples/classes/TArrayHandler/Charts/Chart_Scatter_Plot.php
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
<ENGLISH>   Data for the scatter plot
<GREEK>     Δεδομένα για το διάγραμμα διασποράς
*/
$arrayData = [
    ['x' => 1, 'y' => 10],
    ['x' => 2, 'y' => 15],
    ['x' => 3, 'y' => 20],
    ['x' => 4, 'y' => 25],
    ['x' => 5, 'y' => 30],
    ['x' => 6, 'y' => 35],
    ['x' => 7, 'y' => 40],
    ['x' => 8, 'y' => 45],
    ['x' => 9, 'y' => 50],
    ['x' => 10, 'y' => 55],
    ['x' => 15, 'y' => 75],  // Ακραία τιμή
    ['x' => 20, 'y' => 90],  // Ακραία τιμή
    ['x' => 25, 'y' => 100]  // Ακραία τιμή
];

/*
<ENGLISH>   Create an object with data
<GREEK>     Δημιουργία αντικειμένου με δεδομένα
*/
$objArrayGraph = new TArrayGraphHandler($arrayData, [
    'width' => 800, 
    'height' => 600, 
    'fontPath' => $afw_examples_fonts.'/Murecho/Murecho-Regular.ttf', 
    'backgroundColorIndex' => 1, // 0=Black, 1=White, 2=Red, 3=Green, 4=Blue, 5=Yellow, 6=Cyan, 7=Magenta, 8=Maroon, 9=Dark Green, 10=Navy, 11=Olive, 12=Purple, 13=Teal, 14=Orange, 15=Pink, 16=Indigo, 17=Deep Pink
    'dataColorIndex' => 0, // Δείκτης χρώματος για τα αρχικά δεδομένα
    'additionalDataColorIndex' => 2, // Δείκτης χρώματος για τα πρόσθετα δεδομένα
    'showAxes' => true // Προαιρετική εμφάνιση άξονων
]);

// Πρόσθετος πίνακας δεδομένων
$otherArray = [
    ['x' => 1, 'y' => 5],
    ['x' => 2, 'y' => 10],
    ['x' => 3, 'y' => 15],
    ['x' => 4, 'y' => 20],
    ['x' => 5, 'y' => 25],
    ['x' => 6, 'y' => 35],
    ['x' => 7, 'y' => 40],
    ['x' => 8, 'y' => 45],
    ['x' => 9, 'y' => 50],
    ['x' => 10, 'y' => 55],
    ['x' => 12, 'y' => 65],  // Ακραία τιμή
    ['x' => 18, 'y' => 80],  // Ακραία τιμή
    ['x' => 22, 'y' => 95]   // Ακραία τιμή
];

/*
<ENGLISH>   Create a scatter plot and save to a file.
<GREEK>     Δημιουργία διαγράμματος διασποράς και αποθήκευση σε αρχείο
*/
$objArrayGraph->createScatterPlot($otherArray, 'scatter_plot.png');

/*
<ENGLISH> Display the image to the user
<GREEK> Εμφάνιση της εικόνας στον χρήστη
*/
echo '<img src="scatter_plot.png" alt="Scatter Plot">';
