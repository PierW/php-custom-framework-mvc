<?php include('template-parts/head.php'); ?>

<h2>USERS:</h2>
<?php if (!empty($users)): ?>
  <ol>
    <?php foreach ($users as $user): ?>
      <li><?= $user -> name; ?></li>
    <?php endforeach; ?>
  </ol>
<?php else: ?>
  <p>Non ci sono utenti.</p>
<?php endif; ?>

<h2>Invia Il tuo nome:</h2>
<form class="first-form" action="/users" method="post">
  <input type="text" name="name" value="" placeholder="Inserisci il tuo nome">
  <button type="submit">Invia</button>
</form>

<?php include('template-parts/footer.php'); ?>
