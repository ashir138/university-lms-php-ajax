<form id="login_form1" class="form-signin" method="post" style="padding: 30px; background-color: #f5f5f5; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1); font-family: 'Segoe UI', Tahoma, sans-serif;">
    <h3 class="form-signin-heading" style="color: #1b3f2c; margin-bottom: 20px;">
        <i class="icon-lock" style="margin-right: 8px;"></i>Sign in to LMS
    </h3>

    <input type="text" class="input-block-level" id="username" name="username" placeholder="Enter Username" required
        style="margin-bottom: 15px; padding: 12px; font-size: 15px; border-radius: 6px; border: 1px solid #ccc;">

    <input type="password" class="input-block-level" id="password" name="password" placeholder="Enter Password" required
        style="margin-bottom: 20px; padding: 12px; font-size: 15px; border-radius: 6px; border: 1px solid #ccc;">

    <button id="signin" name="login" class="btn" type="submit"
        style="color: #1b3f2c; font-size: 15px; padding: 10px 25px; border-radius: 6px; border: none;">
        <i class="icon-signin icon-large" style="margin-right: 6px;"></i>Sign in
    </button>

    <script>
        $(document).ready(function () {
            $('#signin').tooltip({
                title: "Click here to Sign In",
                placement: "right"
            }).tooltip('hide');
        });
    </script>
</form>

<script>
    jQuery(document).ready(function () {
        jQuery("#login_form1").submit(function (e) {
            e.preventDefault();
            var formData = jQuery(this).serialize();

            $.ajax({
                type: "POST",
                url: "login.php",
                data: formData,
                success: function (html) {
                    if (html === 'true') {
                        $.jGrowl("Loading File Please Wait......", { sticky: true });
                        $.jGrowl("Welcome to NUTECH Learning Management System", { header: 'Access Granted' });
                        setTimeout(function () {
                            window.location = 'dasboard_teacher.php';
                        }, 1000);
                    } else if (html === 'true_student') {
                        $.jGrowl("Welcome to NUTECH Learning Management System", { header: 'Access Granted' });
                        setTimeout(function () {
                            window.location = 'student_notification.php';
                        }, 1000);
                    } else {
                        $.jGrowl("Please check your username and password", { header: 'Login Failed' });
                    }
                }
            });

            return false;
        });
    });
</script>
