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
 * @subpackage         	: Creates a funnel chart from the array data.
 * @source             	: afw-examples/classes/TArrayHandler/Charts/Chart_Funnel.php
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
<ENGLISH> Data for funnel chart
<GREEK> Δεδομένα για το διάγραμμα χωνιού
*/
$arrayData = [500, 400, 300, 200, 100];
$labels = ["Initial Contact", "Qualification", "Proposal", "Negotiation", "Closed Deal"];

$objArrayGraph = new TArrayGraphHandler($arrayData, [
    'width' => 800, 
    'height' => 600, 
    'backgroundColorIndex' => 1, // 0=Black, 1=White, 2=Red, 3=Green, 4=Blue, 5=Yellow, 6=Cyan, 7=Magenta, 8=Maroon, 9=Dark Green, 10=Navy, 11=Olive, 12=Purple, 13=Teal, 14=Orange, 15=Pink, 16=Indigo, 17=Deep Pink
    'topWidth' => 600,           // Προαιρετικό πλάτος στην κορυφή του χωνιού
    'bottomWidth' => 200,        // Προαιρετικό πλάτος στον πάτο του χωνιού
    'sectionHeight' => 80,       // Προαιρετικό ύψος για κάθε τμήμα του χωνιού
    'padding' => 20,             // Προαιρετική απόσταση ανάμεσα στα τμήματα
    'colorIndices' => [2, 3, 4, 5, 6],  // Δείκτες χρωμάτων για το TColorHandler
                                        // 0=Black, 1=White, 2=Red, 3=Green, 4=Blue, 5=Yellow, 6=Cyan, 7=Magenta, 8=Maroon, 9=Dark Green, 10=Navy, 11=Olive, 12=Purple, 13=Teal, 14=Orange, 15=Pink, 16=Indigo, 17=Deep Pink
    'fontPath' => $afw_examples_fonts.'/Noto/NotoSans-Regular.ttf', // Διαδρομή προς το αρχείο γραμματοσειράς
    'labels' => $labels           // Προσαρμοσμένες ετικέτες για τα στάδια    
]);

/*
<ENGLISH>   Create a funnel chart and save to a file.
<GREEK>     Δημιουργία διαγράμματος χωνιού και αποθήκευση σε αρχείο.
*/
$objArrayGraph->createFunnelChart('funnel_chart.png');

/*
<ENGLISH> Display the image to the user.
<GREEK> Εμφάνιση της εικόνας στον χρήστη.
*/
echo '<img src="funnel_chart.png" alt="Funnel Chart">';
?>

