<?php

namespace Database\Seeders;

use App\Models\Documents\Documents;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vacancies\Vacancy;


use App\Models\Address;
use App\Models\Blog\Author;
use App\Models\Blog\Category as BlogCategory;
use App\Models\Blog\Post;
use App\Models\Comment;
use App\Models\Shop\Brand;
use App\Models\Shop\Category as ShopCategory;
use App\Models\Shop\Customer;
use App\Models\Shop\Order;
use App\Models\Shop\OrderItem;
use App\Models\Shop\Payment;
use App\Models\Shop\Product;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      // Clear images
      Storage::deleteDirectory('public');

      // Admin
      User::factory()->create([
          'name' => 'admin',
          'email' => 'admin@nfa.com',
          'password'=> '123456789'
      ]);
      $this->command->info('Admin user created.');

      // Shop
    //   $categories = ShopCategory::factory()->count(10)
    //       ->has(
    //           ShopCategory::factory()->count(3),
    //           'children'
    //       )->create();
    //   $this->command->info('Shop categories created.');

    //   $brands = Brand::factory()->count(10)
    //       ->has(Address::factory()->count(rand(1, 3)))
    //       ->create();
    //   $this->command->info('Shop brands created.');

    //   $customers = Customer::factory()->count(10)
    //       ->has(Address::factory()->count(rand(1, 3)))
    //       ->create();
    //   $this->command->info('Shop customers created.');

      //$products = Product::factory()->count(10)
        //  ->sequence(fn ($sequence) => ['shop_brand_id' => $brands->random(1)->first()->id])
          //->hasAttached($categories->random(rand(3, 6)), ['created_at' => now(), 'updated_at' => now()])
          //->has(
            //  Comment::factory()->count(rand(10, 20))
              //    ->state(fn (array $attributes, Product $product) => ['customer_id' => $customers->random(1)->first()->id]),
         // )
          //->create();
      //$this->command->info('Shop products created.');

      //Order::factory()->count()
        //  ->sequence(fn ($sequence) => ['shop_customer_id' => $customers->random(1)->first()->id])
          //->has(Payment::factory()->count(rand(1, 3)))
          //->has(
            //  OrderItem::factory()->count(rand(2, 5))
              //    ->state(fn (array $attributes, Order $order) => ['shop_product_id' => $products->random(1)->first()->id]),
             // 'items'
         // )
         // ->create();
     // $this->command->info('Shop orders created.');

      // Blog
      $blogCategories = BlogCategory::factory()->count(20)->create();
      $this->command->info('Blog categories created.');


              Post::factory()->count(5)
          ->create();
      $this->command->info('Blog authors and posts created.');
     //Documents
      Documents::factory(10)->create();
      $this->command->info('Documents Created');
     //Vacancies
      Vacancy::factory(10)->create();
      $this->command->info('Vacancy data added');

    //Player


    }
}
