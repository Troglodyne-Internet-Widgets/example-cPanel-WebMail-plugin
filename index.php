<!DOCTYPE html>
<html>
    <head>
        <style>
            #logos { width: 2rem; }
            .zippy { width: 7.5rem; font-weight: bold; display: inline-block; }
        </style>
    </head>
    <body>
        <h1>
            <img id="logos" src="icon.png" />
            Example WebMail Application
        </h1>
        <span class="zippy">User:</span>     <?php echo getenv('REMOTE_USER'); ?>
        <br />
        <span class="zippy">Password:</span> <?php echo getenv('REMOTE_PASSWORD'); ?>
    </body>
</html>
