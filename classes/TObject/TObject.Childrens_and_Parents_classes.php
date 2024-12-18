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
 * @subpackage         	: Return the childrens or parents classes of the given class or object
 * @source             	: afw-examples/classes/TObject/TObject.Childrens_and_Parents_classes.php
 * @fileNo             	: 
 * @version            	: 24.0.7
 * @created            	: 2024-07-01 20:00:00 UTC+3
 * @updated            	: 2024-12-18 07:00:00 UTC+3
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @license 			: AGL-F
 * 
 * @since PHP 8.2.0
 */
declare(strict_types=1);

require_once "../../autoload.php";

use ASCOOS\FRAMEWORK\Kernel\Core\TObject;


/*
<English>   Example 1: Parent and Child Class
<Greek>     Παράδειγμα 1: Γονική και Παιδική Κλάση
*/
class ParentClass extends TObject {
    // You can add properties and methods here
}

class ChildClass extends ParentClass {
    // You can add properties and methods here
}


/*
<English>   Example 2: Other Parent and Child Class
<Greek>     Παράδειγμα 2: Άλλη Γονική και Παιδική Κλάση
*/
class AnotherParentClass extends TObject {
    // You can add properties and methods here
}

class AnotherChildClass extends AnotherParentClass {
    // You can add properties and methods here
}


/*
<English>   Use of Methods
<Greek>     Χρήση των Μεθόδων
*/
$parent = new ParentClass();
$child = new ChildClass();

echo "ChildClass parent classes:\n";
print_r($child->getParents());

echo "ParentClass children's classes:\n";
print_r($parent->getChildren());

$anotherParent = new AnotherParentClass();
$anotherChild = new AnotherChildClass();

echo "Parent classes of AnotherChildClass:\n";
print_r($anotherChild->getParents());

echo "AnotherParentClass children's classes:\n";
print_r($anotherParent->getChildren());

$tobject = new TObject();
echo "TObject children's classes:\n";
print_r($tobject->getChildren());
?>