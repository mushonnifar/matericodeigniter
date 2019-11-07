<a href="city/create" class="btn btn-primary">Create</a>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama Kota</th>
            <th>Nama Provinsi</th>
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
                <td><?= $value->name ?></td>
                <td><?= $value->province_name ?></td>
                <td>
                    <a href="<?= base_url('city/edit/') . $value->id ?>" class="btn btn-sm btn-warning">Edit</a>&nbsp;
                    <a href="<?= base_url('city/delete/') . $value->id ?>" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            <?php
            $i++;
        }
        ?>
    <tbody>
</table>