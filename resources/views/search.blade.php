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
        <style>
          /*! File: Shared/reset.less */* {
 box-sizing:border-box
}
body,html {
 margin:0;
 padding:0;
 text-rendering:optimizeSpeed;
 position:relative
}
/*! File: home/reset.less */abbr,address,article,aside,audio,b,blockquote,body,canvas,caption,cite,code,dd,del,details,dfn,div,dl,dt,em,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,html,i,iframe,img,ins,kbd,label,legend,li,mark,menu,nav,object,ol,p,pre,q,samp,section,small,span,strong,sub,summary,sup,table,tbody,td,tfoot,th,thead,time,tr,ul,var,video {
 margin:0;
 padding:0;
 border:0;
 outline:0;
 font-size:100%;
 vertical-align:baseline;
 background:0 0
}
body {
 line-height:1
}
article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section {
 display:block
}
nav ul {
 list-style:none
}
blockquote,q {
 quotes:none
}
blockquote:after,blockquote:before,q:after,q:before {
 content:none
}
a {
 margin:0;
 padding:0;
 font-size:100%;
 vertical-align:baseline;
 background:0 0
}
ins {
 background-color:#ff9;
 color:#000;
 text-decoration:none
}
mark {
 background-color:#ff9;
 color:#000;
 font-style:italic;
 font-weight:700
}
del {
 text-decoration:line-through
}
abbr[title],dfn[title] {
 border-bottom:1px dotted;
 cursor:help
}
table {
 border-collapse:collapse;
 border-spacing:0
}
hr {
 display:block;
 height:1px;
 border:0;
 border-top:1px solid #ccc;
 margin:1em 0;
 padding:0
}
input,select {
 vertical-align:middle
}
/*! File: home/base.less */* {
 font-family:Lato,Arial,sans-serif
}
body {
 background:#fff;
 color:#212426;
 -webkit-font-smoothing:antialiased;
 -moz-osx-font-smoothing:grayscale
}
a {
 text-decoration:none;
 color:#212426;
 outline:0
}
.feature-buttons .guides {
 background-color:#0071ce
}
.feature-buttons .answers {
 background-color:#68bc45
}
.feature-buttons .store {
 background-color:#e83d16
}
.feature-buttons a {
 color:#fff;
 display:inline-block;
 height:45px;
 width:294px;
 font-size:1.2em;
 text-shadow:0 2px 1px rgba(0,0,0,.2);
 border-radius:45px;
 line-height:45px;
 text-align:center
}
.hidden {
 display:none
}
.tool-price {
 color:#e83d16
}
.content-container {
 width:100%;
 max-width:1000px;
 margin:0 auto
}
.feature {
 height:430px;
 margin-bottom:0;
 background-color:#27292b
}
.announcements {
 padding-top:14px;
 background-color:#0071cb
}
.announcement-feature {
 padding-bottom:14px
}
.announcement-feature.first {
 padding-top:0
}
.org {
 background-color:#68bc45
}
.feature-container {
 width:1000px;
 height:430px;
 margin:-40px auto 0
}
.announcement-tagline {
 width:100%;
 text-align:center;
 z-index:1
}
.announcement-tagline h3 {
 display:inline-block;
 font-size:18px;
 font-weight:400;
 color:#fff;
 text-transform:none;
 text-shadow:0 1px 1px rgba(0,0,0,.3);
 -webkit-font-smoothing:antialiased;
 -moz-osx-font-smoothing:grayscale
}
.announcement-container .button {
 color:#fff;
 display:inline-block;
 border:2px solid rgba(255,255,255,.3);
 border-radius:42px;
 font-size:16px;
 font-weight:600;
 margin:0 1% 0 32px;
 white-space:nowrap;
 padding:10px 30px 9px;
 -webkit-font-smoothing:antialiased;
 -moz-osx-font-smoothing:grayscale;
 transition:border-color .2s
}
.announcement-container .button:hover {
 border-color:rgba(255,255,255,.6)
}
.announcement-container .button:hover i {
 opacity:1;
 right:-13px
}
.announcement-container .button i {
 position:relative;
 right:-10px;
 opacity:.5;
 transition:opacity .2s,right .2s
}
.banner-title {
 display:block
}
.extended-button {
 display:none
}
.abbreviated-button {
 display:block
}
.device-image {
 width:369px;
 height:430px;
 background:url(https://d1ulmmr4d4i8j4.cloudfront.net/static/images/home/feature-iphone.png) no-repeat bottom left
}
.mission-box {
 display:-ms-flexbox;
 display:-webkit-flex;
 display:flex;
 -ms-flex-direction:column;
 -webkit-flex-direction:column;
 flex-direction:column;
 -ms-justify-content:center;
 -webkit-justify-content:center;
 justify-content:center;
 -ms-flex-pack:center;
 -ms-align-items:center;
 -webkit-align-items:center;
 align-items:center;
 -ms-flex-align:center;
 text-align:center;
 width:auto;
 height:264px;
 margin:70px auto 60px;
 background:url(https://d1ulmmr4d4i8j4.cloudfront.net/static/images/home/mission-bg4.jpg) left center;
 background-size:cover
}
.mission-box .title {
 margin:0 0 16px 0;
 font-size:30px;
 font-weight:600;
 color:#fff
}
.mission-box p {
 margin:0 0 24px 0;
 font-size:18px;
 font-weight:400;
 line-height:1.5;
 color:rgba(255,255,255,.75)
}
.mission-box .button {
 display:inline-block;
 padding:8px 16px;
 font-size:16px;
 line-height:1.5;
 color:#fff;
 background-color:#57b524;
 border-radius:4px;
 transition:opacity 150ms linear
}
.mission-box .button:hover {
 opacity:.75
}
.section-title {
 font-size:1.9em;
 font-weight:300;
 margin-bottom:33px;
 color:#333
}
.more-link {
 float:right;
 font-size:14px;
 font-weight:400;
 position:relative;
 top:7px;
 color:#666
}
.more-link i {
 color:#999;
 margin-left:4px;
 position:relative;
 top:1px
}
.more-link:hover,.more-link:hover * {
 color:#333
}
.activity {
 margin:50px auto 68px;
 overflow:auto
}
.activity .thumbnail {
 display:block;
 float:left;
 width:235px;
 height:176px;
 margin-right:20px;
 overflow:hidden;
 background-color:#ccc
}
.activity .thumbnail .avatar {
 width:50px;
 height:50px;
 float:left;
 margin-right:12px
}
.activity .thumbnail:last-of-type {
 margin-right:0
}
.activity .feed-image {
 position:relative;
 float:left;
 top:0;
 width:235px;
 z-index:1;
 opacity:.8
}
.activity .feed-image:hover {
 opacity:1
}
.activity .user-info {
 position:absolute;
 margin-top:126px;
 z-index:2;
 width:235px;
 height:50px;
 background:#f1f1f1;
 background:rgba(255,255,255,.9);
 font-size:.75em
}
.activity .user-info .author {
 margin-top:10px;
 margin-bottom:4px;
 white-space:nowrap
}
.activity .user-info .author-activity {
 font-weight:700
}
.activity .guide .author-activity {
 color:#0071ce
}
.activity .answer .author-activity {
 color:#68bc45
}
.activity .story .author-activity {
 color:#0071ce
}
.activity .didit .author-activity {
 color:#e83d16
}
.activity .teardown .author-activity {
 color:#e83d16
}
.store-feature {
 background-color:#fff;
 padding:54px 0;
 min-height:370px;
 border-bottom:2px solid rgba(200,200,200,.1)
}
.store-feature .toggle {
 position:relative;
 top:-8px;
 float:right;
 height:40px;
 background-color:#e6e6e6;
 font-size:.9em;
 border:1px solid #ccc
}
.store-feature .toggle-button {
 display:inline-block;
 line-height:40px;
 padding:0 20px;
 color:#777;
 font-weight:600;
 cursor:pointer
}
.store-feature .toggle-button:hover {
 background-color:#eee
}
.store-feature .toggle-button.selected {
 background-color:#fff;
 color:#333
}
.tools-section {
 min-height:205px
}
.tool-feature {
 float:left;
 width:490px;
 min-height:205px;
 padding-left:20px
}
.tool-feature:first-of-type {
 margin-right:10px
}
.tool-feature:last-of-type {
 border-left:1px solid rgba(0,0,0,.1)
}
.tool-info {
 margin:20px 10px 0 255px
}
.tool-info .tool-name {
 font-size:1.1em;
 font-weight:600;
 margin-bottom:8px
}
.tool-info .tool-description {
 color:#666;
 font-size:.9em;
 line-height:1.25em;
 margin-bottom:21px
}
.tool-info .tool-price {
 font-size:34px;
 font-weight:700
}
.tool-info .tool-price sup {
 font-size:24px;
 position:relative;
 top:-6px
}
.tool-info .view-more {
 display:block;
 margin-top:20px;
 font-size:.8em;
 color:#666
}
.tool-info .view-more:hover {
 color:#000
}
.tool-info .view-more i {
 margin-left:6px;
 color:#999;
 position:relative;
 top:1px
}
.parts-section {
 min-height:205px;
 margin-top:40px
}
.part-feature {
 width:160px;
 height:220px;
 background-color:#fff;
 display:block;
 float:left;
 margin-right:8px
}
.part-feature:last-of-type {
 margin-right:0
}
.part-feature .part-box {
 float:left;
 width:160px
}
.part-feature .part-photo {
 height:95px;
 display:block;
 margin:15px auto 5px
}
.part-feature .part-name {
 font-size:.8em;
 line-height:1.25em;
 text-align:center;
 padding:0 8px;
 height:50px
}
@media only screen and (max-width:599px) {
 .part-feature .part-name {
  height:auto
 }
}
.part-feature .part-price {
 display:block;
 font-size:.8em;
 font-weight:600;
 color:#e83d16;
 line-height:1.8em;
 text-align:center
}
.part-feature .store-link {
 display:block;
 position:absolute;
 background-color:#e0e0e0;
 text-align:center;
 width:160px;
 height:42px;
 margin-top:194px;
 line-height:42px;
 font-size:.8em;
 color:#666
}
@media only screen and (max-width:599px) {
 .part-feature .store-link {
  margin-top:180px
 }
}
.part-feature .store-link i {
 position:relative;
 top:1px;
 margin-left:4px;
 color:#ababab
}
.part-feature .store-link:hover {
 background-color:#ccc;
 color:#333
}
.news {
 min-height:390px;
 padding:54px 0;
 background-color:#f1f9ee
}
.news .more-link,.news .section-title {
 color:#444;
 -webkit-font-smoothing:antialiased;
 -moz-osx-font-smoothing:grayscale
}
.news .more-link:hover {
 color:#24272a
}
.news .more-link:hover i {
 color:#24272a
}
.news-links {
 width:320px;
 float:right;
 background-color:#fff;
 list-style-type:none
}
.news-links>li {
 height:47px;
 line-height:47px;
 padding:0 20px;
 font-size:.9em;
 color:#539737;
 white-space:nowrap;
 overflow:hidden;
 text-overflow:ellipsis;
 cursor:pointer
}
.news-links>li:hover {
 background-color:#ebf6e6;
 color:#3e7229
}
.news-links>li.current {
 background-color:#68bc45;
 color:#fff
}
.news-article {
 margin-right:370px;
 min-height:200px
}
.news-article .news-photo {
 float:left;
 width:255px;
 height:197px;
 border:10px solid rgba(0,0,0,.05);
 margin-right:30px
}
.news-article .news-photo:hover {
 border-color:#a5d790
}
.news-article .news-headline {
 font-size:1.1em;
 position:relative;
 font-weight:600;
 color:#24272a;
 padding-top:15px;
 margin-bottom:8px
}
.news-article .news-date {
 font-size:.9em;
 color:#777
}
.news-article .news-blurb {
 font-size:.9em;
 line-height:1.5em;
 color:#535a61;
 margin-top:14px
}
.news-article .more-link {
 display:inline-block;
 padding:8px 16px 9px;
 border-radius:4px;
 border:1px solid;
 float:none;
 margin-top:10px;
 color:#539737;
 background-color:transparent;
 border-color:#a5d790;
 font-weight:600;
 font-size:.8em;
 text-transform:uppercase
}
.news-article .more-link:hover {
 border-color:#68bc45;
 color:#3e7229
}
.iefix .part-feature {
 margin:0 3px
}
.activity .iefix .thumbnail {
 margin-right:15px
}
a .sponsor-banner {
 color:#fff
}
.sponsor-banner {
 height:auto;
 background:#57b524;
 text-align:center
}
.sponsor-banner .sponsor-text-div {
 display:inline-block;
 max-width:1000px;
 line-height:1.5em
}
.sponsor-banner .sponsor-text-div .sponsor-header-div {
 display:inline-block;
 margin:20px
}
.sponsor-banner .sponsor-text-div .sponsor-header-div h4 {
 font-size:20px;
 color:#fff
}
@media only screen and (max-width:1000px) and (min-width:834px) {
 .sponsor-banner .sponsor-text-div .sponsor-header-div h4 {
  margin-right:20px
 }
}
.sponsor-banner .sponsor-text-div .banner-tagline-div {
 display:inline-block;
 margin:20px 0
}
.sponsor-banner .sponsor-text-div .banner-tagline-div p {
 font-size:14px;
 font-weight:700;
 color:rgba(255,255,255,.9)
}
@media only screen and (max-width:599px) {
 .activity,.desktop-feature-buttons,.device-image,.feature-container,.language,.login,.more-link,.search-title,.site-nav,.small-links,.toggle,.tool-description,.view-more {
  display:none
 }
 .news-links {
  display:none
 }
 .news {
  padding:20px 0
 }
 .news-article {
  padding:0 20px;
  margin-right:0
 }
 .news-photo {
  float:none!important
 }
 .content-container .section-title {
  margin-bottom:13px
 }
 .more-link {
  margin-bottom:20px
 }
 .feature {
  padding:0 0 14px;
  height:auto;
  overflow:auto;
  margin:-24px 0 0
 }
 .feature .feature-buttons {
  margin:0;
  width:100%
 }
 .feature .feature-buttons a {
  width:90%;
  display:block;
  margin:14px auto 0
 }
 .announcement-feature {
  height:auto;
  overflow:auto;
  margin:0
 }
 .announcement-feature .feature-buttons {
  border:3px solid #3290ce;
  border-radius:42px;
  margin:0 auto;
  width:90%
 }
 .announcement-feature .feature-buttons a {
  width:90%;
  display:block;
  margin:0 auto
 }
 .announcement-feature .org {
  border:2px solid rgba(255,255,255,.3)
 }
 .announcement-tagline {
  display:none
 }
 .section-title,.title {
  font-size:1.5em!important;
  font-weight:400!important;
  padding:20px
 }
 .mobile-feature-buttons {
  font-size:.8em!important;
  display:block
 }
 .mission-box {
  display:-ms-flexbox;
  display:-webkit-flex;
  display:flex;
  -ms-flex-direction:column;
  -webkit-flex-direction:column;
  flex-direction:column;
  -ms-align-items:center;
  -webkit-align-items:center;
  align-items:center;
  -ms-flex-align:center;
  -ms-justify-content:center;
  -webkit-justify-content:center;
  justify-content:center;
  -ms-flex-pack:center;
  background:url(https://d1ulmmr4d4i8j4.cloudfront.net/static/images/home/mission-bg4-small.jpg) no-repeat center center;
  background-size:cover;
  border:none;
  margin:40px 0;
  height:265px
 }
 .mission-box .title {
  margin:0;
  padding-top:0;
  padding-bottom:10px;
  font-size:30px!important;
  font-weight:600!important
 }
 .mission-box p {
  margin:0 auto;
  max-width:92%;
  font-size:16px;
  font-weight:400;
  padding-bottom:21px
 }
 .store-feature {
  background:#fff;
  padding:0
 }
 .store-feature .section-title span {
  display:none
 }
 .tools-section {
  width:100%;
  white-space:nowrap;
  overflow:hidden
 }
 .tool-feature {
  overflow:auto;
  width:100%;
  min-height:170px;
  display:inline-block;
  margin-bottom:15px;
  border-bottom:1px solid #ccc;
  padding-left:12px
 }
 .tool-feature .tool-photo {
  margin-left:0;
  margin-right:10px
 }
 .tool-feature.featured-1 {
  margin-left:-100%
 }
 .tool-feature .tool-info {
  margin-left:47%
 }
 .tool-feature .tool-info .tool-name {
  font-size:.9em
 }
 .tool-feature .tool-info .view-more {
  display:none
 }
 .tool-nav {
  float:right;
  margin:10px 10px 0 0;
  position:relative;
  font-size:1.3em
 }
 .tool-nav i {
  display:inline-block;
  width:30px;
  height:40px;
  line-height:40px;
  text-align:center
 }
 .tool-nav i.disabled {
  color:#ccc
 }
 .tool-price {
  display:block;
  font-size:2em;
  font-weight:700;
  margin:10px auto
 }
 .tool-price sup {
  font-size:.5em;
  font-weight:300;
  position:relative;
  top:-12px
 }
 .parts-section {
  display:block!important;
  overflow:auto;
  margin-bottom:30px
 }
 .parts-section .part-feature {
  width:43%;
  margin:0 0 10% 4.75%
 }
 .parts-section .part-box {
  width:100%
 }
 .parts-section .store-link {
  display:block;
  height:40px;
  width:43%;
  line-height:40px;
  text-align:center;
  float:left;
  background:#ccc;
  margin-bottom:6px;
  font-size:.9em
 }
 .parts-section .store-link i {
  color:#999;
  margin-left:4px
 }
 .parts-section .store-link span {
  display:none
 }
 a .sponsor-banner {
  color:#fff
 }
 .sponsor-banner {
  height:auto;
  background:#57b524;
  text-align:center;
  padding:20px
 }
 .sponsor-banner .sponsor-text-div {
  display:block;
  width:100%;
  line-height:1.2em
 }
 .sponsor-banner .sponsor-text-div .sponsor-banner-div {
  margin:0
 }
 .sponsor-banner .sponsor-text-div .sponsor-banner-div h4 {
  font-size:20px;
  color:#fff
 }
 .sponsor-banner .sponsor-text-div .sponsor-coupon-div {
  margin:6px 0 0 0
 }
 .sponsor-banner .sponsor-text-div .sponsor-coupon-div p {
  font-size:14px;
  font-weight:700;
  color:rgba(255,255,255,.9)
 }
}
@media only screen and (min-width:600px) and (max-width:1000px) {
 .hidden-tablet {
  display:none!important
 }
 .feature {
  height:360px
 }
 .teardown-feature {
  height:150px
 }
 .feature-container {
  width:100%;
  height:360px
 }
 .banner-title {
  display:none
 }
 .extended-button {
  display:block
 }
 .abbreviated-button {
  display:none
 }
 .smartphone-repairability-container h3 {
  display:none
 }
 .smartphone-repairability-container .button {
  padding:10px 50px 9px;
  font-size:20px;
  font-weight:400;
  margin:0 auto;
  white-space:nowrap
 }
 .smartphone-repairability-tagline {
  width:100%;
  margin-left:0;
  text-align:center;
  right:1%;
  min-width:350px
 }
 .smartphone-repairability-tagline h3 {
  font-size:1.6em
 }
 .smartphone-repairability-tagline .calltoaction a {
  margin:0 1% 10px
 }
 .device-image {
  width:40%;
  max-width:350px;
  margin-left:4%;
  height:100%;
  background-size:100% auto
 }
 .overlay .tagline {
  width:70%;
  right:auto
 }
 .section-title {
  margin-left:20px
 }
 .store-feature {
  padding:30px 0;
  min-height:auto
 }
 .store-feature .toggle {
  margin-right:20px
 }
 .tool-feature {
  width:48%
 }
 .tool-feature .tool-info {
  margin-left:50%
 }
 .tool-feature .tool-price {
  font-size:1.5em
 }
 .tool-feature .tool-price sup {
  font-size:.6em;
  top:-8px
 }
 .tool-feature .view-more {
  clear:both
 }
 .parts-section {
  width:97%;
  padding:0 0 0 3%
 }
 .part-feature {
  width:15.1%;
  height:auto
 }
 .part-feature .part-box {
  width:auto;
  float:none
 }
 .part-feature .part-photo {
  width:50%;
  height:auto;
  max-height:100px;
  max-width:100px;
  margin:10px auto
 }
 .part-feature .store-link {
  display:block;
  position:relative;
  line-height:1em;
  width:100%;
  height:auto;
  padding:10px 0;
  text-align:center;
  margin:10px auto 0
 }
 .part-feature .store-link span {
  display:none
 }
 .activity .thumbnail {
  width:22.4%;
  height:auto;
  margin-left:2%;
  margin-right:0
 }
 .activity .feed-image {
  width:100%;
  height:auto
 }
 .activity .user-info {
  width:24%;
  margin-top:13%
 }
 .activity .avatar {
  display:none
 }
 .activity .more-link {
  margin-right:20px
 }
 .news .news-photo {
  margin-left:20px
 }
 .news .news-links {
  display:none
 }
 .news .news-article {
  margin-right:10%
 }
 .news .more-link {
  margin-right:20px
 }
 a .sponsor-banner {
  color:#fff
 }
 .sponsor-banner {
  height:auto;
  background:#57b524;
  text-align:center;
  padding:20px
 }
 .sponsor-banner .sponsor-text-div {
  display:block;
  width:100%;
  line-height:1.5em
 }
 .sponsor-banner .sponsor-text-div .sponsor-header-div {
  margin:0
 }
 .sponsor-banner .sponsor-text-div .sponsor-header-div h4 {
  font-size:20px;
  color:#fff
 }
 .sponsor-banner .sponsor-text-div .sponsor-banner-div {
  margin:0
 }
 .sponsor-banner .sponsor-text-div .sponsor-banner-div p {
  font-size:14px;
  font-weight:700;
  color:rgba(255,255,255,.9)
 }
}
@media only screen and (min-width:600px) and (max-width:800px) {
 .tool-feature,.tools-section {
  min-height:120px
 }
 .tool-info .view-more,.tool-info p {
  display:none
 }
 .part-feature {
  width:23%
 }
 .part-feature .part-photo {
  max-width:100px;
  max-height:100px
 }
 .part-feature:nth-last-child(-n+2) {
  display:none
 }
}
.tool-feature .tool-photo {
 float:left;
 max-width:45%;
 max-height:210px
}
.store-feature .price-round {
 display:none
}
.store-feature .price-exact {
 display:block
}
.store-feature.show-rounded .price-round {
 display:block
}
.store-feature.show-rounded .price-exact {
 display:none
}
/*! File: home/search-feature.less */.search-feature {
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
.pro-flair {
 position:relative;
 top:1px;
 right:3px
}
.dropdown-container {
 right:-8px;
 top:52px
}
.header-dropdown {
 background-color:#181a1c;
 width:auto
}
.header-dropdown a,.header-dropdown a:visited {
 padding:11px 20px 10px 10px;
 display:block;
 color:#eee;
 font-size:14px;
 background-color:transparent
}
.header-dropdown a:hover,.header-dropdown a:visited:hover {
 background-color:rgba(0,113,206,.3);
 color:#fff;
 text-decoration:none
}
.header-dropdown a:hover .fa,.header-dropdown a:visited:hover .fa {
 color:#1c98ff
}
#mobileSearchDropDiv {
 height:0
}
.mobile-search-drop {
 position:absolute;
 top:55px;
 z-index:100;
 background-color:transparent;
 overflow:auto;
 width:100%
}
#mobileSearchForm {
 padding:10px 16px;
 margin:0;
 top:inherit;
 float:none;
 background-color:#181a1c
}
#mobileSearchForm .mobile-search-field {
 border:1px solid #888;
 background-color:transparent;
 width:100%;
 padding:10px 20px 8px;
 border-radius:22px;
 font-size:16px;
 outline:0;
 color:#eee
}
#mobileSearchForm .mobile-search-submit {
 position:absolute;
 right:18px;
 top:10px;
 border:none;
 background-color:transparent;
 padding:11px 20px;
 outline:0;
 font-size:14px;
 font-weight:600;
 color:#0071ce;
 border-radius:16px
}
.ifixit-header-logo {
 display:inline-block;
 position:absolute;
 top:19px;
 left:6px;
 text-indent:-8888px;
 outline:0;
 width:103px;
 height:31px;
 background-repeat:no-repeat;
 background-image:url(https://d1ulmmr4d4i8j4.cloudfront.net/static/images/home/header-sprite-2.png);
 background-position:-37px -20px
}
@media only screen and (-webkit-min-device-pixel-ratio:1.5),only screen and (min--moz-device-pixel-ratio:1.5),only screen and (-o-min-device-pixel-ratio:3/2),only screen and (min-device-pixel-ratio:1.5) {
 .ifixit-header-logo {
  width:107px;
  height:35px;
  background-repeat:no-repeat;
  background-image:url(https://d1ulmmr4d4i8j4.cloudfront.net/static/images/home/header-sprite-2.png);
  background-position:-115px -9px;
  background-size:262px 294px
 }
}
@media only screen and (max-width:599px) {
 .ifixit-header-logo {
  top:11px;
  left:11px;
  width:107px;
  height:35px;
  background-repeat:no-repeat;
  background-image:url(https://d1ulmmr4d4i8j4.cloudfront.net/static/images/home/header-sprite-2.png);
  background-position:-115px -9px;
  background-size:262px 294px
 }
}
@media only screen and (min-width:600px) and (max-width:1000px) {
 .ifixit-header-logo {
  left:24px
 }
}
nav.header-nav {
 display:-ms-flexbox;
 display:-webkit-flex;
 display:flex;
 -ms-justify-content:center;
 -webkit-justify-content:center;
 justify-content:center;
 -ms-flex-pack:center;
 width:100%;
 position:relative;
 z-index:4;
 background:#f5f5f5;
 border-bottom:1px solid #e1e1e2;
 padding:0
}
.header-nav-item-container {
 position:relative
}
.header-nav-item-container:not(:hover) .header-nav-item-secondary-container {
 display:none
}
.header-nav-item-secondary-container {
 background:#f5f5f5;
 border:1px solid #e1e1e2;
 border-top:none;
 position:absolute;
 top:100%;
 width:100%;
 overflow:hidden;
 border-bottom-right-radius:4px;
 border-bottom-left-radius:4px
}
a.header-nav-item {
 display:block;
 font-size:14px;
 transition:color .2s;
 white-space:nowrap;
 color:#212426
}
a.header-nav-item:hover {
 color:#0071ce
}
a.header-nav-item-primary {
 padding:0 45px;
 line-height:44px
}
a.header-nav-item-secondary {
 text-align:left;
 padding:0 16px;
 line-height:40px;
 border-top:1px solid #eee
}
.mobile-nav {
 display:none;
 width:100%;
 height:100%;
 position:fixed;
 background-color:#24272a;
 top:0;
 left:0;
 z-index:100;
 overflow:auto;
 -webkit-overflow-scrolling:touch
}
.mobile-nav a,.mobile-nav a:active,.mobile-nav a:hover,.mobile-nav a:visited {
 color:#fff
}
.mobile-nav h4 {
 font-size:20px;
 font-weight:300;
 color:#535d65;
 letter-spacing:1px;
 text-transform:uppercase;
 text-align:left;
 text-align:start;
 padding:24px 22px;
 margin:0
}
.mobile-nav ul {
 list-style-type:none;
 padding:0;
 margin:0;
 text-align:left;
 text-align:start
}
.mobile-nav-cart-menu {
 right:0;
 left:auto;
 width:auto;
 height:100vh;
 overflow:hidden;
 background-color:rgba(36,39,42,.97);
 box-shadow:0 0 150px rgba(0,0,0,.3)
}
.mobile-nav-cart-menu .mobile-close-button {
 top:3px
}
.mobile-nav-cart-menu ul {
 margin-top:63px!important
}
.mobile-close-button {
 position:absolute;
 top:18px;
 right:10px;
 color:#8f969a;
 font-size:15px;
 font-weight:600;
 padding:14px 35px 10px 20px;
 display:inline-block;
 cursor:pointer
}
.mobile-close-button:hover {
 color:#c5c8ca
}
.mobile-close-button:hover .close-icon {
 font-weight:500
}
.mobile-close-button .close-icon {
 font-style:normal;
 color:#fff;
 position:absolute;
 top:-1px;
 right:10px;
 font-size:36px;
 font-weight:100
}
.menu-container {
 min-height:100%;
 margin-bottom:-53px
}
.menu-container:after {
 content:"";
 display:block;
 height:53px
}
.mobile-nav-list li a {
 display:block;
 padding:13px 22px;
 font-size:16px;
 -webkit-tap-highlight-color:transparent;
 -webkit-tap-highlight-color:transparent
}
.mobile-nav-list li a:active {
 background-color:#000;
 text-decoration:none
}
.mobile-account-list li a {
 display:block;
 padding:13px 22px;
 font-size:16px
}
.mobile-account-list .reputation {
 float:right;
 color:#0071ce;
 margin:13px 22px 0 0;
 font-size:16px
}
.mobile-logged-in,.mobile-logged-out {
 width:100%
}
.mobile-logged-in li,.mobile-logged-out li {
 float:left;
 width:50%;
 border-top:1px solid #3c4145
}
.mobile-logged-in li:last-of-type,.mobile-logged-out li:last-of-type {
 border-left:1px solid #3c4145
}
.mobile-logged-in li a,.mobile-logged-out li a {
 display:block;
 background-color:#24272a;
 padding:18px 0 16px;
 text-align:center;
 font-size:16px
}
.mobile-logged-out {
 position:relative;
 bottom:0
}
.mobile-logged-in {
 position:relative
}
.mobile-logged-in li {
 width:100%;
 margin-top:15px
}
.mobile-logged-in li:last-of-type {
 border-left:none
}
.header-login a,.header-login a:hover,.header-login a:visited {
 color:#eee
}
.language-modal-container .modalContentBox {
 position:fixed;
 padding:0;
 overflow:inherit;
 top:200%;
 left:50%;
 margin-top:-220px;
 margin-left:-290px
}
@media only screen and (max-width:599px) {
 .language-modal-container .modalContentBox {
  position:fixed;
  padding:0;
  overflow:inherit;
  top:0;
  left:0;
  margin-top:0;
  margin-left:0;
  width:100%
 }
}
.modal-dialog {
 background:#fefefe;
 border-radius:5px;
 width:580px;
 padding:45px 0 0 0!important;
 text-align:center!important
}
.modal-dialog h2 {
 padding-bottom:15px;
 border-bottom:none!important;
 font-size:15px!important;
 font-weight:600;
 margin:0
}
.modal-dialog .modal-body {
 width:410px;
 margin:0 auto;
 padding-top:35px;
 border-top:1px solid #c9cdd4
}
.modal-dialog .modal-body ul {
 margin:0;
 padding:0
}
.modal-dialog .modal-footer {
 text-align:center
}
.modal-dialog #close {
 display:none
}
.modal-dialog .language-flag {
 height:92px;
 width:92px;
 position:relative;
 display:inline-block;
 padding-top:20px;
 margin:0 auto 2px 0;
 border:3px solid #fff;
 border-radius:5px;
 -webkit-transition:background-color .2s;
 transition:background-color .2s
}
.modal-dialog .language-flag:hover {
 border-color:#d6e7fd;
 cursor:pointer
}
.modal-dialog .language-flag p {
 font-size:12px!important;
 color:#212426
}
.modal-dialog .language-flag-active {
 background-color:#d6e7fd;
 border-color:#d6e7fd
}
.modal-dialog .language-flag-active:after {
 font-family:icomoon;
 content:"\f058";
 font-size:30px;
 color:#4a90e2;
 background-color:#fff;
 border:3px solid #fff;
 border-radius:30px;
 position:absolute;
 top:-15px;
 right:-15px;
 z-index:10;
 padding-left:2px;
 line-height:1
}
.modal-dialog .machine-translate {
 font-size:14px;
 margin-top:15px
}
.modal-dialog .button.help-translate {
 position:relative;
 display:inline-block;
 font-size:16px;
 margin:15px auto 35px;
 padding:15px 50px;
 border:1px solid #0071ce;
 border-radius:4px;
 color:#0071ce;
 -webkit-transition:all .2s;
 transition:all .2s
}
.modal-dialog .button.help-translate:hover {
 background-color:#0071ce;
 border-color:#0071ce;
 color:#fff
}
/*! File: Shared/workbench.less */#mainHeader .workbench {
 width:380px;
 background-color:#f5f5f5;
 overflow:hidden;
 padding:0;
 border-top:50px solid #181a1c
}
#mainHeader .workbench .workbench-header {
 padding:16px 0;
 background-color:#181a1c
}
#mainHeader .workbench .workbench-heading {
 margin:0;
 text-align:center;
 text-transform:uppercase;
 font-weight:700;
 font-size:14px;
 letter-spacing:1px;
 line-height:1;
 color:#fff
}
#mainHeader .workbench .workbench-topic-container {
 max-height:40vh;
 overflow:auto;
 background-color:#f5f5f5
}
#mainHeader .workbench .workbench-topic {
 display:-ms-flexbox;
 display:-webkit-flex;
 display:flex;
 -ms-flex-direction:column;
 -webkit-flex-direction:column;
 flex-direction:column;
 padding:16px;
 cursor:pointer;
 -webkit-transition:background-color .1s ease-in-out;
 transition:background-color .1s ease-in-out
}
#mainHeader .workbench .workbench-topic:hover {
 background-color:#fff
}
#mainHeader .workbench .topic-info-container {
 display:-ms-flexbox;
 display:-webkit-flex;
 display:flex;
 -ms-justify-content:space-between;
 -webkit-justify-content:space-between;
 justify-content:space-between;
 -ms-flex-pack:justify
}
#mainHeader .workbench .topic-img {
 width:80px;
 height:60px;
 mix-blend-mode:multiply
}
#mainHeader .workbench .topic-attributes-container {
 display:-ms-flexbox;
 display:-webkit-flex;
 display:flex;
 -ms-flex-direction:column;
 -webkit-flex-direction:column;
 flex-direction:column;
 -ms-justify-content:center;
 -webkit-justify-content:center;
 justify-content:center;
 -ms-flex-pack:center;
 width:100%;
 overflow:hidden;
 margin-left:16px
}
#mainHeader .workbench .topic-title {
 color:#24272a;
 font-weight:700;
 padding:0
}
#mainHeader .workbench .topic-title:hover {
 color:#24272a;
 background:inherit
}
#mainHeader .workbench .topic-attribute {
 margin:0
}
#mainHeader .workbench .delete-topic {
 display:-ms-flexbox;
 display:-webkit-flex;
 display:flex;
 -ms-flex-direction:column;
 -webkit-flex-direction:column;
 flex-direction:column;
 -ms-justify-content:center;
 -webkit-justify-content:center;
 justify-content:center;
 -ms-flex-pack:center;
 padding:0 0 0 10px
}
#mainHeader .workbench .delete-topic .svg-icon svg {
 color:#9e9fa0;
 stroke-width:1
}
#mainHeader .workbench .delete-topic .svg-icon svg:hover {
 color:red
}
#mainHeader .workbench .delete-topic:hover {
 background-color:transparent;
 color:#9e9fa0
}
#mainHeader .workbench .topic-action-container {
 display:none
}
#mainHeader .workbench .selected-topic {
 background-color:#fff
}
#mainHeader .workbench .selected-topic .topic-action-container {
 padding-top:16px;
 display:-ms-flexbox;
 display:-webkit-flex;
 display:flex;
 -ms-justify-content:stretch;
 -webkit-justify-content:stretch;
 justify-content:stretch;
 -ms-flex-pack:stretch
}
#mainHeader .workbench .topic-action-button {
 width:100%;
 color:#24272a;
 cursor:pointer;
 margin-left:16px;
 background-color:#fff;
 padding:11px 0 11px 0
}
#mainHeader .workbench .topic-action-button:first-child {
 margin-left:0
}
#mainHeader .workbench .topic-action-button:hover {
 background-color:#f5f5f5;
 color:#24272a
}
#mainHeader .workbench .add-topic-button-container {
 width:100%;
 height:72px;
 padding:16px;
 background-color:#f5f5f5
}
#mainHeader .workbench .add-topic-button {
 width:100%
}
/*! File: Shared/mini_cart.less */.mini-cart {
 min-width:320px;
 background-color:#fff!important;
 border-radius:0 0 4px 4px;
 box-shadow:0 0 0 1px rgba(0,3,6,.07),0 4px 10px rgba(0,3,6,.12)!important;
 overflow:hidden;
 padding:0!important;
 border-top:50px solid #181a1c
}
.mini-cart.header-dropdown li:last-of-type a {
 padding-bottom:0!important
}
.mini-cart .mini-cart-header {
 padding:16px 0;
 background-color:#181a1c
}
.mini-cart .mini-cart-heading {
 margin:0;
 text-align:center;
 text-transform:uppercase;
 font-weight:700;
 font-size:14px;
 letter-spacing:1px;
 line-height:1;
 color:rgba(255,255,255,.75)
}
.mini-cart .mini-cart-products-container {
 max-height:40vh;
 overflow:auto
}
.mini-cart .mini-cart-products {
 padding:0;
 margin:0;
 list-style:none
}
.mini-cart .mini-cart-product {
 display:-ms-flexbox;
 display:-webkit-flex;
 display:flex;
 padding:16px
}
.mini-cart .mini-cart-product+.mini-cart-product {
 border-top:1px solid rgba(0,3,6,.12)
}
.mini-cart .mini-cart-product-image {
 width:60px;
 height:60px
}
.mini-cart .mini-cart-product-info {
 display:-ms-flexbox;
 display:-webkit-flex;
 display:flex;
 -ms-flex-direction:column;
 -webkit-flex-direction:column;
 flex-direction:column;
 -ms-justify-content:center;
 -webkit-justify-content:center;
 justify-content:center;
 -ms-flex-pack:center;
 -ms-align-items:stretch;
 -webkit-align-items:stretch;
 align-items:stretch;
 -ms-flex-align:stretch;
 -ms-flex:1 1 auto;
 -webkit-flex:1 1 auto;
 flex:1 1 auto;
 margin-left:16px
}
.mini-cart .mini-cart-product-title {
 padding:0;
 font-weight:600;
 margin:0 0 4px;
 text-align:left;
 white-space:nowrap;
 color:rgba(0,3,6,.74)!important;
 overflow:hidden
}
.mini-cart .mini-cart-product-title:hover {
 color:#0071ce!important;
 background:0 0
}
.mini-cart .mini-cart-product-price {
 margin:0;
 color:rgba(0,3,6,.54);
 text-align:left
}
.mini-cart .mini-cart-empty-message {
 padding:48px 0;
 margin:0;
 font-size:16px;
 text-align:center;
 color:rgba(0,3,6,.74)
}
.mini-cart .mini-cart-footer {
 display:-ms-flexbox;
 display:-webkit-flex;
 display:flex;
 -ms-justify-content:stretch;
 -webkit-justify-content:stretch;
 justify-content:stretch;
 -ms-flex-pack:stretch;
 padding:16px;
 background-color:#f5f5f5
}
.mini-cart .mini-cart-button {
 -ms-flex:1 1 auto;
 -webkit-flex:1 1 auto;
 flex:1 1 auto;
 padding:10px 16px;
 transition:all .2s
}
.mini-cart .mini-cart-button.button-transparent {
 color:rgba(0,3,6,.74)!important;
 background:0 0
}
.mini-cart .mini-cart-button.button-transparent:hover {
 color:rgba(0,3,6,.74)!important;
 background:#fff
}
.mini-cart .mini-cart-button.button-action-solid {
 color:#fff
}
.mini-cart .mini-cart-button.button-action-solid:hover {
 opacity:.7
}
.mini-cart .mini-cart-button+.mini-cart-button {
 margin-left:16px
}
/*! File: Shared/footer.less */footer {
 background-color:rgba(36,39,42,.06);
 width:100%;
 padding-top:20px;
 font-size:15px;
 margin-top:60px
}
footer a {
 text-decoration:none
}
footer .footer-container {
 width:100%;
 max-width:1000px;
 margin:0 auto;
 padding-bottom:30px
}
footer .footer-row {
 padding:35px auto;
 text-align:center
}
footer .footer-row:after,footer .footer-row:before {
 content:"";
 display:table;
 clear:both
}
footer .footer-col-3 {
 width:25%;
 float:left;
 min-height:1px
}
footer .footer-col-4 {
 width:33.33%;
 float:left;
 min-height:1px
}
footer .footer-stats {
 padding:35px 10px
}
footer .footer-stats div p {
 color:rgba(36,39,42,.4);
 font-size:15px;
 text-transform:uppercase;
 letter-spacing:1px;
 margin:0
}
footer .footer-stats div .footer-stat {
 font-size:36px;
 font-weight:400;
 margin:0 0 5px 0;
 color:rgba(36,39,42,.7)
}
footer .footer-links {
 border-top:1px solid rgba(0,0,0,.07);
 padding:35px 0 0;
 text-align:left;
 text-align:start
}
footer .footer-links h3 {
 color:rgba(36,39,42,.7)
}
footer .footer-links div ul {
 list-style-type:none;
 margin:0;
 padding:0
}
footer .footer-links div ul li {
 margin:10px 10px 0 0
}
footer .footer-links div ul li a {
 color:rgba(36,39,42,.5);
 font-weight:400;
 text-decoration:none
}
footer .footer-links div ul li a:hover {
 color:rgba(36,39,42,.7)
}
footer .footer-links div ul li i.fa-plus {
 display:none
}
footer input.subscribe {
 width:100%;
 height:35px;
 font-size:14px;
 line-height:1.1;
 padding-left:15px;
 background:#fff;
 border:1px solid #ccc;
 color:#24272a;
 box-shadow:inset 0 3px 7px 0 rgba(0,0,0,.1);
 border-radius:25px
}
footer input.subscribe:focus,footer input.subscribe:hover {
 outline:0!important;
 border-color:#aaa
}
footer #newsletterIcon {
 position:relative;
 top:1px;
 margin-right:6px;
 display:none
}
footer #newsletterForm button.submit-button {
 background:0 0;
 border:none;
 outline:0
}
footer #newsletterEmailInput::-ms-clear {
 display:none
}
footer .footer-subscribe.error .subscribe {
 background:#fff;
 border-color:#f34742
}
footer .footer-subscribe.error .subscribe:focus {
 background:#fff;
 border-color:#f67672
}
footer .footer-subscribe.error #newsletterIcon {
 display:inline-block;
 color:#f34742
}
footer .footer-subscribe.success #newsletterIcon {
 display:inline-block;
 color:#0071ce
}
footer .footer-link-col h3,footer .footer-social-col h3 {
 margin:0;
 font-weight:700
}
footer .footer-social-col li {
 display:inline-block;
 text-align:center
}
footer .footer-social-col .footer-social-icons i {
 border:1px solid #ccc;
 background:0 0;
 width:35px;
 height:35px;
 line-height:18px;
 padding:8px;
 border-radius:35px;
 -webkit-transition:all .2s;
 transition:all .2s
}
footer .footer-social-col .footer-social-icons i:hover {
 color:#24272a;
 background:#fff;
 border-color:#aaa
}
footer .footer-social-col .footer-subscribe {
 padding:0
}
footer .footer-social-col .footer-subscribe p {
 margin:10px 0 15px;
 color:#aaa;
 text-align:left;
 text-align:start;
 font-size:15px;
 font-weight:400
}
footer .footer-social-col .footer-subscribe form {
 position:relative
}
footer .footer-social-col .footer-subscribe form i {
 position:absolute;
 top:10px;
 right:15px;
 font-size:14px;
 border:none;
 color:#aaa;
 cursor:pointer;
 -webkit-transition:color .2s;
 transition:color .2s
}
footer .footer-social-col .footer-subscribe form i:hover {
 color:#0071ce
}
footer .footer-social-col .footer-social-icons {
 display:block;
 margin:10px auto 0
}
footer .footer-social-col .footer-social-icons li {
 margin:0 10px 10px 0
}
@media only screen and (max-width:599px) {
 footer .footer-social-col .footer-social-icons {
  text-align:center
 }
}
footer .copyright {
 color:#9a9a9a;
 margin-bottom:30px
}
footer .copyright a {
 color:inherit;
 text-decoration:none
}
footer .copyright p {
 margin-bottom:10px
}
.footer-bottom-button {
 position:relative;
 padding:10px 25px;
 display:inline-block;
 margin:35px 15px;
 border:1px solid rgba(0,0,0,.1);
 border-radius:4px;
 color:#24272a;
 background-color:transparent;
 cursor:pointer;
 -webkit-transition:all .2s;
 transition:all .2s
}
.footer-bottom-button:visited {
 color:#24272a
}
.footer-bottom-button:hover {
 background-color:#fff;
 border-color:rgba(0,0,0,.25);
 color:#363c40;
 text-decoration:none
}
.footer-language-selector .sprite-flag {
 float:none;
 display:inline-block;
 margin:0 0 1px 5px
}
@media only screen and (max-width:599px) {
 .footer-language-selector {
  margin-top:0
 }
}
#gts_container {
 width:144px;
 margin:0 auto
}
@media only screen and (min-width:600px) and (max-width:1000px) {
 .footer-container {
  padding:0 20px 30px
 }
 .footer-links div li a {
  display:inline-block
 }
}
@media only screen and (max-width:599px) {
 footer {
  padding-top:0
 }
 footer [class*=footer-col-] {
  width:100%
 }
 footer .footer-stats {
  display:none
 }
 footer .footer-links {
  border:none;
  padding:0
 }
 footer .footer-links h3 {
  display:block;
  margin:0;
  padding:20px 30px;
  border-bottom:1px solid rgba(0,0,0,.2)
 }
 footer .footer-links h3:after {
  display:inline-block;
  position:absolute;
  content:"+";
  right:20px
 }
 footer .footer-links h3.drawer-open:after {
  content:"–"
 }
 footer .footer-link-col li {
  margin:0!important;
  border-bottom:solid 1px rgba(0,0,0,.05);
  position:relative
 }
 footer .footer-link-col li:hover {
  background-color:#0071ce
 }
 footer .footer-link-col li a,footer .footer-link-col li a:visited {
  color:inherit;
  display:block;
  padding:20px 30px
 }
 footer .footer-link-col li a:hover,footer .footer-link-col li a:visited:hover {
  background-color:#0071ce;
  color:#fff
 }
 footer .footer-social-col .footer-subscribe {
  background-color:#212528!important
 }
 footer .footer-social-col .footer-subscribe .footer-subscribe-liner {
  padding:20px 30px
 }
 footer .footer-social-col .footer-subscribe p {
  color:#9a9a9a;
  font-size:20px;
  margin:0 auto 25px;
  text-align:center
 }
 footer .footer-social-col .footer-subscribe form .subscribe {
  height:44px
 }
 footer .footer-social-col .footer-subscribe form i {
  top:10px;
  right:20px
 }
 .slide-drawer {
  height:0;
  overflow:hidden
 }
 .modal-dialog h2 {
  font-size:15px
 }
 .modal-dialog .language-flag {
  width:100px
 }
 .modal-dialog .modal-body {
  padding:0;
  width:100%;
  border:none
 }
}
iframe[name=google_conversion_frame] {
 height:0!important;
 width:0!important;
 line-height:0!important;
 font-size:0!important;
 margin-top:-13px;
 float:left
}
/*! File: Shared/modal.less */.modal-overlay {
 background-color:#000;
 background-color:rgba(0,0,0,.7)
}
.modalBox {
 position:fixed;
 padding:30px 15px;
 overflow:auto;
 -webkit-overflow-scrolling:touch;
 z-index:100000;
 top:0;
 left:0;
 right:0;
 bottom:0;
 border:0;
 border-radius:0
}
.modalBox.letterBoxModal {
 width:48%!important;
 height:auto!important;
 top:0!important;
 left:0!important;
 border:1px solid #fafafa;
 box-shadow:0 2px 10px rgba(0,0,0,.5);
 margin:4% 26%
}
.modalBox.letterBoxModal .modalContentBox {
 margin:0 auto;
 padding:24px
}
.modalBox.letterBoxModal .modalContentBox,.modalBox.letterBoxModal .modalContentBox div {
 width:100%!important
}
body.modal-displayed {
 overflow:hidden
}
@media only screen and (max-width:599px) {
 .responsive .modalBox.letterBoxModal {
  height:92%!important
 }
}
@media only screen and (max-width:1000px) {
 .responsive .modalBox.letterBoxModal {
  width:92%!important;
  margin:4%!important;
  overflow:scroll;
  overflow-x:hidden
 }
 .responsive .modalBox.letterBoxModal .modalCloseBtn {
  top:0;
  right:0
 }
 .responsive .modalBox.letterBoxModal .modalContentBox {
  height:auto!important
 }
}
.modalContentBox {
 max-width:872px;
 margin:0 auto;
 padding:0;
 height:auto!important;
 text-align:center;
 overflow:hidden;
 position:relative
}
.modalContentBox>.modal-content {
 position:relative;
 margin:auto;
 padding:8px;
 max-width:100%;
 display:inline-block;
 background:#fff;
 border-radius:8px!important;
 text-align:left;
 text-align:start;
 overflow:auto;
 box-shadow:0 2px 10px 0 rgba(0,0,0,.7)
}
.modalHeader {
 padding:5px 5px 10px 5px;
 background:#666;
 overflow:hidden
}
.modalHeader .modalTitle {
 margin:0;
 text-align:center;
 border:none
}
.modalHeader,.modalHeader .modalTitle,.modalHeader a,.modalHeader a:visited {
 color:#fff
}
.modalBox .modalCloseBtn {
 position:absolute;
 top:0;
 right:0;
 z-index:501;
 cursor:pointer;
 font-size:20px;
 padding:0 9px 3px 10px;
 line-height:1.5em;
 border-top-right-radius:8px;
 border-bottom-left-radius:8px;
 background:#eee;
 color:#666
}
.modalBox .modalCloseBtn:hover {
 color:#222
}
.modalBox .formBody {
 background-color:#fff
}
.modalBox>.throbber {
 margin-top:200px
}
.loading {
 position:absolute;
 text-align:center;
 background:url(https://d1ulmmr4d4i8j4.cloudfront.net/static/images/modal/spinner.gif) no-repeat;
 background-position:bottom center
}
.loading .message {
 margin:0 0 40px 0;
 font-size:20px;
 font-weight:700
}
.loading .subMessage {
 margin:-35px 0 40px 0
}
.modalMessage {
 width:350px
}
.modalMessageText {
 margin:0;
 padding:8px 8px 8px
}
.modalMessageButtons {
 margin:0;
 padding:0 8px 8px 8px;
 text-align:right
}
.modalMessageButtons.full-width button {
 width:100%;
 margin-left:0
}
.modalMessageButtons button {
 margin:8px 0 0 10px
}
.modalBox .formBody {
 margin:0 18px 36px
}
.modalContentBox>.defaultWidth {
 min-width:500px
}
@media only screen and (max-width:740px) {
 .modalContentBox>.defaultWidth {
  min-width:100%
 }
}
.modalCloseBtn {
 display:none
}
/*! File: Shared/sitewide_notifications/right_to_repair.less */.rightToRepairBox {
 padding:27px 40px!important
}
@media only screen and (max-width:599px) {
 .rightToRepairBox {
  padding-left:25px;
  padding-right:25px
 }
}
.rightToRepairBox h2,.rightToRepairBox h3,.rightToRepairBox p {
 color:#212426
}
.rightToRepairBox h2 {
 margin-top:0;
 border-bottom:0;
 font-size:28px;
 color:#0071ce
}
.rightToRepairBox h3 {
 margin-top:16px;
 margin-bottom:16px;
 font-size:16px
}
.rightToRepairBox p {
 font-size:16px;
 line-height:1.55em;
 margin:16px 0
}
.rightToRepairBox a {
 color:#0071ce;
 font-weight:600
}
.rightToRepairBox .modalContent {
 height:auto;
 background-color:#fff
}
.rightToRepairBox .button {
 display:block;
 margin-top:24px;
 padding:15px 22px;
 background-color:#0071ce;
 color:#fff;
 border-radius:44px;
 font-size:22px;
 font-weight:400;
 text-align:center
}
.rightToRepairBox .button,.rightToRepairBox .button:active,.rightToRepairBox .button:hover,.rightToRepairBox .button:visited {
 text-decoration:none
}
/*! File: Shared/country_flags.less */.sprite-flag {
 display:inline-block;
 margin-right:10px;
 background-image:url(https://d1ulmmr4d4i8j4.cloudfront.net/static/images/country_flags/sprite_sheets/16px_11px_1.png);
 background-repeat:no-repeat;
 width:16px;
 height:11px;
 float:left;
 position:relative
}
.sprite-flag-lg {
 width:32px;
 height:32px;
 display:inline-block;
 background-image:url(https://d1ulmmr4d4i8j4.cloudfront.net/static/images/country_flags/sprite_sheets/32px_32px_1.png);
 background-repeat:no-repeat;
 position:relative
}
.sprite-flag-he {
 background-image:url(https://d1ulmmr4d4i8j4.cloudfront.net/static/images/country_flags/he.png);
 background-position-y:-2px
}
.sprite-flag-lg-he {
 background-image:url(https://d1ulmmr4d4i8j4.cloudfront.net/static/images/country_flags/he-lg.png)
}
.sprite-flag-ar {
 background-image:url(https://d1ulmmr4d4i8j4.cloudfront.net/static/images/country_flags/ar-2.png);
 background-position-y:-2px
}
.sprite-flag-br {
 background-position:0 0
}
.sprite-flag-cz {
 background-position:-32px 0
}
.sprite-flag-ro {
 background-position:-48px -33px
}
.sprite-flag-my {
 background-position:-64px -22px
}
.sprite-flag-kr {
 background-position:-48px -22px
}
.sprite-flag-gr {
 background-position:-48px -11px
}
.sprite-flag-th {
 background-position:-16px -44px
}
.sprite-flag-es {
 background-position:-80px 0
}
.sprite-flag-se {
 background-position:0 -44px
}
.sprite-flag-fi {
 background-position:-16px -11px
}
.sprite-flag-us {
 background-position:-48px -44px
}
.sprite-flag-ru {
 background-position:-80px -33px
}
.sprite-flag-cn {
 background-position:-16px 0
}
.sprite-flag-jp {
 background-position:-32px -22px
}
.sprite-flag-it {
 background-position:-16px -22px
}
.sprite-flag-ph {
 background-position:0 -33px
}
.sprite-flag-vn {
 background-position:-64px -44px
}
.sprite-flag-sr {
 background-position:-64px -33px
}
.sprite-flag-dk {
 background-position:-64px 0
}
.sprite-flag-eu {
 background-position:0 -11px
}
.sprite-flag-nl {
 background-position:-80px -22px
}
.sprite-flag-pl {
 background-position:-16px -33px
}
.sprite-flag-za {
 background-position:-80px -44px
}
.sprite-flag-id {
 background-position:-80px -11px
}
.sprite-flag-tr {
 background-position:-32px -44px
}
.sprite-flag-fr {
 background-position:-32px -11px
}
.sprite-flag-de {
 background-position:-48px 0
}
.sprite-flag-hu {
 background-position:-64px -11px
}
.sprite-flag-pt {
 background-position:-32px -33px
}
.sprite-flag-in {
 background-position:0 -22px
}
.sprite-flag-lg-br {
 background-position:0 0
}
.sprite-flag-lg-cz {
 background-position:-64px 0
}
.sprite-flag-lg-ro {
 background-position:-64px -96px
}
.sprite-flag-lg-my {
 background-position:-96px -64px
}
.sprite-flag-lg-kr {
 background-position:-64px -64px
}
.sprite-flag-lg-gr {
 background-position:-64px -32px
}
.sprite-flag-lg-es {
 background-position:-160px 0
}
.sprite-flag-lg-se {
 background-position:-160px -96px
}
.sprite-flag-lg-fi {
 background-position:0 -32px
}
.sprite-flag-lg-us {
 background-position:-64px -128px
}
.sprite-flag-lg-ru {
 background-position:-128px -96px
}
.sprite-flag-lg-cn {
 background-position:-32px 0
}
.sprite-flag-lg-jp {
 background-position:-32px -64px
}
.sprite-flag-lg-it {
 background-position:0 -64px
}
.sprite-flag-lg-ph {
 background-position:-160px -64px
}
.sprite-flag-lg-vn {
 background-position:-96px -128px
}
.sprite-flag-lg-sr {
 background-position:-96px -96px
}
.sprite-flag-lg-dk {
 background-position:-128px 0
}
.sprite-flag-lg-th {
 background-position:0 -128px
}
.sprite-flag-lg-nl {
 background-position:-128px -64px
}
.sprite-flag-lg-pl {
 background-position:0 -96px
}
.sprite-flag-lg-za {
 background-position:-128px -128px
}
.sprite-flag-lg-id {
 background-position:-128px -32px
}
.sprite-flag-lg-tr {
 background-position:-32px -128px
}
.sprite-flag-lg-fr {
 background-position:-32px -32px
}
.sprite-flag-lg-de {
 background-position:-96px 0
}
.sprite-flag-lg-hu {
 background-position:-96px -32px
}
.sprite-flag-lg-pt {
 background-position:-32px -96px
}
.sprite-flag-lg-in {
 background-position:-160px -32px
}

        </style>
    </head>
    <body>
    	<div class="container-fluid"> 
 <div class="background-feature-photo" style="background-image: url(https://d1ulmmr4d4i8j4.cloudfront.net/static/images/home/feature-photos/home-feature-amazontv.jpg)">
      <div class="homepage-login hidden-mobile hidden-xs hidden-sm">
                     <a href="{{ url('/register') }}">Join</a>
            <a href="{{ url('/login') }}">Log In</a>
            <span class="js-trigger-language-modal sprite-flag sprite-flag-us"></span>               </div>
     
@if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
</div>
<script src="https://use.fontawesome.com/677d9ca8ee.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
</html>