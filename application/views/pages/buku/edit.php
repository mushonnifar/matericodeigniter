<form action="<?= base_url('buku/update') ?>" method="post">
    <div class="form-group">
        <label>Judul Buku</label>
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <input type="text" name="name" class="form-control" placeholder="Judul Buku" value="<?= $data['name'] ?>" required="">
    </div>
    <div class="form-group">
        <label>Penerbit</label>
        <input type="text" name="penerbit" class="form-control" placeholder="Penerbit" value="<?= $data['penerbit'] ?>" required="">
    </div>
    <div class="form-group">
        <label>Pengarang</label>
        <input type="text" name="pengarang" class="form-control" placeholder="Pengarang" value="<?= $data['pengarang'] ?>" required="">
    </div>
    <button type="submit" name="edit" value="edit" class="btn btn-primary">Update</button>
</form>
