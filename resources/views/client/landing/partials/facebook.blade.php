<section id="facebook">
  <div id="fb-root"></div>
  <script>
    (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1&appId=297302807515934&autoLogAppEvents=1';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
  </script>
  <div class="container">
    <div class="fb-comments" data-href="{{ request()->url() }}" data-numposts="5" data-width="100%"></div>
  </div>
</section>