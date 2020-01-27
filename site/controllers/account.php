<?php

return function ($kirby) {

  if(!$kirby->user()) go('login');

  	$error = null;
  	$success = null;

	if($kirby->request()->is('POST') and get('update')) {

		$data = [
			'name'  => get('name'),
			'email' => get('email'),
		];

		$rules = [
			'name'  => array('required'),
			'email' => array('required', 'email'),
		];

		$messages = [
			'name'  => t('Please, enter a valid name.'),
			'email' => t('Please, enter a valid email address.'),
		];

		if($invalid = invalid($data, $rules, $messages)) {
			$error = $invalid;
		} else {

			try {

				$kirby->user()->update([
					'name'  => $kirby->user()->changeName($data['name']),
					'email' => $kirby->user()->changeEmail($data['email']),
				]);

				$success = t('Your informations has been successfully updated.');
				$data = array();

			} catch(Exception $e) {

				$failed = $e->getMessage();

			}

		}

	}

	return compact('error', 'data', 'success', 'failed');
};