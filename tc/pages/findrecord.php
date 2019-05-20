<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">


<?php

 if(empty($_SESSION["user_name"])) { 

  echo "<h3> <a href = login.php>Click here to login </a> <h3>";
}
else
{
?>
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>G</b>Service</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-- Sudevan:removed>

          <!-- Notifications: style can be found in dropdown.less -->

          <!-- Tasks: style can be found in dropdown.less -->

          <!-- User Account: style can be found in dropdown.less -->
          <!-- Control Sidebar Toggle Button -->
          
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel sudevan removed -->
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="tclist.php">
            <i class="fa fa-th"></i> <span>Pending Applications</span>
          </a>
        </li>
        <li>
          <a href="tcrequest.php">
            <i class="fa fa-files-o"></i>
            <span>New TC application</span>
          </a>
        </li>
        <li >
          <a href="setdefaultUI.php">
            <i class="fa fa-laptop"></i>
            <span>Set Office Profile</span>
          </a>
        </li>

          <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-folder-open"></i> <span>Record Room</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="findrecord.php"><i class="fa fa-circle-o"></i> Find Record</a></li>
            <li><a href="addrecord.php"><i class="fa fa-circle-o"></i> Add Record</a></li>
          </ul>
        </li>

        <li>
          <a href="tcprocess.php">
            <i class="fa fa-edit"></i> <span>Blank TC Form	</span>
          </a>
        </li>
        <li>
        		<form action="login.php" method="post" id="frmLogout">
				<input type="submit" name="logout" value="Logout" class="logout-button">
				</form>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Record room
        <small>search for record location</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Record Room</a></li>
      </ol>
    </section>
    
    <!-- Main content -->
	<section class="content">
      <div class="row">
              

        <div class="col-md-12">
        <div class="col-md-2">
        <div class="form-group">
            <label>Section</label>
              <select name="cboproduct" id="cboproduct"   class="form-control"  onchange="load_product_type(),loadcomp()" >
                <option value="0" >Select a section</option>
                <option value='C'>C</option>
                <option value='E'>E</option>
              </select>
              
        </div> <!--div class="form-group"-->
          </div><!--div class="col-md-3"-->


        <div class="col-md-2">
        <div class="form-group">
            <label>Filenumber</label>
            <input type="text" name="filenumber" id="filenumber" value="" class="form-control" onkeypress="return numeric(event)"/>
        </div> <!--div class="form-group"-->
          </div><!--div class="col-md-3"-->


        <div class="col-md-2">
        <div class="form-group">
            <label>subject</label>
            <input type="text" name="subject" id="subject" value="" class="form-control"/>
        </div> <!--div class="form-group"-->
          </div><!--div class="col-md-3"-->


          <div class="col-md-2">
        <div class="form-group">
            <label>Bundle Nnumber</label>
            <input type="text" name="bundlenumber" id="bundlenumber" value="" class="form-control"/>
        </div> <!--div class="form-group"-->
          </div>

        <div class="col-md-2">
        <div class="form-group">
            <label>Tags</label>
            <input type="text" name="tags" id="tags" value="" class="form-control" placeholder="coma seperated tags" />
        </div> <!--div class="form-group"-->
          </div><!--div class="col-md-3"-->


        <div class="col-md-2">
        <div class="form-group">
            <label></label>
            <input type="button" class="btn btn-block btn-success" value="Search" style="width:50% "  onclick="uptoallotaddRow('upto2')">
        </div> <!--div class="form-group"-->
          </div><!--div class="col-md-3"-->
      </div>




        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Search result</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
           
					<?php
						include("connection.php");
						$sql="SELECT year,section,filenumber,ddate as Date,subject,rec_person.name,bundlenumber from rec_record_master LEFT JOIN rec_person on rec_record_master.personid = rec_person.id inner join rec_bundle_record ON rec_record_master.id=rec_bundle_record.recordid";
						$result=$conn->query($sql);

            echo "<thead>";
            echo "<tr>";
            /* get column metadata */
              // Get field information for all fields
                while ($fieldinfo=mysqli_fetch_field($result))
                  {
     
                    echo "<th>$fieldinfo->name</th>";
                    $fieldarray[]=$fieldinfo->name;
                  }

            echo "</tr>";
            echo "</thead>";
            echo " <tbody>";
            
						if ($result->num_rows > 0) {
						
						
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  foreach($row as $key=>$value)
                  {
                    echo "<td>$value</td>";
                  }
                  echo "</tr>";
						    }
						} else {
						    echo "0 results";
						}
						 mysqli_close($conn);
						
               echo" </tbody>";
                echo" <tfoot>";
                     echo "<tr>";
                      /* get column metadata */
                        // Get field information for all fields
                         foreach ($fieldarray as $field){
                           # code...
                        
                            {
               
                              echo "<th>$field</th>";
                            }
                          }

                      echo "</tr>";
                ?>
                   </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->

    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
         <!-- /.control-sidebar-menu -->

        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
   
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<?php
//clossiing else of isset session
}
?>
</body>
</html>
