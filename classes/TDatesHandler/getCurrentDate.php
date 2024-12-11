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
 * @subpackage         	: Get the current date.
 * @source             	: afw-examples/classes/TDatesHandler/getCurrentDate.php
 * @fileNo             	: 
 * @version            	: 24.0.5
 * @created            	: 2024-12-10 07:00:00 UTC+3 
 * @updated            	:  
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @license 			: AGL-F
 * 
 * @since PHP 8.2
 */
require_once '../../autoload.php';
use ASCOOS\FRAMEWORK\Kernel\Dates\TDatesHandler;


/*
    <English>   Create a TDatesHandler object with a "Europe/Athens" time zone
    <Greek>     Δημιουργία αντικειμένου TDatesHandler με ζώνη ώρας "Europe/Athens"
*/
$objDates = new TDatesHandler('Europe/Athens');
echo "Class Initialized with Timezone: Europe/Athens<br><hr>"; 

/*
    <English>   We take the current date
    <Greek>     Παίρνουμε την τρέχουσα ημερομηνία
*/
$currentDate = $objDates->getCurrentDate("Y-m-d");
echo "Current Date: $currentDate<br>";  // Output: Current Date: YYYY-MM-DD

/*
    <English>   Example of using getCurrentDate with a different format
    <Greek>     Παράδειγμα χρήσης getCurrentDate με διαφορετικό μορφότυπο
*/
$currentDateFormatted = $objDates->getCurrentDate("d/m/Y");
echo "Current Date in format d/m/Y: $currentDateFormatted<br>";  // Output: Current Date in format d/m/Y: DD/MM/YYYY

$objDates->Free($objDates);
?>