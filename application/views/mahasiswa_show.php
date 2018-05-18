<a href="<?php echo base_url('index.php/mahasiswa/add')?>" class="btn btn-primary">Tambah Mahasiswa</a>
<br>
<br>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No. Hp</th>
            <th>Jurusan</th>
            <th>Fakultas</th>
            <th>Birthday</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
            foreach ($mahasiswa as $key => $val) {
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $val->nim ?></td>
            <td><?php echo $val->name ?></td>
            <td><?php echo $val->address ?></td>
            <td><?php echo $val->phone ?></td>
            <td><?php echo $val->jurusan ?></td>
            <td><?php echo $val->fakultas ?></td>
            <td><?php echo $val->birthday ?></td>
            <td>
                <a href="<?php echo base_url('index.php/mahasiswa/edit/'. $val->id)?>" class="btn btn-info">Edit</a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo base_url('index.php/mahasiswa/delete/'. $val->id)?>" class="btn btn-danger">Hapus</a>

            </td>
        </tr>
        <?php
                $no++;
            }
        ?>

    </tbody>
</table>
