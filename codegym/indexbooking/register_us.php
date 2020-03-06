

<div class="signup-form">
    <h2 class="form-title">Sign up</h2>
    <form method="POST" class="register-form" id="register-form">

        <div class="form-group">
            <label for="email"><i class="zmdi zmdi-email"></i></label>
            <input required type="email" name="fmail" id="mail" placeholder="Email" />
        </div>
        <div class="form-group">
            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
            <input required type="password" name="fpass" id="pass" placeholder="Password" />
        </div>
        <div class="form-group">
            <label for="name"><i class="zmdi zmdi-account"></i></label>
            <input required type="text" name="fusername" id="username" placeholder="Your Name" />
        </div>
        <div class="form-group">
            <label for="re-pass"><i class="zmdi zmdi-account-box-phone"></i></label>
            <input required type="number" name="fphone" id="phone" placeholder="Your phone" />
        </div>
        <div class="form-group form-button">
            <a href="indexbooking.php?page_layout=register_us">
                <input type="submit" name="fregister" id="register" class="form-submit" value="Register" style="font-size: 16px; font-weight: bold;" />
            </a>
            <a href="indexbooking.php">
                <input type="button" class="form-submit" value="Back" style="font-size: 16px; font-weight: bold;" />
            </a>
        </div>
    </form>
</div>
