<?php 
	require_once('connect.php');
	$key = $_GET['key'];
	$sql = "select * from articles where title like '%$key%' order by dateline desc";
	$query = mysql_query($sql);
	if($query&&mysql_num_rows($query)){
		while($row = mysql_fetch_assoc($query)){
			$data[] = $row;
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--告诉IE 使用最新的渲染模式-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>查找文章结果</title>
</head>
<body style="background-color:#ddd;">
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
		      		<li class="active"><a href="article.list.php">文章</a></li>
		      		<li><a href="aboutme.php">关于我</a></li>
		      		<li><a href="contactme.php">联系我</a></li>
			 	</ul>
				<form action="article.search.php" class="navbar-form navbar-right" role="text">
				    <div class="form-group">
				      <input type="text" name="key" class="form-control input-sm" placeholder="请输入关键词">
				    </div>
		    		<button class="btn btn-default btn-sm" type="submit">搜索</button>
				</form>
				   
		  </div>
	  </div>
	</div>
	<!--nav end-->	
	
<!--body start-->
<div class="container" style="margin-top:10px;">
	<?php
		if(empty($data)){
			echo "<p class='lead text-center'>当前没有文章，请联系管理员！<p>";
		}else{
			foreach($data as $value){
				// echo "<script>console.log($value);</script>";
			
	?>
	<div class="panel panel-default panel-info panel-hover" style="margin:10px;">
		<div class="panel-heading">
			<div class="media">
				<a href="#" class="pull-left">
					<img class="img-responsive img-rounded" src="images/myself.jpg" alt="作者">
				</a>
				<div class="media-body">
					<h4 class="media-heading lead"><?php echo $value['title']?></h4>
					<div style="font-family:'Microsoft Yahei'"><?php echo $value['description']?></div>
					
				</div> 
			
			</div>
		</div>
		<!--<div class="panel-body">
			<p>详细讲解了选择器、边框、背景、文本、颜色、盒模型、伸</p>
			
		</div>-->
		
		<div class="panel-footer">
			
			<i class="pull-left">标签：<code>bootstrap</code></i>
			<a href="article.show.php?id=<?php echo $value['id']?>" class="pull-right btn btn-default btn-sm btn-primary">查看所有内容 》</a>
			<div style="clear:both"></div>
		</div>
		
	</div>
	<?php
		}
	}
	?>
	


	
		
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