<?php
require_once 'connectionDb.php';

// Получение списка комментариев
$query = $db->query("SELECT * FROM comments ORDER BY created_at");
$comments = $query->fetchAll(PDO::FETCH_ASSOC);

// Обработка добавления нового комментария
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $comment = htmlspecialchars($_POST['comment']);
    $insert_query = $db->prepare("INSERT INTO comments (name, comment, created_at) VALUES (:name, :comment, :created_at)");
    $insert_query->bindValue(':name', $name);
    $insert_query->bindValue(':comment', $comment);
    $insert_query->bindValue(':created_at', date('Y-m-d H:i:s'));
    $insert_query->execute();

    header("Location: comments.php");
    exit;
}