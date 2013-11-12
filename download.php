<?php $pageTitle = "Download"; include "phpartials/header.php"; ?>
	<main>
		<form name="my-form" action="https://picni.cc/api/v1/build/" method="post" style="max-width: 512px;float:none;margin:0 auto;">
		<input type="hidden" name="username" value="herrshuster">
		<input type="hidden" name="project" value="style.scss">
		<input type="hidden" name="parse" value="sass-to-css">
		<input type="hidden" name="picnicc" value="https://raw.github.com/herrshuster/Semantic-CSS-Framework/gh-pages/picnicc.json">
			<fieldset>
				<legend>Custom Build</legend>
				<form>
					<label style="display: none">Check this box</label>
					<input style="display: none" type="checkbox" name="bits[]" value="style" checked>
				</form>
				<form>
					<label>Key</label>
					<input type="text" name="sass[$key]" value="d">
				</form>
				<form>
					<label>Quality</label>
					<input type="text" name="sass[$quality]" value="min6">
				</form>
				<form>
					<label>Color</label>
					<input type="text" name="sass[$color]" value="#ff0000">
				</form>
				<form>
					<label>Scheme</label>
					<input type="text" name="sass[$scheme]" value="mono">
				</form>
				<form>
					<label>Tone</label>
					<input type="text" name="sass[$tone]" value="white">
				</form>
				<form>
					<label>Skeu</label>
					<input type="text" name="sass[$skeu]" value="faux-flat">
				</form>
				<hr class="uber">
				<form>
					<label>Primary Color</label>
					<input type="text" name="sass[$color-primary]" value="">
				</form>
				<form>
					<label>Secondary Color</label>
					<input type="text" name="sass[$color-secondary]" value="">
				</form>
				<form>
					<label>Tertiary Color</label>
					<input type="text" name="sass[$color-tertiary]" value="">
				</form>
				<form>
					<label>Text Color</label>
					<input type="text" name="sass[$color-text]" value="">
				</form>
				<form>
					<label>Accent Color</label>
					<input type="text" name="sass[$color-accent]" value="">
				</form>
				<form>
					<label>Background Color</label>
					<input type="text" name="sass[$color-background]" value="">
				</form>
				<form>
					<label>Drawer Color</label>
					<input type="text" name="sass[$color-drawer]" value="">
				</form>
				<button style="display: block;margin: 0 auto;">Get your custom build</button>
			</fieldset>
		</form>
	</main>
</body>
	<script src="javascripts/scripts.js"></script>

</html>