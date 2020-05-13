<?php include('template-parts/head.php'); ?>

    <h2>TASK:</h2>
    <ol>
      <?php foreach ($tasks as $task): ?>
        <?php if ($task -> isCompleted()): ?>
          <li><del><?php echo $task -> description ?></del></li>
        <?php else: ?>
          <li><?php echo $task -> description ?></li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ol>

<?php include('template-parts/footer.php'); ?>
