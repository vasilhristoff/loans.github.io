<?php
    if(isset($_POST['send'])) {
          require 'mail.php';
    }
 ?>

<!DOCTYPE html>
<html dir="rtl" lang="he-IL" class=" js flexbox canvas canvastext webgl touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="GENERATOR" content="Microsoft SharePoint"><meta name="format-detection" content="telephone=no"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta http-equiv="Expires" content="0"><title>
	הלוואה דיגיטלית - Credit Digital
</title><link rel="shortcut icon" href="/Style%20Library/boj/images/favicon.ico" type="image/vnd.microsoft.icon" id="favicon">
<style>

.home-area .landing-header .btn-contact {
  cursor: pointer;
}

.header-tools .dropdown .btn {
  color: #000;
  cursor:pointer;
}

.dropdown-menu>li>a {
  padding: 0 !important;
  text-align: center !important;
}

.dropdown-menu {
  width:100%;
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
  right: 50%;
  top: 50%;
  width: 150px;
  height: 150px;
  margin: -75px -75px 0 0px;
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
<meta name="description" content="&#8203;&#8203;&#8203;&#8203;&#8203;אצלנו בבנק ירושלים תוכל לקבל הלוואה דיגיטלית, בלי לצאת מהבית ובלי לעבור בנק. עד 50,000 ₪ לכל מטרה, ללקוחות כל הבנקים. נשמע מעניין? היכנס"><meta name="keywords" content="הלוואה, הלוואות, הלוואה דיגיטלית, הלוואה אונליין, מחשבון הלוואה">
<!--[if lt IE 9]>
<script type="text/javascript" src="/_layouts/15/BankJerusalem/scripts/html5shiv.min.js"></script>
<![endif]-->

<style type="text/css">.customForm-unselectable{-moz-user-select:none;-webkit-tap-highlight-color:rgba(255,255,255,0);-webkit-user-select:none;user-select:none;}</style>
<!--<script type="text/javascript" src="//plugin.reactful.com/Input/main.min.ijs?sid=e8e39c69f58cb59d37c1f4ffbc743db5&amp;inframe=false&amp;referrer=&amp;page=https%3A%2F%2Fwww.bankjerusalem.co.il%2Floans%2Fpages%2Fconsumercreditsimulator.aspx%3Famount%3D50000%23!%2Fform%3Fstep%3D2" async=""></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery" src="//plugin.reactful.com/assets/js/jquery.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="oridomi" src="//plugin.reactful.com/assets/js/oridomi.js"></script><style type="text/css">.oridomi-active{background-color:transparent !important;background-image:none !important;-webkit-box-sizing:border-box !important;border:none !important;outline:none !important;padding:0 !important;-webkit-transform-style:preserve-3d !important;-webkit-mask:none !important;position:relative;}.oridomi-clone{margin:0 !important;-webkit-box-sizing:border-box !important;overflow:hidden !important;display:block !important;}.oridomi-holder{width:100%;position:absolute;top:0;bottom:0;-webkit-transform-style:preserve-3d;}.oridomi-stage{width:100%;height:100%;position:absolute;-webkit-transform:translate3d(-9999px, 0, 0);margin:0;padding:0;-webkit-transform-style:preserve-3d;}.oridomi-stage-left{-webkit-perspective-origin:0% 50%;}.oridomi-stage-right{-webkit-perspective-origin:100% 50%;}.oridomi-stage-top{-webkit-perspective-origin:50% 0%;}.oridomi-stage-bottom{-webkit-perspective-origin:50% 100%;}.oridomi-shader{width:100%;height:100%;position:absolute;opacity:0;top:0;left:0;pointer-events:none;-webkit-transition-property:opacity;}.oridomi-shader-left{background:-webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(255, 255, 255, .35) 100%);}.oridomi-shader-right{background:-webkit-linear-gradient(right, rgba(0, 0, 0, .5) 0%, rgba(255, 255, 255, .35) 100%);}.oridomi-shader-top{background:-webkit-linear-gradient(top, rgba(0, 0, 0, .5) 0%, rgba(255, 255, 255, .35) 100%);}.oridomi-shader-bottom{background:-webkit-linear-gradient(bottom, rgba(0, 0, 0, .5) 0%, rgba(255, 255, 255, .35) 100%);}.oridomi-content{margin:0 !important;position:relative !important;float:none !important;-webkit-box-sizing:border-box !important;overflow:hidden !important;}.oridomi-mask{width:100%;height:100%;position:absolute;overflow:hidden;-webkit-transform:translate3d(0, 0, 0);outline:1px solid transparent;}.oridomi-panel{width:100%;height:100%;padding:0;position:absolute;-webkit-transition-property:-webkit-transform;-webkit-transform-origin:left;-webkit-transform-style:preserve-3d;}.oridomi-panel-h{-webkit-transform-origin:top;}.oridomi-stage-right .oridomi-panel{-webkit-transform-origin:right;}.oridomi-stage-bottom .oridomi-panel{-webkit-transform-origin:bottom;}</style><script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/json2/20121008/json2.min.js"></script></head>
--><body onhashchange="if (typeof(_spBodyOnHashChange) != 'undefined') _spBodyOnHashChange();" id="hebrew-lang">

<div id="s4-workspace">
<div id="s4-bodyContainer">
<div id="ctl00_MSO_ContentDiv" class="EmptyMainContent">
<div id="BojWpzWideWPZ">
<div class="WpBody">
<div id="ctl00_SPWebPartManager1_g_4a6ddbed_d1e8_43c3_9999_bca5e95bd67a">
<div class="Loans ng-scope" ng-app="boj"><div class="page-area">
<div ng-controller="LoansController as loansCtrl" style="min-width:225px;" class="loansCtrl ng-scope">
<!-- ngView: undefined --><ng-view class="ng-scope"><div class="LoansForm ng-scope" ng-init="loansCtrl.InitPage()" ng-class="loansCtrl.IsArabicSite ? 'Arabic' : ''" ng-scroll-to-home-area="">
    <ng_lazy_load></ng_lazy_load>
    <div id="wrapper">
		<div class="home-area">
			<header class="landing-header">
				<strong class="logo"><a href="" title="קרדיט דיגיטל" ng-bind="loansCtrl.GetLblValue('Lbl14010')" class="ng-binding">קרדיט דיגיטל</a></strong>
				<!-- <ul class="header-tools">
					<li ng-class="loansCtrl.IsEnglishSite ? 'hide' : ''" class="hidden-xs language"><a href="index.php" class="ng-binding">English</a></li>
					<li class="visible-xs-inline-block">
						<a href="tel:*5727" title="חייג עכשיו למוקד השירות" class="btn-phone ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14266')">5727</a>
					</li>
					<li class="visible-xs-inline-block">
                        <div class="mobile-languages select-mobile-languages dropdown">
							<a href="javascript:void(0);" class="select-opener dropdown-toggle ng-binding" title="שנה את שפת האתר" data-toggle="dropdown" ng-bind="loansCtrl.GetLblValue('Lbl14013')">English | العربية</a>
							<ul class="dropdown-menu">
								<li><a href="/loans/pages/consumercreditsimulator.aspx?amount=50000#!/form" ng-bind="loansCtrl.GetLblValue('Lbl14282')" class="ng-binding">עברית</a></li>
                                <li><a href="/ar/loans/pages/consumercreditsimulator.aspx?amount=50000#!/form" ng-bind="loansCtrl.GetLblValue('Lbl14284')" class="ng-binding">العربية</a></li>
								<li><a href="/en/loans/pages/consumercreditsimulator.aspx?amount=50000#!/form" ng-bind="loansCtrl.GetLblValue('Lbl14283')" class="ng-binding">English</a></li>

							</ul>
						</div>
					</li>
				</ul>po end header-tools -->

        <div class="header-tools">
          <div class="dropdown">
            <a href="#" class="btn dropdown-toggle" type="button" data-toggle="dropdown">עברית
            <span class="caret"><img src="Style%20Library/boj/images/Loans/lang-arrow.png" alt=""></span></a>
            <ul class="dropdown-menu">
              <li><a href="hebrew.php">עברית </a></li>
              <li><a href="index.php">English</a></li>
            </ul>
          </div>
        </div>
        <ul class="main-nav">
           <li><a href="#link1" onclick="$('#link1').modal('show');">אודות</a></li>
           <li><a href="#link2" onclick="$('#link2').modal('show');">הלוואות</a></li>
           <li><a href="#link3" onclick="$('#link3').modal('show');">כרטיס אשראי</a></li>
           <li><a href="#link4" onclick="$('#link4').modal('show');">השקעות</a></li>
        </ul>
				<a href="#formcontact" onclick="$('#formcontact').modal('show');" class="btn-contact btn-menu" title="לחץ לעזרה או השארת פרטים">
                    <span ng-bind="loansCtrl.GetLblValue('Lbl14099')" class="ng-binding">צריך עזרה?</span>
				</a>
			</header><!-- end landing-header -->
			<section class="home-info">
				<header class="home-heading">
					<h1 ng-bind="loansCtrl.GetLblValue('Lbl14014')" class="ng-binding">הלוואה דיגיטלית</h1>
					<p ng-bind="loansCtrl.GetLblValue('Lbl14015')" class="ng-binding">בלי לצאת מהבית, ללקוחות כל הבנקים</p>
				</header><!-- end home-heading -->
				<div class="loan-form">
					<form action="#" class="ng-pristine ng-valid ng-valid-maxlength">
						<label for="txtSchumHalvaaMevukash"><span class="hidden-xs ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14016')">הקלד את סכום ההלוואה שברצונך לקבל</span><span class="visible-xs-block ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14016')">הקלד את סכום ההלוואה שברצונך לקבל</span></label>
						<div class="input-box" data-content="₪">
							<input ng-attr-placeholder="{{loansCtrl.GetSettingValueWithComma('LoansDefaultAmount')}}" id="txtSchumHalvaaMevukash" type="text" ng-model="loansCtrl.amount" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" ng-only-digits="" ng-blur="loansCtrl.AddCommaToAmount()" maxlength="5" placeholder="50,000">
						</div><!-- end input-box -->
						<footer>
                            <label class="amountErrorMsg error hide"><span ng-bind="loansCtrl.amountErrorMsgReplace()" class="ng-binding">יש להזין סכום בין 5,000-50,000 ₪</span></label>
							<a href="#section-01" class="link ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14018')">בדוק זכאותך להלוואה</a>
							<a href="#section-01" class="btn btn-arrow bounce" title="לחץ לבדיקת זכאותך להלוואה">&amp;</a>
						</footer>
					</form>
				</div><!-- end loan-form -->
			</section><!-- end home-info -->
			<footer class="home-footer">
				<ul>
                    <li>
                        <a href="javascript:void(0);" class="no-pointer-events" title="תהליך מאובטח SSL">
                            <i class="ico-lock">&nbsp;</i>
                            <span ng-bind="loansCtrl.GetLblValue('Lbl14007')" class="ng-binding">תהליך מאובטח SSL</span>
                        </a>
                    </li>
                    <li class="link-terms">
                      <a href="#LegalTermsModal" onclick="$('#LegalTermsModal').modal('show');" title="Click to read the legal terms and conditions" target="_self" class="">
                        <i class="ico-terms">&nbsp;</i>תנאים משפטיים</a>
                    </li>
				</ul>


			</footer><!-- end home-footer -->
		</div><!-- end home-area -->
		<div class="inner-page" id="form-page" style="display: block;">
			<header id="header">

				<div class="progress-bar">
					<strong class="mobile-title hidden visible-sm visible-xs ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14002')">מטרת ההלוואה</strong>
					<ul class="progress-list step2">
						<li class="previous"><a href="#main" ng-bind="loansCtrl.GetLblValue('Lbl14001')" class="ng-binding">סכום ההלוואה</a></li>
						<li class="active"><a href="#section-01" ng-bind="loansCtrl.GetLblValue('Lbl14002')" class="ng-binding">מטרת ההלוואה</a></li>
						<li class="disable"><a href="#section-02" ng-bind="loansCtrl.GetLblValue('Lbl14003')" class="ng-binding">קצת עליך</a></li>
						<li class="disable"><a href="#section-03" ng-bind-html="loansCtrl.GetLblValueAsHtml('Lbl14004')" class="ng-binding">הכנסות והוצאות</a></li>
						<li class="disable"><a href="#section-04" ng-bind="loansCtrl.GetLblValue('Lbl14005')" class="ng-binding">פרטים נוספים</a></li>
						<li class="disable"><a href="javascript:void(0);" ng-bind="loansCtrl.GetLblValue('Lbl14006')" class="ng-binding">בקשת ההלוואה</a></li>
					</ul>
				</div><!-- / progress -->
			</header><!-- / header -->
			<div class="popup-message">
				<span ng-bind="loansCtrl.GetLblValue('Lbl14293')" class="ng-binding">מצוין, נשמח להתקדם ולדעת עליך קצת יותר</span>
				<span ng-bind="loansCtrl.GetLblValue('Lbl14294')" class="ng-binding">תודה :) כעת עזור לנו להבין איך אתה מתנהל בחיי היום-יום</span>
				<span ng-bind="loansCtrl.GetLblValue('Lbl14295')" class="ng-binding">נשמע מעניין, רק עוד כמה פרטים ונוכל להשלים את הבקשה</span>
			</div><!-- / popup-message -->
			<div class="area-section-js" ng-scroll-inactive="">
				<div class="active-block" id="section-01">
					<section class="purpose-loan">
						<div class="container">
							<header>
								<h2 ng-bind="loansCtrl.GetLblValue('Lbl14019')" class="ng-binding">מהי מטרת ההלוואה?</h2>
								<p ng-bind="loansCtrl.GetLblValue('Lbl14020')" class="ng-binding">בחר באחת מן האפשרויות הבאות</p>
							</header>
							<ul class="targets-list">
								<li>
									<div class="holder">
										<a href="javascript:void(0);" data-matarat-halvaa="8" class="ico ico-01" title="בחר: עזרה לבן משפחה">
										<img  src="Style%20Library/boj/images/Loans/familiar-insurance-symbol.svg" alt="Select: Help for a family member" width="100" height="100">
										</a>
										<span ng-bind="loansCtrl.GetLblValue('Lbl14021')" class="ng-binding">עזרה לבן משפחה</span>
									</div>
								</li>
								<li>
									<div class="holder">
										<a href="javascript:void(0);" data-matarat-halvaa="2" class="ico ico-02" title="בחר: שיפוץ בית">
											<img  src="Style%20Library/boj/images/Loans/house.svg" alt="Select: Home improvement" width="100" height="100">
										</a>
										<span ng-bind="loansCtrl.GetLblValue('Lbl14022')" class="ng-binding">שיפוץ הבית</span>
									</div>
								</li>
								<li>
									<div class="holder">
										<a href="javascript:void(0);" data-matarat-halvaa="7" class="ico ico-03" title="בחר: סגירת התחייבויות">
										  <img  src="Style%20Library/boj/images/Loans/agreement.svg" alt="Select: Pecuniary obligation" width="100" height="100">
										</a>
										<span ng-bind="loansCtrl.GetLblValue('Lbl14023')" class="ng-binding">סגירת התחייבות</span>
									</div>
								</li>
								<li>
									<div class="holder">
										<a href="javascript:void(0);" data-matarat-halvaa="3" class="ico ico-04" title="בחר: לימודים">
											<img  src="Style%20Library/boj/images/Loans/open-book.svg" alt="Select: Studies" width="100" height="100">
										</a>
										<span ng-bind="loansCtrl.GetLblValue('Lbl14024')" class="ng-binding">לימודים</span>
									</div>
								</li>
								<li class="add-btn">
									<div class="holder">
										<a href="javascript:void(0);" data-matarat-halvaa="4" class="ico ico-05 other" title="בחר במטרה אחרת">
										<img  src="Style%20Library/boj/images/Loans/plus.svg" alt="Select: Studies" width="100" height="100">
										</a>
										<span ng-bind="loansCtrl.GetLblValue('Lbl14025')" class="ng-binding">מטרה אחרת</span>
									</div>
									<div class="add-text">
										<form action="javascript:void(0);" class="ng-pristine ng-valid">
											<div class="input-holder">
												<input id="txtMataratHalvaaAher" type="text" class="form-control" placeholder="כתוב את מטרת ההלוואה">
                                                <label class="MataratHalvaaAherErrorMsg error">
                                                    <span class="empty hide ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14911')">יש למלא את כל השדות הנדרשים</span>
                                                    <span class="invalidString hide ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14916')">נא להזין תווים חוקיים</span>
                                                    <span class="arabic hide ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14938')">נא להזין תווים בעברית או באנגלית בלבד</span>
                                                </label>
											</div>
											<a href="javascript:void(0);" class="btn btn-warning saveOther ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14027')" title="שלח מטרה אחרת">המשך</a>
										</form>
									</div>
								</li>
							</ul><!-- / targets-list -->
                            <input type="hidden" id="hidMataratHalvaa">
						</div>
					</section><!-- / purpose-loan -->
				</div>
				<div class="inactive" id="section-02">
					<section class="question-area type1">
						<div class="container">
							<a href="javascript:void(0);" class="btn-page-up ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14267')">חזור למעלה</a>
							<header>
								<h2 ng-bind="loansCtrl.GetLblValue('Lbl14028')" class="ng-binding">ספר לנו קצת על עצמך, ללא צורך בהזדהות</h2>
								<p ng-bind="loansCtrl.GetLblValue('Lbl14177')" class="ng-binding">זה ייקח פחות מ-3 דקות</p>
							</header>
							<div class="holder">
								<h4 class="error-message ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14910')">אנא בחר באחת מן האפשרויות</h4>
								<div class="age-slider clearfix">
									<div class="col"><strong ng-bind="loansCtrl.GetLblValue('Lbl14029')" class="ng-binding">גיל</strong></div>
									<div class="holder-slider">
                    <div class="img img-left"><img src="Style%20Library/boj/images/Loans/young.png" alt="Young" title="Young" width="61" height="79"></div>
										<div class="img img-right"><img src="Style%20Library/boj/images/Loans/old.png" alt="Adult" title="Adult" width="61" height="79"></div>
										<div class="wrap">
											<a href="javascript:void(0);" class="sliderEdge txt left ng-binding" ng-bind="loansCtrl.GetSettingValue('LoansMinAge')">21</a>
											<a href="javascript:void(0);" class="sliderEdge txt right ng-binding" ng-bind="loansCtrl.GetSettingValue('LoansMaxAge')">90</a>
                                            <div class="slider-range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui-draggable ui-draggable-handle" data-value="2" data-min="21" data-max="90" data-step="1"><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"><span class="amount">21</span></a></div>
										</div><!-- / wrap -->
									</div><!-- / holder-slider -->
								</div><!-- / age-slider -->
								<div class="bottom">
									<div class="row">
										<div class="col-md-4">
											<div class="heading">
												<h4 ng-bind="loansCtrl.GetLblValue('Lbl14030')" class="ng-binding">מצב משפחתי</h4>
											</div><!-- / heading -->
											<div id="UserMaritalStatus" class="flip-container">
												<div class="flipper">
													<ul class="list-btn">
														<li><a href="javascript:void(0);" data-user-marital-status="001" ng-bind="loansCtrl.GetLblValue('Lbl14201')" class="ng-binding">רווק</a></li>
														<li class="hasSpouse"><a href="javascript:void(0);" data-user-marital-status="002" ng-bind="loansCtrl.GetLblValue('Lbl14202')" class="ng-binding">נשוי</a></li>
														<li><a href="javascript:void(0);" data-user-marital-status="004" ng-bind="loansCtrl.GetLblValue('Lbl14203')" class="ng-binding">אלמן</a></li>
														<li><a href="javascript:void(0);" data-user-marital-status="005" ng-bind="loansCtrl.GetLblValue('Lbl14204')" class="ng-binding">גרוש</a></li>
														<li><a href="javascript:void(0);" data-user-marital-status="003" ng-bind="loansCtrl.GetLblValue('Lbl14205')" class="ng-binding">הורה יחידני</a></li>
														<li ng-show="loansCtrl.HideForArabic()" class="hasSpouse"><a href="javascript:void(0);" data-user-marital-status="007" ng-bind="loansCtrl.GetLblValue('Lbl14206')" class="ng-binding">ידוע בציבור</a></li>
													</ul>
												</div><!-- / flipper -->
											</div><!-- / flip-container -->
										</div>
										<div class="col-md-4">
											<div class="heading">
												<h4 ng-bind="loansCtrl.GetLblValue('Lbl14032')" class="ng-binding">מספר ילדים</h4>
												<p ng-bind="loansCtrl.GetLblValue('Lbl14033')" class="ng-binding">מתחת לגיל 18</p>
											</div><!-- / heading -->
											<div class="input-number">
												<a href="javascript:void(0);" class="next controls" title="הגדל מס' ילדים">+</a>
												<input id="NumberOfChildren" type="text" value="0" readonly data-min="0" data-max="14">
												<a href="javascript:void(0);" class="prev controls" title="הקטן מס' ילדים">-</a>
											</div>
										</div>
										<div class="col-md-4">
											<div class="heading">
												<h4 ng-bind="loansCtrl.GetLblValue('Lbl14034')" class="ng-binding">מגורים</h4>
											</div><!-- / heading -->
											<div id="StatusAddress" class="flip-container">
												<div class="flipper">
													<ul class="list-btn">
														<li><a href="javascript:void(0);" data-status-address="1" ng-bind="loansCtrl.GetLblValue('Lbl14210')" class="ng-binding">בדירה בבעלותי</a>
															<div class="flip-block housingexpenses">
																<p ng-bind="loansCtrl.GetLblValue('Lbl14036')" class="ng-binding">החזר משכנתא</p>
																<div class="slider-range style02 ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui-draggable ui-draggable-handle" data-value="0" data-min="0" data-max="12000" data-step="100"><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"><span class="amount">0</span></a></div>
																<a href="javascript:void(0);" class="close ng-binding" title="סגור" ng-bind="loansCtrl.GetLblValue('Lbl14213')">סגור</a>
															</div><!-- / flip-block -->
														</li>
                            <li><a href="javascript:void(0);" data-status-address="2" ng-bind="loansCtrl.GetLblValue('Lbl14209')" class="ng-binding">בשכירות</a>
															<div class="flip-block housingexpenses">
																<p ng-bind="loansCtrl.GetLblValue('Lbl14037')" class="ng-binding">הוצאות שכירות</p>
<div class="slider-range style02 ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui-draggable ui-draggable-handle" data-value="0" data-min="0" data-max="12000" data-step="100"><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"><span class="amount">0</span></a></div>
                                <a href="javascript:void(0);" class="close ng-binding" title="סגור" ng-bind="loansCtrl.GetLblValue('Lbl14213')">סגור</a>
															</div><!-- / flip-block -->
														</li>
														<li><a href="javascript:void(0);" data-status-address="3" ng-bind="loansCtrl.GetLblValue('Lbl14211')" class="ng-binding">אצל ההורים</a></li>
														<li><a href="javascript:void(0);" data-status-address="4" ng-bind="loansCtrl.GetLblValue('Lbl14212')" class="ng-binding">אחר</a></li>
													</ul>
												</div><!-- / flipper -->
											</div><!-- / flip-container -->
										</div>
									</div>
								</div><!-- bottom -->
								<div class="holder-btn">
									<a href="javascript:void(0);" class="btn-page-down-text ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14038')">המשך</a>
									<a href="javascript:void(0);" class="btn-page-down" title="המשך בתהליך"></a>
								</div><!-- / holder-btn -->
							</div><!-- / holder -->
						</div>
					</section><!-- / question-area -->
				</div>
				<div class="inactive" id="section-03">
					<section class="question-area type2">
						<div class="container">
							<a href="javascript:void(0);" class="btn-page-up ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14267')">חזור למעלה</a>
							<header>
								<h2 ng-bind="loansCtrl.GetLblValue('Lbl14039')" class="ng-binding">שתף אותנו בהתנהלותך הכלכלית</h2>
								<p ng-bind="loansCtrl.GetLblValue('Lbl14040')" class="ng-binding">ונוכל להתקדם איתך בבקשת ההלוואה</p>
                                <h4 class="error-message ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14910')">אנא בחר באחת מן האפשרויות</h4>
							</header>
							<div class="two-column">
								<div class="row">
									<div class="col">
										<div class="holder-title">
											<div class="ico ico-01">
											<img src="Style%20Library/boj/images/Loans/employmentstatus.png" alt="Employment status">
											</div>
											<div class="text wide">
												<h4 ng-bind="loansCtrl.GetLblValue('Lbl14041')" class="ng-binding">מצב תעסוקתי</h4>
											</div>
										</div>
									</div>
									<div class="col large">
										<ul id="StatusTaasukati" class="list-btn type2">
											<li><a href="javascript:void(0);" data-status-taasukati="1" ng-bind="loansCtrl.GetLblValue('Lbl14216')" class="ng-binding">שכיר</a></li>
											<li><a href="javascript:void(0);" data-status-taasukati="2" ng-bind="loansCtrl.GetLblValue('Lbl14217')" class="ng-binding">עצמאי</a></li>
											<li><a href="javascript:void(0);" data-status-taasukati="5" ng-bind="loansCtrl.GetLblValue('Lbl14218')" class="ng-binding">גמלאי</a></li>
											<li><a href="javascript:void(0);" data-status-taasukati="6" ng-bind="loansCtrl.GetLblValue('Lbl14219')" class="ng-binding">לא עובד</a></li>
											<li><a href="javascript:void(0);" data-status-taasukati="9" ng-bind="loansCtrl.GetLblValue('Lbl14220')" class="ng-binding">סטודנט</a></li>
										</ul>
									</div>
								</div><!-- / row -->
								<div class="row">
									<div class="col">
										<div class="holder-title">
											<div class="ico ico-02">
												<img src="Style%20Library/boj/images/Loans/work-experience.png" alt="Work experience (in years)">
											</div>
											<div class="text">
												<h4 ng-bind="loansCtrl.GetLblValue('Lbl14047')" class="ng-binding">ותק בעבודה</h4>
                                                <!-- ngIf: loansCtrl.GetLblValue('Lbl14222') != '' --><button type="button" class="btn btn-question ng-scope" data-toggle="tooltip" data-placement="left" ng-if="loansCtrl.GetLblValue('Lbl14222') != ''" title="" data-original-title="מספר שנים בעבודתך הנוכחית">ico</button><!-- end ngIf: loansCtrl.GetLblValue('Lbl14222') != '' -->
											</div>
										</div>
									</div>
									<div class="col large">
										<div id="WorkStartDate" class="wrap-slider">
                      <div class="slider-range size ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui-draggable ui-draggable-handle" data-value="0" data-min="0" data-max="45" data-step="1"><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"><span class="amount">0</span></a></div>
                      <a href="javascript:void(0);" class="sliderEdge label min ng-binding" ng-bind="loansCtrl.GetSettingValue('LoansMinWorkStartDate')">0</a>
											<a href="javascript:void(0);" class="sliderEdge label max ng-binding" ng-bind="loansCtrl.GetSettingValue('LoansMaxWorkStartDate')">45</a>
										</div>
									</div>
								</div><!-- / row -->
								<div class="row">
									<div class="col">
										<div class="holder-title">
											<div class="ico ico-03">
												<img src="Style%20Library/boj/images/Loans/net-income.png" alt="Revenues">
											</div>
											<div class="text">
												<h4 ng-bind="loansCtrl.GetLblValue('Lbl14043')" class="ng-binding">הכנסות נטו</h4>
												<p ng-bind="loansCtrl.GetLblValue('Lbl14044')" class="ng-binding">לכל משק הבית, כולל משכורת בן/בת הזוג</p>
												<!-- ngIf: loansCtrl.GetLblValue('Lbl14224') != '' -->
											</div>
										</div>
									</div>
									<div class="col large">
										<div id="Income" class="wrap-slider">
                      <div class="slider-range size ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui-draggable ui-draggable-handle" data-value="0" data-min="0" data-max="50000" data-step="500"><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"><span class="amount">0</span></a></div>
                      <a href="javascript:void(0);" class="sliderEdge label min ng-binding" ng-bind="loansCtrl.GetSettingValueWithComma('LoansMinIncome')">0</a>
											<a href="javascript:void(0);" class="sliderEdge label max ng-binding" ng-bind="loansCtrl.GetSettingValueWithComma('LoansMaxIncome')">50,000</a>
										</div>
									</div>
								</div><!-- / row -->
								<div class="row">
									<div class="col">
										<div class="holder-title">
											<div class="ico ico-04">
												<img src="Style%20Library/boj/images/Loans/c-card.png" alt="Fixed expenses">
											</div>
											<div class="text">
												<h4 ng-bind="loansCtrl.GetLblValue('Lbl14045')" class="ng-binding">התחייבויות נוספות</h4>
												<p ng-bind="loansCtrl.GetLblValue('Lbl14046')" class="ng-binding">כגון תשלומי הלוואות ומזונות</p>
                                                <!-- ngIf: loansCtrl.GetLblValue('Lbl14226') != '' --><button type="button" class="btn btn-question ng-scope" data-toggle="tooltip" data-placement="left" ng-if="loansCtrl.GetLblValue('Lbl14226') != ''" title="" data-original-title="תשלומים חודשיים קבועים כגון החזר הלוואות אחרות, דמי מזונות, עזרה קבועה לבן משפחה. אין צורך לכלול הוצאות שוטפות של ניהול הבית, שכירות, משכנתא, הוצאות בכרטיס אשראי או הוראות קבע">ico</button><!-- end ngIf: loansCtrl.GetLblValue('Lbl14226') != '' -->
											</div>
										</div>
									</div>
									<div class="col large">
										<div id="OtherObligation" class="wrap-slider">
                      <div class="slider-range size ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui-draggable ui-draggable-handle" data-value="0" data-min="0" data-max="12000" data-step="100"><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"><span class="amount">0</span></a></div>
                      <a href="javascript:void(0);" class="sliderEdge label min ng-binding" ng-bind="loansCtrl.GetSettingValueWithComma('LoansMinOtherObligation')">0</a>
											<a href="javascript:void(0);" class="sliderEdge label max ng-binding" ng-bind="loansCtrl.GetSettingValueWithComma('LoansMaxOtherObligation')">12,000</a>
										</div>
									</div>
								</div><!-- / row -->
								<div class="holder-btn">
									<a href="javascript:void(0);" class="btn-page-down-text submitSimulator ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14038')" ng-click="loansCtrl.SubmitSimulator($event)">המשך</a>
									<a href="javascript:void(0);" class="btn-page-down submitSimulator" title="המשך בתהליך" ng-click="loansCtrl.SubmitSimulator($event)"></a>
								</div><!-- / holder-btn -->
							</div><!-- / two-column -->
						</div>
					</section><!-- / question-area -->
				</div>
				<div class="hide" id="section-04">
					<section class="info-credit">
						<div class="container">
							<header class="clearfix">

								<div class="holder">
									<h2><span ng-bind="loansCtrl.GetLblValue('Lbl14050')" class="ng-binding">התקדמת לקראת אישור הלוואה בסכום</span> @@@ <span ng-bind="loansCtrl.GetLblValue('Lbl14017')" class="ng-binding">₪</span></h2>
									<p ng-bind="loansCtrl.GetLblValue('Lbl14051')" class="ng-binding">רק חסרים לנו כמה פרטים מזהים לצורך השלמת הבקשה</p>
								</div>
							</header>
							<form action="#" method="post" class="ng-pristine ng-valid ng-valid-maxlength" novalidate>
								<div class="wrap-form">
									<label for="FirstName" class="error-send"></label>
                                    <span class="subtitle ng-binding ng-hide" ng-bind="loansCtrl.GetLblValue('Lbl14943')" ng-show="loansCtrl.IsArabicSite">על מנת שהמערכת שלנו תוכל לתמוך בבקשתך, אנא מלא את השדות מטה באנגלית או עברית בלבד</span>
									<div class="row">
										<div class="col-sm-6">
											<div class="block">
												<h3 ng-bind="loansCtrl.GetLblValue('Lbl14053')" class="ng-binding">פרטים אישיים</h3>
												<div class="form-group">
													<div class="input-holder">
														<input type="text" class="form-control" ng-attr-placeholder="{{loansCtrl.GetLblValue('Lbl14054')}}" name="firstName" id="FirstName" maxlength="50" title="שם פרטי*" placeholder="שם פרטי*">
													</div>
												</div>
												<div class="form-group">
													<div class="input-holder">
														<input type="text" class="form-control" ng-attr-placeholder="{{loansCtrl.GetLblValue('Lbl14055')}}" name="lastName" id="LastName" maxlength="50" title="שם משפחה*" placeholder="שם משפחה*">
													</div>
												</div>
												<div class="form-group">
													<div class="input-holder">
														<input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" ng-model="loansCtrl.Id" ng-only-digits="" ng-attr-placeholder="{{loansCtrl.GetLblValue('Lbl14056')}}" name="id_number" id="Id" maxlength="9" title="תעודת זהות*" placeholder="תעודת זהות*">
													</div>
												</div>
											</div>
											<div class="block">
												<h3 ng-bind="loansCtrl.GetLblValue('Lbl14057')" class="ng-binding">פרטי התקשרות</h3>
												<div class="form-group">
													<div class="input-holder">
														<input type="tel" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" ng-model="loansCtrl.Cellular" ng-only-digits="" ng-attr-placeholder="{{loansCtrl.GetLblValue('Lbl14058')}}" name="phone" id="Cellular" maxlength="10" ng-blur="loansCtrl.LoansAbandonedLead()" title="טלפון נייד*" placeholder="טלפון נייד*">
														<a href="javascript:void(0);" class="btn-add ng-binding" ng-bind="loansCtrl.GetLblValue('Lbl14059')">טלפון נוסף</a>
													</div>
                                                    <div class="input-holder hide">
														<input type="tel" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" ng-model="loansCtrl.OtherCellular" ng-only-digits="" ng-attr-placeholder="{{loansCtrl.GetLblValue('Lbl14059')}}" name="otherphone" id="OtherCellular" maxlength="10" title="טלפון נוסף" placeholder="טלפון נוסף">
													</div>
												</div>
												<div class="form-group">
													<div class="input-holder emailWrapper">
														<input type="email" class="form-control autocompleteEmailTags ui-autocomplete-input" ng-attr-placeholder="{{loansCtrl.GetLblValue('Lbl14061')}}" name="email" id="Email" maxlength="100" title="דואר אלקטרוני*" autocomplete="off" placeholder="דואר אלקטרוני*">
													<ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-2" tabindex="0" style="display: none;"></ul></div>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="block">
												<h3 ng-bind="loansCtrl.GetLblValue('Lbl14062')" class="ng-binding">כתובת</h3>
												<div class="form-group">
													<div class="input-holder settlementWrapper">
														<input type="text" class="form-control settlement ui-autocomplete-input" ng-attr-placeholder="{{loansCtrl.GetLblValue('Lbl14063')}}" name="city" id="City" maxlength="30" title="ישוב*" autocomplete="off" placeholder="ישוב*">
													<ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-1" tabindex="0" style="display: none;"></ul></div>
												</div>
												<div class="form-group">
													<div class="input-holder streetWrapper">
														<input type="text" class="form-control street" ng-attr-placeholder="{{loansCtrl.GetLblValue('Lbl14064')}}" name="street" id="StreetName" maxlength="20" title="רחוב*" placeholder="רחוב*">
													</div>
												</div>
												<div class="form-group">
													<div class="input-holder small">
														<input type="text" class="form-control houseNumber" ng-attr-placeholder="{{loansCtrl.GetLblValue('Lbl14065')}}" name="home" id="HouseNumber" maxlength="4" title="מספר בית*" placeholder="מספר בית*">
													</div>

												</div>
											</div>
											<div class="spouseDetails block hidden">
												<h3 ng-bind="loansCtrl.GetLblValue('Lbl14067')" class="ng-binding">פרטי בן/בת זוג</h3>
												<div class="form-group">
													<div class="input-holder">
														<input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" ng-model="loansCtrl.SpouseId" ng-only-digits="" ng-attr-placeholder="{{loansCtrl.GetLblValue('Lbl14068')}}" name="id_number_pt" id="SpouseId" maxlength="9" title="תעודת זהות*" placeholder="תעודת זהות*">
													</div>
												</div>
												<div class="form-group">
													<div class="input-holder select">
														<div class="select-type2 select-area" style="-webkit-tap-highlight-color: rgba(255, 255, 255, 0); width: auto;"><span class="left"></span><span class="center">מצב תעסוקתי*</span><a class="select-opener"></a></div><select class="type2 customForm-hidden" title="מצב תעסוקתי*" name="select" style="-webkit-tap-highlight-color: rgba(255, 255, 255, 0);">
															<option value="default" id="SpouseStatusTaasukati" ng-bind="loansCtrl.GetLblValue('Lbl14069')" class="ng-binding">מצב תעסוקתי*</option>
															<option value="1" ng-bind="loansCtrl.GetLblValue('Lbl14216')" class="ng-binding">שכיר</option>
															<option value="2" ng-bind="loansCtrl.GetLblValue('Lbl14217')" class="ng-binding">עצמאי</option>
                                                            <option value="3" ng-bind="loansCtrl.GetLblValue('Lbl14288')" class="ng-binding">אברך</option>
                                                            <option value="4" ng-bind="loansCtrl.GetLblValue('Lbl14297')" class="ng-binding">חייל</option>
															<option value="5" ng-bind="loansCtrl.GetLblValue('Lbl14218')" class="ng-binding">גמלאי</option>
                                                            <option value="6" ng-bind="loansCtrl.GetLblValue('Lbl14927')" class="ng-binding">לא עובד</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- wrap-form -->
								<div class="clearfix btn-holder">
                                    <div class="check-group">
                                        <div class="customForm-class-check chk-area chk-unchecked" style="-webkit-tap-highlight-color: rgba(255, 255, 255, 0);"><span></span></div><input id="ApproveTerms" name="approveTerms" type="checkbox" class="check customForm-hidden" style="-webkit-tap-highlight-color: rgba(255, 255, 255, 0);">
                                        <div class="holder">
                                            <label for="ApproveTerms" ng-bind-html="loansCtrl.GetConnectionTerms()" class="ng-binding" style="-webkit-tap-highlight-color: rgba(255, 255, 255, 0);">אני מאשר כי קראתי את <a href="#ConnectionTermsModal" onclick="$('#ConnectionTermsModal').modal('show'); return false;" title="Please confirm the terms of engagement" target="_self">תנאי ההתקשרות</a> ואני מסכים להם.</label>
                                        </div>
                                    </div>
                                  <!--  <button type="submit"  class="btn btn-warning ng-binding" ng-click="loansCtrl.SubmitLoan($event)" ng-bind="loansCtrl.GetLblValue('Lbl14070')">התקדם לאישור הבקשה</button> -->
                                    <input name="send" type="submit" title="לחץ לאישור בקשת ההלוואה" class="btn btn-warning ng-binding" value="התקדם לאישור הבקשה">
                </div><!-- / clearfix -->
							</form>
						</div>
					</section><!-- /info-credit -->
				</div>
			</div><!-- / area-section-js -->
			<footer id="footer">
				<div class="clearfix">
					<ul class="list-link">
                        <li><a href="#LegalTermsModal" data-toggle="modal" title="לחץ לקריאת התנאים המשפטיים" ng-bind="loansCtrl.GetLblValue('Lbl14008')" target="_self" class="ng-binding">תנאים משפטיים</a></li>
						<li><a href="javascript:void(0)" class="no-pointer-events" title="תהליך מאובטח SSL"><i class="ico"><img src="Style%20Library/boj/images/Loans/ico-footer-001.svg" alt="תהליך מאובטח SSL" width="47" height="47"></i><span ng-bind="loansCtrl.GetLblValue('Lbl14007')" class="ng-binding">תהליך מאובטח SSL</span></a></li>
					</ul>
				</div>
                <div class="extraLegalTerms">
                    <p class="ng-binding">
                       מסירת הפרטים הנ"ל שנמסרו על ידיך או ימסרו, ישמרו במאגר קרדיט דיגיטל.
המידע ישמש לצורך התקשרות עמך על ידיי קרדיט דיגיטל או אחת מחברות הבנות שלה.
המידע ישמש לצורך המשך טיפול בנושא הלוואות ולצורך קבלת מידע במייל או SMS.
אישור הלוואה כפוף לאישור קרדיט דיגיטל..


                    </p>
                </div>
			</footer>
		</div><!-- / inner-page -->
		<a href="#ExpiredProposalModal" class="open-modal hide" data-toggle="modal" target="_self">Expired Proposal Modal</a>
	</div><!-- end wrapper -->
	<div class="modal fade" id="BackToProposalModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="previous-proposal">
					<form action="javascript:void(0);" class="ng-pristine ng-valid ng-valid-maxlength" novalidate>
                        <div class="wrap-form">
						<h3 class="ng-binding">חזרה לבקשה שלך</h3>
						<label for="lbl-03"><span class="ng-binding">הגשת בקשה להלוואה? מלא את הפרטים והמשך איתנו</span><label class="error-send"></label></label>
                        <div class="input-holder">
							<input type="text" id="lbl-03" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" name="btp_idnumber" placeholder="תעודת זהות" title="תעודת זהות" ng-model="loansCtrl.btp_idNumber" ng-only-digits="" maxlength="9">
						</div><!-- end input-holder -->
						<div class="input-holder">
							<input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" name="btp_offernumber" placeholder="מספר בקשה" title="מספר בקשה" ng-model="loansCtrl.btp_offerId" ng-only-digits="" maxlength="6">
						</div><!-- end input-holder -->
						<footer>
							<button type="submit" class="btn btn-primary ng-binding" ng-click="loansCtrl.SubmitBackToProposal($event)">התחבר</button>
						</footer>
						<img src="Style%20Library/boj/images/Loans/ico-01.svg" alt="image" class="ico">
                        </div>
					</form>
				</div><!-- end previous-proposal -->
				<button type="button" class="btn-close ng-binding" data-dismiss="modal" title="סגור">סגור</button>
			</div><!-- end modal-content -->
		</div><!-- end modal-dialog -->
	</div><!-- end BackToProposalModal -->
	<div class="modal fade" id="ExpiredProposalModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="expired-offer">
					<h3 class="ng-binding">פג תוקף ההצעה שלך באתר</h3>
					<p class="ng-binding">להארכת תוקף ההצעה והמשך התהליך אנא פנה למוקד שירות הלקוחות שלנו בטלפון <a href="tel:*5727"><span class="ng-binding">5727</span><span>*</span></a>.</p>
					<p><span class="ng-binding">מספר ההצעה שלך:</span> <strong>123456</strong></p>
					<img src="Style%20Library/boj/images/Loans/ico-clock-01.svg" alt="image" class="ico-clock">
				</div><!-- end expired-offer -->
				<button type="button" class="btn-close ng-binding" data-dismiss="modal" title="סגור">סגור</button>
			</div><!-- end modal-content -->
		</div><!-- end modal-dialog -->
	</div><!-- end ExpiredProposalModal -->
	<div class="modal fade" id="LegalTermsModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="legal-terms">
					<p class="ng-binding"> מסירת הפרטים הנ"ל שנמסרו על ידיך או ימסרו, ישמרו במאגר קרדיט דיגיטל.
המידע ישמש לצורך התקשרות עמך על ידיי קרדיט דיגיטל או אחת מחברות הבנות שלה.
המידע ישמש לצורך המשך טיפול בנושא הלוואות ולצורך קבלת מידע במייל או SMS.
אישור הלוואה כפוף לאישור קרדיט דיגיטל.
</p>
				</div><!-- end legal-terms -->
				<button type="button" class="btn-close ng-binding" data-dismiss="modal" title="סגור">סגור</button>
			</div><!-- end modal-content -->
		</div><!-- end modal-dialog -->
	</div><!-- end LegalTermsModal -->
	<div class="modal fade" id="ServiceErrorModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="previous-proposal">
					<h3 class="ng-binding">שגיאה כללית</h3>
					<p class="ng-binding">לא ניתן לבצע כעת את הפעולה. אנא נסה שנית במועד מאוחר יותר</p>
					<footer>
						<button type="button" class="btn btn-primary ng-binding" data-dismiss="modal">סיום</button>
					</footer>
					<img src="Style%20Library/boj/images/Loans/ico-error-01.svg" alt="image" class="ico error">
				</div><!-- end previous-proposal -->
				<button type="button" class="btn-close ng-binding" data-dismiss="modal" title="סגור">סגור</button>
			</div><!-- end modal-content -->
		</div><!-- end modal-dialog -->
	</div><!-- end ServiceErrorModal -->
    <div class="modal fade" id="ConnectionTermsModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="legal-terms">
					<p class="ng-binding"> מסירת הפרטים הנ"ל שנמסרו על ידיך או ימסרו, ישמרו במאגר קרדיט דיגיטל.
המידע ישמש לצורך התקשרות עמך על ידיי קרדיט דיגיטל או אחת מחברות הבנות שלה.
המידע ישמש לצורך המשך טיפול בנושא הלוואות ולצורך קבלת מידע במייל או SMS.
אישור הלוואה כפוף לאישור קרדיט דיגיטל.</p>
				</div><!-- end legal-terms -->
				<button type="button" class="btn-close ng-binding" data-dismiss="modal" title="סגור">סגור</button>
			</div><!-- end modal-content -->
		</div><!-- end modal-dialog -->
	</div><!-- end ConnectionTermsModal -->
</div>


    <div class="modal fade ng-scope" id="AbandonedPopup" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="previous-proposal">
					<form action="javascript:void(0);" class="ng-pristine ng-valid ng-valid-maxlength" novalidate>
                        <div class="alp-background hidden-xs hidden-sm hidden-md"></div><!--
                    ---><div class="wrap-form">
						    <h3 class="ng-binding">רגע לפני...</h3>
						    <label for="lbl-03"><span class="ng-binding">באפשרותך להשאיר פרטים ובנקאי יצור איתך קשר בהקדם</span><label class="error-send"></label></label>
                            <div class="input-holder">
                                <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" name="alp_name" placeholder="שם" title="שם" ng-model="loansCtrl.alp_name" maxlength="50">
						    </div>
						    <div class="input-holder">
                                <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" name="alp_phoneNumber" placeholder="מספר טלפון" title="מספר טלפון" ng-model="loansCtrl.alp_phoneNumber" ng-only-digits="" maxlength="10">
						    </div>
                            <div class="input-holder select">
							    <div class="select-control">
                                    <div class="select-type2 select-area" style="-webkit-tap-highlight-color: rgba(255, 255, 255, 0); width: auto;"><span class="left"></span><span class="center">איזור מגורים</span><a class="select-opener"></a></div><select class="type2 customForm-hidden" name="alp_residentialArea" style="-webkit-tap-highlight-color: rgba(255, 255, 255, 0);">
                                        <option value="default" class="ng-binding">איזור מגורים</option>
                                        <!-- ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="52" class="ng-binding ng-scope">חיפה והסביבה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="63" class="ng-binding ng-scope">קריות והסביבה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="63" class="ng-binding ng-scope">עכו - נהריה והסביבה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="63" class="ng-binding ng-scope">גליל עליון</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="91" class="ng-binding ng-scope">הכנרת והסביבה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="98" class="ng-binding ng-scope">כרמיאל והסביבה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="91" class="ng-binding ng-scope">נצרת - שפרעם והסביבה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="63" class="ng-binding ng-scope">ראש פינה החולה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="63" class="ng-binding ng-scope">גליל תחתון</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="98" class="ng-binding ng-scope">הגולן</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="52" class="ng-binding ng-scope">זכרון וחוף הכרמל</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="52" class="ng-binding ng-scope">חדרה והסביבה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="92" class="ng-binding ng-scope">קיסריה והסביבה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="52" class="ng-binding ng-scope">יקנעם טבעון והסביבה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="91" class="ng-binding ng-scope">עמק בית שאן</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="91" class="ng-binding ng-scope">עפולה והעמקים</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="91" class="ng-binding ng-scope">רמת מנשה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="92" class="ng-binding ng-scope">נתניה והסביבה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="51" class="ng-binding ng-scope">רמת השרון – הרצליה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="93" class="ng-binding ng-scope">רעננה - כפר סבא</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="93" class="ng-binding ng-scope">הוד השרון והסביבה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="92" class="ng-binding ng-scope">דרום השרון</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="92" class="ng-binding ng-scope">צפון השרון</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="51" class="ng-binding ng-scope">תל אביב</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="53" class="ng-binding ng-scope">ראשון לציון והסביבה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="67" class="ng-binding ng-scope">חולון - בת ים</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="51" class="ng-binding ng-scope">רמת גן – גבעתיים</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="93" class="ng-binding ng-scope">פתח תקווה והסביבה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="76" class="ng-binding ng-scope">ראש העין והסביבה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="93" class="ng-binding ng-scope">בקעת אונו</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="53" class="ng-binding ng-scope">רמלה – לוד</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="55" class="ng-binding ng-scope">בני ברק - גבעת שמואל</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="61" class="ng-binding ng-scope">עמק  איילון</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="76" class="ng-binding ng-scope">שוהם והסביבה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="36" class="ng-binding ng-scope">מודיעין והסביבה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="38" class="ng-binding ng-scope">בית שמש והסביבה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="38" class="ng-binding ng-scope">הרי יהודה - מבשרת והסביבה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="50" class="ng-binding ng-scope">מעלה אדומים והסביבה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="50" class="ng-binding ng-scope">ירושלים</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="69" class="ng-binding ng-scope">ישובי דרום ההר</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="50" class="ng-binding ng-scope">גוש עציון</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="50" class="ng-binding ng-scope">בקעת הירדן וצפון ים המלח</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="93" class="ng-binding ng-scope">אריאל וישובי יהודה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="53" class="ng-binding ng-scope">נס ציונה – רחובות</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="61" class="ng-binding ng-scope">אשדוד - אשקלון והסביבה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="61" class="ng-binding ng-scope">גדרה - יבנה והסביבה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="66" class="ng-binding ng-scope">קרית גת והסביבה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="69" class="ng-binding ng-scope">באר שבע והסביבה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="69" class="ng-binding ng-scope">אילת וערבה</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="69" class="ng-binding ng-scope">ישובי הנגב</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="66" class="ng-binding ng-scope">הנגב המערבי</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() --><option ng-repeat="option in loansCtrl.GetResidentialArea()" value="69" class="ng-binding ng-scope">דרום ים המלח</option><!-- end ngRepeat: option in loansCtrl.GetResidentialArea() -->
                                    </select>
                                </div>
						    </div>
						    <footer>
    							<button type="submit" class="btn btn-primary ng-binding" ng-click="loansCtrl.SendAbandonedPopup()">שלח</button>
	    					</footer>
                        </div>
					</form>
				</div>
				<button type="button" class="btn-close ng-binding" data-dismiss="modal" title="סגור">סגור</button>
			</div>
		</div>
	</div>

<title class="ng-scope"></title></ng-view>
</div>
<span class="fader" style="opacity: 0;"></span></div></div>
<div id="ctl00_SPWebPartManager1_g_4a6ddbed_d1e8_43c3_9999_bca5e95bd67a_ctl00_pnlIframeRemoveCookie" class="hide">
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
                    <h3 class="ng-binding">צריך עזרה?</h3>
                    <label for="lbl-02" class="ng-binding">מלא פרטים נציג יחזור אליך בהקדם</label>
                    <div class="input-holder">
                       <input id="lbl-02" type="text" class="form-control leadName" name="fullName" title="name*" placeholder="שם*" maxlength="50">
                    </div>
                    <!-- end input-holder -->
                    <div class="input-holder">
                       <input type="text" class="form-control leadPhone ng-pristine ng-untouched ng-valid ng-valid-maxlength" name="phone" ng-model="loansCtrl.contactUsTel" title="Phone number*" ng-only-digits="" placeholder="מספר טלפון*" maxlength="10">
                    </div>
                    <!-- end input-holder -->
                    <div class="input-holder">
                      <input type="text" class="form-control leadId ng-pristine ng-untouched ng-valid ng-valid-maxlength" name="id_number" ng-model="loansCtrl.contactUsId" title="ID number" ng-only-digits="" placeholder="תעודת זהות" maxlength="9"></div>
                    <!-- end input-holder -->
                    <div class="input-holder">
                       <input type="text" class="form-control leadArea" name="ddlResidentialArea" title="Area of residence*" placeholder="עיר מגורים*" maxlength="50">
                    </div>
                    <!-- end input-holder -->
                    <footer>
                       <button class="btn submit-contact btn-info ng-binding" type="submit" ng-click="clickSendLead()">שלח</button>
                    </footer>
                 </form>
                <div class="seccessLead" ng-show="seccessLead==true" style="display:none;"><div><h4 class="ng-binding">תודה על פנייתך,</h4><p class="ng-binding">נציג יצור איתך קשר בהקדם</p></div></div>
              </div>
              <!-- end contact-form -->
              <div class="service-center">
                 <h3 class="ng-binding">מוקד שירות</h3>
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
               <b>אודות</b> <br /><br />
               קרדיט דיגיטל חברת אשראי העוסקת במתן שירותים פיננסים מתקדמים און ליין.<br /><br />
הלוואות ומימון במגוון סוגים לשכירים, עצמאים, מחלקת רכב חדש ויד שנייה,
משכנתאות, מחלקת מימון לחברות מתחום היבוא והיצוא ומגוון שירותים נוספים. <br /><br />
חברת קרדיט דיגיטל מתמחה בהעברת תשלום מיידי עד 10,000₪  ללקוחות
קיימים וחדשים בכל הארץ.<br />
שרות זה נותן פיתרון מיידי לעשרות הלקוחות שלנו מידי יום בהצלחה רבה.<br /><br />
לחברה צוות מקצועי מהמובלים בתחום הבנקאות עם ניסיון של שנים בתחום הפיננסי.<br /><br />
קרדיט דיגיטל הינה החברה המובילה בתעשיה לאורך שנים, ולזכותה נזקפת צמיחה משולבת של החברה עצמה ושל שלל לקוחותיה.<br /><br />


קרדיט דיגיטל הרווח שלכם, השירות שלנו.

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
               <b>הלוואות</b> <br /><br />
               קרדיט דיגיטל היתרון במסגרת אשראי נוספת.<br /><br />
מאות עסקים צריכים וחייבים מסגרת אשראי חוץ בנקאית נוספת,
מערכות הבנקים מצטמצמות לאט לאט והנגישות נהיית יותר מסורבלת, קרדיט דיגיטל נותנת פיתרון לכל לקוחותיה.<br /><br />
אשראי מיידי, הלוואת שונות, ניכיון צ'קים, משכנתאות ועוד מגוון שירותים פיננסים נוספים.<br /><br />


המינוף שלך, ההצלחה של כולנו.


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
               <b>כרטיס DEBIT</b><br /><br />

הוא כרטיס חיוב מיידי שעוזר לנהל את חשבון ההוצאות באופן מיידי. <br /><br />


הדרך הבטוחה במקום מזומן, מעקב הוצאות מדויק ומערכת ניהל אינטרנטית אישית.<br /><br />

על כרטיס אשראי דביט:<br />
כרטיס דביט, הדרך הבטוחה שלך לניהול ותשלום מיידי.
כרטיס דביט בינלאומי מאפשר לכם לבצע עסקאות בכל חנות שמכבדת כרטיס אשראי מאסטרכארד בעולם.
בכרטיס זה ניתן להפעיל ביטוח נסיעות לחו"ל, מערכת ניהול ואפליקציה למעקב החשבון.
מותג: מאסטרכארד
<br /><br />

סוגי עסקאות:<br />
עסקאות רגילות, אינטרנטיות, רכישות בחו"ל והעברת תשלום בין כרטיס לכרטיס.
<br /><br />

תיקרה עסקאות בכרטיס:<br />
בכל כרטיס קיימת מסגרת אשראי ותנאים שונים,
שאל את הנציג.

<br /><br />
חיוב עסקאות
כל לקוח יכול להיכנס עם קוד אישי לחשבונו, במקביל לביצוע העסקה ולראות את החיוב בהתאם ליתרה בחשבון הכרטיס.
חיוב העסקאות הם במטבע $ או € או £.
ניתן לחייב את החשבון באחת האופציות שיבחרו.
חיוב ב ₪ יחייב את החשבון בעמלת המרת מטבע למסלול שיבחר והחשבון יחויב בעמלה.
<br /><br />

שאל את הנציג פרטים אודות כרטיס דביט.

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
               <b>משקעים</b><br />text<br>


            </p>
         </div>
         <!-- end legal-terms -->
         <button type="button" class="btn-close ng-binding" data-dismiss="modal" title="Close">Close</button>
      </div>
      <!-- end modal-content -->
   </div>
   <!-- end modal-dialog -->
</div>

<script src="_layouts/15/BankJerusalem/scripts/jquery/jquery-1.11.2.min.js"></script>
<script src="_layouts/15/BankJerusalem/scripts/jquery/jquery-ui-1.11.4.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="Style%20Library/boj/scripts/Loans/loansPlugins.min.js"></script>
<script src="assets/js/main.js"></script>

<link rel="stylesheet" media="all" href="_layouts/15/BankJerusalem/styles/bootstrap/v3.3.4/bootstrap.min.css">
<link rel="stylesheet" media="all" href="_layouts/15/BankJerusalem/styles/bootstrap/v3.3.4/bootstrap-rtl.min.css">
<link rel="stylesheet" media="all" href="_layouts/15/BankJerusalem/styles/jquery/jquery-ui-1.11.4.min.css">
<link rel="stylesheet" media="all" href="Style%20Library/boj/styles/Loans/jquery-ui.min.css">
<link rel="stylesheet" media="all" href="Style%20Library/boj/styles/Loans/jquery.ui.slider-rtl.min.css">
<link rel="stylesheet" media="all" href="Style%20Library/boj/styles/Loans/form.min.css">
<link rel="stylesheet" media="all" href="Style%20Library/boj/he-il/styles/controls/Loans.min.css">


<!--

<link rel="stylesheet" media="all" href="_layouts/15/BankJerusalem/styles/bootstrap/v3.3.4/bootstrap.min.css">
<link rel="stylesheet" media="all" href="_layouts/15/BankJerusalem/styles/jquery/jquery-ui-1.11.4.min.css">
<link rel="stylesheet" media="all" href="Style%20Library/boj/styles/Loans/jquery-ui.min.css">
<link rel="stylesheet" media="all" href="Style%20Library/boj/styles/Loans/form.min.css">
<link rel="stylesheet" media="all" href="Style%20Library/boj/he-il/styles/controls/Loans.min.css">
<link rel="stylesheet" media="all" href="Style%20Library/boj/en-us/styles/controls/Loans.min.css">
-->

<!-- <script type="text/javascript" src="/Style%20Library/boj/scripts/conversion.js"> -->
</script>

<div style="display: none; visibility: hidden;">

<noscript></noscript>

</div><div style="display: none; visibility: hidden;">

<noscript></noscript>
</div><span role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></span><span role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></span><div class="select-options options-hidden drop-type2 " style="position: absolute; top: 661px; left: 0px; width: 0px;"><div class="drop-holder"><div class="drop-list">
</div></div></div><div class="select-options options-hidden drop-type2 " style="position: absolute; top: 661px; left: 0px; width: 0px;"><div class="drop-holder"><div class="drop-list">

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
