<div class="container">
    <div class="row">
        <div class=" col-md-10 col-sm-12"></div>
        <div class="col-md-2 col-sm-12">
            <a href="admin.php?action=create" class=" btn btn-outline-primary" style="width:100%;">ADD BLOG</a>
        </div>
        </div>
    <form action="post/post.php" method="post">
    <div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>blog title</th>
                <th>blog description</th>
                <th>blog content</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           <?php
           $count = 1;
           $sql = "SELECT * FROM blog_entry";
           $query = mysqli_query($con,$sql);
           while($row = mysqli_fetch_assoc($query)){
            ?>
            <tr>
                <td><?php echo $count ; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['content']; ?></td>
                <td><a class=" btn btn-sm btn-outline-info" href="admin.php?id=<?php echo $row['id'];?>&action=edit"  >Edit</a>
            <button type="submit" name="delete" class="btn btn-sm btn-outline-danger" value="<?php echo $row["id"];?>">Delete</button>

        </td>
                
            </tr>
            <?php
            $count++;
           } 
           ?>
        </tbody>
    </table>
    </div>
    </form>
    </div>