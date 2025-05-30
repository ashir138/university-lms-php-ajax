<?php include('header_dashboard.php'); ?>
<body id="class_div">
    <?php include('navbar_about.php'); ?>

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12" id="content">
                <div class="row-fluid">
                    <!-- block -->
                    <div class="block">
                        <div class="navbar navbar-inner block-header" style="border-radius: 12px 12px 0 0;">
                            <div class="pull-right">
                                <a href="index.php" style="background-color: #1b3f2c; color: #fff; padding: 8px 18px; border-radius: 5px; text-decoration: none; font-size: 14px; font-family: 'Segoe UI', Tahoma, sans-serif;">
                                <i class="icon-arrow-left" style="margin-right: 5px;"></i>Back to Home</a>
                            </div>
                        </div>

                        <div class="block-content collapse in" style="border-radius: 0 0 12px 12px; padding: 20px;">
                            <div class="span12" style="font-size: 17px; font-family: 'Segoe UI', Tahoma, sans-serif; color: #1b3f2c;">
                                <?php
                                    $mission_query = mysqli_query($conn, "SELECT * FROM content WHERE title = 'Calendar'") or die(mysqli_error($conn));
                                    $mission_row = mysqli_fetch_array($mission_query);
                                    echo $mission_row['content'];
                                ?>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <!-- /block -->
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
    <?php include('script.php'); ?>
</body>
</html>
