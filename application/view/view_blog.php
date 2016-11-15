<html>
    <head>
        <title>My Blog</title>
    </head>
    <body>
        <h1>My Blog</h1>
        <?foreach($articles as $article):?>
            <h3><?=$article?></h3>
        <?endforeach?>
    </body>
</html>