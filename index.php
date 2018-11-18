<?php
$sliderIsActive=true;
include_once('header.php');
?>

<div class="wrapper row3">
    <section class="container">
        <div class="clear">
            <div class="col-1-3 first">
                <div class="boxholder push30"><img src="<?=ROOT_URL.$homepage_content[0]['url']?>" alt=""></div>
                <h2 class="uppercase"><?=$homepage_content[0]['title']?></h2>
                <p><?=$homepage_content[0]['contentBrief']?>
                    <a href="#" class="button small rnd8 blue">Read More &raquo;</a></p>
            </div>
            <div class="col-1-3">
                <div class="boxholder push30"><img src="<?=ROOT_URL.$homepage_content[0]['url']?>" alt=""></div>
                <h2 class="uppercase"><?=$homepage_content[1]['title']?></h2>
                <p class="push30"><?=$homepage_content[1]['contentBrief']?>
                <a href="#" class="button small rnd8 blue">Read More &raquo;</a></p>
            </div>
            <div class="col-1-3">
                <h2 class="uppercase">From The Blog</h2>
                <ul class="nospace latestlist">
                    <li class="clear">
                        <div class="imgl boxholder"><img src="images/homepage/2.jpg" alt=""></div>
                        <p class="nospace push10">Lorem ipsum dolor sit amet, consectetur adi pisc ing elit vivamus&hellip;</p>
                        <p class="nospace"><a href="#" class="button small rnd8 blue">Read More &raquo;</a></p>
                    </li>
                    <li class="clear">
                        <div class="imgl boxholder"><img src="images/homepage/3.jpg" alt=""></div>
                        <p class="nospace push10">Lorem ipsum dolor sit amet, consectetur adi pisc ing elit vivamus&hellip;</p>
                        <p class="nospace"><a href="#" class="button small rnd8 blue">Read More &raquo;</a></p>
                    </li>
                    <li class="clear">
                        <div class="imgl boxholder"><img src="images/homepage/4.jpg" alt=""></div>
                        <p class="nospace push10">Lorem ipsum dolor sit amet, consectetur adi pisc ing elit vivamus&hellip;</p>
                        <p class="nospace"><a href="#" class="button small rnd8 blue">Read More &raquo;</a></p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </section>
</div>
<div class="wrapper row3 bg-tc bg-cover" style="background-image:url('images/backgrounds/2.jpg');">
    <div class="block overlay">
        <section class="container">
            <div class="col-1-3 first center">
                <div class="hpcircle"><a href="#"><span class="fa fa-random"><em>Random</em></span></a></div>
            </div>
            <div class="col-2-3">
                <h2 class="uppercase">lorem ipsum dolor sit amet, consectetur adipiscing elit vivamus.</h2>
                <ul class="list arrow push30">
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id pharetra.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur vivamus.</li>
                </ul>
                <div class="pushright"><a href="#" class="button medium rnd8 blue push10">Lorem Ipsum</a><a href="#" class="button medium rnd8 orange">Dolor Sit Amet</a></div>
            </div>
            <div class="clear"></div>
        </section>
    </div>
</div>
<div class="wrapper row3">
    <section class="container">
        <div class="col-1-2 first">
            <div class="center push50">
                <h2 class="uppercase">Our Team</h2>
                <p>Ultimately, leadership is not about glorious crowning acts. It's about keeping your team focused on a goal and motivated to do their best to achieve it</p>
            </div>
            <ul class="nospace">
                <li class="clear push50">
                    <div class="col-1-3"><img class="rnd50" src="images/team/570x570_1.png" alt=""></div>
                    <div class="col-2-3">
                        <h3 class="nospace"><a href="#">Jane Doe</a></h3>
                        <em class="normal font-xsmall">Job Title Here</em>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis, urna vel fringilla sagittis, nunc dolor pellentesque mauris.</p>
                        <p class="nospace"><span class="fa fa-phone"></span> 1001000 1101001</p>
                    </div>
                </li>
                <li class="clear">
                    <div class="col-1-3"><img class="rnd50" src="images/team/570x570_2.png" alt=""></div>
                    <div class="col-2-3">
                        <h3 class="nospace"><a href="#">John Doe</a></h3>
                        <em class="normal font-xsmall">Job Title Here</em>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis, urna vel fringilla sagittis, nunc dolor pellentesque mauris.</p>
                        <p class="nospace"><span class="fa fa-phone"></span> 1001000 1101001</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-1-2">
            <div class="center push50">
                <h2 class="uppercase">Testimonials</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis, urna vel fringilla sagittis, nunc dolor pellentesque mauris.</p>
            </div>
            <div class="flex-container flex-rtl">
                <div class="flexslider flex-text-horizontal paging">
                    <ul class="flex-slides">
                        <li>
                            <div class="testimonial opt2 clear">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis, urna vel fringilla sagittis, nunc dolor pellentesque mauris, non feugiat odio dui in dui. Aenean ut facilisis dui. Etiam in rutrum nisi.</p>
                                    <p>Quisque porta scelerisque est, sit amet interdum nisi semper in. Etiam eu hendrerit nibh. Aenean porttitor molestie accumsan.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis, urna vel fringilla sagittis, nunc dolor pellentesque mauris, non feugiat odio dui in dui. Aenean ut facilisis dui. Etiam in rutrum nisi. Quisque porta scelerisque est, sit ame.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <div class="testimonial-caption"><strong>Name Goes Here</strong> <span>Company Name</span></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="testimonial opt2 clear">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis, urna vel fringilla sagittis, nunc dolor pellentesque mauris, non feugiat odio dui in dui. Aenean ut facilisis dui. Etiam in rutrum nisi.</p>
                                    <p>Quisque porta scelerisque est, sit amet interdum nisi semper in. Etiam eu hendrerit nibh. Aenean porttitor molestie accumsan.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <div class="testimonial-caption"><strong>Name Goes Here</strong> <span>Company Name</span></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="testimonial opt2 clear">
                                <blockquote>
                                    <p>Phasellus felis metus, ornare nec consectetur a, placerat eu felis. Phasellus quis enim orci. Etiam vel dui nisi, sed semper urna. Ut mattis dignissim lacus, vitae pretium neque volutpat nec.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <div class="testimonial-caption"><strong>Name Goes Here</strong> <span>Company Name</span></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </section>
</div>
<?php include_once("footer.php");?>
