
<?php

require_once("../national_parksdb_profile.php");

require_once("../db_connect.php");

require_once("../Input.php");

// This function will bind values and create query for pulling entries from db

function getParks($dbc,$offset,$limit){
  $query = "SELECT * FROM national_parks LIMIT :limit OFFSET :offset";
  $stmt = $dbc->prepare($query);

  $stmt->bindValue(":limit", $limit, PDO::PARAM_INT);
  $stmt->bindValue(":offset", $offset, PDO::PARAM_INT);
  $stmt->execute();


  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $rows;
}

// This function will prepare query and get count of parks from db

function getParksCount($dbc){
  $stmt = $dbc->query("SELECT COUNT(id) FROM national_parks");
  $rows = $stmt->fetchColumn();
  return $rows;
}

// This is where the page controller begins/////////////////////

function pageController($dbc){

  // This variable will be an array of error messages
    $errors=[];


  // This variable is used to see if database will accept new park

  $conditionForEntry = 
  !empty(Input::get('name'))
  &&!empty(Input::get('location'))
  &&!empty(Input::get('date_established'))
  &&!empty(Input::get('area_in_acres'))
  &&!empty(Input::get('description'))
  &&isset($_POST);

  // This set of tries and catches goes off if all the conditions for entry are true, 
  // it will catch errors from the input class and store them in the errors array

  if ($conditionForEntry) {

    try{
      $name=Input::getString('name');
    }catch(Exception $e){
      $errors['name'] = $e->getMessage();
    }
    try{
      $location=Input::getString('location');
    }catch(Exception $e){
      $errors['location'] = $e->getMessage();
    }
    try{
      $date_established=Input::get('date_established');
    }catch(Exception $e){
      $errors['date_established'] = $e->getMessage();
    }

    try{
      $area_in_acres=Input::getNumber('area_in_acres');
    }catch(Exception $e){
      $errors['area_in_acres'] = $e->getMessage();
    }

    try{
      $description=Input::getString('description');
    }catch(Exception $e){
      $errors['description'] = $e->getMessage();
    }

    if (empty($errors)) {
      // This is the query used for the prepare()

      $query='INSERT INTO national_parks (name, location, date_established, area_in_acres, description) 
      VALUES (:name, :location, :date_established, :area_in_acres, :description)';
      
      // The following function puts the values posted to the db keys to create new database
      $stmtTwo = $dbc->prepare($query);

       // replace input::get functions with variables
      $stmtTwo->bindValue(':name', $name, PDO::PARAM_STR);
      $stmtTwo->bindValue(':location', $location, PDO::PARAM_STR);
      $stmtTwo->bindValue(':date_established', $date_established, PDO::PARAM_STR);
      $stmtTwo->bindValue(':area_in_acres', $area_in_acres, PDO::PARAM_STR);
      $stmtTwo->bindValue(':description', $description, PDO::PARAM_STR);

      $stmtTwo->execute();
    }
  }




//Create a offset for the OFFSET (this will be passed into getParks function)

  if (Input::has('page')){
    $offset=(Input::get('page') - 1) * 4;
  }else{
    $offset=0;
  }


// This variable stores the limit (this will be passed into the getParks function)

  if (Input::has('limit')) {
    $limit = intval(Input::get('limit'));
  }else{
    $limit = 4;
  }




  


// I'm calling the function then echoing out the html with a foreach loop

  $parks = getParks($dbc,$offset,$limit);




  

// This is putting the count of park entries in a variable

  $parkCounter = getParksCount($dbc);

// I'm now doing math with that variable to get the total numbers of pages I will need

  $pageNumber=ceil($parkCounter/4);


  if (Input::has('page')) {
    $getPage=intval(Input::get('page'));
  }else{
    $getPage=0;
  }






  $data=['pageNumber'=>$pageNumber, 'parks'=>$parks, 'getPage'=>$getPage, 'errors'=>$errors];
  return $data;

}

extract(pageController($dbc));

?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>National Parks</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">


  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
  <link href="CSS/bootstrap.min.css" rel="stylesheet">

</head>

<body>




  <!-- The following things all use alternative syntax -->

  <div class="container">

    <div class="row">
      <div class="col-md-3 col-md-offset-5">
        <h1>Add Parks Here</h1>
        <form method="POST" action="national_parks.php" id="parksForm">
          Name:
          <br>
          <input type="text" name="name" id="name" class="input">
          <br>
          <?php if (isset($errors['name'])) : ?>
          <div class="alert alert-danger">
            <p><?=$errors['name']; ?></p>
          </div>
        <?php endif; ?>
        Location:
        <br>
        <input type="text" name="location" id="location" class="input">
        <br>
        <?php if (isset($errors['location'])) : ?>
          <div class="alert alert-danger">
            <p><?=$errors['location']; ?></p>
          </div>
        <?php endif; ?>
        Date Established:
        <br>
        <input name="date_established" id="dateEstablished" class="input" type="date">
        <br>
        <?php if (isset($errors['date_established'])) : ?>
          <div class="alert alert-danger">
            <p><?=$errors['date_established']; ?></p>
          </div>
        <?php endif; ?>
        Area in Acres:
        <br>
        <input type="number" min="0" step="0.01" name="area_in_acres" id="areaInAcres" class="input">
        <br>
        <?php if (isset($errors['area_in_acres'])) : ?>
          <div class="alert alert-danger">
            <p><?=$errors['area_in_acres']; ?></p>
          </div>
        <?php endif; ?>
        Description:
        <br>
        <input type="text" name="description" id="description" class="input">
        <br>
        <?php if (isset($errors['description'])) : ?>
          <div class="alert alert-danger">
            <p><?=$errors['description']; ?></p>
          </div>
        <?php endif; ?>
        Set Limit:
        <br>
        <input type="number" min="0" name="limit" id="limit">
        <br>
        <input type="submit" id="submit">

      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">

      <h1>National Parks</h1>

      <!-- The following for each loop, creates a table with the national parks from the db -->

      <table id="parks" class="table-striped table table-bordered">
        <thead>
          <tr>
            <th>Name</th>
            <th>State</th>
            <th>Date Established</th>
            <th>Area in Acres</th>
            <th>Description</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($parks as $park): ?>
          <tr>
            <td><?= $park['name']; ?></td>
            <td><?= $park['location']; ?></td>
            <td><?= $park['date_established']; ?></td>
            <td><?= $park['area_in_acres']; ?></td>
            <td><?= $park['description']; ?></td>
            <td><?= "<button type='submit' id='submitTwo'>Delete</button>" ?>
          </tr>
        <?php endforeach;?>

      </tbody>
    </div>
  </div>
</div>

<!-- This for loop creates the page number anchors -->

<div class="container">

  <div class="row">
    <div class="col-lg-12">

      <?PHP  for ($i=1; $i <=$pageNumber ; $i++) : ?>

      <a href='http://codeup.dev/national_parks.php?page=<?= $i; ?>'>
        <div class="btn btn-primary">
          <?= $i; ?>
        </div>
      </a>
    <?php endfor; ?>
  </div>

</div>

<!-- These 2 if statements detect whether the page is less or equal to max and use that to determine if it should create NEXT or PREVIOUS a that look like buttons -->

<div class="row">
  <div class="col-lg-12">
    <?php if ($getPage > 1) : ?>

    <a href="http://codeup.dev/national_parks.php?page=<?= $getPage-1 ?>">
      <div class="btn btn-primary">
        PREVIOUS
      </div>
    </a>

  <?php endif; ?>
  <?php if ($getPage < $pageNumber) : ?>

  <a href="http://codeup.dev/national_parks.php?page=<?= $getPage+1 ?>">
    <div class="btn btn-primary">
      NEXT
    </div>
  </a>

<?php endif; ?>


</div>
</div>




</div>

</body>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Custom JS -->

<script type="text/javascript">

// var objectArray=[];

// $("#parksForm").submit(function(event) {
//   var objectArray = $(this).serializeArray();
//   console.log(objectArray);

//   var correctCounter=0;


//   objectArray.forEach(function(element,index,array){
//     if(element.value.length==0){
//       event.preventDefault();
//       var message=element.name + " was not submitted! Park not submitted!";
//       alert(message);
//       correctCounter=0;
//     }
//   });

//   if (correctCounter==1) {
//     console.log(correctCounter);
//     console.log("In second if");
//     alert("Park submitted.")
//   };

// });


// </script>
</html>