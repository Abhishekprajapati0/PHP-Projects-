<?php
include('connect.php');
include('head.php');
?>
<section class='container bg-white'>
    <h3 class='text-center mt-4 mt-4 text-danger'>Data</h3>
    <hr>
    <a href="index.php" class='btn btn-primary btn-sm float-end'>AddStudent</a>
    <div>
        <table class='table table-hover'>
            <thead>
                <tr>
                    
                    <th>Name</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM users";
                $data = mysqli_query($conn,$query);
                $result = mysqli_num_rows($data);
                if($result){
                    while($row = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><a href="edit.php?id=<?php echo $row['id']?>" class='btn btn-primary'>Edit</a></td>
                            <td>
                                <a href="delete.php?id=<?php echo $row['id']?>" class='btn btn-danger'>Delete</a></td>

                        </tr>
                        <?php
                    }
                    
                }else{
                    echo 'No data in data base';
                }
                
                ?>
            </tbody>
        </table>
    </div>
</section>

<?php include('foot.php');?>
