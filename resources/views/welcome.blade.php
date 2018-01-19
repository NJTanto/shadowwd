<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WDFix</title>
        <!--BOOTSTRAP -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
       <style>/*! File: home/search-feature.less */.search-feature {
 height:644px;
 width:100%;
 margin:auto;
 position:relative;
 background-color:#f7f7f7;
 color:#fff
}
@media only screen and (max-width:599px) {
 .search-feature {
  height:auto
 }
}
@media only screen and (min-width:600px) and (max-width:1000px) {
 .search-feature {
  height:500px
 }
}
.background-feature-photo {
 max-width:1440px;
 margin:auto;
 height:644px;
 background-repeat:no-repeat;
 background-position:center;
 position:relative
}
@media only screen and (max-width:599px) {
 .background-feature-photo {
  background-image:none!important;
  height:auto;
  padding:45px 20px
 }
}
@media only screen and (min-width:600px) and (max-width:1000px) {
 .background-feature-photo {
  height:500px;
  background-size:cover;
  background-position:25% center
 }
}
.search-container {
 position:relative;
 width:800px;
 top:160px;
 text-align:center;
 margin:auto;
 padding-right:400px
}
@media only screen and (max-width:599px) {
 .search-container {
  top:inherit;
  width:100%;
  padding-right:0
 }
}
@media only screen and (min-width:600px) and (max-width:1000px) {
 .search-container {
  top:80px;
  left:50px;
  width:50%;
  padding-right:0;
  margin:0
 }
}
h1.logo {
 width:196px;
 height:60px;
 display:inline-block;
 text-indent:-8888px;
 background:url(images/logo.png);
 background-image:url(images/logo.png),none;
 background-repeat:no-repeat
}
@media only screen and (max-width:599px) {
 h1.logo {
  width:134px;
  height:41px;
  background-size:134px 41px
 }
}
.tagline {
 display:block;
 color:#696d70;
 font-size:18px;
 line-height:22px;
 width:80%;
 margin:50px auto 60px
}
@media only screen and (max-width:599px) {
 .tagline {
  margin:36px auto;
  font-size:16px
 }
}
.mobile-label {
 color:#24272a;
 margin-bottom:13px;
 font-size:16px
}
.search-form {
 width:400px;
 position:relative
}
.search-form .search-field {
 width:100%;
 background:#fff;
 border:1px solid #aaa;
 box-shadow:0 0 0 4px rgba(205,207,208,.15);
 padding:12px 26px;
 outline:0;
 font-size:16px;
 border-radius:28px
}
.search-form .search-field:focus {
 border:1px solid #35a4ff;
 box-shadow:0 0 0 4px rgba(126,183,231,.21)
}
.search-form .search-field:focus+.search-submit .fa {
 color:#0071ce
}
@media only screen and (max-width:599px) {
 .search-form .search-field {
  -webkit-appearance:none
 }
 .search-form .search-field::-webkit-input-placeholder {
  color:transparent
 }
 .search-form .search-field:-moz-placeholder {
  color:transparent
 }
 .search-form .search-field::-moz-placeholder {
  color:transparent
 }
 .search-form .search-field:-ms-input-placeholder {
  color:transparent
 }
}
.search-form #searchSubmit {
 color:#bbb;
 position:absolute;
 right:12px;
 top:7px;
 cursor:pointer;
 padding:6px;
 background:0 0;
 border:none;
 outline:0;
 font-size:16px
}
.search-form #searchSubmit:hover {
 color:#0071ce
}
@media only screen and (max-width:1000px) {
 .search-form {
  width:100%
 }
}
.homepage-login {
 position:absolute;
 top:0;
 right:20px;
 display:inline-block;
 padding:10px;
 background:#f7f7f7;
 border-radius:0 0 4px 4px
}
.homepage-login a {
 font-size:14px;
 color:#24272a;
 padding:0 10px;
 border-right:1px solid #ddd
}
.homepage-login a:hover {
 color:#0071ce
}
.homepage-login .sprite-flag {
 cursor:pointer;
 float:right;
 margin-left:10px;
 top:3px
}
.view-guide-link {
 position:absolute;
 bottom:75px;
 right:20px;
 display:inline-block;
 line-height:16px;
 background:rgba(247,247,247,.9);
 border:1px solid rgba(0,113,206,.2);
 padding:5px 10px;
 border-radius:4px;
 font-size:14px;
 color:#0071ce;
 z-index:10
}
.view-guide-link .fa {
 color:#7fb8e7;
 position:relative;
 font-size:14px;
 padding-left:5px;
 top:1px
}
.view-guide-link:hover {
 background-color:#fff;
 border-color:#35a4ff
}
nav {
 width:100%;
 position:absolute;
 bottom:0;
 background:rgba(0,3,6,.87)
}
@media only screen and (max-width:599px) {
 nav {
  bottom:initial;
  position:static
 }
}
.nav-items {
 display:-ms-flexbox;
 display:-webkit-flex;
 display:flex;
 -ms-justify-content:space-around;
 -webkit-justify-content:space-around;
 justify-content:space-around;
 -ms-flex-pack:distribute;
 max-width:1000px;
 margin:0 auto
}
@media only screen and (max-width:599px) {
 .nav-items {
  -ms-flex-direction:column;
  -webkit-flex-direction:column;
  flex-direction:column;
  max-width:none;
  padding:20px 0
 }
}
.nav-item-container {
 display:-ms-flexbox;
 display:-webkit-flex;
 display:flex;
 -ms-flex:1 0 auto;
 -webkit-flex:1 0 auto;
 flex:1 0 auto;
 position:relative
}
.nav-item-container:not(:hover) .nav-item-secondary-container {
 display:none
}
.nav-item-secondary-container {
 position:absolute;
 top:100%;
 left:0;
 width:100%;
 background:rgba(0,3,6,.87);
 overflow:hidden;
 border-bottom-right-radius:4px;
 border-bottom-left-radius:4px
}
.nav-item {
 color:#fff;
 font-size:14px;
 font-weight:400;
 display:block;
 width:100%;
 position:relative;
 transition:background-color .15s
}
.nav-item:hover {
 background:#000
}
.nav-item-primary {
 text-align:center;
 line-height:55px
}
@media only screen and (max-width:599px) {
 .nav-item-primary {
  text-align:left;
  text-align:start;
  font-size:16px;
  padding:0 33px
 }
}
.nav-item-primary:before {
 content:'';
 position:absolute;
 display:block;
 bottom:0;
 left:0;
 width:100%;
 height:2px;
 background:linear-gradient(-90deg,rgba(0,113,206,0) 0,#0071ce 51%,rgba(0,113,206,0) 100%);
 border-radius:0 0 100px 100px;
 transition-duration:.2s;
 transition-property:transform,opacity
}
.nav-item-primary:not(:hover):before {
 transform:scaleX(0);
 opacity:0
}
.nav-item-secondary {
 line-height:40px;
 padding:0 16px
}
/*! File: Shared/global-header.less */#mainHeader .header-icon {
 display:inline-block;
 position:relative;
 text-align:center;
 -webkit-transition:border-color .2s;
 transition:border-color .2s;
 cursor:pointer
}
#mainHeader .dropdown-container {
 display:none;
 z-index:1000;
 overflow:auto;
 height:auto;
 position:absolute;
 padding:0 8px 40px
}
#mainHeader .dropdown-container-active {
 display:block
}
#mainHeader .dropdown-container-active .header-dropdown {
 will-change:transform
}
#mainHeader .header-dropdown {
 -webkit-transform:translateY(-100%);
 transform:translateY(-100%);
 position:relative;
 bottom:0;
 padding:50px 0 0;
 margin:-50px 0 0;
 border-radius:0 0 4px 4px;
 box-shadow:0 4px 10px rgba(0,0,0,.2);
 text-align:left;
 text-align:start;
 list-style-type:none
}
#mainHeader .header-dropdown .fa {
 position:relative;
 top:2px;
 width:20px;
 display:inline-block;
 margin-right:10px;
 font-size:14px;
 text-align:center;
 opacity:.3;
 transition:color .2s,opacity .2s
}
#mainHeader .header-dropdown a:hover {
 color:#fff
}
#mainHeader .header-dropdown a:hover .fa {
 opacity:1
}
#mainHeader .header-dropdown li:last-of-type a {
 padding-bottom:12px
}
#mainHeader .header-dropdown .reputation strong {
 color:#f9c311;
 margin-right:3px
}
#mainHeader .header-dropdown .notification-element {
 min-width:300px
}
#mainHeader .header-dropdown .notification-element .notification-icon {
 width:25px;
 text-align:center;
 line-height:1.1;
 float:left
}
#mainHeader .header-dropdown .notification-element a {
 padding:10px
}
#mainHeader .header-dropdown .notification-element .notification-dismiss {
 width:25px;
 text-align:center;
 line-height:1.1;
 color:#555;
 float:right;
 margin-right:0
}
#mainHeader .header-dropdown .notification-element .notification-message {
 overflow:hidden
}
#mainHeader .header-dropdown .notification-element.more {
 box-shadow:inset 0 1px 0 rgba(255,255,255,.1);
 overflow:auto
}
#mainHeader .header-dropdown .notification-element.more a {
 color:#888;
 width:50%;
 float:left;
 text-align:center;
 white-space:nowrap
}
#mainHeader .header-dropdown .notification-element.more a:hover {
 color:#fff
}
#mainHeader .header-dropdown .notification-element.more a:first-of-type {
 box-shadow:inset -1px 0 0 rgba(255,255,255,.1)
}
#mainHeader .header-dropdown .notification-element:hover a .notification-dismiss {
 color:#555
}
#mainHeader .header-dropdown .notification-element:hover a .notification-dismiss:hover {
 color:#eee
}
#mainHeader .notification-date {
 opacity:.3;
 margin-left:34px
}
#mainHeader .number {
 display:none;
 position:absolute;
 padding:1px 6px;
 right:-3px;
 top:-1px;
 font-size:12px;
 font-weight:700;
 text-align:center;
 border-radius:20px;
 background-color:#0071ce;
 color:#fff;
 text-shadow:0 1px 2px rgba(0,0,0,.5);
 z-index:1
}
#mainHeader .number.active {
 display:inline-block
}
/*! File: Shared/header.less */.sprite-flag {
 top:2px
}
#mainHeader {
 width:100%;
 margin-bottom:0
}
#mainHeader a,#mainHeader a:visited {
 text-decoration:none
}
#mainHeader .header-container {
 width:980px;
 margin:0 auto;
 position:relative
}
@media only screen and (max-width:1000px) {
 #mainHeader .header-container {
  width:100%
 }
}
#mainHeader .top {
 height:70px;
 background-color:#24272a;
 background-image:linear-gradient(-180deg,#24272a 0,#181a1c 100%)
}
@media only screen and (max-width:599px) {
 #mainHeader .top {
  height:55px;
  box-shadow:0 2px 10px rgba(0,0,0,.35)
 }
}
#mainHeader form {
 float:left;
 margin-left:160px;
 position:relative;
 top:17px
}
@media only screen and (min-width:600px) and (max-width:1000px) {
 #mainHeader form {
  width:35%
 }
}
#mainHeader input.search-field {
 display:inline-block;
 position:relative;
 background-color:transparent;
 border:1px solid transparent;
 border-color:#888;
 border-color:rgba(255,255,255,.2);
 border-radius:30px;
 width:400px;
 height:36px;
 line-height:1;
 padding:8px 16px;
 outline:0;
 font-size:14px;
 color:#eee;
 -webkit-transition:all .25s linear;
 transition:all .25s linear
}
@media only screen and (min-width:600px) and (max-width:1000px) {
 #mainHeader input.search-field {
  width:100%
 }
}
#mainHeader input.search-field:focus {
 border-color:#007fe8;
 box-shadow:0 0 0 4px rgba(0,113,206,.25)
}
#mainHeader input.search-field::-webkit-input-placeholder {
 color:#888
}
#mainHeader input.search-field:-moz-placeholder {
 color:#888
}
#mainHeader input.search-field::-moz-placeholder {
 color:#888
}
#mainHeader input.search-field:-ms-input-placeholder {
 color:#888
}
#mainHeader .search-submit {
 position:absolute;
 right:12px;
 top:11px;
 background-color:transparent;
 width:15px;
 height:15px;
 background-repeat:no-repeat;
 background-image:url(https://d1ulmmr4d4i8j4.cloudfront.net/static/images/home/header-sprite-2.png);
 background-position:-32px -358px;
 border:none;
 outline:0;
 cursor:pointer;
 opacity:.7
}
#mainHeader .search-submit:hover {
 opacity:1
}
#mainHeader .header-text-link {
 display:inline-block;
 margin:0 10px;
 line-height:34px;
 font-size:14px;
 color:#eee
}
#mainHeader .header-text-link.bold {
 font-weight:600
}
#mainHeader .right-container {
 text-align:right;
 position:absolute;
 top:18px;
 right:0
}
#mainHeader .right-container .action-buttons {
 float:right;
 height:37px
}
#mainHeader .right-container .action-buttons .header-login {
 margin-left:15px;
 padding:8px 0 7px
}
#mainHeader .right-container .action-buttons .header-login a {
 font-size:14px;
 padding:8px 15px;
 color:#eee;
 -webkit-transition:color .2s;
 transition:color .2s
}
#mainHeader .right-container .action-buttons .header-login a:hover {
 color:#35a4ff;
 text-decoration:none
}
#mainHeader .right-container .action-buttons .header-login #cartNavSignup,#mainHeader .right-container .action-buttons .header-login #navSignup {
 padding-right:18px;
 border-right:1px solid rgba(255,255,255,.1)
}
#mainHeader .right-container .action-buttons .header-logged-in {
 margin-left:10px;
 display:block;
 padding:11px 17px;
 position:relative;
 top:-5px;
 border-radius:22px;
 border:1px solid transparent;
 -webkit-transition:border-color .2s;
 transition:border-color .2s
}
#mainHeader .right-container .action-buttons .header-logged-in:hover {
 border-color:rgba(255,255,255,.2);
 text-decoration:none
}
#mainHeader .right-container .action-buttons .header-logged-in:hover+.dropdown-container .header-dropdown {
 will-change:transform
}
#mainHeader .right-container .action-buttons .header-logged-in .username {
 color:#eee;
 font-size:14px;
 position:relative
}
#mainHeader .right-container .action-buttons .header-logged-in i.fa {
 -webkit-transition:transform .4s;
 transition:transform .4s;
 margin-left:8px;
 font-size:14px;
 color:#555;
 position:relative;
 top:2px
}
#mainHeader .right-container .action-buttons .header-logged-in i.fa.active {
 -webkit-transform:rotateZ(-180deg);
 transform:rotateZ(-180deg)
}
#mainHeader .right-container .header-icon {
 float:right;
 border-radius:22px;
 width:44px;
 height:44px;
 border:1px solid transparent;
 font-size:18px;
 top:-5px;
 margin:0 10px
}
@media only screen and (min-width:600px) and (max-width:1000px) {
          #mainHeader .right-container .header-icon {
  margin:0 5px
 }
}
#mainHeader .right-container .header-icon:hover .icon {
 opacity:1!important
}
#mainHeader .right-container .header-icon:hover:not(.no-border) {
 border-color:rgba(255,255,255,.2)
}
#mainHeader .right-container .header-icon .icon {
 position:relative;
 display:inline-block;
 opacity:.75;
 top:10px
}
#mainHeader .right-container .header-icon .icon.icon-search {
 width:15px;
 height:15px;
 background-repeat:no-repeat;
 background-image:url(https://d1ulmmr4d4i8j4.cloudfront.net/static/images/home/header-sprite-2.png);
 background-position:-125px -258px;
 background-size:262px 294px
}
#mainHeader .right-container .header-icon .icon.icon-bell {
 width:17px;
 height:20px;
 background-repeat:no-repeat;
 background-image:url(https://d1ulmmr4d4i8j4.cloudfront.net/static/images/home/header-sprite-2.png);
 background-position:-81px -356px;
 margin-left:2px
}
#mainHeader .right-container .header-icon .icon.icon-cart {
 width:20px;
 height:17px;
 background-repeat:no-repeat;
 background-image:url(https://d1ulmmr4d4i8j4.cloudfront.net/static/images/home/header-sprite-2.png);
 background-position:-129px -357px
}
#mainHeader .right-container .header-icon .icon.icon-toolbox {
 width:20px;
 height:17px;
 background-repeat:no-repeat;
 background-image:url(https://d1ulmmr4d4i8j4.cloudfront.net/static/images/home/header-sprite-2.png);
 background-position:-181px -358px;
 opacity:.65
}
#mainHeader .right-container .header-icon .icon.icon-hamburger {
 width:16px;
 height:12px;
 background-repeat:no-repeat;
 background-image:url(https://d1ulmmr4d4i8j4.cloudfront.net/static/images/home/header-sprite-2.png);
 background-position:-225px -260px;
 background-size:262px 294px;
 top:8px
}
#mainHeader .right-container .header-icon .sprite-flag {
 margin-left:13px;
 top:15px
}
@media only screen and (max-width:599px) {
 #mainHeader .right-container {
  top:10px;
  height:55px;
  width:75%
 }
}
.pr
</style>
    </head>
    <body>
    	<div class="container-fluid">
    	
  
       <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif-->

            <section id="home-page-top" class="bottom-nav search-feature">
   <div class="background-feature-photo" style="background-image: url(https://d1ulmmr4d4i8j4.cloudfront.net/static/images/home/feature-photos/home-feature-amazontv.jpg)">
      <div class="homepage-login hidden-mobile hidden-xs hidden-sm">
                     <a href="{{ url('/register') }}">Join</a>
            <a href="{{ url('/login') }}">Log In</a>
            <span class="js-trigger-language-modal sprite-flag sprite-flag-us"></span>               </div>
     
      <div class="search-container">
         <h1 class="logo">WDFIX</h1>
         <span class="tagline">
            The free repair guide for everything, written by everyone.         </span>
         <label class="mobile-label visible-mobile">
            What would you like to fix today?         </label>
         <form action="{{ url('/search') }}" method="post" class="search-form js-search-form">
{{ csrf_field() }}
            <input id="searchForm" name="q" spellcheck="false" class="search-field" autocomplete="off" placeholder="What would you like to fix today?" type="text">
            <button id="searchSubmit" class="search-submit" type="submit">
               <i class="fa fa-search "></i>            </button>
         </form>
      </div>
   </div>

 

</section>
      
        </div>
<script src="https://use.fontawesome.com/677d9ca8ee.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
    </body>
</html>
