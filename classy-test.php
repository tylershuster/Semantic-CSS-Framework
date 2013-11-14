<?php include "phpartials/header.php"; ?>
<style>
	fieldset{
		width: 100%;
		display: table;
		table-layout: fixed;
		padding: 0;
	}
	fieldset input[type="radio"]{
		display: table-cell;
		margin: 1rem;
		float: left;
	}
</style>
<fieldset id="key">
<form>
	<input type="radio" name="A">
	<input type="radio" name="B">
	<input type="radio" name="C">
	<input type="radio" name="D">
	<input type="radio" name="E">
	<input type="radio" name="F">
	<input type="radio" name="G">
	</form>
</fieldset>
<fieldset id="quality">
<form>
	<input type="radio" name="min">
	<input type="radio" name="maj">
	<input type="radio" name="dim">
	<input type="radio" name="aug">
	<input type="radio" name="augmin7">
	<input type="radio" name="sus">
	<input type="radio" name="sus2">
	<input type="radio" name="eleventh">
	<input type="radio" name="min7">
	<input type="radio" name="maj7">
	<input type="radio" name="dom7">
	<input type="radio" name="dim7">
	<input type="radio" name="min6">
	<input type="radio" name="maj6">
	<input type="radio" name="domflat9">
	<input type="radio" name="domsharp9">
	<input type="radio" name="min9">
	<input type="radio" name="maj9">
	<input type="radio" name="perfect5">
	</form>
</fieldset>

<div class="row">
	<div><h1>H1 Header Example</h1></div>
	<div><h2>H2 Header Example</h2></div>
	<div><h3>H3 Header Example</h3></div>
	<div><h4>H4 Header Example</h4></div>
	<div><h5>H5 Header Example</h5></div>
	<div><p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
</div>
	
</body>

<script src="javascripts/scripts.js"></script>
<script>
	$("fieldset input").click(function(){
		var classy = $("input:checked").attr(name);
		$("div.row>div").attr('class', classy);
	});
</script>

	
</html>

