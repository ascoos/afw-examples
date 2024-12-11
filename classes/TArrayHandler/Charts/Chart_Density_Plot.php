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
 * @subpackage         	: Creates a density plot from the array data.
 * @source             	: afw-examples/classes/TArrayHandler/Charts/Chart_Density_Plot.php
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


$multidimensional = true;

if (!$multidimensional) {
    /*
    <ENGLISH> Data for Density Plot (Non-Multidimensional Data)
    <GREEK> Δεδομένα για το Density Plot (Μη πολυδιάστατα δεδομένα)
    */
    $arrayData = [1, 3, 5, 2, 4, 6, 10, 0, 8, 12];

    $filename = 'density_plot.png';
    $img_alt = 'Density Plot';      
} else {
    /*
    <ENGLISH>   Data for Density Plot (Example of multidimensional data)
    <GREEK>     Δεδομένα για το Density Plot (Παράδειγμα δεδομένων πολλαπλών χαρακτηριστικών) 
    */
    $arrayData = [
        [1, 2, 3, 4, 5],
        [2, 3, 4, 5, 6],
        [3, 4, 5, 6, 7],
        [4, 5, 6, 7, 8],
        [5, 6, 7, 8, 9],
        [10, 12, 14, 16, 18],
        [20, 22, 24, 26, 28],
        [30, 32, 34, 36, 38]
    ];

    $filename = 'density_multidimensional_plot.png';
    $img_alt = 'Density Multidimensional Plot';     
}

$objArrayGraph = new TArrayGraphHandler($arrayData, [
    'width' => 800, 
    'height' => 600, 
    'backgroundColorIndex' => 1, // 0=Black, 1=White, 2=Red, 3=Green, 4=Blue, 5=Yellow, 6=Cyan, 7=Magenta, 8=Maroon, 9=Dark Green, 10=Navy, 11=Olive, 12=Purple, 13=Teal, 14=Orange, 15=Pink, 16=Indigo, 17=Deep Pink
    'lineColorIndex' => 4,        // 0=Black, 1=White, 2=Red, 3=Green, 4=Blue, 5=Yellow, 6=Cyan, 7=Magenta, 8=Maroon, 9=Dark Green, 10=Navy, 11=Olive, 12=Purple, 13=Teal, 14=Orange, 15=Pink, 16=Indigo, 17=Deep Pink
    'showAxes' => true,           // Εμφάνιση αξόνων Χ και Ψ
    'fontPath' => $afw_examples_fonts.'/Noto/NotoSans-Regular.ttf' // Διαδρομή προς το αρχείο γραμματοσειράς
]);

/*
<ENGLISH>   Create a density diagram and save to a file.
<GREEK>     Δημιουργία διαγράμματος πυκνότητας και αποθήκευση σε αρχείο.
*/
$objArrayGraph->createDensityPlot($filename);

$objArrayGraph->Free($objArrayGraph);

/*
<ENGLISH> Display the image to the user
<GREEK> Εμφάνιση της εικόνας στον χρήστη
*/
echo '<img src="'.$filename.'" alt="'.$img_alt.'">';
?>