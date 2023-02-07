<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Contact;
use App\Models\HomeGallery;
use App\Models\Lote;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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

        $categories = [
            ['description' =>  'Vacas preñadas', 'image' =>   'categories_u/g5MJYJT5QSFAF8Z18BgTsdOENgiYOJVo3SWIu6Oq.jpg'],
            ['description' =>    "Vacas con crias", 'image' =>  'categories_u/k52Th6mbjtrwsxxT2b50FgROIGnSAPl9HCex0zJi.jpg'],
            ['description' =>    "Desmamantes", 'image' =>  'categories_u/PCjUAHrwvAwlBS2m295kFqwhiLzINYZBrcAvArzE.jpg'],
            ['description' =>   "Toretones", 'image' =>  'categories_u/ZqUG0dzl2WnK97QaaEBn6mgTw2as74taYTpjyzaA.jpg'],
            ['description' =>   "vaquillas", 'image' =>  'categories_u/WBX5IzRi8raJ8OeHTDZvCaIyei02u8AxiEwseaQs.jpg']
        ];




        foreach ($categories as $c)
            Category::create($c);
        // \App\Models\User::factory(10)->create();

   


        //lote
        Lote::create(
            [
                "id" => 1, "title" => "Reses", "description" => "Vacas pre\u00f1ada", "zone" => "Tte. Ochoa", "weight" => "353 kg promedio",
                "double_mark" => "Cbo 1", "quantity" => "94", "price" => "12.500 g/kg, -4%, iva incluido",  "comission" => "2,5%, iva incluido",
                "category_id" => 1, "front_photo" => "lots_u\/TRYztRCUa9JZvgAGAlVytFLoYDoqkprbfespgqTU.jpg",
                "video" => null, "draft" => 0, "created_at" => now(), "updated_at" => now()
            ]
        );


        Contact::factory( 50 )->create();
        
        Lote::factory(30)->create();


        User::factory()->create([
            'name' => 'sonia',
            'email' => 'stoledo@upload.com.py',
            'password' => Hash::make('123'),

            'role' => 'admin'
        ]);
    }
}
