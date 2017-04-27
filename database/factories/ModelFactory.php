<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
    // fake users
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'role' => $faker->word,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

       // fake menues

$factory->define(App\menue::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'title' => $faker->sentence,
        'type' => $faker->word,
        'type' => $faker->word,
        'descrition' => $faker->text,
        'sataus' => $faker->boolean,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'user_id' => $faker->NumberBetween($min = 1, $max = 100),
    ];
});


//                   // fake items

$factory->define(App\item::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'title' => $faker->sentence,
        'descrition' => $faker->text,
        'status' => $faker->boolean,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 5, $max = 10),
        'menue_id' => $faker->NumberBetween($min = 2, $max = 100),
        'user_id' => $faker->NumberBetween($min = 1, $max = 100),
    ];
});
  

                      // meals

$factory->define(App\meal::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'title' => $faker->sentence,
        'descrition' => $faker->text,
        'status' => $faker->boolean,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 5, $max = 10),
        'user_id' => $faker->NumberBetween($min = 1, $max = 100),
    ];
});
                // customer
$factory->define(App\customer::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'Email' => $faker->safeEmail,
         'address'=>$faker->sentence,
         'city'=>$faker->word,
         'phone'=>$faker->phoneNumber,
    ];
});
                // order

$factory->define(App\order::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'total' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 10, $max = 100),
        'status' => $faker->boolean,
        'cashIn' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 10, $max = 100),
        'payment' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 10, $max = 100),
        'changes' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 10, $max = 100),
        'customer_id' => $faker->NumberBetween($min = 1, $max = 10),
    ];
});




               // comments

$factory->define(App\comment::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'title' => $faker->sentence,
        'description' => $faker->text,
        'status' => $faker->boolean,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'rate' => $faker->NumberBetween($min = 506, $max = 530),
        'customer_id' => $faker->NumberBetween($min = 1, $max = 10),
        'order_id' => $faker->NumberBetween($min = 1, $max = 10),
    ];
});               


             ///      meal_item

$factory->define(App\mealItem::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'discount' => $faker->NumberBetween($min = 506, $max = 530),
        'meal_id'  => $faker->NumberBetween($min = 1, $max = 10),
        'item_id'  => $faker->NumberBetween($min = 1, $max = 10),
    ];
});


               // order item

$factory->define(App\orderItem::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'item_id'  => $faker->NumberBetween($min = 1, $max = 10),
        'order_id'  => $faker->NumberBetween($min = 1, $max = 10),
    ];
}); 


           // order_meal

$factory->define(App\orderMeal::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'meal_id'  => $faker->NumberBetween($min = 1, $max = 10),
        'order_id'  => $faker->NumberBetween($min = 1, $max = 10),
    ];
});  

                 // order_user


// user_id
// order_id
// type                          


$factory->define(App\orderUser::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'user_id'  => $faker->NumberBetween($min = 1, $max = 10),
        'order_id'  => $faker->NumberBetween($min = 1, $max = 10),
        'type'  =>$faker->sentence,
    ];
}); 