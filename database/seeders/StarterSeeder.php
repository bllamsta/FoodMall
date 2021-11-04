<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Category;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\Star;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StarterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(["name" => "Albert Flores", "username" => "albert", "password" => Hash::make("albert"), "email" => "albert@gmail.com"]);
        User::create(["name" => "Eleanor Pena", "username" => "eleanor", "password" => Hash::make("eleanor"), "email" => "eleanor@gmail.com"]);
        User::create(["name" => "Robert Fox", "username" => "robert", "password" => Hash::make("robert"), "email" => "robert@gmail.com"]);
        User::create(["name" => "Jacob Jones", "username" => "jacob", "password" => Hash::make("jacob"), "email" => "jacob@gmail.com"]);
        User::create(["name" => "Courtney Henry", "username" => "courtney", "password" => Hash::make("courtney"), "email" => "courtney@gmail.com"]);

        Role::create(["name" => "User"]);
        Role::create(["name" => "Administrator"]);
        Role::create(["name" => "Employee"]);
        Role::create(["name" => "Courier"]);

        RoleUser::create(["user_id" => 1, "role_id" => 1]);
        RoleUser::create(["user_id" => 2, "role_id" => 2]);
        RoleUser::create(["user_id" => 3, "role_id" => 3]);
        RoleUser::create(["user_id" => 4, "role_id" => 4]);
        RoleUser::create(["user_id" => 5, "role_id" => 4]);

        Address::create(["name" => "Rumah", "address" => "Jl. Bungur", "user_id" => 1]);
        Address::create(["name" => "Sekolah", "address" => "Jl. SMEAN 6", "user_id" => 1]);

        Category::create(["name" => "Sarapan Pagi", "image" => "img/sarapan.png"]);
        Category::create(["name" => "Daging Sapi", "image" => "img/sarapan.png"]);
        Category::create(["name" => "Ayam", "image" => "img/sarapan.png"]);
        Category::create(["name" => "Ikan", "image" => "img/sarapan.png"]);
        Category::create(["name" => "Minuman", "image" => "img/sarapan.png"]);
        Category::create(["name" => "Camilan", "image" => "img/sarapan.png"]);

        Product::create(["image" => "img/burger.png", "name" => "Egg and Cheese Muffin", "price" => 35000, "desc" => "Perpaduan bla bla bla", "category_id" => 1]);
        Product::create(["image" => "img/triple.png", "name" => "Triple Burger with Cheese", "price" => 35000, "desc" => "Perpaduan bla bla bla", "category_id" => 1]);
        Product::create(["image" => "img/cheese.png", "name" => "Cheese Burger", "price" => 35000, "desc" => "Perpaduan bla bla bla", "category_id" => 1]);

        Status::create(["name" => "ON CART"]);
        Status::create(["name" => "PENDING"]);
        Status::create(["name" => "COMPLETED"]);
        Status::create(["name" => "ON PROCESS"]);
        Status::create(["name" => "ON DELIVERY"]);
        Status::create(["name" => "DELIVERED"]);

        Payment::create(["name" => "Bank"]);
        Payment::create(["name" => "Ceriamart"]);
        Payment::create(["name" => "Cash"]);
        Payment::create(["name" => "OVO"]);

        Order::create(["user_id" => 1, "address_id" => 2, "payment_id" => 3, "product_id" => 1, "quantity" => 5, "invoice_code" => "INV_001", "status_id" => 1]);
        Order::create(["user_id" => 1, "address_id" => 2, "payment_id" => 3, "product_id" => 2, "quantity" => 5, "invoice_code" => "INV_001", "status_id" => 1]);
        Order::create(["user_id" => 1, "address_id" => 2, "payment_id" => 3, "product_id" => 3, "quantity" => 5, "invoice_code" => "INV_001", "status_id" => 1]);

        Star::create(["product_id" => 1, "user_id" => 1, "value" => 4]);
        Star::create(["product_id" => 1, "user_id" => 2, "value" => 5]);
        Star::create(["product_id" => 1, "user_id" => 3, "value" => 2]);
    }
}
