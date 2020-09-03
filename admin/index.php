<!DOCTYPE html>
<html lang="en">
    <head>
     <?php include('../includes/links.php');?>
<!-- <script>
$(document).ready(function(){
    $('#county_data').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "getData.php"
    });
});
</script> -->

<script>
$(document).ready(function(){
  $('.dropdown a.dropdown-toggle').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
</head>

<body>


    <div id="wrapper" class="wrapper">

        <div class="navbar-header" style="background-color: #C71585">
                <button type="button" class="navbar-toggle navbartoggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php" style="color: white">Nakuru County Projects Management System</a>
            </div>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0" id="navsidebar">
            
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                   
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

<div class="navbar-default sidebar" role="navigation" id="nav" style="">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu" style="display:flex; flex-direction: column;">
            <li class="text-center">
                <img src="../assets/img/nakuruCountyLogo.jpg" class="img-responsive"/>
            </li>
            <li>
                <a href="indexProjects.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
           
            <li>
                <a href="../pages/projects.php"><i class="fa fa-bar-chart-o fa-fw"></i> Projects</a>
            </li>
            <li>
                <a href="viewFeedback.php"  type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope fa-fw"></i> View Feedback</a>

            </li>
            <li class="dropdown">
                    <a class="dropdown-toggle" href="#" id="navbarDropdown reports" role="" data-toggle="dropdown" aria-haspopup="true" aria-expanded=""> <i class="fa fa-bar-chart-o fa-fw"></i>Report</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="border:none; margin-left: 20px;">
                            <li><a href="projects_per_subcounty.php">Projects by Sub-county</a></li>
                            <li><a href="projects_per_ward.php">Projects by Ward</a></li>
                            <li><a href="projects_per_subward.php">Projects by Sub-ward</a></li>
                            <li class="dropdown">
                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects by status</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="work_ongoing.php">Works ongoing</a></li>
                                <li><a href="delayed.php">Delayed</a></li>
                                <li><a href="complete.php">Complete</a></li>
                        </ul>
                    </li>
    </div>
    <!-- /.sidebar-collapse -->

            <!-- /.navbar-static-side -->
        </nav>
       <?php  
 $connect = mysqli_connect("localhost", "root", "", "cpms_project");  
 $query ="SELECT * FROM projects ORDER BY project_id DESC";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" id="page-wrapper">  
                <h3 align="center">County Projects</h3>  
                <br />  
                <div class="table-responsive"> 
                <div align="right">
					<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Add Project</button><br><br>
				</div> 
                     <table id="county_data" class="table table-striped table-bordered col-12" style="width: 100%">  
                          <thead>
                                    <tr>
                                        <th>Projects</th>
                                        <th>Department</th>
                                        <th>Ward/Sub-ward</th>
                                        <th>Location/Sub-location</th>
                                        <th>Status</th>
                                        <th>FY</th>
                                        <th>Budget</th>
                                         <th>Action</th>
                                    </tr>
                                </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["project"].'</td>  
                                    <td>'.$row["department"].'</td>  
                                    <td>'.$row["ward"].'</td>  
                                    <td>'.$row["location"].'</td>  
                                    <td>'.$row["status"].'</td>  
                                    <td>'.$row["FY"].'</td>  
                                    <td>'.$row["budget"].'</td>  

                               </tr>  

                               ';  
                          }  
                          ?>  
                     </table>

                     <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js "></script>
    
<script type="text/javascript">
  $(document).ready( function () {
    $('#county_data').DataTable({
       dom: 'Bfrtip',
       buttons: [
        'copy', 'excel', 'pdf'
    ]
    });
} );
</script>  
                </div>  
           </div>  
      </body>  
 </html>  
<!--  <script>  
 $(document).ready(function(){  
      $('#county_data').DataTable();  
 });  
 </script>  -->
 
        <!--  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> -->
<!-- 
    <script type="text/javascript">
        
    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
    </script> -->
   </div>

            <!-- /.row -->
            <!--  -->
   <?php include('../includes/modal.php');?>
   <div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_orm" enctype="multipart/form-data" action="addProjects.php">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add User</h4>
				</div>
				<div class="modal-body">
					<label>Project Name</label>
					<input type="text" name="project" id="project_name" class="form-control" />
					<br/>
					<label>Department</label>
					<input type="text" name="department" id="department" class="form-control" />
					<br />
					<label>Ward</label>
					<input type="text" name="ward" id="ward" class="form-control" />
					<br />
					<label>Location</label>
					<input type="text" name="location" id="location" class="form-control" />
					<br />
					<label>Status</label>
					<input type="text" name="status" id="status" class="form-control" />
					<br />
					<label>Financial Year</label>
					<input type="text" name="FY" id="financial_year" class="form-control" />
					<br />
					<label>Budget</label>
					<input type="text" name="budget" id="budget" class="form-control" />
					<br />
				</div>
				<div class="modal-footer">
					<input type="hidden" name="user_id" id="user_id" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Add" name="save" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>
    
    </div>
<footer class="footer">
  <div class="">
    Copyright &copy; 2020 <a href="">Government of Nakuru County </a>
  </div>
</footer>

<script type="text/javascript">
 		var dataTable = $('#county_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"fetch.php",
			type:"POST"
		},
		"columnDefs":[
			{
				// "targets":[0, 3, 4],
				// "orderable":false,
			},
		],

	});
 </script> 

<script type="text/javascript">
$(document).on('click', '.update', function(){
		var user_id = $(this).attr("id");
		$.ajax({
			url:"fetch_single.php",
			method:"POST",
			data:{project_id:project_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#first_name').val(data.first_name);
				$('#last_name').val(data.last_name);
				$('.modal-title').text("Edit User");
				$('#user_id').val(user_id);
				$('#user_uploaded_image').html(data.user_image);
				$('#action').val("Edit");
				$('#operation').val("Edit");
			}
		})
	});
</script>
</body>

</html>
