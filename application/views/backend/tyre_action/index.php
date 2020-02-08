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
                <h4 class="card-title">TYRE ACTION</h4>
                <div class="form-group">
                    <label>Project</label>
                    <select class="form-control" name="project" required>
                        <option value="">--</option>
                        <?php foreach ($project as $index => $project) : ?>
                            <option value="<?= $project->id ?>" ><?= $project->name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group d-none">
                    <label>Tyre</label>
                    <select class="form-control" name="tyre" required>
                        <option value="">--</option>
                    </select>
                </div>
                <div id="box-form-tyre"></div>
            </div>
        </div>
    </div>
</div>
<?php include_once dirname(__FILE__) . '/../layouts/footer.php'; ?>

<script>
$(document).ready(function() {
    $('[name=project]').change(function() {
        $.ajax({
            method : 'GET',
            url : 'api/tyre/project/' + $(this).val(),
            success : function(data) {
                if (data) {
                    $('.form-group.d-none').removeClass('d-none')
                    var option = '';
                    for (var i in data) {
                        option += '<option value="'+data[i].id+'">'+data[i].tyre_brand+' - '+data[i].serial+'</option>'
                    }
                    $('[name=tyre]').append(option);
                    $('[name=tyre]').attr('required', true);
                }
            }
        })
    })

    $('[name=tyre]').change(function() {
        $.ajax({
            method : 'POST',
            url : 'tyre-action-page',
            data : {
                'tyre_id' : $(this).val(),
                'project_id' : $('[name=project]').val()
            },
            success : function(data) {
                $('#box-form-tyre').html(data);
            }
        })
    })

    $('body').on('click', '.btn.new', function() {
        $('.form-group.project-vehicle.d-none').removeClass('d-none');
        $('.form-group.position.d-none').removeClass('d-none');
        $('.form-group.description.d-none').removeClass('d-none');
        $('.form-group.distance-start.d-none').removeClass('d-none');

        $('[name=project_vehicle]').attr('required', true);
        $('[name=position]').attr('required', true);
        $('[name=distance_start_value]').attr('required', true);
        $('[name=description]').attr('required', true);

        $('.form-group.submit.d-none').removeClass('d-none');
        $('.form-group.control').addClass('d-none');
    });

    $('body').on('click', '.btn.installed', function() {
        $('.form-group.distance-end.d-none').removeClass('d-none');
        $('.form-group.description.d-none').removeClass('d-none');

        $('[name=distance_end_value]').attr('required', true);
        $('[name=description]').attr('required', true);

        $('.form-group.submit.d-none').removeClass('d-none');
        $('.form-group.control').addClass('d-none');
    })

    $('body').on('click', '.btn.removed', function() {
        $('.form-group.description.d-none').removeClass('d-none');
        $('[name=description]').attr('required', true);

        $('.form-group.submit.d-none').removeClass('d-none');
        $('.form-group.control').addClass('d-none');
    })

    $('body').on('click', '.btn.repair', function() {
        $('.form-group.description.d-none').removeClass('d-none');
        $('[name=description]').attr('required', true);

        $('.form-group.submit.d-none').removeClass('d-none');
        $('.form-group.control').addClass('d-none');
    })

    $('body').on('submit', '#form-action', function(event) {
        event.preventDefault();
        let id = $(this).data('id');
        let status = $(this).data('status');
        let form = $(this).serializeArray();
        form.push(
            {
                name: "id", 
                value: id
            },
            {
                name: "status", 
                value: status
            },
            {
                name: "tyre",
                value: $('[name=tyre]').val()
            }
        );
        $.ajax({
            method : 'POST',
            url : 'tyre-action/form/action',
            data : form,
            success : function(data) {
                window.location = "<?= site_url('admin/tyre-history')?>"
            }
        })
    })
})
</script>