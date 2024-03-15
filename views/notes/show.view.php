<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>
<?php require('views/partials/banner.php') ?>


<main>
  <div>
    <p>
      <a href="/pfp/notes">Back</a>
    </p>
    
    <p><?= htmlspecialchars($note['body']) ?></p>

    <form method="post">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="id" value="<?= $note['id'] ?>">
      <button>Delete</button>
    </form>
  </div>
</main>


<?php require('views/partials/footer.php') ?>