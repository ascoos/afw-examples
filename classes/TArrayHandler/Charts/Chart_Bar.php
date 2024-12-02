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
 * @subpackage         	: Creates a bar chart from the array data.
 * @source             	: afw-examples/classes/TArrayHandler/Charts/Chart_Bar.php
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


/*
<ENGLISH>   Data for the chart
<GREEK>     Δεδομένα για το διάγραμμα
*/
$data = [
    'Français' => 40,
    'Português' => 30,
    'Россия' => 60,
    'English' => 50,    
    'Ελληνικά' => 70
];


/*
<ENGLISH>   Path to font file
<GREEK>     Διαδρομή προς το αρχείο γραμματοσειράς
*/
$fontPath = $afw_examples_fonts.'/Moderustic/Moderustic-Regular.ttf';


/*
<ENGLISH>   Create an object with data
<GREEK>     Δημιουργία αντικειμένου με δεδομένα
*/
$graphHandler = new TArrayGraphHandler($data);

/*
<ENGLISH>   Create a diagram and save to a file.
<GREEK>     Δημιουργία διαγράμματος και αποθήκευση σε αρχείο
*/
$graphHandler->createBarChart('bar_chart.png', $fontPath);

/*
<ENGLISH> Display the image to the user
<GREEK> Εμφάνιση της εικόνας στον χρήστη
*/
echo '<img src="bar_chart.png" alt="Bar Chart">';

?>