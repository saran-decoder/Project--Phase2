<?php

class Datas
{
    public static function review($name, $email, $star, $message)
    {
        $conn = Database::mkConnection();
        // Filter and validate star rating
        if ($star !== '' && $star !== 0) {
            $st = $star;
        } else {
            $st = 1;
        }
        $sql = "INSERT INTO `review` (`name`, `email`, `star`, `message`) VALUES ('$name', '$email', '$st', '$message')";
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