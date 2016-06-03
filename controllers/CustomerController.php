<?php namespace App\Controllers;

use App\Controllers\Controller;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Order;
use Cart;
class CustomerController extends Controller {

	public function customerAdd(Request $request, Application $app){
		return view('customer/add');
	}

	public function customerStore(Request $request, Application $app){


		$NewCustomer = Customer::create($request->request->all());
		$order = $NewCustomer->orders()->create(['amount' => Cart::total()]);
		$cart = Cart::get();

		foreach ($cart as $pro) {
			$order->products()->attach($pro->id, ['price' => $pro->price]);
		}
		
		if(isset($_SESSION['cart'])) {
			unset($_SESSION['cart']);
		}
		
		$_SESSION['msg'] = 'Thanks your order is registered, we will send you order as fast as possibele';

		return $app->redirect('/');
	}

}