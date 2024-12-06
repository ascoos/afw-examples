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
 * @subpackage         	: Creates a multi-line chart from the multi-dimensional array data.
 * @source             	: afw-examples/classes/TArrayHandler/Charts/Chart_MultiLine.php
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
<ENGLISH>   Example data for a multi-dimensional array with different currencies.
<GREEK>     Παράδειγμα δεδομένων για πολυδιάστατο πίνακα με διαφορετικά νομίσματα.
*/
$multiCurrencyData = [
    [
        ['x' => 1, 'y' => 10],
        ['x' => 2, 'y' => 20],
        ['x' => 3, 'y' => 15],
        ['x' => 4, 'y' => 25],
        ['x' => 5, 'y' => 30],
        ['x' => 6, 'y' => 35],
        ['x' => 7, 'y' => 40],
        ['x' => 8, 'y' => 45],
        ['x' => 9, 'y' => 50],
        ['x' => 10, 'y' => 60]
    ],
    [
        ['x' => 1, 'y' => 5],
        ['x' => 2, 'y' => 15],
        ['x' => 3, 'y' => 10],
        ['x' => 4, 'y' => 20],
        ['x' => 5, 'y' => 25],
        ['x' => 6, 'y' => 30],
        ['x' => 7, 'y' => 35],
        ['x' => 8, 'y' => 40],
        ['x' => 9, 'y' => 45],
        ['x' => 10, 'y' => 55],
        ['x' => 11, 'y' => 65]
    ],
    [
        ['x' => 1, 'y' => 5],
        ['x' => 2, 'y' => 15],
        ['x' => 3, 'y' => 10],
        ['x' => 4, 'y' => 20],
        ['x' => 5, 'y' => 25],
        ['x' => 6, 'y' => 30],
        ['x' => 7, 'y' => 35],
        ['x' => 8, 'y' => 40],
        ['x' => 9, 'y' => 45],
        ['x' => 10, 'y' => 50],
        ['x' => 11, 'y' => 60],
        ['x' => 12, 'y' => 70],
        ['x' => 13, 'y' => 80],
        ['x' => 14, 'y' => 90],
        ['x' => 15, 'y' => 100],
        ['x' => 16, 'y' => 110],
        ['x' => 17, 'y' => 120],
        ['x' => 18, 'y' => 130],
        ['x' => 19, 'y' => 140],
        ['x' => 20, 'y' => 150],
        ['x' => 21, 'y' => 200],
        ['x' => 22, 'y' => 250],
        ['x' => 23, 'y' => 300],
        ['x' => 24, 'y' => 350],
        ['x' => 25, 'y' => 400]
    ]    
];

$objArrayGraph = new TArrayGraphHandler($multiCurrencyData, [
    'width' => 800, 
    'height' => 600,
    'showAxes' => true, // Εμφάνιση άξονων
    'fontPath' => $afw_examples_fonts.'/Murecho/Murecho-Regular.ttf', // Διαδρομή προς το αρχείο γραμματοσειράς
    'backgroundColorIndex' => 1, // 0=Black, 1=White, 2=Red, 3=Green, 4=Blue, 5=Yellow, 6=Cyan, 7=Magenta, 8=Maroon, 9=Dark Green, 10=Navy, 11=Olive, 12=Purple, 13=Teal, 14=Orange, 15=Pink, 16=Indigo, 17=Deep Pink
    'lineColorIndices' => [0, 2, 3], // Δείκτες χρωμάτων για τις γραμμές
    'axisColorIndex' => 0  // Δείκτης χρώματος για τους άξονες
]);

/*
<ENGLISH>   Create a multi-line chart and save to a file.
<GREEK>     Δημιουργία γραφήματος πολλαπλών γραμμών και αποθήκευση σε αρχείο.
*/
$objArrayGraph->createMultiLineChart('multi_line_chart.png');

/*
<ENGLISH> Display the image to the user.
<GREEK> Εμφάνιση της εικόνας στον χρήστη.
*/
echo '<img src="multi_line_chart.png" alt="Multi Line Chart">';
?>