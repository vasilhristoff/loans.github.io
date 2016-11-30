<?php
   if(isset($_POST['send'])) {
      require 'mail.php';
   }
   ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class=" js flexbox canvas canvastext webgl touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
   <head>
      <style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="GENERATOR" content="Microsoft SharePoint">
      <meta name="format-detection" content="telephone=no">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta http-equiv="Expires" content="0">
      <title>
         Digital loan - Credit Digital
      </title>
      <link rel="shortcut icon" href="/Style%20Library/boj/images/favicon.ico" type="image/vnd.microsoft.icon" id="favicon">
      <style>

      .home-area .landing-header .btn-contact {
        cursor: pointer;
      }

      .header-tools .dropdown .btn {
        color: #000;
        cursor:pointer;
      }

      .dropdown-menu>li>a {
        padding: 2px 0 !important;
        text-align: center !important;
      }
         body{
         overflow-x: hidden;
         }
         #loader-wrapper {
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         z-index: 1000;
         }
         #loader {
         display: block;
         position: relative;
         left: 50%;
         top: 50%;
         width: 150px;
         height: 150px;
         margin: -75px 0 0 -75px;
         border-radius: 50%;
         border: 7px solid transparent;
         border-top-color: #58cb2a;
         -webkit-animation: spin 2s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
         animation: spin 2s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
         z-index: 1001;
         }
         #loader:before {
         content: "";
         position: absolute;
         top: 5px;
         left: 5px;
         right: 5px;
         bottom: 5px;
         border-radius: 50%;
         border: 4px solid transparent;
         border-top-color: #ccc;
         -webkit-animation: spin 3s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
         animation: spin 3s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
         }
         #loader:after {
         content: "";
         position: absolute;
         top: 15px;
         left: 15px;
         right: 15px;
         bottom: 15px;
         border-radius: 50%;
         border: 4px solid transparent;
         border-top-color: #ccc;
         -webkit-animation: spin 1.5s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
         animation: spin 1.5s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
         }
         @-webkit-keyframes spin {
         0%   {
         -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
         -ms-transform: rotate(0deg);  /* IE 9 */
         transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
         }
         100% {
         -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
         -ms-transform: rotate(360deg);  /* IE 9 */
         transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
         }
         }
         @keyframes spin {
         0%   {
         -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
         -ms-transform: rotate(0deg);  /* IE 9 */
         transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
         }
         100% {
         -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
         -ms-transform: rotate(360deg);  /* IE 9 */
         transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
         }
         }
         #loader-wrapper .loader-section {
         position: fixed;
         top: 0;
         width: 51%;
         height: 100%;
         background: #f5f5f5;
         z-index: 1000;
         }
         #loader-wrapper .loader-section.section-left {
         left: 0;
         }
         #loader-wrapper .loader-section.section-right {
         right: 0;
         }
         /* Loaded styles */
         .loaded #loader-wrapper .loader-section.section-left {
         opacity: 0;
         }
         .loaded #loader-wrapper .loader-section.section-right {
         opacity: 0;
         }
         .loaded #loader {
         opacity: 0;
         -webkit-transition: all 0.3s ease-out;  /* Android 2.1+, Chrome 1-25, iOS 3.2-6.1, Safari 3.2-6  */
         transition: all 0.3s ease-out;  /* Chrome 26, Firefox 16+, iOS 7+, IE 10+, Opera, Safari 6.1+  */
         }
         .loaded #loader-wrapper {
         visibility: hidden;
         -webkit-transform: translateY(-100%);  /* Chrome, Opera 15+, Safari 3.1+ */
         -ms-transform: translateY(-100%);  /* IE 9 */
         transform: translateY(-100%);  /* Firefox 16+, IE 10+, Opera */
         -webkit-transition: all 0.3s 1s ease-out;  /* Android 2.1+, Chrome 1-25, iOS 3.2-6.1, Safari 3.2-6  */
         transition: all 0.3s 1s ease-out;  /* Chrome 26, Firefox 16+, iOS 7+, IE 10+, Opera, Safari 6.1+  */
         }
         #content {
         margin: 0 auto;
         padding-bottom: 50px;
         width: 80%;
         max-width: 978px;
         }
      </style>

      <meta name="description" content="&#8203;Here, at Credit Digital, you can get a loan without leaving home, and without switching banks. Up to NIS 50,000 available for any purpose, for customers of all banks.">
      <meta name="keywords" content="loan, loans, digital loan">
      <!--[if lt IE 9]>
      <script type="text/javascript" src="/_layouts/15/BankJerusalem/scripts/html5shiv.min.js"></script>
      <![endif]-->
      <style type="text/css">.customForm-unselectable{-moz-user-select:none;-webkit-tap-highlight-color:rgba(255,255,255,0);-webkit-user-select:none;user-select:none;}</style>
      <style type="text/css">.oridomi-active{background-color:transparent !important;background-image:none !important;-webkit-box-sizing:border-box !important;border:none !important;outline:none !important;padding:0 !important;-webkit-transform-style:preserve-3d !important;-webkit-mask:none !important;position:relative;}.oridomi-clone{margin:0 !important;-webkit-box-sizing:border-box !important;overflow:hidden !important;display:block !important;}.oridomi-holder{width:100%;position:absolute;top:0;bottom:0;-webkit-transform-style:preserve-3d;}.oridomi-stage{width:100%;height:100%;position:absolute;-webkit-transform:translate3d(-9999px, 0, 0);margin:0;padding:0;-webkit-transform-style:preserve-3d;}.oridomi-stage-left{-webkit-perspective-origin:0% 50%;}.oridomi-stage-right{-webkit-perspective-origin:100% 50%;}.oridomi-stage-top{-webkit-perspective-origin:50% 0%;}.oridomi-stage-bottom{-webkit-perspective-origin:50% 100%;}.oridomi-shader{width:100%;height:100%;position:absolute;opacity:0;top:0;left:0;pointer-events:none;-webkit-transition-property:opacity;}.oridomi-shader-left{background:-webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(255, 255, 255, .35) 100%);}.oridomi-shader-right{background:-webkit-linear-gradient(right, rgba(0, 0, 0, .5) 0%, rgba(255, 255, 255, .35) 100%);}.oridomi-shader-top{background:-webkit-linear-gradient(top, rgba(0, 0, 0, .5) 0%, rgba(255, 255, 255, .35) 100%);}.oridomi-shader-bottom{background:-webkit-linear-gradient(bottom, rgba(0, 0, 0, .5) 0%, rgba(255, 255, 255, .35) 100%);}.oridomi-content{margin:0 !important;position:relative !important;float:none !important;-webkit-box-sizing:border-box !important;overflow:hidden !important;}.oridomi-mask{width:100%;height:100%;position:absolute;overflow:hidden;-webkit-transform:translate3d(0, 0, 0);outline:1px solid transparent;}.oridomi-panel{width:100%;height:100%;padding:0;position:absolute;-webkit-transition-property:-webkit-transform;-webkit-transform-origin:left;-webkit-transform-style:preserve-3d;}.oridomi-panel-h{-webkit-transform-origin:top;}.oridomi-stage-right .oridomi-panel{-webkit-transform-origin:right;}.oridomi-stage-bottom .oridomi-panel{-webkit-transform-origin:bottom;}</style>
      <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/json2/20121008/json2.min.js"></script>
   </head>
   <body onhashchange="if (typeof(_spBodyOnHashChange) != 'undefined') _spBodyOnHashChange();" id="english-lang">

      <div id="s4-workspace">
         <div id="s4-bodyContainer">
            <div id="ctl00_MSO_ContentDiv" class="EmptyMainContent">
               <div id="BojWpzWideWPZ">
                  <div class="WpBody">
                     <div id="ctl00_SPWebPartManager1_g_11f75d7d_3280_408c_9c32_417a58174ad3">
                        <div class="Loans ng-scope" ng-app="boj">
                           <div class="page-area">
                              <div ng-controller="LoansController as loansCtrl" style="min-width:225px;" class="loansCtrl ng-scope">
                                 <!-- ngView: undefined -->
                                 <ng-view class="ng-scope">
                                    <div class="LoansForm ng-scope" ng-init="loansCtrl.InitPage()" ng-class="loansCtrl.IsArabicSite ? 'Arabic' : ''" ng-scroll-to-home-area="">
                                       <ng_lazy_load></ng_lazy_load>
                                       <div id="wrapper">
                                          <div class="home-area">
                                             <header class="landing-header">
                                                <strong class="logo"><a href="#" title="Credit Digital" ng-bind="loansCtrl.GetLblValue('Lbl14010')" class="ng-binding">Logo</a></strong>
                                                <!-- <ul class="header-tools">
                                                   <li class="hidden-xs">

                                                   </li>
                                                      	<li ng-class="loansCtrl.IsHebrewSite ? 'hide' : ''" class="hidden-xs language"><a href="hebrew.php" ng-bind="loansCtrl.GetLblValue('Lbl14282')" class="ng-binding">עברית</a></li>
                                                      		<li class="visible-xs-inline-block">
                                                   	<a href="tel:*5727" title="Call Service Center now" class="btn-phone ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14266')">5727</a>
                                                   </li>
                                                   <li class="visible-xs-inline-block">
                                                                      <div class="mobile-languages select-mobile-languages dropdown">
                                                   		<a href="javascript:void(0);" class="select-opener dropdown-toggle ng-binding" title="Change website language" data-toggle="dropdown" ng-bind="loansCtrl.GetLblValue('Lbl14013')">עברית | العربية</a>
                                                   		<ul class="dropdown-menu">
                                                   			<li><a href="/loans/pages/consumercreditsimulator.aspx?amount=50000#!/form" ng-bind="loansCtrl.GetLblValue('Lbl14282')" class="ng-binding">עברית</a></li>
                                                                              <li><a href="/ar/loans/pages/consumercreditsimulator.aspx?amount=50000#!/form" ng-bind="loansCtrl.GetLblValue('Lbl14284')" class="ng-binding">العربية</a></li>
                                                   			<li><a href="/en/loans/pages/consumercreditsimulator.aspx?amount=50000#!/form" ng-bind="loansCtrl.GetLblValue('Lbl14283')" class="ng-binding">English</a></li>

                                                   		</ul>
                                                   	</div>
                                                   </li>
                                                   </ul><!-- end header-tools -->
                                                <!-- <div class="header-tools">
                                                   <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">English
                                                   <span class="caret"></span></button>
                                                   <ul class="dropdown-menu">
                                                     <li><a href="#">עברית </a></li>
                                                     <li><a href="#">Englis</a></li>
                                                   </ul>
                                                   </div> -->
                                                <div class="header-tools">
                                                   <div class="dropdown">
                                                      <a href="#" class="btn dropdown-toggle" type="button" data-toggle="dropdown">English
                                                      <span class="caret"><img src="Style%20Library/boj/images/Loans/lang-arrow.png" alt="" /></span></a>
                                                      <ul class="dropdown-menu">
                                                         <li><a href="hebrew.php">עברית </a></li>
                                                         <li><a href="index.php">English</a></li>
                                                      </ul>
                                                   </div>
                                                </div>
                                                <ul class="main-nav">
                                                   <li><a href="#link1" onclick="$('#link1').modal('show');">About</a></li>
                                                   <li><a href="#link2" onclick="$('#link2').modal('show');">Loans</a></li>
                                                   <li><a href="#link3" onclick="$('#link3').modal('show');">Debit Card </a></li>
                                                   <li><a href="#link4" onclick="$('#link4').modal('show');">Investors</a></li>
                                                </ul>
                                                <a href="#formcontact" onclick="$('#formcontact').modal('show');" class="btn-contact btn-menu" title="Click for help or to leave details">
                                                <span class="ng-binding">Need Help?</span>
                                                </a>
                                             </header>
                                             <!-- end landing-header -->
                                             <section class="home-info">
                                                <header class="home-heading">
                                                   <h1 ng-bind="loansCtrl.GetLblValue('Lbl14014')" class="ng-binding">Digital Loan</h1>
                                                   <p ng-bind="loansCtrl.GetLblValue('Lbl14015')" class="ng-binding">Without leaving home, for customers of all banks</p>
                                                </header>
                                                <!-- end home-heading -->
                                                <div class="loan-form">
                                                   <form action="#" class="ng-pristine ng-valid ng-valid-maxlength">
                                                      <label for="txtSchumHalvaaMevukash"><span class="hidden-xs ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14016')">Enter the loan amount you wish to receive</span><span class="visible-xs-block ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14016')">Enter the loan amount you wish to receive</span></label>
                                                      <div class="input-box" data-content="NIS">
                                                         <input ng-attr-placeholder="{{loansCtrl.GetSettingValueWithComma('LoansDefaultAmount')}}" id="txtSchumHalvaaMevukash" type="text" ng-model="loansCtrl.amount" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" ng-only-digits="" ng-blur="loansCtrl.AddCommaToAmount()" maxlength="5" placeholder="50,000">
                                                      </div>
                                                      <!-- end input-box -->
                                                      <footer>
                                                         <label class="amountErrorMsg error hide"><span ng-bind="loansCtrl.amountErrorMsgReplace()" class="ng-binding">Please enter an amount between 5,000-50,000 NIS</span></label>
                                                         <a href="#section-01" class="link ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14018')">Check your loan eligibility</a>
                                                         <a href="#section-01" class="btn btn-arrow bounce" title="Click to check eligibility for a loan">&amp;</a>
                                                      </footer>
                                                   </form>
                                                </div>
                                                <!-- end loan-form -->
                                             </section>
                                             <!-- end home-info -->
                                             <footer class="home-footer">
                                                <ul>
                                                   <li>
                                                      <a href="javascript:void(0);" class="no-pointer-events" title="SSL secure process">
                                                      <i class="ico-lock">&nbsp;</i>
                                                      <span ng-bind="loansCtrl.GetLblValue('Lbl14007')" class="ng-binding">SSL secured process</span>
                                                      </a>
                                                   </li>
                                                   <li class="link-terms"><a href="#LegalTermsModal" onclick="$('#LegalTermsModal').modal('show');" title="Click to read the legal terms and conditions" target="_self" class="" >  <i class="ico-terms">&nbsp;</i>Legal terms</a></li>
                                                </ul>
                                             </footer>
                                             <!-- end home-footer -->
                                          </div>
                                          <!-- end home-area -->
                                          <div class="inner-page" id="form-page" style="display: block;">
                                             <header id="header">
                                                <!-- <a href="javascript:void(0);" class="btn-contact white btn-menu" title="Click for help or to leave details">
                                                   <span ng-bind="loansCtrl.GetLblValue('Lbl14099')" class="ng-binding">Need Help?</span>
                                                   </a> -->
                                                <div class="progress-bar">
                                                   <strong class="mobile-title hidden visible-sm visible-xs ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14002')">Loan purpose</strong>
                                                   <ul class="progress-list step2">
                                                      <li class="previous"><a href="#main" ng-bind="loansCtrl.GetLblValue('Lbl14001')" class="ng-binding">Loan amount</a></li>
                                                      <li class="active"><a href="#section-01" ng-bind="loansCtrl.GetLblValue('Lbl14002')" class="ng-binding">Loan purpose</a></li>
                                                      <li class="disable"><a href="#section-02" ng-bind="loansCtrl.GetLblValue('Lbl14003')" class="ng-binding">About you</a></li>
                                                      <li class="disable"><a href="#section-03" ng-bind-html="loansCtrl.GetLblValueAsHtml('Lbl14004')" class="ng-binding">Incomes &amp; Expenses</a></li>
                                                      <li class="disable"><a href="#section-04" ng-bind="loansCtrl.GetLblValue('Lbl14005')" class="ng-binding">Additional details</a></li>
                                                      <li class="disable"><a href="javascript:void(0);" ng-bind="loansCtrl.GetLblValue('Lbl14006')" class="ng-binding">Loan application</a></li>
                                                   </ul>
                                                </div>
                                                <!-- / progress -->
                                             </header>
                                             <!-- / header -->
                                             <div class="popup-message">
                                                <span ng-bind="loansCtrl.GetLblValue('Lbl14293')" class="ng-binding">Excellent, we will be happy to proceed and get to know you a little better</span>
                                                <span ng-bind="loansCtrl.GetLblValue('Lbl14294')" class="ng-binding">Thanks :) Now help us understand more about your everyday life</span>
                                                <span ng-bind="loansCtrl.GetLblValue('Lbl14295')" class="ng-binding">Sounds interesting, just a few more details and we will complete the application</span>
                                             </div>
                                             <!-- / popup-message -->
                                             <div class="area-section-js" ng-scroll-inactive="">
                                                <div class="active-block active" id="section-01">
                                                   <section class="purpose-loan">
                                                      <div class="container">
                                                         <header>
                                                            <h2 ng-bind="loansCtrl.GetLblValue('Lbl14019')" class="ng-binding">What is the loan purpose?</h2>
                                                            <p ng-bind="loansCtrl.GetLblValue('Lbl14020')" class="ng-binding">Select one of the following options</p>
                                                         </header>
                                                         <ul class="targets-list">
                                                            <li>
                                                               <div class="holder">
                                                                  <a href="javascript:void(0);" data-matarat-halvaa="8" class="ico ico-01" title="Select: Help for a family member">
                                                                     <!-- <img class="static" src="Style%20Library/boj/images/Loans/ico-target-001.svg" alt="Select: Help for a family member" width="178" height="178">
                                                                        <img class="hover" src="Style%20Library/boj/images/Loans/ico-target-hover-001.gif" alt="Select: Help for a family member" width="178" height="178">
                                                                        <img class="active" src="Style%20Library/boj/images/Loans/ico-target-press-001.svg" alt="Select: Help for a family member" width="178" height="178"> -->
                                                                     <img  src="Style%20Library/boj/images/Loans/familiar-insurance-symbol.svg" alt="Select: Help for a family member" width="100" height="100">
                                                                  </a>
                                                                  <span ng-bind="loansCtrl.GetLblValue('Lbl14021')" class="ng-binding">Helping a family member</span>
                                                               </div>
                                                            </li>
                                                            <li>
                                                               <div class="holder">
                                                                  <a href="javascript:void(0);" data-matarat-halvaa="2" class="ico ico-02" title="Select: Home improvement">
                                                                     <!-- <img class="static" src="Style%20Library/boj/images/Loans/ico-target-002.svg" alt="Select: Home improvement" width="104" height="112">
                                                                        <img class="hover" src="Style%20Library/boj/images/Loans/ico-target-hover-002.gif" alt="Select: Home improvement" width="178" height="178">
                                                                        <img class="active" src="Style%20Library/boj/images/Loans/ico-target-press-002.svg" alt="Select: Home improvement" width="104" height="112"> -->
                                                                     <img  src="Style%20Library/boj/images/Loans/house.svg" alt="Select: Home improvement" width="100" height="100">
                                                                  </a>
                                                                  <span ng-bind="loansCtrl.GetLblValue('Lbl14022')" class="ng-binding">Home improvement</span>
                                                               </div>
                                                            </li>
                                                            <li>
                                                               <div class="holder">
                                                                  <a href="javascript:void(0);" data-matarat-halvaa="7" class="ico ico-03" title="Select: Pecuniary obligation">
                                                                     <!-- <img class="static" src="Style%20Library/boj/images/Loans/ico-target-003.svg" alt="Select: Pecuniary obligation" width="138" height="88">
                                                                        <img class="hover" src="Style%20Library/boj/images/Loans/ico-target-hover-003.gif" alt="Select: Pecuniary obligation" width="178" height="178">
                                                                        <img class="active" src="Style%20Library/boj/images/Loans/ico-target-press-003.svg" alt="Select: Pecuniary obligation" width="138" height="88"> -->
                                                                     <img  src="Style%20Library/boj/images/Loans/agreement.svg" alt="Select: Pecuniary obligation" width="100" height="100">
                                                                  </a>
                                                                  <span ng-bind="loansCtrl.GetLblValue('Lbl14023')" class="ng-binding">Financial obligation</span>
                                                               </div>
                                                            </li>
                                                            <li>
                                                               <div class="holder">
                                                                  <a href="javascript:void(0);" data-matarat-halvaa="3" class="ico ico-04" title="Select: Studies">
                                                                     <!-- <img class="static" src="Style%20Library/boj/images/Loans/ico-target-004.svg" alt="Select: Studies" width="178" height="178">
                                                                        <img class="hover" src="Style%20Library/boj/images/Loans/ico-target-hover-004.gif" alt="Select: Studies" width="178" height="178">
                                                                        <img class="active" src="Style%20Library/boj/images/Loans/ico-target-press-004.svg" alt="Select: Studies" width="178" height="178"> -->
                                                                     <img  src="Style%20Library/boj/images/Loans/open-book.svg" alt="Select: Studies" width="100" height="100">
                                                                  </a>
                                                                  <span ng-bind="loansCtrl.GetLblValue('Lbl14024')" class="ng-binding">Studies</span>
                                                               </div>
                                                            </li>
                                                            <li class="add-btn">
                                                               <div class="holder">
                                                                  <a href="javascript:void(0);" data-matarat-halvaa="4" class="ico ico-05 other" title="Select: Other purpose">
                                                                     <!-- <img class="static" src="Style%20Library/boj/images/Loans/ico-target-005.svg" alt="Select: Other purpose" width="74" height="74">
                                                                        <img class="hover" src="Style%20Library/boj/images/Loans/ico-target-hover-005.gif" alt="Select: Other purpose" width="178" height="178">
                                                                        <img class="active" src="Style%20Library/boj/images/Loans/ico-target-press-005.svg" alt="Select: Other purpose" width="74" height="74"> -->
                                                                     <img  src="Style%20Library/boj/images/Loans/plus.svg" alt="Select: Studies" width="100" height="100">
                                                                  </a>
                                                                  <span ng-bind="loansCtrl.GetLblValue('Lbl14025')" class="ng-binding">Other purpose</span>
                                                               </div>
                                                               <div class="add-text">
                                                                  <form action="javascript:void(0);" class="ng-pristine ng-valid">
                                                                     <div class="input-holder">
                                                                        <input id="txtMataratHalvaaAher" type="text" class="form-control" placeholder="Enter the loan purpose">
                                                                        <label class="MataratHalvaaAherErrorMsg error">
                                                                        <span class="empty hide ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14911')">Please fill in all required fields</span>
                                                                        <span class="invalidString hide ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14916')">Please enter valid characters</span>
                                                                        <span class="arabic hide ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14938')">Please enter characters in Hebrew or English only</span>
                                                                        </label>
                                                                     </div>
                                                                     <a href="javascript:void(0);" class="btn btn-warning saveOther ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14027')" title="Send other purpose">Continue</a>
                                                                  </form>
                                                               </div>
                                                            </li>
                                                         </ul>
                                                         <!-- / targets-list -->
                                                         <input type="hidden" id="hidMataratHalvaa">
                                                      </div>
                                                   </section>
                                                   <!-- / purpose-loan -->
                                                </div>
                                                <div class="inactive" id="section-02">
                                                   <section class="question-area type1">
                                                      <div class="container">
                                                         <a href="javascript:void(0);" class="btn-page-up ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14267')">Back to top</a>
                                                         <header>
                                                            <h2 ng-bind="loansCtrl.GetLblValue('Lbl14028')" class="ng-binding">Tell us a little about yourself, <br>without identification</h2>
                                                            <p ng-bind="loansCtrl.GetLblValue('Lbl14177')" class="ng-binding">It will take less than 3 minutes</p>
                                                         </header>
                                                         <div class="holder">
                                                            <h4 class="error-message ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14910')">Please select one of the options</h4>
                                                            <div class="age-slider clearfix">
                                                               <div class="col"><strong ng-bind="loansCtrl.GetLblValue('Lbl14029')" class="ng-binding">Age</strong></div>
                                                               <div class="holder-slider">
                                                                  <div class="img img-left"><img src="Style%20Library/boj/images/Loans/young.png" alt="Young" title="Young" width="61" height="79"></div>
                                                                  <div class="img img-right"><img src="Style%20Library/boj/images/Loans/old.png" alt="Adult" title="Adult" width="61" height="79"></div>
                                                                  <div class="wrap">
                                                                     <a href="javascript:void(0);" class="sliderEdge txt left ng-binding" ng-bind="loansCtrl.GetSettingValue('loansminaAge')">21</a>
                                                                     <a href="javascript:void(0);" class="sliderEdge txt right ng-binding" ng-bind="loansCtrl.GetSettingValue('LoansMaxAge')">90</a>
                                                                     <div class="slider-range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui-draggable ui-draggable-handle" data-value="2" data-min="21" data-max="90" data-step="1"><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"><span class="amount">21</span></a></div>
                                                                  </div>
                                                                  <!-- / wrap -->
                                                               </div>
                                                               <!-- / holder-slider -->
                                                            </div>
                                                            <!-- / age-slider -->
                                                            <div class="bottom">
                                                               <div class="row">
                                                                  <div class="col-md-4">
                                                                     <div class="heading">
                                                                        <h4 ng-bind="loansCtrl.GetLblValue('Lbl14030')" class="ng-binding">Marital status</h4>
                                                                     </div>
                                                                     <!-- / heading -->
                                                                     <div id="UserMaritalStatus" class="flip-container">
                                                                        <div class="flipper">
                                                                           <ul class="list-btn">
                                                                              <li><a href="javascript:void(0);" data-user-marital-status="001" ng-bind="loansCtrl.GetLblValue('Lbl14201')" class="ng-binding">Single</a></li>
                                                                              <li class="hasSpouse"><a href="javascript:void(0);" data-user-marital-status="002" ng-bind="loansCtrl.GetLblValue('Lbl14202')" class="ng-binding">Married</a></li>
                                                                              <li><a href="javascript:void(0);" data-user-marital-status="004" ng-bind="loansCtrl.GetLblValue('Lbl14203')" class="ng-binding">Widowed</a></li>
                                                                              <li><a href="javascript:void(0);" data-user-marital-status="005" ng-bind="loansCtrl.GetLblValue('Lbl14204')" class="ng-binding">Divorced</a></li>
                                                                              <li><a href="javascript:void(0);" data-user-marital-status="003" ng-bind="loansCtrl.GetLblValue('Lbl14205')" class="ng-binding">Single parent</a></li>
                                                                              <li ng-show="loansCtrl.HideForArabic()" class="hasSpouse"><a href="javascript:void(0);" data-user-marital-status="007" ng-bind="loansCtrl.GetLblValue('Lbl14206')" class="ng-binding">Common-law marriage</a></li>
                                                                           </ul>
                                                                        </div>
                                                                        <!-- / flipper -->
                                                                     </div>
                                                                     <!-- / flip-container -->
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                     <div class="heading">
                                                                        <h4 ng-bind="loansCtrl.GetLblValue('Lbl14032')" class="ng-binding">Number of children</h4>
                                                                        <p ng-bind="loansCtrl.GetLblValue('Lbl14033')" class="ng-binding">Under 18</p>
                                                                     </div>
                                                                     <!-- / heading -->
                                                                     <div class="input-number">
                                                                        <a href="javascript:void(0);" class="next controls" title="Increase number of children">+</a>
                                                                        <input id="NumberOfChildren" type="text" value="0" readonly data-min="0" data-max="14">
                                                                        <a href="javascript:void(0);" class="prev controls" title="Decrease number of children">-</a>
                                                                     </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                     <div class="heading">
                                                                        <h4 ng-bind="loansCtrl.GetLblValue('Lbl14034')" class="ng-binding">Residence</h4>
                                                                     </div>
                                                                     <!-- / heading -->
                                                                     <div id="StatusAddress" class="flip-container">
                                                                        <div class="flipper">
                                                                           <ul class="list-btn">
                                                                              <li>
                                                                                 <a href="javascript:void(0);" data-status-address="1" ng-bind="loansCtrl.GetLblValue('Lbl14210')" class="ng-binding">Owned property</a>
                                                                                 <div class="flip-block housingexpenses">
                                                                                    <p ng-bind="loansCtrl.GetLblValue('Lbl14036')" class="ng-binding">Mortgage repayments</p>
                                                                                    <div class="slider-range style02 ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui-draggable ui-draggable-handle" data-value="0" data-min="0" data-max="12000" data-step="100"><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"><span class="amount">0</span></a></div>
                                                                                    <a href="javascript:void(0);" class="close ng-binding" title="Close" ng-bind="loansCtrl.GetLblValue('Lbl14213')">Close</a>
                                                                                 </div>
                                                                                 <!-- / flip-block -->
                                                                              </li>
                                                                              <li>
                                                                                 <a href="javascript:void(0);" data-status-address="2" ng-bind="loansCtrl.GetLblValue('Lbl14209')" class="ng-binding">Rented</a>
                                                                                 <div class="flip-block housingexpenses">
                                                                                    <p ng-bind="loansCtrl.GetLblValue('Lbl14037')" class="ng-binding">Rental expenses</p>
                                                                                    <div class="slider-range style02 ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui-draggable ui-draggable-handle" data-value="0" data-min="0" data-max="12000" data-step="100"><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"><span class="amount">0</span></a></div>
                                                                                    <a href="javascript:void(0);" class="close ng-binding" title="Close" ng-bind="loansCtrl.GetLblValue('Lbl14213')">Close</a>
                                                                                 </div>
                                                                                 <!-- / flip-block -->
                                                                              </li>
                                                                              <li><a href="javascript:void(0);" data-status-address="3" ng-bind="loansCtrl.GetLblValue('Lbl14211')" class="ng-binding">With parents</a></li>
                                                                              <li><a href="javascript:void(0);" data-status-address="4" ng-bind="loansCtrl.GetLblValue('Lbl14212')" class="ng-binding">Other</a></li>
                                                                           </ul>
                                                                        </div>
                                                                        <!-- / flipper -->
                                                                     </div>
                                                                     <!-- / flip-container -->
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <!-- bottom -->
                                                            <div class="holder-btn">
                                                               <a href="javascript:void(0);" class="btn-page-down-text ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14038')">Continue</a>
                                                               <a href="javascript:void(0);" class="btn-page-down" title="Continue the process"></a>
                                                            </div>
                                                            <!-- / holder-btn -->
                                                         </div>
                                                         <!-- / holder -->
                                                      </div>
                                                   </section>
                                                   <!-- / question-area -->
                                                </div>
                                                <div class="inactive" id="section-03">
                                                   <section class="question-area type2">
                                                      <div class="container">
                                                         <a href="javascript:void(0);" class="btn-page-up ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14267')">Back to top</a>
                                                         <header>
                                                            <h2 ng-bind="loansCtrl.GetLblValue('Lbl14039')" class="ng-binding">Tell us about your economic behaviour</h2>
                                                            <p ng-bind="loansCtrl.GetLblValue('Lbl14040')" class="ng-binding">and we can move forward with your loan application</p>
                                                            <h4 class="error-message ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14910')">Please select one of the options</h4>
                                                         </header>
                                                         <div class="two-column">
                                                            <div class="row">
                                                               <div class="col">
                                                                  <div class="holder-title">
                                                                     <div class="ico ico-01">
                                                                        <img src="Style%20Library/boj/images/Loans/employmentstatus.png" alt="Employment status">
                                                                     </div>
                                                                     <div class="text wide">
                                                                        <h4 ng-bind="loansCtrl.GetLblValue('Lbl14041')" class="ng-binding">Employment status</h4>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="col large">
                                                                  <ul id="StatusTaasukati" class="list-btn type2">
                                                                     <li><a href="javascript:void(0);" data-status-taasukati="1" ng-bind="loansCtrl.GetLblValue('Lbl14216')" class="ng-binding">Employed</a></li>
                                                                     <li><a href="javascript:void(0);" data-status-taasukati="2" ng-bind="loansCtrl.GetLblValue('Lbl14217')" class="ng-binding">Self employed</a></li>
                                                                     <li><a href="javascript:void(0);" data-status-taasukati="5" ng-bind="loansCtrl.GetLblValue('Lbl14218')" class="ng-binding">Pensioner</a></li>
                                                                     <li><a href="javascript:void(0);" data-status-taasukati="6" ng-bind="loansCtrl.GetLblValue('Lbl14219')" class="ng-binding">Unemployed</a></li>
                                                                     <li><a href="javascript:void(0);" data-status-taasukati="9" ng-bind="loansCtrl.GetLblValue('Lbl14220')" class="ng-binding">Student</a></li>
                                                                  </ul>
                                                               </div>
                                                            </div>
                                                            <!-- / row -->
                                                            <div class="row">
                                                               <div class="col">
                                                                  <div class="holder-title">
                                                                     <div class="ico ico-02">
                                                                        <img src="Style%20Library/boj/images/Loans/work-experience.png" alt="Work experience (in years)">
                                                                     </div>
                                                                     <div class="text">
                                                                        <h4 ng-bind="loansCtrl.GetLblValue('Lbl14047')" class="ng-binding">Work experience</h4>
                                                                        <!-- ngIf: loansCtrl.GetLblValue('Lbl14222') != '' --><button type="button" class="btn btn-question ng-scope" data-toggle="tooltip" data-placement="left" ng-if="loansCtrl.GetLblValue('Lbl14222') != ''" title="" data-original-title="Number of years in current employment">ico</button><!-- end ngIf: loansCtrl.GetLblValue('Lbl14222') != '' -->
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="col large">
                                                                  <div id="WorkStartDate" class="wrap-slider">
                                                                     <div class="slider-range size ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui-draggable ui-draggable-handle" data-value="0" data-min="0" data-max="45" data-step="1"><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"><span class="amount">0</span></a></div>
                                                                     <a href="javascript:void(0);" class="sliderEdge label min ng-binding" ng-bind="loansCtrl.GetSettingValue('loansminamaWorkStartDate')">0</a>
                                                                     <a href="javascript:void(0);" class="sliderEdge label max ng-binding" ng-bind="loansCtrl.GetSettingValue('LoansMaxWorkStartDate')">45</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <!-- / row -->
                                                            <div class="row">
                                                               <div class="col">
                                                                  <div class="holder-title">
                                                                     <div class="ico ico-03">
                                                                        <img src="Style%20Library/boj/images/Loans/net-income.png"  alt="Revenues">
                                                                     </div>
                                                                     <div class="text">
                                                                        <h4 ng-bind="loansCtrl.GetLblValue('Lbl14043')" class="ng-binding">Net income</h4>
                                                                        <p ng-bind="loansCtrl.GetLblValue('Lbl14044')" class="ng-binding">Per household, including spouse's salary</p>
                                                                        <!-- ngIf: loansCtrl.GetLblValue('Lbl14224') != '' -->
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="col large">
                                                                  <div id="Income" class="wrap-slider">
                                                                     <div class="slider-range size ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui-draggable ui-draggable-handle" data-value="0" data-min="0" data-max="50000" data-step="500"><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"><span class="amount">0</span></a></div>
                                                                     <a href="javascript:void(0);" class="sliderEdge label min ng-binding" ng-bind="loansCtrl.GetSettingValueWithComma('loansminaIncome')">0</a>
                                                                     <a href="javascript:void(0);" class="sliderEdge label max ng-binding" ng-bind="loansCtrl.GetSettingValueWithComma('LoansMaxIncome')">50,000</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <!-- / row -->
                                                            <div class="row">
                                                               <div class="col">
                                                                  <div class="holder-title">
                                                                     <div class="ico ico-04">
                                                                        <img src="Style%20Library/boj/images/Loans/c-card.png" alt="Fixed expenses">
                                                                     </div>
                                                                     <div class="text">
                                                                        <h4 ng-bind="loansCtrl.GetLblValue('Lbl14045')" class="ng-binding">Other obligations</h4>
                                                                        <p ng-bind="loansCtrl.GetLblValue('Lbl14046')" class="ng-binding">Such as loans or alimony</p>
                                                                        <!-- ngIf: loansCtrl.GetLblValue('Lbl14226') != '' --><button type="button" class="btn btn-question ng-scope" data-toggle="tooltip" data-placement="left" ng-if="loansCtrl.GetLblValue('Lbl14226') != ''" title="" data-original-title="Monthly payments such as repayments of other loans, alimony, and permanent assistance to a family member. There is no need to include household expenses, rent, mortgage, credit card expenses or standing orders">ico</button><!-- end ngIf: loansCtrl.GetLblValue('Lbl14226') != '' -->
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="col large">
                                                                  <div id="OtherObligation" class="wrap-slider">
                                                                     <div class="slider-range size ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui-draggable ui-draggable-handle" data-value="0" data-min="0" data-max="12000" data-step="100"><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"><span class="amount">0</span></a></div>
                                                                     <a href="javascript:void(0);" class="sliderEdge label min ng-binding" ng-bind="loansCtrl.GetSettingValueWithComma('loansminaOtherObligation')">0</a>
                                                                     <a href="javascript:void(0);" class="sliderEdge label max ng-binding" ng-bind="loansCtrl.GetSettingValueWithComma('LoansMaxOtherObligation')">12,000</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <!-- / row -->
                                                            <!-- <div class="row">
                                                               <input type="text" name="name" value="Enter your email" placeholder="">
                                                               <input type="submit" name="name" value="">
                                                               </div> -->
                                                            <div class="holder-btn">
                                                               <!-- 	<a href="javascript:void(0);" class="btn-page-down submitSimulator  btn-section3" title="Continue the process" ng-click="loansCtrl.SubmitSimulator($event)"></a>   -->
                                                               <form class="" action="" method="post">
                                                                  <button class="btn-page-down submitSimulator" type="button" name="submitSimulator" title="Continue the process"></button>
                                                               </form>
                                                            </div>
                                                            <!-- / holder-btn -->
                                                         </div>
                                                         <!-- / two-column -->
                                                      </div>
                                                   </section>
                                                   <!-- / question-area -->
                                                </div>
                                                <div class="hide" id="section-04">
                                                   <section class="info-credit">
                                                      <div class="container">
                                                         <header class="clearfix">
                                                            <div class="holder">
                                                               <h2><span ng-bind="loansCtrl.GetLblValue('Lbl14050')" class="ng-binding">You are moving forward towards a loan approval in the amount of</span> @@@ <span ng-bind="loansCtrl.GetLblValue('Lbl14017')" class="ng-binding">NIS</span></h2>
                                                               <p ng-bind="loansCtrl.GetLblValue('Lbl14051')" class="ng-binding">Fill in the fields below to complete the application</p>
                                                            </div>
                                                         </header>
                                                         <form action="" method="POST" class="ng-pristine ng-valid ng-valid-maxlength" novalidate>
                                                            <div class="wrap-form">
                                                               <label for="FirstName" class="error-send"></label>
                                                               <span class="subtitle ng-binding ng-hide" ng-bind="loansCtrl.GetLblValue('Lbl14943')" ng-show="loansCtrl.IsArabicSite">In order for our system to facilitate your request, please fill in the fields below in Hebrew or English only</span>
                                                               <div class="row">
                                                                  <div class="col-sm-6">
                                                                     <div class="block">
                                                                        <h3 ng-bind="loansCtrl.GetLblValue('Lbl14053')" class="ng-binding">Personal information</h3>
                                                                        <div class="form-group">
                                                                           <div class="input-holder">
                                                                              <input type="text" class="form-control" ng-attr-placeholder="{{loansCtrl.GetLblValue('Lbl14054')}}" name="firstName" id="FirstName" maxlength="50" title="First name*" placeholder="First name*">
                                                                           </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                           <div class="input-holder">
                                                                              <input type="text" class="form-control" ng-attr-placeholder="{{loansCtrl.GetLblValue('Lbl14055')}}" name="lastName" id="LastName" maxlength="50" title="Last name*" placeholder="Last name*">
                                                                           </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                           <div class="input-holder">
                                                                              <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" ng-model="loansCtrl.Id" ng-only-digits="" ng-attr-placeholder="{{loansCtrl.GetLblValue('Lbl14056')}}" name="id_number" id="Id" maxlength="9" title="ID number*" placeholder="ID number*">
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="block">
                                                                        <h3 ng-bind="loansCtrl.GetLblValue('Lbl14057')" class="ng-binding">Contact information</h3>
                                                                        <div class="form-group">
                                                                           <div class="input-holder">
                                                                              <input type="tel" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" ng-model="loansCtrl.Cellular" ng-only-digits="" ng-attr-placeholder="{{loansCtrl.GetLblValue('Lbl14058')}}" name="phone" id="Cellular" maxlength="10" ng-blur="loansCtrl.LoansAbandonedLead()" title="Mobile phone number*" placeholder="Mobile phone number*">
                                                                              <a href="javascript:void(0);" class="btn-add ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14059')">Additional phone number</a>
                                                                           </div>
                                                                           <div class="input-holder hide">
                                                                              <input type="tel" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" ng-model="loansCtrl.OtherCellular" ng-only-digits="" ng-attr-placeholder="{{loansCtrl.GetLblValue('Lbl14059')}}" name="otherphone" id="OtherCellular" maxlength="10" title="Additional phone number" placeholder="Additional phone number">
                                                                           </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                           <div class="input-holder emailWrapper">
                                                                              <input type="email" class="form-control autocompleteEmailTags ui-autocomplete-input" ng-attr-placeholder="{{loansCtrl.GetLblValue('Lbl14061')}}" name="email" id="Email" maxlength="100" title="E-mail address*" autocomplete="off" placeholder="E-mail address*">
                                                                              <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-2" tabindex="0" style="display: none;"></ul>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                                  <div class="col-sm-6">
                                                                     <div class="block">
                                                                        <h3 ng-bind="loansCtrl.GetLblValue('Lbl14062')" class="ng-binding">Address</h3>
                                                                        <div class="form-group">
                                                                           <div class="input-holder settlementWrapper">
                                                                              <input type="text" class="form-control settlement ui-autocomplete-input" ng-attr-placeholder="{{loansCtrl.GetLblValue('Lbl14063')}}" name="city" id="City" maxlength="30" title="City*" autocomplete="off" placeholder="City*">
                                                                              <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-1" tabindex="0" style="display: none;"></ul>
                                                                           </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                           <div class="input-holder streetWrapper">
                                                                              <input type="text" class="form-control street" ng-attr-placeholder="{{loansCtrl.GetLblValue('Lbl14064')}}" name="street" id="StreetName" maxlength="20" title="Street*" placeholder="Street*">
                                                                           </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                           <div class="input-holder small">
                                                                              <input type="text" class="form-control houseNumber" ng-attr-placeholder="{{loansCtrl.GetLblValue('Lbl14065')}}" name="home" id="HouseNumber" maxlength="4" title="House no.*" placeholder="House no.*">
                                                                           </div>
                                                                           <div class="input-holder small left">
                                                                              <input type="text" class="form-control zipCode ng-pristine ng-untouched ng-valid ng-valid-maxlength" ng-model="loansCtrl.Zip" ng-only-digits="" ng-attr-placeholder="{{loansCtrl.GetLblValue('Lbl14066')}}" name="targeting" id="Zip" maxlength="7" title="Zip code*" placeholder="Zip code*">
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="spouseDetails block hidden">
                                                                        <!-- <h3 ng-bind="loansCtrl.GetLblValue('Lbl14067')" class="ng-binding">Spouse's information</h3>
                                                                           <div class="form-group">
                                                                           	<div class="input-holder">
                                                                           		<input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" ng-model="loansCtrl.SpouseId" ng-only-digits="" ng-attr-placeholder="{{loansCtrl.GetLblValue('Lbl14068')}}" name="id_number_pt" id="SpouseId" maxlength="9" title="ID number*" placeholder="ID number*">
                                                                           	</div>
                                                                           </div>
                                                                           <div class="form-group">
                                                                           	<div class="input-holder select">
                                                                           		<div class="select-type2 select-area" style="-webkit-tap-highlight-color: rgba(255, 255, 255, 0); width: auto;"><span class="left"></span><span class="center">Employment status*</span><a class="select-opener"></a></div><select class="type2 customForm-hidden" title="Employment status*" name="select" style="-webkit-tap-highlight-color: rgba(255, 255, 255, 0);">
                                                                           			<option value="default" id="SpouseStatusTaasukati" ng-bind="loansCtrl.GetLblValue('Lbl14069')" class="ng-binding">Employment status*</option>
                                                                           			<option value="1" ng-bind="loansCtrl.GetLblValue('Lbl14216')" class="ng-binding">Employed</option>
                                                                           			<option value="2" ng-bind="loansCtrl.GetLblValue('Lbl14217')" class="ng-binding">Self employed</option>
                                                                                                                           <option value="3" ng-bind="loansCtrl.GetLblValue('Lbl14288')" class="ng-binding">Yeshiva student</option>
                                                                                                                           <option value="4" ng-bind="loansCtrl.GetLblValue('Lbl14297')" class="ng-binding">Soldier</option>
                                                                           			<option value="5" ng-bind="loansCtrl.GetLblValue('Lbl14218')" class="ng-binding">Pensioner</option>
                                                                                                                           <option value="6" ng-bind="loansCtrl.GetLblValue('Lbl14927')" class="ng-binding">Unemployed</option>
                                                                           		</select>
                                                                           	</div>
                                                                           </div> -->
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <!-- wrap-form -->
                                                            <div class="clearfix btn-holder">
                                                               <div class="check-group">
                                                                  <div class="customForm-class-check chk-area chk-unchecked" style="-webkit-tap-highlight-color: rgba(255, 255, 255, 0);"><span></span></div>
                                                                  <input id="ApproveTerms" name="approveTerms" type="checkbox" class="check customForm-hidden" style="-webkit-tap-highlight-color: rgba(255, 255, 255, 0);">
                                                                  <div class="holder">
                                                                     <label for="ApproveTerms" ng-bind-html="loansCtrl.GetConnectionTerms()" class="ng-binding" style="-webkit-tap-highlight-color: rgba(255, 255, 255, 0);">I here by confirm that I have read the <a href="#ConnectionTermsModal"  onclick="$('#ConnectionTermsModal').modal('show'); return false;" title="Please confirm the terms of engagement" target="_self">terms of engagement</a> and agree to the terms.</label>
                                                                  </div>
                                                               </div>
                                                               <input name="send" type="submit" title="Click to submit loan application" class="btn btn-warning ng-binding" value="Submit loan application">
                                                               <!-- 	 <input name="send" type="submit" value="Send message">   -->
                                                            </div>
                                                            <!-- / clearfix -->
                                                         </form>
                                                      </div>
                                                   </section>
                                                   <!-- /info-credit -->
                                                </div>
                                             </div>
                                             <!-- / area-section-js -->
                                             <footer id="footer">
                                                <div class="clearfix">
                                                   <ul class="list-link">
                                                      <li><a href="#LegalTermsModal" onclick="$('#LegalTermsModal').modal('show');"  title="Click to read the legal terms and conditions"  target="_self" class="ng-binding">Legal terms</a></li>
                                                      <li><a href="javascript:void(0)" class="no-pointer-events" title="SSL secure process"><i class="ico"><img src="Style%20Library/boj/images/Loans/ico-footer-001.svg" alt="SSL secure process" width="47" height="47"></i><span ng-bind="loansCtrl.GetLblValue('Lbl14007')" class="ng-binding">SSL secured process</span></a></li>
                                                   </ul>
                                                </div>
                                                <div class="extraLegalTerms">
                                                   <p class="ng-binding">
                                                      ** Credit Digital retains client information within their repository. The information will be used to communicate with you, on behalf of Credit Digital or one of its subsidiaries.
The information will also be used for the continuation of services in relation to loans and to send information to the client by email or SMS.
Loan approval is subject to the agreement and approval of Credit Digital.
                                                   </p>
                                                </div>
                                             </footer>
                                          </div>
                                          <!-- / inner-page -->

                                          <a href="#ExpiredProposalModal" class="open-modal hide" data-toggle="modal" target="_self">Expired Proposal Modal</a>
                                       </div>
                                       <!-- end wrapper -->
                                       <div class="modal fade" id="BackToProposalModal" tabindex="-1" role="dialog" aria-hidden="true">
                                          <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="previous-proposal">
                                                   <form action="javascript:void(0);" class="ng-pristine ng-valid ng-valid-maxlength" novalidate>
                                                      <div class="wrap-form">
                                                         <h3 class="ng-binding">Back to your application</h3>
                                                         <label for="lbl-03"><span class="ng-binding">Applying for a loan? Fill in the details and continue the process with us</span><label class="error-send"></label></label>
                                                         <div class="input-holder">
                                                            <input type="text" id="lbl-03" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" name="btp_idnumber" placeholder="ID number" title="ID number" ng-model="loansCtrl.btp_idNumber" ng-only-digits="" maxlength="9">
                                                         </div>
                                                         <!-- end input-holder -->
                                                         <div class="input-holder">
                                                            <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" name="btp_offernumber" placeholder="Application number" title="Application number" ng-model="loansCtrl.btp_offerId" ng-only-digits="" maxlength="6">
                                                         </div>
                                                         <!-- end input-holder -->
                                                         <footer>
                                                            <button type="submit" class="btn btn-primary ng-binding" ng-click="loansCtrl.SubmitBackToProposal($event)">Login</button>
                                                         </footer>
                                                         <img src="Style%20Library/boj/images/Loans/ico-01.svg" alt="image" class="ico">
                                                      </div>
                                                   </form>
                                                </div>
                                                <!-- end previous-proposal -->
                                                <button type="button" class="btn-close ng-binding" data-dismiss="modal" title="Close">Close</button>
                                             </div>
                                             <!-- end modal-content -->
                                          </div>
                                          <!-- end modal-dialog -->
                                       </div>
                                       <!-- end BackToProposalModal -->
                                       <div class="modal fade" id="ExpiredProposalModal" tabindex="-1" role="dialog" aria-hidden="true">
                                          <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="expired-offer">
                                                   <h3 class="ng-binding">Your request on the website has expired</h3>
                                                   <p class="ng-binding">To extend the validity of the application and continue the process, please contact our Customer Service Center by phone <a href="tel:*5727"><span class="ng-binding">5727</span><span>*</span></a>.</p>
                                                   <p><span class="ng-binding">Your application number:</span> <strong>123456</strong></p>
                                                   <img src="Style%20Library/boj/images/Loans/ico-clock-01.svg" alt="image" class="ico-clock">
                                                </div>
                                                <!-- end expired-offer -->
                                                <button type="button" class="btn-close ng-binding" data-dismiss="modal" title="Close">Close</button>
                                             </div>
                                             <!-- end modal-content -->
                                          </div>
                                          <!-- end modal-dialog -->
                                       </div>
                                       <!-- end ExpiredProposalModal -->
                                       <div class="modal fade" id="LegalTermsModal" tabindex="-1" role="dialog" aria-hidden="true">
                                          <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="legal-terms">
                                                   <p class="ng-binding">Credit Digital retains client information within their repository. The information will be used to communicate with you, on behalf of Credit Digital or one of its subsidiaries.
The information will also be used for the continuation of services in relation to loans and to send information to the client by email or SMS.
Loan approval is subject to the agreement and approval of Credit Digital.</p>
                                                </div>
                                                <!-- end legal-terms -->
                                                <button type="button" class="btn-close ng-binding" data-dismiss="modal" title="Close">Close</button>
                                             </div>
                                             <!-- end modal-content -->
                                          </div>
                                          <!-- end modal-dialog -->
                                       </div>
                                       <!-- end LegalTermsModal -->
                                       <div class="modal fade" id="ServiceErrorModal" tabindex="-1" role="dialog" aria-hidden="true">
                                          <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="previous-proposal">
                                                   <h3 class="ng-binding">General error</h3>
                                                   <p class="ng-binding">The process cannot be completed now. Please try again later</p>
                                                   <footer>
                                                      <button type="button" class="btn btn-primary ng-binding" data-dismiss="modal">Done</button>
                                                   </footer>
                                                   <img src="Style%20Library/boj/images/Loans/ico-error-01.svg" alt="image" class="ico error">
                                                </div>
                                                <!-- end previous-proposal -->
                                                <button type="button" class="btn-close ng-binding" data-dismiss="modal" title="Close">Close</button>
                                             </div>
                                             <!-- end modal-content -->
                                          </div>
                                          <!-- end modal-dialog -->
                                       </div>
                                       <!-- end ServiceErrorModal -->
                                       <div class="modal fade" id="ConnectionTermsModal" tabindex="-1" role="dialog" aria-hidden="true">
                                          <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="legal-terms">
                                                   <p class="ng-binding">Clicking on the "Submit loan application" button shall constitute your consent to save the details that were and/or shall be provided by you, in the Bank's databases, as well as your permission to receive emails and SMS messages regarding the handling of your request. The information you provided shall be used for the management, operation and handling of your loan and other .related services</p>
                                                </div>
                                                <!-- end legal-terms -->
                                                <button type="button" class="btn-close ng-binding" data-dismiss="modal" title="Close">Close</button>
                                             </div>
                                             <!-- end modal-content -->
                                          </div>
                                          <!-- end modal-dialog -->
                                       </div>
                                       <!-- end ConnectionTermsModal -->
                                    </div>
                                    <div class="modal fade ng-scope" id="AbandonedPopup" tabindex="-1" role="dialog" aria-hidden="true">
                                       <div class="modal-dialog">
                                          <div class="modal-content">
                                             <div class="previous-proposal">
                                                <form action="javascript:void(0);" class="ng-pristine ng-valid ng-valid-maxlength" novalidate>
                                                   <div class="alp-background hidden-xs hidden-sm hidden-md"></div>
                                                   <!--
                                                      --->
                                                   <div class="wrap-form">
                                                      <h3 class="ng-binding">Wait a minute…</h3>
                                                      <label for="lbl-03"><span class="ng-binding">You can leave your details and a Credit Digital agent will contact you shortly</span><label class="error-send"></label></label>
                                                      <div class="input-holder">
                                                         <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" name="alp_name" placeholder="Name" title="Name" ng-model="loansCtrl.alp_name" maxlength="50">
                                                      </div>
                                                      <div class="input-holder">
                                                         <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" name="alp_phoneNumber" placeholder="Phone number" title="Phone number" ng-model="loansCtrl.alp_phoneNumber" ng-only-digits="" maxlength="10">
                                                      </div>
                                                      <div class="input-holder select">
                                                         <div class="select-control">
                                                            <div class="select-type2 select-area" style="-webkit-tap-highlight-color: rgba(255, 255, 255, 0); width: auto;"><span class="left"></span><span class="center">Area of residence</span><a class="select-opener"></a></div>
                                                            <select class="type2 customForm-hidden" name="alp_residentialArea" style="-webkit-tap-highlight-color: rgba(255, 255, 255, 0);">
                                                               <option value="default" class="ng-binding">Area of residence</option>
                                                               <!-- ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="52" class="ng-binding ng-scope">Haifa and the area</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="63" class="ng-binding ng-scope">Krayot and the area</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="63" class="ng-binding ng-scope">Acre – Nahariya and the area</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="63" class="ng-binding ng-scope">Upper Galilee</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="91" class="ng-binding ng-scope">Sea of Galilee and the area</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="98" class="ng-binding ng-scope">Karmiel and the area</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="91" class="ng-binding ng-scope">Nazareth – Shefar'am and the area</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="63" class="ng-binding ng-scope">Rosh Pina – Hula Valley</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="63" class="ng-binding ng-scope">Lower Galilee</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="98" class="ng-binding ng-scope">Golan Heights</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="52" class="ng-binding ng-scope">Zichron Ya'akov and Hof HaCarmel</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="52" class="ng-binding ng-scope">Hadera and the area</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="92" class="ng-binding ng-scope">Caesarea and the area</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="52" class="ng-binding ng-scope">Yokneam – Kiryat Tiv'on and the area</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="91" class="ng-binding ng-scope">Beit Shean Valley</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="91" class="ng-binding ng-scope">Afula and the valleys</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="91" class="ng-binding ng-scope">Ramat Menashe</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="92" class="ng-binding ng-scope">Netanya and the area</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="51" class="ng-binding ng-scope">Ramat HaSharon – Herzliya</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="93" class="ng-binding ng-scope">Raanana – Kfar Saba</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="93" class="ng-binding ng-scope">Hod Hasharon and the area</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="92" class="ng-binding ng-scope">HaSharon South</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="92" class="ng-binding ng-scope">HaSharon North</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="51" class="ng-binding ng-scope">Tel Aviv</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="53" class="ng-binding ng-scope">Rishon LeZion and the area</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="67" class="ng-binding ng-scope">Holon – Bat Yam</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="51" class="ng-binding ng-scope">Ramat Gan – Givatayim</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="93" class="ng-binding ng-scope">Petah Tikva and the area</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="76" class="ng-binding ng-scope">Rosh HaAyin and the area</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="93" class="ng-binding ng-scope">Bikat ono</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="53" class="ng-binding ng-scope">Ramle – Lod</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="55" class="ng-binding ng-scope">Bnei Brak – Givat Shmuel</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="61" class="ng-binding ng-scope">Ayalon Valley </option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="76" class="ng-binding ng-scope">Shoham and the area</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="36" class="ng-binding ng-scope">Modiin and the area</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="38" class="ng-binding ng-scope">Beit Shemesh and the area</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="38" class="ng-binding ng-scope">Judean Mountain – Mevasseret Zion and the area</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="50" class="ng-binding ng-scope">Ma'aleh Adumim and the area</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="50" class="ng-binding ng-scope">Jerusalem</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="69" class="ng-binding ng-scope">South Har Hevron towns</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="50" class="ng-binding ng-scope">Gush Etzion</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="50" class="ng-binding ng-scope">Jordan Valley and northern Dead Sea</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="93" class="ng-binding ng-scope">Ariel and the Judea towns</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="53" class="ng-binding ng-scope">Ness Ziona – Rehovot</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="61" class="ng-binding ng-scope">Ashdod – Ashkelon and the area</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="61" class="ng-binding ng-scope">Gedera – Yavne and the area</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="66" class="ng-binding ng-scope">Kiryat Gat and the area</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="69" class="ng-binding ng-scope">Beersheba and the area</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="69" class="ng-binding ng-scope">Eilat and Aravah</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="69" class="ng-binding ng-scope">Negev towns</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="66" class="ng-binding ng-scope">Western Negev</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                               <option ng-repeat="option in loansCtrl.GetResidentialArea()" value="69" class="ng-binding ng-scope">South Dead Sea</option>
                                                               <!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                                            </select>
                                                         </div>
                                                      </div>
                                                      <footer>
                                                         <button type="submit" class="btn btn-primary ng-binding" ng-click="loansCtrl.SendAbandonedPopup()">SEND</button>
                                                      </footer>
                                                   </div>
                                                </form>
                                             </div>
                                             <button type="button" class="btn-close ng-binding" data-dismiss="modal" title="Close">Close</button>
                                          </div>
                                       </div>
                                    </div>
                                    <title class="ng-scope"></title>
                                 </ng-view>
                              </div>
                              <span class="fader" style="opacity: 0;"></span>
                           </div>
                        </div>
                        <div id="ctl00_SPWebPartManager1_g_11f75d7d_3280_408c_9c32_417a58174ad3_ctl00_pnlIframeRemoveCookie" class="hide">

                        </div>
                     </div>
                  </div>
               </div>
               <div style="display:none" id="hidZone"></div>
            </div>
         </div>
      </div>



      <div class="modal fade" id="formcontact" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
         <div class="modal-dialog">
            <div class="modal-content">
              <div class="contact-panel ng-isolate-scope" style="">
                 <div class="block">
                    <div class="contact-form">
                       <form  name="contact" action="" id="contactForm" action="javascript:void(0);"  class="ng-pristine ng-valid ng-valid-maxlength" novalidate>
                          <h4 class="error-message"></h4>
                          <h3 class="ng-binding">Need Help?</h3>
                          <label for="lbl-02" class="ng-binding">Fill in the details and an agent will contact you soon</label>
                          <div class="input-holder">
                             <input id="lbl-02" type="text" class="form-control leadName" name="fullName" title="Name*" placeholder="Name*" maxlength="50">
                          </div>
                          <!-- end input-holder -->
                          <div class="input-holder">
                             <input type="text" class="form-control leadPhone ng-pristine ng-untouched ng-valid ng-valid-maxlength" name="phone" ng-model="loansCtrl.contactUsTel" title="Phone number*" ng-only-digits="" placeholder="Phone number*" maxlength="10">
                          </div>
                          <!-- end input-holder -->
                          <div class="input-holder">
                            <input type="text" class="form-control leadId ng-pristine ng-untouched ng-valid ng-valid-maxlength" name="id_number" ng-model="loansCtrl.contactUsId" title="ID number" ng-only-digits="" placeholder="ID number" maxlength="9"></div>
                          <!-- end input-holder -->
                          <div class="input-holder">
                             <input type="text" class="form-control leadArea" name="ddlResidentialArea" title="Area of residence*" placeholder="Area of residence*" maxlength="50">
                          </div>
                          <!-- end input-holder -->
                          <footer>
                             <button class="btn submit-contact btn-info ng-binding" type="submit" ng-click="clickSendLead()">Submit</button>
                          </footer>
                       </form>
                       <div class="seccessLead" style="display:none;" ng-show="seccessLead==true">

                          <div>
                             <h4 class="ng-binding">Thank you,</h4><br />
                             <p class="ng-binding">One of our staff members will contact you shortly.</p>
                          </div>
                       </div>

                    </div>
                    <!-- end contact-form -->
                    <div class="service-center">
                       <h3 class="ng-binding">Service Center</h3>
                       <a href="tel:*5727" class="phone ng-binding">5727<span>*</span></a>
                    </div>
                    <!-- end service-center -->
                 </div>
                 <!-- end block -->

              </div>
               <!-- end legal-terms -->
               <button type="button" class="btn-close ng-binding" data-dismiss="modal" title="Close">Close</button>
            </div>
            <!-- end modal-content -->
         </div>
         <!-- end modal-dialog -->
      </div>



      <div class="modal fade" id="link1" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="legal-terms">
                  <p>
                     <b>About Credit Digital</b><br /><br />
                     Credit Digital is a Credit company which services its customers with advanced Financial solutions online‫.‬ <br /><br />


There are an assortment of loans available‫,‬ as well as financial aid‫,‬ for independent individuals or freelancers as well as employed workers‫.<br /><br />‬


we off many services which asset our clients‫,‬ such as car purchase‫,‬ new and used‫,‬ Mortgages‫e We, as a company hav‬e a department that gives assistance and guidance with financial aid to Import and export companies‫.‬<br /><br />


Credit Digital‫ specializes in instant money transfers for up to 10,000 NIS for our current and new clients.. This service gives an instant solution to thousands of our clients every dyad ‬has a fantastic success rating with users of the service‫.‬ <br /><br />


Within the company we have highly recommended bankers with a great financial background advising customers world wide‫.‬ <br /><br />


credit digital is a leading company in the industry over the years, and is credited with a combined growth of the company itself and its customers rejected.<br /><br />


Credit digital, your gain our service.

                  </p>
               </div>
               <!-- end legal-terms -->
               <button type="button" class="btn-close ng-binding" data-dismiss="modal" title="Close">Close</button>
            </div>
            <!-- end modal-content -->
         </div>
         <!-- end modal-dialog -->
      </div>
      <div class="modal fade" id="link2" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="legal-terms">
                  <p>
                     <b>Loans</b><br /><br />
                     The aim and benefit of the additional loan frame work, is that many companies need an extra hand and loan outside their banking. <br /><br />


The banking world is slowly disintegrating and the accessibility becomes more complicated. Credit digital offers solutions to all their customers, these include:<br /><br />


Instant credit, different loans, immediate cheques to cash, an exclusive department for importing exporting companies, mortgages, and many other financial services and solutions. <br /><br />


Your leverage equals everyones success.

                  </p>
               </div>
               <!-- end legal-terms -->
               <button type="button" class="btn-close ng-binding" data-dismiss="modal" title="Close">Close</button>
            </div>
            <!-- end modal-content -->
         </div>
         <!-- end modal-dialog -->
      </div>
      <div class="modal fade" id="link3" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="legal-terms">
                  <p>
                     <b>Debit Cards</b><br /><br />
                     The company offers a debit credit card, which is a instant payment card, that aids the customer to manage their finances immediately. <br /><br />

The secure way instead of using cash
visibility of outgoings immediately.
personal assistance and customer service online.
<br /><br />

Reference with regard to credit debit:<br />
1. Debit card, the secure way to manage finances efficiently and promptly. <br />
2. The international debit card allows you to make payments with every store that takes Master card world wide.<br />
3. With this card, you can request and add on travel insurance abroad.
<br /><br />
Types of business transactions:<br />
Regular transactions, internet transactions, money transfers between credit or debit card, purchasing abroad.
<br /><br />
Credit limit and transactions:<br />
 Every card has a different credit limit and different terms and conditions. Please contact the advisors with regards to more information.
<br /><br />

Transaction Fees:<br />
every client can access their accounts with a personalized code and Simultaneously view the transaction in process, allowing the client to view an accurate up to date account.
The transaction currency is  in Dollars, Euro or Pound Sterling. You can debit your account with the currency of your choice.
With paying transaction in NIS, there is an extra charge for exchange rate.
Please ask the advisor with further information regarding the debit credit card.

                  </p>
               </div>
               <!-- end legal-terms -->
               <button type="button" class="btn-close ng-binding" data-dismiss="modal" title="Close">Close</button>
            </div>
            <!-- end modal-content -->
         </div>
         <!-- end modal-dialog -->
      </div>
      <div class="modal fade" id="link4" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="legal-terms">
                  <p>
                     <b>Investors</b><br /><br /> /**/
                  </p>
               </div>
               <!-- end legal-terms -->
               <button type="button" class="btn-close ng-binding" data-dismiss="modal" title="Close">Close</button>
            </div>
            <!-- end modal-content -->
         </div>
         <!-- end modal-dialog -->
      </div>

      <link rel="stylesheet" media="all" href="_layouts/15/BankJerusalem/styles/bootstrap/v3.3.4/bootstrap.min.css">
      <link rel="stylesheet" media="all" href="_layouts/15/BankJerusalem/styles/jquery/jquery-ui-1.11.4.min.css">
      <link rel="stylesheet" media="all" href="Style%20Library/boj/styles/Loans/jquery-ui.min.css">
      <link rel="stylesheet" media="all" href="Style%20Library/boj/styles/Loans/form.min.css">
      <link rel="stylesheet" media="all" href="Style%20Library/boj/he-il/styles/controls/Loans.min.css">
      <link rel="stylesheet" media="all" href="Style%20Library/boj/en-us/styles/controls/Loans.min.css">
      <!-- Scripts  -->
      <script src="_layouts/15/BankJerusalem/scripts/jquery/jquery-1.11.2.min.js"></script>
      <script src="_layouts/15/BankJerusalem/scripts/jquery/jquery-ui-1.11.4.min.js"></script>
      <script src="assets/js/bootstrap.js"></script>
      <script src="Style%20Library/boj/scripts/Loans/loansPlugins.min.js"></script>
      <script src="assets/js/main.js"></script>
      <!-- <script src="Style%20Library/boj/scripts/Loans/loansPlugins.min.js"></script>
         <script src="_layouts/15/BankJerusalem/scripts/angular/angularPackage.js"></script>
         <script src="Style%20Library/boj/V2/External/js/modernizr-2.8.3.min.js"></script>
         <script src="Style%20Library/boj/scripts/commonAngular.min.js"></script>
         <script src="Style%20Library/boj/scripts/Loans/loans.min.js"></script> -->
      <!--
         <script type="text/javascript" src="Style%20Library/boj/scripts/conversion.js">
         </script> -->

      <noscript>
         &lt;div style="display:inline;"&gt;
         &lt;img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/983816199/?value=0&amp;amp;guid=ON&amp;amp;script=0"/&gt;
         &lt;/div&gt;
      </noscript>
      <noscript>&lt;iframe src="//www.googletagmanager.com/ns.html?id=GTM-KLCKCT"
         height="0" width="0" style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;
      </noscript>
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
         new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
         j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
         '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
         })(window,document,'script','dataLayer','GTM-KLCKCT');
      </script>
      <div style="display: none; visibility: hidden;">
         <noscript></noscript>
      </div>
      <div style="display: none; visibility: hidden;">
         <noscript></noscript>
      </div>
      <span role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></span>
      <span role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></span>
      <div class="select-options options-hidden drop-type2 " style="position: absolute; top: 0px; left: 0px; width: 0px;">
         <div class="drop-holder">
            <div class="drop-list">
            </div>
         </div>
      </div>

      <script type="text/javascript">
         $(document).ready(function() {

           $('.dropdown-toggle, .dropdown-menu a,.targets-list li .holder a').on('touchstart', function(e) {
             e.stopPropagation();
           });

           $('body').on('touchstart.dropdown', '.dropdown-menu','.targets-list li .holder a', function (e) { e.stopPropagation(); });
          $('.btn-contact').on('touchstart', function(e) {
            e.stopPropagation();
          });

           $('[data-toggle=dropdown]').each(function() {
            this.addEventListener('click', function() {}, false);
           });


             $(".dropdown-toggle").dropdown();


         });
      </script>


   </body>
</html>
