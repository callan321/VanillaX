<?php
abstract class BaseModel
{
    protected static $db;

    public static function setDB($connection)
    {
        self::$db = $connection;
    }

    protected static function getDB()
    {
        return self::$db;
    }
}
