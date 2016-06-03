<?php namespace App\Controllers;

use App\Controllers\Controller;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Order;
use Cart;

class HomeController extends Controller {

	public function getIndex(Request $request, Application $app){
		return view('home', ['products' => Product::all()]);
	}

	public function show(Request $request, Application $app, $id){
		return view('orders/show', ['order' => Order::find($id)]);
	}

	public function orders(Request $request, Application $app){
		return view('orders/orders', ['orders' => Order::all()]);
	}	

	public function shipping(Request $request, Application $app, $id){
		$order = Order::find($id);
		$order->shipped = '1';
		$order->save();
		return view('orders/orders', ['orders' => Order::all()]);
	}	

	public function getLogout(Application $app){
		session_destroy();

		return $app->redirect('/');
	}

}