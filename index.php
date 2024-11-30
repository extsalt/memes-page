<?php
define('ENV', 'dev');
$src = ENV == 'dev1' ? 'http://localhost:5173/main.js' : '/public/main.js';
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Memes</title>
</head>

<body>
  <div id="app"></div>
  <script type="module" src="<?= $src ?>"></script>
</body>

</html>