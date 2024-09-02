<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <meta name="generator" content="CasjaysDev" />
  <link rel="shortcut icon" href="https://avatars2.githubusercontent.com/u/62282596?s=200&v=4" />
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,700,400italic,700italic" rel="stylesheet"
    type="text/css" />
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
    rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="/default-css/casjaysdev.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.3/darkly/bootstrap.min.css"
    integrity="sha512-YRcmztDXzJQCCBk2YUiEAY+r74gu/c9UULMPTeLsAp/Tw5eXiGkYMPC4tc4Kp1jx/V9xjEOCVpBe4r6Lx6n5dA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" defer async></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous" defer
    async></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous" defer
    async></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous" defer
    async>
    </script>
  <script src="/default-js/errorpages/isup.js" crossorigin="anonymous" defer async></script>
  <script src="/default-js/errorpages/homepage.js" crossorigin="anonymous" defer async></script>
  <script src="/default-js/errorpages/loaddomain.js" crossorigin="anonymous" defer async></script>
  <script src="https://cdn.jsdelivr.net/npm/passprotect@1.0.0/umd/passprotect.min.js" crossorigin="anonymous" defer
    async></script>
  <title>Domain Doesn't Exist</title>
</head>

<body>
  <br /><br />
  <div class="c1">
    <h2>UMMMMM</h2>
    <br />
    This site doesn't seem to exist<br />
    <br /><br />
    <img alt="error" height="400" width="400" src="/default-error/images/oops.gif" />
    <br /><br /><br />
  </div>
  <div class="c5">
    <br />
    <?php
    echo "System Hostname: ", gethostname() . "<br />";
    echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br />";
    echo "IP Address: REPLACE_IP_4_ADRESS<br />";
    ?>
    <br /><br />
    Linux OsVer:
    <?php echo shell_exec('cat /etc/redhat-release'); ?><br />
    ConfigVer:
    <?php echo shell_exec(
      'cat /etc/casjaysdev/updates/versions/configs.txt'
    ); ?>
    <br /><br />
    Powered by a Redhat based system<br />
    <a href="https://redhat.com">
      <img border="0" alt="Redhat/CentOS/Fedora/SL Linux" src="/default-icons/powered_by_redhat.jpg" /> </a><br />
    <br /><br /><br /><br /><br />
  </div>
  <div class="footer footer-custom col-sm-12">
    <!-- Begin Casjays Developments Footer -->
    <div class="footer vh-100">
      <div class="footer-custom fs-4">
        <br />
        <br />
        <br />
        <!-- Begin last updated -->
        <span style="color: skyblue"> REPLACE_LAST_UPDATED_ON_MESSAGE </span>
        <br />
        <br />
        <!-- End last updated -->

        <!-- begin legal block --->
        <div class="legal">
          REPLACE_COPYRIGHT_FOOTER
          <br />
          <a href="https://casjay.pro" target="_blank">Casjays Developments</a> and
          <a href="https://malaks-us.github.io/jason" target="_blank">Jason M. Hempstead-Malak</a><br />
          Hosting by <a href="https://casjay.pro/hosting" target="_blank">Casjays Developments: Hosting</a><br />
          and powered by <a href="https://casjaysdev.pro" target="_blank">casjaysdev.pro</a>
          <br />
          <br />
          <a href="https://www.patreon.com/casjay" target="_blank"><img
              src="https://img.shields.io/badge/patreon-donate-orange.svg" border="0" alt="Casjays Patreon Page" /></a>
          <a href="https://www.paypal.me/casjaysdev" target="_blank"><img
              src="https://img.shields.io/badge/Donate-PayPal-green.svg?casjay@yahoo.com"
              alt="Casjays Paypal Page" /></a>
          <br />
          <br />
          <a href="https://help.casjay.pro" target="_blank">CasjaysDev Support</a> |
          <a href="https://bugs.casjay.pro" target="_blank">CasjaysDev Bugs</a> <br />
          <a href="https://status.casjay.pro" target="_blank">System Status</a> |
          <a href="https://servers.casjay.pro" target="_blank">Service Status</a> |
          <a href="https://status.casjaysdev.pro" target="_blank">Complete Status</a>
          <br />
          <a href="https://casjaysdev.pro/domains.html" target="_blank">Casjays Developments Domains</a>
          <br />
          <br />
          Casjays Developments privacy policy can be found at<br />
          <a href="https://casjaysdev.pro/policy/" target="_blank">https://casjaysdev.pro/policy</a>
          <br />
        </div>
        <!-- end legal block --->

        <!-- begin engine block --->
        <div class="text-center" style="color: royalblue">
          <br />
          Made with 💜💜💜💜💜💜 by
          <br />
          <a href="http://github.com/casjay" target="_blank" rel="noopener">Jason M. Hempstead (Casjay)</a>
          <br />
          This site is powered by an
          <a href="https://github.com/casjay-templates/default-web-assets" target="_blank" rel="noopener">open source
          </a>theme
        </div>
        <br />
        <!-- end engine block --->

        <!-- begin clock block --->
        <div class="clock">
          <br />
          <br />
          <iframe
            src="https://freesecure.timeanddate.com/clock/i7k2kmtc/n12/fn6/fs16/fc9ff/tc000/ftb/bas2/bat1/bacfff/pa8/tt0/tw1/th1/ta1/tb4"
            frameborder="0" width="212" height="56"></iframe>
          <br />
          <br />
        </div>
        <!-- end clock block --->

        <!-- begin eu cookie block --->
        <div class="eu">
          <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js"
            data-cfasync="false"></script>
          <script>
            window.cookieconsent.initialise({
              palette: {
                popup: {
                  background: '#64386b',
                  text: '#ffcdfd',
                },
                button: {
                  background: '#f8a8ff',
                  text: '#3f0045',
                },
              },
              theme: 'edgeless',
              content: {
                message:
                  'This site uses cookie and in accordance with the EU GDPR<br />law this message is being displayed.<br />',
                dismiss: 'dismiss',
                link: 'CasjaysDev Privacy Policy',
                href: 'https://casjaysdev.pro/policy',
              },
            });
          </script>
          <br />
        </div>
        <!-- end eu cookie block --->
      </div>
      <br />
      <br />
    </div>
    <!-- End Footer -->
  </div>
  <br /><br /><br /><br />
  <br /><br /><br />
</body>

</html>
