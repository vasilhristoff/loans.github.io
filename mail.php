<?php
    // 01 first mail ////

   $approvalStatus = $_COOKIE['approvalStatus'];
   $language = $_COOKIE['lang'];
   $to      = $_POST['email'];
   $subject = 'Approve / Disapprove Response Template';
   $message = '';

   $approvedTemplateEng = '
    <html>
    <head>
        <title>Approved Template</title>
    </head>
    <body font-family: "Dosis", sans-serif;">
    <div class="abv-MessagePanel"><div class="abv-omExternalClass"><div style="background: #eaebed; padding: 1%;">
      <div style="max-width: 800px; margin: auto; background: #fff;">

        <div style="margin-bottom: 35px;">
          <img src="http://s14.postimg.org/5m420o8q9/approved.jpg" alt="" width="800" height="175" style="max-height: 175px; max-width: 800px; width: 100%; height: 100%;">
        </div>

        <h1 style="font: 36px/42px Open Sans, Tahoma; color: #60c776; text-align: center; width: 90%; margin: 0 auto 15px;">
            Congratulations, your loan application has been <b>APPROVED</b>
        </h1>

        <h2 style="font: 600 15px Open Sans, Tahoma; margin-bottom: 65px; text-align: center; color: #3b3e40;">
          Omnis sunt eos eligendi maiores pariatur, corrupti voluptate quia perferendis
        </h2>

        <div style="padding-left: 20px; padding-right: 20px; max-width: 685px; margin: auto;">

          <h3 style="font: 24px Open Sans, Tahoma; margin-bottom: 18px; color: #3b3e40;">
            A Website Loan Specialist will follow up with you shortly to discuss options for closing your loan.
          </h3>
          <p style="margin-bottom: 35px; padding-bottom: 35px; border-bottom: 1px solid #eaebed; font: 15px Open Sans, Tahoma; color: #4f585e;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis sunt eos eligendi maiores pariatur, corrupti voluptate quia perferendis. Accusantium odit animi totam.

          </p>
        </div>

        <div style="height: 26px; border-bottom: 10px solid #60c776; background: #f8f8f8; text-align: right; padding-top: 14px; padding-right: 25px; font: italic 15px Open Sans, Tahoma; color: #4f585e;">
          We should replace this with a real logo.
        </div>

      </div>
    </div>
    </div></div>
    </body>
    </html>
    ';

    $approvedTemplateHeb = '
    <html>
    <head>
        <title>Approved Template</title>
    </head>
    <body font-family: "Dosis", sans-serif;">
    <div class="abv-MessagePanel"><div class="abv-omExternalClass"><div style="background: #eaebed; padding: 1%;">
      <div style="max-width: 800px; margin: auto; background: #fff;">

        <div style="margin-bottom: 35px;">
          <img src="http://s14.postimg.org/5m420o8q9/approved.jpg" alt="" width="800" height="175" style="max-height: 175px; max-width: 800px; width: 100%; height: 100%;">
        </div>

        <h1 style="font: 36px/42px Open Sans, Tahoma; color: #60c776; text-align: center; width: 90%; margin: 0 auto 15px;">
            כר או. כיצד אחרות משחקים בה כלל, דפים ספרדית שכל את, אחד שנורו מיזמי חבריכם ב. <b>
            אושר</b>
        </h1>

        <h2 style="font: 600 15px Open Sans, Tahoma; margin-bottom: 65px; text-align: center; color: #3b3e40;">
          כר או. כיצד אחרות משחקים בה כלל, דפים ספרדית שכל את, אחד שנורו מיזמי חבריכם ב.
        </h2>

        <div style="padding-left: 20px; padding-right: 20px; max-width: 685px; margin: auto;">

          <h3 style="font: 24px Open Sans, Tahoma; margin-bottom: 18px; color: #3b3e40;">
          כר או. כיצד אחרות משחקים בה כלל, דפים ספרדית שכל את, אחד שנורו מיזמי חבריכם ב.
          </h3>
          <p style="margin-bottom: 35px; padding-bottom: 35px; border-bottom: 1px solid #eaebed; font: 15px Open Sans, Tahoma; color: #4f585e;">
            כר או. כיצד אחרות משחקים בה כלל, דפים ספרדית שכל את, אחד שנורו מיזמי חבריכם ב.

          </p>
        </div>

        <div style="height: 26px; border-bottom: 10px solid #60c776; background: #f8f8f8; text-align: right; padding-top: 14px; padding-right: 25px; font: italic 15px Open Sans, Tahoma; color: #4f585e;">
          We should replace this with a real logo.
        </div>

      </div>
    </div>
    </div></div>
    </body>
    </html>
    ';


    $refusedTemplateEng  = '
    <!DOCTYPE>
    <html>
    <head>
        <title>Refused Template</title>
    </head>
    <body font-family: "Dosis", sans-serif;">
    <div class="abv-MessagePanel"><div class="abv-omExternalClass"><div style="background: #eaebed; padding: 1%;">
      <div style="max-width: 800px; margin: auto; background: #fff;">

        <div style="margin-bottom: 35px;">
          <img src="http://s18.postimg.org/ixdvd6xzd/refuse.jpg" alt="" width="800" height="175" style="max-height: 175px; max-width: 800px; width: 100%; height: 100%;">
        </div>

        <h1 style="font: 36px/42px Open Sans, Tahoma; color: #ea7784; text-align: center; width: 90%; margin: 0 auto 15px;">
            We are sorry to ....Your loan application is <b>REFUSED</b>
        </h1>

        <h2 style="font: 600 15px Open Sans, Tahoma; margin-bottom: 65px; text-align: center; color: #3b3e40;">
          Omnis sunt eos eligendi maiores pariatur, corrupti voluptate quia perferendis
        </h2>

        <div style="padding-left: 20px; padding-right: 20px; max-width: 685px; margin: auto;">

          <h3 style="font: 24px Open Sans, Tahoma; margin-bottom: 18px; color: #3b3e40;">
            A Website Loan Specialist will follow up with you shortly to discuss options for closing your loan.
          </h3>
          <p style="margin-bottom: 35px; padding-bottom: 35px; border-bottom: 1px solid #eaebed; font: 15px Open Sans, Tahoma; color: #4f585e;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis sunt eos eligendi maiores pariatur, corrupti voluptate quia perferendis. Accusantium odit animi totam.

          </p>
        </div>

        <div style="height: 26px; border-bottom: 10px solid #ea7784; background: #f8f8f8; text-align: right; padding-top: 14px; padding-right: 25px; font: italic 15px Open Sans, Tahoma; color: #4f585e;">
          We should replace this with a real logo.
        </div>

      </div>
    </div>
    </div></div>
    </body>
    </html>
';

$refusedTemplateHeb  = '
<!DOCTYPE>
<html>
<head>
    <title>Refused Template</title>
</head>
<body font-family: "Dosis", sans-serif;">
<div class="abv-MessagePanel"><div class="abv-omExternalClass"><div style="background: #eaebed; padding: 1%;">
  <div style="max-width: 800px; margin: auto; background: #fff;">

    <div style="margin-bottom: 35px;">
      <img src="http://s18.postimg.org/ixdvd6xzd/refuse.jpg" alt="" width="800" height="175" style="max-height: 175px; max-width: 800px; width: 100%; height: 100%;">
    </div>

    <h1 style="font: 36px/42px Open Sans, Tahoma; color: #ea7784; text-align: center; width: 90%; margin: 0 auto 15px;">
        We are sorry to ....Your loan application is <b>REFUSED</b>
    </h1>

    <h2 style="font: 600 15px Open Sans, Tahoma; margin-bottom: 65px; text-align: center; color: #3b3e40;">
      Omnis sunt eos eligendi maiores pariatur, corrupti voluptate quia perferendis
    </h2>

    <div style="padding-left: 20px; padding-right: 20px; max-width: 685px; margin: auto;">

      <h3 style="font: 24px Open Sans, Tahoma; margin-bottom: 18px; color: #3b3e40;">
        A Website Loan Specialist will follow up with you shortly to discuss options for closing your loan.
      </h3>
      <p style="margin-bottom: 35px; padding-bottom: 35px; border-bottom: 1px solid #eaebed; font: 15px Open Sans, Tahoma; color: #4f585e;">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis sunt eos eligendi maiores pariatur, corrupti voluptate quia perferendis. Accusantium odit animi totam.

      </p>
    </div>

    <div style="height: 26px; border-bottom: 10px solid #ea7784; background: #f8f8f8; text-align: right; padding-top: 14px; padding-right: 25px; font: italic 15px Open Sans, Tahoma; color: #4f585e;">
      We should replace this with a real logo.
    </div>

  </div>
</div>
</div></div>
</body>
</html>
';

    if( $approvalStatus == 1 ) {
          if ($language == 'english') {
              $message = $approvedTemplateEng;
          } else {
              $message = $approvedTemplateHeb;
          }
    } else {
          if ($language == 'english') {
            $message = $refusedTemplateEng;
          } else {
            $message = $refusedTemplateHeb;
          }
    }


    $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From:  test <test@te.customForm-unselectable>' . " \r\n" .
                    'Reply-To: test'. "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

    $userMail = mail($to, $subject, $message, $headers);

    // 02 second mail ////
    $to1      = 'loan@creditdigital.co.il';
    $subject1 = 'Credit Digital Contact';


    if($approvalStatus == 1) {
      $messageAdmin = '
      <!DOCTYPE>
      <html>
      <head>
          <title>Approved Template</title>
      </head>
      <body font-family: "Dosis", sans-serif;">
      <table cellpadding="8" cellspacing="0" style="padding:0;width:100%!important;background:#f5f5f5;margin:0;background-color:#f5f5f5" border="0"><tbody><tr><td valign="top">
      <table cellpadding="0" cellspacing="0" style="border-radius:4px;border:1px #eae3e3 solid;background:#ffffff;margin:0 auto;background-color:#ffffff;padding-top:0px" border="0" align="center"><tbody><tr><td><table cellpadding="0" cellspacing="0" style="line-height:25px" border="0" align="center"><tbody><tr><td colspan="3" height="30"></td></tr><tr><td width="36"></td>
      <td width="454" align="left" style="color:#444444;border-collapse:collapse;font-size:11pt;font-family:proxima_nova,Open Sans,Lucida Grande,Segoe UI,Arial,Verdana,Lucida Sans Unicode,Tahoma,Sans Serif;max-width:454px" valign="top"><p style="font-size:14px;font-weight:bold;color:#666;line-height:34px;text-transform:uppercase;background-color:#fafafa;padding:10px;border-radius:4px;letter-spacing:-.01em;border:1px solid #f1f1f1;">Approval Status : <b style="background-color:#8BC34A;color:#ffffff;text-transform:uppercase;display:inline-block;padding:2px 40px; margin:0 5px;border-radius:3px;font-size:14px;">Approved</b> </p>
      <p style="font-size:20px;font-weight:normal;color:#444;line-height:34px;margin-bottom:0">Amount : <b style="border:2px solid #00bcd4;color:#333333;text-transform:uppercase;display:inline-block;padding:2px 10px; margin:0 5px;border-radius:3px;font-size:14px;background-color: #e7faff;border: 2px solid #d4ebf1;">' . $_COOKIE['amount'] . ' NIS</b> </p>
      <br>
        <hr style="border: 0;border-bottom: 1px dashed #ccc;background: #999;">
        <br>
          <h2 style="color:#00bcd4;font-weight:normal;margin-bottom:10px;margin-top:0;padding:0px 0px 5px 0;font: 16px/16px Open Sans, Tahoma;text-transform:uppercase;font-weight:bold;">First Form Data</h2>
         <b style="color:#444;display:inline-block;padding-right:15px;width:150px;font-size:13px;">Purpose: </b><i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">'. $_COOKIE['purpose'] .'</i>
         <br>
        <b style="color:#444;display:inline-block; padding-right:15px;width:150px;font-size:13px;">Age: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">'. $_COOKIE['age'] .'</i>
            <br>
        <b style="color:#444;display:inline-block;padding-right:15px; width:150px;font-size:13px;">Marital Status: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">' . $_COOKIE['maritalStatus'] . '</i>
            <br>
        <b style="color:#444;display:inline-block;padding-right:15px; width:150px;font-size:13px;">Number of Children: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">'. $_COOKIE['numChildren'] .'</i>
            <br>
        <b style="color:#444;display:inline-block;padding-right:15px; width:150px;font-size:13px;">Residence: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">'. $_COOKIE['residence'] .'</i>
            <br>
        <b style="color:#444;display:inline-block;padding-right:15px; width:150px;font-size:13px;">Employment Status: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">'. $_COOKIE['employmentSataus'] .'</i>
            <br>
        <b style="color:#444;display:inline-block;padding-right:15px; width:150px;font-size:13px;">Work Experience: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">'. $_COOKIE['workExperience'] .'</i>
            <br>
        <b style="color:#444;display:inline-block;padding-right:15px; width:150px;font-size:13px;">Net Income: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">'.  $_COOKIE['netIncome'].'</i>
            <br>
        <b style="color:#444;display:inline-block;padding-right:15px; width:150px;font-size:13px;">Other obligations: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">'. $_COOKIE['otherObligations'] .'</i>

            <br>
            <br>
            <br>
            <hr style="border: 0;border-bottom: 1px dashed #ccc;background: #999;">

          <h2 style="color:#00bcd4;font-weight:normal;margin-bottom:10px;margin-top:0;padding:20px 0px 5px 0;font: 16px/16px Open Sans, Tahoma;text-transform:uppercase;font-weight:bold;">Second Form Data</h2>
        <b style="color:#444;display:inline-block;padding-right:15px;width:150px;font-size:13px;">First Name: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">'. $_POST['firstName'] .'</i>
            <br>
        <b style="color:#444;display:inline-block;padding-right:15px;width:150px;font-size:13px;">Last Name: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">'. $_POST['lastName'] .'</i>
            <br>
        <b style="color:#444;display:inline-block;padding-right:15px;width:150px;font-size:13px;">ID Number: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">' . $_POST['id_number'] . '</i>
            <br>
        <b style="color:#444;display:inline-block;padding-right:15px;width:150px;font-size:13px;">Mobile Phone: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">' . $_POST['phone'] . '</i>
            <br>
        <b style="color:#444;display:inline-block;padding-right:15px;width:150px;font-size:13px;">Additional Phone: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">' . $_POST['otherphone'] . '</i>
            <br>
        <b style="color:#444;display:inline-block;padding-right:15px;width:150px;font-size:13px;">Email Address: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">' . $_POST['email'] . '</i>
            <br>
        <b style="color:#444;display:inline-block;padding-right:15px;width:150px;font-size:13px;">City: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">' . $_POST['city'] . '</i>
            <br>
        <b style="color:#444;display:inline-block;padding-right:15px;width:150px;font-size:13px;">Street: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">' . $_POST['street'] . '</i>
            <br>
        <b style="color:#444;display:inline-block;padding-right:15px;width:150px;font-size:13px;">House Number: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">' . $_POST['home'] . '</i>
            <br>
        <b style="color:#444;display:inline-block;padding-right:15px;width:150px;font-size:13px;">Zip Code: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">' . $_POST['targeting'] . '</i>
            <br>
          <br><br>
      </td>
      <td width="36"></td>
      </tr><tr><td colspan="3" height="36"></td></tr></tbody></table></td></tr></tbody></table><table cellpadding="0" cellspacing="0" align="center" border="0"><tbody><tr><td height="10"></td></tr><tr><td style="padding:0;border-collapse:collapse"><table cellpadding="0" cellspacing="0" align="center" border="0"><tbody><tr style="color:#a8b9c6;font-size:11px;font-family:proxima_nova"><td width="400" align="left"></td>
      <td width="128" align="right">© 2016 Logo</td>
      </tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>
      </body>
      </html>';
} else {
  $messageAdmin = '
  <!DOCTYPE>
  <html>
  <head>
      <title>Refused Template</title>
  </head>
  <body font-family: "Dosis", sans-serif;">
  <table cellpadding="8" cellspacing="0" style="padding:0;width:100%!important;background:#f5f5f5;margin:0;background-color:#f5f5f5" border="0"><tbody><tr><td valign="top">
  <table cellpadding="0" cellspacing="0" style="border-radius:4px;border:1px #eae3e3 solid;background:#ffffff;margin:0 auto;background-color:#ffffff;padding-top:0px" border="0" align="center"><tbody><tr><td><table cellpadding="0" cellspacing="0" style="line-height:25px" border="0" align="center"><tbody><tr><td colspan="3" height="30"></td></tr><tr><td width="36"></td>
  <td width="454" align="left" style="color:#444444;border-collapse:collapse;font-size:11pt;font-family:proxima_nova,Open Sans,Lucida Grande,Segoe UI,Arial,Verdana,Lucida Sans Unicode,Tahoma,Sans Serif;max-width:454px" valign="top"><p style="font-size:14px;font-weight:bold;color:#666;line-height:34px;text-transform:uppercase;background-color:#fafafa;padding:10px;border-radius:4px;letter-spacing:-.01em;border:1px solid #f1f1f1;">Approval Status : <b style="background-color:#e87a72;color:#ffffff;text-transform:uppercase;display:inline-block;padding:2px 40px; margin:0 5px;border-radius:3px;font-size:14px;">Refused</b> </p>
  <p style="font-size:20px;font-weight:normal;color:#444;line-height:34px;margin-bottom:0">Amount : <b style="border:2px solid #00bcd4;color:#333333;text-transform:uppercase;display:inline-block;padding:2px 10px; margin:0 5px;border-radius:3px;font-size:14px;background-color: #e7faff;border: 2px solid #d4ebf1;">' . $_COOKIE['amount'] . ' NIS</b> </p>
  <br>
    <hr style="border: 0;border-bottom: 1px dashed #ccc;background: #999;">
    <br>
      <h2 style="color:#00bcd4;font-weight:normal;margin-bottom:10px;margin-top:0;padding:0px 0px 5px 0;font: 16px/16px Open Sans, Tahoma;text-transform:uppercase;font-weight:bold;">First Form Data</h2>
     <b style="color:#444;display:inline-block;padding-right:15px;width:150px;font-size:13px;">Purpose: </b><i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">'. $_COOKIE['purpose'] .'</i>
     <br>
    <b style="color:#444;display:inline-block; padding-right:15px;width:150px;font-size:13px;">Age: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">'. $_COOKIE['age'] .'</i>
        <br>
    <b style="color:#444;display:inline-block;padding-right:15px; width:150px;font-size:13px;">Marital Status: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">' . $_COOKIE['maritalStatus'] . '</i>
        <br>
    <b style="color:#444;display:inline-block;padding-right:15px; width:150px;font-size:13px;">Number of Children: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">'. $_COOKIE['numChildren'] .'</i>
        <br>
    <b style="color:#444;display:inline-block;padding-right:15px; width:150px;font-size:13px;">Residence: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">'. $_COOKIE['residence'] .'</i>
        <br>
    <b style="color:#444;display:inline-block;padding-right:15px; width:150px;font-size:13px;">Employment Status: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">'. $_COOKIE['employmentSataus'] .'</i>
        <br>
    <b style="color:#444;display:inline-block;padding-right:15px; width:150px;font-size:13px;">Work Experience: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">'. $_COOKIE['workExperience'] .'</i>
        <br>
    <b style="color:#444;display:inline-block;padding-right:15px; width:150px;font-size:13px;">Net Income: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">'.  $_COOKIE['netIncome'].'</i>
        <br>
    <b style="color:#444;display:inline-block;padding-right:15px; width:150px;font-size:13px;">Other obligations: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">'. $_COOKIE['otherObligations'] .'</i>

        <br>
        <br>
        <br>
        <hr style="border: 0;border-bottom: 1px dashed #ccc;background: #999;">

      <h2 style="color:#00bcd4;font-weight:normal;margin-bottom:10px;margin-top:0;padding:20px 0px 5px 0;font: 16px/16px Open Sans, Tahoma;text-transform:uppercase;font-weight:bold;">Second Form Data</h2>
    <b style="color:#444;display:inline-block;padding-right:15px;width:150px;font-size:13px;">First Name: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">'. $_POST['firstName'] .'</i>
        <br>
    <b style="color:#444;display:inline-block;padding-right:15px;width:150px;font-size:13px;">Last Name: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">'. $_POST['lastName'] .'</i>
        <br>
    <b style="color:#444;display:inline-block;padding-right:15px;width:150px;font-size:13px;">ID Number: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">' . $_POST['id_number'] . '</i>
        <br>
    <b style="color:#444;display:inline-block;padding-right:15px;width:150px;font-size:13px;">Mobile Phone: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">' . $_POST['phone'] . '</i>
        <br>
    <b style="color:#444;display:inline-block;padding-right:15px;width:150px;font-size:13px;">Additional Phone: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">' . $_POST['otherphone'] . '</i>
        <br>
    <b style="color:#444;display:inline-block;padding-right:15px;width:150px;font-size:13px;">Email Address: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">' . $_POST['email'] . '</i>
        <br>
    <b style="color:#444;display:inline-block;padding-right:15px;width:150px;font-size:13px;">City: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">' . $_POST['city'] . '</i>
        <br>
    <b style="color:#444;display:inline-block;padding-right:15px;width:150px;font-size:13px;">Street: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">' . $_POST['street'] . '</i>
        <br>
    <b style="color:#444;display:inline-block;padding-right:15px;width:150px;font-size:13px;">House Number: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">' . $_POST['home'] . '</i>
        <br>
    <b style="color:#444;display:inline-block;padding-right:15px;width:150px;font-size:13px;">Zip Code: </b> <i style="font-style:normal;background-color:#f5f5f5;padding:3px 4px;border-radius:3px;border:1px solid #e5e5e5;display:inline-block;margin-bottom:7px;">' . $_POST['targeting'] . '</i>
        <br>
      <br><br>
  </td>
  <td width="36"></td>
  </tr><tr><td colspan="3" height="36"></td></tr></tbody></table></td></tr></tbody></table><table cellpadding="0" cellspacing="0" align="center" border="0"><tbody><tr><td height="10"></td></tr><tr><td style="padding:0;border-collapse:collapse"><table cellpadding="0" cellspacing="0" align="center" border="0"><tbody><tr style="color:#a8b9c6;font-size:11px;font-family:proxima_nova"><td width="400" align="left"></td>
  <td width="128" align="right">© 2016 Logo</td>
  </tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>
  </body>
  </html>
';
}

  $from1  = $_POST['email'];

  $headers1 = 'MIME-Version: 1.0' . "\r\n";
        $headers1 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers1 .= 'From:  ' . $from1 . ' <' . $from1 .'>' . " \r\n" .
                    'Reply-To: '.  $from1 . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

  $adminMail = mail($to1, $subject1, $messageAdmin, $headers1);
      if ($userMail && $adminMail) {
          if ($language == 'english') {
            header('Location: success.php');
        } else {
            header('Location: successhebrew.php');
        }

  }
  ?>
