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
                            UPDATE WEBSITE INFORMATION
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
                        <form action="<?=site_url('admin/information/form/action/'.$id)?>" method="post" id="form" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Short Description</label>
                                        <textarea class="tinymce" name="tagline" id=""><?=(!empty($information))?$information->tagline:''?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Facebook Link</label>
                                        <input type="text" name="facebook" id="" class="form-control" placeholder="" value="<?=(!empty($information))?$information->facebook:''?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Twitter Link</label>
                                        <input type="text" name="twitter" id="" class="form-control" placeholder="" value="<?=(!empty($information))?$information->twitter:''?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Gplus Link</label>
                                        <input type="text" name="gplus" id="" class="form-control" placeholder="" value="<?=(!empty($information))?$information->gplus:''?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Instagram Link</label>
                                        <input type="text" name="instagram" id="" class="form-control" placeholder="" value="<?=(!empty($information))?$information->instagram:''?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Phone 1</label>
                                        <input type="text" name="phone_one" id="" class="form-control" placeholder="" value="<?=(!empty($information))?$information->phone_one:''?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Phone 2</label>
                                        <input type="text" name="phone_two" id="" class="form-control" placeholder="" value="<?=(!empty($information))?$information->phone_two:''?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Fax</label>
                                        <input type="text" name="fax" id="" class="form-control" placeholder="" value="<?=(!empty($information))?$information->fax:''?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" id="" class="form-control" placeholder="" value="<?=(!empty($information))?$information->email:''?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Google Map Link</label>
                                        <textarea class="form-control" name="maps" id=""><?=(!empty($information))?$information->maps:''?></textarea>
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