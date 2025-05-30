<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<body id="class_div" style="font-family: 'Segoe UI', Tahoma, sans-serif; background-color: #f5f5f5;">
    <?php include('navbar_teacher.php'); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php include('teacher_sidebar.php'); ?>

            <div class="span6" id="content">
                <div class="row-fluid">

                    <!-- breadcrumb -->
                    <ul class="breadcrumb" style="background-color: #e6f0eb; padding: 10px; border-radius: 5px; font-size: 14px;">
                        <?php
                        $school_year_query = mysqli_query($conn, "SELECT * FROM school_year ORDER BY school_year DESC") or die(mysqli_error());
                        $school_year_query_row = mysqli_fetch_array($school_year_query);
                        $school_year = $school_year_query_row['school_year'];
                        ?>
                        <li>
                            <a href="#" style="color: #1b3f2c; font-weight: bold;"><i class="icon-home"></i> My Class</a>
                            <span class="divider"> / </span>
                        </li>
                        <li>
                            <a href="#" style="color: #1b3f2c;">Year: <?php echo $school_year; ?></a>
                        </li>
                    </ul>
                    <!-- end breadcrumb -->

                    <!-- block -->
                    <div class="block" style="background-color: white; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0,0,0,0.05);">
                        <div class="navbar navbar-inner block-header" style="background-color: #1b3f2c; color: white; border-radius: 8px 8px 0 0;">
                            <div id="count_class" class="muted pull-right" style="color: white;"></div>
                        </div>

                        <div class="block-content collapse in" style="padding: 20px;">
                            <div class="span12">
                                <?php include('teacher_class.php'); ?>
                            </div>
                        </div>
                    </div>
                    <!-- /block -->
                </div>

                <script type="text/javascript">
                    $(document).ready(function () {
                        $('.remove').click(function () {
                            var id = $(this).attr("id");
                            $.ajax({
                                type: "POST",
                                url: "delete_class.php",
                                data: ({ id: id }),
                                cache: false,
                                success: function (html) {
                                    $("#del" + id).fadeOut('slow', function () { $(this).remove(); });
                                    $('#' + id).modal('hide');
                                    $.jGrowl("Your Class is Successfully Deleted", { header: 'Class Deleted' });
                                }
                            });
                            return false;
                        });
                    });
                </script>
            </div>

            <?php include('teacher_right_sidebar.php'); ?>
        </div>

        <?php include('footer.php'); ?>
    </div>

    <?php include('script.php'); ?>
</body>
</html>
