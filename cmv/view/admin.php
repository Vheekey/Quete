<!DOCTYPE HTML>

<html>

<head>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  <title>Administrator</title>
  <style>
  .jumbotron-billboard .img {
    margin-bottom: 0px;
    opacity: 0.3;
    color: #fff;
    background: #000 url('assets/images/jo7.jpg') top center no-repeat;
    width: 100%;
    height: 100%;
    background-size: cover;
    overflow: hidden;
    position:absolute;
    top:0;
    left:0;
    z-index:1;
}
.jumbotron h4 {margin-top:0;}
.jumbotron {
  position:relative;
  padding-top:50px;
  padding-bottom:50px;
}
.jumbotron .container {
  position:relative;
  z-index:2;
}

.LogSignButton
{
  padding-top:30px;
  padding-bottom: 50px;
  padding-right:10px;
}

  /*.container-fluid{
            background: url('assets/images/jo7.jpg') center no-repeat;
            width: 100%;
            min-height: 500px;
            }*/
  </style>
</head>

<body>
<?php
    $quest->createCategory();
    $quest->createSubCategory();
    $quest->createNewCountry();
    $quest->newState();

?>
     <div class="LogSignButton">
        <h1 class="text-primary" style="font-weight:bold;text-align:center;">Welcome Administrator</h1>
        <h4 class="text-primary" style="text-align:center;">What do you want to do today?</h4>
       <button class="btn btn-sm btn-primary pull-right">Log out</button>
        <button class="btn btn-sm btn-primary pull-right" data-toggle="collapse" data-target="#profile">Profile</button>
     </div>
     <div class="jumbotron jumbotron-billboard">
        <div class="img"></div>

     <div class="container h4" style="color:#00008B; font-weight:bold;">
        <form action="" class="form-horizontal" method="post">
            <div class="form-group">
                <label for="newCat">Create New Category</label>
                <input name="newCat" class="form-control" required="required" type="text" placeholder="category name">
                <input type="submit" name="newCats" value="Create" class="btn btn-primary" />
            </div>
        </form>
     <p></p>
        <form action="" method="post">
            <div class="form-group">
                <label for="newCou">Create New Country</label>
                <input name="newCoun" class="form-control" required="required" type="text" placeholder="country name">
                <input type="submit" name="newCou" value="Create" class="btn btn-primary" />
            </div>
        </form>
     <p></p>
        <form action="" method="post">
            <div class="form-group">
                <label for="newSubcat">Create New Subcategory</label>
                <input name="newSubcat" class="form-control" required="required" type="text" placeholder="new subcategory name">
                <input name="catid" class="form-control" required="required" type="text" placeholder="category id">
                <input type="submit" name="newSub" value="Create" class="btn btn-primary" />
            </div>
        </form>
     <p></p>
        <form action="" method="post">
            <div class="form-group">
                <label for="newState">Create New state</label>
                <input name="newState" class="form-control" required="required" type="text" placeholder="new state name">
                <input name="cid" class="form-control" required="required" type="text" placeholder="country id">
                <input type="submit" name="newStat" value="Create" class="btn btn-primary" />
            </div>
        </form>
     <p></p>
        <form action="" method="post">
            <div class="form-group">
                <label for="expVac">Delete Expired Vacancy</label>
                <input name="expVac" class="form-control" required="required" type="text" placeholder="Date">
                <input type="submit" name="delVac" value="Create" class="btn btn-primary" />
            </div>
        </form>
        </div>
    </div>
</body>

</html>

<?php



?>