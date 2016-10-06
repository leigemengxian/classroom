<?php

function html($text){
  return htmlspecialchars($text,ENT_QUOTES,'UTF-8');
}
function htmlout($text){
  echo html($text);
}

   
try{
  
   $pdo=new PDO('mysql:host=192.168.253.1;dbname=leige','ymr','ymr');
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $pdo->exec('set names "utf8"');
  
   }
   catch (PDOException $e ){
           $output="连接失败".$e->getMessage();
          include 'output.html.php';
          exit();
   }

if(isset($_GET['mylist'])){
  try{
    $sql='SELECT id,textlist FROM form WHERE  joketextid=:id';
    $s=$pdo->prepare($sql);
    $s->bindValue(':id',$_GET['id']);
    $s->execute();
  //$result=$pdo->query('SELECT form.id,textlist FROM form WHERE form.id=:id');

}
catch (PDOException $e){
  $error ='Error fetching authors form the database!'.$e->getMessage();
  include 'output.html.php';
  exit();
}

foreach($s as $row){
  $texts[]=array('id'=>$row['id'],'textlist'=>$row['textlist']);
}

include 'makelist.html.php';
exit();
}
  

try{
	$result=$pdo->query('SELECT id,joketext FROM list');

}
catch (PDOException $e){
	$error ='Error fetching authors form the database!'.$e->getMessage();
	include 'output.html.php';
}

foreach($result as $row){
	$authors[]=array('id'=>$row['id'],'joketext'=>$row['joketext']);
}
include 'list.html.php';