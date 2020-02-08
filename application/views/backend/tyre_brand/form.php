<?php include_once dirname(__FILE__) . '/../layouts/header.php'; ?>
<div class="content-wrapper">
    <div class="col-md-12">
        <?php if (!empty($this->session->flashdata("warning"))) { ?>
            <div class="alert alert-danger" role="alert">
                <?= $this->session->flashdata("warning") ?>
            </div>
        <?php ;} ?>
    </div>
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">TYRE BRAND</h4>
                <form action="<?= site_url('admin/tyre-brand/form/action/' . $id) ?>" method="post" id="form" enctype="multipart/form-data" class="forms-sample">
                    <div class="form-group">
                        <label>Code</label>
                        <input type="text" class="form-control" name="code" required value="<?= (!empty($tyre_brand)) ? $tyre_brand->code : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Identifier</label>
                        <input type="text" class="form-control" name="identifier" required value="<?= (!empty($tyre_brand)) ? $tyre_brand->identifier : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" required value="<?= (!empty($tyre_brand)) ? $tyre_brand->name : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" cols="30" rows="10"><?= (!empty($tyre_brand)) ? $tyre_brand->description : '' ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="<?= site_url('admin/tyre-brand') ?>" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once dirname(__FILE__) . '/../layouts/footer.php'; ?>