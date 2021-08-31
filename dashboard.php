<?php
    require('function.php');
    session_start();
    if($_SESSION['user_id'] == session_id())
    {
?>

<!doctype html>
<html lang="en">
  <head>
    <title>PNM</title>
    <link rel="icon" href="Images/logoc.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/751afc7438.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="s.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web\css\all.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web\css\all.css">

  </head>
  <body class="sty">
      
    <nav class="navbar navbar-dark navbar-expand-sm navbar-color">
        <div class="container">
            <a class="navbar-brand" href="#"> <img src="Images/images.jfif" alt="tabletimage" class="rounded-circle border" height="50" width="50"> Pills & Napkins Management</a>
            <ul class="nav navbar-nav navbar navbar-right">
                <div class="row text-justify">
                    <li class="nav-item active"><a class="nav-link" href="dashboard.html"><i class="fa fa-home fa-md"></i>Home</a></li> &nbsp
                    <li class="nav-item"><a class="nav-link btn-pd" href="logout.php"> <i class="fa fa-lock fa-md"></i> Logout</a></li> &nbsp  
                </div>
            </ul>
        </div>
    </nav>

    <div class="col-lg-12">
        <div class="row">
            
            <!--side bar-->
            <div class="col-lg-3" id="side_bar">
                
                <p class="p-2" >
                    <b><h7> Welcome to Dashboard  : </h7></b>
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
                                <a type="button" class="rounded-pill btn btn-outline-success " href="student/add_std.php">Add Student</a> 
                                <a type="button" class="rounded-pill btn btn-outline-warning " href="student/show_std.php">Show Student</a>
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
                            <div class="card-body">
                                <a type="button" class="rounded-pill btn btn-outline-success btn-block" href="tablets/add_tablets.php">Add tablets</a>
                                <a type="button" class="rounded-pill btn btn-outline-warning btn-block" href="tablets/show_tablets.php">Show tablets</a>
                                <a type="button" class="rounded-pill btn btn-outline-info btn-block" href="tablets/issue_tablets.php">Issue Tablets</a>
                                <a type="button" class="rounded-pill btn btn-outline-warning btn-block" href="tablets/show_issue_tablets.php">Show Issued Tablets</a>
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
                                <a type="button" class="rounded-pill btn btn-outline-info btn-block" href="nap/issue_nap.php">Issue Napkins</a>
                                <a type="button" class="rounded-pill btn btn-outline-warning btn-block" href="nap/show_issue_nap.php">Show Issued Napkins</a>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
            
            <!--content-->
            <div class="col-lg-9">
                <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000" style = "box-shadow: 3px 3px 10px rgba(148,97,142, 15.0);">
                    <div class="carousel-inner" role="listbox" >
                        <div class="carousel-item active">
                            <img src="Images/govt1.jpg" alt="..." >
                        </div>
                        <div class="carousel-item ">
                            <img src=" Images/govt2.jpg" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="Images/govt3.jpg" alt="..." >
                        </div>
                    </div>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel" data-slide-to="1"></li>
                            <li data-target="#carousel" data-slide-to="2"></li>
                        </ol>
                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>

                <div class="col-lg-12">
                    <div class="row">

                        <!--student-->
                        <div class="col-md-1"></div>

                        <div class="col-md-5 pd border-bottom border-dark">
                            <div class="d-flex p-2 bd-highlight bg-flex"  > STUDENT </div>
                            <div class="d-flex flex-row bd-highlight mb-3">
                                <div class="p-2 bd-highlight " style = "background-color : #f4decb; color : #49274a; "> Total no of students : </div>
                                <?php 
                                    if(get_std_count() == 0)
                                    {
                                        ?>
                                            <div class="p-2">&nbsp 
                                                <span class="text-danger"><b>no data !!!</b></span>
                                            </div> 
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <div class="p-2 bg-info text-white">&nbsp 
                                            <?php
                                                echo get_std_count();
                                            ?>&nbsp 
                                        </div> 
                                        <?php
                                    }
                                ?> 
                                     
                                                             
                                <div class="ml-auto"><i class="fa fa-user-plus"></i></div>
                            </div>

                            <div class="row justify-content-center">
                                <a type="button" class="btn btn-outline-success" href="student/add_std.php">Add Student</a> &nbsp &nbsp
                                <a type="button" class="btn btn-outline-warning" href="student/show_std.php">Show Student</a>
                            </div>
                        </div>

                        <!--pills-->
                        <div class="col-md-1"></div>

                        <div class="col-md-5 pd border-bottom border-dark">
                            <div class="d-flex p-2 bd-highlight bg-flex"> PILLS </div>
                            <div class="d-flex flex-row bd-highlight mb-3 ">
                                <div class="p-2 bd-highlight " style = "background-color : #f4decb; color : #49274a; "> Total no of Pills Added :  </div>
                                    <?php 
                                        if( get_tablets_count() == 0)
                                        {
                                            ?>
                                                <div class="p-2">&nbsp 
                                                    <span class="text-danger"><b>no data !!!</b></span>
                                                </div> 
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <div class="p-2 bg-info text-white">&nbsp 
                                                <?php
                                                echo get_tablets_count();
                                                ?> &nbsp
                                            </div>
                                            <?php
                                        }
                                    ?>
                                        
                                <div class="ml-auto"><i class="fa fa-plus-circle f-left"></i></div> 
                            </div>
                            <div class="row justify-content-center">
                                <a type="button" class="btn btn-outline-success" href="tablets/add_tablets.php">Add Tablet</a>&nbsp &nbsp 
                                <a type="button" class="btn btn-outline-warning" href="tablets/show_tablets.php">Show Tablets</a>
                            </div>
                        </div>

                        <!--issue pills-->
                        <div class="col-md-1"></div>

                        <div class=" col-md-5 pd border-bottom border-dark">
                            <div class="d-flex p-2 bd-highlight bg-flex"> ISSUE PILLS </div>
                            <div class="d-flex flex-row bd-highlight mb-3">
                                <div class="p-2 bd-highlight " style = "background-color : #f4decb; color : #49274a; "> Total no of Pills Issued : </div>
                                <?php 
                                    if( get_t_issue_count() == 0)
                                    {
                                        ?>
                                            <div class="p-2">&nbsp 
                                                <span class="text-danger"><b>no data !!!</b></span>
                                            </div> 
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <div class="p-2 bg-info text-white">&nbsp 
                                            <?php
                                            echo get_t_issue_count();
                                            ?> &nbsp
                                        </div>
                                        <?php
                                    }
                                ?>
                                <div class="ml-auto"><i class="fa fa-plus-square f-left"></i></div>
                            </div>
                            <div class="row justify-content-center">
                                <a type="button" class="btn btn-outline-primary" href="tablets/issue_tablets.php">Issue Tablets</a>&nbsp &nbsp     
                                <a type="button" class="btn btn-outline-warning" href="tablets/show_issue_tablets.php">Show Issued Tablets</a>
                            </div>
                        </div>

                        <!--issue nap-->
                        <div class="col-md-1"></div>

                        <div class=" col-md-5 pd border-bottom border-dark">
                            <div class="d-flex p-2 bd-highlight bg-flex" >  ISSUE NAPKINS </div>
                            <div class="d-flex flex-row bd-highlight mb-3">
                                <div class="p-2 bd-highlight " style = "background-color : #f4decb; color : #49274a; "> Total no of Napkins Issued : </div>
                                <?php 
                                    if( get_n_issue_count() == 0)
                                    {
                                        ?>
                                            <div class="p-2">&nbsp 
                                                <span class="text-danger"><b>no data !!!</b></span>
                                            </div> 
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <div class="p-2 bg-info text-white">&nbsp 
                                            <?php
                                            echo get_n_issue_count();
                                            ?> &nbsp
                                        </div>
                                        <?php
                                    }
                                ?>
                                <div class="ml-auto"><i class="fa fa-medkit f-left"></i></div>
                            </div>
                            <div class="row justify-content-center">   
                                <a type="button" class="btn btn-outline-primary" href="nap/issue_nap.php">Issue napkins</a>&nbsp &nbsp     
                                <a type="button" class="btn btn-outline-warning" href="nap/show_issue_nap.php">Show Issued Napkins</a>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
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
        <?php 
            }
            else
                {
                    header("location:index.php");
                } 
        ?>

    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>