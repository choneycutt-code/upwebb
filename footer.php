<footer class="footer row">
  <div class="copyright col-lg-4 col-sm-12">
    <span>&copy; 2017<script>new Date().getFullYear()>2010&&document.write("-"+new Date().getFullYear());</script>,</span><span> UpWebb LLC. All Rights Reserved</span>
  </div>
  <div class="footer-link col-lg-4 col-sm-12">
    <p><a title="Top of Home Page" href="#top">Back to Top</a></p>
  </div>
  <div class="social-media-container col-lg-4 col-sm-12">
    <ul class="social_icons">
        <li><a title="UpWebb's Facebook Page" target="_blank" href="https://www.facebook.com/UpWebb/" class="media_animation fa fa-facebook"></a></li>
        <li><a title="UpWebb's Twitter Page" target="_blank" href="https://twitter.com/UpWebbCo" class="media_animation fa fa-twitter"></a></li>
        <li><a title="UpWebb's Instagram Page" target="_blank" href="https://www.instagram.com/upwebb.co/?hl=en" class="media_animation fa fa-instagram"></a></li>
        <!--<li><a href="#" class="media_animation fa fa-snapchat"></a></li>-->
    </ul>
  </div>
</footer>
<script>
    $(document).ready(function(){
      if ($(window).width() > 750) {
        $(window).scroll(function() { // check if scroll event happened
          if ($(document).scrollTop() > 100) { // check if user scrolled more than 50 from top of the browser window
            $(".navbar-fixed-top").css("background-color", "#000"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
          } else {
            $('.navbar-fixed-top').css('background-color', 'transparent');
            $('.navbar-fixed-top').css('-webkit-transition', 'background-color 350ms linear');
            $('.navbar-fixed-top').css('-ms-transition', 'background-color 350ms linear');
            $('.navbar-fixed-top').css('transition', 'background-color 350ms linear'); // if not, change it back to transparent
          }
        });
      } else {
        $(".navbar-fixed-top").css("background-color", "#000");
        $(".icon-bar").css("background-color", "white");
      }
    });
</script>
<!-- <script>
$(document).ready(function(){
 var scroll_start = 150;
 var startchange = $('#startchange');
 var offset = startchange.offset();
  if (startchange.length){
 $(document).scroll(function() {
    scroll_start = $(this).scrollTop();
    if(scroll_start > offset.top) {
        $(".navbar-fixed-top").css('background-color', '#000');
     } else {
        $('.navbar-fixed-top').css('background-color', 'transparent');
        $('.navbar-fixed-top').css('-webkit-transition', 'background-color 350ms linear');
        $('.navbar-fixed-top').css('-ms-transition', 'background-color 350ms linear');
        $('.navbar-fixed-top').css('transition', 'background-color 350ms linear');
     }
 });
  }
});
</script> -->
<script>
$(document).ready(function(){
// Add smooth scrolling to all links
$('a[href^="#"]').on('click', function(event) {

  // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {
    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 1000, function(){ //scroll speed

      window.location.hash = hash;
    });
  } // End if
});
});
</script>
<script>
$(document).ready(function() {
  $("#nav-fade").fadeIn(1000);
  $("#title-1").fadeIn(2000);
  $("#title-2").fadeIn(2000);
  $("#title-3").fadeIn(2000);
  $("#btn-1").fadeIn(3000);
});
</script>
<script>
var $window = $(window);
var $elem = $(".animation")

function isScrolledIntoView($elem, $window) {
  var docViewTop = $window.scrollTop();
  var docViewBottom = docViewTop + $window.height();

  var elemTop = $elem.offset().top;
  var elemBottom = elemTop + $elem.height();

  return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}
$(document).on("scroll", function () {
  if (isScrolledIntoView($elem, $window)) {
      $elem.addClass("animate")
      $elem.addClass("bounce")
  }
});
</script>
<script>
var $window = $(window);
var $elem2 = $(".service-icon")

function isScrolledIntoView($elem2, $window) {
  var docViewTop2 = $window.scrollTop();
  var docViewBottom2 = docViewTop2 + $window.height();

  var elemTop2 = $elem2.offset().top;
  var elemBottom2 = elemTop2 + $elem2.height();

  return ((elemBottom2 <= docViewBottom2) && (elemTop2 >= docViewTop2));
}
$(document).on("scroll", function () {
  if (isScrolledIntoView($elem2, $window)) {
      $elem2.addClass("animate-service")
      $elem2.addClass("wiggle")
  }
});
</script>
<script>
function validateForm() {
  var name = document.forms["contactForm"]["name"].value;
  var email = document.forms["contactForm"]["email"].value;
  var subject = document.forms["contactForm"]["subject"].value;
  var message = document.forms["contactForm"]["message"].value;
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if (name == "") {
      document.getElementById("errorMessage").innerHTML = "Please enter a name";
      return false;
  } else if (!filter.test(email)) {
      document.getElementById("errorMessage").innerHTML = "Please enter a valid email address";
      return false;
  } else if (message == "") {
    document.getElementById("errorMessage").innerHTML = "Please enter a message";
    return false;
  }
}
</script>
<script src="js/scripts.js"></script>
</body>
</html>
