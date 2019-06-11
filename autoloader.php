<?
function __autoload($className) {
    $fileName = "./". $className .".php";
    include_once($fileName);
}