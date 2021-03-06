@php

	$setting = \App\Model\Setting::first();
	$brands = App\Model\VehicleBrand::where('status','active')->orderBy('priority')->get();
	$categories = App\Model\VehicleCategory::where('parent_category_id',0)->where('status','active')->orderBy('priority')->get();

    $requirements = App\Model\VehicleRequirement::all();
@endphp
<!DOCTYPE html><!-- Last Published: Sat Jul 18 2020 22:29:29 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="www.rentalexoticsbeasts.com" data-wf-page="5eab2e688db14a5dd693300b"
	data-wf-site="5a10aaa4d85f4b0001a53292" lang="en">
<head>
	<meta charset="utf-8" />


    {!! SEO::generate() !!}

	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta content="1ergY3uaEZfUno4hRzE8xunDKWbi2nV6QnZa2CZZDYM" name="google-site-verification" />
	<link href="/frontEnd/css/rentalexoticsbeasts.16f3cbba0.min.css" rel="stylesheet" type="text/css" />
	<link href="/Ecommerce/css/animate.min.css" rel="stylesheet" type="text/css" />
	<link href="/frontEnd/css/custom.css" rel="stylesheet" type="text/css" />
	<link href="/frontEnd/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

	<script src="/frontEnd/ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
	<script
		type="text/javascript">WebFont.load({ google: { families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic", "Oswald:200,300,400,500,600,700", "Rock Salt:regular"] } });</script>
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
	<script
		type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);
	</script>




	<link rel="stylesheet" href="/frontEnd/css/bootstrap.min.css">





    <link rel="stylesheet" href="/frontEnd/css/owl.carousel.css" integrity="sha512-RWhcC19d8A3vE7kpXq6Ze4GcPfGe3DQWuenhXAbcGiZOaqGojLtWwit1eeM9jLGHFv8hnwpX3blJKGjTsf2HxQ==" crossorigin="anonymous" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css'><link rel="stylesheet">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js'></script>
    <style>
        body{
            font-family: BasisGrotesque, Avenir, "Helvetica Neue", Helvetica, sans-serif !important;
        }

        .extra-top-margin{

            margin-top: 5em !important;
        }

        @media screen and (max-width: 479px) {
            .extra-top-margin {

                margin-top: 0em !important;

            }
        }
        .nav__brand .logo{
            height:60px !important;
        }
        .nav-container{
            padding: 0px 80px 0px 80px;
        }

        @media screen and (max-width: 767px) {
            .nav__brand .logo {
                height: 38px !important;
            }

            .nav-container{
                padding: 0px 10px 0px 10px;
            }
        }

        @media screen and (max-width: 767px) {
            .fc-scroller{
                min-height: 500px;
            }
        }

        @media screen and (max-width: 479px) {
            .nav__links {
                margin-left: 2em;
                font-size: 11px;

            }

            .phonehide {
                display: none;
            }


        }

        .slider-left-content{

            background: linear-gradient(#94ccdb, #7673ea, transparent) !important;
        }
        .carousel-caption{
            bottom: 5% !important;
        }
        .slider-left-content .heading{
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .footer_top {
            text-align: left;
        }

        .no-appearance {
            -webkit-appearance: caps-lock-indicator;
            -moz-appearance: none;
            text-indent: 1px;
            text-overflow: '';
        }

        .drawer__location--info {
            margin-top: 120px;
        }

        /*.booking-option{
            font-size: 18px !important;
            height: 55px !important;
        }*/
        .input-group {
            margin-bottom: 1rem;
        }

        .checkbox-with-content{
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin: 10px auto;
        }

        .checkout-card, .booking-card{
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.4) !important;
        }

        label.error{
            color: red !important;
        }
        .nav__link {
            padding: 0 0.8em;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 14px;
        }
        .header{
            box-shadow: 6px 3px 4px rgba(0,0,0,.08) !important;
        }

        .home__h2 {
            margin-top: 0;
            margin-bottom: .5em;
            font-size: 1.3em;
            text-align: left;
        }

        .description-section hr:before,.rentals hr:before, .rentals__section hr:before, .checkout-header hr:before, .vehicle-price hr:before , .vehicle-spec hr:before {
            display: flex;
            height: 3px;
            background-color: red;
            content: "";
            position: absolute;
            width: 20%;
            margin-top: -2px;
        }
        hr.center-hr:before{
            display: flex;
            height: 3px;
            background-color: red;
            content: "";
            position: absolute;
            width: 20%;
            margin-top: -2px;
            margin-left: 36%;
            margin-right: 40%;
        }

        .info__search {
            width: 100%;
            font-size: .9em;
        }
        .search__input{
            height: 100% !important;
        }

        .body_div {
            margin: 10px 0px;
        }
        .btn-outline-success:hover {
            color: #fff;
            background-color: red;
            border-color: red;
        }
        body {
            padding-top: 6em;
        }

        .nav__link{
            display: block !important;
        }

        a.nav__link{
            text-align: left !important;
            margin-bottom: 5px;
        }


        @media screen and (max-width: 991px) {
            a.nav__link{
                text-align: left !important;
                margin-bottom:10px;

            }
        }

        @media screen and (max-width: 575px) {
            .drawer__location--info {
                margin-top: 90px;
            }
        }
        @media screen and (max-width: 767px) {
            .nav__link {
                position: unset !important;

            }

            .dropdown__list.dropdown__list--table, .dropdown__list.dropdown__list--categories {
                width: 95vw !important;

            }

            .dropdown__list.w--open {
                left: 52%;

            }

            .nav__dropdown--arrow{
                margin-left: 10% !important;
            }
        }
        @media screen and (max-width: 479px) {
            .nav__link {
                position: unset !important;

            }

            .dropdown__list.dropdown__list--table, .dropdown__list.dropdown__list--categories {
                width: 95vw !important;

            }

            .dropdown__list.w--open {
                left: 58%;

            }


        }
        @media screen and (max-width: 575px) {
            .mobile-nopadding{
                padding-left: 0px !important;
                padding-right: 0px !important;;
            }
        }

        .w-dropdown, .w-dropdown-btn, .w-dropdown-link, .w-dropdown-toggle{
            margin-left: unset;
            margin-right: unset;
        }

        .why-us-section{
            background-color: #ddd;
        }

        .why-us-block .card-img img{
            margin-left: auto;
            margin-right: auto;
            /*width: 100%;*/
            padding: 20px !important;
            min-height: 100px;
        }

        @media screen and (max-width: 575px) {

            .why-us-block .card-img{
                padding: 0.5em;
            }


            .why-us-block .card-img img{
                height: 100px;
                padding: 10px !important;
            }


            .checkout-sidebar{
                padding-left: 5px;
                padding-right: 5px;
            }

            .checkout-main-section{
                padding-left: 5px;
                padding-right: 5px;
            }
        }

        @media screen and (max-width: 991px) {

            .checkout-container{
                padding-left: 5px;
                padding-right: 5px;
            }
        }
        .why-us-block .card-box{
            padding: 2rem;
            text-align: center;
        }
        .why-us-block{
            margin-bottom: 5px;
        }

        .rental__hero {
            padding: 2em 0;
        }

        .single-car-info p{
            min-height: 58px !important;
        }

        .carousel-indicators li {
            box-sizing: content-box;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            width: 50px;
            height: auto;
            border-top: 0px;
        }

        .carousel-indicators li img {
            height: 40px;
            border: 1px solid #ddd;
        }

        .drawer__location--logo {
            margin-bottom: 0px;
            width: 130px !important;
            align-self: center;
            margin-left: auto;
            margin-right: auto;
        }
        .drawer__location--info {
            padding: .8em 0em !important;
        }
        .navdrawer__shop--button {
            font-size: 1em;
        }





        body.loader-active {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 999;
            overflow: hidden;
        }

        .preloader {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background-color: #fff;
            z-index: 9999;
        }

        .preloader-spinner {
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            position: absolute;
        }

        .loader-content {
            width: 150px;
        }

        .btn-rounded{
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border-radius: 6px;
        }

        .quicklinks__item_brand{
            max-width: 40% !important;
        }

        .table__row {
            position: relative;
            z-index: 1;
            display: flex;
            min-height: 3.4em;
            height: auto;
        }


        .lg-four-column-vehicle, .lg-three-column-vehicle{
            position: relative;
            width: 100%;
            padding-right: 5px;
            padding-left: 5px;
        }
        .lg-four-column-vehicle{
            flex: 0 0 25%;
            max-width: 25%;
        }
        .lg-three-column-vehicle{
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }
        @media screen and (max-width: 1199px) {
            .lg-four-column-vehicle{
                flex: 0 0 33.333333% !important;
                max-width: 33.333333% !important;
            }
            .lg-three-column-vehicle{
                flex: 0 0 50% !important;
                max-width: 50% !important;
            }
        }
        @media screen and (max-width: 991px) {

            .lg-four-column-vehicle{
                flex: 0 0 50% !important;
                max-width: 50% !important;
            }
        }

        @media screen and (max-width: 575px) {
            .lg-four-column-vehicle{
                flex: 0 0 100% !important;
                max-width: 100% !important;
            }

            .lg-three-column-vehicle{
                flex: 0 0 100% !important;
                max-width: 100% !important;
            }
        }


        .table.reqs__table--nav{
            max-height: 60vh !important;
            overflow-y: scroll !important;
        }

        .nav__link {
            padding: 0 0.5em;
            font-weight: 600;
            font-size: 13px;
        }
        @media (max-width: 1199px){
            .nav-container {
                padding: 0px !important;
            }
        }

        .rentals__logo {
            z-index: 2;
            width: auto;
            height: 1.8em;
        }
    </style>

@yield('style')

</head>

<body class="loader-active">
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="/frontEnd/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>


	<header class="header">
		<div data-collapse="all" data-animation="over-right" data-duration="200" data-easing="ease-out-quad"
			data-easing2="ease-out-quad" role="banner" class="navigation w-nav">

            <div class="info-container">
				<div class="info" style="">
					<div class="left-side col-sm-6 col-md-8  d-none d-sm-flex">
					<a target="_blank"
						href="tel:{{$setting->phone}}" id="Header-Phone-Link" class="info__link"><i class="fa fa-phone mr-2"></i> {{$setting->phone}} &nbsp;  |</a>

					<div class="info__embed w-embed"><a id="Email-Link-Footer" class="info__link"
							href="mailto:{{$setting->email}}"> <i class="fa fa-envelope mr-2"></i>
                            {{$setting->email}} &nbsp; |
						</a>
					</div>
					<a href="#"
						id="Header-Map-Link" target="_blank" class="info__link infobar__link--nolink"> <i class="fa fa-clock-o mr-2"></i>{{$setting->working_day}}</a>
					</div>
                    <div class="right-side col-sm-6 col-md-4">
						<div class="info__search pull-right">
                            <form action="/vehicles" id="Header-Search-Form"
                                class="search w-form"><input type="search" class="search__input w-input" maxlength="256"
                                    name="q" placeholder="Search Here"
                                    title="Search cars, motorcycles, destinations, faqs, rental requirements, reviews, etc"
                                    required="" />

                                <button type="submit"  value=" " class="search__submit w-button" style="border-radius:0px 5px 5px 0px;background-color:#EE7;color: red;background-image: none"><i class="fa fa-search"></i>
                                </button>
                            </form>
					    </div>
					</div>
				</div>
			</div>
			<div class="nav-container" style="">

                <!-- Image and text -->
                <nav class="navbar navbar-light navbar navbar-expand-lg">
                    <div class="nav__brand navbar-brand"><a href="/" id="Header-Brand-Link" aria-current="page"
                                               class="brand w-nav-brand w--current">
                            <div class="brand__icon"></div>
                            <div style="font-size:20px;" class="brand__text text-uppercase d-none d-sm-block">Rental Exotics Beasts</div>
                        </a>
                    </div>

                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="nav__links navbar-nav">
                            <li class="nav-item">
                                <div data-delay="0" data-hover="1" class="dropdown dropdown__mobile w-dropdown">

                                    <a id="Rentals-Menu" class="nav__link nav__link--mobile w-dropdown-toggle">
                                        <div>Rentals <img src="/images/angle-right-solid.svg" alt="" style="float: right; padding: 3px;" class="nav__arrow" /> </div>
                                    </a>
                                    <nav class="dropdown__list dropdown__list--categories w-dropdown-list"><img
                                            src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5baebde8ad0c8ab1cfd622ef_icon-arrow-up-gray.svg"
                                            alt="" class="nav__dropdown--arrow" />
                                        <div class="nav__dropdown--pane">

                                            <div class="nav__categories">

                                                @foreach($categories??array(  ) as $category)
                                                    <a href="/vehicles?category={{ $category->slug }}" id="Nav-Car-Rentals-Link" class="nav__categories--link w-inline-block">
                                                        <div class="nav__categories--graphic">
                                                            <img src="{{url($category->photo??'')}}"
                                                                 alt="" class="nav__categories--img" onerror="this.src='/no-image.png';" />
                                                        </div>
                                                        <div class="nav__categories--text">
                                                            <div class="nav__categories--heading">{{ $category->name }}</div>
                                                            <div class="nav__categories--desc">{{substr($category->description,0,80)}}</div>
                                                        </div>
                                                    </a>

                                                @endforeach

                                                <div class="nav__categories--quicklinks">
                                                    <div class="quicklinks__collection w-dyn-list">
                                                        <div role="list"
                                                             class="quicklinks__list quicklinks__list--grid w-dyn-items">
                                                            @foreach($brands??array() as $brand)
                                                                <div role="listitem"
                                                                     class="quicklinks__item quicklinks__item_brand quicklinks__item--nav w-dyn-item"><a
                                                                        id="Nav-Quicklink" href="/vehicles?brand={{ $brand->slug }}"
                                                                        class="quicklinks__link w-inline-block"><img
                                                                            src="{{url($brand->photo??'')}}"
                                                                            alt="Bugatti" class="quicklinks__logo" />
                                                                        <div class="quicklinks__details">
                                                                            <div class="quicklinks__title">{{ $brand->name }}</div>

                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div data-delay="0" data-hover="1" class="dropdown  dropdown__mobile w-dropdown">
                                    <a  id="Requirements-Menu" class="nav__link nav__link--mobile w-dropdown-toggle">
                                        <div>Requirements<img src="/images/angle-right-solid.svg" alt="" style="float: right; padding: 3px;" class="nav__arrow" /></div>
                                    </a>
                                    <nav class="dropdown__list dropdown__list--table w-dropdown-list"><img
                                            src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5baebde8ad0c8ab1cfd622ef_icon-arrow-up-gray.svg"
                                            alt="" class="nav__dropdown--arrow" />
                                        <div class="nav__dropdown--pane">
                                            <div class="nav__reqs">
                                                <div class="switch switch__table">
                                                    <div class="switch__label switch__label--on">Bangladesh<br />Drivers</div><a
                                                        id="Requirements-Switch" href="#" class="switch__link w-inline-block">
                                                        <div class="switch__button"></div>
                                                    </a>
                                                    <div class="switch__label switch__label--off">International<br />Drivers</div>
                                                </div>
                                                <div class="table reqs__table--nav">
                                                    <div class="table__row table__row--header">
                                                        <div
                                                            class="table__cell table__cell--dimension table__cell--dimension-header">All Custom
                                                        </div>
                                                        <!--@foreach($requirements as $requirement)
                                                            <div class="table__cell">{{ $requirement->type }}</div>
                                                        @endforeach-->
                                                        <div class="table__cell">Age</div>
                                                        <div class="table__cell">Documents</div>
                                                    </div>
                                                    @foreach($requirements as $requirement)
                                                    <div class="table__row">
                                                        <div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
                                                            <div id="Requirements-Age-Tooltip"
                                                                    class="table__dropdown--toggle w-dropdown-toggle">
                                                                    <div class="table__cell" style="font-size: 1.2em;">{{$requirement->type?$requirement->type:$requirement->category->name}} ???</div>
                                                                <!--<div class="new_style">Age ???</div>-->
                                                            </div>
                                                            <nav class="table__dropdown--pane w-dropdown-list">
                                                                <div>{{$requirement->category->description??''}}</div>
                                                                <div class="table__dropdown--arrow"></div>
                                                            </nav>
                                                        </div>
                                                        <div class="table__cell--wrapper">
                                                            <div class="table__cell">{{$requirement->local_age}}</div>
                                                            <div class="table__cell table__cell--intl">{{$requirement->international_age}}</div>
                                                        </div>
                                                        <div class="table__cell--wrapper">
                                                            <div class="table__cell">{{$requirement->local_driving_licence}}</div>
                                                            <div class="table__cell table__cell--intl">{{$requirement->international_driving_licence}}</div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    <!--<div class="table__row">
                                                        <div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
                                                            <div id="Requirements-License-Tooltip"
                                                                 class="table__dropdown--toggle w-dropdown-toggle">
                                                                <div class="text-block">Drivers License ???</div>
                                                            </div>
                                                            <nav class="table__dropdown--pane w-dropdown-list">
                                                                <div>Every driver is required to be listed on the rental agreement
                                                                    and provide a VALID and NON-EXPIRED drivers license with the
                                                                    name matching EXACTLY the name on the rental
                                                                    agreement.<br /><strong>Note:</strong> International Drivers
                                                                    Licenses are accepted.</div>
                                                                <div class="table__dropdown--arrow"></div>
                                                            </nav>
                                                        </div>
                                                        @foreach($requirements as $requirement)
                                                        <div class="table__cell--wrapper">
                                                            <div class="table__cell">{{$requirement->local_driving_licence}}</div>
                                                            <div class="table__cell table__cell--intl">{{$requirement->international_driving_licence}}</div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="table__row">
                                                        <div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
                                                            <div id="Requirements-Insurance-Tooltip"
                                                                 class="table__dropdown--toggle w-dropdown-toggle">
                                                                <div class="text-block">Car Insurance ???</div>
                                                            </div>
                                                            <nav class="table__dropdown--pane w-dropdown-list">
                                                                <div>Every driver is required to have an active car insurance policy
                                                                    before driving one of our rental vehicles.</div>
                                                                <div class="table__dropdown--arrow"></div>
                                                            </nav>
                                                        </div>
                                                        @foreach($requirements as $requirement)
                                                        <div class="table__cell--wrapper">
                                                            <div class="table__cell">{{$requirement->local_insurance}}</div>
                                                            <div class="table__cell table__cell--intl">{{$requirement->international_insurance}}</div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="table__divider">Upgrade Options</div>
                                                    <div class="table__row">
                                                        <div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
                                                            <div id="Requirements-Insurance-Tooltip"
                                                                 class="table__dropdown--toggle w-dropdown-toggle">
                                                                <div class="text-block">Supplemental<br />Liability Insurance ???</div>
                                                            </div>
                                                            <nav class="table__dropdown--pane w-dropdown-list">
                                                                <div>Every driver is required to have an active car insurance policy
                                                                    before driving one of our rental vehicles.</div>
                                                                <div class="table__dropdown--arrow"></div>
                                                            </nav>
                                                        </div>
                                                        @foreach($requirements as $requirement)
                                                        <div class="table__cell--wrapper">
                                                            <div class="table__cell">{{$requirement->local_liability_insurance}}</div>
                                                            <div class="table__cell table__cell--intl">{{$requirement->international_liability_insurance}}</div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="table__row">
                                                        <div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
                                                            <div id="Requirements-Insurance-Tooltip"
                                                                 class="table__dropdown--toggle w-dropdown-toggle">
                                                                <div class="text-block">Property Damage<br />Waiver ???</div>
                                                            </div>
                                                            <nav class="table__dropdown--pane w-dropdown-list">
                                                                <div>Every driver is required to have an active car insurance policy
                                                                    before driving one of our rental vehicles.</div>
                                                                <div class="table__dropdown--arrow"></div>
                                                            </nav>
                                                        </div>
                                                        @foreach($requirements as $requirement)
                                                        <div class="table__cell--wrapper">
                                                            <div class="table__cell">{{$requirement->local_property_damage_waiver}}</div>
                                                            <div class="table__cell table__cell--intl">{{$requirement->international_property_damage_waiver}}</div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="table__row">
                                                        <div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
                                                            <div id="Requirements-Tire-Protection-Tooltip"
                                                                 class="table__dropdown--toggle w-dropdown-toggle">
                                                                <div class="text-block">Tire<br />Protection ???</div>
                                                            </div>
                                                            <nav class="table__dropdown--pane w-dropdown-list">
                                                                <div>Covers cost of tire replacement, tow charges, and loss of
                                                                    rental time up to $1,000.<br /><strong>Note:</strong> Tire
                                                                    replacement can take up to several hours depending on the
                                                                    location of incident, traffic conditions, and availability.
                                                                </div>
                                                                <div class="table__dropdown--arrow"></div>
                                                            </nav>
                                                        </div>
                                                        @foreach($requirements as $requirement)
                                                        <div class="table__cell--wrapper">
                                                            <div class="table__cell">{{$requirement->local_tire_protection}}</div>
                                                            <div class="table__cell table__cell--intl">{{$requirement->international_tire_protection}}</div>
                                                        </div>
                                                        @endforeach

                                                    </div>
                                                    <div class="table__row">
                                                        <div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
                                                            <div id="Requirements-Breakdown-Coverage-Tooltip"
                                                                 class="table__dropdown--toggle w-dropdown-toggle">
                                                                <div class="text-block">Mechanical<br />Breakdown Coverage ???</div>
                                                            </div>
                                                            <nav class="table__dropdown--pane w-dropdown-list">
                                                                <div>Covers cost of Mechanical Parts due to wear and tear, tow
                                                                    charges, and loss of rental time up to
                                                                    $1,000.<br /><strong>Note:</strong> Does NOT cover mechanical
                                                                    failure due to customer mis-use or gross negligence operating
                                                                    the vehicle. You are fully responsible for your own actions
                                                                    while operating a Rental Exotics Beasts vehicle.</div>
                                                                <div class="table__dropdown--arrow"></div>
                                                            </nav>
                                                        </div>
                                                        @foreach($requirements as $requirement)
                                                        <div class="table__cell--wrapper">
                                                            <div class="table__cell">{{$requirement->local_mechanical_breakdown_coverage}}</div>
                                                            <div class="table__cell table__cell--intl">{{$requirement->international_mechanical_breakdown_coverage}}</div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="table__row">
                                                        <div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
                                                            <div id="Requirements-Prepaid-Fuel-Tooltip"
                                                                 class="table__dropdown--toggle w-dropdown-toggle">
                                                                <div class="text-block">Prepaid<br />Fuel Credit ???</div>
                                                            </div>
                                                            <nav class="table__dropdown--pane w-dropdown-list">
                                                                <div>Allows you to return the vehicle without needing to refuel
                                                                    beforehand. <br /><strong>Note:</strong> ALL??vehicles??(including
                                                                    auto/moto cycles) require 91 OCTANE??RATING??fuel. Anyone caught
                                                                    using lower quality fuel will be fined $2,500 and responsible
                                                                    for any subsequent damages resulting from improper fuel.</div>
                                                                <div class="table__dropdown--arrow"></div>
                                                            </nav>
                                                        </div>
                                                        @foreach($requirements as $requirement)
                                                        <div class="table__cell--wrapper">
                                                            <div class="table__cell">{{$requirement->local_fuel_credit}}</div>
                                                            <div class="table__cell table__cell--intl">{{$requirement->international_fuel_credit}}</div>
                                                        </div>
                                                        @endforeach

                                                    </div>-->

                                                    <div class="table__row table__divider">
                                                        <div data-delay="0" class="table__cell table__cell--dimension w-dropdown" style="border: none">
                                                            <div id="Requirements-Supplemental-Insurance-Tooltip"
                                                                class="table__dropdown--toggle w-dropdown-toggle">
                                                                <div class="text-block">VEHICLE RENTAL INSURANCE ???
                                                                </div>
                                                            </div>
                                                            <nav class="table__dropdown--pane w-dropdown-list">
                                                                <div>All drivers must have their vehicle rental insurance before making any vehicle reservation and provide the policy number at the pickup location or delivery address.</div>
                                                                <br>
                                                                <div class=""><strong>NOTE:</strong> Making the vehicle reservation without an insurance can result in the cancellation of your vehicle reservation.</div>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                    <div class="table__row">
                                                        <div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
                                                            <div id="Requirements-Damage-Waiver-Tooltip"
                                                                class="table__dropdown--toggle w-dropdown-toggle">
                                                                <div class="text-block">Minimum Vehicle Rental <br> Coverage Requirements </div>
                                                            </div>
                                                        </div>


                                                        <div class="table__cell--wrapper">
                                                            <div class="table__cell text-left">
                                                                <ul>
                                                                    <li>$40.000 Rental vehicle damage and theft coverage.</li>
                                                                    <li>$1.000 Baggage and personal property lost.</li>
                                                                    <li>$1.000 lost key reimbursement.</li>
                                                                    <li>$500 towing charges</li>
                                                                    <li>and all others options that can better protect you and the rental vehicle in case of an accident.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div data-delay="0" data-hover="1" class="dropdown  dropdown__mobile w-dropdown">
                                    <a  id="About-Menu" class="nav__link nav__link--mobile w-dropdown-toggle">
                                        <div>About <img src="/images/angle-right-solid.svg" alt="" style="float: right; padding: 3px;" class="nav__arrow" /></div>
                                    </a>
                                    <nav class="dropdown__list dropdown__list--about w-dropdown-list"><img
                                            src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5baebde8ad0c8ab1cfd622ef_icon-arrow-up-gray.svg"
                                            alt="" class="nav__dropdown--arrow" />
                                        <div class="nav__dropdown--pane">
                                            <div class="nav__about">
                                                <div class="nav__about--column about__column--links">
                                                    <a href="/faqs"
                                                       id="Nav-FAQs-Link" class="nav__about--link w-dropdown-link">FAQs</a>
                                                    <a href="/terms" id="Nav-Privacy-Link"
                                                       class="nav__about--link w-dropdown-link">Terms & Conditions</a>
                                                    <a href="/privacy" id="Nav-Privacy-Link"
                                                       class="nav__about--link w-dropdown-link">Privacy</a>
                                                    <a href="/covid-19-update" id="Nav-Privacy-Link"
                                                       class="nav__about--link w-dropdown-link">COVID-19 Update</a>
                                                    <a href="mailto:{{$setting->email}}"
                                                       id="Nav-Feedback-Link" class="nav__about--link w-dropdown-link">Feedback</a>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a id="Shop-Link-Nav" href="/shop" class="nav__link nav__link--mobile w-inline-block">
                                    <div>Shop</div>
                                </a>
                            </li>
                            <li class="nav-item" style="padding: 0px 0px 5px 0px;">
                                <a href="/login" class="user nav__link nav__link--mobile w-inline-block">
                                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                                    <span class="">Account</span>
                                </a>
                            </li>
                            <!--<li class="nav-item">

                                <a href="/covid-19-update" class="user nav__link w-inline-block bg-danger text-white" style="padding: .05rem 1.25rem; border-radius: 10px;width: max-content;margin-left: 15px;">

                                    <span class="">COVID-19 UPDATE</span>
                                </a>
                            </li>-->
                        </ul>
                    </div>
                </nav>
				<!--<div class="nav">-->



					<!--<div class="nav__brand"><a href="/" id="Header-Brand-Link" aria-current="page"
							class="brand w-nav-brand w--current">
							<div class="brand__icon"></div>
							<div style="font-size:20px;" class="brand__text text-uppercase d-none d-lg-block">Rental Exotics Beasts</div>
						</a>
					</div>
					<div class="nav__links hide-mobile" id="dmenu">
						<div data-delay="0" data-hover="1" class="dropdown dropdown__mobile w-dropdown">
							<div id="Rentals-Menu" class="nav__link nav__link--mobile w-dropdown-toggle">
								<div>Rentals</div>
							</div>
							<nav class="dropdown__list dropdown__list--categories w-dropdown-list"><img
									src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5baebde8ad0c8ab1cfd622ef_icon-arrow-up-gray.svg"
									alt="" class="nav__dropdown--arrow" />
								<div class="nav__dropdown--pane">

									<div class="nav__categories">

										@foreach($categories??array(  ) as $category)
											<a href="/vehicles?category={{ $category->slug }}" id="Nav-Car-Rentals-Link" class="nav__categories--link w-inline-block">
												<div class="nav__categories--graphic">
													<img src="{{url($category->photo??'')}}"
														alt="" class="nav__categories--img" onerror="this.src='/no-image.png';" />
												</div>
												<div class="nav__categories--text">
													<div class="nav__categories--heading">{{ $category->name }}</div>
													<div class="nav__categories--desc">{{substr($category->description,0,80)}}</div>
												</div>
											</a>

										@endforeach

										<div class="nav__categories--quicklinks">
											<div class="quicklinks__collection w-dyn-list">
												<div role="list"
													class="quicklinks__list quicklinks__list--grid w-dyn-items">
													@foreach($brands??array() as $brand)
													<div role="listitem"
														class="quicklinks__item quicklinks__item--nav w-dyn-item"><a
															id="Nav-Quicklink" href="/vehicles?brand={{ $brand->slug }}"
															class="quicklinks__link w-inline-block"><img
																src="{{url($brand->photo??'')}}"
																alt="Bugatti" class="quicklinks__logo" />
															<div class="quicklinks__details">
																<div class="quicklinks__title">{{ $brand->name }}</div>

															</div>
														</a>
													</div>
													@endforeach
												</div>
											</div>
										</div>
									</div>
								</div>
							</nav>
						</div>
						<div data-delay="0" data-hover="1" class="dropdown w-dropdown">
							<div id="Requirements-Menu" class="nav__link w-dropdown-toggle">
								<div>Requirements</div>
							</div>
							<nav class="dropdown__list dropdown__list--table w-dropdown-list"><img
									src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5baebde8ad0c8ab1cfd622ef_icon-arrow-up-gray.svg"
									alt="" class="nav__dropdown--arrow" />
								<div class="nav__dropdown--pane">
									<div class="nav__reqs">
										<div class="switch switch__table">
											<div class="switch__label switch__label--on">United States<br />Drivers</div><a
												id="Requirements-Switch" href="#" class="switch__link w-inline-block">
												<div class="switch__button"></div>
											</a>
											<div class="switch__label switch__label--off">International<br />Drivers</div>
										</div>
										<div class="table reqs__table--nav">
											<div class="table__row table__row--header">
												<div
													class="table__cell table__cell--dimension table__cell--dimension-header">
												</div>
												<div class="table__cell">Exotic<br />Cars &amp; SUVs</div>
												<div class="table__cell">Auto &amp;??Moto<br />Cycles</div>
											</div>
											<div class="table__row">
												<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
													<div id="Requirements-Age-Tooltip"
														class="table__dropdown--toggle w-dropdown-toggle">
														<div>Age ???</div>
													</div>
													<nav class="table__dropdown--pane w-dropdown-list">
														<div>Minimum Age requirements are strictly enforced and ensure
															proper insurance protection. All renters who allow an underage
															driver will be fined $2,500 and their rental will be immediately
															canceled.</div>
														<div class="table__dropdown--arrow"></div>
													</nav>
												</div>
												<div class="table__cell">25+</div>
												<div class="table__cell">21+</div>
											</div>
											<div class="table__row">
												<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
													<div id="Requirements-License-Tooltip"
														class="table__dropdown--toggle w-dropdown-toggle">
														<div class="text-block">Drivers License ???</div>
													</div>
													<nav class="table__dropdown--pane w-dropdown-list">
														<div>Every driver is required to be listed on the rental agreement
															and provide a VALID and NON-EXPIRED drivers license with the
															name matching EXACTLY the name on the rental
															agreement.<br /><strong>Note:</strong> International Drivers
															Licenses are accepted.</div>
														<div class="table__dropdown--arrow"></div>
													</nav>
												</div>
												<div class="table__cell--wrapper">
													<div class="table__cell">United States<br />Drivers License</div>
													<div class="table__cell table__cell--intl">International<br />Drivers
														License</div>
												</div>
												<div class="table__cell--wrapper">
													<div class="table__cell">United States<br />Drivers License</div>
													<div class="table__cell table__cell--intl">International<br />Drivers
														License</div>
												</div>
											</div>
											<div class="table__row">
												<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
													<div id="Requirements-Insurance-Tooltip"
														class="table__dropdown--toggle w-dropdown-toggle">
														<div class="text-block">Car Insurance ???</div>
													</div>
													<nav class="table__dropdown--pane w-dropdown-list">
														<div>Every driver is required to have an active car insurance policy
															before driving one of our rental vehicles.</div>
														<div class="table__dropdown--arrow"></div>
													</nav>
												</div>
												<div class="table__cell--wrapper">
													<div data-delay="0" class="table__cell w-dropdown">
														<div id="Requirements-Insurance-Exotics-US-Tooltip"
															class="table__dropdown--toggle w-dropdown-toggle">
															<div class="text-block">Comp/Collision<br />100/300/50 ???</div>
														</div>
														<nav class="table__dropdown--pane w-dropdown-list">
															<div><span>Each driver is required to provide their own car
																	insurance that covers any liability claim up to
																	$100k/$300k/$50k and has full comprehensive &amp;
																	collision coverage with a maximum $1,000
																	deductible.<br /><strong>Note:</strong> Your insurance
																	policy still requires Comp/Collision coverage even if
																	you decide to purchase an optional insurance
																	upgrade.</span></div>
															<div class="table__dropdown--arrow"></div>
														</nav>
													</div>
													<div data-delay="0" class="table__cell table__cell--intl w-dropdown">
														<div id="Requirements-Insurance-Exotics-Intl-Tooltip"
															class="table__dropdown--toggle w-dropdown-toggle">
															<div class="text-block">$199<br />Royalty Insurance ???</div>
														</div>
														<nav class="table__dropdown--pane w-dropdown-list">
															<div><span>Covers any bodily injury claim up to $1,000,000 and
																	has full comprehensive and collision coverage with a
																	$15,000 deductible.</span></div>
															<div class="table__dropdown--arrow"></div>
														</nav>
													</div>
												</div>
												<div data-delay="0" class="table__cell w-dropdown">
													<div id="Requirements-Insurance-Cycles-Tooltip"
														class="table__dropdown--toggle w-dropdown-toggle">
														<div class="text-block">$29<br />Royalty Insurance ???</div>
													</div>
													<nav class="table__dropdown--pane w-dropdown-list">
														<div><span>Each driver is required to purchase the Royalty Insurance
																Policy that covers any bodily injury claim up to $15k/$30k
																and has full comprehensive &amp; collision coverage with a
																$2,500 deductible.</span></div>
														<div class="table__dropdown--arrow"></div>
													</nav>
												</div>
											</div>
											<div class="table__divider">Upgrade Options</div>
											<div class="table__row">
												<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
													<div id="Requirements-Supplemental-Insurance-Tooltip"
														class="table__dropdown--toggle w-dropdown-toggle">
														<div class="text-block">Supplemental<br />Liability Insurance ???
														</div>
													</div>
													<nav class="table__dropdown--pane w-dropdown-list">
														<div>Protects against any bodily injury incurred during your rental
															period up to the combined value of $1,000,000 for any passenger
															or passerby regardless of who is at fault.</div>
														<div class="table__dropdown--arrow"></div>
													</nav>
												</div>
												<div class="table__cell--wrapper">
													<div class="table__cell">$99</div>
													<div class="table__cell table__cell--intl">Included</div>
												</div>
												<div class="table__cell">--</div>
											</div>
											<div class="table__row">
												<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
													<div id="Requirements-Damage-Waiver-Tooltip"
														class="table__dropdown--toggle w-dropdown-toggle">
														<div class="text-block">Property Damage<br />Waiver ???</div>
													</div>
													<nav class="table__dropdown--pane w-dropdown-list">
														<div>Protects against common damages up to a specified limit
															including curbed wheels, windshield cracks, minor
															scuffs/scratches, etc.<br /><strong>Note: </strong>If damages
															exceed the specified limit and results in an insurance claim,
															this will act as a deductible waiver.</div>
														<div class="table__dropdown--arrow"></div>
													</nav>
												</div>
												<div data-delay="0" class="table__cell w-dropdown">
													<div id="Requirements-Damage-Waiver-Exotics-Tooltip"
														class="table__dropdown--toggle w-dropdown-toggle">
														<div class="text-block">$99 ???</div>
													</div>
													<nav class="table__dropdown--pane w-dropdown-list">
														<div>Protects against any damages up to a $3,500 (based on the
															actual cost of repair).<br />If the damage exceeds $3,500 and
															results in an insurance claim, this will act as a deductible
															waiver.</div>
														<div class="table__dropdown--arrow"></div>
													</nav>
												</div>
												<div data-delay="0" class="table__cell w-dropdown">
													<div id="Requirements-Damage-Waiver-Cycles-Tooltip"
														class="table__dropdown--toggle w-dropdown-toggle">
														<div class="text-block">$49 ???</div>
													</div>
													<nav class="table__dropdown--pane w-dropdown-list">
														<div>Protects against any damages up to a $2,500 (based on the
															actual cost of repair).<br />If the damage exceeds $2,500 and
															results in an insurance claim, this will act as a deductible
															waiver.</div>
														<div class="table__dropdown--arrow"></div>
													</nav>
												</div>
											</div>
											<div class="table__row">
												<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
													<div id="Requirements-Tire-Protection-Tooltip"
														class="table__dropdown--toggle w-dropdown-toggle">
														<div class="text-block">Tire<br />Protection ???</div>
													</div>
													<nav class="table__dropdown--pane w-dropdown-list">
														<div>Covers cost of tire replacement, tow charges, and loss of
															rental time up to $1,000.<br /><strong>Note:</strong> Tire
															replacement can take up to several hours depending on the
															location of incident, traffic conditions, and availability.
														</div>
														<div class="table__dropdown--arrow"></div>
													</nav>
												</div>
												<div class="table__cell">$49</div>
												<div class="table__cell">$35</div>
											</div>
											<div class="table__row">
												<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
													<div id="Requirements-Breakdown-Coverage-Tooltip"
														class="table__dropdown--toggle w-dropdown-toggle">
														<div class="text-block">Mechanical<br />Breakdown Coverage ???</div>
													</div>
													<nav class="table__dropdown--pane w-dropdown-list">
														<div>Covers cost of Mechanical Parts due to wear and tear, tow
															charges, and loss of rental time up to
															$1,000.<br /><strong>Note:</strong> Does NOT cover mechanical
															failure due to customer mis-use or gross negligence operating
															the vehicle. You are fully responsible for your own actions
															while operating a Rental Exotics Beasts vehicle.</div>
														<div class="table__dropdown--arrow"></div>
													</nav>
												</div>
												<div class="table__cell">$99</div>
												<div class="table__cell">$49</div>
											</div>
											<div class="table__row">
												<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
													<div id="Requirements-Prepaid-Fuel-Tooltip"
														class="table__dropdown--toggle w-dropdown-toggle">
														<div class="text-block">Prepaid<br />Fuel Credit ???</div>
													</div>
													<nav class="table__dropdown--pane w-dropdown-list">
														<div>Allows you to return the vehicle without needing to refuel
															beforehand. <br /><strong>Note:</strong> ALL??vehicles??(including
															auto/moto cycles) require 91 OCTANE??RATING??fuel. Anyone caught
															using lower quality fuel will be fined $2,500 and responsible
															for any subsequent damages resulting from improper fuel.</div>
														<div class="table__dropdown--arrow"></div>
													</nav>
												</div>
												<div class="table__cell">$99</div>
												<div class="table__cell">$49</div>
											</div>
										</div>
									</div>
								</div>
							</nav>
						</div>
						<div data-delay="0" data-hover="1" class="dropdown w-dropdown">
							<div id="About-Menu" class="nav__link w-dropdown-toggle">
								<div>About</div>
							</div>
							<nav class="dropdown__list dropdown__list--about w-dropdown-list"><img
									src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5baebde8ad0c8ab1cfd622ef_icon-arrow-up-gray.svg"
									alt="" class="nav__dropdown--arrow" />
								<div class="nav__dropdown--pane">
									<div class="nav__about">
										<div class="nav__about--column about__column--links">
											<a href="/faqs"
												id="Nav-FAQs-Link" class="nav__about--link w-dropdown-link">FAQs</a>
											<a href="/terms" id="Nav-Privacy-Link"
												class="nav__about--link w-dropdown-link">Terms & Conditions</a>
											<a href="/privacy" id="Nav-Privacy-Link"
												class="nav__about--link w-dropdown-link">Privacy</a>
											<a href="/term" id="Nav-Privacy-Link"
												class="nav__about--link w-dropdown-link">Terms & Conditions</a>
											<a href="mailto:{{$setting->email}}"
												id="Nav-Feedback-Link" class="nav__about--link w-dropdown-link">Feedback</a>
										</div>
									</div>
								</div>
							</nav>
						</div>
						<a id="Rally-Link-Nav" href="#" class="nav__link nav__link--hidden w-inline-block">
							<div>Rally</div>
						</a>

						<a id="Shop-Link-Nav" href="/shop" class="nav__link w-inline-block">
							<div>Shop</div>
						</a>
						<a href="/login" class="user nav__link w-inline-block" style="font-size: 20px;">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</a>
					</div> -->

				<!--</div>-->
			</div>

		</div>
	</header>
	@yield('content')
	<footer>
        <!-- Footer top -->
        <div class="container footer_top">
            <div class="row"><div class="col-md-3">
                    <div class="footer_item">
                        <h4>Explore link</h4>
                        <hr>
                        <ul class="list-unstyled footer_menu">
							<!-- <li><a href="/"><span class="fa fa-play"></span> Home</a> -->
							<li><a href="/vehicles"><span class="fa fa-play"></span> Our Fleet</a>
                            </li><li><a href="/shop"><span class="fa fa-play"></span> Shop</a>
                            </li><li><a href="/contactus"><span class="fa fa-play"></span> Contact Us</a>
                            </li><li><a href="/faqs"><span class="fa fa-play"></span> FAQ's</a>
                            </li><li><a href="/privacy"><span class="fa fa-play"></span> Privacy</a>
                            <!-- </li><li><a href="/covid-19-update"><span class="fa fa-play"></span> COVID-19 Update</a> -->
                            </li><li><a href="/terms"><span class="fa fa-play"></span> Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer_item">
                        <h4>Rentals</h4>
                        <hr>
                        <ul class="list-unstyled footer_menu">

							@foreach($categories??array(  ) as $category)

								<li>
									<a href="/vehicles?category={{ $category->slug }}"><span class="fa fa-play"></span>{{ $category->name }}</a>
								</li>

							@endforeach

                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer_item">
                        <h4>Social</h4>
                        <hr>
                        <ul class="list-unstyled footer_menu">
                            <li><a href="{{$setting->insta_link}}"><span class="fa fa-play"></span>Instagram</a>
                            <li><a href="{{$setting->fb_link}}"><span class="fa fa-play"></span>Facebook</a>
                            <li><a href="{{$setting->tweeet_link}}"><span class="fa fa-play"></span>Twitter</a>
                            <li><a href="{{$setting->pinter_link}}"><span class="fa fa-play"></span>Pinterest</a>
                            <!--<li><a href="{{$setting->insta_link}}"><span class="fa fa-play"></span>Trip Advisor</a></li>

                            </li><li><a href="{{$setting->tweeet_link}}"><span class="fa fa-play"></span>Google Plus</a>
                            </li><li><a href="{{$setting->pinter_link}}"><span class="fa fa-play"></span>Yelp</a>-->
                            </li><li><a href="{{$setting->utube_link}}"><span class="fa fa-play"></span>Youtube</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="footer_item">
                        <h4>Local</h4>
                        <hr>
                        <ul class="list-unstyled footer_contact">
                            <li><a href=""><span class="fa fa-map-marker"></span>{{$setting->address}}</a></li>
                            <li><a href="mailto:{{$setting->email}}"><span class="fa fa-envelope"></span>{{$setting->email}}</a></li>
                            <li><a><span class="fa fa-mobile"></span><p>{{$setting->phone}}</p></a></li>
                            <li><a><span class="fa fa-clock-o mr-2"></span><p>{{$setting->working_day}}</p></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- Footer top end -->

        <!-- Footer bottom -->
        <div class="footer_bottom text-center">
            <p class="wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">Designed and Developed by {{$setting->company_name}} Team . Copyright ?? <a href="{{url('/')}}">{{$setting->company_name}} </a>{{date('Y')}}. All Rights Reserved
            </p>
        </div><!-- Footer bottom end -->
        @include('modal.auth')
    </footer>

    <div class="side-tray">
        <div id="feedback-form" style='display:none;' class=" panel panel-danger text-center">
            <nav role="navigation" class="drawer w-nav-menu">
                <div class="drawer__container">

                    <div class="drawer__section">
                        <div class="drawer__location">
                            <div class="drawer__location--info mobhide"><img
                                    src="/logo.png"
                                    alt="Rental Exotics Beasts Logo" class="drawer__location--logo" />
                                <div class="drawer__location--title phonehide">Rental Exotics Beasts</div>
                                <div class="drawer__location--desc">{{$setting->address}}</div>
                            </div>
                            <div class="location__map"></div>
                        </div>
                    </div>

                    <div class="drawer__section">
                        <div class="card"><a id="Drawer-Shop-Button" href="/shop"
                                             target="_blank" class="navdrawer__shop--button w-inline-block"><img
                                    src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5c13df34d3261aa1bbc46af7_icon-open.svg"
                                    alt="" class="navdrawer__shop--icon" />
                                <div>Visit our Shop!</div>
                            </a></div>
                    </div>
                    <div class="drawer__section">
                        <div class="card card__table">
                            <div data-duration-in="300" data-duration-out="100" class="tabs w-tabs">

                                <div class="tabs__content w-tab-content">
                                    <div data-w-tab="US Residents" class="tabs__pane w-tab-pane w--tab-active">
                                        <div class="navdrawer__links--wrapper"><a href="tel:{{$setting->phone}}"
                                                                                  id="Drawer-Call-US-Link" class="navdrawer__link w-inline-block">
                                                <div class="navdrawer__link--icon" style="background-color: red;"><img
                                                        src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a5356d_contact-white.svg"
                                                        alt="US Main Phone Number" class="navdrawer__link--image" />
                                                </div>
                                                <div>Call us:?? <br>{{$setting->phone}}</div>
                                            </a><a
                                                href="mailto:{{$setting->email}}"
                                                id="Drawer-Email-US-Link" class="navdrawer__link w-inline-block">
                                                <div class="navdrawer__link--icon" style="background-color: red;"><img
                                                        src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a533e1_mail-white.svg"
                                                        alt="Reservations Email" class="navdrawer__link--image" /></div>
                                                <div class="text-smaller">Send us E-Mail</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="drawer__section">
                        <div class="card card__table">
                            <div class="navdrawer__links--wrapper">
                                <a
                                    href="{{$setting->insta_link}}" target="_blank"
                                    id="Drawer-Instagram-Link" class="navdrawer__link w-inline-block">
                                    <div class="navdrawer__link--icon navdrawer__link--icon-social" style="background-color: red;"><img
                                            src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a533c2_instagram.svg"
                                            alt="Instagram" class="navdrawer__link--image" /></div>
                                    <div>Follow us on Instagram</div>
                                </a>
                                <a href="{{$setting->fb_link}}"
                                       target="_blank" id="Drawer-Facebook-Link" class="navdrawer__link w-inline-block">


                                    <div class="navdrawer__link--icon navdrawer__link--icon-social" style="background-color: red;"><img
                                            src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a533b4_53f333fd1b92a02f2f930a05_facebook_footer.svg"
                                            alt="Pinterest" class="navdrawer__link--image" /></div>
                                    <div>Like us on Facebook</div>
                                </a>
                                <a href="{{$setting->tweeet_link}}" target="_blank"
                                       id="Drawer-Twitter-Link" class="navdrawer__link w-inline-block">
                                    <div class="navdrawer__link--icon navdrawer__link--icon-social" style="background-color: red;"><img
                                            src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a53477_53f33417144ad8302fd73d6a_twitter_footer.svg"
                                            alt="Pinterest" class="navdrawer__link--image" /></div>
                                    <div>Connect on Twitter</div>
                                </a>

                                <a href="{{$setting->pinter_link}}" target="_blank"
                                   id="Drawer-Pinterest-Link" class="navdrawer__link w-inline-block">
                                    <div class="navdrawer__link--icon navdrawer__link--icon-social" style="background-color: red;"><img
                                            src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a536cd_pinterest.svg"
                                            alt="Pinterest" class="navdrawer__link--image" /></div>

                                    <div>Follow us on Pinterest</div>
                                </a><a href="{{$setting->utube_link}}" target="_blank"
                                       id="Drawer-Youtube-Link"
                                       class="navdrawer__link navdrawer__link--no-border w-inline-block">
                                    <div class="navdrawer__link--icon navdrawer__link--icon-social" style="background-color: red;"><img
                                            src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a53631_youtube.svg"
                                            alt="Youtube" class="navdrawer__link--image" /></div>
                                    <div>Subscribe to our YouTube</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div id="feedback-tab" style="background-color:red;">Get in Touch</div>
    </div>




    <script src="/frontEnd/js/jquery.min.js"></script>

    <script type="text/javascript" src="/frontEnd/js/jquery.validate.js"></script>
    <script src="/frontEnd/js/popper.min.js"></script>
    <script src="/frontEnd/js/bootstrap.min.js"></script>
    <script src="/frontEnd/js/bootstrap.bundle.min.js"></script>


    <script src="/frontEnd/js/jquery.slim.min.js"></script>

    <!--<script src="/frontEnd/d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d5419.js?site=5a10aaa4d85f4b0001a53292"
            type="text/javascript" ></script>-->
    <script src="/frontEnd/js/rentalexoticsbeasts.af38aa331.js" type="text/javascript"></script>
	<!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->

    <script src="/frontEnd/js/owl.carousel.min.js" integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg==" crossorigin="anonymous"></script>

    <script src="/js/jquery.cookieMessage.min.js"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5f43f45c1e7ade5df4437eda/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <script>
        $(document).ready(function(){
            $("#feedback-tab").click(function() {
                $("#feedback-form").toggle("slide");
            });
        });

        $(window).on('load',function () {
            $('.preloader').hide();
            $('.preloader-spinner').delay(350).hide();
            $('body').removeClass('loader-active');
        }); //window load End


    </script>


<script type="text/javascript">
    function setCookie(key, value, expiry) {
        var expires = new Date();
        expires.setTime(expires.getTime() + (60 * 1000));
        document.cookie = key + '=' + value + ';path=/' + ';expires=' + expires.toUTCString();
    }

    function getCookie(key) {
        var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
        return keyValue ? keyValue[2] : false;
    }

    function eraseCookie(key) {
        var keyValue = getCookie(key);
        setCookie(key, keyValue, '-1');
    }

</script>

    <script>
        $(function() {
            jQuery.noConflict();
            if (getCookie('first-notice-accepted')===false) {
                console.log(getCookie('first-notice-accepted'));
                $('#AutoStartModal').modal('show');
                setCookie('first-notice-accepted','test-cookie');
            }


            //----- CLOSE
            $('.popup-close').on('click', function(e)  {
                $('#auto-first-popup').fadeOut(350);

                e.preventDefault();
            });
        });

    </script>

    <script>
        $.cookieMessage({
            'mainMessage':'This website uses cookies. By using this website you consent to our use of these cookies. For more information visit our <a target="_blank" href="{{url('privacy')}}">Privacy Policy</a>. ',

            'acceptButton':'Accept!',
            expirationDays: 20,
            cookieName:'cookieMessage',

            backgroundColor: '#666',
            fontSize: '18px',
            fontColor: 'white',
            btnBackgroundColor: 'red',
            btnFontSize: '18px',
            btnFontColor: 'white',
            linkFontColor: '#ffff00'



        });
        $(function () {
            $('[data-toggle="tooltip"]').tooltip({
                animation:true,
                html:true,
                boundary: 'viewport',
                template: '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner text-bold"></div></div>'
            })
        })

    </script>

    @yield('script')


    <style>

        .fc-view-container *, .fc-view-container ::after, .fc-view-container ::before {
            font-weight: 600;
        }

        .side-tray {
            position: fixed;
            right: 0;
            bottom: 40px;
            /*height: 100vh;*/
            height: 200px;
            margin-left: -3px;
            margin-bottom: -3px;
            z-index: 2;

        }

        #feedback-form {
            float: right;
            width: 345px;
            height: 100%;
            z-index: 1000;
            padding: 1em;
            padding-left: 5px;
            padding-right: 10px;
            background-color: #fff;
            border: 1px solid rgba(0,0,0,.2);
            -moz-border-radius: 0px;
            -webkit-border-radius: 0px;
            border-radius: 0px;
            -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
            -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
            box-shadow: 5px 10px 15px rgba(0,1,1,.2);
        }

        #feedback-tab {
            float: left;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
            text-align: center;
            width: 150px;
            height: 42px;
            background-color: rgba(0,0,0,0.5);
            /*margin-top: 80vh;*/
            margin-top: 4vh;
            margin-right: -54px;
            padding-top: 5px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        #feedback-tab:hover { background-color: #341a79; }

        #feedback-form textarea { resize: none; }


        .drawer {
            width: 345px !important;
            min-width: 345px !important;
        }


        @media screen and (max-width: 479px) {

            .drawer {
                width: 253px !important;
                min-width: 253px !important;
                padding-top: 0px !important;
            }
            #feedback-form {
                width: 253px;

            }
            .navbar-expand-lg {
                padding: 0px 0px 0px 0px !important;
                margin-bottom: -12px !important;
                margin-top: -15px;
                margin-right: -8px;
                margin-left: -8px;
            }

        }


    </style>
    <style>
        #cookie-msg{
            z-index: 14 !important;
        }
    </style>

</body>
</html>
