<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="<?php echo base_url('assets/dist/css/AdminLTE.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?php echo base_url('assets/plugins/iCheck/flat/blue.css');?>" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?php echo base_url('assets/plugins/morris/morris.css');?>" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css');?>" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?php echo base_url('assets/plugins/datepicker/datepicker3.css');?>" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker-bs3.css');?>" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="<?php echo base_url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>" rel="stylesheet" type="text/css" />
</head>
<body>
    <div>
        <?php include 'navbar.php' ?>
    </div>
    
    <div style="margin:20px;">
    <div class="row">
  <div class="col-sm-4">
    <div class="card" >
      <div class="card-body" >
        <h2 class="card-title">Personal.</h2>
        <p class="card-text">About your Personal profile.</p>
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Go somewhere</a>
      </div>
    </div>
  </div>
  <!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Personal information</h4>
      </div>
      <form method="post" action="about_personal">
      <div class="modal-body">
        <p><div class="form-row">
                            
                <div class="form-group">
                    <label class="bmd-label-floating">Date of Birth :</label>
                    <input type="date" class="form-control" id="addr" name="dob" required/>
                </div><div id='f_addr'></div>


                <div class="form-group">
                    <label class="bmd-label-floating">Birth Location : </label>
                    <input type="text" class="form-control" id="age" name="birth_location" required/>
                </div><div id='f_age'></div>

                <div class="form-group">
                    <label class="bmd-label-floating">Childhood: </label>
                    <input type="text" class="form-control" id="address" name="childhood" required/>
                </div><div id='address'></div>


                <div class="form-group">
                    <label class="bmd-label-floating">Education:</label>
                    <input type="text" class="form-control" id="state" name="education" required/>
                </div><div id='state'></div>

                <div class="form-group">
                    <label class="bmd-label-floating">Family Members:</label>
                   <p> <textarea class="form-control" id="state" name="fmly_members" required></textarea></p>
                </div>
                <div id='state'></div>



            </div>
        </p>
        <input type="submit" class="btn btn-danger" class="form-group">
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
</form>
  </div>
</div>
<!-- modal 1 ends -->
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <h2 class="card-title">Political.</h2>
        <p class="card-text">About your Political profile.</p>
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Go somewhere</a>
    </div>
  </div>
  </div>
   <!-- Modal -->
<form method="post" action="about_political">
    <div id="myModal2" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Political Career</h4>
        </div>
        <div class="modal-body">
            <p>
            <div class="form-group">
                    <label class="bmd-label-floating">About Your Political career:</label>
                    <p> <textarea class="form-control" id="state" name="political_about" required></textarea></p>
            </div>
            </p>
            <button type="submit" class="btn btn-danger">Submit</button>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>

    </div>
    </div>
</form>
<!-- modal 1 ends -->
<form method="post" action="about_social">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <h2 class="card-title">Social.</h2>
        <p class="card-text">About your Social profile.</p>
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">Go somewhere</a>
      </div>
    </div>
  </div>
   <!-- Modal -->
<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Social career</h4>
      </div>
      <div class="modal-body">
        <p>
        <div class="form-group">
                    <label class="bmd-label-floating">About Your social career:</label>
                    <p> <textarea class="form-control" id="state" name="social_about" required></textarea></p>
            </div>
        </p>
        <button type="submit" class="btn btn-danger">Submit</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</form>
<!-- modal 1 ends -->
</div>
    </div>
</body>
</html>