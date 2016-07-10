<!DOCTYPE html>
<html lang="">
<head>
    <link rel="shortcut icon" href="img/icon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Department Of Complaints</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <style>body{padding-top:50px;}.starter-template{padding:40px 15px;text-align:center;}</style>
    <script src="//d3js.org/d3.v3.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="mainpagestyle.css">
    <style>
        body{
            color: whitesmoke;
        }
        .modal
        {
            color: black;
        }
        .tab{
            background-color: whitesmoke;
            color: black;
            padding: 10px 0 10px 20px;
            border-radius: 5px;
            margin: 5px auto;   
        }
    </style>
    <!--[if IE]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
   
    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="profile.php">VIT Grievance Portal</a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active" ><a href="profile.php">Home</a></li>
                    <li><a href="aboutlogn.html">About</a></li>
                    <li ><a href="deptlogn.html">Department</a> </li>
                    <li><a data-toggle="modal"data-target="#ContactModal">Contact</a></li>
                </ul>
            </div><!--.nav-collapse -->
        </div>
    </nav>

    <div class="container">
       <div class="col-md-3 space">
        </div>
        <div class="col-md-6">
            <br>
            <br>
        <div class="row">
            <button class="btn btn-primary btn-default pull-right" data-toggle="modal" data-target="#ComplaintModal"  >New Complaint</button>
            </div>
         <h3>Welcome <?php 
            session_start();
            echo $_SESSION['uname'];
            ?>
             <form action="logout.php" method="post">
                <input type="submit" class="btn btn-danger btn-default pull-right" value="Logout">
             </form>
             </h3>
            <br><br><br>
            <?php
                
                include_once 'connection.php';
                $uid=$_SESSION['uname'];
                $sql= "select * from grievance where uid='$uid'";
                $result=mysqli_query($conn, $sql);
                $numrows= mysqli_num_rows($result);
                if($numrows!=0)
                {
                    $i=0;
                  while($row= $result->fetch_assoc())
                      {
                          echo "<div class='tab' data-toggle='collapse' data-target='#desc$i'>
                          <p><h5>Subject: </h5> $row[subject]  </p>
                          <p><h5>Department: </h5> $row[department] </p>
                          <p><h5>Time Of Submissionon: </h5> $row[dos]</p>
                          </div>
                                <div id='desc$i' class='collapse tab'><p><h5>Description of the problem:</h5><br> $row[description]</p> </div>";
                      $i++;
                      }
                }
            else
            {
                echo "<div class='row'>
                            <span class='cente-block'>No Complaints registered yet</span>
                                </div> ";
            }
            ?>
            </div>
        <div class="col-md-3 space">
        </div>
        
         <div class="modal fade" id="ComplaintModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register New Grieavances</h4>
            <hr>
        </div>
        <div class="modal-body">
         <form name="compForm" action="lodgeComp.php" method="post">
           <h3><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Subject:</h3>
             <input type="text" class="form-control" name="Subject" placeholder="What is Bugging you">
             <h3><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Department:</h3>
             <select name="dept" class="form-control" required>
                 <option value="default" >Select A Department</option>
                <option value="hosteldiscipline">hostel discipline</option>
                 <option value="hostelfood">hostel food</option>
                 <option value=""></option>
                 <option value=""></option>
                 <option value=""></option>
                 <option value=""></option>
                 <option value=""></option>
                 <option value=""></option>
                 <option value=""></option>
                 <option value=""></option>
                 <option value=""></option>
                 <option value=""></option>
                 <option value=""></option>
                 <option value=""></option>
                 <option value=""></option>
             </select>
             <h3><span class="glyphicon glyphicon-book" aria-hidden="true"></span>Description:</h3>
             <textarea class="form-control" rows="5" name="description" placeholder="Tell us about the bug in detail.....!!!!!"></textarea>
 
            
        </div>
        <div class="modal-footer">
        <button class="btn btn-success center-block"><h5><span class="glyphicon glyphicon-off"></span>Submit</h5></button>
        </div>
            </form>
      </div>
      
    </div>
  </div>
        
         <div class="modal fade" id="ContactModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register New Grieavances</h4>
            <hr>
        </div>
        <div class="modal-body">
         <form action="lodgingWebcom.php" method="post">
           <h3><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Subject:</h3>
             <input type="text" class="form-control" name="Subject" placeholder="What is Bugging you" required>
             
            <h3><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> E-Mail:</h3>
             <input type="email" class="form-control" name="email" placeholder="enter your email address" required>
             
            <h3><span class="glyphicon glyphicon-book" aria-hidden="true"></span>Description:</h3>
             <textarea class="form-control" rows="5" name="description" placeholder="Tell us about the bug in detail.....!!!!!"></textarea>
 
           
        <button class="btn btn-success center-block"><h5><span class="glyphicon glyphicon-off"></span>Submit</h5></button>
            </form>
            
        </div>
      </div>
      
    </div>
  </div>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
