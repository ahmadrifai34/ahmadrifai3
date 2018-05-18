<a href="<?php echo base_url('index.php/fakultas/add')?>" class="btn btn-primary">Tambah Fakultas</a>
<br>
<br>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Fakultas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
            foreach ($fakultas as $key => $val) {
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $val->name ?></td>
            <td>
                <a href="<?php echo base_url('index.php/fakultas/edit/'. $val->id)?>" class="btn btn-info">Edit</a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo base_url('index.php/fakultas/delete/'. $val->id)?>" class="btn btn-danger">Hapus</a>

            </td>
        </tr>
        <?php
                $no++;
            }
        ?>

    </tbody>
</table>
