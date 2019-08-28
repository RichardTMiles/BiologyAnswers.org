<?php
/**
 * Created by IntelliJ IDEA.
 * User: richardmiles
 * Date: 1/28/18
 * Time: 10:01 PM
 */

namespace Model;


use CarbonPHP\Error\PublicAlert;


/**
 * This uses CarbonPHP
 * @link https://carbonphp.com/
 *
 *
 * This is probably one of this few places where I choose to use globals and it really
 * suck. This is for learning though and is just to expose kids to syntax.
 *
 * @author ig @WookieeTyler
 *
 * Class Biology
 * @package Model
 */
class Biology extends GlobalMap
{

    /**
     * @throws PublicAlert
     */
    public function chapters(): void
    {
        global $chapters;
        $chapters = self::fetch('SELECT * FROM BiologyAnswers.Chapters');

        if (!is_array($chapters)) {
            throw new PublicAlert('Failed to load chapters from the database.');
        }
    }

    public function chapter($number): void
    {
        global $sections;

        // I can hard code this because this is really a static resource.
        if ($number > 40 || $number < 1) {
            $number = 1;
        }

        $sections = self::fetch('SELECT * FROM BiologyAnswers.Sections WHERE ChapterNumber = ?', $number);
    }

    public function section(int $chap, int $sect): ?bool
    {
        global $questions;
        $questions = self::fetch('SELECT * FROM BiologyAnswers.Questions WHERE ChapterNumber = ? AND SectionNumber = ?', $chap, $sect);

        return empty($questions) ?
            startApplication('Section/' . ++$sect) :
            true;
    }

    public function question(int $chapter, int $section, int $quest): ?bool
    {
        global $question;
        /** @noinspection PhpUnusedLocalVariableInspection */
        $question = self::fetch('SELECT QuestionNumber, Question, Answer FROM BiologyAnswers.Questions WHERE ChapterNumber = ? AND SectionNumber = ? AND QuestionNumber = ?', $chapter, $section, $quest);

         if (empty($question)) {
             return startApplication('Chapter/' . ++$chapter);
         }

        $question['next'] = '/Question/'.$chapter.'/'.$section.'/'.($quest+1);
        $question['last'] = '/Question/'.$chapter.'/'.$section.'/'.($quest-1);

         return true;
    }
}