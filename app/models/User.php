<?php
require_once __DIR__ . '/BaseModel.php';

class User extends BaseModel
{
    public $id;
    public $username;
    public $email;
    public $password;

    // Create a new user 
    public static function create($username, $email, $plainPassword)
    {
        $db = self::getDB();
        $stmt = $db->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        $stmt->bindValue(':username', $username, SQLITE3_TEXT);
        $stmt->bindValue(':email', $email, SQLITE3_TEXT);
        $stmt->bindValue(':password', password_hash($plainPassword, PASSWORD_DEFAULT), SQLITE3_TEXT);

        $result = @$stmt->execute();
        if ($result) {
            $id = $db->lastInsertRowID();
            return self::findById($id);
        }

        return false;
    }

    // gets all users 
    public static function all($limit = 50)
    {
        $db = self::getDB();
        $stmt = $db->prepare("SELECT * FROM users LIMIT :limit");
        $stmt->bindValue(':limit', $limit, SQLITE3_INTEGER);
        $result = $stmt->execute();

        $users = [];
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $users[] = self::fromArray($row);
        }

        return $users;
    }

    // Find user by ID
    public static function findById($id)
    {
        $db = self::getDB();
        $stmt = $db->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
        $result = $stmt->execute();
        $data = $result ? $result->fetchArray(SQLITE3_ASSOC) : null;

        return $data ? self::fromArray($data) : null;
    }

    // Find user by username
    public static function findByUsername($username)
    {
        $db = self::getDB();
        $stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindValue(':username', $username, SQLITE3_TEXT);
        $result = $stmt->execute();
        $data = $result ? $result->fetchArray(SQLITE3_ASSOC) : null;

        return $data ? self::fromArray($data) : null;
    }

    // Find user by email
    public static function findByEmail($email)
    {
        $db = self::getDB();
        $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindValue(':email', $email, SQLITE3_TEXT);
        $result = $stmt->execute();
        $data = $result ? $result->fetchArray(SQLITE3_ASSOC) : null;

        return $data ? self::fromArray($data) : null;
    }

    // Create a user object from an array
    protected static function fromArray($data)
    {
        $user = new self();
        $user->id = $data['id'];
        $user->username = $data['username'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        return $user;
    }
}
