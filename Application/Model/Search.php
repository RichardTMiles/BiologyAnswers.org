<?php

namespace Model;


use Carbon\Error\PublicAlert;

class Search extends GlobalMap
{
    /**
     * @param $search
     * @throws PublicAlert
     * @return bool
     */
    public function search($search)
    {
        global $result, $json;


        $json = ['widget' => '#pjax-content'];

        ######################### Team Search
        $sql = 'SELECT ChapterNumber AS Number, ChapterTitle AS Title FROM Chapters WHERE Chapters.ChapterNumber LIKE :search OR Chapters.ChapterTitle LIKE :search LIMIT 5';
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':search', "%$search%");

        if (!$stmt->execute()) {
            throw new PublicAlert('Search Failed');
        }

        $result['Chapters'] = $stmt->fetchAll();


        if (array_key_exists('team_id', $result)) {
            $result = [$result];
        }


        $sql = 'SELECT ChapterNumber AS ChapNumber, SectionTitle AS SecNumber, SectionNumber AS SecTitle  FROM Sections WHERE Sections.ChapterNumber LIKE :search OR Sections.SectionTitle LIKE :search OR SectionNumber LIKE :search LIMIT 5';
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':search', "%$search%");

        if (!$stmt->execute()) {
            throw new PublicAlert('Search Failed');
        }

        $result['Section'] = $stmt->fetchAll();

        ######################## Course Search
        $sql = 'SELECT ChapterNumber AS CNumb, SectionNumber AS SNumb, QuestionNumber AS QNumb, Question AS Q FROM Questions WHERE Question LIKE :search LIMIT 5';
        $stmt = $this->db->prepare($sql);

        $stmt->bindValue(':search', "%$search%");

        if (!$stmt->execute()) {
            throw new PublicAlert('Search Failed');
        }

        $result['Question'] = $stmt->fetchAll();

        $json = array_merge($result, $json);

        return true;

    }
}