<?php

require_once '../common.php';

$link = db_connect();

$results = mysqli_query($link, "SELECT * from posts LIMIT 100 OFFSET 0");
$posts = [];

while ($row = mysqli_fetch_assoc($results)) {
    $posts[] = [
        'id' => $row['post_id'],
        'title' => $row['title'],
        'media_url' => $row['media_url']
    ];
}
echo @json_encode($posts);