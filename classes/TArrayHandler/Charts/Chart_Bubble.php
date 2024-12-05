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
 * @subpackage         	: Creates a bubble chart from the array data.
 * @source             	: afw-examples/classes/TArrayHandler/Charts/Chart_Bubble.php
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
<ENGLISH> Data for Bubble diagram
<GREEK> Δεδομένα για το διάγραμμα Bubble
*/
$arrayData = [
    [1, 10, 0.5], [2, 20, 0.8], [3, 30, 0.3], [4, 40, 0.6], [5, 50, 0.2],
    [6, 25, 0.7], [7, 35, 0.4], [8, 45, 0.9], [9, 55, 0.1], [10, 15, 0.8],
    [11, 25, 0.6], [12, 35, 0.4], [13, 45, 0.2], [14, 55, 0.3], [15, 65, 0.7],
    [16, 75, 0.5], [17, 85, 0.9], [18, 95, 0.1], [19, 105, 0.6], [20, 115, 0.3],
    [21, 125, 0.2], [22, 135, 0.4], [23, 145, 0.7], [24, 155, 0.5], [25, 165, 0.8],
    [26, 175, 0.9], [27, 185, 0.3], [28, 195, 0.6], [29, 205, 0.1], [30, 215, 0.4],
];
$otherArray = [2, 4, 16, 8, 10, 6, 12, 14, 18, 20, 22, 24, 26, 28, 30, 32, 34, 36, 38, 40, 42, 44, 46, 48, 50, 52, 54, 56, 58, 60];
$sizeArray = [10, 20, 130, 40, 50, 30, 25, 35, 45, 55, 65, 75, 85, 95, 100, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85, 90];

/*
<ENGLISH>   Create an object with data
<GREEK>     Δημιουργία αντικειμένου με δεδομένα
*/
$objArrayGraph = new TArrayGraphHandler($arrayData);

/**
 * <ENGLISH>   Create a bubble diagram and save to a file
 * <GREEK>     Δημιουργία διαγράμματος φυσαλίδας και αποθήκευση σε αρχείο
 *
 * @param array $otherArray <English> The array for the other dimension of data.
 *                          <Greek> Ο πίνακας για τη δεύτερη διάσταση δεδομένων.
 * @param array $sizeArray <English> The array for the size of the bubbles.
 *                         <Greek> Ο πίνακας για το μέγεθος των φυσαλίδων.
 * @param string $filePath <English> The file path to save the bubble chart image.
 *                         <Greek> Η διαδρομή του αρχείου για την αποθήκευση της εικόνας του διαγράμματος φυσαλίδων.
 * @param float $initialPercentage <English> The percentage of bubbles to place at the beginning of the axes.
 *                                 <Greek> Το ποσοστό των φυσαλίδων που θα τοποθετηθεί στην αρχή των αξόνων.
 */
$objArrayGraph->createBubbleChart($otherArray, $sizeArray, 'bubble_chart.png', 0.3);

/*
<ENGLISH> Display the image to the user
<GREEK> Εμφάνιση της εικόνας στον χρήστη
*/
echo '<img src="bubble_chart.png" alt="Bubble Chart">';

?>