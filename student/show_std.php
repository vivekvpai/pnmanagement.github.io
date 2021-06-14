<?php 
    require('../function.php');
    session_start();
    $connection = mysqli_connect("remotemysql.com","bjBEokAclb","q8e75oGyd0");
    $db = mysqli_select_db($connection,"bjBEokAclb");
    $s_id = "";
    $s_name = "";
    $class = "";
    $gender = "";
    $all = "all";

?>

<!doctype html>
<html lang="en">
  <head>
    <title>PNM</title>
    <link rel="icon" href="../Images/logoc.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <script src="https://kit.fontawesome.com/751afc7438.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="ss.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="sty">
      
    <nav class="navbar navbar-dark navbar-expand-sm navbar-color">
        <div class="container">
            <a class="navbar-brand" href="#"> <img src="../Images/images.jfif" alt="tabletimage" class="rounded-circle border" height="50" width="50"> Pills & Napkins Management </a>
            <ul class="nav navbar-nav navbar navbar-right">
                <li class="nav-item"><a class="nav-link" href="../dashboard.php"><i class="fa fa-home fa-md"></i> Home</a></li> &nbsp
                <li class="nav-item "><a class="nav-link btn-pd" href="../logout.php"> <i class="fa fa-lock"></i> Logout</a></li> &nbsp  
            </ul>
        </div>
    </nav>

    <div class="col-lg-12">
        <div class="row">
        
            <div class="col-lg-3" id="side_bar">
                
                <p class="p-2">
                    <b><h7> Welcome to Show Students : </h7></b>
                    <?php echo $_SESSION['user_name'] ?> <br>
                    <?php echo date("j F Y") ?>
                </p>
                <div id="accordion">
                    <div class="card border-dark m-3 rounded-pill" style="background-color : #f8eee7; color : #49274a;">
                        <div class="bg-transparent" id="headingOne">
                            <h5 class="mb-0">
                                <a class="btn btn-block" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Students
                                </a>
                            </h5>
                        </div>
    
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body row justify-content-center">
                                <a type="button" class="rounded-pill btn btn-outline-success" href="add_std.php">Add Student</a>
                                <a type="button" class="rounded-pill btn btn-outline-warning " href="show_std.php">Show Student</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card border-dark m-3" style="background-color : #f8eee7; color : #49274a;">
                        <div class=" bg-transparent" id="headingTwo">
                            <h5 class="mb-0">
                            <a class="btn btn-block collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Tablets
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body row justify-content-center">
                                <a type="button" class="rounded-pill btn btn-outline-success btn-block" href="../tablets/add_tablets.php">Add tablets</a>
                                <a type="button" class="rounded-pill btn btn-outline-warning btn-block" href="../tablets/show_tablets.php">Show tablets</a>
                                <a type="button" class="rounded-pill btn btn-outline-info btn-block" href="../tablets/issue_tablets.php">Issue Tablets</a>
                                <a type="button" class="rounded-pill btn btn-outline-warning btn-block" href="../tablets/show_issue_tablets.php">Show Issued Tablets</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="card border-dark m-3 rounded-pill" style="background-color : #f8eee7; color : #49274a;">
                        <div class="bg-transparent" id="headingThree">
                            <h5 class="mb-0">
                                <a class="btn btn-block collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Napkins
                                </a>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <a type="button" class="rounded-pill btn btn-outline-info btn-block" href="../nap/issue_nap.php">Issue Napkins</a>
                                <a type="button" class="rounded-pill btn btn-outline-warning btn-block" href="../nap/show_issue_nap.php">Show Issued Napkins</a>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
            
    
            <div class="col-lg-9">
                <marquee behavior="" direction=""><img src="../Images/SSA_logo.jpg" alt=""> </marquee> <br>
                
                <div class="col-lg-12">
                    <form class="" action="" method="post" style="background-color: white;">
                        <div class="input-group row">
                            <br>
                            <div class="input-group-prepend">
                                <label class="input-group-text">Select class</label>
                            </div>
                            <select class="form-control" name="class">
                                <option value="all">All</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                            </select>
                            &nbsp &nbsp
                            <button class="btn btn-outline-dark" name="show_std">Show Student</button>
                        </div>
                        
                    </form>
        
                    <div class="d-flex p-2 bg-light text-white">
                        <div class="p-2 bg-info">Total no of Students :</div>
                        <?php 
                            if(get_std_count() == 0)
                            {
                                ?>
                                    <div class="p-2">&nbsp 
                                        <span class="text-danger"><b>no student avilabel !!!</b></span>
                                    </div> 
                                <?php
                            }
                            else
                            {
                                ?>
                                <div class="p-2 bg-warning">&nbsp 
                                <?php
                                echo get_std_count();
                                ?>&nbsp</div><?php
                            }
                        ?> 
                        
                    </div>
        
                    <br>
                    <div class="scrol">
                        <table class="table table-hover table-bordered pd" >
                            <thead class="table-info">
                                <tr>
                                    <th> Class</th>
                                    <th>Student ID</th>
                                    <th>Student Name</th>
                                    <th> Gender</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
        
                            <!--php show student-->
                            <?php
                                if(isset($_POST['show_std']))
                                {
                                    if($_POST['class'] == $all)
                                        {
                                            $query = "select * from student ORDER BY s_id";
                                            $query_run = mysqli_query($connection,$query);
                                            while($row = mysqli_fetch_assoc($query_run))
                                            {
                                            $s_id = $row['s_id'];
                                            $s_name = $row['s_name'];
                                            $class = $row['class'];
                                            $gender = $row['gender'];
                                            
                                            ?>

                                            <tr>
                                                <th scope="row" class="bg-warning"><?php echo $class ?></th>
                                                <td><?php echo $s_id ?></td>
                                                <td><?php echo $s_name ?></td>
                                                <td><?php echo $gender ?></td>
                                                <td>
                                                    <a type="button" class="btn btn-success" href="update_std.php?id=<?php echo $row['s_id'];?>"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a> &nbsp &nbsp
                                                    <a type="button" class="btn btn-danger" href="delete_std.php?id=<?php echo $row['s_id'];?>"> <i class="fa fa-trash" aria-hidden="true"></i> </a>
                                                </td>
                                            </tr>

                                            <?php
                                            }
                                        }
                                    else
                                    {
                                        $query = "select * from student where class = '$_POST[class]' order by class";
                                        $query_run = mysqli_query($connection,$query);
                                        while($row = mysqli_fetch_assoc($query_run))
                                        {
                                        $s_id = $row['s_id'];
                                        $s_name = $row['s_name'];
                                        $class = $row['class'];
                                        $gender = $row['gender'];
                                        ?>

                                            <tr>
                                                <th scope="row" class="bg-warning"><?php echo $class ?></th>
                                                <td><?php echo $s_id ?></td>
                                                <td><?php echo $s_name ?></td>
                                                <td><?php echo $gender ?></td>
                                                <td>
                                                    <a type="button" class="btn btn-success" href="update_std.php?id=<?php echo $row['s_id'];?>">Update</a> 
                                                    <a type="button" class="btn btn-danger" href="delete_std.php?id=<?php echo $row['s_id'];?>">Delete</a>
                                                </td>
                                            </tr>

                                            <?php
                                        }
                                    }
                                    
                                }
                            ?>                            
                            
        
                        </table>
                    </div>
                </div>
    
            </div>
        </div>
    
    </div>

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">             

            <div class="offset-1 col-lg-2 align-self-center">
                    <div class="text-center">
                        <p>
                           Assinment 1 <br>
                            Dept of ISE.
                        </p>
                    </div>
                </div>

                <div class="offset-1 col-lg-3">
                    <h6>Page creator</h6>
                    <h7>About Me</h7>
					Web Developer<br>
					Vivek V Pai<br>
					6 sem, ISE<br>
					Don Bosco Institute of Technology<br>
                </div>
                <div class="col-lg-3 col-sm-5 offset-1">
                    <h5>For creation mail to :</h5>
                    <i class="fa fa-envelope fa-lg"></i>paivivek002@gmail.com <br> <br>
                       <a href="https://www.linkedin.com/in/vivek-v-pai-6b674b1b8/" target="_blank" class="fa fa-linkedin"></a>   
                    <a href="#" target="_blank" class="fa fa-github"></a>
                </div>
                
            </div>
        </div>

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright
        </div>
        <!-- Copyright -->

    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>