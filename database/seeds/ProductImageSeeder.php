<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Shop\Brand;
use App\Models\Shop\Product;
use App\Models\Other\Image;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $laptops = array(
            array(            //HP Brand
                array(        //HP_Pavilion series product images
                    array(    //product array
                        'HP_Pavilion_1_1',
                        'HP_Pavilion_1_2',
                        'HP_Pavilion_1_3',
                        'HP_Pavilion_1_4',
                    ),

                    array(    //product array
                        'HP_Pavilion_2_1',
                        'HP_Pavilion_2_2',
                        'HP_Pavilion_2_3',
                        'HP_Pavilion_2_4',
                    ),

                    array(    //product array
                        'HP_Pavilion_3_1',
                        'HP_Pavilion_3_2',
                        'HP_Pavilion_3_3',
                        'HP_Pavilion_3_4',
                    ),
                ),

                array(        //HP_Specter series product images
                    array(    //product array
                        'HP_Spectre_1_1',
                        'HP_Spectre_1_2',
                        'HP_Spectre_1_3',
                        'HP_Spectre_1_4',
                    ),

                    array(    //product array
                        'HP_Spectre_2_1',
                        'HP_Spectre_2_2',
                        'HP_Spectre_2_3',
                        'HP_Spectre_2_4',
                    ),

                    array(    //product array
                        'HP_Spectre_3_1',
                        'HP_Spectre_3_2',
                        'HP_Spectre_3_3',
                        'HP_Spectre_3_4',
                    ),
                ),

                array(        //HP_EliteBook series product images
                    array(    //product array
                        'HP_EliteBook_1_1',
                        'HP_EliteBook_1_2',
                        'HP_EliteBook_1_3',
                        'HP_EliteBook_1_4',
                    ),

                    array(    //product array
                        'HP_EliteBook_2_1',
                        'HP_EliteBook_2_2',
                        'HP_EliteBook_2_3',
                        'HP_EliteBook_2_4',
                    ),

                    array(    //product array
                        'HP_EliteBook_3_1',
                        'HP_EliteBook_3_2',
                        'HP_EliteBook_3_3',
                        'HP_EliteBook_3_4',
                    ),
                ),

                array(        //HP_Envy series product images
                    array(    //product array
                        'HP_Envy_1_1',
                        'HP_Envy_1_2',
                        'HP_Envy_1_3',
                        'HP_Envy_1_4',
                    ),

                    array(    //product array
                        'HP_Envy_2_1',
                        'HP_Envy_2_2',
                        'HP_Envy_2_3',
                        'HP_Envy_2_4',
                    ),

                    array(    //product array
                        'HP_Envy_3_1',
                        'HP_Envy_3_2',
                        'HP_Envy_3_3',
                        'HP_Envy_3_4',
                    ),
                ),
            ),

            array(            //ASUS Brand
                array(        //ASUS_ROG series product images
                    array(    //product array
                        'ASUS_ROG_1_1',
                        'ASUS_ROG_1_2',
                        'ASUS_ROG_1_3',
                        'ASUS_ROG_1_4',
                    ),

                    array(    //product array
                        'ASUS_ROG_2_1',
                        'ASUS_ROG_2_2',
                        'ASUS_ROG_2_3',
                        'ASUS_ROG_2_4',
                    ),

                    array(    //product array
                        'ASUS_ROG_3_1',
                        'ASUS_ROG_3_2',
                        'ASUS_ROG_3_3',
                        'ASUS_ROG_3_4',
                    ),

                    array(    //product array
                        'ASUS_ROG_4_1',
                        'ASUS_ROG_4_2',
                        'ASUS_ROG_4_3',
                        'ASUS_ROG_4_4',
                    ),
                ),

                array(        //ASUS_VivoBook series product images
                    array(    //product array
                        'ASUS_VivoBook_1_1',
                        'ASUS_VivoBook_1_2',
                        'ASUS_VivoBook_1_3',
                        'ASUS_VivoBook_1_4',
                    ),

                    array(    //product array
                        'ASUS_VivoBook_2_1',
                        'ASUS_VivoBook_2_2',
                        'ASUS_VivoBook_2_3',
                        'ASUS_VivoBook_2_4',
                    ),

                    array(    //product array
                        'ASUS_VivoBook_3_1',
                        'ASUS_VivoBook_3_2',
                        'ASUS_VivoBook_3_3',
                        'ASUS_VivoBook_3_4',
                    ),

                    array(    //product array
                        'ASUS_VivoBook_4_1',
                        'ASUS_VivoBook_4_2',
                        'ASUS_VivoBook_4_3',
                        'ASUS_VivoBook_4_4',
                    ),
                ),

                array(        //ASUS_TUF series product images
                    array(    //product array
                        'ASUS_TUF_1_1',
                        'ASUS_TUF_1_2',
                        'ASUS_TUF_1_3',
                        'ASUS_TUF_1_4',
                    ),

                    array(    //product array
                        'ASUS_TUF_2_1',
                        'ASUS_TUF_2_2',
                        'ASUS_TUF_2_3',
                        'ASUS_TUF_2_4',
                    ),

                    array(    //product array
                        'ASUS_TUF_3_1',
                        'ASUS_TUF_3_2',
                        'ASUS_TUF_3_3',
                        'ASUS_TUF_3_4',
                    ),

                    array(    //product array
                        'ASUS_TUF_4_1',
                        'ASUS_TUF_4_2',
                        'ASUS_TUF_4_3',
                        'ASUS_TUF_4_4',
                    ),
                ),

                array(        //ASUS_ZenBook series product images
                    array(    //product array
                        'ASUS_ZenBook_1_1',
                        'ASUS_ZenBook_1_2',
                        'ASUS_ZenBook_1_3',
                        'ASUS_ZenBook_1_4',
                    ),

                    array(    //product array
                        'ASUS_ZenBook_2_1',
                        'ASUS_ZenBook_2_2',
                        'ASUS_ZenBook_2_3',
                        'ASUS_ZenBook_2_4',
                    ),

                    array(    //product array
                        'ASUS_ZenBook_3_1',
                        'ASUS_ZenBook_3_2',
                        'ASUS_ZenBook_3_3',
                        'ASUS_ZenBook_3_4',
                    ),
                ),
            ),

            array(            //MSI Brand
                array(        //MSI_GL series product images
                    array(    //product array
                        'MSI_GL_1_1',
                        'MSI_GL_1_2',
                        'MSI_GL_1_3',
                        'MSI_GL_1_4',
                    ),

                    array(    //product array
                        'MSI_GL_2_1',
                        'MSI_GL_2_2',
                        'MSI_GL_2_3',
                        'MSI_GL_2_4',
                    ),
                ),

                array(        //MSI_GE series product images
                    array(    //product array
                        'MSI_GE_1_1',
                        'MSI_GE_1_2',
                        'MSI_GE_1_3',
                        'MSI_GE_1_4',
                    ),

                    array(    //product array
                        'MSI_GE_2_1',
                        'MSI_GE_2_2',
                        'MSI_GE_2_3',
                        'MSI_GE_2_4',
                    ),

                    array(    //product array
                        'MSI_GE_3_1',
                        'MSI_GE_3_2',
                        'MSI_GE_3_3',
                        'MSI_GE_3_4',
                    ),
                ),

                array(        //MSI_GS series product images
                    array(    //product array
                        'MSI_GS_1_1',
                        'MSI_GS_1_2',
                        'MSI_GS_1_3',
                        'MSI_GS_1_4',
                    ),

                    array(    //product array
                        'MSI_GS_2_1',
                        'MSI_GS_2_2',
                        'MSI_GS_2_3',
                        'MSI_GS_2_4',
                    ),

                    array(    //product array
                        'MSI_GS_3_1',
                        'MSI_GS_3_2',
                        'MSI_GS_3_3',
                        'MSI_GS_3_4',
                    ),
                ),
            ),

            array(            //LENOVO Brand
                array(        //LENOVO_ThinkPad series product images
                    array(    //product array
                        'LENOVO_ThinkPad_1_1',
                        'LENOVO_ThinkPad_1_2',
                        'LENOVO_ThinkPad_1_3',
                        'LENOVO_ThinkPad_1_4',
                    ),

                    array(    //product array
                        'LENOVO_ThinkPad_2_1',
                        'LENOVO_ThinkPad_2_2',
                        'LENOVO_ThinkPad_2_3',
                        'LENOVO_ThinkPad_2_4',
                    ),

                    array(    //product array
                        'LENOVO_ThinkPad_3_1',
                        'LENOVO_ThinkPad_3_2',
                        'LENOVO_ThinkPad_3_3',
                        'LENOVO_ThinkPad_3_4',
                    ),

                    array(    //product array
                        'LENOVO_ThinkPad_4_1',
                        'LENOVO_ThinkPad_4_2',
                        'LENOVO_ThinkPad_4_3',
                        'LENOVO_ThinkPad_4_4',
                    ),
                ),

                array(        //LENOVO_Ideapad series product images
                    array(    //product array
                        'LENOVO_Ideapad_1_1',
                        'LENOVO_Ideapad_1_2',
                        'LENOVO_Ideapad_1_3',
                        'LENOVO_Ideapad_1_4',
                    ),

                    array(    //product array
                        'LENOVO_Ideapad_2_1',
                        'LENOVO_Ideapad_2_2',
                        'LENOVO_Ideapad_2_3',
                        'LENOVO_Ideapad_2_4',
                    ),

                    array(    //product array
                        'LENOVO_Ideapad_3_1',
                        'LENOVO_Ideapad_3_2',
                        'LENOVO_Ideapad_3_3',
                        'LENOVO_Ideapad_3_4',
                    ),

                    array(    //product array
                        'LENOVO_Ideapad_4_1',
                        'LENOVO_Ideapad_4_2',
                        'LENOVO_Ideapad_4_3',
                        'LENOVO_Ideapad_4_4',
                    ),
                ),

                array(        //LENOVO_Legion series product images
                    array(    //product array
                        'LENOVO_Legion_1_1',
                        'LENOVO_Legion_1_2',
                        'LENOVO_Legion_1_3',
                        'LENOVO_Legion_1_4',
                    ),

                    array(    //product array
                        'LENOVO_Legion_2_1',
                        'LENOVO_Legion_2_2',
                        'LENOVO_Legion_2_3',
                        'LENOVO_Legion_2_4',
                    ),

                    array(    //product array
                        'LENOVO_Legion_3_1',
                        'LENOVO_Legion_3_2',
                        'LENOVO_Legion_3_3',
                        'LENOVO_Legion_3_4',
                    ),

                    array(    //product array
                        'LENOVO_Legion_4_1',
                        'LENOVO_Legion_4_2',
                        'LENOVO_Legion_4_3',
                        'LENOVO_Legion_4_4',
                    ),
                ),

                array(        //LENOVO_Yoga series product images
                    array(    //product array
                        'LENOVO_Yoga_1_1',
                        'LENOVO_Yoga_1_2',
                        'LENOVO_Yoga_1_3',
                        'LENOVO_Yoga_1_4',
                    ),

                    array(    //product array
                        'LENOVO_Yoga_2_1',
                        'LENOVO_Yoga_2_2',
                        'LENOVO_Yoga_2_3',
                        'LENOVO_Yoga_2_4',
                    ),

                    array(    //product array
                        'LENOVO_Yoga_3_1',
                        'LENOVO_Yoga_3_2',
                        'LENOVO_Yoga_3_3',
                        'LENOVO_Yoga_3_4',
                    ),
                ),
            ),

            array(            //ACER Brand
                array(        //ACER_Swift series product images
                    array(    //product array
                        'ACER_Swift_1_1',
                        'ACER_Swift_1_2',
                        'ACER_Swift_1_3',
                        'ACER_Swift_1_4',
                    ),

                    array(    //product array
                        'ACER_Swift_2_1',
                        'ACER_Swift_2_2',
                        'ACER_Swift_2_3',
                        'ACER_Swift_2_4',
                    ),

                    array(    //product array
                        'ACER_Swift_3_1',
                        'ACER_Swift_3_2',
                        'ACER_Swift_3_3',
                        'ACER_Swift_3_4',
                    ),
                ),

                array(        //ACER_Aspire series product images
                    array(    //product array
                        'ACER_Aspire_1_1',
                        'ACER_Aspire_1_2',
                        'ACER_Aspire_1_3',
                        'ACER_Aspire_1_4',
                    ),

                    array(    //product array
                        'ACER_Aspire_2_1',
                        'ACER_Aspire_2_2',
                        'ACER_Aspire_2_3',
                        'ACER_Aspire_2_4',
                    ),

                    array(    //product array
                        'ACER_Aspire_3_1',
                        'ACER_Aspire_3_2',
                        'ACER_Aspire_3_3',
                        'ACER_Aspire_3_4',
                    ),
                ),

                array(        //ACER_Nitro series product images
                    array(    //product array
                        'ACER_Nitro_1_1',
                        'ACER_Nitro_1_2',
                        'ACER_Nitro_1_3',
                        'ACER_Nitro_1_4',
                    ),

                    array(    //product array
                        'ACER_Nitro_2_1',
                        'ACER_Nitro_2_2',
                        'ACER_Nitro_2_3',
                        'ACER_Nitro_2_4',
                    ),

                    array(    //product array
                        'ACER_Nitro_3_1',
                        'ACER_Nitro_3_2',
                        'ACER_Nitro_3_3',
                        'ACER_Nitro_3_4',
                    ),
                ),

                array(        //ACER_TravelMateX series product images
                    array(    //product array
                        'ACER_TravelMateX_1_1',
                        'ACER_TravelMateX_1_2',
                        'ACER_TravelMateX_1_3',
                        'ACER_TravelMateX_1_4',
                    ),

                    array(    //product array
                        'ACER_TravelMateX_2_1',
                        'ACER_TravelMateX_2_2',
                        'ACER_TravelMateX_2_3',
                        'ACER_TravelMateX_2_4',
                    ),

                    array(    //product array
                        'ACER_TravelMateX_3_1',
                        'ACER_TravelMateX_3_2',
                        'ACER_TravelMateX_3_3',
                        'ACER_TravelMateX_3_4',
                    ),

                    array(    //product array
                        'ACER_TravelMateX_4_1',
                        'ACER_TravelMateX_4_2',
                        'ACER_TravelMateX_4_3',
                        'ACER_TravelMateX_4_4',
                    ),
                ),
            ),

            array(            //APPLE Brand
                array(        //APPLE_MacBook_Pro series product images
                    array(    //product array
                        'APPLE_MacBook_Pro_1_1',
                        'APPLE_MacBook_Pro_1_2',
                        'APPLE_MacBook_Pro_1_3',
                        'APPLE_MacBook_Pro_1_4',
                    ),

                    array(    //product array
                        'APPLE_MacBook_Pro_2_1',
                        'APPLE_MacBook_Pro_2_2',
                        'APPLE_MacBook_Pro_2_3',
                        'APPLE_MacBook_Pro_2_4',
                    ),

                    array(    //product array
                        'APPLE_MacBook_Pro_3_1',
                        'APPLE_MacBook_Pro_3_2',
                        'APPLE_MacBook_Pro_3_3',
                        'APPLE_MacBook_Pro_3_4',
                    ),

                    array(    //product array
                        'APPLE_MacBook_Pro_4_1',
                        'APPLE_MacBook_Pro_4_2',
                        'APPLE_MacBook_Pro_4_3',
                        'APPLE_MacBook_Pro_4_4',
                    ),
                ),

                array(        //APPLE_MackBook Air series product images
                    array(    //product array
                        'APPLE_MacBook_Air_1_1',
                        'APPLE_MacBook_Air_1_2',
                        'APPLE_MacBook_Air_1_3',
                        'APPLE_MacBook_Air_1_4',
                    ),

                    array(    //product array
                        'APPLE_MacBook_Air_2_1',
                        'APPLE_MacBook_Air_2_2',
                        'APPLE_MacBook_Air_2_3',
                        'APPLE_MacBook_Air_2_4',
                    ),

                    array(    //product array
                        'APPLE_MacBook_Air_3_1',
                        'APPLE_MacBook_Air_3_2',
                        'APPLE_MacBook_Air_3_3',
                        'APPLE_MacBook_Air_3_4',
                    ),
                ),
            ),
        );

        $i = 1;
        foreach ($laptops as $key=>$laptopbrand) {
            $brand = Brand::find($key+1);
            foreach ($laptopbrand as $laptopseries) {
                foreach ($laptopseries as $laptop) {
                    $prod = Product::find($i);
                    foreach ($laptop as $laptopimg) {
                        DB::table('images')->insert([
                            'type' => 'product_image',
                            'path' => 'storage/images/product/'.$brand->getCategory()->name.'/'.$brand->name.'/'.$laptopimg.'.png',
                        ]);
                        $img = Image::orderBy('created_at', 'desc')->first();
                        DB::table('product_images')->insert([
                            'product_id' => $prod->id,
                            'image_id' => $img->id,
                        ]);
                    }
                    $i++;
                }
            }
        }
    }
}
