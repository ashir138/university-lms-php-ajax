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
                                    <i class="icon-arrow-left" style="margin-right: 5px;"></i>Back to Home
                                </a>
                            </div>
                        </div>

                        <div class="block-content collapse in" style="padding: 30px;">
                            <h2 style="font-family: 'Segoe UI', Tahoma, sans-serif; color: #1b3f2c;">Authorities</h2>
                            <hr style="border-color: #1b3f2c;">

                            <div class="row-fluid">
                                <!-- Rector -->
                                <div class="span3" style="background-color: #f1f8f4; padding: 20px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); margin-right: 20px;">
                                    <center>
                                        <img id="developers" src="admin/images/rector.jpeg" class="img-circle" style="width: 120px; height: 120px; object-fit: cover; border: 3px solid #1b3f2c;">
                                        <hr style="margin: 15px 0; border-color: #1b3f2c;">
                                        <p style="font-size: 15px; color: #1b3f2c;"><strong>Name:</strong> Lt Gen Moazzam Ejaz, HI(M) (Ret)</p>
                                        <p style="font-size: 15px;"><strong>Address:</strong> Islamabad City</p>
                                        <p style="font-size: 15px;"><strong>Email:</strong> rector@nutech.edu.pk</p>
                                        <p style="font-size: 15px;"><strong>Position:</strong> Rector</p>
                                    </center>
                                </div>

                                <!-- Pro-Rector -->
                                <div class="span3" style="background-color: #f1f8f4; padding: 20px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                                    <center>
                                        <img id="developers" src="admin/images/pro-rector.png" class="img-circle" style="width: 120px; height: 120px; object-fit: cover; border: 3px solid #1b3f2c;">
                                        <hr style="margin: 15px 0; border-color: #1b3f2c;">
                                        <p style="font-size: 15px; color: #1b3f2c;"><strong>Name:</strong> Khalid Javed</p>
                                        <p style="font-size: 15px;"><strong>Address:</strong> Islamabad City</p>
                                        <p style="font-size: 15px;"><strong>Email:</strong> prorector@nutech.edu.pk</p>
                                        <p style="font-size: 15px;"><strong>Position:</strong> Pro Rector</p>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('footer.php'); ?>
    </div>

    <?php include('script.php'); ?>
</body>
</html>
