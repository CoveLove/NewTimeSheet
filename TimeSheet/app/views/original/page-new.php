<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<title>Retina Dashboard</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="../../../public/css/style.css" media="all" />
	<!--[if IE]><link rel="stylesheet" href="css/ie.css" media="all" /><![endif]-->
</head>
<body>
<div class="testing">
<header class="main">
	<h1><strong>Retina</strong> Dashboard</h1>
	<input type="text" value="search" />
</header>
<section class="user">
	<div class="profile-img">
		<p><img src="images/uiface2.png" alt="" height="40" width="40" /> Welcome back John Doe</p>
	</div>
	<div class="buttons">
		<button class="ico-font">&#9206;</button>
		<span class="button dropdown">
			<a href="#">Notifications <span class="pip">4</span></a>
			<ul class="notice">
				<li>
					<hgroup>
						<h1>You have a new task</h1>
						<h2>Report web statistics week by week.</h2> 
					</hgroup>
					<p><span>14:24</span></p>
				</li>
				<li>
					<hgroup>
						<h1>New comment</h1>
						<h2>Comment on <em>About page</em> by Darren.</h2> 
					</hgroup>
					<p><span>11:04</span></p>
				</li>
				<li>
					<hgroup>
						<h1>Broken link</h1>
						<h2>We've spotted a broken link on the <em>Blog page</em>.</h2> 
					</hgroup>
					<p><span>10:46</span></p>
				</li>
				<li>
					<hgroup>
						<h1>User report</h1>
						<h2><em>Lee Grant</em> has been promoted to admin.</h2> 
					</hgroup>
					<p><span>09:57</span></p>
				</li>
			</ul>
		</span> 
		<span class="button dropdown">
			<a href="#">Inbox <span class="pip">6</span></a>
			<ul class="notice">
				<li>
					<hgroup>
						<h1>Hi, I need a favour</h1>
						<h2>John Doe</h2>
						<h3>Lorem ipsum dolor sit amet, consectetuer sed aidping putamus delo de sit felume...</h3>
					</hgroup>
					<p><span>11:24</span></p>
				</li>
				<li>
					<hgroup>
						<h1><span class="icon">&#59154;</span>Hi, I need a favour</h1>
						<h2>John Doe</h2>
						<h3>Lorem ipsum dolor sit amet, consectetuer sed aidping putamus delo de sit felume...</h3>
					</hgroup>
					<p><span>11:24</span></p>
				</li>
				<li>
					<hgroup>
						<h1><span class="icon">&#59154;</span>Hi, I need a favour</h1>
						<h2>John Doe</h2>
						<h3>Lorem ipsum dolor sit amet, consectetuer sed aidping putamus delo de sit felume...</h3>
					</hgroup>
					<p><span>11:24</span></p>
				</li>
			</ul>
		</span> 
		<span class="button">Live</span>
		 <span class="button">Help</span>
		 <span class="button blue"><a href="index.php">Logout</a></span>
	</div>
</section>
</div>
<nav>
	<ul>
		<li><a href="dashboard.php"><span class="icon">&#128711;</span> Dashboard</a></li>
		<li class="section">
			<a href="pages-table.php"><span class="icon">&#128196;</span> Pages</a>
			<ul class="submenu">
				<li><a href="page-new.php">Create page</a></li>
				<li><a href="page-timeline.php">View pages</a></li>
			</ul>	
		</li>
		<li>
			<a href="files.php"><span class="icon">&#127748;</span> Media <span class="pip">7</span></a>
			<ul class="submenu">
				<li><a href="files-upload.php">Upload file</a></li>
				<li><a href="files.php">View files</a></li>
			</ul>
		</li>
		<li>
			<a href="blog-timeline.php"><span class="icon">&#59160;</span> Blog <span class="pip">12</span></a>
			<ul class="submenu">
				<li><a href="blog-new.php">New post</a></li>
				<li><a href="blog-table.php">All posts</a></li>
				<li><a href="comments-timeline.php">View comments</a></li>
			</ul>
		</li>
		<li><a href="statistics.php"><span class="icon">&#128202;</span> Statistics</a></li>
		<li><a href="users.php"><span class="icon">&#128101;</span> Users <span class="pip">3</span></a></li>
		<li>
			<a href="ui-elements.php"><span class="icon">&#9881;</span> UI Elements</a>
			<ul class="submenu">
				<li><a href="icon-fonts.php">Icon fonts</a></li>
			</ul>
		</li>
	</ul>
</nav>
<section class="alert">
	<div class="green">	
		<p>Hi Lee, you have <a href="#">3 new pages</a> and <a href="#">16 comments</a> to approve, better get going!</p>
		<span class="close">&#10006;</span>
	</div>
</section>
<section class="content">
	<section class="widget" style="height: 400px; min-height:300px">
		<header>
			<span class="icon">&#128196;</span>
			<hgroup>
				<h1>Pages</h1>
				<h2>Create new content page</h2>
			</hgroup>
			<aside>
				<span>
					<a href="#">&#9881;</a>
					<ul class="settings-dd">
						<li><label>Option a</label><input type="checkbox" /></li>
						<li><label>Option b</label><input type="checkbox" checked="checked" /></li>
						<li><label>Option c</label><input type="checkbox" /></li>
					</ul>
				</span>
			</aside>
		</header>
		<div class="content">
			<div class="field-wrap">
				<input type="text" value="Title"/>
			</div>
			<div class="field-wrap wysiwyg-wrap">
				<textarea class="post" rows="5"></textarea>
			</div>
			<button type="submit" class="green">Post</button> <button type="submit" class="">Preview</button>
		</div>
	</section>
	<div class="widget-container">
		<section class="widget small">
			<header>
				<span class="icon">&#59168;</span>
				<hgroup>
					<h1>Latest comments</h1>
					<h2>What they're saying</h2>
				</hgroup>
				<aside>
					<span>
						<a href="#">&#9881;</a>
						<ul class="settings-dd">
							<li><label>Option a</label><input type="checkbox" /></li>
							<li><label>Option b</label><input type="checkbox" checked="checked" /></li>
							<li><label>Option c</label><input type="checkbox" /></li>
						</ul>
					</span>
				</aside>
			</header>
			<div class="content no-padding timeline">
				<div class="tl-post comments">
					<span class="icon">&#59168;</span>
					<p>
						<a href="#">John Doe says:</a> Lorem ipsum dolor sit amet, consecteteur adipiscing elit sed diam nonummy.
						<span class="reply"><input type="text" value="Respond to comment..."/></span>
					</p>
				</div>
				<div class="tl-post comments">
					<span class="icon">&#59168;</span>
					<p>
						<a href="#">John Doe says:</a> Lorem ipsum dolor sit amet, consecteteur adipiscing elit sed diam nonummy.
						<span class="reply"><input type="text" value="Respond to comment..."/></span>
					</p>
				</div>
				<span class="show-more"><a	 href="#">More</a></span>
			</div>
		</section>
		
		<section class="widget small">
			<header> 
				<span class="icon">&#128362;</span>
				<hgroup>
					<h1>Child pages</h1>
					<h2>Pages</h2>
				</hgroup>
				<aside>
					<span>
						<a href="#">&#9881;</a>
						<ul class="settings-dd">
							<li><label>Option a</label><input type="checkbox" /></li>
							<li><label>Option b</label><input type="checkbox" checked="checked" /></li>
							<li><label>Option c</label><input type="checkbox" /></li>
						</ul>
					</span>
				</aside>
			</header>
			<div class="content no-padding timeline">
				<div class="tl-post">
					<span class="icon">&#59185;</span>
					<p><a href="#">eCommerce design</a> service page.</p>
				</div>
				<div class="tl-post">
					<span class="icon">&#59185;</span>
					<p><a href="#">Search engine optimisation</a> service page..</p>
				</div>
				<div class="tl-post">
					<span class="icon">&#59185;</span>
					<p><a href="#">Website design</a> service page.</p>
				</div>
				<div class="tl-post">
					<span class="icon">&#59185;</span>
					<p><a href="#">Graphic design</a> service page.</p>
				</div>
			</div>
		</section>
	</div>
</section>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="../../../public/js/jquery.wysiwyg.js"></script>
<script src="../../../public/js/custom.js"></script>
<script src="../../../public/js/cycle.js"></script>
<script src="../../../public/js/jquery.checkbox.min.js"></script>
<!--<script src="js/flot.js"></script>
<script src="js/flot.resize.js"></script>
<script src="js/flot-graphs.js"></script>
<script src="js/flot-time.js"></script>
<script src="js/cycle.js"></script>-->
<script src="../../../public/js/jquery.tablesorter.min.js"></script>
</body>
</html>