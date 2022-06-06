<?php

$text= 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, aspernatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, aspernatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, aspernatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, aspernatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, aspernatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, aspernatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, aspernatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, aspernatur.';

$textLenght = strlen($text);
$textNoSpace = str_replace(' ', '', $text);

$badWord = $_GET['badW'];

echo $badWord;

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>

<h1>Il testo che segue è molto importante</h1>

<p><?php echo $text ?></p>
<p>La sua lunghezza (compresi gli spazi) è di:<?php echo $textLenght.' ' ?>lettere</p>
<p>La sua lunghezza (compresi gli spazi) è di:<?php echo strlen($text).' ' ?>lettere</p>
<p>La sua lunghezza senza spazi é di: <?php echo strlen($textNoSpace).' '?>lettere</p>
  
</body>
</html>