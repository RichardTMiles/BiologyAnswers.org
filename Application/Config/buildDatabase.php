<?php

/**
 * Created by IntelliJ IDEA.
 * User: richardmiles
 * Date: 10/12/17
 * Time: 5:38 PM
 */

try {
    $db = \Carbon\Database::database();

    print '<h1>Creating Stats.Coach</h1>';


    try {
        $db->prepare('SELECT 1 FROM Chapters LIMIT 1;')->execute();
        print '<br>Table `Chapters` already exists';
    } catch (PDOException $e) {
        $sql = <<<END
   
create table Chapters
(
	ChapterNumber int auto_increment
		primary key,
	ChapterTitle TEXT null,
	constraint Chapters_ChapterNumber_uindex
		unique (ChapterNumber)
)
;



END;

        $db->exec($sql);

        print '<br>Build Chapters';

        $db->exec(file_get_contents(SERVER_ROOT.'Application/Config/ChapterTitle.sql'));

        print '<br>Insert Chapters';


    }


    try {
        $db->prepare('SELECT 1 FROM Questions LIMIT 1;')->execute();
        print '<br>Table `Questions` already exists';
    } catch (PDOException $e) {
        $sql = <<<END
create table Questions
(
	ChapterNumber int null,
	SectionNumber int null,
	QuestionNumber int null,
	Question text null,
	Answer text null
)
;


END;

        $db->exec($sql);
        print '<br>Build Questions ';
        $db->exec(file_get_contents(SERVER_ROOT.'Application/Config/Questions.sql'));
        print '<h6>Built Table Data</h6>';


    }

    try {
       $db->prepare('SELECT 1 FROM Sections LIMIT 1;')->execute();
        print '<br>Table `Sections` already exists';
    } catch (PDOException $e) {
        $sql = <<<END

create table Sections
(
	ChapterNumber text null,
	SectionTitle text null,
	SectionNumber text null
)
;


END;

        $db->exec($sql);
        print '<br>Built Sections';
        print '<h6>Inserting Table Data</h6>';
        $db->exec(file_get_contents(SERVER_ROOT.'Application/Config/SectionsTable.sql'));


    }

} catch (PDOException $e) {
    print 'Oh no!! We failed building BiologyAnswers.org<br>';
    print $e->getMessage() . PHP_EOL;
}