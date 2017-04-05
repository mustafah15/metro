<?php

use Illuminate\Database\Seeder;
use App\Node;
use App\Line;

class NodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Node::firstOrCreate(['name'=>'Helwan','ar_name'=>'حلوان','description'=>'first line start station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Ain Helwan','ar_name'=>'عين حلوان','description'=>'first line second station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Helwan University','ar_name'=>'جامعه حلوان','description'=>'first line third station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Wadi Hof','ar_name'=>'وادى حوف ','description'=>'first line fourth station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Hadayek Helwan','ar_name'=>'حدائق حلوان','description'=>'first line fifth station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'El-Maasara','ar_name'=>'المعصرة','description'=>'first line sixth station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Tora El-Asmant','ar_name'=>'طره الاسمنت','description'=>'first line seventh station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Kozzika', 'ar_name'=>'كوتسيكا','description'=>'first line 8th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Tora El-Balad', 'ar_name'=>'طره البلد','description'=>'first line 9th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Sakanat El-Maadi', 'ar_name'=>'ثكنات المعادى','description'=>'first line 10th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Maadi', 'ar_name'=>' المعادى','description'=>'first line 11th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Hadayek El-Maadi', 'ar_name'=>'حدائق المعادى ', 'description' => 'first line 12th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Dar El-Salam' , 'ar_name'=>'دار السلام', 'description' => 'first line 13th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'El-Zahraa\'	' , 'ar_name'=>'الزهراء', 'description' => 'first line 14th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Mar Girgis' , 'ar_name'=>'مار جرجس', 'description' => 'first line 15th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'El-Malek El-Saleh' , 'ar_name'=>'الملك الصالح', 'description' => 'first line 16th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Al-Sayeda Zeinab' , 'ar_name'=>'السيدة زينب', 'description' => 'first line 17th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Saad Zaghloul' , 'ar_name'=>'سعد زغلول', 'description' => 'first line 18th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Sadat' , 'ar_name'=>'السادات', 'description' => 'first line 19th station'])
            ->lines()->attach([1,2]);

        Node::firstOrCreate(['name'=>'Nasser' , 'ar_name'=>'جمال عبدالناصر', 'description' => 'first line 20th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Orabi' , 'ar_name'=>'عرابى', 'description' => 'first line 21th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Al-Shohadaa' , 'ar_name'=>'الشهداء', 'description' => 'first line 22th station'])
            ->lines()->attach([1,2]);

        Node::firstOrCreate(['name'=>'Ghamra' , 'ar_name'=>'غمرة', 'description' => 'first line 23th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'El-Demerdash' , 'ar_name'=>'الدمرداش', 'description' => 'first line 24th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Manshiet El-Sadr' , 'ar_name'=>'منشية الصدر', 'description' => 'first line 25th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Kobri El-Qobba' , 'ar_name'=>'كوبري القبة', 'description' => 'first line 26th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Hammamat El-Qobba' , 'ar_name'=>'حمامات القبة', 'description' => 'first line 27th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Saray El-Qobba	' , 'ar_name'=>'سراى القبة', 'description' => 'first line 28th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Hadayeq El-Zaitoun	' , 'ar_name'=>'حدائق الزيتون', 'description' => 'first line 29th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Helmeyet El-Zaitoun' , 'ar_name'=>'حلمية الزيتون', 'description' => 'first line 30th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'El-Matareyya' , 'ar_name'=>'المطرية', 'description' => 'first line 31th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Ain Shams' , 'ar_name'=>'عين شمس', 'description' => 'first line 32th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'Ezbet El-Nakhl	' , 'ar_name'=>'عزبة النخل', 'description' => 'first line 33th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'El-Marg' , 'ar_name'=>'المرج', 'description' => 'first line 34th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['name'=>'New El-Marg' , 'ar_name'=>'المرج الجديدة', 'description' => 'first line 35th station'])
            ->lines()->attach([1]);
        //Second Lines stations
        Node::firstOrCreate(['name'=>'El-Mounib' , 'ar_name'=>'المنيب', 'description' => 'second line first station'])->lines()->attach([2]);
        Node::firstOrCreate(['name'=>'Sakiat Mekki' , 'ar_name'=>'ساقية مكى ', 'description' => 'second line second station'])->lines()->attach([2]);
        Node::firstOrCreate(['name'=>'Omm El-Misryeen' , 'ar_name'=>'أم المصريين', 'description' => 'second line third station'])->lines()->attach([2]);
        Node::firstOrCreate(['name'=>'El-Giza' , 'ar_name'=>'الجيزة', 'description' => 'second line fourth station'])->lines()->attach([2]);
        Node::firstOrCreate(['name'=>'Faisal' , 'ar_name'=>'فيصل', 'description' => 'second line fifth station'])->lines()->attach([2]);
        Node::firstOrCreate(['name'=>'Cairo University' , 'ar_name'=>'جامعة القاهره', 'description' => 'second line 6th station'])->lines()->attach([2]);
        Node::firstOrCreate(['name'=>'Bohooth' , 'ar_name'=>'البحوث', 'description' => 'second line 7th station'])->lines()->attach([2]);
        Node::firstOrCreate(['name'=>'Dokki' , 'ar_name'=>'الدقي', 'description' => 'second line 8th station'])->lines()->attach([2]);
        Node::firstOrCreate(['name'=>'Opera' , 'ar_name'=>'الأوبرا', 'description' => 'second line 9th station'])->lines()->attach([2]);
        Node::firstOrCreate(['name'=>'Mohamed Naguib' , 'ar_name'=>'محمد نجيب', 'description' => 'second line 11th station'])->lines()->attach([2]);
        Node::firstOrCreate(['name'=>'Attaba' , 'ar_name'=>'العتبة', 'description' => 'second line 12th station'])->lines()->attach([2,3]);
        Node::firstOrCreate(['name'=>'Masarra' , 'ar_name'=>'مسرة', 'description' => 'second line 13th station'])->lines()->attach([2]);
        Node::firstOrCreate(['name'=>'Rod El-Farag' , 'ar_name'=>'روض الفرج', 'description' => 'second line 14th station'])->lines()->attach([2]);
        Node::firstOrCreate(['name'=>'St. Teresa' , 'ar_name'=>'سانتا تريزا	', 'description' => 'second line 15th station'])->lines()->attach([2]);
        Node::firstOrCreate(['name'=>'Khalafawy' , 'ar_name'=>'الخلفاوي', 'description' => 'second line 16th station'])->lines()->attach([2]);
        Node::firstOrCreate(['name'=>'Mezallat' , 'ar_name'=>'المظلات', 'description' => 'second line 17th station'])->lines()->attach([2]);
        Node::firstOrCreate(['name'=>'Kolleyyet El-Zeraa' , 'ar_name'=>'كلية الزراعة', 'description' => 'second line 18th station'])->lines()->attach([2]);
        Node::firstOrCreate(['name'=>'Shubra El-Kheima' , 'ar_name'=>'شبرا الخيمة', 'description' => 'second line 19th station'])->lines()->attach([2]);

        // third line stations 
    }
}
