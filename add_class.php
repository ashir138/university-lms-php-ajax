<!-- block -->
<div class="block">
    <div class="navbar navbar-inner block-header" style="background-color: #1b3f2c; color: white;">
        <div class="muted pull-left">
            <h4><i class="icon-plus-sign"></i> Add Class</h4>
        </div>
    </div>
    <div class="block-content collapse in">
        <div class="span12">
            <form method="post" id="add_class">
                
                <div class="control-group">
                    <label>Class Name:</label>
                    <div class="controls">
                        <input type="hidden" name="session_id" value="<?php echo $session_id; ?>">
                        <select name="class_id" class="" required>
                            <option></option>
                            <?php
                            $query = mysqli_query($conn, "SELECT * FROM class ORDER BY class_name");
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <label>Subject:</label>
                    <div class="controls">
                        <select name="subject_id" class="" required>
                            <option></option>
                            <?php
                            $query = mysqli_query($conn, "SELECT * FROM subject ORDER BY subject_code");
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <option value="<?php echo $row['subject_id']; ?>"><?php echo $row['subject_code']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <label>Year:</label>
                    <div class="controls">
                        <?php
                        $query = mysqli_query($conn, "SELECT * FROM school_year ORDER BY school_year DESC");
                        $row = mysqli_fetch_array($query);
                        ?>
                        <input type="text" class="span5" name="school_year" value="<?php echo $row['school_year']; ?>">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button name="save" class="btn btn-success"><i class="icon-save"></i> Save</button>
                    </div>
                </div>
            </form>

            <script>
                jQuery(document).ready(function($) {
                    $("#add_class").submit(function(e) {
                        e.preventDefault();
                        var formData = $(this).serialize();
                        $.ajax({
                            type: "POST",
                            url: "add_class_action.php",
                            data: formData,
                            success: function(html) {
                                if (html == "true") {
                                    $.jGrowl("Class Already Exist", { header: 'Add Class Failed' });
                                } else {
                                    $.jGrowl("Class Successfully Added", { header: 'Class Added' });
                                    setTimeout(function() {
                                        window.location = 'dasboard_teacher.php';
                                    }, 500);
                                }
                            }
                        });
                    });
                });
            </script>
        </div>
    </div>
</div>
<!-- /block -->
