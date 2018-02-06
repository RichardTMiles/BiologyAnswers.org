<?php
/**
 * Created by IntelliJ IDEA.
 * User: Miles
 * Date: 7/31/17
 * Time: 6:55 PM
 */

namespace Tables;


use Carbon\Database;
use Carbon\Entities;
use Carbon\Error\PublicAlert;
use Carbon\Interfaces\iTable;

class Comments extends Entities implements iTable
{
    
    static function Get(&$array, $id)
    {
        $sql = 'SELECT * FROM carbon_comments JOIN carbon_tag ON comment_id = entity_id WHERE parent_id = ? LIMIT 10';
        $array->comments = static::fetch_classes( $sql, $id );
        return true;
    }


    static function All(&$object, $id)
    {
        $sql = 'SELECT * FROM carbon_comments JOIN carbon_tag ON comment_id = entity_id WHERE parent_id = ?';
        $object->comments = static::fetch_classes( $sql, $id );
        return true;
    }

    static function range(&$object, $id, $argv)
    {
        // TODO: Implement range() method.
    }


    static function Post(&$array, $id, $argv)
    {
        $comment_id = static::beginTransaction( 'ENTITY_COMMENTS', $id );
        $sql = 'INSERT INTO carbon_comments (parent_id, comment_id, user_id, comment) VALUES (:parent_id, :comment_id, :user_id, :comment)';
        $stmt = Database::database()->prepare( $sql );
        $stmt->bindValue( ':parent_id', $id );
        $stmt->bindValue( ':comment_id', $comment_id );
        $stmt->bindValue( ':user_id', $_SESSION['id'] );
        $stmt->bindValue( ':comment', $argv );
        if ($stmt->execute()) throw new PublicAlert('Sorry, we could not process your request.', 'danger');
        return static::commit();
    }

    static function Delete(&$object, $id)
    {
        static::remove_entity( $id );
        if (array_key_exists( $id, $object->comments ))
            unset($object->comments[$id]);
        return true;
    }
}