<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
<p></p>
<div class="container">
  <center>
  <div class="row">
    <div class="col-sm-6">
      <p><a href="/insert" class="btn btn-success" role="button">Insert</a> </p>
    </div>
    <div class="col-sm-6">
      <p><a href="#" class="btn btn-success" role="button">Update</a> </p>
    </div>

  </div>
</center>
</div>

<?php
    foreach ($result as $row) {
        $id=$row->id;
        $Fname=$row->Fname;
        $Lname=$row->Lname;
        $sex=$row->sex;
    }
    $sexM="";
    $sexF="";

    if($sex=="ชาย"){
      $sexM="selected";
    } else {
      $sexF="selected";
    }
?>

<div class="row">

  <div class="col-sm-1">
  </div>

  <div class="col-sm-11">
    <form action="<?=url('/update2')?>" method="post"enctype="multipart/form-data">
      First name :<input type="text" name ="Fname" value="<?=$Fname?>"> <br/>
       Last name :<input type="text" name ="Lname" value="<?=$Lname?>"> <br/>
       sex :
       <select name="sex">
         <option value="ชาย" <?= $sexM ?> >ชาย</option>
         <option value="หญิง" <?= $sexF ?> >หญิง</option>

       </select>
    <p>
       <input type="submit">
       <input type="reset">
    </p>
       <input type="hidden" name="id" value="<?=$id?>">
       <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
    </form>
  </div>

  <div class="col-sm-1">
  </div>

</div>


</body>
</html>
