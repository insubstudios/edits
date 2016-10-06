<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>ed.it's! - education platform for insubstudios.</title>
<style>
html { box-sizing: border-box; }
html * { box-sizing: inherit; }

body {
	background-color: #deefdf;
	color: #2f2f2f;
  min-height: 100%;
	max-width: 35em;
	margin: 0 30%;
  padding: 2rem 0 9rem;
  position: relative;
}

form {
	background-color: #FFD9D1;
	padding: 1.2em 1em .5em;
	font-family: sans;
	font-weight: bold;
}

footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
}
</style>
</head>
<body>
<p>Hello internet,</p>

<h3>webdev</h3>

<ul>
	<li><a href="sources/webdev/google%20developers/web%20fundamentals/index.html" title="toc">Google Developers - Web Fundamentals</a></li>
</ul>

<hr>

<pre style="background-color: #bbb; font-family: mono; padding: .8em; ">
subject/
        sources/
                index: {title},
                ln -s sources/{title}
        concept(bzwds)/
                sources/
                        index: {title.chapter#},
                        ln -s sources/{title}/{section}

sources/
        {title}/
                index(TOC),
                1,
                2,
                3,
                ... ,
                glossary(bzwds)

specimins/...??

</pre>

<p>something something...</p>
<p>ah, yes! set up markdown processesing to take notes in md and load &apos;em up into the web-interface. #TODO</p>

<h2>30Q1 courses:</h2>
<ul>
	<li>i.t.</li>
	<ul>
		<li>bash/cli</li>
		<li>os, network, &amp; server admin</li>
		<li style="color: gray; ">- fix: scanner, printer</li>
	</ul>
	<li>webdev</li>
	<ul>
		<li>git, html, css, js, php, mysql, ajax, d3, node.js, apache, dev. env., stackexchange, forums, news</li>
		<li>...</li>
	</ul>
	<li>food: earth to mouth.</li>
	<li>health &amp; wellness</li>
	<li>math</li>
	<li>electricity</li>
</ul>

<form>
	<feildset>
		<legend>Add Subject:</legend>
		<p><label>title:</label> <input name="newTopic"> <input type="submit" value="submit."></p>
	</fieldset>
</form>

<footer>
	<hr>
	<p><b>ed.it's!</b></p>
</footer>

</body>
</html>
