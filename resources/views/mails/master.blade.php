<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap');
        * {
            margin: 0;
            padding: 0;
            font-size: 100%;
            line-height: 1.65;
        }

        img { max-width: 100%; margin: 0 auto; display: block; }

        body, .body-wrap { width: 100% !important; height: 100%; background: #fff; color: #34495e;
            font-family: "Roboto", "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif; font-size: 14px; }

        a { color: #005fe6; text-decoration: none; }

        a:hover { text-decoration: underline; }

        .text-center { text-align: center; }

        .text-right { text-align: right; }

        .text-left { text-align: left; }

        .button {
            display: inline-block;
            color: white;
            background: #3fb660;
            border: solid #3fb660;
            border-width: 10px 20px 8px;
            font-weight: bold;
            border-radius: 20px;
        }
        .main-content {
            border-radius: 7px;
            padding: 2px 2px;
            background-color: white;
            border: 1px solid #EDEDEE;
        }
        .border-top {
            padding-top: 5px;
            margin-top: 44px;
            border-top: 1px solid #EDEDEE;
        }
        .border-bottom {
            padding-bottom: 15px;
            border-bottom: 1px solid #EDEDEE;
        }
        .button:hover { text-decoration: none; }

        h1, h2, h3, h4, h5, h6 { margin-bottom: 20px; line-height: 1.25; }

        h1 { font-size: 32px; }

        h2 { font-size: 28px; }

        h3 { font-size: 24px; }

        h4 { font-size: 20px; }

        h5 { font-size: 16px; }

        p, ul, ol { font-weight: normal; margin-bottom: 20px; }

        .container { display: block !important; clear: both !important; margin: 0 auto !important; max-width: 580px !important; }

        .container table { width: 100% !important; border-collapse: collapse; }

        .container .masthead { padding: 40px 0; background: #3fb660; color: white; }

        .container .masthead h4 { margin: 0 auto !important; max-width: 90%; text-transform: uppercase; }

        .container .content { background: white; border-radius: 7px; padding: 10px 20px; }

        .container .content.footer { background: none; padding: 15px 20px; }

        .container .content.footer p { margin-bottom: 0; color: #888; text-align: center; }

        .container .content.footer a { color: #888; text-decoration: none; font-weight: bold; }

        .container .content.footer a:hover { text-decoration: underline; }
    </style>
    @yield('css')
</head>
<body>
<table class="body-wrap">
    <tr>
        <td class="container">

            <!-- Message start -->
            <div class="main-content">
                <table class="">
                    <tr>
                        <td class="content">
                            @yield('content')
                        </td>
                    </tr>
                </table>
            </div>

        </td>
    </tr>
    <tr>
        <td class="container">
            <!-- Message start -->
            <table>
                <tr>
                    <td class="content footer" align="center">
                        {{ now()->toRfc7231String() }} <br> Auto deploy Notification from {{ config('app.name') }}
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>