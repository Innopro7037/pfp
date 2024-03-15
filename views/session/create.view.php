<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>


<main>

  <div>
    <div>
      <h2>Login to your account</h2>
    </div>

    <div>

      <form class="space-y-6" action="/pfp/session" method="POST">
        <div>
          <label for="email">Email address</label>
          <div>
            <input id="email" name="email" type="email" autocomplete="email" required>
          </div>
          <?php if(isset($errors['email'])) : ?>
                  <p><?= $errors['email'] ?></p>
          <?php endif; ?>
        </div>

        <div>
          <div>
            <label for="password">Password</label>
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required>
          </div>
          <?php if(isset($errors['password'])) : ?>
                  <p><?= $errors['password'] ?></p>
         <?php endif; ?>
        </div>

        <div>
          <button type="submit">Login</button>
        </div>
      </form>
    </div>
  </div>

</main>


<?php require('views/partials/footer.php') ?>