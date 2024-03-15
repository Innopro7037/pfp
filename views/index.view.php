<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>


<main>
  <div>
    <p>Hello <?= $_SESSION['user']['email'] ?? 'Guest' ?>. Welcome to the Home Page</p>
  </div>
</main>


<?php require('partials/footer.php') ?>