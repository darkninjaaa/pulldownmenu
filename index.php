
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<link rel="stylesheet" type="text/css" href="menu.css"; />
	<style type="text/css" media="screen">
		html,
		body {
			margin: 0;
			height: 100%;
			font-family: "맑은 고딕", "Malgun Gothic", "나눔고딕", "NanumGothic", "굴림", "Gulim", "Tahoma", "Verdana", "sans-serif";
		}

		.clearfix:before {
			content: " ";
			display: table;
		}

		.clearfix:after {
			content: " "; /* Older browser do not support empty content */
			display: table;
			clear: both;
		}

		.clearfix8:after { /* if you don't require IE...8 support, the following is fine too: */
			content: "";
			display: table;
			clear: both;
		}
	</style>

</head>

<body>
	<div class="nav clearfix">
		<div id="nav-button" class="nav-button">nav button</div>
		<ul id="nav-ul" class="nav-ul submenu">
			<li><a href="/" hyperlink="true" target_blank="true"><span>Home</span></a></li>
			</li>	
			<li><a><span class="hassubmenu">php</span></a>
				<ul class="submenu">
					<li><a href="file"><span>File</span></a></li>
					<li><a href="image"><span>Image</span></a></li>
					<li><a href="json"><span>Json</span></a></li>
				</ul>
			</li>	
			<li><a><span class="hassubmenu">BLOG</span></a>
				<ul class="submenu">
					<li><a><span>HTML</span></a></li>
					<li class="dropright"><a><span class="hassub">Design</span></a>
						<ul>
							<li><a><span>HTML</span></a></li>
							<li><a><span>CSS</span></a></li>
							<li class="dropright"><a><span class="hassub">Design</span></a>
								<ul>
									<li><a><span>Design</span></a></li>
									<li class="dropright"><a><span class="hassub">HTML</span></a>
										<ul>
											<li class="dropright"><a><span class="hassub">ul class="submenu"</span></a>
												<ul>
													<li><a><span>who am i</span></a>
													<li><a><span>who are u</span></a>
													<li><a><span>who is dog</span></a>
												</ul>
											</li>
											<li><a><span>li class="dropright"</span></a></li>
											<li><a><span>span class="hassub"</span></a></li>
										</ul>
									</li>
									<li><a><span>CSS</span></a></li>
									<li><a><span>JavaScript</span></a></li>
								</ul>
							</li>
							<li><a><span>JavaScript</span></a></li>
						</ul>
					</li>
					<li><a><span>CSS</span></a></li>
					<li><a><span>JavaScript</span></a></li>
				</ul>
			</li>
			<li><a><span class="hassubmenu">Work</span></a>
				<ul class="submenu">
					<li><a><span>Web Design</span></a></li>
					<li><a><span>Typography</span></a></li>
					<li><a><span>Front-End</span></a></li>
				</ul>
			</li>
			<li><a><span class="hassubmenu">Etc</span></a>
				<ul class="submenu">
					<div class="menucolumns"> 
						<div class="menucolumn-12 clearfix">
							<div class="menucol-12 menucol highlighted">
								<div class="menucol-inner"> 
									Tomatoes
								</div>	
							</div>
							<div class="menucol-3 menucol">
								<div class="menucol-inner"> 
									<h5>abc</h5>
									<ul>
										<li><a target="_blank" href="https://www.youtube.com/results?search_query=grafting+tree">grafting tree</a></li>
									</ul>
								</div>	
							</div>
							<div class="menucol-3 menucol">
								<div class="menucol-inner"> 
									<h5>def</h5>
									<ul>
										<li><a>Apple</a></li>
									</ul>
								</div>	
							</div>
							<div class="menucol-3 menucol">
								<div class="menucol-inner"> 
									<h5>ghi</h5>
									<ul>
										<li><a>Banana</a></li>
									</ul>
								</div>	
							</div>
							<div class="menucol-3 menucol">
								<div class="menucol-inner"> 
									<h5>zzz</h5>
									<ul>
										<li><a>Grape</a></li>
									</ul>
								</div>	
							</div>
						</div>	
					</div>	
				</ul>	
			</li>
			<li><a><span>About</span></a></li>
			<div class="menu_right">
				who am i ?
			</div>
		</ul>
	</div>

	<script type="text/javascript" src="menu.js"></script>
	<script>
        let menu = new Menu({ 
			nav_button : "nav-button",
			nav_ul : "nav-ul"
		});
	</script>

</body>

</html>
