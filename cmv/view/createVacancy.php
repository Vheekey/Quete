<?php
  if(isset($_POST['cid']))
  {
    ?>
       <div class="form-group">
              <label for="category">Sub Category</label>
              <select name="category" id="category" class="form-control" required="required">

                 <?php
                    foreach($quest->get_sub_category($_POST['cid']) as $val)
                       echo '<option value="'.$val['id'].'">'.$val['subcategory_name'].'</option>';
                 ?>
              </select>
           </div>
    <?php
     die();
  }

  if(isset($_POST['sid']))
  {
    ?>
       <div class="form-group">
              <label for="stat">State</label>
              <select name="states" id="state" class="form-control" required="required">
                 <?php
                    foreach($quest->get_states($_POST['sid']) as $val)
                       echo '<option value="'.$val['id'].'">'.$val['state_name'].'</option>';
                 ?>
              </select>
           </div>
    <?php
     die();
  }
?>
<!DOCTYPE HTML>

<html>

<head>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
    <!--<link rel="stylesheet" href="assets/css/recruiter.css" /> -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  <title>Create Vacancy</title>
</head>

<body>
     <div class="rec container-fluid">
         <nav class="navbar navbar-dark bg-primary" style="background-color:#F8F8F8;">

                <div class="navbar-header">
                    <a class="navbar-brand text-info" href="#">Quete.com</a>
                </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php?page=recruiter">Home</a></li>
                        <li><a href="index.php?page=createVacancy">Create Vacancy</a></li>
                        <li><a href="index.php?page=manageVacancy">Manage Existing Vacancy</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>

         </nav>
     </div>
     <div class="container text-info">

        <form action="" method="post" class="form-horizontal">
           <label> <h3>Please Fill Appropriately</h3> </label>
           <div class="form-group">
              <label for="company">Company</label>
              <input type="text" name="company" class="form-control" required="required"/>
           </div>

           <div class="form-group">
              <label for="about">About the Company</label>
              <textarea name="about" class="form-control" required="required"></textarea>
           </div>

           <div class="form-group">
              <label for="position">Vacant Position</label>
              <input type="text" name="position" class="form-control" required="required"/>
           </div>

          <div class="form-group">
              <label for="category">Category</label>
              <select name="category" id="category" class="form-control" required="required" onchange="cat()">
                <option value=""></option>
              <?php
                    foreach($quest->get_category() as $val)
                       echo '<option value="'.$val['id'].'">'.$val['category_name'].'</option>';
                 ?>
              </select>
           </div>

           <div id="subcat"></div>

            <div class="form-group">
              <label for="country">Country</label>
              <select name="country" id="country" class="form-control" required="required" onchange="cotry();">
                <option value=""></option>
                 <?php
                    foreach($quest->get_country() as $val)
                       echo '<option value="'.$val['id'].'">'.$val['country_name'].'</option>';
                   ?>
              </select>
           </div>

            <div id="state"></div>

            <div class="form-group">
              <label for="job">Full Job Description</label>
              <textarea name="job" class="form-control" required="required"></textarea>
           </div>

           <div class="form-group">
              <label for="req">Job Requirement</label>
              <textarea name="req" class="form-control" required="required"></textarea>
           </div>

           <div class="row">
                <div class="form-group col-md-3">
                    <label for="experience">Minimum Experience Required</label>
                    <input type="number" name="experience" class="form-control" required="required" placeholder="Minimum years of experience needed">
                </div>

                <div class="col-md-1"></div>

                <div class="form-group col-md-3">
                    <label for="deadline">Deadline for Application</label>
                    <input type="date" name="deadline" class="form-control" required="required">
                </div>

                <div class="col-md-1"></div>

                <div class="form-group col-md-4">
                    <label for="questions">Screening Questions</label>
                    <div class="row">
                        <div class="col-md-6">
                           <input type="text" name="questions" id="question" class="form-control" placeholder="No of questions" required="required" value="">
                        </div>
                        <div class="col-md-6">
                            <a href="#" id="screen" onclick="screeningQuestions()">Fill Screening Questions</a>
                        </div>
                    </div>
                </div>

           </div>
                <div id="questions"></div>
          <p></p>
            <div class="row">
                <div class="col-md-6">
                   <div class="form-group">
                        <label for="cv">Minimum score out of 100 to upload Curriculum Vitae</label>
                        <input name="cv" class="form-inline" required="required" type="text">
                    </div>
                </div>

                <div class="col-md-6">
                   <div class="form-group">
                        <label for="time">Duration for Screening</label>
                        <input name="time" class="form-inline" required="required" type="number">seconds
                    </div>
                </div>
            </div>

            <div class="form-group">
              <label for="position">Recruiter</label>
              <input type="text" name="position" class="form-control" required="required" placeholder="Recruiter's name"/>
           </div>

        <input type="submit" name="preview" class="btn btn-primary btn-round pull-right" value="Preview" />
        </form>


     </div>
    <script type="text/javascript">
     function screeningQuestions(){
            // Number of inputs to create
            var number = document.getElementById("question").value;
            // Container <div> where dynamic content will be placed
            var container = document.getElementById("questions");
            // Clear previous contents of the container
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
            for (i=0;i<number;i++){
                // Append a node with a random text
                container.appendChild(document.createTextNode("Question "));
                var input = document.createElement("textarea");
                input.cols = 150;
                input.rows = 5;
                input.type = "textarea";
                input.name = "ex["+i+"][question]";
                container.appendChild(input);
                // Append a line break
                container.appendChild(document.createElement("p"));

                container.appendChild(document.createTextNode("Options "));
                var input = document.createElement("textarea");
                input.cols = 150;
                input.rows = 2;
                input.type = "textarea";
                input.name = "ex["+i+"][option]";
                container.appendChild(input);
                // Append a line break
                container.appendChild(document.createElement("p"));

                container.appendChild(document.createTextNode("Answer "));
                var input = document.createElement("textarea");
                input.cols = 150;
                input.rows = 1;
                input.type = "textarea";
                input.name = "ex["+i+"][answer]";
                container.appendChild(input);
                // Append a line break
                container.appendChild(document.createElement("hr"));

              }
        }

        function cotry(){
          var cou = document.getElementById("country");
          var selcou = cou.options[cou.selectedIndex].value;
          //alert("selcou");

          $.ajax({
                type: 'POST',
                url: '',
                data:{sid:selcou},
                success: function(data) {
                  //  alert(data);
                  $("#state").html(data);//passing the data into html form to the div created

                }
            });
        }

        function cat(){
          var sel = document.getElementById("category");
          var selcat = sel.options[sel.selectedIndex].value;
          //alert(selcat);
         $.ajax({
                type: 'POST',
                url: '',
                data:{cid:selcat},
                success: function(data) {
                  //  alert(data);
                  $("#subcat").html(data);//passing the data into html form to the div created

                }
            });

        }

     </script>

<script type="text/javascript">
/*        function country(){
          var cou = document.getElementById("country");
          var selcou = cou.options[cou.selectedIndex].value;
          alert("Vick");
        }*/
    </script>
</body>

</html>
<?php



?>