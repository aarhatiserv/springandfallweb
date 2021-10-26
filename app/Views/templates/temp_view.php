<html>

<head>
    <?php $session = session(); ?>
    <meta http-equiv="refresh"
        content="<?= $session->getFlashdata('second_redirect') ?>;url=<?= base_url($session->getFlashdata('url_redirect')) ?>" />
</head>

<body>
    <div style="display: flex;
    height:100vh;
  align-items: center;
  justify-content: center;">
        <h1 style="padding : 20px 20px; background-color: green; color:white;">
            <?= $session->getFlashdata('message_id'); ?></h1>
    </div>
</body>

</html>