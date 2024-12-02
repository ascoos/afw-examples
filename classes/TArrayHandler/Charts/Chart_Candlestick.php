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
 * @subpackage         	: Creates a candlestick chart from the array data.
 * @source             	: afw-examples/classes/TArrayHandler/Charts/Chart_Candlestick.php
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
<ENGLISH>   OHLC data for the candlestick chart.
<GREEK>     Δεδομένα OHLC για το διάγραμμα κηροπηγίων
*/
$ohlcData = [
    ['open' => 20, 'high' => 25, 'low' => 15, 'close' => 22],
    ['open' => 22, 'high' => 30, 'low' => 18, 'close' => 28],
    ['open' => 28, 'high' => 35, 'low' => 25, 'close' => 32],
    ['open' => 32, 'high' => 40, 'low' => 30, 'close' => 38],
    ['open' => 28, 'high' => 35, 'low' => 25, 'close' => 32],
    ['open' => 42, 'high' => 50, 'low' => 10, 'close' => 27]
];


/*
<ENGLISH>   Create an object with data
<GREEK>     Δημιουργία αντικειμένου με δεδομένα
*/
$graphHandler = new TArrayGraphHandler($ohlcData);


/*
<ENGLISH>   CrCreate a candlestick chart and save to a file
<GREEK>     Δημιουργία διαγράμματος κηροπηγίων και αποθήκευση σε αρχείο
*/
$graphHandler->createCandlestickChart('candlestick_chart.png');

/*
<ENGLISH> Display the image to the user
<GREEK> Εμφάνιση της εικόνας στον χρήστη
*/
echo '<img src="candlestick_chart.png" alt="Candlestick Chart">';

?>