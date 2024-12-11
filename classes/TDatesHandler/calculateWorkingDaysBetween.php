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
 * @subpackage         	: Calculate the number of working days between two dates.
 * @source             	: afw-examples/classes/TDatesHandler/calculateWorkingDaysBetween.php
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

$year = 2024;
$greek_holidays = [
    "New Year's Day" => "$year-01-01",
    "Epiphany" => "$year-01-06",
    "Annunciation Day" => "$year-03-25",
    "Labor Day" => "$year-05-01",
    "Assumption Day" => "$year-08-15",
    "Ochi Day" => "$year-10-28",
    "Christmas Day" => "$year-12-25",
    "Christmas 2st Day" => "$year-12-26",
];

$greek_topic_holidays = [
    "Patron Saint of Alexandroupolis" => "$year-12-06",
    "Liberation of Alexandroupolis" => "$year-05-14"
];


/*
    <English>   Create a TDatesHandler object with a "Europe/Athens" time zone
    <Greek>     Δημιουργία αντικειμένου TDatesHandler με ζώνη ώρας "Europe/Athens"
*/
$objDates = new TDatesHandler('Europe/Athens', ['holidays' => $greek_holidays]);
$objDates->setProperties($greek_topic_holidays, 'holidays');
echo "Class Initialized with Timezone: Europe/Athens<br><hr>";  

// Παράδειγμα χρήσης: calculateWorkingDaysBetween
$startDate = "2024-12-01";
$endDate = "2024-12-31";
$workingDaysBetween = $objDates->calculateWorkingDaysBetween($startDate, $endDate);
echo "Working days between $startDate and $endDate: $workingDaysBetween days<br>";  // Output: 19 days

$objDates->Free($objDates);
?>