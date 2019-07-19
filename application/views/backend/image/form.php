<?php include_once dirname(__FILE__).'/../layouts/header.php';?>
<!-- MAIN PANEL -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row justify-content-center">
            <div class="col-10">
                <?php if(!empty($this->session->flashdata("warning"))) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?=$this->session->flashdata("warning")?>
                    </div>
                <?php ;} ?>
                <div class="card mb-3">
                    <div class="card-header d-flex justify-content-between border-bottom-0">
                        <h5 class="mb-0">
                        <?php if($id == 0) { ?>
                                INSERT IMAGE
                            <?php ;} else { ?>
                                UPDATE IMAGE
                            <?php ;} ?>
                        </h5>
                        <div class="btn-group">
                            <a href="<?=site_url('admin/gallery/image')?>" class="btn btn-xs btn-danger">
                                CANCEL
                            </a>
                            <button type="submit" form="form" class="btn btn-xs btn-success">
                                SAVE
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="<?=site_url('admin/gallery/image/form/action/'.$id)?>" method="post" id="form" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-5">
                                    <?php if($id == 0) { ?>
                                        <div class="form-group">
                                            <input type="file" name="image" class="dropify" data-height="225" data-default-file="<?=$image?>upload.png" data-allowed-file-extensions="jpg jpeg png" data-max-file-size="1M" required/>
                                        </div>
                                    <?php ;} else { ?>
                                        <div class="form-group">
                                            <input type="file" name="image" class="dropify" data-height="225" data-default-file="<?=$cdnGallery.$gallery->object?>" data-allowed-file-extensions="jpg jpeg png" data-max-file-size="1M"/>
                                        </div>
                                        <input type="hidden" name="image" value="<?=$gallery->object?>">
                                    <?php ;} ?>
                                </div>
                                <div class="col-12 col-sm-12 col-md-7">
                                    <div class="form-group">
                                        <label for="">Caption</label>
                                        <textarea class="tinymce" name="caption" id=""><?=(!empty($gallery))?$gallery->caption:''?></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once dirname(__FILE__).'/../layouts/footer.php';?>