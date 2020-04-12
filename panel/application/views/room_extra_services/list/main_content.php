
<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Özellik Listesi</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <a href="<?php echo  base_url("roomextraservices/newPage");?>" class="btn btn-sm btn-primary mb10"><i class="fa fa-plus"></i> Ekle</a>


                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <th>id</th>
                            <th>Başlık</th>
                            <th>Durum</th>
                            <th class="col-md-2">İşlemler</th>
                            </thead>
                            <tbody class="sortableList" postUrl="roomextraservices/rankUpdate">
                            <?php foreach($rows as $row) { ?>
                                <tr id="sortId-<?php echo $row->id;?>">
                                    <td>#<?php echo $row->id; ?></td>
                                    <td><?php echo $row->title;?></td>
                                    <td>
                                        <input class = "toggle_check"
                                               data-onstyle="success"
                                               data-size = "mini"
                                               data-on="Aktif"
                                               data-off="Pasif"
                                               data-offstyle="danger"
                                               type="checkbox"
                                               data-toggle="toggle"
                                               dataID="<?php echo $row->id; ?>"
                                            <?php echo ($row->isActive == 1) ? "checked" : ""; ?>
                                        >
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url("roomextraservices/editPage/$row->id");?>">
                                            <i class="fa fa-edit" style="font-size:16px;"></i>
                                        </a>
                                        <a href="<?php echo base_url("roomextraservices/delete/$row->id"); ?>">
                                            <i class="fa fa-trash" style="font-size:16px;"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
