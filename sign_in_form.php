<?php
session_start();
include("header.php");
?>
<body class="bg-near-white">
<article class="pa5 pt0 black-80">
  <form action="sign_in.php" method="POST" accept-charset="utf-8">
    <fieldset id="sign_up" class="ba b--transparent ph0 mh0">
      <legend class="ph0 mh0 fw6 clip">Sign Up</legend>
        <div class="mt3">
          <label class="db fw4 lh-copy f6" for="username">Username</label>
          <input class="pa2 input-reset ba br3 b--black-10 bg-white w-100 measure" type="text"  name="username" pattern="[a-zA-Z0-9]+" required maxlength="60">
        </div>
      <div class="mt3">
        <label class="db fw4 lh-copy f6" for="password">Password</label>
        <input class="b pa2 input-reset ba br3 b--black-10 bg-white" type="password" size="30" maxlength="20" name="password" pattern="[a-zA-Z0-9]+" required maxlength="60">
      </div>
    </fieldset>
    

    <div class="mt3"><input class="b ph3 pv2 input-reset ba br3 b--black-50 bg-white pointer f6" type="submit" value="Sign In"></div>
  </form>
</article>
</body>
<?php
include("footer.php");
?>

  

