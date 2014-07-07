<!DOCTYPE html>
<html lang=“en”>
<head>
 	<title>Eliane Valenca Nascimento De Lorenci - P2 - xkcd password generator 
        </title>

	<meta charset='utf-8'/>
        
        <?php require 'logic.php'; ?>

	<link rel="stylesheet" type="text/css" href="style.css">
        
</head>
<body>

   <div class="open">
       <h1> Password generator</h1>
       <h2> Generates passwords of random  words </h2>
       <p>(<a href="http://xkcd.com/936/" target="_blank">xkcd</a> inspired)</p>
    
   </div>

   <hr>

   <div class="inputs">    
	<form action='index.php' method='POST'>
		
 		Number of words: <input type='text' name='numwords' size='2' 				maxlength="1"> (max 9)<br>
                <br>
		<input type="checkbox" name="number" value="true">Add a number<br>
		<input type="checkbox" name="symbol" value="true">Add a symbol<br>
  		<input type="checkbox" name="uppercase" value="true">Make first character 			uppercase<br>
		<br>
		<input id='submit' type='submit' value='Generate password'><br>
        </form>
   </div>

<br>

<div class="showpassbox">
<?php
foreach ($pass as $value) {
   echo $value . " " ;
}
?>
</div>


 	 
</body>
</html>
