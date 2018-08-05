<?php

namespace App;

use CarbonPHP\Application;
use CarbonPHP\View;


class BiologyAnswers extends Application
{
    public function defaultRoute() : bool  // Sockets will not execute this
    {
        return $this->wrap()('Biology/Home.php');  // don't change how wrap works, I know it looks funny
    }

    public function wrap() : callable
    {
        return function (string $file) : bool {
            return View::content(APP_VIEW . $file);
        };
    }

    public function search()
    {
        return function ($class, $method, $argv) {
            global $alert, $json;

            $json['Argv'] = $argv;

            $argv = CM($class, $method, $argv)();

            if (!file_exists(SERVER_ROOT . $file = (APP_VIEW . $class . DS . $method . '.hbs'))) {
                $alert = 'Mustache Template Not Found ' . $file;
            }

            if (!is_array($alert)) {
                $alert = array();
            }

            if (!is_array($json)) {
                $json = [];
            }

            $json = array_merge($json, [
                'prev' => $json,
                'Errors' => $alert,
                'Event' => 'Controller->Model',   // This doesn't do anything.. Its just a mental note when I look at the json's in console (controller->model only)
                'Model' => $argv,
                'Mustache' => DS . $file
            ]);

            header('Content-Type: application/json'); // Send as JSON

            print PHP_EOL . json_encode($json) . PHP_EOL; // ne
        };
    }

    public function MVC() : callable
    {
        return function (string $class, string $method, array &$argv = []) {
            return MVC($class, $method, $argv);         // So I can throw in ->structure($route->MVC())-> anywhere
        };
    }

    public function startApplication($uri = null): bool
    {
        if ((AJAX || SOCKET) && $this->structure($this->events('#pjax-content'))->match('Search/{input}','Search', 'search')()) {
            return true;
        }

        $this->structure($this->wrap());

        if ($this->match('Home', 'Biology/Home.php')()) {
            return true;
        }

        $this->structure($this->MVC());

        return $this->match('Chapters', 'Biology', 'Chapters')() ||
            $this->match('Chapter/{number}/', 'Biology', 'Chapter')() ||
            $this->match('Section/{chapter}/{section}/', 'Biology', 'Section')() ||
            $this->match('Question/{chapter}/{section}/{question}/', 'Biology', 'Question')();
    }


};






