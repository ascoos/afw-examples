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
 * @subpackage         	: Get national holidays for a given year.
 * @source             	: afw-examples/classes/TDatesHandler/getNationalHolidays.php
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
    <English>   Example use: getNationalHolidays with external holiday table
    <Greek>     Παράδειγμα χρήσης: getNationalHolidays με εξωτερικό πίνακα αργιών
*/
$year = 2025;
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
$italian_holidays = [
    "New Year's Day" => "$year-01-01",
    "Epiphany" => "$year-01-06", 
    "Independence Day" => "$year-04-25",
    "Labor Day" => "$year-05-01",
    "Republic Day" => "$year-06-02",
    "Assumption Day" => "$year-08-15",
    "All Saints' Day" => "$year-11-01",
    "Feast of the Immaculate Conception" => "$year-12-08",
    "Christmas Day" => "$year-12-25",
    "St. Stephen's Day" => "$year-12-26"           
];


$greek_topic_holidays = [
    "Patron Saint of Alexandroupolis" => "$year-12-06",
    "Liberation of Alexandroupolis" => "$year-05-14"
];


echo "<br><br>**********  1  **********<br>";
/*
    <English>   Create a TDatesHandler object with "Europe/Athens" time zone and properties
    <Greek>     Δημιουργία αντικειμένου TDatesHandler με ζώνη ώρας "Europe/Athens" και ιδιότητες
*/
$objDates = new TDatesHandler('Europe/Athens', [
    'year' => $year,
    'holidays' => $greek_holidays,
    'have_holidays_orthodox_easter' => true,
//    'have_holidays_catholic_easter' => true,    
    'have_holidays_topic' => true,
    'topic_holidays' => $greek_topic_holidays
]);


$nationalHolidays = $objDates->getNationalHolidays();
echo "National Holidays of Greece in $year:<br>";
foreach ($nationalHolidays as $holiday => $date) {
    echo " &nbsp; &nbsp; &nbsp; $holiday: $date<br>";
}

$objDates->Free($objDates);




echo "<br><br>**********  2  **********<br>";
/*
    <English>   Create a TDatesHandler object with "Europe/Athens" time zone and properties
    <Greek>     Δημιουργία αντικειμένου TDatesHandler με ζώνη ώρας "Europe/Athens" και ιδιότητες
*/
$objDates = new TDatesHandler('Europe/Athens', [
    'holidays' => $italian_holidays,
    'have_holidays_catholic_easter' => true,
    'have_holidays_catholic_easter_second_day' => true    
]);


$nationalHolidays = $objDates->getNationalHolidays($year);
echo "National Holidays of Italy in $year:<br>";
foreach ($nationalHolidays as $holiday => $date) {
    echo " &nbsp; &nbsp; &nbsp; $holiday: $date<br>";
}

$objDates->Free($objDates);




echo "<br><br>**********  3  **********<br>";
/*
    <English>   Create a TDatesHandler object with "Europe/Athens" time zone
    <Greek>     Δημιουργία αντικειμένου TDatesHandler με ζώνη ώρας "Europe/Athens"
*/
$objDates = new TDatesHandler('Europe/Athens');


$nationalHolidays = $objDates->getNationalHolidays($year, $greek_holidays);
echo "National Holidays of Greece in $year:<br>";
foreach ($nationalHolidays as $holiday => $date) {
    echo " &nbsp; &nbsp; &nbsp; $holiday: $date<br>";
}

$objDates->Free($objDates);
?>