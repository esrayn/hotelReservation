
<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Oda Özellikleri Düzenle</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="<?php echo base_url("room/edit/$row->id");?>" method="post">
                        <div class="card-body col-md-6">
                            <div class="form-group">
                                <label>Özellik Adı </label>
                                <input type="text" class="form-control" name="title" value="<?php echo $row->title; ?>">
                            </div>

                           <!-- <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">Durum</label>
                            </div>-->
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Kaydet</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->


            </div>
            <!--/.col (left) -->
            <!-- right column -->

        </div>
    </div>
</section>
<!-- /.content -->
