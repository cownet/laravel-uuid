[![Latest Stable Version](https://poser.pugx.org/cownet/laravel-uuid/v/stable)](https://packagist.org/packages/cownet/laravel-uuid)
[![Total Downloads](https://poser.pugx.org/cownet/laravel-uuid/downloads)](https://packagist.org/packages/cownet/laravel-uuid)
[![Travis CLI](https://travis-ci.org/cownet/laravel-uuid.svg?branch=master)](https://travis-ci.org/cownet/laravel-uuid)
[![License](https://poser.pugx.org/cownet/laravel-uuid/license)](https://packagist.org/packages/cownet/laravel-uuid)

# Laravel UUID

Laravel extension for UUID use in model. 
This library is a wrapper that allows [WebPatser UUID](https://packagist.org/packages/webpatser/laravel-uuid) library 
to auto-integrate within Laravel eloquent model.

# Installation

Using [composer](https://packagist.org/packages/cownet/laravel-uuid)

`composer require cownet/laravel-uuid` 

# Setup

Change model namespace from 

`use Illuminate\Database\Eloquent\Model;`

To

`use Cownet\Laravel\Uuid\Model;`

To enable UUID in your model, as per Laravel's documentation, apply `public $incrementing = false;` on your model
and it will have UUID support instead of auto incrementing.

