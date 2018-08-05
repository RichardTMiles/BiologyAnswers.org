<?php
/**
 * Created by IntelliJ IDEA.
 * User: richardmiles
 * Date: 1/28/18
 * Time: 9:59 PM
 */

namespace Controller;


use CarbonPHP\Error\PublicAlert;
use CarbonPHP\Request;

class Biology extends Request
{

    public function chapters() : bool {
        return true;
    }


    /**
     * @param $number
     * @return bool
     * @throws PublicAlert
     */
    public function chapter($number) : bool {

        if (!$number = $this->set($number)->int()) {
            throw new PublicAlert('The chapter you selected appears invalid');
        }
        return $number;
    }


    /**
     * @param $chapter
     * @param $section
     * @return array
     * @throws PublicAlert
     */
    public function section ($chapter, $section) : array {

        [$chapter, $section] = $this->set($chapter, $section)->int();

        if (!$chapter || !$section){
            throw new PublicAlert('The chapter or section entered appears invalid.');
        }

        return [$chapter, $section];
    }


    /**
     * @param $chapter
     * @param $section
     * @param $question
     * @return array
     * @throws PublicAlert
     */
    public function question ($chapter, $section, $question) : array {

        [$chapter, $section, $question] = $this->set($chapter, $section, $question)->int();

        if (!$chapter || !$section || !$question) {
            throw new PublicAlert('Sorry, something went wrong! Please try again!');
        }

        return [$chapter, $section, $question];

    }



}