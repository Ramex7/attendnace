
<?php
       
       include('Connection/connection.php');
       include('header.php');
       
        ?>  
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a>
                <a class="navbar-brand" href="Students/index.php">Students</a>
                <a class="navbar-brand" href="Instructors/index.php">Instructors</a>
                <a class="navbar-brand" href="Attendance/index.php">Attendance</a>
                <a class="navbar-brand" href="../logout.php" >Logout</a>
            </div>
     
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="Assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="Assets/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="Assets/js/plugins/morris/raphael.min.js"></script>
    <script src="Assets/js/plugins/morris/morris.min.js"></script>
    <script src="Assets/js/plugins/morris/morris-data.js"></script>

</body>

</html>
