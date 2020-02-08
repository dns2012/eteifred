<form id="form-action" 
    data-id="<?= (!empty($tyre->tyre_history_id)) ? $tyre->tyre_history_id : '0'?>" 
    data-status="<?= $tyre->status ?>"
    data-project="<?= (!empty($tyre->project_id)) ? $tyre->project_id : '0'?>">

    <?php if ($tyre->status == 'New' || $tyre->status == 'Free') { ?>
    <div class="form-group project-vehicle d-none">
        <label>Project Vehicle</label>
        <select class="form-control" name="project_vehicle">
            <option value="">--</option>
            <?php foreach ($project_vehicle as $index => $project_vehicle) : ?>
                <option value="<?= $project_vehicle->id ?>"><?= $project_vehicle->name ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <?php ;} ?>

    <div class="form-group position d-none">
        <label>Position</label>
        <select class="form-control" name="position">
            <option value="">--</option>
            <option value="FR" <?= (!empty($tyre) && !in_array($tyre->status, ['New', 'Free'])) ? ($tyre->position == 'FR') ? 'selected' : '' : '' ?>>FR</option>
            <option value="FL" <?= (!empty($tyre) && !in_array($tyre->status, ['New', 'Free'])) ? ($tyre->position == 'FL') ? 'selected' : '' : '' ?>>FL</option>
            <option value="RR" <?= (!empty($tyre) && !in_array($tyre->status, ['New', 'Free'])) ? ($tyre->position == 'RR') ? 'selected' : '' : '' ?>>RR</option>
            <option value="RL" <?= (!empty($tyre) && !in_array($tyre->status, ['New', 'Free'])) ? ($tyre->position == 'RL') ? 'selected' : '' : '' ?>>RL</option>
        </select>
    </div>

    <div class="form-group distance-start d-none">
        <label>Distance Start (meter)</label>
        <input type="number" class="form-control" name="distance_start_value" value="<?= (!empty($tyre) && !in_array($tyre->status, ['New', 'Free'])) ? $tyre->distance_start_value : '' ?>">
    </div>

    <div class="form-group distance-end d-none">
        <label>Distance End (meter)</label>
        <input type="number" class="form-control" name="distance_end_value" value="<?= (!empty($tyre) && !in_array($tyre->status, ['New', 'Free'])) ? $tyre->distance_end_value : '' ?>">
    </div>

    <div class="form-group description d-none">
        <label>Description</label>
        <textarea class="form-control" name="description" cols="30" rows="10"><?= (!empty($tyre) && !in_array($tyre->status, ['New', 'Free'])) ? $tyre->description : '' ?></textarea>
    </div>

    <div class="form-group submit d-none">
        <button type="submit" class="btn btn-success">SUBMIT</button>
    </div>

    <div class="form-group control">
        <button type="button" class="btn new btn-primary <?= (in_array($tyre->status, ['New', 'Free'])) ? '' : 'disabled' ?>">INSTALL</button>
        <button type="button" class="btn installed btn-primary <?= (in_array($tyre->status, ['Installed'])) ? '' : 'disabled' ?>">REMOVE</button>
        <button type="button" class="btn removed btn-primary <?= (in_array($tyre->status, ['Removed'])) ? '' : 'disabled' ?>">REPAIR</button>
        <button type="button" class="btn repair btn-primary <?= (in_array($tyre->status, ['Repair'])) ? '' : 'disabled' ?>">FINISH REPAIR</button>
        <!-- <button type="button" class="btn btn-danger">SCRAP</button> -->
    </div>
</form>