<?php
error_reporting(0);

require_once '../common.php';

$link = db_connect();

$limit = filter_var($_GET['limit'], FILTER_SANITIZE_NUMBER_INT) ?: 10;
$offset = filter_var($_GET['offset'], FILTER_SANITIZE_NUMBER_INT) ?: 0;

$results = mysqli_query($link, "SELECT post_id, title, media_url FROM posts LIMIT $limit OFFSET $offset");
$posts = [];

while ($row = mysqli_fetch_assoc($results)) {
    $posts[] = [
        'id' => $row['post_id'],
        'title' => $row['title'],
        'media_url' => $row['media_url']
    ];
}
echo @json_encode($posts);