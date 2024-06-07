<?php 
include 'config.php';
if (isset($GLOBALS['_GET']['page'])) {
    include './templates/'.$GLOBALS['_GET']['page'].'.php';
}
else{
    include $defaultRootPage;    
}
include 'viewer.php';
