<div id="top" class="row mb-3">
    <div class="col">
        <h3>Tambah Data Bagian</h3>
    </div>
    <div class="col">
        <a href="?page=bagian" class="btn btn-primary float-end">
            <i class="fa fa-arrow-circle-left"></i> 
            Kembali
        </a>
    </div>
</div>
<div id="pesan" class="row mb-3">
    <div class="col">
        <?php
        include "database/connection.php";

        if(isset($_POST["simpan_button"])){
            $nama = $_POST["nama"];

            $sudahAda = false;
            $checkSQL = "SELECT * FROM bagian WHERE nama = '$nama'";
            $resultCheck = mysqli_query($connection, $checkSQL);
            if(mysqli_num_rows($resultCheck) > 0){
                $sudahAda = true;
            }
            if ($sudahAda) {
            ?>
                <div class="alert alert-danger" role="alert">
                    <i class="fa fa-exclamation-circle"></i> Nama bagian sama sudah ada
                </div>
            <?php
            } else {
                $insertSQL = "INSERT INTO bagian SET nama='$nama'";
                $result = mysqli_query($connection, $insertSQL);
                if (!$result) {
            ?>
                    <div class="alert alert-danger" role="alert">
                        <i class="fa fa-exclamation-circle"></i>
                        <?php echo mysqli_error($connection) ?> 
                    </div>   
            <?php
            } else {
            ?>
                <div class="alert alert-success" role="alert">
                    <i class="fa fa-check-circle"></i> Data berhasil disimpan
                </div>
            <?php
                }
            }
        }
        ?>
    </div>
</div>
<div id="inputan" class="row mb-3">
    <div class="col">
        <div class="card px-3 py-3">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Bagian</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="misal : HRD" required>
                </div>
                <div class="col mb-3">
                    <button class="btn btn-success" type="submit" name="simpan_button">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    if (window.history.replacestate) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>