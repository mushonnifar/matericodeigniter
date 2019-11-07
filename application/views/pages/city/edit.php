<form action="<?= base_url('city/update') ?>" method="post">
    <div class="form-group">
        <label>Nama Kota</label>
        <input type="hidden" name="id" value="<?= $city->id ?>">
        <input type="text" name="name" value="<?= $city->name ?>" class="form-control" placeholder="Nama Kota" required="">
    </div>
    <div class="form-group">
        <label>Provinsi</label>
        <select name="province_id" class="form-control" required="">
            <?php foreach ($provinsi as $value) { ?>
                <option value="<?= $value->id ?>" <?= $value->id == $city->province_id ? 'selected' : '' ?>><?= $value->name ?></option>
            <?php } ?>
        </select>
    </div>
    <button type="submit" name="edit" value="edit" class="btn btn-primary">Update</button>
</form>
