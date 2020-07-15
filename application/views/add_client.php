<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Client</title>
</head>
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />   
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
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

<body class="skin-blue">
<div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="Home" class="logo"><b>E-</b>Sachivalay</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs"></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      
                      
                    </p>
                  </li>
                  <!-- Menu Body -->
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
</div>

<form method="post" action="adduser">

<!-- User Form -->
<div id="user-form" style="display:block; margin:30px;">
<div id="user">    
<div class="form-row">
    
    <div class="col-md-1">
                        <div class="form-group">
                        <label class="bmd-label-floating">Initial</label>
                        <select class="form-control" id="sel1" name="sel1" onchange="selectSex(this.value)">
                            <option value="mr">Mr.</option>
                            <option value="mrs">Mrs.</option>
                            <option value="ms">Ms.</option>
                        </select>
                        </div>
                      </div>
    <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>First Name</b></label>
                          <input type="text" class="form-control" name="fname" id="fname" required/>
                        </div>
     </div>
     <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Middle Name</b></label>
                          <input type="text" class="form-control" name="mname" id="mname" required/>
                        </div>
     </div>
     <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"><b>Last Name</b></label>
                          <input type="text" class="form-control" name="lname" id="lname" required/>
                        </div>
     </div><div id="fl_name"></div>
</div>




<div class="form-group">
    <label class="bmd-label-floating">Address : <br>पता :</label>
    <input type="text" class="form-control" id="addr" name="address" required/>
</div><div id='f_addr'></div>


<div class="form-group">
    <label class="bmd-label-floating">Age : <br> आयु</label>
    <input type="text" class="form-control" id="age" name="age" required/>
</div><div id='f_age'></div>

<div class="form-group">
    <label class="bmd-label-floating">State: <br> पत्ता</label>
    <input type="text" class="form-control" id="address" name="address" required/>
</div><div id='address'></div>


<div class="form-group">
    <label class="bmd-label-floating">State: <br>राज्य</label>
    <input type="text" class="form-control" id="state" name="state" required/>
</div><div id='state'></div>


<div class="form-group">
    <label class="bmd-label-floating">City: <br>शहर</label>
    <input type="text" class="form-control" id="city" name="city" required/>
</div><div id='state'></div>

<div class="form-group">
    <label class="bmd-label-floating">Pincode: <br>पिनकोड</label>
    <input type="text" class="form-control" id="state" name="pincode"/>
</div><div id='state'></div>



<div class="form-group">
    <label class="bmd-label-floating">Gender: <br>लिंग</label>
    <select type="text" class="form-control" id="gender" name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
</div><div id='gender'></div>


<div class="form-group">
    <label class="bmd-label-floating">Email: <br>ईमेल</label>
    <input type="email" class="form-control" id="email" name="email" required/>
</div><div id='state'></div>

<div class="form-group">
    <label class="bmd-label-floating">URL(if any): <br></label>
    <input type="text" class="form-control" id="url" name="url" />
</div><div id='state'></div>



<div class="form-group">
    <label class="bmd-label-floating">Name of Party: <br>पार्टी का नाम</label>
    <input type="text" class="form-control" id="party_name" name="party_name" required/>
</div><div id='state'></div>

<button type="submit" class="btn btn-success" name="submit" onclick="user_inserted()" >Submit</button>


</form>
</body>
<script>
    function user_inserted(){
        alert("user inserted Successfully");
    }
</script>
</html>