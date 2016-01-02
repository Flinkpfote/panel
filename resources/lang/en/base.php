<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Base Pterodactyl Language
    |--------------------------------------------------------------------------
    |
    | These base strings are used throughout the front-end of Pterodactyl but
    | not on pages that are used when viewing a server. Those keys are in server.php
    |
    */

    'validation_error' => 'An error occured while validating the data you submitted:',

    'confirm' => 'Are you sure?',
    'failed' => 'These credentials do not match our records.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',
    'view_as_admin' => 'You are viewing this server listing as an admin. As such, all servers installed on the system are displayed. Any servers that you are set as the owner of are marked with a blue dot to the left of their name.',
    'server_name' => 'Server Name',
    'no_servers' => 'You do not currently have any servers listed on your account.',
    'form_error' => 'The following errors were encountered while trying to process this request.',
    'password_req' => 'Passwords must meet the following requirements: at least one uppercase character, one lowercase character, one digit, and be at least 8 characters in length.',
    'root_administrator' => 'Setting this to "Yes" gives a user full administrative access to PufferPanel.',

    'account' => [
        'totp_header' => 'Two-Factor Authentication',
        'totp_qr' => 'TOTP QR Code',
        'totp_enable_help' => 'It appears that you do not have Two-Factor authentication enabled. This method of authentication adds an additional barrier preventing unauthorized entry to your account. If you enable it you will be required to input a code generated on your phone or other TOTP supporting device before finishing your login.',
        'totp_apps' => 'You must have a TOTP supporting application (e.g Google Authenticator, DUO Mobile, Authy) to use this option.',
        'totp_enable' => 'Enable Two-Factor Authentication',
        'totp_disable' => 'Disable Two Factor Authentication',
        'totp_token' => 'TOTP Token',
        'totp_disable_help' => 'In order to disable TOTP on this account you will need to provide a valid TOTP token. Once validated TOTP protection on this account will be disabled.',
        'totp_checkpoint_help' => 'Please verify your TOTP settings by scanning the QR Code to the right with your phone\'s authenticator application, and then enter the 6 number code generated by the application in the box below. Press the enter key when finished.',
        'totp_enabled' => 'Your account has been enabled with TOTP verification. Please click the close button on this box to finish.',
        'totp_enabled_error' => 'The TOTP token provided was unable to be verified. Please try again.',

        'email_password' => 'Email Password',
        'update_user' => 'Update User',
        'delete_user' => 'Delete User',
        'update_email' => 'Update Email',
        'new_email' => 'New Email',
        'new_password' => 'New Password',
        'update_pass' => 'Update Password'

    ]

];
