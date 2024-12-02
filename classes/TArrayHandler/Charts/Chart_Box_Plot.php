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
 * @created            	: 2024-12-02 07:00:00 UTC+3 
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

$objArrayGraph = new TArrayGraphHandler($boxPlotData);

if (!$tagged) {
    /*
    <ENGLISH>   Create a Box Plot diagram without tags and save to a file
    <GREEK>     Δημιουργία διαγράμματος Box Plot χωρίς ετικέτες και αποθήκευση σε αρχείο
    */
    $objArrayGraph->createBoxPlot([], 'box_plot_no_labels.png');

    /*
    <ENGLISH> Display the image to the user
    <GREEK> Εμφάνιση της εικόνας στον χρήστη
    */
    echo '<img src="box_plot_no_labels.png" alt="Box Plot without tags">';

} else {
    /*
    <ENGLISH>   Table of labels of the diagram
    <GREEK>     Πίνακας ετικετών του διαγράμματος
    */
    $labels = ["Français", "Português", "Россия", "English", "Ελληνικά"];

    /*
    <ENGLISH>   Path to font file
    <GREEK>     Διαδρομή προς το αρχείο γραμματοσειράς
    */
    $fontPath = $afw_examples_fonts.'/Moderustic/Moderustic-Regular.ttf'; 

    /*
    <ENGLISH>   Create a tagged Box Plot diagram and save to a file
    <GREEK>     Δημιουργία διαγράμματος Box Plot με ετικέτες και αποθήκευση σε αρχείο
    */
    $objArrayGraph->createBoxPlot($labels, 'box_plot.png', $fontPath);

    /*
    <ENGLISH> Display the image to the user
    <GREEK> Εμφάνιση της εικόνας στον χρήστη
    */
    echo '<img src="box_plot.png" alt="Box Plot with tags">';
}



?>