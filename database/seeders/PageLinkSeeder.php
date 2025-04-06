<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PageLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('page_links')->delete();

        DB::table('page_links')->insert([
            [
                'slug' => 'home',
                'type_id' => 1,  
                'parent_id' => null,  
                'title_en' => 'Home',
                'title_ar' => 'الرئيسية',
                'route_name' => 'home',
                'status' => 'active',
                'icon' => 'fa-home',
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'about-us',
                'type_id' => 1,  
                'parent_id' => null,  
                'title_en' => 'About Us',
                'title_ar' => 'معلومات عنا',
                'route_name' => 'about-us',
                'icon' => 'fa-info-circle',
                'status' => 'active',
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'contact-us',
                'type_id' => 2, 
                'parent_id' => null,  
                'title_en' => 'Contact Us',
                'title_ar' => 'اتصل بنا',
                'route_name' => 'contact-us',
                'icon' => 'fa-phone-alt',
                'status' => 'active',
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'faq',
                'type_id' => 2,
                'parent_id' => null,
                'title_en' => 'FAQ',
                'title_ar' => 'الأسئلة الشائعة',
                'route_name' => 'faq',
                'status' => 'active',
                'icon' => 'fa-question-circle',
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'terms-of-service',
                'type_id' => 2,  
                'parent_id' => null,
                'title_en' => 'Terms of Service',
                'title_ar' => 'شروط الخدمة',
                'route_name' => 'terms-of-service',
                  'icon' => 'fa-gavel',
                'status' => 'active',
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'privacy-policy',
                'type_id' => 2,
                'parent_id' => null,
                'title_en' => 'Privacy Policy',
                'title_ar' => 'سياسة الخصوصية',
                'route_name' => 'privacy-policy',
                'status' => 'active',
                'icon' => 'fa-user-shield', 
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'return-policy',
                'type_id' => 2,
                'parent_id' => null,
                'title_en' => 'Return Policy',
                'title_ar' => 'سياسة الإرجاع',
                'route_name' => 'return-policy',
                'icon' => 'fa-undo',
                'status' => 'active',
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
    
    }

