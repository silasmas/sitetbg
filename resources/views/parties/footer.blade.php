<!-- Main Footer -->
<footer class="main-footer">
    <!-- Upper Box -->
    <div class="auto-container">
        <div class="upper-box">
            <div class="row">
                <!--  -->
                <div class="contact-info logo-box col-lg-4 col-md-12 wow fadeInUp text-center">
                    <div class="logo"><a href="#"><img src="{{ asset('common/newimg/logoWhite.png') }}" width="150"
                                alt=""></a></div>
                </div>

                <!-- Contact Info -->
                <div class="contact-info col-lg-4 col-md-12 wow fadeInRight">
                    <div class="inner-box">
                        <h4 class="title">@lang("infos.writeus")</h4>
                        <div class="text"><a href="mailto: Contact@thebestgroup.org"> Contact@thebestgroup.org</a></div>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="contact-info col-lg-4 col-md-12 wow fadeInLeft" data-wow-delay="600ms">
                    <div class="inner-box">
                        <h4 class="title">@lang("infos.allquestion")</h4>
                        <div class="text"><a href="tel:+243824859415">(+243) 824859415</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Upper Box -->

    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="auto-container">
            <div class="row">
                <!--Footer Column-->
                <div class="footer-column col-xl-2 col-lg-2 col-md-2 col-sm-12">
                    <div class="footer-widget contacts-widget">
                        <h6 class="widget-title">Explore</h6>
                        <ul class="user-links">
                            <li><a href="#about">@lang("infos.main_menu.about")</a></li>
                            <li><a href="#services">@lang("infos.main_menu.services")</a></li>
                            <li><a href="#portfolio">@lang("infos.main_menu.portfolio")</a></li>
                            <li><a href="#team">@lang("infos.main_menu.team")</a></li>
                            <li><a href="#contact">@lang("infos.main_menu.contact")</a></li>
                        </ul>
                    </div>
                </div>
                <!--Footer Column-->
                <!--Footer Column-->
                <div class="footer-column col-xl-5 col-lg-5 col-md-5 col-sm-12 center-block">
                    <div class="footer-widget contacts-widget">
                        <h6 class="widget-title">@lang("infos.add") </h6>
                        <div class="text"> 16, avenue de la paix, Kinshasa-Gombe, @lang("infos.ref") : Pressing 5 à sec.
                        </div>
                        <ul class="social-icon-two">
                            <li><a href="https://www.facebook.com/TBGentreprise?mibextid=9R9pXO"><i
                                        class="fab fa-facebook"></i></a></li>
                            <li><a href="https://youtube.com/channel/UC3lltuUYIdE-i_bfkLUB3UQ"><i
                                        class="fab fa-youtube"></i></a></li>
                            <li><a href="https://instagram.com/thebestgroupdrc?igshid=NzZlODBkYWE4Ng=="><i
                                        class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!--Footer Column-->
                <div class="footer-column col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="footer-widget">
                        <h6 class="widget-title">Newsletter</h6>
                        <div class="widget-content">
                            <div class="subscribe-form">
                                <div class="text">@lang("infos.contactform.info")</div>
                                <form method="post" action="{{ route('sendNewslestter') }}" id="newsletter">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email" class="email" value=""
                                            placeholder="@lang('infos.contactform.email')" required="">
                                        <button type="submit" class="theme-btn" id="btnNews"><span class="btn-title"><i
                                                    class="fa fa-paper-plane"></i></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container">
                <div class="copyright-text">
                    <p>@lang("infos.all_right_reserved") &copy; Copyright 2023 TBG, Design by <a
                            href="silasmas.com">SDev</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--End Main Footer -->
