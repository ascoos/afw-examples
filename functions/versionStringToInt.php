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
 * @subpackage         	: Converts a version string format to an integer using a mask.
 * @source             	: afw-examples/functions/versionStringToInt.php
 * @fileNo             	: 
 * @version            	: 24.0.2
 * @created            	: 2024-12-02 07:00:00 UTC+3  
 * @updated            	: 
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @license 			: AGL-F
 * 
 * @since PHP 8.2
 */
require_once "../autoload.php";

// Convert string version format to integer
echo versionStringToInt('1.00.00', 'X.XX.XX')."<br>";                   // Outputs: 10000
echo versionStringToInt('24.00.00.0000', 'XX.XX.XX.XXXX')."<br>";       // Outputs: 2400000000
echo versionStringToInt('8.02.00', 'X.XX.XX')."<br>";                   // Outputs: 80200
echo versionStringToInt('5.03.00', 'X.XX.XX')."<br>";                   // Outputs: 50300
echo versionStringToInt('24.02.01', 'XX.XX.XX')."<br>";                 // Outputs: 240201
echo versionStringToInt('5.03.00.1345', 'X.XX.XX.XXXX')."<br>";         // Outputs: 503001345
echo versionStringToInt('1.05.00.345', 'X.XX.XX.XXX')."<br>";           // Outputs: 10500345
echo versionStringToInt('125.02.01.1345', 'XXX.XX.XX.XXXX')."<br>";     // Outputs: 12502011345
echo versionStringToInt('7.01.23', 'X.XX.XX')."<br>";                   // Outputs: 70123
echo versionStringToInt('0.00.50', 'X.XX.XX')."<br>";                   // Outputs: 50
echo versionStringToInt('0.00.05', 'X.XX.XX')."<br>";                   // Outputs: 5
echo versionStringToInt('4.02.01', 'X.XX.XX')."<br>";                   // Outputs: 40201
echo versionStringToInt('4.02.01.1345', 'X.XX.XX.XXXX')."<br>";         // Outputs: 402011345
echo versionStringToInt('502.01.00.1345', 'XXX.XX.XX.XXXX')."<br>";     // Outputs: 50201001345
echo versionStringToInt('0.12.34', 'X.XX.XX')."<br>";                   // Outputs: 1234
?>

