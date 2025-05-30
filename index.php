<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - University LMS</title>
    <style>
        body#login::before {
            content: "";
            background: #00000036;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body id="login">

    <div class="container" style="position: relative;">
        <div class="row-fluid">
            <div class="span6">
                <div class="title_index">
                    <?php include('title_index.php'); ?>
                </div>
            </div>
            <div class="span6">
                <div class="pull-right">
                    <?php include('login_form.php'); ?>
                </div>
            </div>
        </div>

        <div style="height: 100px;"></div> 
        
        <div class="row-fluid">
            <div class="span12">
                <div class="index-footer">
                    <?php include('link.php'); ?>
                </div>
            </div>
        </div>

        <?php include('footer.php'); ?>
    </div>

    <?php include('script.php'); ?>
</body>
</html>
