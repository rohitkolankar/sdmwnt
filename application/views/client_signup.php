<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Authentication</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/fontawesome-all.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/font-awesome.min.css');?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Navigation-Clean.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css');?>">
</head>
<style>
    .row.text-center.flex.center.v-center.full-height {
}

.row.text-center.flex.center.v-center.full-height {
}

.row.text-center.flex.center.v-center.full-height {
}

.flex.v-center {
  align-items: center;
}

.flex.center {
  justify-content: center;
}

.flex.v-center {
  align-items: center;
}

.flex.center {
  justify-content: center;
}

.full-height {
  height: 100%;
}

.center {
  text-align: center;
}

.flex {
  display: flex;
}

.full-height {
  height: 100%;
}

.center {
  text-align: center;
}

.flex {
  display: flex;
}

.text-center {
  text-align: center!important;
}

.row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
  padding-top:40px;
  padding-left:50px;
}

body {
  margin: 0;
  font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color: #fff;
}

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: transparent;
}

element.style {
  width: 352px;
}

.form-box {
}

.form-box {
}

.form-box {
  padding: 10px 20px;
  box-shadow: 0px 0px 15px #000;
}

.form-box {
  padding: 10px 20px;
  box-shadow: 0px 0px 15px #000;
}

.center {
  text-align: center;
}

.center {
  text-align: center;
}

.text-center {
  text-align: center!important;
}

body {
  margin: 0;
  font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color: #fff;
}

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: transparent;
}
</style>

<body>
<?php
      if(isset($_GET["success"])){
        ?>
          <div class="alert alert-danger">
            <strong>Failure!</strong> LoginName or Password do not match!!.
          </div>
        <?php
      }
    ?>
<div class="container full-height">
    <div class="row text-center flex center v-center full-height">
        <div class="col-8 col-sm-4" style="width: 282px;height: 619px;margin: 18px;">
            <div class="form-box" style="width: 352px;">
                <form class="text-center" method="post" action="signin">
                    <fieldset>
                        <legend style="font-size: 30px; font-weight:bold;">SIGNIN</legend><img id="avatar" class="avatar round" src="<?php echo base_url('assets/img/gsk_logo.jpg ');?>" />
                        <div class="form-group">
                            <div class="input-group">
                                <!-- <div class="input-group-addon"><i class="fa fa-lock" style="color:black;";></i></div> -->
                                <input class="form-control" type="text" placeholder="UserName/LoginName" name="username" id="username" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <!-- <div class="input-group-addon"><i class="fa fa-lock" style="color:black;";></i></div> -->
                                <input class="form-control" type="password" placeholder="Password" name="password" id="password" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="input-group">
                                <!-- <div class="input-group-addon"><i class="fa fa-lock" style="color:black;";></i></div> -->
                                <input class="form-control" type="password" placeholder="Confirm Password" name="confirm_password" id = "confirm_password"required>
                            </div>
                        </div>
                        <?php foreach ($id as $i) : ?>
                        <input type="hidden" name="client_id" value="<?= $i->id?>"></input>
                        <?php endforeach?>

                        <div id='error' style="color:red;"></div><br>
                        
                        <button class="btn btn-primary btn-block" type="submit" id="btnsubmit" >Save</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<script>
// function validate_password(){
//     var new_password = document.getElementById("password").value;
//     var confirm_password = document.getElementById("confirm_password").value;
//     if(new_password != confirm_password){
//         document.getElementById("error").innerHTML = "Passwords do not Match!!";
//         console.log("error");

//     }
// }
$(function(){
    $("#btnsubmit").click(function(){
        var password = $("#password").val();
        var confirmpassword = $("#confirm_password").val();
        if(password != confirmpassword){
            document.getElementById("error").innerHTML = "Passwords do not Match!!";
        return false;
      }
        return true;
    });
});
</script>
</body>
</html>