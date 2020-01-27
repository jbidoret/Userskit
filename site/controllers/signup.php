<?php

return function ($kirby) {

  if($kirby->user()) go('/');

  $error = null;
  $success = null;

	if($kirby->request()->is('POST') and get('registration')) {

    if(!empty(get('website'))) {
    	go('login');
    	exit;
    }

    try {
      $password = esc(get('password'));
      $validate = esc(get('validate'));

      if(v::same($password, $validate)) {

        $kirby->impersonate('kirby');
        $user = $kirby->users()->create([
          'name'      => esc(get('name')),
          'email'     => esc(get('email')),
          'password'  => esc(get('password')),
          'language'  => 'en',
          'role'      => 'editor'
        ]);

        $success = tt('The user "username" has been created', ['username' => $user->name()]);

      } else {

        $error = t('Please note, passwords must be identical!');

      }
    
    } catch(Exception $e) {
    
      $error = $e->getMessage();
    
    }

	}

	return compact('error', 'success');
};