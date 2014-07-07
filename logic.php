<?php

// 

#File containing words
$fileword = 'corncob_lowercase.txt';

#List of symbols to be used in password
$symbol[1] = '@';
$symbol[2] = '#';
$symbol[3] = '$';
$symbol[4] = '%';
$symbol[5] = '*';
$total_symbols = count($symbol);

#Reads words from file and create array
$j=1;
$wordrep = fopen($fileword, "r");
while (!feof($wordrep)) {
   $word[$j] = fgets($wordrep);
   $j++;
   }
fclose($wordrep);

$total_words = count($word);

#Gets words from array, i.e., generates password 
$k = 1;
for ($i = 1; $i <= $_POST['numwords']; $i++){
    $pass[$k]= $word[rand(1,$total_words)]; 
    $k++;
}

#Make password's first character uppercase if option is set
if(isset($_POST['uppercase'])){
      $pass[1] = ucfirst($pass[1]);
}

#Adds number if option is set
if(isset($_POST['number'])){
   $pass[1] = strval(rand(0,20)) . $pass[1]; 
}

#Adds symbol if option is set
if(isset($_POST['symbol'])){
     $pass[1] = $symbol[(rand(1,$total_symbols))] . $pass[1];
}


