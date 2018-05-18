<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form method="post" action="<?php echo base_url('index.php/mahasiswa/save')?>">
            <label for="defaultFormRegisterNameEx" class="grey-text">NIM</label>
            <input type="text" id="defaultFormRegisterNameEx" name="nim" required class="form-control">
            
            <br>
            <br>           

            <label for="defaultFormRegisterNameEx" class="grey-text">Nama</label>
            <input type="text" id="defaultFormRegisterNameEx" name="name" required class="form-control">
            
            <br>
            <br>           

            <label for="defaultFormRegisterNameEx" class="grey-text">Alamat</label>
            <input type="text" id="defaultFormRegisterNameEx" name="address" required class="form-control">
            
            <br>
            <br>           

            <label for="defaultFormRegisterNameEx" class="grey-text">No. Handphone</label>
            <input type="text" id="defaultFormRegisterNameEx" name="phone" required class="form-control">
            
            <br>
            <br>            

            <label for="defaultFormRegisterNameEx" class="grey-text">Tanggal Lahir</label>
            <input type="date" id="defaultFormRegisterNameEx" name="birthday" required class="form-control">
            
            <br>
            <br>
            <label for="defaultFormRegisterNameEx" class="grey-text">Fakultas</label>
            <select name="fakultas_id" class="form-control">
                <option value=""></option>
                <?php 
                    foreach ($fakultas as $key => $val) {
                        echo "<option value='$val->id'>$val->name</option>";
                    }
                ?>
            </select>   
            <br>
            <br>
            <label for="defaultFormRegisterNameEx" class="grey-text">Jurusan</label>
            <select name="jurusan_id" class="form-control">
                <option value=""></option>
                <?php 
                    foreach ($jurusan as $key => $val) {
                        echo "<option value='$val->id'>$val->name</option>";
                    }
                ?>
            </select>

            <div class="text-center mt-4">
                <br>
                <br>
                <a href="<?php echo base_url("index.php/mahasiswa")?>" class="btn btn-danger">Kembali</a>

                <button class="btn btn-info" type="submit">Simpan</button>
            </div>
        </form>
    </div>

</div>
