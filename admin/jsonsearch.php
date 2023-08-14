<?php 
// header()
// content type
// cros 
// allow headers_list
                include 'config.php';
                $limit  = 3;
                $page = $_GET['page'];
                $offset = ($page - 1)* $limit;
                $sql = sprintf("SELECT * FROM user ORDER BY user_id DESC LIMIT %d,%d",$offset,$limit );
                $result = mysqli_query($conn,$sql) or die("Query Failed.");

                $row = mysqli_fetch_assoc($result);
                // print_r($row);
                echo json_encode($row);
?>