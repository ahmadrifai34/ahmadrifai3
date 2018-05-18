<a href="<?php echo base_url('index.php/jurusan/add')?>" class="btn btn-primary">Tambah Jurusan</a>
<br>
<br>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Jurusan</th>
			 <th>Fakultas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
            foreach ($jurusan as $key => $val) {
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $val->name ?></td>
			<td><?php echo $val->fakultas_id ?></td>
            <td>
                <a href="<?php echo base_url('index.php/jurusan/edit/'. $val->id)?>" class="btn btn-info">Edit</a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo base_url('index.php/jurusan/delete/'. $val->id)?>" class="btn btn-danger">Hapus</a>

            </td>
        </tr>
        <?php
                $no++;
            }
        ?>

    </tbody>
</table>
