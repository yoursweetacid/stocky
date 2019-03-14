<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/tachyons.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <title>Stocky</title>
    <nav class="db bg-white dt-l w-100 border-box ph3-l pv3 mb2 bb b--black-10 ph3">
        <a class="db dtc-l v-mid mid-gray link dim w-100 w-25-l tc tl-l mb2 mb0-l" href="#" title="Home">
            <img src="images/userpics/logo.png" class="dib w4 h3 pr7-l br-100" alt="Site Name">
        </a>
        <div class="db dtc-l v-mid w-100 w-75-l tc baskerville tr-l">
            <a class="link dim dark-gray f6 f5-l dib mr3 mr4-l underline-hover" href="#" title="Home">Home</a>
            <a class="link dim dark-gray f6 f5-l dib mr3 mr4-l underline-hover" href="#" title="Blog">Blog</a>
            <a class="link dim dark-gray f6 f5-l dib mr3 mr4-l underline-hover" href="#" title="Blog">Terms</a>
            <a class="link dim dark-gray f6 f5-l dib mr3 mr4-l underline-hover" href="#" title="Blog">Privacy</a>
        </div>
    </nav>
</head>
<body class="bg-near-white">
<article class="pa5 pt0 black-80 pb7">
  <form action="sign-up_submit" method="get" accept-charset="utf-8">
    <fieldset id="sign_up" class="ba b--transparent ph0 mh0">
      <legend class="ph0 mh0 fw6 clip">Sign Up</legend>
        <div class="mt3">
          <label class="db fw4 lh-copy f6" for="username">Username / Email address</label>
          <input class="pa2 input-reset ba br3 b--black-10 bg-white w-100 measure" type="email" name="email-address"  id="email-address">
        </div>
      <div class="mt3">
        <label class="db fw4 lh-copy f6" for="password">Password</label>
        <input class="b pa2 input-reset ba br3 b--black-10 bg-white" type="password" name="password"  id="password">
      </div>
    </fieldset>
    <div class="mt3"><input class="b ph3 pv2 input-reset ba br3 b--black-50 bg-white pointer f6" type="submit" value="Sign in"></div>
  </form>
</article>
</body>
<footer style="background-image:url(images/background/bg_04.gif);" class="white-80 pt4 pb4 ph5 cover">
  <p class="f6 db v-mid w-100 tc"><span class="dib mr4 mr5-ns">©2019 Stocky</span>
      <a class="link white-80 hover-green" href="/terms">Terms</a> /
      <a class="link white-80 hover-green" href="/privacy"> Privacy </a> /
      <a class="link white-80 hover-green" href="#">nikmurrey@gmail.com </a>
      <a href="#" class="db mt4 link white-80 hover-green">
          <span class="fw4 f7 f6-l">Made with</span>
          <span class="fa fa fa-heart red" style="vertical-align: middle"></span>
          <span class="fw4 f7 f6-l ">by @yoursweetacid</span>
      </a>
  </p>
</footer>
</html>