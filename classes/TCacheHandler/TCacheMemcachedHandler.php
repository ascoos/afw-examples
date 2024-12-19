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
 * @subpackage         	: Handles Memcached-based Cache.
 * @source             	: afw-examples/classes/TCacheHandler/TCacheMemcacheHandler.php
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



//global $conf;
//$conf['cacheType'] = 'Memcached';

use ASCOOS\FRAMEWORK\Kernel\{
    Core\TObject,
    Cache\Memcached\TCacheMemcachedHandler
};

class TExampleObject extends TObject
{
    protected $cacheHandler;

    /**
     * Constructor.
     * 
     * @desc <English>  Initialize the class with given properties.
     * @desc <Greek>    Αρχικοποιεί την κλάση με τις παρεχόμενες ιδιότητες.
     * 
     * @param array $properties   <English>  An associative array of properties to initialize the class with.
     *                            <Greek>    Ένας συσχετιστικός πίνακας ιδιοτήτων για την αρχικοποίηση της κλάσης.
     */
    public function __construct(array $properties = [])
    {
        parent::__construct($properties);
        $this->cacheHandler = new TCacheMemcachedHandler(3600, [
            'memcached' => [
                'host' => '127.0.0.1',
                'port' => 11211,
                'options' => [
//                    Memcached::OPT_BINARY_PROTOCOL => true,
                    Memcached::OPT_BUFFER_WRITES => true,
                    Memcached::OPT_CONNECT_TIMEOUT => 1000
                ]
            ]
        ]);
    }

    /**
     * Fetch data from cache or source.
     * 
     * @desc <English>  Fetch data from the cache if available, or retrieve from the source.
     * @desc <Greek>    Ανακτά δεδομένα από την cache εάν είναι διαθέσιμα ή από την πηγή.
     * 
     * @param string $cacheKey  <English> The key for the cache. 
     *                          <Greek> Το κλειδί για την cache.
     * @return mixed    <English> The fetched data.
     *                  <Greek> Τα ανακτημένα δεδομένα.
     */
    public function fetchData(string $cacheKey): mixed
    {
        $cachedData = $this->cacheHandler->checkCache($cacheKey);
        if ($cachedData) {
            return $cachedData;
        }

        // Simulate data retrieval from a data source (e.g., database)
        $data = ['data' => 'sample data'];

        // Save data to cache
        $this->cacheHandler->saveCache($cacheKey, $data);

        return $data;
    }

    public function getCacheStat() {
        return $this->cacheHandler->getStats();
    }

    public function clearCache(?string $cacheKey = null) 
    {
        $this->cacheHandler->clearCache($cacheKey);
    }
}

/*
<English>   Example of use the TExampleObject class
<Greek>     Παράδειγμα χρήσης της κλάσης TExampleObject
*/
$example = new TExampleObject([
    'config' => [
        'extensions' => [
            'subExtension1' => ['version' => '1.0.0'],
            'subExtension2' => ['enabled' => true]
        ],
        'newProperty' => 'newValue'
    ]
]);

/*
<English>   Get data using cache.
<Greek>     Ανάκτηση δεδομένων χρησιμοποιώντας την cache.
*/
$data = $example->fetchData('example_key');
print_r($data);
print_r($example->getCacheStat());
//$example->clearCache('example_key');


/*
<English>   Get a deep property 'version' for 'subExtension1' in the 'extensions' array.
<Greek>     Ανάκτηση μιας βαθιάς ιδιότητας 'version' για το 'subExtension1' στον πίνακα 'extensions'.
*/
$version = $example->getDeepProperty(['config', 'extensions', 'subExtension1', 'version']);
echo "Version: $version\n";

/*
<English>   Get a deep property 'enabled' for 'subExtension2' in the 'extensions' array.
<Greek>     Ανάκτηση μιας βαθιάς ιδιότητας 'enabled' για το 'subExtension2' στον πίνακα 'extensions'.
*/
$enabled = $example->getDeepProperty(['config', 'extensions', 'subExtension2', 'enabled']);
echo "Enabled: " . ($enabled ? 'true' : 'false') . "\n";

/*
<English>   Get a deep property 'newProperty' at the 'config' level.
<Greek>     Ανάκτηση μιας βαθιάς ιδιότητας 'newProperty' στο επίπεδο του 'config'.
*/
$newProperty = $example->getDeepProperty(['config', 'newProperty']);
echo "New Property: $newProperty\n";

/*
<English>   Print the properties for control
<Greek>     Εκτύπωση των ιδιοτήτων για έλεγχο
*/
print_r($example->getProperties());

$example->Free($example);

?>