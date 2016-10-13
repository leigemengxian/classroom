<!DOCTYPE html>
<html>
<head>
	<title>总的数量</title>
</head>
<body>
<div class="mengxian" id="mengxian"></div>
<button  onclick ="page('mengxian')" > 下一页</button>
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
              function mengxian (){
                      var mm=x.responseText;
                  var ll = mm.split("^");
                  var result="";
                  for (var i=0;i<ll.length;i++){
                      result+="<h1>"+ll[i]+"</h1>";

                  }
                   return result;
                 	}
              var leige=mengxian();
             obj.innerHTML=leige;
      
              }
			}

			x.send(null);
		}
		
	
	var length=2;
	var nownum=1;
	function number(){
		//console.log(nownum);
		nownum=nownum+ length;
		
	}

	function page(obj){
		number();
		var leige='ll.php?nownum='+nownum+'&id='+length;
		console.log(leige);
		make_request(leige,obj);
	}

window.onload=function(){
     page ('mengxian');
		}


</script>
</body>
</html>