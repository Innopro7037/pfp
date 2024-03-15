<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>
<?php require('views/partials/banner.php') ?>


<main>
  <div>
    <ul>
    <?php foreach($notes as $note) : ?>
        <li>
            <a href="/pfp/note?id=<?= $note['id'] ?>" >
                <?= htmlspecialchars($note['body']) ?>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>

    <p>
      <a href="/pfp/notes/create">Create Note</a>
    </p>
  </div>
</main>


<?php require('views/partials/footer.php') ?>