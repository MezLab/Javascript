<?php
$src = $_GET['url'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Massimo Maestri | ResizeMez</title>
<meta name="" content="">
<meta name="description" content="Responsive Device di Massimo Maestri">
<meta name="keywords" content="ResizeMez">
<meta charset="iso-8859-7">
<!-- Favicon -->
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="favicomatic/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicomatic/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicomatic/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="favicomatic/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="favicomatic/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="favicomatic/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="favicomatic/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="favicomatic/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="favicomatic/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="favicomatic/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="favicomatic/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="favicomatic/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="favicomatic/favicon-128.png" sizes="128x128" />
<meta name="application-name" content="&nbsp;"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="favicomatic/mstile-144x144.png" />
<meta name="msapplication-square70x70logo" content="favicomatic/mstile-70x70.png" />
<meta name="msapplication-square150x150logo" content="favicomatic/mstile-150x150.png" />
<meta name="msapplication-wide310x150logo" content="favicomatic/mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="favicomatic/mstile-310x310.png" />
<!-- Style -->
<link rel="stylesheet" href="style.css">
</head>

<body class="bY_device">
<div class="row row-full">
	<div class="side_wrap">
		<div class="side">
			<div class="large-2 medium-2 small-12 columns">
				<a href="index.html">
					<img src="media/ResizeMez.png" alt="">
					<h3 style="float:right;">Resize<span>Mez</span></h3>
				</a>
			</div>
			<div class="large-1 medium-1 small-12 columns">
				<p>&nbsp;</p>
			</div>
			<div class="large-5 medium-5 small-12 columns">
				<form class="" action="responsive.php" method="GET">
					<input id="url" type="url" name="url" placeholder="" value="<?php echo $src ?>">
				</form>
			</div>
			<div class="selectIco large-4 medium-4 small-12 columns">
				<i class="fas fa-mobile-alt fa-2x"></i>
				<i class="fas fa-tablet-alt fa-2x"></i>
				<i class="fas fa-laptop fa-2x"></i>
			</div>
		</div>
	</div>
  <section class="tech">
		<div id="icoPhone" class="devicePhone">
			<table>
				<tr>
					<th>
						<h1>Mobile</h1>
					</th>
				</tr>
				<tr>
					<td>
					<a href="javascript:resizeMez(320,480)"><i class="fas fa-mobile-alt fa-2x"></i></a>
					</td>
					<td>
						<p>Apple</p>
					</td>
					<td>
						<p>iPhone 3/4/4s</p>
					</td>
					<td>
						<p>320px</p>
					</td>
					<td>
						<p>480px</p>
					</td>
				</tr>
				<tr>
					<td>
					<a href="javascript:resizeMez(320,568)"><i class="fas fa-mobile-alt fa-2x"></i></a>
					</td>
					<td>
						<p>Apple</p>
					</td>
					<td>
						<p>iPhone 5/5s</p>
					</td>
					<td>
						<p>320px</p>
					</td>
					<td>
						<p>568px</p>
					</td>
				</tr>
				<tr>
					<td>
					<a href="javascript:resizeMez(375,480)"><i class="fas fa-mobile-alt fa-2x"></i></a>
					</td>
					<td>
						<p>Apple</p>
					</td>
					<td>
						<p>iPhone 6/6s/7</p>
					</td>
					<td>
						<p>375px</p>
					</td>
					<td>
						<p>480px</p>
					</td>
				</tr>
				<tr>
					<td>
					<a href="javascript:resizeMez(414,736)"><i class="fas fa-mobile-alt fa-2x"></i></a>
					</td>
					<td>
						<p>Apple</p>
					</td>
					<td>
						<p>iPhone 6s Plus/7 Plus</p>
					</td>
					<td>
						<p>414px</p>
					</td>
					<td>
						<p>736px</p>
					</td>
				</tr>
				<tr>
					<td>
					<a href="javascript:resizeMez(360,640)"><i class="fas fa-mobile-alt fa-2x"></i></a>
					</td>
					<td>
						<p>Samsung</p>
					</td>
					<td>
						<p>Galaxy S5/S6/S7</p>
					</td>
					<td>
						<p>360px</p>
					</td>
					<td>
						<p>640px</p>
					</td>
				</tr>
				<tr>
					<td>
					<a href="javascript:resizeMez(411,731)"><i class="fas fa-mobile-alt fa-2x"></i></a>
					</td>
					<td>
						<p>Google</p>
					</td>
					<td>
						<p>Pixel</p>
					</td>
					<td>
						<p>411px</p>
					</td>
					<td>
						<p>731px</p>
					</td>
				</tr>
				<tr>
					<td>
					<a href="javascript:resizeMez(384,640)"><i class="fas fa-mobile-alt fa-2x"></i></a>
					</td>
					<td>
						<p>Google</p>
					</td>
					<td>
						<p>Nexus 4</p>
					</td>
					<td>
						<p>384px</p>
					</td>
					<td>
						<p>640px</p>
					</td>
				</tr>
				<tr>
					<td>
					<a href="javascript:resizeMez(411,731)"><i class="fas fa-mobile-alt fa-2x"></i></a>
					</td>
					<td>
						<p>Google</p>
					</td>
					<td>
						<p>Nexus 5</p>
					</td>
					<td>
						<p>411px</p>
					</td>
					<td>
						<p>731px</p>
					</td>
				</tr>
			</table>
		</div>
		<div id="icoTablet" class="deviceTablet">
			<table>
				<tr>
					<th>
						<h1>Tablet</h1>
					</th>
				<tr>
					<td>
					<a href="javascript:resizeMez(768,1024)"><i class="fas fa-tablet-alt fa-2x"></i></a>
					</td>
					<td>
						<p>Apple</p>
					</td>
					<td>
						<p>iPad Mini/Air</p>
					</td>
					<td>
						<p>768px</p>
					</td>
					<td>
						<p>1024px</p>
					</td>
				</tr>
				<tr>
					<td>
					<a href="javascript:resizeMez(1024,1366)"><i class="fas fa-tablet-alt fa-2x"></i></a>
					</td>
					<td>
						<p>Apple</p>
					</td>
					<td>
						<p>iPad Pro</p>
					</td>
					<td>
						<p>1024px</p>
					</td>
					<td>
						<p>1366px</p>
					</td>
				</tr>
				<tr>
					<td>
					<a href="javascript:resizeMez(600,960)"><i class="fas fa-tablet-alt fa-2x"></i></a>
					</td>
					<td>
						<p>Google</p>
					</td>
					<td>
						<p>Nexus 7</p>
					</td>
					<td>
						<p>600px</p>
					</td>
					<td>
						<p>960px</p>
					</td>
				</tr>
				<tr>
					<td>
					<a href="javascript:resizeMez(1024,768)"><i class="fas fa-tablet-alt fa-2x"></i></a>
					</td>
					<td>
						<p>Google</p>
					</td>
					<td>
						<p>Nexus 9</p>
					</td>
					<td>
						<p>1024px</p>
					</td>
					<td>
						<p>768px</p>
					</td>
				</tr>
				<tr>
					<td>
					<a href="javascript:resizeMez(800,1280)"><i class="fas fa-tablet-alt fa-2x"></i></a>
					</td>
					<td>
						<p>Samsung</p>
					</td>
					<td>
						<p>Galaxy Tab 10</p>
					</td>
					<td>
						<p>800px</p>
					</td>
					<td>
						<p>1280px</p>
					</td>
				</tr>
				<tr>
					<td>
					<a href="javascript:resizeMez(768,1024)"><i class="fas fa-tablet-alt fa-2x"></i></a>
					</td>
					<td>
						<p>Amazon</p>
					</td>
					<td>
						<p>Kindle Fire HD 7</p>
					</td>
					<td>
						<p>768px</p>
					</td>
					<td>
						<p>1024px</p>
					</td>
				</tr>
				<tr>
					<td>
					<a href="javascript:resizeMez(720,1024)"><i class="fas fa-tablet-alt fa-2x"></i></a>
					</td>
					<td>
						<p>Microsoft</p>
					</td>
					<td>
						<p>Surface Pro</p>
					</td>
					<td>
						<p>720px</p>
					</td>
					<td>
						<p>1024px</p>
					</td>
				</tr>
			</table>
		</div>
		<div id="icoLaptop" class="deviceLaptop">
			<table>
				<tr>
					<th>
						<h1>Laptop</h1>
					</th>
				</tr>
					<td>
					<a href="javascript:resizeMez(1024,640)"><i class="fas fa-laptop fa-2x"></i></a>
					</td>
					<td>
						<p>Apple</p>
					</td>
					<td>
						<p>Mac Book </p>
					</td>
					<td>
						<p>1024px</p>
					</td>
					<td>
						<p>640px</p>
					</td>
				</tr>
				<tr>
					<td>
					<a href="javascript:resizeMez(1280,800)"><i class="fas fa-laptop fa-2x"></i></a>
					</td>
					<td>
						<p>Apple</p>
					</td>
					<td>
						<p>Mac Book Air</p>
					</td>
					<td>
						<p>1280px</p>
					</td>
					<td>
						<p>800px</p>
					</td>
				</tr>
				<tr>
					<td>
					<a href="javascript:resizeMez(1440,900)"><i class="fas fa-laptop fa-2x"></i></a>
					</td>
					<td>
						<p>Apple</p>
					</td>
					<td>
						<p>Mac Book Pro</p>
					</td>
					<td>
						<p>1440px</p>
					</td>
					<td>
						<p>900px</p>
					</td>
				</tr>
				<tr>
					<td>
					<a href="javascript:resizeMez(1366,768)"><i class="fas fa-laptop fa-2x"></i></a>
					</td>
					<td>
						<p>Lenovo</p>
					</td>
					<td>
						<p>Thinkpad x230</p>
					</td>
					<td>
						<p>1366px</p>
					</td>
					<td>
						<p>768px</p>
					</td>
				</tr>
				<tr>
					<td>
					<a href="javascript:resizeMez(1366,768)"><i class="fas fa-laptop fa-2x"></i></a>
					</td>
					<td>
						<p>Samsung</p>
					</td>
					<td>
						<p>Chromebook</p>
					</td>
					<td>
						<p>1366px</p>
					</td>
					<td>
						<p>768px</p>
					</td>
				</tr>
				<tr>
					<td>
					<a href="javascript:resizeMez(1366,768)"><i class="fas fa-laptop fa-2x"></i></a>
					</td>
					<td>
						<p>Samsung</p>
					</td>
					<td>
						<p>Notebook</p>
					</td>
					<td>
						<p>1366px</p>
					</td>
					<td>
						<p>768px</p>
					</td>
				</tr>
				<tr>
					<td>
					<a href="javascript:resizeMez(1366,768)"><i class="fas fa-laptop fa-2x"></i></a>
					</td>
					<td>
						<p>HP</p>
					</td>
					<td>
						<p>Pavillon</p>
					</td>
					<td>
						<p>1366px</p>
					</td>
					<td>
						<p>768px</p>
					</td>
				</tr>
			</table>
		</div>
    <div class="large-12 medium-12 small-12 columns">
			<!-- Phone -->
      <div class="device">
        <iframe id="window" class="phone" src="<?php echo $src ?>" width="375" height="667"></iframe>
      </div>
    </div>
  </section>
</div>
<script src="library/js/resizeMez.js"></script>
</body>
</html>
