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
                    <a href="?action=edit&id=<?= $value['id'] ?>" class="btn btn-sm btn-warning">Edit</a>&nbsp;
                    <a href="?action=delete&id=<?= $value['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            <?php $i++;
        }
        ?>
    <tbody>
</table>