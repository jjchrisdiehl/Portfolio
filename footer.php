</div>  <!-- /END WRAPPER-CONTENT -->



<footer class="footer">
  
    <div class="container-fluid">
      <div class="row">
      
  <!-- CONTACT SECTON -->
        <div class="col-sm-12">   
          <h1>Contact</h1>
          <?php echo do_shortcode( '[contact-form-7 id="96" title="Contact form 1"]' ) ?>
        </div>
  <!--Address-->
        <address class="col-sm-12">
        <strong>Chris Diehl Design, Inc.</strong> <br>126 N. 9th Street Philadelphia, PA 19107 <abbr title="Phone">P:</abbr> (267) 702-3173 <p class="copyright">&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>
        </address>
       
      </div> <!-- End Row -->
    </div><!-- End Container -->
  
</footer>

</div><!-- /END WRAPPER -->
<!--DEFER SCRIPT-->
<!--<script type="text/javascript">
function downloadJSAtOnload() {
var element = document.createElement("script");
element.src = "defer.js";
document.body.appendChild(element);
}
if (window.addEventListener)
window.addEventListener("load", downloadJSAtOnload, false);
else if (window.attachEvent)
window.attachEvent("onload", downloadJSAtOnload);
else window.onload = downloadJSAtOnload;
</script>
-->
<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Lato', 'Poly' ]
  }
};
(function() {
 var wf = document.createElement('script');
 wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
 '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
 wf.type = 'text/javascript';
 wf.async = 'true';
 var s = document.getElementsByTagName('script')[0];
 s.parentNode.insertBefore(wf, s);
})();

function init() {
  var imgDefer = document.getElementsByTagName('img');
  for (var i=0; i<imgDefer.length; i++) {
    if(imgDefer[i].getAttribute('data-src')) {
      imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
    } } }
    window.onload = init;

  </script>
  <script type="text/javascript">
    function downloadJSAtOnload() {
      var element = document.createElement("script");
      element.src = "<?php bloginfo('template_url'); ?>/js/build/production.min.js";
      document.body.appendChild(element);
    }
    if (window.addEventListener)
      window.addEventListener("load", downloadJSAtOnload, false);
    else if (window.attachEvent)
      window.attachEvent("onload", downloadJSAtOnload);
    else window.onload = downloadJSAtOnload;
  </script>

<?php wp_footer(); ?>
</body>
</html>
