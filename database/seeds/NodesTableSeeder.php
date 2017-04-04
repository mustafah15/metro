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

        Node::firstOrCreate(['id'=>'1','name'=>'Helwan','ar_name'=>'حلوان','description'=>'first line start station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'2','name'=>'Ain Helwan','ar_name'=>'عين حلوان','description'=>'first line second station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'3','name'=>'Helwan University','ar_name'=>'جامعه حلوان','description'=>'first line third station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'4','name'=>'Wadi Hof','ar_name'=>'وادى حوف ','description'=>'first line fourth station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'5','name'=>'Hadayek Helwan','ar_name'=>'حدائق حلوان','description'=>'first line fifth station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'6','name'=>'El-Maasara','ar_name'=>'المعصرة','description'=>'first line sixth station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'7','name'=>'Tora El-Asmant','ar_name'=>'طره الاسمنت','description'=>'first line seventh station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'8','name'=>'Kozzika', 'ar_name'=>'كوتسيكا','description'=>'first line 8th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'9','name'=>'Tora El-Balad', 'ar_name'=>'طره البلد','description'=>'first line 9th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'10','name'=>'Sakanat El-Maadi', 'ar_name'=>'ثكنات المعادى','description'=>'first line 10th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'11','name'=>'Maadi', 'ar_name'=>' المعادى','description'=>'first line 11th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'12','name'=>'Hadayek El-Maadi', 'ar_name'=>'حدائق المعادى ', 'description' => 'first line 12th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'13','name'=>'Dar El-Salam' , 'ar_name'=>'دار السلام', 'description' => 'first line 13th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'14','name'=>'El-Zahraa\'	' , 'ar_name'=>'الزهراء', 'description' => 'first line 14th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'15','name'=>'Mar Girgis' , 'ar_name'=>'مار جرجس', 'description' => 'first line 15th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'16','name'=>'El-Malek El-Saleh' , 'ar_name'=>'الملك الصالح', 'description' => 'first line 16th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'17','name'=>'Al-Sayeda Zeinab' , 'ar_name'=>'السيدة زينب', 'description' => 'first line 17th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'18','name'=>'Saad Zaghloul' , 'ar_name'=>'سعد زغلول', 'description' => 'first line 18th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'19','name'=>'Sadat' , 'ar_name'=>'السادات', 'description' => 'first line 19th station'])
            ->lines()->attach([1,2]);

        Node::firstOrCreate(['id'=>'20','name'=>'Nasser' , 'ar_name'=>'جمال عبدالناصر', 'description' => 'first line 20th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'21','name'=>'Orabi' , 'ar_name'=>'عرابى', 'description' => 'first line 21th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'22','name'=>'Al-Shohadaa' , 'ar_name'=>'الشهداء', 'description' => 'first line 22th station'])
            ->lines()->attach([1,2]);

        Node::firstOrCreate(['id'=>'23','name'=>'Ghamra' , 'ar_name'=>'غمرة', 'description' => 'first line 23th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'24','name'=>'El-Demerdash' , 'ar_name'=>'الدمرداش', 'description' => 'first line 24th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'25','name'=>'Manshiet El-Sadr' , 'ar_name'=>'منشية الصدر', 'description' => 'first line 25th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'26','name'=>'Kobri El-Qobba' , 'ar_name'=>'كوبري القبة', 'description' => 'first line 26th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'27','name'=>'Hammamat El-Qobba' , 'ar_name'=>'حمامات القبة', 'description' => 'first line 27th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'28','name'=>'Saray El-Qobba	' , 'ar_name'=>'سراى القبة', 'description' => 'first line 28th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'29','name'=>'Hadayeq El-Zaitoun	' , 'ar_name'=>'حدائق الزيتون', 'description' => 'first line 29th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'30','name'=>'Helmeyet El-Zaitoun' , 'ar_name'=>'حلمية الزيتون', 'description' => 'first line 30th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'31','name'=>'El-Matareyya' , 'ar_name'=>'المطرية', 'description' => 'first line 31th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'32','name'=>'Ain Shams' , 'ar_name'=>'عين شمس', 'description' => 'first line 32th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'33','name'=>'Ezbet El-Nakhl	' , 'ar_name'=>'عزبة النخل', 'description' => 'first line 33th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'34','name'=>'El-Marg' , 'ar_name'=>'المرج', 'description' => 'first line 34th station'])
            ->lines()->attach([1]);

        Node::firstOrCreate(['id'=>'35','name'=>'New El-Marg' , 'ar_name'=>'المرج الجديدة', 'description' => 'first line 35th station'])
            ->lines()->attach([1]);

    }
}
