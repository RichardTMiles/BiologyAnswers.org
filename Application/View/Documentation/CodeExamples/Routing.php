<?php

use Carbon\Route;
use Carbon\View;

const CONTENT = SERVER_ROOT . 'Public' . DS;

$url = new class extends Route        // Start the route with the structure of the default route const
{
    public function defaultRoute(): void   // If the uri is empty this will be executed and the script will exit
    {
        View::contents(CONTENT . 'Carbon.php') and die;   // Our caching condition: cache = (HTTP || HTTPS)
    }
};


// On match run function
$url->match('CarbonPHP/', function (){
    View::contents(CONTENT . 'CarbonPHP.php');
});

$html = function (string $fileName) {
    View::contents(CONTENT . $fileName .'.php'); };


$url->match('Home/', 'Carbon')->closure($html);

$url->structure($html);
$url->match('Multiple/', 'Carbon', '', '')->closure();
$url->match('with/the/same', 'Carbon')->closure();
$url->match('method/', 'Carbon')->closure();


