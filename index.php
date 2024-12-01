<?php
define('ENV', 'dev');
$src = ENV == 'dev' ? 'http://localhost:5173/main.js' : '/public/js/main.js';
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Memes</title>
  <style>
  </style>
</head>

<body>
  <div id="app"></div>
  <script type="module" src="<?= $src ?>"></script>
</body>

</html>