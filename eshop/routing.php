<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('home'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('home', 'HomeController');

Utils::addRoute('about', "AboutController");

Utils::addRoute('shop', "ShopController");
Utils::addRoute('setFilter', 'ShopController');
Utils::addRoute('addProduct', 'ShopController', ["Employee"]);
Utils::addRoute('addBrand', 'ShopController', ["Employee"]);

Utils::addRoute('account', "AccountController", ["Admin", "Employee", "Customer"]);
Utils::addRoute('updateAccount', "AccountController");

Utils::addRoute('cart', 'CartController');
Utils::addRoute('addToCart', "CartController");
Utils::addRoute('removeFromCart', 'CartController');
Utils::addRoute('forceRemoveFromCart', 'CartController');
Utils::addRoute('doCheckout', "CartController");

Utils::addRoute('register', 'RegistrationController');
Utils::addRoute('registration', 'RegistrationController');

Utils::addRoute('login', 'LoginController');
Utils::addRoute('logout', 'LoginController');
Utils::addRoute('verify', 'LoginController');

Utils::addRoute('tools', 'ToolsController', ["Admin"]);
Utils::addRoute('changeRole', 'ToolsController', ["Admin"]);
Utils::addRoute('changeActivity', 'ToolsController', ["Admin"]);
Utils::addRoute('search', 'ToolsController', ["Admin"]);

