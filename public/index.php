<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>TexBin | TeX goes in, PDF comes out</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<script src="js/jquery-1.10.0.min.js"></script>
	<script src="js/texbin.js"></script>
</head>

<body>

	<div id="content">
		<div id="header">
			TexBin - A quick and dirty web front end for pdflatex.
		</div>

		<textarea id="tex-field">\documentclass[11pt]{article}

\begin{document}

Hello, world!

\end{document}</textarea>

		<div id="control-bar">
			<button type="button" onclick="sendTeX()">PDF ME!</button>
		</div>
	</div>

	<!-- GitHub fork button -->
	<a target="_blank" href="https://github.com/jsrn/TexBin"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_left_red_aa0000.png" alt="Fork me on GitHub"></a>

</body>
</html>