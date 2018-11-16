<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ben = new User;
        $ben->name = "Ben Patterson";
        $ben->email = "bmizepatterson@gmail.com";
        $ben->password = bcrypt('benpatterson');
        $ben->save();

        $bobby = new User;
        $bobby->name = "Bobby Bob";
        $bobby->email = "bobbybob@gmail.com";
        $bobby->password = bcrypt('secret');
        $bobby->save();

        $bobbert = new User;
        $bobbert->name = "Bobbert Bob";
        $bobbert->email = "bobbertbob@gmail.com";
        $bobbert->password = bcrypt('secret');
        $bobbert->save();

        $bonnie = new User;
        $bonnie->name = "Bonnie Bobbington";
        $bonnie->email = "bonniebobbington@gmail.com";
        $bonnie->password = bcrypt('secret');
        $bonnie->save();

        $boris = new User;
        $boris->name = "Boris Bobford";
        $boris->email = "borisbobford@gmail.com";
        $boris->password = bcrypt('secret');
        $boris->save();

        $billy = new User;
        $billy->name = "Billy Bobbly";
        $billy->email = "billybobbly@gmail.com";
        $billy->password = bcrypt('secret');
        $billy->save();

        $bongo = new User;
        $bongo->name = "Bongo Bor";
        $bongo->email = "bongobor@gmail.com";
        $bongo->password = bcrypt('secret');
        $bongo->save();
    }
}
