<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

<body>
    

<h3>Upload a picture!</h3>
<hr />
<div style="color:red">
  <?php echo validation_errors(); ?>
  <?php if(isset($error)){print $error;}?>
</div>
<?php echo form_open_multipart('upload/file_data');?>
  <div class="form-group">
    <label for="pic_title">Event Title*:</label>
    <input type="text" class="form-control" name="pic_title" required value="<?= set_value('pic_title'); ?>" id="pic_title">
  </div>
  <div class="form-group">
    <label for="pic_desc">Event Description:</label>
    <textarea name="pic_desc" class="form-control" id="pic_desc"><?= set_value('pic_desc'); ?></textarea>
  </div>
  <div class="form-group">
    <label for="pic_desc">Event Date:</label>
    <input type="date" name="pic_date" class="form-control" id="pic_date" required><?= set_value('pic_date'); ?></input>
  </div>
  <div class="form-group">
    <label for="pic_title">Event Place:</label>
    <input type="text" class="form-control" name="pic_place" value="<?= set_value('pic_place'); ?>" id="pic_place" required>
  </div>
  <div class="form-group">
    <label for="pic_file">Select Image*:</label>
    <input type="file" name="pic_file" class="form-control"  id="pic_file">
  </div>

  <a href="<?=base_url();?>" class="btn btn-warning">Back</a>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
<?php foreach($pictures as $pic):?>
  <table  class="table">
    <thead></thead>
      <tr>
        <th scope="col">event title</th>
        <th scope="col">event description</th>
        <th scope="col">event Date</th>
        <th scope="col">event Place</th>
        <th scope="col">event pic</th>
      </tr>
    <tr>
      <th scope="col"><?=$pic->pic_title?></th scope="col">
      <th scope="col"><?=$pic->pic_desc?></th scope="col">
      <th scope="col"><?=$pic->pic_date?></th scope="col">
      <th scope="col"><?=$pic->pic_place?></th scope="col">
      <th scope="col"><img src="<?=base_url().'assets/upload/'.$pic->pic_file;?>" width="200"></<img></th scope="col">
      <th><a button class="btn btn-danger" href="delete_event?id=<?php echo  $pic->id ?>">Delete Evevnt</a></th>
      </thead>
    </tr>
  </table>
<?php endforeach?>

</body>
</html>