<!-- Campuses Modal -->
<div id="campuses" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-body" style="padding: 30px; background-color: #f5f5f5; font-family: 'Segoe UI', Tahoma, sans-serif; font-size: 16px; color: #1b3f2c;">
        <?php
            $mission_query = mysqli_query($conn,"SELECT * FROM content WHERE title = 'Campuses'") or die(mysqli_error());
            $mission_row = mysqli_fetch_array($mission_query);
            echo $mission_row['content'];
        ?>
    </div>
    <div class="modal-footer" style="background-color: #1b3f2c;">
        <button class="btn btn-light" data-dismiss="modal" aria-hidden="true" style="background-color: white; color: #1b3f2c; border: 1px solid #1b3f2c;">
            <i class="icon-remove"></i> Close
        </button>
    </div>
</div>
