<?php
    session_start();
    require('../function.php');
    $connection = mysqli_connect ("remotemysql.com","bjBEokAclb","q8e75oGyd0");
    $db = mysqli_select_db ($connection,"bjBEokAclb");
    $t_name = "";
    $cat_class = "";
    $content = "";
    $query = "select * from tablets where t_name = '$_GET[tn]'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
        $t_name = $row['t_name'];
        $cat_class = $row['cat_class'];
        $content = $row['content'];
    }
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
    <style>
        form
            {
                background-color : #f4decb; 
                box-shadow: 3px 3px 10px rgba(148,97,142, 15.0);
            }
    </style>
  </head>
  <body class="sty">

    <nav class="navbar navbar-dark navbar-expand-sm navbar-color">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../Images/images.jfif" alt="tabletimage" class="rounded-circle border" height="50" width="50"> Pills & Napkins Management</a>
            <ul class="nav navbar-nav navbar navbar-right">
                <li class="nav-item"><a class="nav-link" href="../dashboard.php"><i class="fa fa-home fa-md"></i>Home</a></li> &nbsp
                <li class="nav-item "><a class="nav-link btn-pd" href="../logout.php"> <i class="fa fa-lock"></i> Logout</a></li> &nbsp
                
            </ul>
        </div>
    </nav>

    <div class="col-lg-12">
        <div class="row" >
            <div class="col-lg-3" id="side_bar">
                
                <p class="p-2">
                    <b><h7> Welcome to Update tablets : </h7></b>
                    <?php echo $_SESSION['user_name'] ?> <br>
                    <?php echo date("j F Y") ?>
                </p>
                <div id="accordion">
                    <div class="card bg-colr border-dark m-3 rounded-pill" style="background-color : #f8eee7; color : #49274a;">
                        <div class="bg-transparent" id="headingOne">
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
    
            <div class="col-lg-9" >
                <marquee behavior="" direction=""> <img src="../Images/SSA_logo.jpg" alt=""> </marquee>
                <div class="col-lg-10">
                    <form action="" method="post" class="p-3" onsubmit="return validatename() && validatecontent()">
                        <div class="form-group">
                            <label>Tablet name :</label>
                            <input type="text" name="t_name" id="t_name" class="form-control" value="<?php echo $t_name;?>" required> <br>
                        </div>
                        <div class="form-group">
                            <label>Tablet Content :</label>
                            <input type="text" name="content" id="content" class="form-control" value="<?php echo $content;?>" required> <br>
                        </div>
                        <div class="form-group">
                            <label> Catogary calss : </label> &nbsp
                            <input type="radio" name="cat_class" value="1-5" required>
                            <label for=""> 1-5 </label> &nbsp
                            <input type="radio" name="cat_class" value="5-7" required>
                            <label for=""> 5-7 </label>
                            <input type="radio" name="cat_class" value="1-7" required>
                            <label for=""> 1-7 </label><br>
                        </div>
                        <button class="btn btn-primary" name="update_tablet">Update</button>
                    </form>
    
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
    <script type="text/javascript">
        function validatename()
        {
            var tabletName = document.getElementById("t_name");
            var validRegex = /^[a-zA-Z ]+$/;
            if (tabletName.value.match(validRegex)) 
            {
                return true;
            }
            else 
            {
                alert("tablet Name must be only Alpabets");
                return false;
            }
           
        }
        function validatecontent()
        {
            var content = document.getElementById("content");
            var validRegex = /^[a-zA-Z ]+$/;
            if (content.value.match(validRegex)) 
            {
                return true;
            }
            else 
            {
                alert("content must be only Alpabets");
                return false;
            }

        }
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php
    session_start();
    if(isset($_POST['update_tablet'])){
        $connection = mysqli_connect("remotemysql.com","bjBEokAclb","q8e75oGyd0");
        $db = mysqli_select_db($connection,"bjBEokAclb");
        $query = "update tablets set t_name = '$_POST[t_name]', content = '$_POST[content]', cat_class = '$_POST[cat_class]' where t_name = '$_GET[tn]'";
        $query_run = mysqli_query($connection,$query);

    ?>
    <script type="text/javascript">
        alert("updated successfully...");
        window.location.href = "show_tablets.php";
    </script>
     
    <?php

    }
?>