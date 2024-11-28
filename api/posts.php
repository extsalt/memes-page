<?php
error_reporting(0);

require_once '../common.php';

$link = db_connect();

$page = filter_var($_GET['page'], FILTER_SANITIZE_NUMBER_INT) ?: 0;
$limit = 20;
$offset = $page * $limit;

$results = mysqli_query($link, "SELECT id, title, media_url,likes,dislikes FROM posts LIMIT $limit OFFSET $offset");
$posts = [];

while ($row = mysqli_fetch_assoc($results)) {
    $posts[] = [
        'id' => (string) $row['id'],
        'title' => $row['title'],
        'media_url' => $row['media_url'],
        'likes' => $row['likes'],
        'dislikes' => $row['dislikes'],
    ];
}
$data = ['posts' => $posts, 'currentPage' => (string) $page, 'nextPage' => (string) ++$page];
echo @json_encode($data);
