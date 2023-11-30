<?php
require '../app/Autoloader.php';
\App\Autoloader::register();
if(isset($GET['p'])){
    $p=$GET['p'];
}
else
    $p='home';
ob_start();
if($p==='home'){
    require '../pages/Home.php';
}
elseif($p==='single'){
    require '../pages/Single.php';
}
$content=ob_get_clean();
require '../pages/templates/default.php';

