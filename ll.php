<?php
try{
  
   $pdo=new PDO('mysql:host=172.29.160.219;dbname=ll','ymr','ymr');
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $pdo->exec('set names "utf8"');
 
   }
   catch (PDOException $e ){
           $output="连接失败".$e->getMessage();
          include 'output.html.php';
          exit();
   }

if(isset($_GET['id'])){
  try{
  $leige=(int)$_GET['nownum'];
  $length=(int)$_GET['id'];
   $sql="SELECT  the_name FROM  leige  LIMIT $leige,$length";


  $s=$pdo->prepare($sql);
  // $arr=array (
  // 	':id' =>(int)$_GET['nownum'],
  // 	  ':length'=>(int)$_GET['id']);

  //  $s->execute(0$arr);

 // $s->bindValue(1,(int)$_GET['id']);
 $s->execute();
}
catch (PDOException $e){
  $error ='Error fetching authors form the database!'.$e->getMessage();
  include 'output.html.php';
  exit();
}

foreach($s as $row){
  $texts[]=$row['the_name'];

}

$string=implode('^',$texts);
echo $string;
 }
?>