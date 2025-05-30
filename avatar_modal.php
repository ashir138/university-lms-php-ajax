<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
     style="font-family: 'Segoe UI', Tahoma, sans-serif;">
    <div class="modal-header" style="background-color: #1b3f2c; color: white;">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"
                style="color: white; font-size: 20px;">×</button>
        <h3 id="myModalLabel" style="margin: 0; font-size: 18px;">Change Avatar</h3>
    </div>

    <form method="post" action="teacher_avatar.php" enctype="multipart/form-data">
        <div class="modal-body" style="padding: 30px; background-color: #f5f5f5;">
            <center>
                <div class="control-group">
                    <div class="controls">
                        <input name="image" class="input-file uniform_on" id="fileInput" type="file" required
                               style="font-size: 15px; border-radius: 6px; padding: 6px;">
                    </div>
                </div>
            </center>
        </div>

        <div class="modal-footer" style="background-color: #1b3f2c;">
            <button class="btn" data-dismiss="modal" aria-hidden="true"
                    style="background-color: white; color: #1b3f2c; border: 1px solid #1b3f2c; border-radius: 6px;">
                <i class="icon-remove icon-large"></i> Close
            </button>
            <button class="btn" name="change"
                    style="background-color: white; color: #1b3f2c; border-radius: 6px;">
                <i class="icon-save icon-large"></i> Save
            </button>
        </div>
    </form>
</div>
