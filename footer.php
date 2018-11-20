<div class="wrapper row4">
    <footer role="contentinfo" id="p-footer" class="clear">
        <div id="scrolltotop"><a href="#top" title="Back To Top"><span class="fa fa-arrow-up"></span></a></div>
        <div class="col-1-4 first">
            <h3><span>Pages</span></h3>
            <ul class="list underline nospace spacing">
                <li><a href="<?= ROOT_URL ?>">Home Page</a></li>
                <li><a href="<?= ROOT_URL ?>/pages/services.php">Our Services</a></li>
                <li><a href="<?= ROOT_URL ?>/pages/about-us/team.php">Meet The Team</a></li>
                <li><a href="<?= ROOT_URL ?>/pages/contact.php">Contact Us</a></li>
            </ul>
        </div>
        <div class="col-1-4">
            <h3><span>Sign up</span></h3>
            <p>To sign-up for our newsletter simply enter your email below</p>
            <form class="rnd8 push20" action="#" method="post">
                <input class="push10" type="text" name="ft_email" id="ft_email" value="" placeholder="Email Here" size="22">
                <input class="uppercase button blue" type="submit" value="Submit">
            </form>
            <p class="nospace push10">Follow us in the social networks</p>
            <ul class="social rnd50">
                <li><a class="socico-facebook" title="Facebook" href="https://www.facebook.com/nashibacharya"><span class="fa fa-facebook"><em>Facebook</em></span></a></li>
                <li><a class="socico-pinterest" title="Pinterest" href="https://www.pinintrest.com/nashibacharya"><span class="fa fa-pinterest"><em>Pinterest</em></span></a></li>
                <li><a class="socico-twitter" title="Twitter" href="https://www.twitter.com/nashibacharya"><span class="fa fa-twitter"><em>Twitter</em></span></a></li>
                <li><a class="socico-dribble" title="Dribble" href="https://wwww.dribble.com/nashibacharya"><span class="fa fa-dribbble"><em>Dribble</em></span></a></li>
                <li><a class="socico-linkedin" title="LinkedIn" href="https://www.linkedin.com/nashibacharya"><span class="fa fa-linkedin"><em>LinkedIn</em></span></a></li>
                <li><a class="socico-google-plus" title="Google+" href="https://www.google.com/nashibacharya"><span class="fa fa-google-plus"><em>Google+</em></span></a></li>
            </ul>
        </div>
        <div class="col-1-4">
            <h3><span>Blogs</span></h3>
            <ul class="list arrow nospace spacing">
                <li><a href="#">Quisque porta scelerisque</a></li>
                <li><a href="#">Sit amet interdum nisi semper</a></li>
                <li><a href="#">Etiam eu hendrerit nibh</a></li>
                <li><a href="#">Aenean porttitor molestie</a></li>
                <li><a href="#">Consectetur adipiscing elit</a></li>
            </ul>
        </div>
        <div class="col-1-4">
            <h3><span>Location & Contact</span></h3>
            <p class="push15">Our address and contact</p>
            <address class="block push15">
                Street: Madhyapur Thimi-3<br>
                Town: Kausaltar<br>
            </address>
            <ul class="nospace">
                <li class="push10"><span class="fa fa-clock-o"></span> Sun. - Fri. 9:00am - 7:00pm</li>
                <li><span class="fa fa-phone"></span> 01 6633004</li>
            </ul>
        </div>
    </footer>
</div>
<div class="wrapper row5">
    <div id="copyright" class="clear">
        <div id="sitename"><a class="uppercase button medium rnd8" href="<?=ROOT_URL?>"><span class="fa"><img src="<?= ROOT_URL ?>/images/logo.png" class="img-responsive" style="height:32px;"/></span> <em class="normal times"><?=$company['name']?></em></a></div>
        <ul class="nospace inline">
            <li>Copyright &copy; 2009 - 2018. All Rights Reserved</li>
        </ul>
    </div>
</div>


<div id="osfooter">
    <div>
        <div id="bsap_1244497" class="bsarocks bsap_2cdb89802e2deca5991138bb3e47b146"></div>
    </div>
</div>

<script src="<?= ROOT_URL ?>/js/jquery-latest.min.js"></script>
<script src="<?= ROOT_URL ?>/js/jquery-ui.min.js"></script>
<script src="<?= ROOT_URL ?>/js/custom.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script type="text/javascript">
    // Google Analytics + Opt-out
    <?php if(isset($sliderIsActive)){?>
    setInterval(function(){if(scrollY>=400){
        $('#header').addClass('navbar navbar-fixed-top top-nav-collapse row1 nav-width');
    }else{
        $('#header').removeClass('navbar navbar-fixed-top top-nav-collapse nav-width');
    }},100);
    <?php }else{?>
    setInterval(function(){if(scrollY>=10){
        $('#header').addClass('navbar navbar-fixed-top top-nav-collapse row1 nav-width');
    }else{
        $('#header').removeClass('navbar navbar-fixed-top top-nav-collapse nav-width');
    }},100);

    <?php } ?>
    var href=window.location.href;
    href=href.split('/').pop();
    var e=$('#topnav ul li a');
    var page,j;
    for(var i=0;i<e.length;i++){
        page=e[i].getAttribute('href').split('/').pop();
        if(page==href){
            j=i;
        }
    }
    $('#topnav ul li').removeClass('active');
    $('#topnav ul li')[j].classList.add('active');
    var gaProperty = 'UA-120233638-1';var disableStr = 'ga-disable-' + gaProperty;if (document.cookie.indexOf(disableStr + '=true') > -1) {window[disableStr] = true;}
    function gaOptout(){document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2045 23:59:59 UTC; path=/';window[disableStr] = true;alert('Google Tracking has been deactivated');}
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-120233638-1', 'auto');ga('set', 'anonymizeIp', true);ga('send', 'pageview');
</script>
</body>
</html>
