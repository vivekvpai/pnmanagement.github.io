<?php 
    require('../function.php');
    session_start();
    $connection = mysqli_connect("remotemysql.com","bjBEokAclb","q8e75oGyd0");
    $db = mysqli_select_db($connection,"bjBEokAclb");
    $s_id = "";
    $s_name = "";
    $class = "";
    $t_dm = "";
    $t_name = "";
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
    <link rel="stylesheet" href="ts.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="sty">
      
    <nav class="navbar navbar-dark navbar-expand-sm navbar-color">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../Images/images.jfif" alt="tabletimage" class="rounded-circle border" height="50" width="50"> Pills & Napkins Management</a>
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
                    <b><h7> Welcome to Show Issued Tablets : </h7></b>
                    <?php echo $_SESSION['user_name'] ?> <br>
                    <?php echo date("j F Y") ?>
                </p>
                <div id="accordion">
                    <div class="card bg-colr border-dark m-3 rounded-pill" style="background-color : #f8eee7; color : #49274a;">
                        <div class=" bg-transparent" id="headingOne">
                            <h5 class="mb-0">
                                <a class="btn btn-block" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Students
                                </a>
                            </h5>
                        </div>
    
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body row justify-content-center">
                                <a type="button" class="rounded-pill btn btn-outline-success" href="../student/add_std.php">Add Student</a>
                                <a type="button" class="rounded-pill btn btn-outline-warning " href="../student/show_std.php">Show Student</a>
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
                                <a type="button" class="rounded-pill btn btn-outline-success btn-block" href="add_tablets.php">Add tablets</a>
                                <a type="button" class="rounded-pill btn btn-outline-warning btn-block" href="show_tablets.php">Show tablets</a>
                                <a type="button" class="rounded-pill btn btn-outline-info btn-block" href="issue_tablets.php">Issue Tablets</a>
                                <a type="button" class="rounded-pill btn btn-outline-warning btn-block" href="show_issue_tablets.php">Show Issued Tablets</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="card border-dark m-3 rounded-pill" style="background-color : #f8eee7; color : #49274a;">
                        <div class=" bg-transparent" id="headingThree">
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
    
            <div class="col-lg-9 ">
                <marquee behavior="" direction=""> <img src="../Images/SSA_logo.jpg" alt=""> </marquee> <br>

                <div class="col-lg-11">
                    <form class="p-2" action="" method="post" >
                        <div class="input-group mb-3 row">
                            <br>
                            <div class="input-group-prepend">
                                <label class="input-group-text">Select class</label>
                            </div>
                            <select class="form-control" name="class">
                            <option value="all">ALL</option>
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
                        <div class="p-2 bg-info">Total no of students received Tablets :</div>
                        <?php 
                            if(get_t_issue_count() == 0)
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
                                echo get_t_issue_count();
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
                                    <th>Tablet Name</th>
                                    <th>Issued Date</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
            
                            <!--html show student-->
                            <?php
                    if(isset($_POST['show_std']))
                    {
                       if($_POST['class'] == $all)
                        {
                            $query = "select t_issue.s_id, t_issue.t_name, t_issue.t_dm, student.s_name, student.class from t_issue left join student on t_issue.s_id = student.s_id order by class";
                            $query_run = mysqli_query($connection,$query);
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                                $s_name = $row['s_name'];
                                $s_id = $row['s_id'];
                                $class = $row['class'];
                                $t_dm = $row['t_dm'];
                                $t_name = $row['t_name'];
                                
                                ?>

                                <tr>
                                    <th scope="row" class="bg-warning"><?php echo $class ?></th>
                                    <td><?php echo $s_id ?></td>
                                    <td><?php echo $s_name ?></td>
                                    <td><?php echo $t_name ?></td>
                                    <td><?php echo $t_dm ?></td>

                                    <td>
                                        <a type="button" class="btn btn-success" href="update_issue_tablets.php?id=<?php echo $row['s_id'];?>"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a> &nbsp &nbsp
                                        <a type="button" class="btn btn-danger" href="delete_issue_tablets.php?id=<?php echo $row['s_id'];?>"> <i class="fa fa-trash" aria-hidden="true"></i> </a>
                                    </td>
                                </tr>

                                <?php
                            }
                        }
                        else
                        {
                            $query = "select t_issue.s_id, t_issue.t_name, t_issue.t_dm, student.s_name, student.class from t_issue left join student on t_issue.s_id = student.s_id where student.class = $_POST[class] order by s_id";
                            $query_run = mysqli_query($connection,$query);
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                                $s_name = $row['s_name'];
                                $s_id = $row['s_id'];
                                $class = $row['class'];
                                $t_dm = $row['t_dm'];
                                $t_name = $row['t_name'];
                                
                                ?>
    
                                <tr>
                                    <th scope="row" class="bg-warning"><?php echo $class ?></th>
                                    <td><?php echo $s_id ?></td>
                                    <td><?php echo $s_name ?></td>
                                    <td><?php echo $t_name ?></td>
                                    <td><?php echo $t_dm ?></td>
    
                                    <td>
                                        <a type="button" class="btn btn-success" href="update_issue_tablets.php?id=<?php echo $row['s_id'];?>" target="_blank">Update</a>
                                        <a type="button" class="btn btn-danger" href="delete_issue_tablets.php?id=<?php echo $row['s_id'];?>">Delete</a>
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