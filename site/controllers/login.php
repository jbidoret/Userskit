<?php

return function($kirby) {

  if($kirby->user()) go('/');

  $error = null;

  if($kirby->request()->is('POST') and get('login')) {

    try {
      if($username = get('username') and $password = get('password')) {
        $user = $kirby->user($username);
        if($user and $user->login($password)) {
          // redirect to the homepage
          // or any other page
          go();
        } else {
          $error = t('No user is registered with this email address.');
        }
      }
    } catch(Exception $e) {
    	$error = tt('Password invalid. Reset your password ?', ['resetUrl' => url('account/reset')]);
    }

  }

  return compact('error');
};