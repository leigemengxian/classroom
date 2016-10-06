<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">		
	<title></title>
	<style type="text/css">
		a{
			display: block;
		}
	</style>
	<script type="text/javascript">
	function myajaxrequest(){
		
			 if  (window.XMLHttpRequest){
				return new XMLHttpRequest();
			}
				else if (window.ActiveXObject){
				return new ActiveXObject("Msxml2.XMLHTTP");
			}
			else{
				alert('有一个错误出新了');
			}
		}
		function make_request(server_page,objId){
			var obj=document.getElementById(objId);
			
			var x=myajaxrequest();
			x.open("GET",server_page,true);
			x.onreadystatechange=function(){
              if (x.readyState==4 && x.status==200){
              	obj.innerHTML=x.responseText;
              }
			}

			x.send(null);
		}
		window.onload=function(){

		}
		</script>
</head>
<body>
<h1>作者的页面</h1>

<!-- <p><a href="?add">添加作者</a></p> -->
<div class="leige" id ="leige">

<?php foreach ($authors as $author) :?>
<!-- ?mylist&amp;id=<?php echo $author['id'];?> -->

<a href="javascript:;" onclick="make_request('list.php?mylist&amp;id=<?php echo $author['id'];?>','mengxian')" ><?php  htmlout($author['joketext']);?>
</a>


	<?php endforeach;?>
</div>
	
<div class="mengxian" id="mengxian"></div>

</body>
</html>