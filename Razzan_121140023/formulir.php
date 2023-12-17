<?php
if (isset($_POST['submit'])) {
    $nama= $_POST['nama'];
    $tgl= $_POST['tgl'];
    $jumlah= $_POST['jumlah'];
    if($nama == "" || $tgl == "" || $jumlah == "") {
        echo"<script>alert('Harap lengkapi semua kolom yang ada silahkan isi ulang inputan');</script>";
    }else{
        mysqli_query($db," INSERT INTO hotel (nama, tgl, jumlah) VALUES ('$nama', '$tgl', '$jumlah')");
        echo"<script>alert('tambah data berhasil'); document.location = '?page=tabel';</script>";
    }
}
?>
<!-- Isi dari file formulir ini merupakan fitur tambah data yang mana field atau kolom yang diinputkan user sudah terhubung dengan kolom yang ada di database -->

<div class="form">
            <h1>Formulir Pemesanan Kamar</h1>
            <form method="post" enctype="multipart/form-data">
                <table class="pendaftaran">
                    <tr>
                        <td class="label">
                            <label for="nama">Nama</label>
                        </td>
                        <td class="in">
                            <input type="text" name="nama" id="nama"  placeholder="Masukkan nama" class="input"  value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : ''; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="tgl">Tanggal Pemesanan</label>
                        </td>
                        <td>
                            <input type="date" name="tgl" id="tgl"  placeholder="Masukkan Tanggal Pemesanan" class="input"  value="<?php echo isset($_POST['tgl']) ? $_POST['tgl'] : ''; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="jumlah">Jumlah Kamar</label>
                        </td>
                        <td>
                            <input type="number" name="jumlah" id="jumlah"  placeholder="Masukkan Jumlah Kamar" class="input"  value="<?php echo isset($_POST['jumlah']) ? $_POST['jumlah'] : ''; ?>">
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <div class="submit">
                                <input class="btn" type="submit" value="kirim" name="submit">
                            </div>
                        </th>
                    </tr>
                </table>
            </form>
        </div>