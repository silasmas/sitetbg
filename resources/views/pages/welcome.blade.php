<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} | {{ isset($titre)?$titre:"" }} </title>
    <link rel="stylesheet" href="{{ asset('assets/css/lqd-essentials.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/utility.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/base1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/digital-hub.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/base2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/modern-agency.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    <!-- Fonts -->
		<link rel="stylesheet" href="https://use.typekit.net/TYPEKIT_ID.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@700&display=swap" rel="stylesheet">
</head>

<body data-localscroll-offset="80" data-mobile-nav-breakpoint="1199" data-localscroll-offset="60" data-mobile-nav-style="minimal" data-mobile-nav-scheme="dark" data-mobile-nav-trigger-alignment="right" data-mobile-header-scheme="gray" data-mobile-logo-alignment="default" data-overlay-onmobile="false">
    <!-- DEBUT PAGE -->
    <div id="wrapper">
        <div class="lqd-sticky-placeholder hidden"></div>
        @include('parties.navbar')

        <main class="content bg-cover bg-white" id="lqd-site-content" style="background-image: url(assets/images/bg.jpg);">
           <div id="lqd-contents-wrap">
              @yield('content')
           </div>
        </div>
        @include('parties.footer')
        <!-- Chargement -->
        {{--  <div class="loading">
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <div class="mr-auto ml-auto text-white" style="margin-top: 100px;">
                <h1 style="font-weight: 600;">Chargement</h1>
            </div>
        </div>  --}}
        <!-- --------- -->


    </div>
    <!-- FIN -->
    <!-- Contact modal -->
		<div id="contact-modal" class="lity-modal lqd-modal lity-hide" data-modal-type="fullscreen">
			<div class="lqd-modal-inner">
				<div class="lqd-modal-head"></div>
				<section class="lqd-section lqd-modal-content link-black bg-center bg-cover bg-norepeat" style="background-image: url(./assets/newimg/013.jpeg);">
					<div class="container min-h-100vh flex items-center flex-wrap">
						<div class="w-55percent relative flex flex-col sm:w-full">
							<div class="flex flex-col items-start justify-center py-10 pr-100 pl-10 module-content">
								<div class="ld-fancy-heading">
									<h2 class="ld-fh-element text-120 mb-0/5em leading-0/8em font-medium text-black">Laissez-nous <span>Un message.</span></h2>
								</div>
								<div class="ld-fancy-heading">
									<p class="text-18 ld-fh-element">Nous sommes là pour répondre à toutes vos questions.</p>
								</div>
								<div class="w-full flex flex-wrap module-info">
									<div class="w-50percent flex flex-col sm:w-full module-info-inner">
										<div class="mb-10 ld-fancy-heading relative">
											<h6 class="ld-fh-element inline-block relative mb-1/25em text-14 font-bold tracking-0 text-black">Carrière</h6>
										</div>
										<div class="ld-fancy-heading relative">
											<p class="ld-fh-element inline-block relative mb-0/75em text-16 leading-1/2em">Vous souhaitez rejoindre notre équipe en pleine croissance?</p>
										</div>
										<div class="mb-10 ld-fancy-heading relative">
											<p class="ld-fh-element inline-block relative mb-0/5em text-16 font-bold leading-1/2em">Contact@thebestgroup.org</p>
										</div>
									</div>
									{{-- <div class="w-50percent flex flex-col sm:w-full">
										<div class="mb-10 ld-fancy-heading relative">
											<h6 class="ld-fh-element mb-0/5em inline-block relative mb-1/25em text-14 font-bold tracking-0 text-black">careers</h6>
										</div>
										<div class="ld-fancy-heading relative">
											<p class="ld-fh-element inline-block relative mb-0/75em text-16 leading-1/2em">Would you like to join our growing team?</p>
										</div>
										<div class="mb-10 ld-fancy-heading relative">
											<p class="ld-fh-element inline-block relative mb-0/5em text-16 font-bold leading-1/2em">careers@hub.com</p>
										</div>
									</div> --}}
								</div>
							</div>
						</div>
						<div class="w-45percent relative flex flex-col sm:w-full">
							<div class="lqd-contact-form lqd-contact-form-inputs-underlined lqd-contact-form-button-lg lqd-contact-form-button-block p-10">
								<div role="form">
									<div class="screen-reader-response">
										<p role="status" aria-live="polite" aria-atomic="true"></p>
									</div>
									<form action="./assets/php/mailer.php" method="post" class="lqd-cf-form" novalidate="novalidate" data-status="init">
										<div class="row">
											<div class="col col-md-6 col-12 p-0">
												<p class="m-0 text-black-30 text-12">Nom complet</p>
												<p>
													<span class="lqd-form-control-wrap text">
														<input class="text-13 text-black" type="text" name="name" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Nom complet">
													</span>
												</p>
											</div>
											<div class="col col-md-6 col-12 p-0">
												<p class="m-0 text-black-30 text-12">Email</p>
												<p>
													<span class="lqd-form-control-wrap email">
														<input class="text-13 text-black" type="email" name="email" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Email">
													</span>
												</p>
											</div>
											<div class="col col-md-6 col-12 p-0">
												<p class="m-0 text-black-30 text-12">(Optional)</p>
												<p>
													<span class="lqd-form-control-wrap tel">
														<input class="text-13 text-black" type="tel" name="tel" value="" size="40" aria-invalid="false" placeholder="Numero de téléphone">
													</span>
												</p>
											</div>
											<div class="col col-md-6 col-12 p-0">
												<p class="m-0 text-black-30 text-12">Sujet</p>
												<p>
													<span class="lqd-form-control-wrap text">
														<input class="text-13 text-black" type="text" name="project-name" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Nom du projet">
													</span>
												</p>
											</div>
											<div class="col col-12 p-0">
												<p class="m-0 text-black-30 text-12">Your message</p>
												<p>
													<span class="lqd-form-control-wrap textarea">
														<textarea class="text-13 text-black" name="message" cols="10" rows="4" aria-required="true" aria-invalid="false" placeholder="Parlez nous de votre projet"></textarea>
													</span>
												</p>
											</div>
											<div class="col col-12 p-0">
												<span class="lqd-form-control-wrap acceptance">
													<span class="lqd-cf-form-control lqd-cf-acceptance">
														<span class="lqd-cf-list-item">
															<label>
																<input class="text-black" type="checkbox" name="acceptance" value="1" aria-invalid="false">
																<span class="lqd-cf-list-item-label">Je suis lié par les termes du Service. J'accepte la Politique de Confidentialité</span>
															</label>
														</span>
													</span>
												</span>
											</div>
											<div class="col col-12 p-0">
												<input type="submit" value="Send message" class="lqd-cf-form-control text-16 font-medium leading-1/5em bg-primary text-white border-none">
											</div>
										</div>
									</form>
									<div class="lqd-cf-response-output"></div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="lqd-modal-foot"></div>
			</div>
		</div>
		<!-- Contact modal -->
    <script src="{{asset('assets/vendors/jquery.min.js')}}"></script>
		<script src="{{asset('assets/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
		<script src="{{asset('assets/vendors/fastdom/fastdom.min.js')}}"></script>
		<script src="{{asset('assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/vendors/fresco/js/fresco.js')}}"></script>
		<script src="{{asset('assets/vendors/lity/lity.min.js')}}"></script>
		<script src="{{asset('assets/vendors/gsap/minified/gsap.min.js')}}"></script>
		<script src="{{asset('assets/vendors/gsap/utils/CustomEase.min.js')}}"></script>
		<script src="{{asset('assets/vendors/gsap/minified/DrawSVGPlugin.min.js')}}"></script>
		<script src="{{asset('assets/vendors/gsap/minified/ScrollTrigger.min.js')}}"></script>
		<script src="{{asset('assets/vendors/draw-shape/liquidDrawShape.min.js')}}"></script>
		<script src="{{asset('assets/vendors/animated-blob/liquidAnimatedBlob.min.js')}}"></script>
		<script src="{{asset('assets/vendors/fontfaceobserver.js')}}"></script>
		<script src="{{asset('assets/vendors/gsap/utils/SplitText.min.js')}}"></script>
		<script src="{{asset('assets/vendors/flickity/flickity.pkgd.min.js')}}"></script>
		<script src="{{asset('assets/vendors/flickity/flickity-fade.min.js')}}"></script>
		<script src="{{asset('assets/vendors/particles.min.js')}}"></script>
		<script src="{{asset('assets/vendors/isotope/isotope.pkgd.min.js')}}"></script>
		<script src="{{asset('assets/vendors/isotope/packery-mode.pkgd.min.js')}}"></script>
		<script src="{{asset('assets/js/liquid-gdpr.min.js')}}"></script>
		<script src="{{asset('assets/js/theme.js')}}"></script>
		<script src="{{asset('assets/js/liquid-ajax-contact-form.min.js')}}"></script>
        <!-- Start custom cursor -->
		<div class="lqd-cc lqd-cc--inner fixed pointer-events-none"></div>
		<div class="lqd-cc--el lqd-cc-solid lqd-cc-explore flex items-center justify-center rounded-full fixed pointer-events-none">
			<div class="lqd-cc-solid-bg flex absolute lqd-overlay"></div>
			<div class="lqd-cc-solid-txt flex justify-center text-center relative">
				<div class="lqd-cc-solid-txt-inner">Explide</div>
			</div>
		</div>
		<div class="lqd-cc--el lqd-cc-solid lqd-cc-drag flex items-center justify-center rounded-full fixed pointer-events-none">
			<div class="lqd-cc-solid-bg flex absolute lqd-overlay"></div>
			<div class="lqd-cc-solid-ext lqd-cc-solid-ext-left inline-flex items-center">
				<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" style="width: 1em; height: 1em;">
					<path fill="currentColor" d="M19.943 6.07L9.837 14.73a1.486 1.486 0 0 0 0 2.25l10.106 8.661c.96.826 2.457.145 2.447-1.125V7.195c0-1.27-1.487-1.951-2.447-1.125z"></path>
				</svg>
			</div>
			<div class="lqd-cc-solid-txt flex justify-center text-center relative">
				<div class="lqd-cc-solid-txt-inner">Drag</div>
			</div>
			<div class="lqd-cc-solid-ext lqd-cc-solid-ext-right inline-flex items-center">
				<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" style="width: 1em; height: 1em;">
					<path fill="currentColor" d="M11.768 25.641l10.106-8.66a1.486 1.486 0 0 0 0-2.25L11.768 6.07c-.96-.826-2.457-.145-2.447 1.125v17.321c0 1.27 1.487 1.951 2.447 1.125z"></path>
				</svg>
			</div>
		</div>
		<div class="lqd-cc--el lqd-cc-arrow inline-flex items-center fixed top-0 left-0 pointer-events-none">
			<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M60.4993 0V4.77005H8.87285L80 75.9207L75.7886 79.1419L4.98796 8.35478V60.4993H0V0H60.4993Z" />
			</svg>
		</div>
		<div class="lqd-cc--el lqd-cc-custom-icon rounded-full fixed pointer-events-none">
			<div class="lqd-cc-ci inline-flex items-center justify-center rounded-full relative">
				<svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" style="width: 1em; height: 1em;">
					<path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M16.03 6a1 1 0 0 1 1 1v8.02h8.02a1 1 0 1 1 0 2.01h-8.02v8.02a1 1 0 1 1-2.01 0v-8.02h-8.02a1 1 0 1 1 0-2.01h8.02v-8.01a1 1 0 0 1 1.01-1.01z"></path>
				</svg>
			</div>
		</div>
		<div class="lqd-cc lqd-cc--outer fixed top-0 left-0 pointer-events-none"></div>
		<!-- End custom cursor -->
        @php
            $itemName = "itemName";
        @endphp
		<template id="lqd-snickersbar">
			<div class="lqd-snickersbar flex flex-wrap lqd-snickersbar-in" data-item-id>
				<div class="lqd-snickersbar-inner flex flex-wrap items-center">
					<div class="lqd-snickersbar-detail">
						<p class="hidden lqd-snickersbar-addding-temp my-0">Adding {{$itemName}} to cart</p>
						<p class="hidden lqd-snickersbar-added-temp my-0">Added {{$itemName}} to cart</p>
						<p class="my-0 lqd-snickersbar-msg flex items-center my-0"></p>
						<p class="my-0 lqd-snickersbar-msg-done flex items-center my-0"></p>
					</div>
					<div class="lqd-snickersbar-ext ml-4"></div>
				</div>
			</div>
		</template>
		<template id="lqd-temp-sticky-header-sentinel">
			<div class="lqd-sticky-sentinel invisible absolute pointer-events-none"></div>
		</template>
		<div class="lity" role="dialog" aria-label="Dialog Window (Press escape to close)" tabindex="-1" data-modal-type="default">
			<div class="lity-wrap" data-lity-close role="document">
				<div class="lity-loader" aria-hidden="true">Loading...</div>
				<div class="lity-container">
					<div class="lity-content"></div>
				</div>
				<button class="lity-close" type="button" aria-label="Close (Press escape to close)" data-lity-close>&times;</button>
			</div>
		</div>
    <!--Start of Tawk.to Script-->
    {{-- <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5fcb9894a1d54c18d8f0bac5/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();

    </script> --}}
    <!--End of Tawk.to Script-->

</body>

</html>
