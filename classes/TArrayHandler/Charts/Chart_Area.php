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
 * @subpackage         	: Creates an area chart from the array data.
 * @source             	: afw-examples/classes/TArrayHandler/Charts/Chart_Area.php
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

$multidimensional = true;

if (!$multidimensional) {
    /*
    <ENGLISH> Data for the area chart
    <GREEK> Δεδομένα για το διάγραμμα περιοχής
    */ 
    $arrayData = [10, 20, 30, 40, 50];

    $objArrayGraph = new TArrayGraphHandler($arrayData);

    /*
    <ENGLISH> Create an area diagram and save to a file
    <GREEK> Δημιουργία διαγράμματος περιοχής και αποθήκευση σε αρχείο
    */   
    $objArrayGraph->createAreaChart('area_chart_simple.png');

    /*
    <ENGLISH> Display the image to the user
    <GREEK> Εμφάνιση της εικόνας στον χρήστη
    */
    echo '<img src="area_chart_simple.png" alt="Area Chart">';

} else {
    /*
    <ENGLISH> Data for the area chart
    <GREEK> Δεδομένα για το διάγραμμα περιοχής
    */ 
    $arrayData = [
        [1, 5],
        [2, 15],
        [3, 20],
        [4, 25],
        [5, 30]
    ];

    $objArrayGraph = new TArrayGraphHandler($arrayData);

    /*
    <ENGLISH> Create an area diagram and save to a file
    <GREEK> Δημιουργία διαγράμματος περιοχής και αποθήκευση σε αρχείο
    */   
    $objArrayGraph->createAreaChart('area_chart_complex.png');

    
    /*
    <ENGLISH> Display the image to the user
    <GREEK> Εμφάνιση της εικόνας στον χρήστη
    */
    echo '<img src="area_chart_complex.png" alt="Area Chart">';
}

?>