<!DOCTYPE html>
<html>
<head>
	<title>内容列表</title>
	<style type="text/css">	
	@keyframes myfirst
{
from {top: -10px;background-color: rgba(100,200,300,0);}
to {top: -90px;background-color: rgba(100,200,300,0.4);}
}

@-moz-keyframes myfirst 
{
from {top: -10px;background-color: rgba(100,200,300,0);}
to {top: -90px;background-color: rgba(100,200,300,0.4);}
}

@-webkit-keyframes myfirst
{
from {top: -10px;background-color: rgba(100,200,300,0);}
to {top: -90px;background-color: rgba(100,200,300,0.4);}
}

@-o-keyframes myfirst 
{
from {top: -10px;background-color: rgba(100,200,300,0);}
to {top: -90px;background-color: rgba(100,200,300,0.4);}
}
	*{
		padding:0px;
		margin: 0px;
	}
ul li {
	display: inline-block;
	float:left;
	width:440px;
	height:400px;
    position: relative;
}
figure{
	position: absolute;
	width:400px;
	height:400px;
   overflow: hidden;
}
.img{
	width:400px;
	height:360px;
}
.img-l{
	width:400px;
	height:360px;
}
.word{
	z-index: 100;
	position: relative;
	width:100%;
	background-color: rgba(100,200,300,0.4);
 display: none;
  top:100px;
animation:myfirst 1s;
-moz-animation:myfirst 1s; /* Firefox */
-webkit-animation:myfirst 1s; /* Safari and Chrome */
-o-animation:myfirst 1s; /* Opera */
}
	


figure:hover .word{
	top:-90px;
display: block;
	
}

	</style>
	

</head>
<body>




<ul>
	<li>
	<figure>
		<div class="img"><img src="img/1.jpg" class="img-l"></div>
		<div class="word">
			<h1>图片的第一张</h1>
			<p>这是一个很美丽很美丽的图片，我们真的深深的喜欢上了这个图片，很难很难忘记他的</p>
			<a href="#" class="link">查看全文</a>
		</div>
		</figure>
	</li>
	<li>
	<figure><div class="img"><img src="img/2.jpg" class="img-l"></div>
		<div class="word">
			<h1>图片的第二张</h1>
			<p>这是一个很美丽很美丽的图片，我们真的深深的喜欢上了这个图片，很难很难忘记他的</p>
			<a href="#" class="link">查看全文</a>
		</div>
		</figure>
	</li>
	<li><figure><div class="img"><img src="img/3.jpg" class="img-l"></div>
		<div class="word">
			<h1>图片的第三张</h1>
			<p>这是一个很美丽很美丽的图片，我们真的深深的喜欢上了这个图片，很难很难忘记他的</p>
			<a href="#" class="link">查看全文</a>
		</div>
		</figure>
	</li>
	<li><figure><div class="img"><img src="img/4.jpg" class="img-l"></div>
		<div class="word">
			<h1>图片的第四张</h1>
			<p>这是一个很美丽很美丽的图片，我们真的深深的喜欢上了这个图片，很难很难忘记他的</p>
			<a href="#" class="link">查看全文</a>
		</div>
		</figure>
	</li>
	
</ul>

</body>
</html>