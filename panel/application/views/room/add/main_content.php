
<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Oda Özellikleri Ekle</h3>
                    </div>
                    <!-- /.card-header -->


                    <div class="card-body">
                        <form role="form" action="<?php echo base_url("room/addPage");?>" method="post">
                            <div class="row">
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Oda Numarası</label>
                                        <input type="text" class="form-control" name="room_code">
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <label>Başlık</label>
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Detay</label>
                                        <textarea class="textarea" name="detail" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Oda Türü</label>
                                        <select class="custom-select" name="room_type_id">
                                            <?php foreach (get_room_category() as $category){  ?>
                                            <option value="<?= $category->id; ?>"><?= $category->title; ?></option>
                                            <?php } ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Oda Kapasitesi</label>
                                        <select class="custom-select" name="room_capacity">
                                            <?php for($i=1; $i<=10; $i++){?>
                                                <option value="<?= $i; ?>"><?= $i." Kişilik"; ?></option>
                                            <?php } ?>


                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Oda Boyutu (m<sup>2</sup>)</label>
                                        <input type="text" class="form-control" name="size">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Fiyatı (Gecelik)</label>
                                        <input type="text" class="form-control" name="default_price">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Oda Özellikleri</label>
                                        <select class="select2" name="room_properties[]" multiple="multiple" data-placeholder="Oda Özelliklerini Seçin" style="width: 100%;">
                                            <?php foreach (get_room_properties() as $property){  ?>
                                                <option value="<?= $property->id; ?>"><?= $property->title; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Oda Extra Servisler</label>
                                        <select class="select2" name="room_extra_services[]" multiple="multiple" data-placeholder="Oda Extra Servislerini Seçin" style="width: 100%;">
                                            <?php foreach (get_room_extra_services() as $service){  ?>
                                                <option value="<?= $service->id; ?>"><?= $service->title; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Ekle</button>
                            </div>


                        </form>
                    </div>
                </div>
                <!-- /.card -->


            </div>
            <!--/.col (left) -->
            <!-- right column -->

        </div>
    </div>
</section>
<!-- /.content -->
