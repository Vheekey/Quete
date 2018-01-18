<?php

class control{
    	private $connection;
     	public function __construct(){

       		$this->connection = $this->connect();
       		session_start();
    }

        public  function connect(){
  			$host = "localhost";
  			$user = "root";
  			$password = "";
  			$dbname = "quete";
  			$conn = mysqli_connect($host, $user, $password, $dbname);

  			//: check for error

 			 if(mysqli_errno($conn)){

  				echo mysqli_error($conn) ;
  				exit;
  				}
  					return $conn;
   		 }

    public function get_category(){

          $cat = "SELECT * from category";
          $cate = array();
          $exp = mysqli_query($this->connection,$cat);
            while ($res = mysqli_fetch_assoc($exp)){
              array_push($cate, $res);
            }
              return $cate;

        }

      public function get_sub_category($id){
          $cat = "SELECT * from subcategory where category_id=".$id;
          $cate = array();
          $exp = mysqli_query($this->connection,$cat);
            while ($res = mysqli_fetch_assoc($exp)){
              array_push($cate, $res);
            }
              return $cate;

        }

         public function get_country(){
          $cat = "SELECT * from countries";
          $cate = array();
          $exp = mysqli_query($this->connection,$cat);
            while ($res = mysqli_fetch_assoc($exp)){
              array_push($cate, $res);
            }
              return $cate;

        }

        public function get_states($id){
          $cat = "SELECT * from state where country_id=".$id;
          $cate = array();
          $exp = mysqli_query($this->connection,$cat);
            while ($res = mysqli_fetch_assoc($exp)){
              array_push($cate, $res);
            }
              return $cate;
        }

        public function createCategory(){
          if(isset($_POST["newCats"])){
            //echo "lollipop";
          $newCat = $_POST["newCat"];
          $categ = "INSERT into category(category_name) values('$newCat')";
          if(mysqli_query($this->connection, $categ)){
            echo"New Category Created";
            }
              else{
                die(mysqli_error($this->connection));
              }
          }

        }

        public function createSubCategory(){
          if(isset($_POST["newSub"])){
            //echo "lollipop";
          $newsubCat = $_POST["newSubcat"];
          $catID = $_POST["catid"];
          $subCateg = "INSERT into subcategory(category_id,subcategory_name) values('$catID','$newsubCat')";
          if(mysqli_query($this->connection,$subCateg)){
            echo"New Subcategory Created";
            }
              else{
                die(mysqli_error($this->connection));
              }
          }

        }

        public function createNewCountry(){
          if(isset($_POST["newCou"])){
            //echo "lollipop";
          $newCoun = $_POST["newCoun"];
          $nCoun = "INSERT into countries(country_name) values('$newCoun')";
          if(mysqli_query($this->connection,$nCoun)){
            echo"New Country Created";
            }
              else{
                die(mysqli_error($this->connection));
              }
          }

        }

        public function newState(){
          if(isset($_POST["newStat"])){
            //echo "lollipop";
          $stateNew = $_POST["newState"];
          $cid = $_POST["cid"];
          $statNew = "INSERT into state(country_id,state_name) values('$cid','$stateNew')";
          if(mysqli_query($this->connection,$statNew)){
            echo"New State Created under".$cid;
            }
              else{
                die(mysqli_error($this->connection));
              }
          }

        }

        public function delExp(){
          if(isset($_POST["delVac"])){
            //echo "lollipop";
          $expVac = $_POST["expVac"];

          $delVaca = "DELETE from vacancy expiry_date='$expVac'";
          if(mysqli_query($this->connection,$delVac)){
            echo $expVac." Job Vacancy Deleted";
            }
              else{
                die(mysqli_error($this->connection));
              }
          }

        }


  }
 $quest = new control;

?>