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
 * @subpackage         	: Creates a histogram from the array data.
 * @source             	: afw-examples\classes\TArrayHandler\Charts\Chart_Histogram.php
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


/**
 * Λειτουργία flatten για πολυδιάστατους πίνακες
 * 
 * @desc <English> Flatten function for multidimensional arrays.
 * @desc <Greek> Λειτουργία flatten για πολυδιάστατους πίνακες.
 * 
 * @param array $array <English> The multidimensional array to flatten.
 *                     <Greek> Ο πολυδιάστατος πίνακας για να ισοπεδωθεί.
 * @return array <English> The flattened array.
 *               <Greek> Ο επίπεδος πίνακας.
 */
function flatten(array $array): array {
    $result = [];
    array_walk_recursive($array, function($a) use (&$result) { $result[] = $a; });
    return $result;
}

/**
 * Δεδομένα σε πολυδιάστατο πίνακα
 * 
 * @desc <English> Data in a multidimensional array.
 * @desc <Greek> Δεδομένα σε πολυδιάστατο πίνακα.
 */
$arrayData = [
    [10, 20, 15, 5, 25, 30],
    [25, 30, 35, 45],
    [35, 40, 45, 50, 55, 60],
    [60, 65, 70, 75, 80],
    [70, 75, 80, 85, 90, 95],
    [90, 95, 100, 105, 110, 115]
];

/**
 * Επίπεδος πίνακας δεδομένων
 * 
 * @desc <English> Flat data table.
 * @desc <Greek> Επίπεδος πίνακας δεδομένων.
 */
$flatArrayData = flatten($arrayData);

/**
 * Ετικέτες για τους κάδους
 * 
 * @desc <English> Labels for bins.
 * @desc <Greek> Ετικέτες για τους κάδους.
 */
$labels = ["10-20", "21-30", "31-40", "41-50", "51-60", "61-70", "71-80", "81-90", "91-100", "101-110", "111-120"];

$objArrayGraph = new TArrayGraphHandler($flatArrayData, [
    'width' => 800, 
    'height' => 600, 
    'backgroundColorIndex' => 1, // 0=Black, 1=White, 2=Red, 3=Green, 4=Blue, 5=Yellow, 6=Cyan, 7=Magenta, 8=Maroon, 9=Dark Green, 10=Navy, 11=Olive, 12=Purple, 13=Teal, 14=Orange, 15=Pink, 16=Indigo, 17=Deep Pink
    'barColorIndex' => 2,         // Δείκτης χρώματος για τη στήλη
    'borderColorIndex' => 0,      // Δείκτης χρώματος για το περίγραμμα
    'fontPath' => $afw_examples_fonts.'/Murecho/Murecho-Regular.ttf', // Διαδρομή προς το αρχείο γραμματοσειράς
    'labels' => $labels           // Ετικέτες για τους κάδους
]);

/**
 * Δημιουργία ιστόγραμματος με 11 διαστήματα και αποθήκευση σε αρχείο
 * 
 * @desc <English> Create a histogram with 11 bins and save to a file.
 * @desc <Greek> Δημιουργία ιστόγραμματος με 11 διαστήματα και αποθήκευση σε αρχείο.
 */
$objArrayGraph->createHistogram(11, 'histogram.png');

/**
 * Εμφάνιση της εικόνας στον χρήστη
 * 
 * @desc <English> Display the image to the user.
 * @desc <Greek> Εμφάνιση της εικόνας στον χρήστη.
 */
echo '<img src="histogram.png" alt="Histogram">';
?>