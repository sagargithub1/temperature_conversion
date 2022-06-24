
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12">
            <h3 class="text-center mt-3 head-text">Temperature Conversion</h3>
        </div>
    </div>
<div class="row">
    <div class="col-12 col-sm-6">
        <img src="images/temp.jpg" class="img-fluid mx-5 mt-3" width="50%">
    </div>
    <div class="col-12 col-sm-6 form">

        <form action="index.php" method="POST">
            Input here: <input class="input" type="text" name="number" placeholder="Enter the value here!">

              <div class="selection mt-4" >
                  <h6 class="mb-4">Select the unit of value</h6>
                   <label>Celsius</label>
                   <input type="radio" name="units" value="cel">

                   <label>Fahrenheit</label>
                   <input type="radio" name="units" value="feh">
              </div>

              <input type="submit" name="submit" value="Convert Now" class="btn btn-primary mt-3">
        </form>

    </div>
</div>
</div>
    
<?php 

if(isset($_POST['submit'])){
    $num = $_POST['number'];
    $temp = $_POST['units'];

    if($temp == "cel"){
        $result = $num * 9 / 5 + 32;
        echo "<script>alert('The Celsius value is converted into $result Fahrenheit');</script> ";
    }else{
        $result = ($num - 32) * 5 / 9;
        echo "<script>alert('the Fahrenheit value is converted into $result Celsius');</script> ";
    }
}

?>


</body>
</html>