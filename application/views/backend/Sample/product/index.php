<?php include_once dirname(__FILE__).'/../layouts/header.php';?>
<!-- MAIN PANEL -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header d-flex justify-content-between border-bottom-0">
                        <h5 class="mb-0">
                            PRODUCT
                        </h5>
                        <a href="<?=site_url('admin/product/form/0')?>" class="btn btn-xs btn-primary">
                            <i class="fas fa-plus"></i> INSERT
                        </a>
                    </div>
                </div>
                <div class="card">
                    <table class="table table-order table-hover">
                        <thead class="thead-primary">
                            <tr>
                                <th class="text-left">#</th>
                                <th class="text-left">Name</th>
                                <th class="text-left">Category</th>
                                <th class="text-left">Description</th>
                                <th class="text-left"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($product as $index => $product): ?>
                            <tr>
                                <td class="text-left"><?=$index+1?></td>
                                <td class="text-left"><?=$product->name?></td>
                                <td class="text-left"><?=$product->category?></td>
                                <td class="text-left"><?=$product->description?></td>
                                <td class="text-right">
                                    <a href="<?=site_url('admin/product/form/'.$product->id)?>" class="btn btn-default btn-xs border-radius-6">
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
                                            <a href="<?=site_url('admin/product/delete/'.$product->id)?>" class="btn btn-primary">
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