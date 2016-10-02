


<?php

if (isset($_GET['addjoke'])){
   	include 'insert.html.php';
   	exit();
   }

try{
  
   $pdo=new PDO('mysql:host=192.168.253.1;dbname=myjob','ymr','ymr');
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $pdo->exec('set names "utf8"');
  
   }
   catch (PDOException $e ){
           $output="连接失败".$e->getMessage();
          include 'output.html.php';
          exit();
   }
  
// try{
// 	$sql="CREATE TABLE  joke (
// 	   id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
// 	    joketext TEXT,
// 	   jokedate DATE NOT NULL)DEFAULT CHARACTER SET utf8 ENGINE=InnoDB";
// 	$pdo ->exec($sql);
	
// }
// catch (PDOException $e){
// 	$output="创建数据表失败".$e->getMessage();
// 	include 'output.html.php';
// 	exit();
// }
if (isset($_POST['joketext'])){
	try{
		$sql='INSERT INTO joke SET
			joketext=:joketext,
			jokedate=CURDATE()';
			$s=$pdo->prepare($sql);
			$s->bindValue(':joketext',$_POST['joketext']);
			$s->execute();
	}

catch (PDOException $e){
	$output='对不起，插入失败'.$e->getMessage();
	include 'output.html.php';
	exit();
}
header('Location:.');
exit();
}

if (isset($_GET['deletejoke'])){
	try{
		$sql='DELETE FROM joke WHERE id=:id';
		$s=$pdo->prepare($sql);
		$s->bindValue(':id',$_POST['id']);
		$s->execute();
	}
	catch(PDOException $e){
		$error ='对不起， 删除失败'.$e->getMessage();
		include 'output.html.php';
		exit();
	}
	header('Location:.');
	exit();
}


try {
	$sql='SELECT id,joketext FROM joke';
	$result=$pdo->query($sql);
}
catch (PDOException $e){
	$output='对不起，查询失败'.$e->getMessage();
	include 'output.hmtl.php';
	exit();
}

  while ($row=$result->fetch()){
  	$jokes[]=array('id'=>$row['id'],'text'=>$row['joketext']);

  }
  
   include 'jokes.html.php';
?>


