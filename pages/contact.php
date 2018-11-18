<?php include_once('../header.php');?>
<div class="wrapper row2 bg-tc bg-cover" style="background-image:url('../images/live-demo/backgrounds/1.jpg');">
    <div class="overlay">
        <div id="pageintro" class="clear">
            <div class="pagetitle">
                <h2>Contact</h2>
            </div>
            <nav class="breadcrumb">
                <ul>
                    <li><a href="https://www.os-templates.com/premium-website-templates" title="Home">Home</a></li>
                    <li><a href="#" title="Pages">Pages</a></li>
                    <li><a href="contact.php" title="Contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="wrapper full_width">
    <div class="map">
        <div id="map_canvas_"><!-- Leave Empty --></div>
    </div>
</div>
<div class="wrapper row3">
    <main role="main" class="container">
        <div class="col-2-3 first">
            <div class="block clear">
                <form class="rnd8" action="#" method="post">
                    <div class="clear">
                        <label class="col-1-3 first push15" for="fullname">Name <span class="required">*</span><br>
                            <input type="text" id="fullname" name="fullname" value="" size="22">
                        </label>
                        <label class="col-1-3 push15" for="email">Email <span class="required">*</span><br>
                            <input type="email" id="email" name="email" value="" size="22">
                        </label>
                        <label class="col-1-3 push15" for="ref">Subject<br>
                            <input type="text" name="ref" id="ref" value="" size="22">
                        </label>
                    </div>
                    <div class="push15">
                        <label for="message">Message <span class="required">*</span></label>
                        <textarea name="message" id="message" cols="25" rows="10"></textarea>
                    </div>
                    <input class="button blue" type="submit" value="Submit">
                    &nbsp;
                    <input type="reset" value="Reset">
                </form>
            </div>
        </div>
        <div class="col-1-3">
            <h2>Our Contact Details</h2>
            <address class="push20">
                <strong>Company Name</strong><br>
                Street Name &amp; Number,<br>
                Town,<br>
                City,<br>
                Postcode/Zip
            </address>
            <ul class="fa-ul">
                <li class="push10"><span class="fa-li fa fa-home"></span> www.yourdomain.com</li>
                <li class="push10"><span class="fa fa-li fa-envelope"></span> support@yourdomain.com</li>
                <li class="push10"><span class="fa fa-li fa-phone"></span> +00 (123) 456 7890</li>
                <li class="push10"><span class="fa fa-li fa-print"></span> +00 (123) 456 7890</li>
                <li><span class="fa fa-li fa-clock-o"></span> Mon. - Fri. 9:00am - 7:00pm</li>
            </ul>
        </div>
        <div class="clear"></div>
    </main>
</div>

<script src="//maps.google.com/maps/api/js?key=AIzaSyCFHtnA2DBrUoLERs7QdwOxQzDKc4S8LSE&amp;sensor=false"></script>
<script src="../js/google-maps/setup.js"></script>
<script type="text/javascript">
    // Google Analytics + Opt-out
    var gaProperty = 'UA-120233638-1';var disableStr = 'ga-disable-' + gaProperty;if (document.cookie.indexOf(disableStr + '=true') > -1) {window[disableStr] = true;}
    function gaOptout(){document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2045 23:59:59 UTC; path=/';window[disableStr] = true;alert('Google Tracking has been deactivated');}
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-120233638-1', 'auto');ga('set', 'anonymizeIp', true);ga('send', 'pageview');
</script>
<?php include_once("../footer.php"); ?>

