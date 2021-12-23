<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Spring and fall Welcome mail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body style="font-family: Gill, Helvetica, sans-serif;">
    <div>
        <div align="center" id="emb-email-header">
            <img src="<?= base_url() ?>/assets/images/logo/logo.png">
        </div>
        <h1 style="font-size: 36px;  font-family: Georgia, Helvetica, sans-serif; font-style: italic; text-transform :capitalize;"
            align="center">Welcome
            <span><?php echo $username; ?></span>
        </h1>
        <h3 align="center">We're happy to have you with us.</h3>

        <p align="center"
            style="Margin-top: 0;color: #565656;font-family: Georgia,Helvetica,sans;font-size: 18px;line-height: 25px;Margin-bottom: 25px">
            We want to make sure students get the best overseas study experience through our service </p>

        <p align="center"><a href="<?= $url; ?>"
                style="padding:10px 20px; marging: 20px; border:none; background-color:#2980b9; color:#fff; text-decoration:none; border-radius : 20px; font-size: 18px; font-weight: 600; box-shadow: 10px 5px 5px skyblue;">Click
                Here to verify your account </a></p>
    </div>
</body>

</html>