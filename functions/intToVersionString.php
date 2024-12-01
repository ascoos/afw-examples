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
 * @subpackage         	: Converts an integer to a version string format using a mask.
 * @source             	: [EXAMPLES]/functions/intToVersionString.php
 * @fileNo             	: 
 * @version            	: 24.0.2
 * @created            	: 2024-07-01 20:00:00 UTC+3 
 * @updated            	: 2024-11-30 07:00:00 UTC+3 
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @license 			: AGL-F
 * 
 * @since PHP 8.2
 */
require_once "../autoload.php";

// Testing the function
echo intToVersionString(10000, 'X.XX.XX')."<br>";                   // Outputs: 1.00.00
echo intToVersionString(2400000000, 'XX.XX.XX.XXXX')."<br>";        // Outputs: 24.00.00.0000
echo intToVersionString(80200, 'X.XX.XX')."<br>";                   // Outputs: 8.02.00
echo intToVersionString(50300, 'X.XX.XX')."<br>";                   // Outputs: 5.03.00
echo intToVersionString(240201, 'X.XX.XX')."<br>";                  // Outputs: 2.40.20
echo intToVersionString(240201, 'XX.XX.XX')."<br>";                 // Outputs: 24.02.01
echo intToVersionString(503001345, 'X.XX.XX.XXXX')."<br>";          // Outputs: 5.03.00.1345
echo intToVersionString(2402011345, 'X.XX.XX.XXXX')."<br>";         // Outputs: 2.40.20.1134
echo intToVersionString(10500345, 'X.XX.XX.XXX')."<br>";            // Outputs: 1.05.00.345
echo intToVersionString(1250201001345, 'XXX.XX.XX.XXXX')."<br>";    // Outputs: 125.02.01.1345
echo intToVersionString(701234, 'X.XX.XX')."<br>";                  // Outputs: 7.01.23
echo intToVersionString(50, 'X.XX.XX')."<br>";                      // Outputs: 0.00.50
echo intToVersionString(5, 'X.XX.XX')."<br>";                       // Outputs: 0.00.05
echo intToVersionString(40201, 'X.XX.XX')."<br>";                   // Outputs: 4.02.01
echo intToVersionString(402011345, 'X.XX.XX.XXXX')."<br>";          // Outputs: 4.02.01.1345
echo intToVersionString(50201001345, 'XXX.XX.XX.XXXX')."<br>";      // Outputs: 502.01.00.1345
echo intToVersionString(1234, 'X.XX.XX')."<br>";                    // Outputs: 0.12.34


?>
