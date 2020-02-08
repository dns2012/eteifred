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
                <h4 class="card-title">TYRE</h4>
                <form action="<?= site_url('admin/tyre/form/action/' . $id) ?>" method="post" id="form" enctype="multipart/form-data" class="forms-sample">
                    <div class="form-group">
                        <label>Serial</label>
                        <input type="text" class="form-control" name="serial" required value="<?= (!empty($tyre)) ? $tyre->serial : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Specification</label>
                        <input type="text" class="form-control" name="specification" required value="<?= (!empty($tyre)) ? $tyre->specification : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status" required>
                            <option value="">--</option>
                            <option value="New" <?= (!empty($tyre) ? ($tyre->status == 'New') ? 'selected' : '' : '') ?>>New</option>
                            <option value="Installed" <?= (!empty($tyre) ? ($tyre->status == 'Installed') ? 'selected' : '' : '') ?>>Installed</option>
                            <option value="Repair" <?= (!empty($tyre) ? ($tyre->status == 'Repair') ? 'selected' : '' : '') ?>>Repair</option>
                            <option value="Free" <?= (!empty($tyre) ? ($tyre->status == 'Free') ? 'selected' : '' : '') ?>>Free</option>
                            <option value="Scrap" <?= (!empty($tyre) ? ($tyre->status == 'Scrap') ? 'selected' : '' : '') ?>>Scrap</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Type</label>
                        <select class="form-control" name="type" required>
                            <option value="">--</option>
                            <option value="Radial" <?= (!empty($tyre) ? ($tyre->type == 'Radial') ? 'selected' : '' : '') ?>>Radial</option>
                            <option value="Crossply" <?= (!empty($tyre) ? ($tyre->type == 'Crossply') ? 'selected' : '' : '') ?>>Crossply</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tyre Brand</label>
                        <select class="form-control" name="tyre_brand_id" required>
                            <option value="">--</option>
                            <?php foreach ($tyre_brand as $index => $tyre_brand) : ?>
                                <option value="<?= $tyre_brand->id ?>" <?= (!empty($tyre) ? ($tyre_brand->id == $tyre->tyre_brand_id) ? 'selected' : '' : '') ?>><?= $tyre_brand->name ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Production Date</label>
                        <input type="date" class="form-control" name="production_date" required value="<?= (!empty($tyre)) ? date('Y-m-d', strtotime($tyre->production_date)) : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Size</label>
                        <input type="text" class="form-control" name="size" required value="<?= (!empty($tyre)) ? $tyre->size : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Pattern</label>
                        <input type="text" class="form-control" name="pattern" required value="<?= (!empty($tyre)) ? $tyre->pattern : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Image</label> <br>
                        <?php if (!empty($tyre->image)) { ?>
                            <img src="<?= $tyre->image ?>" alt="image-tyre" srcset="">
                            <input type="hidden" name="image" value="<?= $tyre->image ?>">
                        <?php ;} ?>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                        <label>Total Hour</label>
                        <input type="number" class="form-control" name="total_hour" required value="<?= (!empty($tyre)) ? $tyre->total_hour : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Total Distance (meter)</label>
                        <input type="number" class="form-control" name="total_distance" required value="<?= (!empty($tyre)) ? $tyre->total_distance : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Shipping Date</label>
                        <input type="date" class="form-control" name="shipping_date" required value="<?= (!empty($tyre)) ? date('Y-m-d', strtotime($tyre->shipping_date)) : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Received Date</label>
                        <input type="date" class="form-control" name="received_date" required value="<?= (!empty($tyre)) ? date('Y-m-d', strtotime($tyre->received_date)) : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>First Installed Date</label>
                        <input type="date" class="form-control" name="first_installed_date" required value="<?= (!empty($tyre)) ? date('Y-m-d', strtotime($tyre->first_installed_date)) : '' ?>">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="<?= site_url('admin/tyre') ?>" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once dirname(__FILE__) . '/../layouts/footer.php'; ?>