<?php

return [
    'code' => 'en',
    'default' => true,
    'direction' => 'ltr',
    'locale' =>  'en_GB',
    'name' => 'English',
    'translations' => [
        // common
        'label.title.required' => 'required',
        'Password' => 'Password',
        'Full name' => 'Full name',
        'Email' => 'Email',
        'Required fields.' => 'Required fields.',
        'Honeypot' => 'Honeypot',
        'Create Account' => 'Create Account',        
        // templates/account.php
        'Successfully updated' => '🎉 Successfully updated 🎉',
        'Save' =>  'Save',
        'Change password?' => 'Change password?',
        'Delete your account?' => 'Delete your account?',
        // templates/delete.php
        'Account deleted successfully' => '🎉 Account deleted successfully 🎉',
        'We’re sorry to see you go.' => 'We’re sorry to see you go.',
        'Account deletion is <strong>final</strong>.<br />There will be no way to restore your account.' => 'Account deletion is <strong>final</strong>.<br />There will be no way to restore your account.',
        'Retype your password' => 'Retype your password',
        'I am fully aware of what I am doing.' => 'I am fully aware of what I am doing.',
        'Delete my account' => 'Delete my account',
        'Never mind, keep my account!' => 'Never mind, keep my account!',
        // templates/login.php 
        'Forgot password ?' => 'Forgot password ?',
        'Not a member? Sign up now' => 'Not a member? <a href="{signupUrl}">Sign up now</a>',
        // templates/password.php 
        'New password' => 'New password',
        'Retype your password' => 'Retype your password',
        'Back to account' => 'Back to account',
        'Change password' => 'Change password',
        // templates/registrationbyemail.php
        'Successful registration' => '🎉 Successful registration 🎉',
        'You are a member? Sign in' => 'You are a member? <a href="{loginUrl}">Sign in</a>',
        // templates/reset.php
        'Reset successfully' => '🎉 Reset successfully 🎉',
        'Send Instructions' => 'Send Instructions',
        'Email Address' => 'Email Address',
        // templates/signup.php
        'Minimum 8 characters.' => 'Minimum 8 characters.',
        'Web site' => 'Web site',
        // E-mails
        'Hi Name,' => 'Hi {Name},',
        'Activate my account' => '<a href="{tokenUrl}" target="_blank">Activate my account</a>',
        'Active link: tokenUrl' => 'Active link: {tokenUrl}',
        'Reset my password' => '<a href="{tokenUrl}" target="_blank">Reset my password</a>',
        'Reset your password: tokenUrl' => 'Reset your password: {tokenUrl}',
        // snippets/menu.php
        'Account' => 'Account',
        'Panel' => 'Panel',
        'Logout' => 'Logout',
        'Sign in' => 'Sign in',
        'Sign up' => 'Sign up',
        'Activate by email' => 'Activate by email',
        // controllers
        'Please, enter a valid name.' => 'Please, enter a valid name.',
        'Please, enter a valid email address.' => 'Please, enter a valid email address.',
        'Your informations has been successfully updated.' => 'Your informations has been successfully updated.',
        'Your account has been successfully deleted.' => 'Your account has been successfully deleted.',
        'Please note, passwords must be identical!' => 'Please note, passwords must be identical!',
        'No user is registered with this email address.' => 'No user is registered with this email address.',
        'Password invalid. Reset your password ?' => 'Password invalid.<br /><a href="{resetUrl}">Reset your password ?</a>',
        'Your passwords have been changed successfully.' => 'Your password have been changed successfully.',
        'Thank you for registering on siteHost. Go to the link below to activate your account and choose your password.' => 'Thank you for registering on {siteHost}. Go to the link below to activate your account and choose your password.',
        'Your account has been created!<br />You will receive an email to activate it.' => 'Your account has been created!<br />You will receive an email to activate it.',
        'We were unable to send your account verification email. Contact the store owner directly to activate your account.' => 'We were unable to send your account verification email. Contact us directly to activate your account.',
        'Someone (hopefully it was you) asked us to reset the password for your siteHost account. Click on the button below to get there. If you have not asked to reset your password, skip this message!' => 'Someone (hopefully it was you) asked us to reset the password for your {siteHost} account. Click on the button below to get there. If you have not asked to reset your password, skip this message!',
        'You will receive an email with instructions to reset your password.' => 'You will receive an email with instructions to reset your password.',
        'We were unable to send your account verification email. Please try again later.' => 'We were unable to send your account verification email. Please try again later.',
        'No account corresponding to the email.' => 'No account corresponding to the email.',
        'Failed:<br /> Message' => 'Failed:<br /> {Message}',
        'Active your account.' => 'Active your account.',
        'Reset your password.' => 'Reset your password.',
        'The user "username" has been created' => 'The user "{username}" has been created',
    ]
];
