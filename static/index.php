<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>Nextcloud VM</title>
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <style type="text/css">
            body {
                background-color: #0082c9;
                font-weight: 300;
                font-size: 1em;
                line-height: 1.6em;
                font-family: 'Open Sans', Frutiger, Calibri, 'Myriad Pro', Myriad, sans-serif;
                color: white;
                height: auto;
                margin-left: auto;
                margin-right: auto;
                align: center;
                text-align: center;
                background: #0082c9; /* Old browsers */
                background-image: url('/nextcloud/core/img/background.png'), linear-gradient(10deg, #0082c9 0%, rgb(28, 175, 255) 50%);
                background-size: cover;
            }
            div.logotext   {
                width: 50%;
                margin: 0 auto;
            }
            div.logo   {
                background-image: url('/nextcloud/core/img/logo/logo.svg');
                background-repeat: no-repeat; top center;
                width: 50%;
                height: 25%;
                margin: 0 auto;
                background-size: 40%;
                margin-left: 40%;
                margin-right: 20%;
            }
            pre  {
                padding:10pt;
                width: 50%
                text-align: center;
                margin-left: 20%;
                margin-right: 20%;
            }
            div.information {
                align: center;
                width: 50%;
                margin: 10px auto;
                display: block;
                padding: 10px;
                background-color: rgba(0,0,0,.3);
                color: #fff;
                text-align: left;
                border-radius: 3px;
                cursor: default;
            }
            /* unvisited link */
            a:link {
                color: #FFFFFF;
            }
            /* visited link */
            a:visited {
                color: #FFFFFF;
            }
            /* mouse over link */
            a:hover {
                color: #E0E0E0;
            }
            /* selected link */
            a:active {
                color: #E0E0E0;
            }
        </style>
    </head>
    <body>
        <br>
        <div class="logo"></div>
        <div class="logotext">
            <h2><a href="https://github.com/XSR1/Nextcloud-VM" target="_blank">Nextcloud VM</a> - by <a href="" target="_blank"></a></h2>
        </div>
        <br>

        <h2>Access Nextcloud</h2>

        <div class="information">
            <p>Use the following address:
            <h3>
                <ul>
                    <li><a href="https://<?=$_SERVER['SERVER_NAME'];?>">https://<?=$_SERVER['SERVER_NAME'];?></a> (HTTPS)
                </ul>
            </h3>
            <p>Note: Please accept the warning in the browser if you have a self-signed certificate.<br>

        </div>

        <h2>Access Webmin</h2>

        <div class="information">
            <p>Use the following address:
            <h3>
                <ul>
                    <li><a href="https://<?=$_SERVER['SERVER_NAME'];?>:10000">https://<?=$_SERVER['SERVER_NAME'];?></a> (HTTPS)</li>
                </ul>
	    </h3>
	    <p>Note: Please accept the warning in the browser if you have a self-signed certificate.<br>
        </div>

        <h2>Access Adminer</h2>

        <div class="information">
            <p>Use the following address:
            <h3>
                <ul>
                    <li><a href="https://<?=$_SERVER['SERVER_NAME'];?>:9443">https://<?=$_SERVER['SERVER_NAME'];?>:9443</a> (HTTPS)</li>
                </ul>
            </h3>
            <p>Note: Please accept the warning in the browser if you have a self-signed certificate.<br>
            <p>Note: Your LAN IP is set as approved in /etc/apache2/sites-available/adminer.conf, all other access is forbidden.</p>
        </div>
    </body>
</html>
