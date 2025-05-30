<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<body style="background-color: #f2f2f2; font-family: 'Segoe UI', Tahoma, sans-serif;">
    <?php include('navbar_teacher.php'); ?>
    <div class="container-fluid">
        <div class="row-fluid">

            <!-- Left Sidebar -->
            <?php include('teacher_message_sidebar.php'); ?>

            <!-- Center Content -->
            <div class="span6" id="content">
                <div class="row-fluid">
                    <!-- Breadcrumb -->
                    <ul class="breadcrumb" style="margin-top: 10px;">
                        <?php
                        $school_year_query = mysqli_query($conn,"select * from school_year order by school_year DESC")or die(mysqli_error());
                        $school_year_query_row = mysqli_fetch_array($school_year_query);
                        $school_year = $school_year_query_row['school_year'];
                        ?>
                        <li><a href="#">Message</a> <span class="divider">/</span></li>
                        <li><a href="#"><b>Inbox</b></a> <span class="divider">/</span></li>
                        <li><a href="#">School Year: <?php echo $school_year; ?></a></li>
                    </ul>

                    <!-- Message Block -->
                    <div id="block_bg" class="block" style="box-shadow: 0 2px 10px rgba(0,0,0,0.1); border-radius: 8px; background-color: #ffffff;">
                        <div class="navbar navbar-inner block-header" style="background-color: #1b3f2c; border-radius: 8px 8px 0 0;">
                            <div class="muted pull-left" style="color: white; font-weight: bold;">📨 Notifications</div>
                        </div>
                        <div class="block-content collapse in" style="padding: 20px;">
                            <ul class="nav nav-pills" style="margin-bottom: 20px;">
                                <li class="active"><a href="teacher_message.php"><i class="icon-envelope-alt"></i> Inbox</a></li>
                                <li><a href="sent_message.php"><i class="icon-envelope"></i> Sent messages</a></li>
                            </ul>

                            <?php
                            $query_announcement = mysqli_query($conn,"SELECT * FROM message
                                LEFT JOIN teacher ON teacher.teacher_id = message.sender_id
                                WHERE message.reciever_id = '$session_id' ORDER BY date_sended DESC") or die(mysqli_error());

                            $count_my_message = mysqli_num_rows($query_announcement);
                            if ($count_my_message != '0') {
                                while($row = mysqli_fetch_array($query_announcement)) {
                                    $id = $row['message_id'];
                                    ?>
                                    <div class="post" id="del<?php echo $id; ?>" style="border: 1px solid #ddd; border-radius: 6px; padding: 15px; margin-bottom: 15px; background-color: #f9f9f9;">
                                        <div class="message_content" style="font-size: 15px;"><?php echo $row['content']; ?></div>
                                        <hr style="margin: 10px 0;">
                                        <div style="font-size: 14px; color: #555;">
                                            Send by: <strong><?php echo $row['sender_name']; ?></strong> 
                                            <i class="icon-calendar"></i> <?php echo $row['date_sended']; ?>
                                        </div>
                                    </div>
                                <?php } 
                            } else { ?>
                                <div class="alert alert-info"><i class="icon-info-sign"></i> No Inbox Messages</div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar -->
            <?php include('create_message.php') ?>

        </div>
        <?php include('footer.php'); ?>
    </div>
    <?php include('script.php'); ?>
</body>
</html>
