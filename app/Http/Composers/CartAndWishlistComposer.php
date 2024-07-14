<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Session;


class CartAndWishlistComposer
{
	
	public function compose(View $view)
	{
		$cartItems = Session::get('cart', []);
        $cartItemCount = count($cartItems);

        $wishlistItems = Session::get('wishlist', []);
        $wishlistItemCount = count($wishlistItems);

        $view->with('cartItemCount', $cartItemCount)
        	 ->with('wishlistItemCount', $wishlistItemCount);
	}
}