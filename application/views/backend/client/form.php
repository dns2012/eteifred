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
                <h4 class="card-title">CLIENT</h4>
                <form action="<?= site_url('admin/client/form/action/' . $id) ?>" method="post" id="form" enctype="multipart/form-data" class="forms-sample">
                    <div class="form-group">
                        <label>Code</label>
                        <input type="text" class="form-control" name="code" required value="<?= (!empty($client)) ? $client->code : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" required value="<?= (!empty($client)) ? $client->name : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Client Type</label>
                        <select name="client_type_id" class="form-control">
                            <?php foreach ($client_type as $index => $client_type) : ?>
                                <option value="<?= $client_type->id ?>" <?= (!empty($client) ? ($client_type->id == $client->client_type_id) ? 'selected' : '' : '') ?>><?= $client_type->name ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" name="country" required value="<?= (!empty($client)) ? $client->country : '' ?>">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="<?= site_url('admin/client') ?>" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once dirname(__FILE__) . '/../layouts/footer.php'; ?>