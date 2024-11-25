<?php
define ('ENV', 'dev');
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Memes</title>
</head>

<body>
  <div id="app"></div>
<? if (ENV == 'dev') { ?>
  <script type="module" src="http://localhost:5173/main.js"></script>
<? } else { ?>
  <script type="module" src="/assets/main.js"></script>
<? } ?>
</body>
</html>