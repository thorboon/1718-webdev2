<?php

use Illuminate\Database\Seeder;

use App\Auction;

class AuctionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Faker generated data via AuctionFactory for testing purposes
     *
     * @return void
     */
    public function run()
    {
        /*
         * Creates Faker generated Auctions attached with
         * new Users and Categories
         */
        factory(Auction::class)->create([
            'title' => 'Iphone 6s',
            'condition' => 'nieuw',
            'shipment' => 'bpost'
        ]);

        factory(Auction::class)->create([
            'title' => 'Samsung Galaxy s7',
            'condition' => 'oud',
            'shipment' => 'dhl'
        ]);

        factory(Auction::class)->create([
            'title' => 'OnePlus 4',
            'condition' => 'tweedehands',
            'shipment' => 'ophaalpunt'
        ]);

        factory(Auction::class, 7)->create();
    }
}
