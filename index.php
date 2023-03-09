<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta data -->
    <meta charset="utf-8">
    <meta name="description" content="My first webpage, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Lily C">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Web page title -->
    <title>Area & Perimeter of Rectangle in PHP</title>
  </head>
  <body>
    <h1><?php echo 'Area & Perimeter of a Rectangle'; ?></h1>
    <?php 
  $length = 700;  
  $width = 500; 
  echo "<p>Length = $length cm<br>Width = $width cm</p>"; 
    ?>

    <?php 
echo "<p>The area of a rectangle with dimensions $length cm x $width cm = " . ($length * $width) . "cm<sup>2</sup></p>";
    ?>

  <!--Calculator-->
   <form method = "post">   
      Width: <input type="number" name="width">   
      <br><br>   
      Length: <input type="number" name="length"> <br><br>  
      <input type = "submit" name = "submit" value="Calculate">   
    </form>   
    
    <?php   
      if(isset($_POST['submit']))  
      {   
        $width = $_POST['width'];   
        $length = $_POST['length'];   
        $area = $width*$length;   
        echo "The area of a rectangle with a width of $width units and a length of $length units is $area units<sup>2</sup>";  
      }   
    ?>