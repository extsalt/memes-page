<?php
error_reporting(0);

require_once '../common.php';

$link = db_connect();
$postID = filter_var($_POST['post_id'], FILTER_SANITIZE_NUMBER_INT) ?: 0;
$action = $_POST['action'];

$query = "UPDATE posts set ";
if ($action == 'like') {
    $query .= " likes = likes + 1";
} else {
    $query .= " dislikes = dislikes + 1";
}
$query .= " WHERE id = '$postID'  LIMIT 1";
// file_put_contents(__FILE__ . '.sql', $query);
$repsonse = [];
if ($postID) {
    mysqli_query($link, $query);
    if (mysqli_affected_rows($link) >= 0) {
        if ($action == 'like') {
            $repsonse['message'] = 'You liked the post';
        } else {
            $repsonse['message'] = 'You disliked the post';
        }
        $repsonse['status'] = 'success';
    } else {
        $repsonse['message'] = 'Could not like the posts';
        $repsonse['status'] = 'error';
    }
} else {
    $repsonse['message'] = 'Bad post id';
    $repsonse['status'] = 'error';
}
header_json();
echo @json_encode($repsonse);
