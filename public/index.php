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
			TexBin - A quick and dirty web front end for pdflatex. Lets you do a a few neat things like submit a template with an array of variables, like a giant sprintf. An excellent resource on LaTeX is available <a href="http://en.wikibooks.org/wiki/LaTeX/">here</a>.
			<br>
			<b>Disclaimer:</b> I'm still evaluating the risks of hosting a LaTeX evaluator on a public server (preliminary reading suggests moderate), but this idea seems pretty cool for group use in private!
		</div>

		<textarea id="tex-field" class="shadow-border">\documentclass[11pt]{article}

\begin{document}

Hello, world!

\end{document}</textarea>

		<div id="control-bar">
			<button type="button" onclick="sendTeX()">PDF ME!</button>

			<button id="var-rep-button" type="button" onclick="toggleVarReplacement()">VAR REP: OFF</button>
		</div>

		<div id="replacement-fields">
			<input placeholder="Variable 1" class="shadow-border">
			<input placeholder="Value 1"class="shadow-border"><br>

			<input placeholder="Variable 2"class="shadow-border">
			<input placeholder="Value 2"class="shadow-border"><br>
			
			<input placeholder="Variable 3"class="shadow-border">
			<input placeholder="Value 3"class="shadow-border"><br>
			
			<input placeholder="Variable 4"class="shadow-border">
			<input placeholder="Value 4"class="shadow-border"><br>
			
			<input placeholder="Variable 5"class="shadow-border">
			<input placeholder="Value 5"class="shadow-border"><br>
		</div>
	</div>

	<form id="post-form" method="POST" action="texbin.php" target="_blank">
		<textarea id="post-tex" name="tex"></textarea>
		<input id="post-repl" name="repl">
		<input type="submit" value="Send">
	</form>

	<!-- GitHub fork button -->
	<a target="_blank" href="https://github.com/jsrn/TexBin"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_left_red_aa0000.png" alt="Fork me on GitHub"></a>

</body>
</html>