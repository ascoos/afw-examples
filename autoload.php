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
 * @package            	: ASCOOS FRAMEWORK (AFW)
 * @subpackage         	: ASCOOS FRAMEWORK Autoload File for examples
 * @source             	: [EXAMPLES]/autoload.php
 * @fileNo             	: 
 * @version            	: 24.0.4
 * @created            	: 2024-11-30 20:00:00 UTC+3 
 * @updated            	: 2024-12-05 07:00:00 UTC+3
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @license 			: AGL-F
 * 
 * @since PHP 8.2.0
 */
//declare(strict_types=1);
$afw_examples = str_replace('\\', '/', __DIR__);
$afw_path = str_replace('/afw-examples', '', str_replace('\\', '/', __DIR__)).'/afw';
$afw_examples_fonts = $afw_examples.'/fonts';

/**
 * for paths:
 * .../afw
 * .../afw_examples
 * 
 * If you are using other paths that you have installed Ascoos Framework 
 * and Ascoos Framework Examples you should adjust the paths 
 * accordingly so that it can work.
 * 
 */
require_once($afw_path.'/autoload.php'); 

?>