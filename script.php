<!-- Core JS and Plugins -->
<script src="admin/bootstrap/js/bootstrap.min.js"></script>
<script src="admin/assets/scripts.js"></script>

<!-- Charts -->
<script src="admin/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
<script>
    $(function () {
        $('.chart').easyPieChart({ animate: 1000 });
    });
</script>

<!-- DataTables -->
<script src="admin/vendors/datatables/js/jquery.dataTables.min.js"></script>
<script src="admin/assets/DT_bootstrap.js"></script>

<!-- Notifications -->
<script src="admin/vendors/jGrowl/jquery.jgrowl.js"></script>
<script>
    $(function () {
        $('.tooltip').tooltip();
        $('.tooltip-left').tooltip({ placement: 'left' });
        $('.tooltip-right').tooltip({ placement: 'right' });
        $('.tooltip-top').tooltip({ placement: 'top' });
        $('.tooltip-bottom').tooltip({ placement: 'bottom' });

        $('.popover-left').popover({ placement: 'left', trigger: 'hover' });
        $('.popover-right').popover({ placement: 'right', trigger: 'hover' });
        $('.popover-top').popover({ placement: 'top', trigger: 'hover' });
        $('.popover-bottom').popover({ placement: 'bottom', trigger: 'hover' });

        $('.notification').click(function () {
            var $id = $(this).attr('id');
            switch ($id) {
                case 'notification-sticky':
                    $.jGrowl("Stick this!", { sticky: true });
                    break;
                case 'notification-header':
                    $.jGrowl("A message with a header", { header: 'Important' });
                    break;
                default:
                    $.jGrowl("Hello world!");
                    break;
            }
        });
    });
</script>

<!-- Form Enhancements -->
<link href="admin/vendors/datepicker.css" rel="stylesheet" media="screen">
<link href="admin/vendors/uniform.default.css" rel="stylesheet" media="screen">
<link href="admin/vendors/chosen.min.css" rel="stylesheet" media="screen">
<script src="admin/vendors/jquery.uniform.min.js"></script>
<script src="admin/vendors/chosen.jquery.min.js"></script>
<script src="admin/vendors/bootstrap-datepicker.js"></script>
<script>
    $(function () {
        $(".datepicker").datepicker();
        $(".uniform_on").uniform();
        $(".chzn-select").chosen();

        $('#rootwizard .finish').click(function () {
            alert('Finished!, Starting over!');
            $('#rootwizard').find("a[href*='tab1']").trigger('click');
        });
    });
</script>

<!-- Editors -->
<script src="admin/vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
<script src="admin/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
<script src="admin/vendors/ckeditor/ckeditor.js"></script>
<script src="admin/vendors/ckeditor/adapters/jquery.js"></script>
<script src="admin/vendors/tinymce/js/tinymce/tinymce.min.js"></script>
<script>
    $(function () {
        $('textarea#ckeditor_standard').ckeditor({
            width: '98%',
            height: '150px',
            toolbar: [
                { name: 'document', items: ['Source', '-', 'NewPage', 'Preview', '-', 'Templates'] },
                ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'],
                { name: 'basicstyles', items: ['Bold', 'Italic'] }
            ]
        });
        $('textarea#ckeditor_full').ckeditor({ width: '98%', height: '150px' });
    });
</script>

<!-- Image Hover Effects -->
<script src="admin/assets/jquery.hoverdir.js"></script>
<link rel="stylesheet" type="text/css" href="admin/assets/style.css" />
<script>
    $(function () {
        $('#da-thumbs > li').hoverdir();
    });
</script>

<!-- Calendar -->
<script src="admin/vendors/fullcalendar/fullcalendar.js"></script>
<script src="admin/vendors/fullcalendar/gcal.js"></script>
