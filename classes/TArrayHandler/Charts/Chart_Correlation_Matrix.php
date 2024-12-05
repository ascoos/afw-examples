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
 * @subpackage         	: Creates a correlation matrix from the array data.
 * @source             	: afw-examples/classes/TArrayHandler/Charts/Chart_Correlation_Matrix.php
 * @fileNo             	: 
 * @version            	: 24.0.4
 * @created            	: 2024-12-05 07:00:00 UTC+3 
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
<ENGLISH>   Change this value to switch between one-dimensional and multidimensional data
<GREEK>     Αλλαγή αυτής της τιμής για να εναλλάσσεις μεταξύ μονοδιάστατων και πολυδιάστατων δεδομένων
*/
$multidimensional = true;

if (!$multidimensional) {
    /*
    <ENGLISH> Data for correlation matrix (Non-multidimensional data)
    <GREEK> Δεδομένα για τον πίνακα συντελεστών συσχέτισης (Μη πολυδιάστατα δεδομένα)
    */
    $arrayData = [1, 2, 3, 4, 5];

    $filename = 'correlation_single_matrix.png';
    $img_alt = 'Correlation Matrix';
} else {
    /*
    <ENGLISH> Data for correlation matrix (Example of complex multi-feature data with fluctuating values)
    <GREEK> Δεδομένα για τον πίνακα συντελεστών συσχέτισης (Παράδειγμα σύνθετων δεδομένων πολλαπλών χαρακτηριστικών με κυμαινόμενες τιμές)
    */
    $arrayData = [
        [4, 9, 2, 7, 3, 5, 6, 8, 1, 10],
        [10, 5, 6, 3, 8, 2, 7, 4, 9, 1],
        [1, 4, 7, 2, 9, 6, 3, 10, 5, 8],
        [8, 3, 6, 5, 10, 1, 2, 7, 9, 4],
        [2, 10, 3, 6, 4, 9, 5, 1, 8, 7],
        [7, 2, 9, 4, 1, 8, 3, 5, 6, 10],
        [5, 7, 1, 8, 6, 3, 10, 2, 4, 9],
        [3, 1, 8, 9, 7, 4, 2, 6, 5, 10],
        [9, 6, 4, 10, 2, 5, 8, 3, 7, 1],
        [6, 8, 10, 1, 5, 7, 4, 9, 2, 3]
    ];

    $filename = 'correlation_multidimensional_matrix.png';
    $img_alt = 'Correlation Multidimensional Matrix';
}

/*
<ENGLISH> Create an object with data
<GREEK> Δημιουργία αντικειμένου με δεδομένα
*/
$objArrayGraph = new TArrayGraphHandler($arrayData, ['width'=>800, 'height'=>600]);

/*
<ENGLISH> Create a correlation matrix and save to a file
<GREEK> Δημιουργία πίνακα συντελεστών συσχέτισης και αποθήκευση σε αρχείο
*/
$objArrayGraph->createCorrelationMatrix($filename);
$objArrayGraph->Free($objArrayGraph);

/*
<ENGLISH> Display the image to the user
<GREEK> Εμφάνιση της εικόνας στον χρήστη
*/
echo '<img src="'.$filename.'" alt="'.$img_alt.'">';
?>
