<?php
session_start();
include("header.php");
?>
<body class="bg-near-white">
<article class="pa5 pt0 black-80">
  <form action="sign_up.php" method="POST" accept-charset="utf-8">
    <fieldset id="sign_up" class="ba b--transparent ph0 mh0">
      <legend class="ph0 mh0 fw6 clip">Sign Up</legend>
        <div class="mt3">
          <label class="db fw4 lh-copy f6" for="username">Username</label>
          <input class="pa2 input-reset ba br3 b--black-10 bg-white w-100 measure" type="text"  name="username" pattern="[a-zA-Z0-9]+" required maxlength="60">
        </div>
        <div class="mt3">
          <label class="db fw4 lh-copy f6" for="name">Name</label>
          <input class="pa2 input-reset ba br3 b--black-10 bg-white w-100 measure" type="text"  name="name" pattern="^[А-Я]{1}[а-я]+$" title="Хххххх" required maxlength="60">
        </div>
        <div class="mt3">
          <label class="db fw4 lh-copy f6" for="surname">Surname</label>
          <input class="pa2 input-reset ba br3 b--black-10 bg-white w-100 measure" type="text" name="surname" pattern="^[А-Я]{1}[а-я]+$" title="Хххххх" required maxlength="60">
        </div>
      <div class="mt3">
        <label class="db fw4 lh-copy f6" for="email-address">Email address</label>
        <input class="pa2 input-reset ba br3 b--black-10 bg-white w-100 measure" type="text" size="30" name="email" pattern="^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z]{3,6})*\.[a-z]{2,3}$" title="xxxx@xxx.xx" required maxlength="60">
      </div>
      <div class="mt3">
        <label class="db fw4 lh-copy f6" for="password">Password</label>
        <input class="b pa2 input-reset ba br3 b--black-10 bg-white" type="password" size="30" maxlength="20" name="password" pattern="[a-zA-Z0-9]+" required maxlength="60">
      </div>
      <div class="mt3">
        <label class="db fw4 lh-copy f6" for="password">Repeat Password</label>
        <input class="b pa2 input-reset ba br3 b--black-10 bg-white" type="password" size="30" maxlength="20" name="password_02" pattern="[a-zA-Z0-9]+" required maxlength="60">
      </div>
    </fieldset>
    <img class="pa2" id="captcha" src="captcha.php" alt="Captcha">

    <a href="javascript:void(0)" onclick="document.getElementById('captcha').src='captcha.php?rid=${Math.random()}'">
      <p class='serif black-80 link no-underline hover-green dib v-btm pl3'>Update code</p>
    </a>
      <div class="input_1">
      <label class="db fw4 lh-copy f6">Enter code</label>
          <input class="ba br3 b--black-10 bg-white pa2" type="text" name="captcha" maxlength="60" required />
          
      </div>

    <div class="mt3"><input class="b ph3 pv2 input-reset ba br3 b--black-50 bg-white pointer f6" type="submit" value="Sign Up"></div>
  </form>
</article>
</body>
<?php
include("footer.php");
?>

  

