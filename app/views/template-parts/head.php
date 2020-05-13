<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <?php if (isset($title)): ?>

      <title><?php echo $title; ?></title>

    <?php else : ?>

      <title>TodoList</title>

    <?php endif; ?>

    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <?php include('nav.php'); ?>
