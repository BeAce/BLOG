<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>关于我</title>
	<!--告诉IE 使用最新的渲染模式-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#ddd">
<!--nav start-->
	<div class="navbar navbar-inverse  navbar-fixed-top site-navbar" role="navigation">
	  <div class="container">
		  <div class="navbar-header">
		     　<!-- .navbar-toggle样式用于toggle收缩的内容，即nav-collapse collapse样式所在元素 -->
		       <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-responsive-collapse">
		         <span class="sr-only">Toggle Navigation</span>
		         <span class="icon-bar"></span>
		         <span class="icon-bar"></span>
		         <span class="icon-bar"></span>
		       </button>
		       <!-- 确保无论是宽屏还是窄屏，navbar-brand都显示 -->
		       <a href="index.php" class="navbar-brand">BeAce's blog</a>
		  </div>
		  <!-- 屏幕宽度小于768px时，div.navbar-responsive-collapse容器里的内容都会隐藏，显示icon-bar图标，当点击icon-bar图标时，再展开。屏幕大于768px时，默认显示。 -->
		  <div class="collapse navbar-collapse navbar-responsive-collapse">
		    	<ul class="nav navbar-nav">
		      		<li><a href="index.php">首页</a></li>
		      		<li><a href="article.list.php">文章</a></li>
		      		<li class="active"><a href="aboutme.php">关于我</a></li>
		      		<li><a href="contactme.php">联系我</a></li>
			 	</ul>
				<form action="article.search.php" class="navbar-form navbar-right" role="text">
				    <div class="form-group">
				      <input type="text" name="key" class="form-control input-sm" placeholder="请输入关键词搜索相关文章">
				    </div>
		    		<button class="btn btn-default btn-sm" type="submit">搜索</button>
				</form>
				   
		  </div>
	  </div>
	</div>
	<!--nav end-->	
	<!--body start-->
	<div class="container" style="margin-top:20px;max-width:800px;min-height:300px">
		<div class="panel panel-default panel">
			<div class="panel-heading">About Me</div>
			<div class="panel-body">
			
				<div class="media">
					<div class="media-left">
						<a href="javascript:;"><img class="media-object" src="images/myself.jpg"></a>
					</div>
					<div class="media-body" style="font-family:'Microsoft Yahei'">
						<h4 class="media-heading h4">作者：<span class="lead">BeAce</span></h4>
						<p>我是上海某大学的一名计算机专业的学生，嵌入式专业方向，但是我热爱前端开发，在前端的有关知识的学习——<code>html5</code>、<code>javascript</code>、<code>bootstrap</code>、<code>node.js</code>等花费了大量的时间和精力。</p>
						<p>是奋战在前端前线的一名忠实战士！</p>
						<p>如果你中意我的网站，so let't fighting!</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--body end-->
	<!--footer start-->
	<div class="footer">
		<div class="container text-center">
			<p>@CopyRight By Lee</p>
			<p class="lead">2015-08-14</p>
		</div>
	</div>
	<!--footer end-->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>