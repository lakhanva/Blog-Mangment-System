<?php
$blogID = $_GET['id'];
$sql = "SELECT * FROM blog_entry WHERE id = '".$blogID."'";
$query = mysqli_query($con,$sql);
$blogData = mysqli_fetch_assoc($query);
?>


    <form action="post/post.php" method="post">
    <div class="container">
    <label for="title">Blog Title:</label><br>
    <input type="text" id="title" name="title" class="form-control" value='<?=$blogData['title']?>'><br>
    <label for="blogdescription">Blog Description:</label><br>
    <input type="text" id="description" name="description" class="form-control" value='<?=$blogData['description']?>'><br>
    <label for="">Blog Content:</label>
    <textarea name="content" id="content" cols="30" rows="10" class="form-control"><?=$blogData['content']?></textarea>
    <center><button type="submit" class="btn btn-outline-success my-4" name='edit' value='<?=$blogData['id']?>'>submit</button></center>
    </div>
    </form>
    
    <script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
  });
</script>



