<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs){
    $breadcrumbs->push('Menu', route('home'));
});

// Contact
Breadcrumbs::register('contact', function($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Contact', route('contact'));
});

// Orders
Breadcrumbs::register('orders', function($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Commandes', route('orders'));
});

// Shop
Breadcrumbs::register('shop', function($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Boutique', route('shop.index'));
});

// Cart
Breadcrumbs::register('cart', function($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Panier', route('cart.index'));
});

// Checkout
Breadcrumbs::register('checkout', function($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Paiement', route('checkout.index'));
});

// Confirmation
Breadcrumbs::register('confirmation', function($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Confirmation', route('checkout.success'));
});

// forgotPassword
Breadcrumbs::register('forgotPassword', function($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Mot de passe oublié', route('password.email'));
});

// resetPassword
Breadcrumbs::register('resetPassword', function($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Réinitialiser Mot de Passe', route('password.reset'));
});

// Shop > Product
Breadcrumbs::register('product', function($breadcrumbs, $product){
    $breadcrumbs->parent('shop');
    $breadcrumbs->push($product->name, route('shop.show', $product->slug));
});

// Login
Breadcrumbs::register('login', function($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Connexion', route('login'));
});

// Register
Breadcrumbs::register('register', function($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('S\'enregistrer', route('register'));
});