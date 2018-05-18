<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form method="post" action="<?php echo base_url('index.php/fakultas/save')?>">
            <label for="defaultFormRegisterNameEx" class="grey-text">Fakultas</label>
            <input type="text" id="defaultFormRegisterNameEx" name="name" required class="form-control">

            <div class="text-center mt-4">
                <br>
                <br>
                <a href="<?php echo base_url("index.php/fakultas")?>" class="btn btn-danger">Kembali</a>

                <button class="btn btn-info" type="submit">Simpan</button>
            </div>
        </form>
    </div>

</div>
