<div class="signup-form">
    <h2 class="form-title">Sign in</h2>
    <form method="POST" class="register-form" id="register-form">

        <div class="form-group">
            <label for="email"><i class="zmdi zmdi-email"></i></label>
            <input required type="email" name="fmail" id="mail" placeholder="Your Email" />
            <?php if(isset($error)){ echo $error;} ?>
        </div>
        <div class="form-group">
            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
            <input required type="password" name="fpass" id="pass" placeholder="Password" />
        </div>
        <div class="form-group form-button">
            <a href="indexbooking.php?page_layout=login_us"> <input type="submit" name="flogin" id="login" class="form-submit" value="Sign in" style="font-size: 16px; font-weight: bold;" /></a>
            <a href="indexbooking.php"> <input type="button" class="form-submit" value="Back" style="font-size: 16px; font-weight: bold;" /></a>
        </div>
        <div class="form-group form-button">
            
        </div>

    </form>
</div>