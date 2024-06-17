<?php

class Datas
{
    public static function review($name, $email, $star, $message)
    {
        $conn = Database::mkConnection();
        $sql = "INSERT INTO `review` (`name`, `email`, `star`, `message`) VALUES ('$name', '$email', '$star', '$message')";
        try {
            $conn->query($sql);
            return true;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public static function getReview()
    {
        $db = Database::mkConnection();
        $sql = "SELECT * FROM `review`";
        $result = $db->query($sql);
        $reviews = [];
        while ($row = $result->fetch_assoc()) {
            $reviews[] = $row;
        }
        return $reviews;
    }
}