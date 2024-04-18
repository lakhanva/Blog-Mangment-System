<?php
include("config/db.php");
if (isset($_SESSION['login_id']) && $_SESSION['login_id'] != "") {
    if(isset($_GET['action']) && $_GET['action']!=""){
        $action = $_GET['action'];
    }else{
        $action = "dashboard";
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php include("production/head.php"); ?>
    </head>

    <body>
        <?php include("production/navbar.php") ?>
        <div style="box-shadow: 5px 5px 8px gray;border-radius:5px;" class="container my-4">
        <?php
        include("production/".$action.".php");
        ?>
        </div>
    </body>

    </html>
<?php
} else {
    header("Location: index.php");
}
?>