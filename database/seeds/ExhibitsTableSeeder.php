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
    }
}
