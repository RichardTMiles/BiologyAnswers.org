<?php

use Carbon\Route;
use Carbon\View;


$url = new class extends Route
{
    public function defaultRoute()  // Sockets will not execute this
    {
        return $this->wrap()('Biology/Home.php');  // don't change how wrap works, I know it looks funny
    }

    public function fullPage()
    {
        return catchErrors(function (string $file) {
            return include APP_VIEW . $file;
        });
    }

    public function wrap()
    {
        return function (string $file) {
            return View::content(APP_VIEW . $file);
        };
    }

    public function MVC()
    {
        return function (string $class, string $method, array &$argv = []) {
            return MVC($class, $method, $argv);         // So I can throw in ->structure($route->MVC())-> anywhere
        };
    }

    public function events()
    {
        return function ($class, $method, $argv) {
            global $alert, $json;

            $argv = CM($class, $method, $argv);

            if (!file_exists(SERVER_ROOT . $file = (APP_VIEW . $class . DS . $method . '.hbs'))) {
                $alert = 'Mustache Template Not Found ' . $file;
            }

            if (!is_array($alert)) {
                $alert = array();
            }

            $json = array_merge($json, [
                'Errors' => $alert,
                'Event' => 'Controller->Model',   // This doesn't do anything.. Its just a mental note when I look at the json's in console (controller->model only)
                'Model' => $argv,
                'Mustache' => DS . $file
            ]);

            print PHP_EOL . json_encode($json) . PHP_EOL; // new line ensures it sends through the socket

            return true;
        };
    }

};




if ((AJAX || SOCKET) && (string)$url->structure($url->events())->match('Search/{input}','Search', 'search')) {
        return true;
}

$url->structure($url->wrap());

if ((string)$url->match('Home', 'Biology/Home.php')) {
    return true;
}

$url->structure($url->MVC());

return ((string)$url->match('Chapters', 'Biology', 'Chapters') ||
    (string)$url->match('Chapter/{number}/', 'Biology', 'Chapter') ||
    (string)$url->match('Section/{chapter}/{section}/', 'Biology', 'Section') ||
    (string)$url->match('Question/{chapter}/{section}/{question}/', 'Biology', 'Question'));

