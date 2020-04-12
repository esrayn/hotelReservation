<script src="<?php echo base_url("assets"); ?>/third_party/js/bootstrap-toggle.min.js"></script>

<!-- Summernote -->
<script src="<?php echo base_url("assets"); ?>/plugins/summernote/summernote-bs4.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url("assets"); ?>/plugins/select2/js/select2.full.min.js"></script>
<script>

    $(document).ready(function () {


        var base_url = $(".base_url").text();

        // Bootstrap Toggle init
        $('.toggle_check').bootstrapToggle();

        // isActive Change

        $('.toggle_check').change(function () {




            var isActive = $(this).prop("checked");

            var base_url = $(".base_url").text();

            var id       = $(this).attr("dataID");

            $.post(base_url + "room/isActiveSetter",
            { id : id, isActive : isActive}, function (response) {})
        })

    })

</script>



<script>
    $(function () {
        // Summernote
        $('.textarea').summernote()

        //Initialize Select2 Elements
        $('.select2').select2()



    })
</script>