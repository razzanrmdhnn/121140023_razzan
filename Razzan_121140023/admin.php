<!-- Berfungsi sebagai koneksi file admin dengan index -->
<?php
include 'db.php';
if (!isset($_SESSION['admin'])) {
  header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styles.css">
    <title>
        Web || 
        <?php 
        if (!isset($_GET['page']))
        {
            echo "Dashboard";
        }elseif($_GET['page'] == 'home')
        {
            echo "Dashboard";
        }elseif($_GET['page'] == 'formulir')
        {
            echo "Formulir";
        }elseif($_GET['page'] == 'tabel')
        {
            echo "Tabel";
        }
        ?>
    </title>
</head>
<body>
<header>
        <div class="container header">
            <nav>
                <ul>
                    <li>
                        <a
                        href="?page=home"
                        class="
                        <?php 
                        if (!isset($_GET['page'])) 
                        { 
                            echo "nav_active"; 
                        }elseif($_GET['page'] == 'home')
                        {
                            echo "nav_active";
                        } 
                        ?>
                        "
                        >
                        Dashboard
                        </a>
                        <hr
                        class="nav 
                        <?php 
                        if (!isset($_GET['page'])) 
                        { 
                            echo "nav_active"; 
                        }elseif($_GET['page'] == 'home')
                        {
                            echo "nav_active";
                        }
                        ?>"
                        id="home"
                        >
                    </li>
                    <?php
                    if(isset($_SESSION['admin'])){
                    ?>
                    <li>
                    <a 
                    href="?page=formulir"
                    class="
                    <?php
                    if(isset($_GET['page'])){
                        if ($_GET['page'] == 'formulir')
                        { 
                            echo "active";
                        } 
                    }
                    ?>
                    "
                    >
                    Formulir
                    </a>
                    <hr
                    class="nav 
                    <?php 
                    if(isset($_GET['page'])){
                        if($_GET['page'] == 'formulir')
                        {
                            echo "nav_active";
                        }
                    }
                    ?>"
                    id="form"
                    >
                </li>
                <li>
                    <a
                    href="?page=tabel"
                    <?php 
                    if(isset($_GET['page'])){
                        if ($_GET['page'] == 'tabel') 
                        {
                            echo "class='active'";
                        }
                    }
                    ?>
                    >
                    Tabel
                    </a>
                    <hr
                    class="nav 
                    <?php 
                    if(isset($_GET['page'])){
                        if($_GET['page'] == 'tabel')
                        {
                            echo "nav_active";
                        }
                    }
                    ?>"
                    id="table"
                    >
                    </li>
                    <?php
                    }
                    
                    if (isset($_SESSION['admin'])) {
                    ?>
                    <li>
                        <a
                        href="logout.php"
                        >
                        Logout
                        </a>
                        <hr
                        class="nav"
                        id="login"
                        >
                    </li>
                    <?php
                    }else{
                    ?>
                    <li>
                        <a
                        href="login.php"
                        >
                        Login
                        </a>
                        <hr
                        class="nav"
                        id="login"
                        >
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </header>
    <section class="container">
        
        <?php
          $page = @$_GET['page'];
          if (file_exists($page.'.php')) {
            include $page.'.php';
          }else {
            include 'home.php';
          }
          ?>
    </section>
    <footer class="container">
        <div class="footer">
            <div class="copy_right">
            <p>&copy; RAZZAN RAMADHAN_UAS_121140023 </p>
            </div>
        </div>
    </footer>
    <script src="script/script.js"></script>
</body>
</html>