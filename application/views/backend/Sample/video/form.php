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
                                INSERT VIDEO
                            <?php ;} else { ?>
                                UPDATE VIDEO
                            <?php ;} ?>
                        </h5>
                        <div class="btn-group">
                            <a href="<?=site_url('admin/gallery/video')?>" class="btn btn-xs btn-danger">
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
                        <form action="<?=site_url('admin/gallery/video/form/action/'.$id)?>" method="post" id="form" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Video</label>
                                        <?php if($id == 0) { ?>
                                            <div class="form-group">
                                                <input type="file" class="form-control" name="object" required/>
                                            </div>
                                        <?php ;} else { ?>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-6">
                                                        <video style="width: 100%; height: 320px" controls>
                                                            <source src="<?=$cdnGallery.$gallery->object?>"/>
                                                        </video>
                                                    </div>
                                                </div>
                                                <input type="file" class="form-control" name="object"/>
                                            </div>
                                            <input type="hidden" name="object" value="<?=$gallery->object?>">
                                        <?php ;} ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Thumbnail</label>
                                        <?php if($id == 0) { ?>
                                            <div class="form-group">
                                                <input type="file" class="form-control" name="image"/>
                                            </div>
                                        <?php ;} else { ?>
                                            <div class="form-group">
                                                <?php if(!empty($gallery->thumbnail)) { ?>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-12 col-md-3">
                                                            <img src="<?=$cdnGallery.$gallery->thumbnail?>" style="width: 100%; height: 160px" alt="">
                                                        </div>
                                                    </div>
                                                <?php ;} ?>
                                                <input type="file" class="form-control" name="image"/>
                                            </div>
                                            <input type="hidden" name="image" value="<?=$gallery->thumbnail?>">
                                        <?php ;} ?>
                                    </div>
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