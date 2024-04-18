<?php
include("../config/db.php");

if(isset($_POST['submitCreate'])){
    $title = $_POST['title'];
    $description = $_POST["description"];
    $content = $_POST['content'];
    $sql = "INSERT INTO blog_entry( `title`, `description`, `content`) VALUES ('". addslashes($title)."','".addslashes($description)."','".addslashes($content)."')";
    $query = mysqli_query($con,$sql);
    if($query){
        header("Location: ../admin.php?action=list");
    }else{
        header("Location: ../admin.php?action=create");
    }

}



if(isset($_POST['edit'])){
    $blogID = $_POST['edit'];
    $title = $_POST['title'];
    $description = $_POST["description"];
    $content = $_POST['content'];
   
    $sql = "UPDATE blog_entry SET title='".addslashes($title)."',description='".addslashes($description)."',content='".addslashes($content)."' WHERE id='".$blogID."'";
    $query=mysqli_query($con,$sql);
    if($query){
        header("Location: ../admin.php?action=list");
    }else{
        header("Location: ../admin.php?action=edit&id=$blogID");
    }


}


if(isset($_POST['delete'])){
    $blogID = $_POST['delete'];
    
    $sql = "DELETE FROM blog_entry WHERE id='".$blogID."'";
    $query=mysqli_query($con,$sql);
    if($query){
        header("Location: ../admin.php?action=list");
    }else{
        header("Location: ../admin.php?action=list");
    }
}

if(isset($_POST['loginBtn'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];
    if(trim($username)!=""){
        $sql = "SELECT * FROM tbl_user WHERE username='".addslashes($username)."' AND password='".addslashes($pass)."'";
        $query = mysqli_query($con, $sql);
        if(mysqli_num_rows($query)>0){
            $userData = mysqli_fetch_assoc($query);
            $_SESSION['login_id'] = $userData['id'];
            header("Location: ../admin.php?msg=Login Success");
        }else{
            header("Location: ../index.php?msg=Login Failed");
        }
    }else{
        header("Location: ../index.php?msg=Login Failed");
    }
}

