<div class="span3" id="sidebar">
	<img id="avatar" class="img-polaroid" src="admin/<?php echo $row['location']; ?>"
	<?php include('teacher_count.php'); ?>

<!-- Sidebar Menu -->
<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse" style="background-color: #1b3f2c; padding: 10px; border-radius: 8px;">

	<!-- My Class -->
	<li>
		<a href="dasboard_teacher.php" style="color: white; text-decoration: none;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">
			<i class="icon-chevron-right"></i>
			<i class="icon-group"></i>&nbsp;My Class
		</a>
	</li>

	<!-- Notifications (Active) -->
	<li style="background-color: #14502e; border-radius: 6px;">
		<a href="notification_teacher.php" style="color: white; text-decoration: none;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">
			<i class="icon-chevron-right"></i>
			<i class="icon-info-sign"></i>&nbsp;Notification
			<?php if ($not_read != '0') { ?>
				<span class="badge badge-important"><?php echo $not_read; ?></span>
			<?php } ?>
		</a>
	</li>

	<!-- Message -->
	<li>
		<a href="teacher_message.php" style="color: white; text-decoration: none;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">
			<i class="icon-chevron-right"></i>
			<i class="icon-envelope-alt"></i>&nbsp;Message
		</a>
	</li>

	<!-- Add Announcement -->
	<li>
		<a href="add_announcement.php" style="color: white; text-decoration: none;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">
			<i class="icon-chevron-right"></i>
			<i class="icon-plus-sign"></i>&nbsp;Add Announcement
		</a>
	</li>
</ul>

</div>

