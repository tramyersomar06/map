<!DOCTYPE html>
<html>
<head>
	<title>About</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="design/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="design/css/mydesign.css">

	<style type = "text/css">
	body{

		background-image:url("HTML/pexels-photo-1046397.jpeg");
		background-size: cover;
		background-attachment: fixed;
	}
	.content{
		background: white;
		width: 50%;
		padding: 40px;
		margin: 100px auto;
		font-family: calibri;
	}
	p{
		font-size: 25px;
		color: black;
	}
	</style>

</head>
<body>
<?php include 'header.php'; ?>
	<div class ="content">
		<p>Curious which components explicitly require jQuery, our JS, and Popper.js? Click the show components link below. If you’re at all unsure about the general page structure, keep reading for an example page template.

Our bootstrap.bundle.js and bootstrap.bundle.min.js include Popper, but not jQuery. For more information about what’s included in Bootstrap, please see our contents section.

Show components requiring JavaScript
Starter template
Be sure to have your pages set up with the latest design and development standards. That means using an HTML5 doctype and including a viewport meta tag for proper responsive behaviors. Put it all together and your pages should look like this:

Copy


That’s all you need for overall page requirements. Visit the Layout docs or our official examples to start laying out your site’s content and components.

Important globals
Bootstrap employs a handful of important global styles and settings that you’ll need to be aware of when using it, all of which are almost exclusively geared towards the normalization of cross browser styles. Let’s dive in.

HTML5 doctype
Bootstrap requires the use of the HTML5 doctype. Without it, you’ll see some funky incomplete styling, but including it shouldn’t cause any considerable hiccups.

Copy
<
Responsive meta tag
Bootstrap is developed mobile first, a strategy in which we optimize code for mobile devices first and then scale up components as necessary using CSS media queries. To ensure proper rendering and touch zooming for all devices, add the responsive viewport meta tag to your </p>
	</div>
	
</body>
</html>