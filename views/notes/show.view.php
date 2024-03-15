<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>
<?php require('views/partials/banner.php') ?>


<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p class="mb-6">
      <a href="/pfp/notes" class=" text-blue-500 underline ">Back</a>
    </p>
    <p><?= htmlspecialchars($note['body']) ?></p>

    <form method="post" class="mt-6">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="id" value="<?= $note['id'] ?>">
      <button class="text-sm text-red-500">Delete</button>
    </form>
  </div>
</main>


<?php require('views/partials/footer.php') ?>