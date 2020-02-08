<?php include_once dirname(__FILE__).'/../layouts/header.php';?>
<style>
    fieldset.scheduler-border {
        border: 1px groove #ddd !important;
        padding: 0 1.4em 1.4em 1.4em !important;
        margin: 0 0 1.5em 0 !important;
        -webkit-box-shadow:  0px 0px 0px 0px #000;
                box-shadow:  0px 0px 0px 0px #000;
    }

    legend.scheduler-border {
        font-size: 1.2em !important;
        font-weight: bold !important;
        text-align: left !important;
        width:auto;
        padding:0 10px;
        border-bottom:none;
    }
</style>
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
                            UPDATE ABOUT US
                        </h5>
                        <div class="btn-group">
                            <button type="submit" form="form" class="btn btn-xs btn-success">
                                SAVE
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="<?=site_url('admin/about/form/action/'.$id)?>" method="post" id="form" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">About</label>
                                        <textarea class="tinymce" name="about" id=""><?=(!empty($about))?$about->about:''?></textarea>
                                    </div>
                                    <fieldset class="scheduler-border">
                                        <legend class="scheduler-border">Item One</legend>
                                        <div class="form-group">
                                            <label for="">Title</label>
                                            <input type="text" name="item_one_title" id="" class="form-control" placeholder="" value="<?=(!empty($about))?$about->item_one_title:''?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Value</label>
                                            <input type="number" name="item_one_number" id="" class="form-control" placeholder="" value="<?=(!empty($about))?$about->item_one_number:''?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Icon</label>
                                            <?php if(!empty($about->item_one_image)) { ?>
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-3">
                                                        <img src="<?=$cdnAbout.$about->item_one_image?>" style="width: 100%; height: 160px" alt="">
                                                    </div>
                                                </div>
                                            <?php ;} ?>
                                            <input type="file" class="form-control" name="item_one_image"/>
                                        </div>
                                        <input type="hidden" name="item_one_image" value="<?=$about->item_one_image?>">
                                    </fieldset>
                                    <fieldset class="scheduler-border">
                                        <legend class="scheduler-border">Item One</legend>
                                        <div class="form-group">
                                            <label for="">Title</label>
                                            <input type="text" name="item_two_title" id="" class="form-control" placeholder="" value="<?=(!empty($about))?$about->item_two_title:''?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Value</label>
                                            <input type="number" name="item_two_number" id="" class="form-control" placeholder="" value="<?=(!empty($about))?$about->item_two_number:''?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Icon</label>
                                            <?php if(!empty($about->item_two_image)) { ?>
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-3">
                                                        <img src="<?=$cdnAbout.$about->item_two_image?>" style="width: 100%; height: 160px" alt="">
                                                    </div>
                                                </div>
                                            <?php ;} ?>
                                            <input type="file" class="form-control" name="item_two_image"/>
                                        </div>
                                        <input type="hidden" name="item_two_image" value="<?=$about->item_two_image?>">
                                    </fieldset>
                                    <fieldset class="scheduler-border">
                                        <legend class="scheduler-border">Item One</legend>
                                        <div class="form-group">
                                            <label for="">Title</label>
                                            <input type="text" name="item_three_title" id="" class="form-control" placeholder="" value="<?=(!empty($about))?$about->item_three_title:''?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Value</label>
                                            <input type="number" name="item_three_number" id="" class="form-control" placeholder="" value="<?=(!empty($about))?$about->item_three_number:''?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Icon</label>
                                            <?php if(!empty($about->item_three_image)) { ?>
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-3">
                                                        <img src="<?=$cdnAbout.$about->item_three_image?>" style="width: 100%; height: 160px" alt="">
                                                    </div>
                                                </div>
                                            <?php ;} ?>
                                            <input type="file" class="form-control" name="item_three_image"/>
                                        </div>
                                        <input type="hidden" name="item_three_image" value="<?=$about->item_three_image?>">
                                    </fieldset>
                                    <fieldset class="scheduler-border">
                                        <legend class="scheduler-border">Item One</legend>
                                        <div class="form-group">
                                            <label for="">Title</label>
                                            <input type="text" name="item_four_title" id="" class="form-control" placeholder="" value="<?=(!empty($about))?$about->item_four_title:''?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Value</label>
                                            <input type="number" name="item_four_number" id="" class="form-control" placeholder="" value="<?=(!empty($about))?$about->item_four_number:''?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Icon</label>
                                            <?php if(!empty($about->item_four_image)) { ?>
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-3">
                                                        <img src="<?=$cdnAbout.$about->item_four_image?>" style="width: 100%; height: 160px" alt="">
                                                    </div>
                                                </div>
                                            <?php ;} ?>
                                            <input type="file" class="form-control" name="item_four_image"/>
                                        </div>
                                        <input type="hidden" name="item_four_image" value="<?=$about->item_four_image?>">
                                    </fieldset>
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