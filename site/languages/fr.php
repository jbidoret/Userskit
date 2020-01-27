<?php

return [
    'code' => 'fr',
    'default' => false,
    'direction' => 'ltr',
    'locale' => 'fr_FR',
    'name' => 'Français',
    'translations' => [
        // common
        'label.title.required' => 'requis',
        'Password' => 'Mot de passe',
        'Full name' => 'Nom',
        'Email' => 'E-mail',
        'Required fields.' => 'Champs requis.',
        'Honeypot' => 'Honeypot',
        'Create Account' => 'Créer un compte',        
        'Retype your password' => 'Saisissez à nouveau votre mot de passe',
        // templates/account.php
        'Successfully updated' => '🎉 Mis à jour réussie 🎉',
        'Save' =>  'Enregistrer',
        'Change password?' => 'Changer de mot de passe ?',
        'Delete your account?' => 'Supprimer votre compte ?',
        // templates/delete.php
        'Account deleted successfully' => '🎉 Compte supprimé 🎉',
        'We’re sorry to see you go.' => 'Nous sommes désolés de vous voir partir.',
        'Account deletion is <strong>final</strong>.<br />There will be no way to restore your account.' => 'La suprression d’un compte est <strong>définitive</strong>.<br />Il n’existe aucun moyen de le restaurer.',
        'I am fully aware of what I am doing.' => 'Je suis pleinement conscient de ce que je fais.',
        'Delete my account' => 'Supprimer mon compte',
        'Never mind, keep my account!' => 'Peu importe, gardez mon compte !',
        // templates/login.php 
        'Forgot password ?' => 'Mot de passe oublié ?',
        'Not a member? Sign up now' => 'Pas encore membre ? <a href="{signupUrl}">Enregistrez-vous maintenant</a>',
        // templates/password.php 
        'New password' => 'Nouveau mot de passe',
        'Back to account' => 'Retour au compte',
        'Change password' => 'Changer de mot de passe',
        // templates/registrationbyemail.php
        'Successful registration' => '🎉 Enregistrement réussi 🎉',
        'You are a member? Sign in' => 'Déjà membre ? <a href="{loginUrl}">Identifiez-vous</a>',
        // templates/reset.php
        'Reset successfully' => '🎉 Réinitialisation réussie 🎉',
        'Send Instructions' => 'Envoyer les instructions',
        'Email Address' => 'Adresse e-mail',
        // templates/signup.php
        'Minimum 8 characters.' => '8 caractères minimum.',
        'Web site' => 'Site web',
        // E-mails
        'Hi Name,' => 'Bonjour {Name},',
        'Activate my account' => '<a href="{tokenUrl}" target="_blank">Activer le compte</a>',
        'Active link: tokenUrl' => 'Activer le compte : {tokenUrl}',
        'Reset my password' => '<a href="{tokenUrl}" target="_blank">Réinitialiser le mot de passe</a>',
        'Reset your password: tokenUrl' => 'Réinitialiser le mot de passe : {tokenUrl}',
        // snippets/menu.php
        'Account' => 'Compte',
        'Panel' => 'Panel',
        'Logout' => 'Déconnexion',
        'Sign in' => 'Connexion',
        'Sign up' => 'Enregistrement',
        'Activate by email' => 'Activer par e-mail',
        // controllers
        'Please, enter a valid name.' => 'Merci de saisir un nom valide',
        'Please, enter a valid email address.' => 'Merci de saisir une adresse e-mail valide',
        'Your informations has been successfully updated.' => 'Vos informations ont été mises à jour avec succès.',
        'Your account has been successfully deleted.' => 'Votre compte a bien été supprimé.',
        'Please note, passwords must be identical!' => 'Les mots de passe doivent être identiques',
        'No user is registered with this email address.' => 'Aucun utilisateur n’existe avec cette adresse e-mail',
        'Password invalid. Reset your password ?' => 'PMot de passe invalide.<br /><a href="{resetUrl}">Réinitialiser le mot de passe ?</a>',
        'Your passwords have been changed successfully.' => 'Motre mot de passe a bien été modifié.',
        'Thank you for registering on siteHost. Go to the link below to activate your account and choose your password.' => 'Merci de votre enregistrement sur {siteHost}. Accèdez au lien ci-dessous pour activer votre compte et choisir votre mot de passe.',
        'Your account has been created!<br />You will receive an email to activate it.' => 'Votre compte a bien été créé !<br />Vous recevrez un e-mail pour l’activer.',
        'We were unable to send your account verification email. Contact the store owner directly to activate your account.' => 'Nous n’avons pas pu vous envoyer d’e-mail de vérification. Contactez-nous directement pour activer votre compte.',
        'Someone (hopefully it was you) asked us to reset the password for your siteHost account. Click on the button below to get there. If you have not asked to reset your password, skip this message!' => 'Quelqu’un (vous ?) a effectué une demande de réinitialisation de mot de passe sur {siteHost}. Cliquez sur le lien ci-dessous pour y accéder. Si vous n’avez pas effectué cette demande, merci d’ignorer ce message !',
        'You will receive an email with instructions to reset your password.' => 'You will receive an email with instructions to reset your password.',
        'We were unable to send your account verification email. Please try again later.' => 'Nous n’avons pas pu vous envoyer d’e-mail de vérification. Merci de ré-essayer ultérieurement.',
        'No account corresponding to the email.' => 'Aucun compte ne correspond à cette adresse e-mail',
        'Failed:<br /> Message' => 'Échec:<br /> {Message}',
        'Active your account.' => 'Activer le compte.',
        'Reset your password.' => 'Réinitialiser le mot de passe.',
        'The user "username" has been created' => 'Le compte utilisateur "{username}" a bien été créé',
        
    ]
];
