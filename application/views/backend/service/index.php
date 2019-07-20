<?php include_once dirname(__FILE__).'/../layouts/header.php';?>
<!-- MAIN PANEL -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header d-flex justify-content-between border-bottom-0">
                        <h5 class="mb-0">
                            SERVICE
                        </h5>
                        <a href="<?=site_url('admin/service/form/0')?>" class="btn btn-xs btn-primary">
                            <i class="fas fa-plus"></i> INSERT
                        </a>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header justify-content-between border-bottom-0">
                        <h5 class="mb-0">
                            SERVICE SCHEME
                        </h5>
                        <form action="<?=site_url('admin/service/scheme/form/action/0')?>" method="post" enctype="multipart/form-data">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-12">
                                    <img src="<?=$cdnService.$scheme->image?>" class="w-100">
                                </div>
                                <div class="col-12 col-md-8 col-lg-8" style="margin-top: 5px">
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="col-12 col-md-4 col-lg-4" style="margin-top: 5px">
                                    <button type="submit" class="btn btn-primary" style="width: 100%">SAVE SCHEME</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <table class="table table-order table-hover">
                        <thead class="thead-primary">
                            <tr>
                                <th class="text-left">#</th>
                                <th class="text-left">Name</th>
                                <th class="text-left">Description</th>
                                <th class="text-left"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($service as $index => $service): ?>
                            <tr>
                                <td class="text-left"><?=$index+1?></td>
                                <td class="text-left"><?=$service->name?></td>
                                <td class="text-left"><?=$service->description?></td>
                                <td class="text-right">
                                    <a href="<?=site_url('admin/service/form/'.$service->id)?>" class="btn btn-default btn-xs border-radius-6">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-xs border-radius-6 ml-1" data-toggle="modal" data-target="#deleteModal<?=$index?>">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <div class="modal fade" id="deleteModal<?=$index?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <a href="<?=site_url('admin/service/delete/'.$service->id)?>" class="btn btn-primary">
                                                DELETE
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                    
                    <!-- <div class="mb-3">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once dirname(__FILE__).'/../layouts/footer.php';?>