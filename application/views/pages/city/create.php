<?= form_open('city/store') ?>
<div class="form-group">
    <label>Nama Kota</label>
    <input type="text" name="name" value="" class="form-control" placeholder="Nama Kota" required="">
</div>
<div class="form-group">
    <label>Provinsi</label>
    <select name="province_id" class="form-control" required="">
        <option value="">-- pilih provinsi --</option>
        <?php foreach ($provinsi as $value) { ?>
            <option value="<?= $value->id ?>"><?= $value->name ?></option>
        <?php } ?>
    </select>
</div>
<button type="submit" value="add" class="btn btn-primary">Submit</button>
<?= form_close() ?>
