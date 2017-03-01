<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['namespace' => 'Application'],  function() {
	Route::get('app', [
		'as' => 'admin',
		'uses' => 'AppController@index'
	]);
});

Route::group(['namespace' => 'Application', 'prefix' => 'app'], function () {
	//Home route
	Route::get('dashboard', [
		'as' => 'homeDashboard',
		'uses' => 'AppController@dashboard'
	]);

	Route::get('store', [
		'as' => 'getStoreProduct',
		'uses' => 'StockController@getStoreProduct'
	]);

	Route::post('store', [
		'as' => 'postStoreProduct',
		'uses' => 'StockController@postStoreProduct'
	]);

	Route::post('autocomplete', [
		'as' => 'autocomplete',
		'uses' => 'StockController@autocomplete'
	]);

	Route::post('ajax_live_validator', [
		'as' => 'ajax_live_validator',
		'uses' => 'StockController@ajaxLiveValidator'
	]);

});

Route::group(['namespace'	=> 'Application'], function() {
	// Report routes

	Route::get('daily_sales_report', [
		'as'	=> 'u_sales_report',
		'uses'	=> 'ReportController@dailySalesReport'
	]);
	Route::get('imei_capture', [
		'as'	=> 'u_imei_capture',
		'uses'	=> 'ReportController@imeiCapture'
	]);
	Route::get('ph_cash_count', [
		'as'	=> 'u_ph_cash_count',
		'uses'	=> 'ReportController@cashCount'
	]);
	Route::get('pod', [
		'as'	=> 'u_pod',
		'uses'	=> 'ReportController@pod'
	]);
	Route::get('performance', [
		'as'	=> 'u_performance',
		'uses'	=> 'ReportController@performance'
	]);
	Route::get('sim_selling_stragt', [
		'as'	=> 'u_stragt',
		'uses'	=> 'ReportController@stragtSim'
	]);
	Route::get('stock_Report', [
		'as'	=> 'u_stock_report',
		'uses'	=> 'ReportController@stockToDateReport'
	]);
	Route::get('t_selling_Device', [
		'as'	=> 'u_t_selling_device',
		'uses'	=> 'ReportController@TpSellingDevice'
	]);
	Route::get('vouch_srl_dlvr', [
		'as'	=> 'u_vouch_dlvr',
		'uses'	=> 'ReportController@vouchSrlDlvr'
	]);

	// Sales Routes

	Route::get('order', [
		'as'	=> 'u_order',
		'uses'	=> 'SalesController@order'
	]);
	Route::post('order_trait', [
		'as'	=> 'u_order_trait',
		'uses'	=> 'SalesController@orderTrait'
	]);
	Route::get('del_order', [
		'as'	=> 'u_del_order',
		'uses'	=> 'SalesController@delOrder'
	]);
	Route::get('delivery', [
		'as'	=> 'u_delivery',
		'uses'	=> 'SalesController@delivery'
	]);
	Route::post('delivery_trait', [
		'as'	=> 'u_delivery_trait',
		'uses'	=> 'SalesController@deliveryTrait'
	]);
	Route::get('stock_return', [
		'as'	=> 'u_stock_return',
		'uses'	=> 'SalesController@stockReturn'
	]);
	Route::post('stock_return_trait', [
		'as'	=> 'u_stock_return_trait',
		'uses'	=> 'SalesController@stockReturnTrait'
	]);
	Route::get('invoice', [
		'as'	=> 'u_invoice',
		'uses'	=> 'SalesController@invoice'
	]);
	Route::post('invoice_trait', [
		'as'	=> 'u_invoice_trait',
		'uses'	=> 'SalesController@invoiceTrait'
	]);
	Route::get('reverse_invoicing', [
		'as'	=> 'u_reverse_invoicing',
		'uses'	=> 'SalesController@reverseInvoicing'
	]);
	Route::post('reverse_invoice', [
		'as'	=> 'u_reverse_invoice',
		'uses'	=> 'SalesController@reverseInvoice'
	]);
	Route::get('invoice_list', [
		'as'	=> 'u_invoice_list',
		'uses'	=> 'SalesController@invoiceList'
	]);

	// Stock routes

	Route::get('store_product', [
		'as'	=> 'u_store_product',
		'uses'	=> 'StockController@addProduct'
	]);
	Route::post('add_product', [
		'as'	=> 'u_add_product',
		'uses'	=> 'StockController@saveProduct'
	]);
	Route::get('allocation', [
		'as'	=> 'u_allocation',
		'uses'	=> 'StockController@productAllocation'
	]);
	Route::post('p_allocation', [
		'as'	=> 'u_p_allocation',
		'uses'	=> 'StockController@pAllocation'
	]);
	Route::get('stock_movement', [
		'as'	=> 'u_stock_movement',
		'uses'	=> 'StockController@stockMovement'
	]);
	Route::get('product_list', [
		'as'	=> 'u_product_list',
		'uses'	=> 'StockController@productList'
	]);

	// Account routes

	Route::get('account', [
		'as'	=> 'u_account',
		'uses'	=> 'AccountController@account'
	]);
	Route::post('account', [
		'as'	=> 'u_search',
		'uses'	=> 'AccountController@account'
	]);
	Route::get('add_account', [
		'as'	=> 'u_add_account',
		'uses'	=> 'AccountController@addAccount'
	]);
	Route::post('record_account', [
		'as'	=> 'u_record_account',
		'uses'	=> 'AccountController@recordAccount'
	]);
	Route::get('customers_list', [
		'as'	=> 'u_customers_list',
		'uses'	=> 'AccountController@customersList'
	]);
});

// Auth routes
Route::controllers([

	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);

