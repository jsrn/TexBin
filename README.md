TexBin
======

A web front end for pdflatex. Can be accessed either via the web interface, or by posting directly to texbin.php.

<img src="https://dl.dropboxusercontent.com/u/11252267/Images/TexBin/TexBin.PNG">

Via both the web interface and by direct post to the end point, one can declare a list of variables to be replaced in the final pdf. This is particularly useful in the latter case, as one can quickly generate multiple PDFs from the same template, using different data (addresses, etc).

Replacement pairs should be supplied to the endpoint in the post variable 'repl' in the json format:

[
{"key":"A","val":"b"},
{"key":"B","val":"d"}
]

<img src="https://dl.dropboxusercontent.com/u/11252267/Images/TexBin/TexBin2.PNG">

<img src="https://dl.dropboxusercontent.com/u/11252267/Images/TexBin/TexBin3.PNG">