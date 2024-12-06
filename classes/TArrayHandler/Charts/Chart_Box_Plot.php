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
 * @subpackage         	: Creates a box plot from the array data.
 * @source             	: afw-examples/classes/TArrayHandler/Charts/Chart_Box_Plot.php
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

$tagged = true;

/*
<ENGLISH> Data for Box Plot 
<GREEK> Δεδομένα για το Box Plot
*/
$boxPlotData = [
    [5, 7, 8, 3, 6],
    [6, 9, 12, 7, 8],
    [7, 13, 11, 9, 10],
    [12, 1, 8, 3, 20],
    [11, 17, 21, 12, 33]
];


$objArrayGraph = new TArrayGraphHandler($boxPlotData, [
    'width' => 800, 
    'height' => 600, 
    'fontPath' => $afw_examples_fonts.'/Noto/NotoSans-Regular.ttf',
    'boxColorIndex' => 14,       // Επιλογή χρώματος: 0=Black, 1=White, 2=Red, 3=Green, 4=Blue, 5=Yellow, 6=Cyan, 7=Magenta, 8=Maroon, 9=Dark Green, 10=Navy, 11=Olive, 12=Purple, 13=Teal, 14=Orange, 15=Pink, 16=Indigo, 17=Deep Pink
    'borderColorIndex' => 0      // Επιλογή χρώματος: 0=Black, 1=White, 2=Red, 3=Green, 4=Blue, 5=Yellow, 6=Cyan, 7=Magenta, 8=Maroon, 9=Dark Green, 10=Navy, 11=Olive, 12=Purple, 13=Teal, 14=Orange, 15=Pink, 16=Indigo, 17=Deep Pink
]);


if (!$tagged) {
    $filename = 'box_plot_no_labels.png';
    $img_alt = 'Box Plot without tags';        
    /*
    <ENGLISH>   Create a Box Plot diagram without tags and save to a file
    <GREEK>     Δημιουργία διαγράμματος Box Plot χωρίς ετικέτες και αποθήκευση σε αρχείο
    */
    $objArrayGraph->createBoxPlot([], $filename);
} else {
    $filename = 'box_plot.png';
    $img_alt = 'Box Plot with tags';    
    /*
    <ENGLISH>   Table of labels of the diagram
    <GREEK>     Πίνακας ετικετών του διαγράμματος
    */
    $labels = ["Français", "Português", "Россия", "English", "Ελληνικά"];

    /*
    <ENGLISH>   Create a tagged Box Plot diagram and save to a file
    <GREEK>     Δημιουργία διαγράμματος Box Plot με ετικέτες και αποθήκευση σε αρχείο
    */
    $objArrayGraph->createBoxPlot($labels, $filename);
}
$objArrayGraph->Free($objArrayGraph);

/*
<ENGLISH> Display the image to the user
<GREEK> Εμφάνιση της εικόνας στον χρήστη
*/
echo '<img src="'.$filename.'" alt="'.$img_alt.'">';
?>