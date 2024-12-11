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

/*
<ENGLISH>   Data for the Gantt chart
<GREEK>     Δεδομένα για το διάγραμμα Gantt
*/
$tasks = [
    ['Εργασία 1', '2024-01-01', '2024-01-10'],
    ['任务 1', '2024-02-01', '2024-12-31'],
    ['任務 1', '2024-03-15', '2024-04-15'],
    ['タスク 1', '2024-05-01', '2024-10-01'],
    ['Aufgabe 1', '2024-06-10', '2024-06-20'],
    ['Tarefa 1', '2024-07-01', '2025-01-01'],
    ['Tarea 1', '2024-08-05', '2024-08-15'],
    ['Задание 1', '2024-09-01', '2024-12-01'],
    ['Compito 1', '2024-10-10', '2024-11-10'],
    ['Taak 1', '2024-11-15', '2025-02-15'],
    ['Úloha 1', '2024-12-20', '2024-12-25'],
    ['1 užduotis', '2025-01-01', '2025-07-01'],
    ['Görev 1', '2025-02-01', '2025-03-01']
];

/*
<ENGLISH>   Path to font file
<GREEK>     Διαδρομή προς το αρχείο γραμματοσειράς
*/
$fontPath = $afw_examples_fonts.'/Murecho/Murecho-Regular.ttf';

/*
<ENGLISH>   Create an object with data
<GREEK>     Δημιουργία αντικειμένου με δεδομένα
*/
$objArrayGraph = new TArrayGraphHandler($tasks, ['width' => 1000, 'height' => 600]);

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