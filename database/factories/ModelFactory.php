<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.

| Aqui você pode definir todas as suas fábricas do modelo. fábricas de modelo permite
| que você crie  modelos para testes e semei o seu
| banco de dados. Basta dizer a fábrica como um modelo padrão deve ser.
|
*/
/*-- User --*/
$factory->define(Delivery\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'avatar'=> str_random(5).'.jpg',
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

/*-- Category --*/
$factory->define(Delivery\Models\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word
        
    ];
});

/*-- product --*/

$factory->define(Delivery\Models\Product::class, function (Faker\Generator $faker) {
    return [
        
        'name' => $faker->word,
        'description'=>$faker->sentence,
        'price'=>$faker->numberBetween(10, 50)
        

        
    ];
});

/*  --- Client ---*/

$factory->define(Delivery\Models\Client::class, function (Faker\Generator $faker) {
    return [
        
        'phone' => $faker->phoneNumber,
        'address'=>$faker->address,
        'city'=>$faker->city,
        'state'=>$faker->state,
        'zipcode'=>$faker->postcode
        

        
    ];
});