<!-- Berisi dari data yang ditampilkan ketika user berhasil tambah data -->
<h1 class="sub_judul">Daftar Pemesanan Kamar</h1>
<button class=""><a class="tambah" href="?page=formulir" style="color: #000; text-decoration: none;"><p>Tambah Pemesanan Kamar</p></a></button>

        <div class="form hotel">
            <table class="daftar_hotel" style="overflow-x:scroll" id="tabel">
                <tr>
                    <th>Nama</th>
                    <th>Tanggal Pemesanan Kamar</th>
                    <th>Jumlah Kamar</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $daftar_tanggapan = mysqli_query($db,"SELECT * FROM hotel ORDER BY id ASC");
                while ($data = mysqli_fetch_array($daftar_tanggapan)) {         
                ?>
                <tr>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['tgl']; ?></td>
                    <td><?php echo $data['jumlah']; ?></td>
                    <td width="22%">
                        <a class="btn" href="?page=edit&&id=<?php echo $data['id']?>">Update</a>
                        <a class="btn_tbh" href="?page=read&&id=<?php echo $data['id']?>">Read</a>
                        <a class="btn_del" href="?page=delete&&id=<?php echo $data['id']?>">Delete</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>