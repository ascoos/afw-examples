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
 * @subpackage         	: Calculate the date of Black Friday.
 * @source             	: afw-examples/classes/TDatesHandler/getBlackFriday.php
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

/*
    <English>   Create a TDatesHandler object with a "Europe/Athens" time zone
    <Greek>     Δημιουργία αντικειμένου TDatesHandler με ζώνη ώρας "Europe/Athens"
*/
$objDatesUS = new TDatesHandler('America/New_York', ['region' => 'US']);
echo "Class Initialized with Timezone: Europe/Athens<br><hr>"; 

// Παράδειγμα χρήσης: getBlackFriday για την περιοχή των ΗΠΑ
$blackFridayUS = $objDatesUS->getBlackFriday($year);
echo "Black Friday in $year (US): $blackFridayUS<br>";  // Output: Black Friday in 2024 (US): YYYY-MM-DD

$objDatesUS->Free($objDatesUS);


// Δημιουργία αντικειμένου TDatesHandler για την περιοχή της Ευρώπης
$objDatesEU = new TDatesHandler('Europe/Athens', ['region' => 'EU']);

// Παράδειγμα χρήσης: getBlackFriday για την περιοχή της Ευρώπης
$blackFridayEU = $objDatesEU->getBlackFriday($year);
echo "Black Friday in $year (EU): $blackFridayEU<br>";  // Output: Black Friday in 2024 (EU): YYYY-MM-DD

$objDatesEU->Free($objDatesEU);
?>