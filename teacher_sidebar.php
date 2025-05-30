<div class="span3" id="sidebar" style="font-family: 'Segoe UI', Tahoma, sans-serif;">
    <!-- Teacher Avatar -->
    <div style="text-align: center; margin-bottom: 15px;">
        <img id="avatar" class="img-polaroid" src="admin/uploads/NO-IMAGE-AVAILABLE.jpg" style="max-width: 150px; border-radius: 8px;">
    </div>

    <?php include('teacher_count.php'); ?>

    <!-- Sidebar Menu -->
    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse" style="background-color: #1b3f2c; padding: 10px; border-radius: 8px;">
        
        <!-- My Class -->
        <li>
            <a href="dasboard_teacher.php" style="color: white; transition: color 0.3s;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">
                <i class="icon-chevron-right"></i>
                <i class="icon-group"></i>&nbsp;My Class
            </a>
        </li>

        <!-- Notifications -->
        <li>
            <a href="notification_teacher.php" style="color: white; transition: color 0.3s;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">
                <i class="icon-chevron-right"></i>
                <i class="icon-info-sign"></i>&nbsp;Notification
                <?php if ($not_read != '0') { ?>
                    <span class="badge badge-important"><?php echo $not_read; ?></span>
                <?php } ?>
            </a>
        </li>

        <!-- Message -->
        <li>
            <a href="teacher_message.php" style="color: white; transition: color 0.3s;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">
                <i class="icon-chevron-right"></i>
                <i class="icon-envelope-alt"></i>&nbsp;Message
            </a>
        </li>

        <!-- Add Announcement -->
        <li>
            <a href="add_announcement.php" style="color: white; transition: color 0.3s;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">
                <i class="icon-chevron-right"></i>
                <i class="icon-plus-sign"></i>&nbsp;Add Announcement
            </a>
        </li>

        <!-- Uncomment for future use -->
        <!--
        <li><a href="teacher_backack.php"><i class="icon-chevron-right"></i><i class="icon-suitcase"></i>&nbsp;Backpack</a></li>
        <li><a href="add_downloadable.php"><i class="icon-chevron-right"></i><i class="icon-plus-sign"></i>&nbsp;Add Downloadables</a></li>
        <li><a href="add_assignment.php"><i class="icon-chevron-right"></i><i class="icon-plus-sign"></i>&nbsp;Add Assignment</a></li>
        <li><a href="teacher_quiz.php"><i class="icon-chevron-right"></i><i class="icon-list"></i>&nbsp;Quiz</a></li>
        <li><a href="teacher_share.php"><i class="icon-chevron-right"></i><i class="icon-file"></i>&nbsp;Shared Files</a></li>
        -->

    </ul>

    <?php include('search_other_class.php'); ?>
</div>
