<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>News Blog</title>
        <style>
                body{
                width: 60%;
                justify-ele:center;
                display:flex;
                flex-direction:column;
                align-items:center;
                font-family:Montserrat;


                }

                .container{
                        box-shadow:1px 1px 5px black;
                        padding:2em;
                        overflow-y:scroll;
                        height:70vh;
                }
        </style>
</head>
<body>
<div class="container">

<h2><?php echo $title; ?></h2>



<?php foreach($news as $news_item): ?>


        <h3>
                <?php echo $news_item['title']; ?>
        </h3>
        <div class="main">
                <?php echo $news_item['text']; ?>
        </div>
        <a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a>

<?php endforeach; ?>

</div>

        
</body>
</html>

