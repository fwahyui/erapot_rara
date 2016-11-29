<!DOCTYPE html>
<html lang="en">
<?php include "head.php";?>
    <div class="container">
      <form class="login-form" action="x.php?login_attempt=1" method="post">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" placeholder="Username" autofocus name="Username">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            
        </div>
      </form>
		
    </div>
  </body>
</html>
