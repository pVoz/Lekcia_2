<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="container">
    <div class="pag-header">
        <h1 loasdddddddddddddddddddddddddddddddddrems></h1>
    </div>

</body>


<?php
require 'funn_stuff.php';
$all_comments = 0;
?>




<div class="row">

    <?php foreach ($advanture as $dude) : ?>

        <article>
            <h4>
                <?php make_hovna($dude) ?>
            </h4>
            <p>
                <?php echo $dude['wat'] ?>
            </p>
            <footer class="comments">
                <?php echo $dude['comments'] ?>
            </footer>
        </article>
        <?php $all_comments =  $all_comments + $dude['comments'] ?>
    <?php endforeach ?>
</div>

<div class="row">
    <p>
        number of dudes: <strong> <?php echo count($advanture) ?> </strong><br>
        number of comments: <strong><?php echo $all_comments ?></strong>
    </p>
</div>









</div>




</body>

</html>