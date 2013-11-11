<?php $pageTitle = "Custom Build"; include "phpartials/header.php"; ?>
  <main>
	<form name="my-form" action="https://picni.cc/api/v1/build/" method="post">
  <input type="hidden" name="username" value="herrshuster">
  <input type="hidden" name="project" value="style.scss">
  <input type="hidden" name="parse" value="sass-to-css">

  <!-- the address of your picnicc.json file (required) -->
  <input type="hidden" name="picnicc" value="https://raw.github.com/herrshuster/Semantic-CSS-Framework/gh-pages/picnicc.json">

  <!-- And now let's turn our "bits" into field values -->
  <fieldset class="experimental">
  <form><label style="background-color: transparent;">
    Do you need Module 1?
    <input type="checkbox" name="bits[]" value="style">
  </label></form>
  <form><label style="background-color: transparent;">
    Key
    <input type="text" name="sass[$key]" value="d">
  </label></form>
  <form><label style="background-color: transparent;">
    Quality
    <input type="text" name="sass[$quality]" value="min6">
  </label></form>
  <form><label style="background-color: transparent;">
    Color
    <input type="text" name="sass[$color]" value="#ff0000">
  </label></form>
  <form><label style="background-color: transparent;">
    Scheme
    <input type="text" name="sass[$scheme]" value="mono">
  </label></form>
  <form><label style="background-color: transparent;">
    Tone
    <input type="text" name="sass[$tone]" value="white">
  </label></form>

 

  <button>Get your custom build</button>
  </fieldset>
</form>
</main>
</body>
    <script src="javascripts/scripts.js"></script>

</html>