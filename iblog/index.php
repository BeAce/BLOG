<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--告诉IE 使用最新的渲染模式-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>BeAce's blog</title>
</head>
<body>
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
		      		<li class="active"><a href="index.php">首页</a></li>
		      		<li><a href="article.list.php">文章</a></li>
		      		<li><a href="aboutme.php">关于我</a></li>
		      		<li><a href="contactme.php">联系我</a></li>
			 	</ul>
				<!--<form action="article.search.php" class="navbar-form navbar-right" role="text">
				    <div class="form-group">
				      <input type="text" name="key" class="form-control input-sm" placeholder="请输入关键词">
				    </div>
		    		<button class="btn btn-default btn-sm" type="submit">搜索</button>
				</form>-->
				   
		  </div>
	  </div>
	</div>
	<!--nav end-->	
	<!--header start-->
	<div class="jumbotron text-center text-danger">
		<p class="lead">Sam Lee的博客</p>
		<h1 class="h1">BeAce'S BLOG</h1>
		<p class="lead">跟随BeAce一起开发前端吧！</p>
		<a href="article.list.php" class="btn btn-default btn-primary btn-lg">开始开发</a>	
	</div>
	<!--header end-->
	
	<!--body start-->
	<!--<div class="container text-center">
		<div class="row">
			<div class="col-md-4">
				<div class="h2">HTML5</div>
				<blockquote>
				  <p>有关HTML5的自我理解。</p>
				  <footer>ME<cite title="Source Title">HTML5</cite></footer>
				</blockquote>
			</div>
			<div class="col-md-4">
				<div class="h2">CSS3</div>
				<blockquote>
				  <p>有关HTML5的自我理解。</p>
				  <footer>ME<cite title="Source Title">CSS3</cite></footer>
				</blockquote>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="h2">JAVASCRIPT</div>
				<blockquote>
				  <p>有关HTML5的自我理解。</p>
				  <footer>ME<cite title="Source Title">JAVASCRIPT</cite></footer>
				</blockquote>
			</div>
			<div class="col-md-4">
				<div class="h2">BOOTSTRAPT</div>
				<blockquote>
				  <p>有关HTML5的自我理解。</p>
				  <footer>ME<cite title="Source Title">BOOTSTRAPT</cite></footer>
				</blockquote>
			</div>
		</div>
	</div>-->
	<!--body end-->
<!--body start-->
<div class="container text-center">
    <div class="row">
		<div class="col-xs-6 col-md-3">
			<a href="#" class="thumbnail">
				<img alt="100%x180" src="images/playbootstrap.png" style="height: 200px; width: 100%; display: block;" >
			</a>
      		<h3>Bootstrap心得</h3>
       	 	<p>Bootstrap...</p>
		</div>
		<div class="col-xs-6 col-md-3">
			<a href="#" class="thumbnail">
				<img alt="100%x180" src="images/html5.jpg" style="height: 200px; width: 100%; display: block;">
			</a>
	       <div class="caption">
		        <h3>HTML5心得</h3>
		        <p>HTML5...</p>
	       </div>
		</div>
		<div class="col-xs-6 col-md-3">
			<a href="#" class="thumbnail">
				<img alt="100%x180" src="images/css3.png" style="height: 200px; width: 100%; display: block;">
			</a>
	      	<h3>CSS3心得</h3>
	        <p>CSS3...</p>
		</div>
		<div class="col-xs-6 col-md-3">
			<a href="#" class="thumbnail">
				<img alt="100%x180" src="images/javascript.png" style="height: 200px; width: 100%; display: block;">
			</a>
	      	<h3>JAVASCRIPT心得</h3>
	        <p>JAVASCRIPT...</p>
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