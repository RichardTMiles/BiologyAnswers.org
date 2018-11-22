<?php

namespace App;

use CarbonPHP\Application;
use CarbonPHP\View;


class BiologyAnswers extends Application
{
    public function __construct($structure = null)
    {
        global $json;
        parent::__construct($structure);
        $json = [];
    }

    /**
     * This function must be implemented by the user to use the Route Class.
     * If no url is provided in $_SERVER['REQUEST_URI'], or $matched is
     * false when this class destructs the default route will be executed.
     * @return mixed
     */
    public function defaultRoute()
    {
        // Sockets will not execute this function
        View::$forceWrapper = true; // this will hard refresh the wrapper


        return $this->wrap()('Biology/Home.php');
    }

    public function startApplication($uri = null): bool
    {

        if ((AJAX || SOCKET) && $this->structure($this->events())->match('Search/{input}', 'Search', 'search')()) {
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
}



