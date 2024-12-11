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
 * @subpackage         	: Calculates the variance of the array.
 * @source             	: afw-examples/classes/TArrayHandler/Analysis/variance.php
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
require_once '../../../autoload.php';
require_once $afw_path.'/extras/arrays/TArrayAnalysisHandler.php';

use ASCOOS\FRAMEWORK\Extras\Arrays\Analysis\TArrayAnalysisHandler;


/*
<ENGLISH>   Data for analysis calculations
<GREEK>     Δεδομένα για υπολογισμούς ανάλυσης
*/ 
$arrayData = [1, 5, 3, 8, 9, 2, 4, 7, 6, 10, 12, 11, 14, 13, 15];

/*
<ENGLISH> Create an object with data
<GREEK> Δημιουργία αντικειμένου με δεδομένα
*/
$objArrayAnalysis = new TArrayAnalysisHandler($arrayData);

/*
<ENGLISH> Calculate the variance
<GREEK> Υπολογισμός διασποράς
*/
$variance = $objArrayAnalysis->variance();
echo "Variance: $variance<br><br>";

$objArrayAnalysis->Free($objArrayAnalysis);
?>