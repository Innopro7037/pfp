<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>
<?php require('views/partials/banner.php') ?>


<main>
  <div>

    <form method="POST" action="/pfp/notes">
      <div>
        <div>
            <div>
              <label>Body</label>
              <div class="mt-2">
                <textarea id="body" name="body" rows="3"><?= $_POST['body'] ?? '' ?></textarea>

                <?php if(isset($errors['body'])) : ?>
                  <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
                <?php endif; ?>

              </div>
                </div>
        </div>

      <div>
        <button type="submit">Save</button>
      </div>
    </form>

  </div>
</main>


<?php require('views/partials/footer.php') ?>