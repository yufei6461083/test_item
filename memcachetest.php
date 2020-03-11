<?php
include 'Loader.php';
spl_autoload_register('Loader::autoload');
use App\tools\mucache;
use App\configs\MemCacheConfig;

$oMucache = new mucache(MemCacheConfig::$config, false);
// $oMucache->set('mail', 'zj@boyaa.com');
// echo $oMucache->get('mail');