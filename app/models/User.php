<?php

require_once "app/models/Database.php";

class User extends Database
{
    public function register($username, $password)
    {
        $username = $this->conn->real_escape_string($username);
        $password = password_hash($password, PASSWORD_DEFAULT);

        $cek = $this->conn->query("SELECT * FROM users WHERE username='$username'");

        if ($cek->num_rows > 0) {
            return false;
        }

        $query = "INSERT INTO users (username, password)
                  VALUES ('$username', '$password')";

        return $this->conn->query($query);
    }

    public function login($username, $password)
    {
        $username = $this->conn->real_escape_string($username);

        $query = $this->conn->query(
            "SELECT * FROM users WHERE username='$username'"
        );

        if ($query->num_rows > 0) {
            $user = $query->fetch_assoc();

            if (password_verify($password, $user['password'])) {
                return $user;
            }
        }

        return false;
    }
}
