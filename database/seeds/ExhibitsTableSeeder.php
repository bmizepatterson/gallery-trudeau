<?php

use App\Exhibit;
use App\User;
use Illuminate\Database\Seeder;

class ExhibitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ben = User::where('email', 'bmizepatterson@gmail.com')->firstOrFail();
        $bobby = User::where('email', 'bobbybob@gmail.com')->firstOrFail();
        $bobbert = User::where('email', 'bobbertbob@gmail.com')->firstOrFail();
        $bonnie = User::where('email', 'bonniebobbington@gmail.com')->firstOrFail();
        $boris = User::where('email', 'borisbobford@gmail.com')->firstOrFail();
        $billy = User::where('email', 'billybobbly@gmail.com')->firstOrFail();
        $bongo = User::where('email', 'bongobor@gmail.com')->firstOrFail();

        // Bobby's exhibits
        $e1 = new Exhibit;
        $e1->user_id = $bobby->id;
        $e1->title = "Justin Trudeau in Lima, Peru";
        $e1->year = "2018";
        $e1->artist = "Presidencia de la República Mexicana";
        $e1->url = "https://upload.wikimedia.org/wikipedia/commons/a/a9/Justin_Trudeau_in_Lima%2C_Peru_-_2018_%2841507133581%29_%28cropped%29.jpg";
        $e1->description = "Justin Trudeau with Enrique Peña Nieto in Lima, Peru";
        $e1->save();

        $e2 = new Exhibit;
        $e2->user_id = $bobby->id;
        $e2->title = "'I inherited her need to connect emotionally'";
        $e2->year = "2014";
        $e2->artist = "Shannon Proudfoot";
        $e2->url = "https://www.macleans.ca/wp-content/uploads/2016/06/MAC_110_1971_PORTRAIT_YEAR.jpg";
        $e2->description = "From his birth on Christmas Day in 1971, while his father was prime minister, to his current occupancy of that office himself, Justin Trudeau has lived much of his life in the public eye—and, specifically, in front of the camera. The life moments that are normally captured only in private, blurry snapshots tucked away in some drawer or album have instead, in Justin’s life, been among the images of a country’s political history.";
        $e2->save();

        $e3 = new Exhibit;
        $e3->user_id = $bobby->id;
        $e3->title = "Trudeau at the 2006 leadership convention";
        $e3->year = "2006";
        $e3->artist = "ycanada_news";
        $e3->url = "https://www.macleans.ca/wp-content/uploads/2016/06/MAC_110_1971_PORTRAIT_YEAR.jpg";
        $e3->description = "From his birth on Christmas Day in 1971, while his father was prime minister, to his current occupancy of that office himself, Justin Trudeau has lived much of his life in the public eye—and, specifically, in front of the camera. The life moments that are normally captured only in private, blurry snapshots tucked away in some drawer or album have instead, in Justin’s life, been among the images of a country’s political history.";
        $e3->save();
    }
}
