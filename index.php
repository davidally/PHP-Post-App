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
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        OBTHub
                    </a>
                </li>
                <li>
                    <a href="#">All Posts</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">Articles</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Chat</a>
                </li>
            </ul>
        </div>
        <!-- /Sidebar -->

        <!-- Page Content -->
        <div id="page-content-wrapper" class="py-0">
            <div class="container-fluid main">
              <div class="row">
              <div class="col-md px-5">
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
                      <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Date</th>
                      </tr>
                    </table>
                    <hr>
                    <form method="post">
                      <input type="text" class="form-control mb-5" style="width:40%" placeholder="Name" required>
                      <textarea class="form-control" style="height:200px" required></textarea>
                      <input type="submit" value="submit" class="btn btn2 m-4">
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md">
                <div class="row my-5">
                  <div class="col" id="fileup" align="center">
                    <a href="#" class="btn btn2 m-2">Upload a file</a><br>
                    <p>Maximum upload size 2MB.</p>
                  </div>
                </div>
                <div class="row">
                  <div align="center">
                    <h2>RECENT HIGHLIGHTS</h2>
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

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
