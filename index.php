
<!doctype html>
<html lang="en">
  <head>
    <title>PNM </title>
    <link rel="icon" href="Images/logoc.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="s.css">
    <script src="https://kit.fontawesome.com/751afc7438.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.css">
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.min.css"> 


  </head>
    <body class="sty">
        <header class="jumbotron">
            <div class="container text-center">
                <h5>Assinment 1</h5>
                <marquee style = "color: black;"> <h5>! ! ! ! ! ! ! ! Welcome to Pills And Napkins Management ! ! ! ! ! ! ! </h5> </marquee>
            </div>
        </header>
        <div class="col-lg-12">
            <div class="row">

                <div class="col-lg-3 p-3" id="side_bar" style = "color: whitesmoke;">
                    <h5>Helps for</h5>
                    <ul>
                        <li>Pills management</li>
                        <li>Napkins management</li>
                        <li>View Issued to</li>
                        <li>View Students</li>
                    </ul>
                </div>
                
                <div class="col-lg-9 pd parallax">
                    <div class="row">
                        <div class="col-lg-5"></div>
                        <div class="col-lg-5 cd-pd pd" >
                            <form action="" method="post" onsubmit="return validate()">
                                <div class="text-center card-header">                        
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                </div>
                                <div class="form-group text-center pd">
                                    <label>User Id </label>
                                    <input type="text" name="user_id" id="user_id" class="form-control rounded-pill" placeholder="someemail@mail.com" >
                                </div>
                                <div class="form-group text-center">
                                    <label for="userid">User Name </label>
                                    <input type="text" name="user_name" class="form-control rounded-pill" placeholder="User Name" >
                                </div>
                                <div class="form-group text-center">
                                    <label for="password"> Password </label>
                                    <input type="password" name="password" id="password"  class="form-control rounded-pill" placeholder="Password" >
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="login" class="btn btn-primary" > <i class="fa fa-unlock"></i> Login</button>
                                </div>
                            </form>
                            <!-- code for login -->
                            <?php
                                session_start();
                                if(isset($_POST['login']))
                                {
                                    $connection = mysqli_connect("remotemysql.com","bjBEokAclb","q8e75oGyd0");
                                    $db = mysqli_select_db($connection,"bjBEokAclb");
                                    $query = "select * from users where user_id = '$_POST[user_id]'";
                                    $query_run = mysqli_query($connection,$query);
                                    while($row = mysqli_fetch_assoc($query_run))
                                    {
                                        if($row['user_id'] == $_POST['user_id'])
                                        {
                                            if ($row['password'] == $_POST['password'] && $row['user_name'] == $_POST['user_name']) 
                                            {
                                                $_SESSION['user_name'] = $row['user_name'];
                                                $_SESSION['user_id'] = $row['user_id'];
                                                $_SESSION['user_id'] = session_id();
                                                header("Location:dashboard.php");
                                                exit();
                                            }
                                        
                                            else
                                            {
                                            ?>
                                                <div class="alert alert-danger" role="alert">
                                                    Wrong Entry—check it out!
                                                </div>
                                            <?php
                                            }
                                        }
                                        
                                    }
                                }
                            ?>

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
                        &nbsp &nbsp &nbsp &nbsp<a href="" class="fa fa-linkedin"></a> &nbsp &nbsp 
                    </div>
                    
                </div>
            </div>

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright
            </div>
            <!-- Copyright -->

        </footer>

        <script type="text/javascript">
            function validate()
            {
                var userid = document.getElementById("user_id");
                var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                var pwd = document.getElementById("password");

                if (userid.value.match(validRegex)) 
                {
                    return true;
                }
                else 
                {
                    alert("Invalid email address!");
                    return false;
                }

                if(pwd.value.length < 5) 
                {
                    alert("Password length is to small");
                    return false;
                }
            }
        </script>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>



   