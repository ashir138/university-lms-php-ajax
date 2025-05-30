<!-- block -->
<div class="block" id="search_class">
    <div class="navbar navbar-inner block-header" style="background-color: #1b3f2c; color: white;">
        <div class="muted pull-left">
            <strong>Search Past Class</strong>
        </div>
    </div>
    <div class="block-content collapse in">
        <div class="span12">
            <form method="post" action="search_class.php">	
                <div class="control-group">
                    <label>School Year:</label>
                    <div class="controls">
                        <select name="school_year" class="span8" required style="border-radius: 6px; padding: 6px;">
                            <option disabled selected>Select Year</option>
                            <?php
                            $query = mysqli_query($conn,"SELECT * FROM school_year ORDER BY school_year DESC");
                            while($row = mysqli_fetch_array($query)){
                            ?>
                                <option><?php echo $row['school_year']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button name="search" class="btn" style="background-color: white color: #1b3f2c">
                            <i class="icon-search"></i> Search
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /block -->
