<?php
/**
 * Created by IntelliJ IDEA.
 * User: Miles
 * Date: 7/31/17
 * Time: 7:53 PM
 */

namespace Tables;


use Carbon\Database;
use Carbon\Entities;
use Carbon\Error\PublicAlert;
use Carbon\Interfaces\iTable;

class Location extends Entities implements iTable
{
    public static function Get(array &$array, string $id, array $argv): bool
    {
        $sql = 'SELECT * FROM carbon_location WHERE entity_id = ?';
        $array['location'] = self::fetch($sql, $id);
        return true;
    }

    public static function Post(array $argv): bool
    {
        $sql = "REPLACE INTO carbon_location (entity_id, latitude, longitude, street, city, state, elevation) VALUES (:entity_id, :latitude, :longitude, :street, :city, :state, :elevation)";
        $stmt = Database::database()->prepare($sql);
        $stmt->bindValue(':entity_id', $argv['id'] ?? null);
        $stmt->bindValue(':latitude', $argv['latitude'] ?? null);
        $stmt->bindValue(':longitude', $argv['longitude'] ?? null);
        $stmt->bindValue(':elevation', $argv['elevation'] ?? null);
        $stmt->bindValue(':street', $argv['street'] ?? null);
        $stmt->bindValue(':city', $argv['city'] ?? null);
        $stmt->bindValue(':state', $argv['state'] ?? null);
        return $stmt->execute();
    }

    public static function All(array &$array, string $id): bool
    {
        return true;
    }

    public static function Put(array &$array, string $id, array $argv): bool
    {
        // TODO: Implement range() method.
        return true;
    }

    public static function Delete(array &$array, string $id): bool
    {
        $sql = 'DELETE * FROM carbon_location WHERE entity_id = ?';
        if (Database::database()->prepare($sql)->execute([$id])) {
            unset($array['location']);
            return true;
        }
        throw new PublicAlert('Failed to remove location.');
    }

}