<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Spring and fall Welcome mail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>
</head>

<body style="font-family: Gill, Helvetica, sans-serif;">
    <div>
        <div align="center" id="emb-email-header">
            <img src="<?= base_url() ?>/assets/images/logo/logo.png">
        </div>
        <h1 style="font-size: 36px;  font-family: Georgia, Helvetica, sans-serif; font-style: italic; text-transform :capitalize;"
            align="center">Thank You
            <span><?php echo $username; ?></span>
        </h1>
        <h3 align="center">We're happy to have you with us.</h3>

        <p align="center"
            style="Margin-top: 0;color: #565656;font-family: Georgia,Helvetica,sans;font-size: 18px;line-height: 25px;Margin-bottom: 25px">
            We want to make sure students get the best overseas study experience through our service </p>

        <table>
            <tr>
                <th>Name</th>
                <th>Phone No</th>
                <th>Email</th>
                <th>College Name</th>
                <th>Country</th>
            </tr>
            <tr>
                <td><?= $username ?></td>
                <td><?= $phone ?></td>
                <td><?= $email ?></td>
                <td><?= $collegeName ?></td>
                <td><?= $country ?></td>
            </tr>
           
        </table>
    </div>
</body>

</html>