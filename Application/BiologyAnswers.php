<?php

namespace App;

use CarbonPHP\Application;
use CarbonPHP\Error\PublicAlert;

class BiologyAnswers extends Application
{
    public function defaultRoute() : bool  // Sockets will not execute this
    {
        return $this->wrap()('biology/home.php');  // don't change how wrap works, I know it looks funny
    }

    public function search()
    {
        return function ($class, $method, $argv) {
            global $alert, $json;

            $json['Argv'] = $argv;

            $argv = self::CM($class, $method, $argv)();

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


    /**
     * @param string $uri
     * @return bool
     * @throws PublicAlert
     */
    public function startApplication(string $uri): bool
    {
        if ((AJAX || SOCKET) && $this->structure($this->search())->match('Search/{input?}','Search', 'search')()) {
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






