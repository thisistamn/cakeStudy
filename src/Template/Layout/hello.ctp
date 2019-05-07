<!doctype html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title><?php echo $this->fetch('title') ?></title>
    <?php
    echo $this->Html->css('cake.hello');
    echo $this->Html->script('cake.hello');
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>
    <div class="container">
        <div id="header">
            <?= $this->element('Hello/header',['msg'=>$msg]) ?>
        </div>
        <div id="content">
            <?php echo $this->fetch('content'); ?>
        </div>
    </div>
    <div id="footer">
        <?= $this->element($footer) ?>
    </div>
</body>
</html>
