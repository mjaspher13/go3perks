<?php 

namespace App\Services;

use Auth;



class HUser
{
	public static function getRoleId () {
		$role;
		switch (Auth::user()->role) {
			case 1:
				$role = 'merchant_id';
				break;
			case 2:
				$role = 'customer_id';
				break;
			case 3:
				$role = 'agent_id';
				break;
		}
		return $role;
	}

	public static function getRole () {
		$role;
		switch (Auth::user()->role) {
			case 1:
				$role = 'merchant';
				break;
			case 2:
				$role = 'customer';
				break;
			case 3:
				$role = 'agent';
				break;
		}
		return $role;
	}

}
?>