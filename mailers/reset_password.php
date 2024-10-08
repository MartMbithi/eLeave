<?php
/*
 *   Crafted On Sun Apr 07 2024
 *   Author Martin Mbithi (martin.mbithi@makueni.go.ke)
 * 
 *   www.makueni.go.ke
 *   info@makueni.go.ke
 *
 *
 *   The Government of Makueni County Applications Development Section End User License Agreement
 *   Copyright (c) 2023 Government of Makueni County 
 *
 *
 *   1. GRANT OF LICENSE 
 *   GoMC Applications Development Section hereby grants to you (an individual) the revocable, personal, non-exclusive, and nontransferable right to
 *   install and activate this system on one computer solely for your official and non-commercial use,
 *   unless you have purchased a commercial license from GoMC Applications Development Section. Sharing this Software with other individuals, 
 *   or allowing other individuals to view the contents of this Software, is in violation of this license.
 *   You may not make the Software available on a network, or in any way provide the Software to multiple users
 *   unless you have first purchased at least a multi-user license from GoMC Applications Development Section
 *
 *   2. COPYRIGHT 
 *   The Software is owned by GoMC Applications Development Section and protected by copyright law and international copyright treaties. 
 *   You may not remove or conceal any proprietary notices, labels or marks from the Software.
 *
 *
 *   3. RESTRICTIONS ON USE
 *   You may not, and you may not permit others to
 *   (a) reverse engineer, decompile, decode, decrypt, disassemble, or in any way derive source code from, the Software;
 *   (b) modify, distribute, or create derivative works of the Software;
 *   (c) copy (other than one back-up copy), distribute, publicly display, transmit, sell, rent, lease or 
 *   otherwise exploit the Software. 
 *
 *
 *   4. TERM
 *   This License is effective until terminated. 
 *   You may terminate it at any time by destroying the Software, together with all copies thereof.
 *   This License will also terminate if you fail to comply with any term or condition of this Agreement.
 *   Upon such termination, you agree to destroy the Software, together with all copies thereof.
 *
 *
 *   5. NO OTHER WARRANTIES. 
 *   GoMC APPLICATIONS DEVELOPMENT SECTION DOES NOT WARRANT THAT THE SOFTWARE IS ERROR FREE. 
 *   GoMC APPLICATIONS DEVELOPMENT SECTION SOFTWARE DISCLAIMS ALL OTHER WARRANTIES WITH RESPECT TO THE SOFTWARE, 
 *   EITHER EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO IMPLIED WARRANTIES OF MERCHANTABILITY, 
 *   FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT OF THIRD PARTY RIGHTS. 
 *   SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF IMPLIED WARRANTIES OR LIMITATIONS
 *   ON HOW LONG AN IMPLIED WARRANTY MAY LAST, OR THE EXCLUSION OR LIMITATION OF 
 *   INCIDENTAL OR CONSEQUENTIAL DAMAGES,
 *   SO THE ABOVE LIMITATIONS OR EXCLUSIONS MAY NOT APPLY TO YOU. 
 *   THIS WARRANTY GIVES YOU SPECIFIC LEGAL RIGHTS AND YOU MAY ALSO 
 *   HAVE OTHER RIGHTS WHICH VARY FROM JURISDICTION TO JURISDICTION.
 *
 *
 *   6. SEVERABILITY
 *   In the event of invalidity of any provision of this license, the parties agree that such invalidity shall not
 *   affect the validity of the remaining portions of this license.
 *
 *
 *   7. NO LIABILITY FOR CONSEQUENTIAL DAMAGES IN NO EVENT SHALL GoMC APPLICATIONS DEVELOPMENT SECTION OR ITS SUPPLIERS BE LIABLE TO YOU FOR ANY
 *   CONSEQUENTIAL, SPECIAL, INCIDENTAL OR INDIRECT DAMAGES OF ANY KIND ARISING OUT OF THE DELIVERY, PERFORMANCE OR 
 *   USE OF THE SOFTWARE, EVEN IF GoMC APPLICATIONS DEVELOPMENT SECTION HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES
 *   IN NO EVENT WILL GoMC APPLICATIONS DEVELOPMENT SECTION LIABILITY FOR ANY CLAIM, WHETHER IN CONTRACT 
 *   TORT OR ANY OTHER THEORY OF LIABILITY, EXCEED THE LICENSE FEE PAID BY YOU, IF ANY.
 *
 */

require_once('../config/config.php');
/* Mailer Configurations */
require_once('../vendor/PHPMailer/src/SMTP.php');
require_once('../vendor/PHPMailer/src/PHPMailer.php');
require_once('../vendor/PHPMailer/src/Exception.php');

$ret = "SELECT * FROM mailer_settings 
JOIN postfix_mailer_configs";
$stmt = $mysqli->prepare($ret);
$stmt->execute(); //ok
$res = $stmt->get_result();
while ($mailer = $res->fetch_object()) {

    /* Determine which mailer is active */
    if ($mailer->mailer_status == 'Active') {
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->setFrom($mailer->mailer_mail_from_email);
        $mail->addAddress($user_email);
        $mail->FromName = $mailer->mailer_mail_from_name;
        $mail->isHTML(true);
        $mail->IsSMTP();
        $mail->SMTPKeepAlive = true; //SMTP connection will not close after each email sent, reduces SMTP overhead
        $mail->SMTPSecure = $mailer->mailer_protocol;
        $mail->Host = $mailer->mailer_host;
        $mail->SMTPAuth = true;
        $mail->Port = $mailer->mailer_port;
        $mail->Username = $mailer->mailer_username;
        $mail->Password = $mailer->mailer_password;
        $mail->Subject = 'Password Reset Instructions';
        /* Custom Mail Body */
        $mail->Body = '
            <!doctype html>
            <html lang="en-US">
            
            <head>
                <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
                <title>Password Reset</title>
                <meta name="description" content="Reset Password Email">
                <style type="text/css">
                    a:hover {text-decoration: underline !important;}
                </style>
            </head>
            
            <body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
                <!--100% body table-->
                <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
                    style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: "Open Sans", sans-serif;">
                    <tr>
                        <td>
                            <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
                                align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="height:80px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="height:20px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="95%" border="0"  cellpadding="0" cellspacing="0"
                                            style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                            <tr>
                                                <td style="height:40px;">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:0 35px;" align="center">
                                                    <img src="https://agpo.makueni.go.ke/public/images/small-logo.jpg"  alt="logo">
                                                    <h4 style="color:#1e1e2d; font-weight:500; margin:0;font-size:39px;font-family:"Rubik",sans-serif;">
                                                        Government Of Makueni County<br> 
                                                        Projects Monitoring and Tracking System <br>
                                                    </h4>
                                                    <span
                                                        style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
                                                    <p style="color:#455056; font-size:15px;line-height:24px; margin:0;" align="justify">
                                                        Greetings, <br>
                                                        You recently requested to reset the password for your Projects Monitoring and Tracking System account.
                                                    </p><br>
                                                    <p style="color:#455056; font-size:15px;line-height:24px; margin:0;" align="justify">
                                                        <a href="' . $reset_url . '">Click here to reset your password</a>
                                                    </p>
                                                    <p align="center" style="color:#455056; font-size:15px;line-height:24px; margin:0;">
                                                    <br>
                                                    Yours Sincerely<br>
                                                        <b>
                                                            Government of Makueni County <br>
                                                            <i>Wauni wa kwika nesa na ulungalu</i>
                                                        <br>
                                                    </b>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height:40px;">&nbsp;</td>
                                            </tr>
                                        </table>
                                    </td>
                                <tr>
                                    <td style="height:20px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="height:80px;">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </body>
        ';
        /* Send this email here */
        $mail->send();
        /* ****************************************************************************************************** */
    } else if ($mailer->postfix_mailer_status == 'Active') {
        /* Load postfix mailer settings */
        $fromName = $mailer->postfix_mailer_from_name;
        $from = $mailer->postfix_mailer_from_email;
        $to = $user_email;
        $subject = "Password Reset Instructions";
        $message = ' 
        <!doctype html>
        <html lang="en-US">
        
            <head>
                <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
                <title>Password Reset</title>
                <meta name="description" content="Reset Password Email">
                <style type="text/css">
                    a:hover {text-decoration: underline !important;}
                </style>
            </head>
            
            <body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
                <!--100% body table-->
                <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
                    style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: "Open Sans", sans-serif;">
                    <tr>
                        <td>
                            <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
                                align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="height:80px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="height:20px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="95%" border="0"  cellpadding="0" cellspacing="0"
                                            style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                            <tr>
                                                <td style="height:40px;">&nbsp;</td>
                                            </tr>
                                            <tr>
                                            <td style="padding:0 35px;" align="center">
                                                <img src="https://agpo.makueni.go.ke/public/images/small-logo.jpg"  alt="logo">
                                                <h4 style="color:#1e1e2d; font-weight:500; margin:0;font-size:39px;font-family:"Rubik",sans-serif;">
                                                    Government Of Makueni County<br> 
                                                    Projects Monitoring and Tracking System <br>
                                                </h4>
                                                <span
                                                    style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
                                                <p style="color:#455056; font-size:15px;line-height:24px; margin:0;" align="justify">
                                                    Greetings, <br>
                                                    You recently requested to reset the password for your Projects Monitoring and Tracking System account.
                                                </p><br>
                                                <p style="color:#455056; font-size:15px;line-height:24px; margin:0;" align="justify">
                                                    <a href="' . $reset_url . '">Click here to reset your password</a>
                                                </p>
                                                <p align="center" style="color:#455056; font-size:15px;line-height:24px; margin:0;">
                                                <br>
                                                Yours Sincerely<br>
                                                    <b>
                                                        Government of Makueni County <br>
                                                        <i>Wauni wa kwika nesa na ulungalu</i>
                                                    <br>
                                                </b>
                                                </p>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td style="height:40px;">&nbsp;</td>
                                            </tr>
                                        </table>
                                    </td>
                                <tr>
                                    <td style="height:20px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="height:80px;">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </body>
        </html>';
        // Set content-type header for sending HTML email 
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // Additional headers 
        $headers .= 'From: ' . $fromName . '<' . $from . '>' . "\r\n";

        mail($to, $subject, $message, $headers);
    } else {
        /* Shhhh - Say nothing */
    }
}
