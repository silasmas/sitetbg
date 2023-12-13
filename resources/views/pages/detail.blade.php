@extends('pages.welcome',['titre'=>"portfolio - detail"])


@section('content')

<!-- Start main-content -->
<section class="page-title" style="background-image: url({{asset('common/newimg/p.jpg')}});">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title mt-lg-5">Portfolio Details</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('accueil') }}">@lang("infos.main_menu.home")</a></li>
                {{-- <li><a href="#">Pages</a></li> --}}
                <li>@lang("infos.main_menu.portfolio")</li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->
<!--Project Details Start-->
<section class="project-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="project-details__top">
                    <div class="project-details__img"> <img src="{{asset('common/newimg/p.jpg')}}" alt=""> </div>
                </div>
            </div>
        </div>
        <div class="project-details__content">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="project-details__content-left">
                        <h3 class="mb-4">Here to Know About This Project</h3>
                        <p class="">Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Asperiores, repellat aliquid. Est corrupti officiis dignissimos deserunt sunt minima iusto quia saepe tempora consectetur dolor deleniti voluptatum et, eos vitae pariatur molestiae odit quos enim voluptas nobis ullam voluptatem cum iste. Dolore modi, animi optio, dignissimos delectus pariatur similique harum eos. </p>
                        <p class="mb-5">Beyond more stoic this along goodness hey this this
                            wow manatee mongoose one as since a far flustered impressive manifest Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum illo ea ad, nam quisquam optio vel tempora, minus placeat, ut nisi quam quos laboriosam eos quibusdam cum atque suscipit quod dignissimos magni doloribus facere eius soluta possimus. Officiis, autem similique sequi labore aliquid corporis illo omnis voluptate optio possimus doloremque, error reiciendis delectus ex tempore, architecto eaque, inventore nihil pariatur quibusdam facere reprehenderit? Doloribus deleniti sapiente, dicta, dolorem unde deserunt quisquam. Dolore consequuntur reiciendis corporis perspiciatis quam fuga magnam molestiae minima culpa ab beatae vel itaque cumque et adipisci autem nisi qui esse in, deserunt numquam hic? Et, eligendi, assumen daEst corrupti officiis dignissimos.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="project-details__content-right">
                        <div class="project-details__details-box">
                            <div class="project-details__bg-shape"> </div>
                            <ul class="list-unstyled project-details__details-list">
                                <li>
                                    <p class="project-details__client">Date</p>
                                    <h4 class="project-details__name">10 January, 2023</h4>
                                </li>
                                <li>
                                    <p class="project-details__client">Client</p>
                                    <h4 class="project-details__name">Kodesolution Ltd</h4>
                                </li>
                                <li>
                                    <p class="project-details__client">Website</p>
                                    <h4 class="project-details__name">www.domain.com</h4>
                                </li>
                                <li>
                                    <p class="project-details__client">Location</p>
                                    <h4 class="project-details__name">New York, USA</h4>
                                </li>
                                <li>
                                    <p class="project-details__client">Value</p>
                                    <h4 class="project-details__name">$12,367</h4>
                                </li>
                                <li>
                                    <div class="project-details__social"> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-facebook"></i></a> <a href="#"><i class="fab fa-pinterest-p"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="projects-section" style="background: white !important" id="portfolio">
            <div class="upper-box">
                <div class="auto-container">
                    <div class="sec-title">
                        <span class="sub-title">Revoir</span>
                        <h2>En image </h2>
                    </div>
                </div>
            </div>
        <div class="carousel-outer">
			<!--clients carousel-->
			<div class="projects-carousel owl-carousel owl-theme default-navs">
				<div class="project-block">
					<div class="image-box">
						<figure class="image"><a href="{{asset('common/newimg/p.jpg')}}" class="lightbox-image"><img src="{{asset('common/newimg/p.jpg')}}" alt=""></a> </figure>
						<div class="caption-box">
							<h4 class="title"><a href="#"></a></h4>
						</div>
					</div>
				</div>
				<div class="project-block">
					<div class="image-box">
						<figure class="image"><a href="{{asset('common/newimg/p.jpg')}}" class="lightbox-image"><img src="{{asset('common/newimg/p.jpg')}}" alt=""></a> </figure>
						<div class="caption-box">
							<h4 class="title"><a href="#"></a></h4>
						</div>
					</div>
				</div>
				<div class="project-block">
					<div class="image-box">
						<figure class="image"><a href="{{asset('common/newimg/p.jpg')}}" class="lightbox-image"><img src="{{asset('common/newimg/p.jpg')}}" alt=""></a> </figure>
						<div class="caption-box">
							<h4 class="title"><a href="#"></a></h4>
						</div>
					</div>
				</div>
				<div class="project-block">
					<div class="image-box">
						<figure class="image"><a href="{{asset('common/newimg/p.jpg')}}" class="lightbox-image"><img src="{{asset('common/newimg/p.jpg')}}" alt=""></a> </figure>
						<div class="caption-box">
							<h4 class="title"><a href="#"></a></h4>
						</div>
					</div>
				</div>
				<div class="project-block">
					<div class="image-box">
						<figure class="image"><a href="{{asset('common/newimg/p.jpg')}}" class="lightbox-image"><img src="{{asset('common/newimg/p.jpg')}}" alt=""></a> </figure>
						<div class="caption-box">
							<h4 class="title"><a href="#"></a></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

        <div class="row">
            <div class="col-xl-12">
                <div class="project-details__pagination-box">
                    <ul class="project-details__pagination list-unstyled clearfix">
                        <li class="next">
                            <div class="icon"> <a href="#" aria-label="Previous"><i class="lnr lnr-icon-arrow-left"></i></a> </div>
                            <div class="content">Previous</div>
                        </li>
                        <li class="count"><a href="#"></a></li>
                        <li class="count"><a href="#"></a></li>
                        <li class="count"><a href="#"></a></li>
                        <li class="count"><a href="#"></a></li>
                        <li class="previous">
                            <div class="content">Next</div>
                            <div class="icon"> <a href="#" aria-label="Previous"><i class="lnr lnr-icon-arrow-right"></i></a> </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Project Details End-->
 <!-- Projects Section Two-->
 <section class="projects-section-two pt-5" id="portfolio">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">recent portfolio</span>
            <h2>Our Recent work</h2>
        </div>

        <div class="carousel-outer">
            <div class="projects-carousel-two owl-carousel owl-theme default-navs">
                <!-- Project Block-->
                <div class="project-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="page-project-details.html"><img
                                        src="{{asset('common/newimg/p.jpg')}}" alt=""></a>
                            </figure>
                            <a href="page-project-details.html" class="read-more"><i
                                    class="fa fa-long-arrow-alt-right"></i></a>
                            <div class="info-box">
                                <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="info-box">
                                <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                                <div class="text">The Human Rights and Democracy Study Visa Programms</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Block-->
                <div class="project-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="page-project-details.html"><img
                                        src="images/resource/project-6.jpg" alt=""></a>
                            </figure>
                            <a href="page-project-details.html" class="read-more"><i
                                    class="fa fa-long-arrow-alt-right"></i></a>
                            <div class="info-box">
                                <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="info-box">
                                <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                                <div class="text">The Human Rights and Democracy Study Visa Programms</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Block-->
                <div class="project-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="page-project-details.html"><img
                                        src="images/resource/project-7.jpg" alt=""></a>
                            </figure>
                            <a href="page-project-details.html" class="read-more"><i
                                    class="fa fa-long-arrow-alt-right"></i></a>
                            <div class="info-box">
                                <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="info-box">
                                <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                                <div class="text">The Human Rights and Democracy Study Visa Programms</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Block-->
                <div class="project-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="page-project-details.html"><img
                                        src="images/resource/project-8.jpg" alt=""></a>
                            </figure>
                            <a href="page-project-details.html" class="read-more"><i
                                    class="fa fa-long-arrow-alt-right"></i></a>
                            <div class="info-box">
                                <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="info-box">
                                <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                                <div class="text">The Human Rights and Democracy Study Visa Programms</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Block-->
                <div class="project-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="page-project-details.html"><img
                                        src="images/resource/project-5.jpg" alt=""></a>
                            </figure>
                            <a href="page-project-details.html" class="read-more"><i
                                    class="fa fa-long-arrow-alt-right"></i></a>
                            <div class="info-box">
                                <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="info-box">
                                <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                                <div class="text">The Human Rights and Democracy Study Visa Programms</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Block-->
                <div class="project-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="page-project-details.html"><img
                                        src="images/resource/project-6.jpg" alt=""></a>
                            </figure>
                            <a href="page-project-details.html" class="read-more"><i
                                    class="fa fa-long-arrow-alt-right"></i></a>
                            <div class="info-box">
                                <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="info-box">
                                <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                                <div class="text">The Human Rights and Democracy Study Visa Programms</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Block-->
                <div class="project-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="page-project-details.html"><img
                                        src="images/resource/project-7.jpg" alt=""></a>
                            </figure>
                            <a href="page-project-details.html" class="read-more"><i
                                    class="fa fa-long-arrow-alt-right"></i></a>
                            <div class="info-box">
                                <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="info-box">
                                <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                                <div class="text">The Human Rights and Democracy Study Visa Programms</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Block-->
                <div class="project-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="page-project-details.html"><img
                                        src="images/resource/project-8.jpg" alt=""></a>
                            </figure>
                            <a href="page-project-details.html" class="read-more"><i
                                    class="fa fa-long-arrow-alt-right"></i></a>
                            <div class="info-box">
                                <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="info-box">
                                <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                                <div class="text">The Human Rights and Democracy Study Visa Programms</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Projects Section Two -->
@endsection
