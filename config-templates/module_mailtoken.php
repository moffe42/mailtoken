<?php
$config = array(
    'admin.name' => 'APP Admin',
    'admin.email' => 'admin@example.org',

    // Token lifetime in seconds
    'token.lifetime' => 3600*24,

    // Content of token mail
    'email' => array(
        'en' => array(
            'body' => '
                <html>
                <head>
                <title>APP token</title>
                </head>
                <body>
                <p>To login to APP click the following link:</p>
                <a href="%RETURNURL%?token=%TOKEN%&source=mailtoken">%RETURNURL%?token=%TOKEN%&source=mailtoken</a>
                <p>If the link does not work, please try to copy the link
                directly into your browsers address bar.</p>
                <p>In case of problems contact the Admin of example.org.</p>
                <br />
                <p>Best regards</p>
                <p>APP Admin</p>
                <p>admin@example.org</p>
                </body>
                </html>',
            'headers' => 'MIME-Version: 1.0' . "\r\n".
                'Content-type: text/html; charset=iso-8859-1' . "\r\n".
                'From: APP <no-reply@example.org>' . "\r\n" .
                'Reply-To: Admin <admin@example.org>' . "\r\n" .
                'X-Mailer: PHP/' . phpversion(),
            'subject' => 'APP: Login token',
        ),
        'da' => array(
            'body' => '
                <html>
                <head>
                <title>APP token</title>
                </head>
                <body>
                <p>For at logge ind i APP, klik p&aring; linket:</p>
                <a href="%RETUENURL%?token=%TOKEN%&source=mailtoken">%RETURNURL%?token=%TOKEN%&source=mailtoken</a>
                <p>Hvis det ikke virker, pr&oslash;v at kopiere linket til
                adressefeltet i din browser.</p>
                <p>I tilf&aelig;lde af problemer med APP, kontakt Admin fra example.org.</p>
                <br />
                <p>Venlig hilsen</p>
                <p>APP Admin</p>
                <p>admin@example.org</p>
                </body>
                </html>',
            'headers' => 'MIME-Version: 1.0' . "\r\n".
                'Content-type: text/html; charset=iso-8859-1' . "\r\n".
                'From: APP <no-reply@example.org>' . "\r\n" .
                'Reply-To: Admin <admin@example.org>' . "\r\n" .
                'X-Mailer: PHP/' . phpversion(),
            'subject' => 'APP: Login token',
        ),
    ),
);
