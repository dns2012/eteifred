<?php include_once dirname(__FILE__) . '/../layouts/header.php'; ?>
<div class="content-wrapper">
    <div class="col-md-12 grid-margin stretch-card">
        <?php if (!empty($this->session->flashdata("warning"))) { ?>
            <div class="alert alert-danger" role="alert">
                <?= $this->session->flashdata("warning") ?>
            </div>
        <?php ;} ?>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">CLIENT TYPE</h4>
                <form action="<?= site_url('admin/client-type/form/action/' . $id) ?>" method="post" id="form" enctype="multipart/form-data" class="forms-sample">
                    <div class="form-group">
                        <label>Code</label>
                        <input type="text" class="form-control" name="code" required value="<?= (!empty($client_type)) ? $client_type->code : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" required value="<?= (!empty($client_type)) ? $client_type->name : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" cols="30" rows="10"><?= (!empty($client_type)) ? $client_type->description : '' ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="<?= site_url('admin/client-type') ?>" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once dirname(__FILE__) . '/../layouts/footer.php'; ?>