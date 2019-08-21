<?php
    $user = getenv('REMOTE_USER');
    $temp = getenv('REMOTE_TEMP_USER');
    if( !empty($temp) ) {
        $user .= "/$temp";
    }
    $pass = getenv('REMOTE_PASSWORD');
    $imap = imap_open( "{localhost:143/imap/notls}INBOX", $user, $pass );
    $num_msg = imap_num_msg($imap);
    $folders = imap_listmailbox($imap, "{localhost:143}", "*");
    $errs = imap_errors($imap);
    imap_close($imap);
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            #logos { width: 2rem; }
            .zippy { font-weight: bold; }
            a#goBack {
                display: inline-block;
                font-size: 1.5rem;
                vertical-align: middle;
                padding: 0;
                border: .25rem solid black;
                border-radius: .5rem;
                background-color: lightgray;
                padding: .5rem;
            }
            a#goBack,
            a#goBack:visited,
            a#goBack:hover,
            a#goBack:active {
                text-decoration: none;
                color: black;
            }
        </style>
    </head>
    <body>
        <h1>
            <img id="logos" src="icon.png" />
            Example WebMail Application
        </h1>
        <span class="zippy">User:</span> <?php echo $user; ?><br />
        <span class="zippy">Pass:</span> <?php echo "REDACTED, lol"//$pass; ?>
        <br /><br />
        <span class="zippy">New messages:</span> <?php echo $num_msg ?><br />
        <span class="zippy">Inbox:</span><br />
        <?php
            if ($folders == false) {
                echo "Call to fetch INBOX list failed:<br />\n";
                echo "<pre>" . print_r($errs) . "</pre>";
            } else {
                foreach ($folders as $val) {
                    echo $val . "<br />\n";
                }
            }
        ?>
        <br /><br />
        <?php $token = getenv('cp_security_token'); ?>
        <a id="goBack" href="<?php echo $token; ?>/webmail/paper_lantern/index.html?mailclient=none" title="Return to cPanel WebMail Home">
            <img src="<?php echo $token; ?>/img-sys/cp-logo-RGB-v42015.svg" alt="cP" style="max-height: 24px"></img>
            WebMail Home
       </a>
       </button>
    </body>
</html>
