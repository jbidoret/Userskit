<?php

return function ($kirby) {

  if(!$kirby->user()) go('login');

	$error = null;
	$success = null;

	if($kirby->request()->is('POST') and get('delete')) {

		try {

	    $password = esc(get('password'));
	    $validate = esc(get('validate'));

	    if(v::same($password, $validate)) {

			  $kirby->user($kirby->user()->email())->delete();

			  $kirby->user()->logout();

		    $success = t('Your account has been successfully deleted.');

		  } else { // v::same

		    $error = t('Please note, passwords must be identical!');

		  }

		} catch(Exception $e) {

			$error = $e->getMessage();

		}

	}

	return compact('error', 'success');
};