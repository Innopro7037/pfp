<nav>
            <div>
              <a href="/pfp/" >Home</a>
              <a href="/pfp/about">About Us</a>
              <?php if ($_SESSION['user'] ?? false) : ?>
                <a href="/pfp/notes">Notes</a>
              <?php endif; ?>
                <a href="/pfp/contact">Contact Us</a>
              
            </div>

              <div>

                  <?php if ($_SESSION['user'] ?? false) : ?>
                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  <?php else : ?>
                    <a href="/pfp/register">Register</a>
                    <a href="/pfp/login" >Login</a>
                  <?php endif; ?>
                  
                  
              </div>

            <?php if ($_SESSION['user'] ?? false) : ?>
              <div>
                <form action="/pfp/session" method="post">
                  <input type="hidden" name='_method' value="DELETE" />
                  <button>Log Out</button>
                </form>
              </div>
            <?php endif; ?>
  </nav>