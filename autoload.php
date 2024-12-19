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
 * @source             	: afw-examples/autoload.php
 * @fileNo             	: 
 * @version            	: 24.0.7
 * @created            	: 2024-11-30 20:00:00 UTC+3 
 * @updated            	: 2024-12-18 07:00:00 UTC+3
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @license 			: AGL-F
 * 
 * @since PHP 8.2.0
 */
declare(strict_types=1);

use ASCOOS\FRAMEWORK\Kernel\Core\{
    TObject,
    TError
};


defined ("ALEXSOFT_RUN_CMS") OR define ("ALEXSOFT_RUN_CMS", True);
defined('ASCOOS_RUN') OR define('ASCOOS_RUN', True);
defined('ASCOOS_FRAMEWORK_RUN') OR define('ASCOOS_FRAMEWORK_RUN', True);

$exConf = require_once "config/config.php";

//
$afw_examples = (!empty($exConf['afw_examples_path'])) ? $exConf['afw_examples_path'] : str_replace('/config', '', str_replace('\\', '/', __DIR__));
//
$afw_examples_fonts = (!empty($conf['afw_examples_fonts'])) ? $conf['afw_examples_fonts'] : $afw_examples.'/fonts';
//
$afw_path = (!empty($exConf['afw_path'])) ? $exConf['afw_path'] : str_replace('/afw-examples', '', str_replace('\\', '/', __DIR__)).'/afw';


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
 if (!$exConf['awes']) {
    require_once $afw_path."/autoload.php"; 
}

try {
    $obj = new TObject([
        'version'=>$exConf['version']
    ]);

    if ($exConf['afw_min_version'] > $obj->getClassVersion() ) {
        $e = new TError(sprintf("You have the <b>%s</b> version of Ascoos Framework. The minimum version required is <b>%s</b>.", intToVersionString($obj->getClassVersion(), 'XX.XX.XX'), intToVersionString($exConf['afw_min_version'], 'XX.XX.XX')), E_ASCOOS_NOTICE_INVALID_VERSION);
        echo $e;
        $e->Free($e);
        exit;
    }
    $obj->Free($obj);
} catch (TError $e) {
    echo $e->getMessage();
}
?>