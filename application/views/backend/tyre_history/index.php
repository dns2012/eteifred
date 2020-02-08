<?php include_once dirname(__FILE__) . '/../layouts/header.php'; ?>
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tyre History</h4>
                <!-- <div class="card-description">
                    <a href="<?= site_url('admin/tyre-history/form/0') ?>" class="btn btn-primary">ADD ITEM</a>
                </div> -->
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Project</th>
                                <th>Project Vehicle</th>
                                <th>Vehicle</th>
                                <th>Status</th>
                                <th>Updated At</th>
                                <!-- <th></th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tyre_history as $index => $tyre_history) : ?>
                                <tr>
                                    <td><?= $tyre_history->serial ?></td>
                                    <td><?= $tyre_history->project_name ?></td>
                                    <td><?= $tyre_history->project_vehicle_name ?></td>
                                    <td><?= $tyre_history->vehicle_name .' - '.$tyre_history->vehicle_type ?></td>
                                    <td><label class="badge badge-success"><?= $tyre_history->status ?></label></td>
                                    <td><label class="badge badge-warning"><?= $tyre_history->updated_at ?></label></td>
                                    <!-- <td>
                                        <a href="<?= site_url('admin/tyre-history/form/' . $tyre_history->id) ?>" class="btn btn-success">EDIT</a>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?= $index ?>">DELETE</button>
                                    </td> -->
                                </tr>
                                <div class="modal fade" id="deleteModal<?= $index ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="mb-0">Delete this item?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">CANCEL</button>
                                                <a href="<?= site_url('admin/tyre-history/delete/' . $tyre_history->id) ?>" class="btn btn-primary">
                                                    DELETE
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once dirname(__FILE__) . '/../layouts/footer.php'; ?>