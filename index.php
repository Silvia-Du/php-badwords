<?php

$text= 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, aspernatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, aspernatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, aspernatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, aspernatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, aspernatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, aspernatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, aspernatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, aspernatur.';

$textLenght = strlen($text);
$textNoSpace = str_replace(' ', '', $text);

$badWord = $_GET['badW'];

$correctText = str_replace('Lorem', '***', $text);
$badWPosition = strpos($text, 'Lorem');


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
<p>La sua lunghezza (compresi gli spazi) è di:<?php echo $textLenght.' ' ?>caratteri</p>
<p>La sua lunghezza (compresi gli spazi) è di:<?php echo strlen($text).' ' ?>caratteri</p>
<p>La sua lunghezza senza spazi é di: <?php echo strlen($textNoSpace).' '?>caratteri</p>

<h2>In questo testo è stata tolta la bad-word: Lorem</h2>

<p><?php echo $correctText ?></p>

<p>E questa è la sua nuova lunghezza: <?php echo strlen($correctText). ' ' ?>caratteri</p>


  
</body>
</html>