<?php include('header_dashboard.php'); ?>
<body id="class_div">
    <?php include('navbar_about.php'); ?>

    <div class="container-fluid mt-4">
        <div class="row-fluid">
            <div class="span12" id="content">
                <div class="row-fluid">
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="pull-right">
                                <a href="index.php" style="background-color: #1b3f2c; color: #fff; padding: 8px 18px; border-radius: 5px; text-decoration: none; font-size: 14px; font-family: 'Segoe UI', Tahoma, sans-serif;">
                                <i class="icon-arrow-left" style="margin-right: 5px;"></i>Back to Home</a>
                            </div>
                        </div>

                        <div class="block-content collapse in">
                            <div class="span12" style="padding: 20px;">
                                <div class="row-fluid" style="display: flex; gap: 20px;">

                                    <!-- Mission Card -->
                                    <div class="span6" style="display: flex;">
                                        <div style="background: #f1f8f4; padding: 30px; height: 100%; width: 100%; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); display: flex; flex-direction: column; justify-content: center;">
                                            <p style="line-height: 1.9; text-align: justify; font-size: 18px; color: #1b3f2c; font-family: 'Segoe UI', Tahoma, sans-serif;">
                                                <?php
                                                    $mission_query = mysqli_query($conn, "SELECT * FROM content WHERE title = 'mission'") or die(mysqli_error($conn));
                                                    $mission_row = mysqli_fetch_array($mission_query);
                                                    echo nl2br($mission_row['content']);
                                                ?>
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Vision Card -->
                                    <div class="span6" style="display: flex;">
                                        <div style="background: #f1f8f4; padding: 30px; height: 100%; width: 100%; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); display: flex; flex-direction: column; justify-content: center;">
                                            <p style="line-height: 1.9; text-align: justify; font-size: 18px; color: #1b3f2c; font-family: 'Segoe UI', Tahoma, sans-serif;">
                                                <?php
                                                    $vision_query = mysqli_query($conn, "SELECT * FROM content WHERE title = 'vision'") or die(mysqli_error($conn));
                                                    $vision_row = mysqli_fetch_array($vision_query);
                                                    echo nl2br($vision_row['content']);
                                                ?>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
    <?php include('script.php'); ?>
</body>
</html>
