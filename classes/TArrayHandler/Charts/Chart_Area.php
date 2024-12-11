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
    <ENGLISH> Data for the area chart
    <GREEK> Δεδομένα για το διάγραμμα περιοχής
    */ 
    $arrayData = [10, 20, 30, 40, 50];

    $filename = 'area_chart_simple.png';
    $img_alt = 'Area Chart';
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
        [5, 30],
        [6, 40],
        [7, 35],
        [8, 45],
        [9, 50],
        [10, 55]
    ];

    $filename = 'area_chart_complex.png';
    $img_alt = 'Area Chart Complex';
}

    /*
    <ENGLISH> Create an object with data
    <GREEK> Δημιουργία αντικειμένου με δεδομένα
    */
    $objArrayGraph = new TArrayGraphHandler($arrayData, [
        'width' => 800, 
        'height' => 600, 
        'fontPath' => $afw_examples_fonts.'/Noto/NotoSans-Regular.ttf',
        'showValues' => true, // Ενεργοποίηση εμφάνισης τιμών
        'colorIndex' => 14 // Επιλογή χρώματος: 0=Red, 1=Green, 2=Blue, 3=Yellow, 4=Cyan, 5=Magenta, 6=Maroon, 7=Dark Green, 8=Navy, 9=Olive, 10=Purple, 11=Teal, 12=Orange, 13=Pink, 14=Indigo, 15=Deep Pink
    ]);

    /*
    <ENGLISH> Create an area diagram and save to a file
    <GREEK> Δημιουργία διαγράμματος περιοχής και αποθήκευση σε αρχείο
    */   
    $objArrayGraph->createAreaChart($filename);

    /*
    <ENGLISH> Display the image to the user
    <GREEK> Εμφάνιση της εικόνας στον χρήστη
    */
    echo '<img src="'.$filename.'" alt="'.$img_alt.'">';
?>