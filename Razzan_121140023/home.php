<!-- Berisi kode yang mengatur tampilan content beranda -->
<?php
if(isset($_SESSION['admin'])){
?>
<div class="container-awal">
    <div class="conten awal">
        <div class="desc">
            <h2>Halaman Dashboard Hotel Aston Lampung</h2>
        </div>
        <div class="my_img">
            <img src="img/aston.jpeg" alt="foto saya" >
        </div>
    </div>
</div>
<?php
}else{
?>
<div class=container-home>
    <aside class="home" id="tentang">
            <article class="profile-card">
                <h1 class="konten2">Design With Our Love</h1>
                <h1 class="konten2">💚</h1>
                </a>
                <h2>Razzan Ramadhan</h2>
                <p>Build your dream together with your favorite programming language</p>
            </article>
        </aside>
        </div>
<?php
}
?>