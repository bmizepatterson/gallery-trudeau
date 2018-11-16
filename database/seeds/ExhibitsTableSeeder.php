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
        $e1->updated_at = now()->subMinutes(rand(1,60));
        $e1->created_at = now()->subHours(2);
        $e1->save();

        $e2 = new Exhibit;
        $e2->user_id = $bobby->id;
        $e2->title = "'I inherited her need to connect emotionally'";
        $e2->year = "2014";
        $e2->artist = "Shannon Proudfoot";
        $e2->url = "https://www.macleans.ca/wp-content/uploads/2016/06/MAC_110_1971_PORTRAIT_YEAR.jpg";
        $e2->description = "From his birth on Christmas Day in 1971, while his father was prime minister, to his current occupancy of that office himself, Justin Trudeau has lived much of his life in the public eye—and, specifically, in front of the camera. The life moments that are normally captured only in private, blurry snapshots tucked away in some drawer or album have instead, in Justin’s life, been among the images of a country’s political history.";
        $e2->updated_at = now()->subMinutes(rand(1,60));
        $e2->created_at = now()->subHours(2);
        $e2->save();

        $e3 = new Exhibit;
        $e3->user_id = $bobby->id;
        $e3->title = "Trudeau at the 2006 leadership convention";
        $e3->year = "2006";
        $e3->artist = "ycanada_news";
        $e3->url = "https://www.macleans.ca/wp-content/uploads/2016/06/MAC_110_1971_PORTRAIT_YEAR.jpg";
        $e3->description = "From his birth on Christmas Day in 1971, while his father was prime minister, to his current occupancy of that office himself, Justin Trudeau has lived much of his life in the public eye—and, specifically, in front of the camera. The life moments that are normally captured only in private, blurry snapshots tucked away in some drawer or album have instead, in Justin’s life, been among the images of a country’s political history.";
        $e3->updated_at = now()->subMinutes(rand(1,60));
        $e3->created_at = now()->subHours(2);
        $e3->save();


        // Boris Bobford's exhibits
        $e4 = new Exhibit;
        $e4->user_id = $boris->id;
        $e4->title = "The official portrait";
        $e4->url = "https://pm.gc.ca/sites/pm/files/media/pm_trudeau_600x683.jpg";
        $e4->description = "Justin Trudeau (born December 25, 1971) is Canada’s 23rd Prime Minister. He also serves as Minister of Youth.";
        $e4->updated_at = now()->subMinutes(rand(1,60));
        $e4->created_at = now()->subHours(2);
        $e4->save();

        $e5 = new Exhibit;
        $e5->user_id = $boris->id;
        $e5->title = "On the cover of Rolling Stone";
        $e5->year = "2017";
        $e5->artist = "Rolling Stone";
        $e5->url = "https://www.rollingstone.com/wp-content/uploads/2018/06/rolling-stone-justin-trudeau-cover-2017-3d7aab17-2daa-494f-ae91-9e1852456ba6.jpg";
        $e5->description = "Justin Trudeau was on the cover of Rolling Stone on July 26, 2017.";
        $e5->updated_at = now()->subMinutes(rand(1,60));
        $e5->created_at = now()->subHours(2);
        $e5->save();

        $e6 = new Exhibit;
        $e6->user_id = $boris->id;
        $e6->title = "Hunky Prime Minister Justin Trudeau is the JFK Jr. of Canada";
        $e6->year = "2015";
        $e6->artist = "Reed Tucker";
        $e6->url = "https://thenypost.files.wordpress.com/2015/10/trudeau_main1a.jpg";
        $e6->description = "He’s likely the first prime minister whose résumé includes time as a bungee and snowboard instructor, the first to have a tattoo on his biceps (the planet Earth inside a raven, a nod to the indigenous Haida people), and definitely the only world leader with a YouTube video demonstrating his party trick of falling down stairs.";
        $e6->updated_at = now()->subMinutes(rand(1,60));
        $e6->created_at = now()->subHours(2);
        $e6->save();


    }
}
