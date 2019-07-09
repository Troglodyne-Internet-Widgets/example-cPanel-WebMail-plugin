<!DOCTYPE html>
<html>
    <head>
        <style>
            #logos { width: 2rem; }
            .ten   { width: 10rem; }
        </style>
    </head>
    <body>
        <h1>
            <img id="logos" src="icon.png" />
            Example WebMail Application
        </h1>
        <span class="ten">User:</span>     <?php echo getenv('REMOTE_USER'); ?>
        <span class="ten">Password:</span> <?php echo getenv('REMOTE_PASSWORD'); ?>
    </body>
</html>
