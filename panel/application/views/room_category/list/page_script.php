<script src="<?php echo base_url("assets"); ?>/third_party/js/bootstrap-toggle.min.js"></script>
<script>

    $(document).ready(function () {


        var base_url = $(".base_url").text();

        $( ".sortableList" ).sortable();

        // Bootstrap Toggle init
        $('.toggle_check').bootstrapToggle();

        // isActive Change

        $('.toggle_check').change(function () {

            var isActive = $(this).prop("checked");

            var id       = $(this).attr("dataID");

            $.post(base_url + "roomcategory/isActiveSetter",

            { id : id, isActive : isActive}, function (response) {})
        })



    })

</script>