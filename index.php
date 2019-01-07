<?php
$text1 = 'Bonjour';
$text2 = 'Stéphane';
function concatenationString($string1, $string2){
  $result = $string1 . ' ' . $string2;
  return $result;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>php partie4</title>
</head>
<body>
  <p><?= concatenationString($text1, $text2) ?></p>
</body>
</html>
