<div class="navbar navbar-fixed-top" style="background-color: #1b3f2c; font-family: 'Segoe UI', Tahoma, sans-serif; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);">
    <div class="navbar-inner" style="background-color: #1b3f2c;">
        <div class="container-fluid">
            <div style="display: flex; justify-content: space-between; align-items: center; padding: 10px 15px;">
                
                <!-- Left: Brand -->
                <a class="brand" href="#" style="color: white !important; font-size: 18px; font-weight: 600; text-decoration: none;">
                    Nutech Teacher Dashboard
                </a>

                <!-- Right: Dropdown -->
                <?php
                $query = mysqli_query($conn, "SELECT * FROM teacher WHERE teacher_id = '$session_id'") or die(mysqli_error());
                $row = mysqli_fetch_array($query);
                $teacher_name = htmlspecialchars($row['firstname'] . " " . $row['lastname']);
                ?>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white !important; font-size: 15px; text-decoration: none;">
                        <i class="icon-user icon-large" style="margin-right: 6px;"></i><?php echo $teacher_name; ?>
                        <i class="icon-caret-down" style="margin-left: 4px;"></i>
                    </a>

                    <!-- Dropdown Menu -->
                    <ul class="dropdown-menu" style="min-width: 180px; border-radius: 8px; background-color: #f5f5f5; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 0;">
                        <li style="padding: 0; margin: 0;">
                            <a href="change_password_teacher.php"
                               style="display: block; padding: 10px 15px; color: #2c5f2d; text-decoration: none;"
                               onmouseover="this.style.backgroundColor='#1b3f2c'; this.style.color='white';"
                               onmouseout="this.style.backgroundColor='transparent'; this.style.color='#2c5f2d';">
                                <i class="icon-key"></i> Change Password
                            </a>
                        </li>
                        <li style="padding: 0; margin: 0;">
                            <a href="#myModal" data-toggle="modal"
                               style="display: block; padding: 10px 15px; color: #2c5f2d; text-decoration: none;"
                               onmouseover="this.style.backgroundColor='#1b3f2c'; this.style.color='white';"
                               onmouseout="this.style.backgroundColor='transparent'; this.style.color='#2c5f2d';">
                                <i class="icon-picture"></i> Change Avatar
                            </a>
                        </li>
                        <li class="divider" style="margin: 0;"></li>
                        <li style="padding: 0; margin: 0;">
                            <a href="logout.php"
                               style="display: block; padding: 10px 15px; color: #2c5f2d; text-decoration: none;"
                               onmouseover="this.style.backgroundColor='#1b3f2c'; this.style.color='white';"
                               onmouseout="this.style.backgroundColor='transparent'; this.style.color='#2c5f2d';">
                                <i class="icon-signout"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('avatar_modal.php'); ?>
