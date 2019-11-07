<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Penerbit</th>
            <th>Pengarang</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($buku as $value) {
            ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $value['name'] ?></td>
                <td><?= $value['penerbit'] ?></td>
                <td><?= $value['pengarang'] ?></td>
                <td>
                    <a href="<?= base_url('buku/edit/') . $value['id'] ?>" class="btn btn-sm btn-warning">Edit</a>&nbsp;
                    <a href="<?= base_url('buku/delete/') . $value['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            <?php
            $i++;
        }
        ?>
    <tbody>
</table>