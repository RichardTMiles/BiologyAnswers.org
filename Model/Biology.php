<?php
/**
 * Created by IntelliJ IDEA.
 * User: richardmiles
 * Date: 1/28/18
 * Time: 10:01 PM
 */

namespace Model;


use CarbonPHP\Error\PublicAlert;

class Biology extends GlobalMap
{

    /**
     * @throws PublicAlert
     */
    public function chapters(): void
    {
        global $chapters;
        $chapters = self::fetch('SELECT * FROM BiologyAnswers.Chapters');

        if (!\is_array($chapters)) {
            throw new PublicAlert('Failed to load chapters from the database.');
        }
    }

    public function chapter(int $number): void
    {
        global $sections;

        $sections = self::fetch('SELECT * FROM BiologyAnswers.Sections WHERE ChapterNumber = ?', $number);

    }

    public function section(int $chap, int $sect) : void
    {
        global $questions;
        $questions = self::fetch('SELECT * FROM BiologyAnswers.Questions WHERE ChapterNumber = ? AND SectionNumber = ?', $chap, $sect);
    }

    public function question(int $chapter, int $section, int $questionNumber)
    {
        global $question, $last, $next;

        $question = self::fetch('SELECT QuestionNumber, Question, Answer FROM BiologyAnswers.Questions WHERE ChapterNumber = ? AND SectionNumber = ? AND QuestionNumber = ?', $chapter, $section, $questionNumber);

        if (empty($question)) {
            return startApplication('Chapters');
        }


        $last = --$questionNumber === 0 ?
            '/Chapters' :
            "/Question/$chapter/$section/$questionNumber";

        $questionNumber += 2;

        $next = "/Question/$chapter/$section/$questionNumber";

        return true;
    }
}