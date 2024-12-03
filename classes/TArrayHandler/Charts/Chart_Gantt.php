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
 * @subpackage         	: Creates a Gantt chart from the array data.
 * @source             	: afw-examples/classes/TArrayHandler/Charts/Chart_Gantt.php
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
<ENGLISH>   Data for the Gantt chart
<GREEK>     Δεδομένα για το διάγραμμα Gantt
*/
$tasks = [
    ['Εργασία 1', '2024-01-01', '2024-01-10'],
    ['Εργασία 2', '2024-02-01', '2024-12-31'],
    ['Εργασία 3', '2024-03-15', '2024-04-15'],
    ['Εργασία 4', '2024-05-01', '2024-10-01'],
    ['Task 5',    '2024-06-10', '2024-06-20'],
    ['Tâche 6',   '2024-07-01', '2025-01-01'],
    ['Aufgabe 7', '2024-08-05', '2024-08-15'],
    ['Задание 8', '2024-09-01', '2024-12-01'],
    ['Tarea 9',   '2024-10-10', '2024-11-10'], 
    ['Compito 10', '2024-11-15', '2025-02-15'],
    ['Εργασία 11', '2024-12-20', '2024-12-25'],
    ['Task 12',   '2025-01-01', '2025-07-01'],
    ['Aufgabe 13', '2025-02-01', '2025-03-01']
];


/*
<ENGLISH>   Path to font file
<GREEK>     Διαδρομή προς το αρχείο γραμματοσειράς
*/
$fontPath = $afw_examples_fonts.'/Noto/NotoSans-Regular.ttf';

/*
<ENGLISH>   Create an object with data
<GREEK>     Δημιουργία αντικειμένου με δεδομένα
*/
$objArrayGraph = new TArrayGraphHandler($tasks);


/*
<ENGLISH>   Create a Gantt diagram and save to a file.
<GREEK>     Δημιουργία διαγράμματος Gantt και αποθήκευση σε αρχείο
*/  
$objArrayGraph->createGanttChart('gantt_chart.png', $fontPath);

/*
<ENGLISH> Display the image to the user
<GREEK> Εμφάνιση της εικόνας στον χρήστη
*/
echo '<img src="gantt_chart.png" alt="Gantt Chart">';

?>