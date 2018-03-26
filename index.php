<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>OBTBook - Php App</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700|Montserrat:900,700i,700" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
                <?php require_once("nav.php"); ?>
        </div>
        <!-- /Sidebar -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid main">
                <div class="row">
                    <div class="col-lg px-5">
                        <div class="row mt-5">
                            <div class="col px-0">
                                <a href="#menu-toggle" class="btn" id="menu-toggle">← Nav</a>
                                <h1>Welcome to OBTHub !</h1>
                                <p>Here are your news stories for the day.</p>
                            </div>
                        </div>
                        <div class="row my-5 posts">
                            <div class="col">
                                <h2>RECENT POSTS</h2>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        
                                          $connection = mysqli_connect('localhost', 'root', 'root', 'obthub');        
                                            $selectAll = "SELECT * FROM users;";
                                        $r = mysqli_query($connection, $selectAll);
                                        foreach($r as $k => $v){
                                            echo '<tr>
                                                    <th>'.$v['topic'].'</th>
                                                    <th>'.$v['fullName'].'</th>
                                                 </tr>';
                                        };
                                        
                                        ?>
                                    </tbody>
                                </table>
                                <hr>
                                <form action="process.php" method="post" enctype="multipart/form-data">
                                    <input type="text" name="fullName" class="form-control mb-4" style="width:50%" placeholder="Name" required>
                                    <input type="text" name="topic" class="form-control mb-4" style="width:50%" placeholder="Topic" required>
                                    <textarea class="form-control" name="article" style="height:200px" required></textarea>
                                    <input type="submit" value="submit" class="btn btn2 m-4">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="row mt-2">
                            <div class="col p-5" id="fileup" align="center">
                                <a href="#" class="btn btn2 m-2">Upload a file</a><br>
                                <p>Maximum upload size 2MB.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div id="gradient-over" align="center">
                                <h2 class="p-5">POST TITLE</h2>
                                <div class="gal-container p-5">
                                    <img src="https://images.unsplash.com/photo-1506703479330-1bc6e2038b53?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=65eed7ea65d72c13f1b1f4ef881e922a&auto=format&fit=crop&w=1889&q=80">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!--    Custom JS-->
    <script src="main.js"></script>


</body>

</html>