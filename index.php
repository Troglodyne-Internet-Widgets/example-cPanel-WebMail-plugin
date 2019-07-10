<!DOCTYPE html>
<html>
    <head>
        <style>
            #logos { width: 2rem; }
            .zippy { font-weight: bold; }
        </style>
    </head>
    <body>
        <h1>
            <img id="logos" src="icon.png" />
            Example WebMail Application
        </h1>
        <span class="zippy">User:</span> <?php echo getenv('REMOTE_USER'); ?>
    </body>
</html>
