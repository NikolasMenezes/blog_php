<?php
include_once("helper/url.php");
include_once("data/posts.php");
include_once("data/categories.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Menezes</title>
  <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
  <header>
    <a href="<?= $BASE_URL ?>">
      <img class="logo" src="img/logo.svg">
    </a>
    <nav>
      <ul id="navbar">
        <li><a href="<?= $BASE_URL ?>">Home</a></li>
        <li><a href="#">Categorias</a></li>
        <li><a href="#">Sobre</a></li>
        <li><a href="<?= $BASE_URL ?>contact.php">Contato</a></li>
      </ul>
    </nav>
  </header>