<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Service::truncate();
        
        $services = [
            [
                'image' => 'https://humucarecleaning.co.uk/Service_images/manmop.webp',
                'title' => 'Humucare',
                'description' => 'Manmop is a platform that connects people who need help with those who can help. It is a platform that connects people who need help with those who can help.',
                'link' => 'https://humucarecleaning.co.uk/',
            ],
            [
                'image' => 'https://humucarecleaning.co.uk/Service_images/manmop.webp',
                'title' => 'HumuShop',
                'description' => 'Our deep cleaning service ensures your space is thoroughly sanitized and spotless, ideal for seasonal or post-renovation cleanups.',
                'link' => 'https://www.humucareshop.co.uk/',
            ],
            [
                'image' => 'https://humucarecleaning.co.uk/Service_images/manmop.webp',
                'title' => 'HumucareTraining',
                'description' => 'Professional office cleaning services designed to keep your workspace clean, healthy, and productive.',
                'link' => 'https://training.humucarecleaning.co.uk/courses',
            ],
            [
                'image' => 'https://humucarecleaning.co.uk/Service_images/manmop.webp',
                'title' => 'HumuFoodies',
                'description' => 'Reliable home cleaning services tailored to your needs — weekly, biweekly, or one-time cleans.',
                'link' => 'https://foodies.humucarecleaning.co.uk/',
            ],
            [
                'image' => 'https://humucarecleaning.co.uk/Service_images/manmop.webp',
                'title' => 'HumucareNannies',
                'description' => 'We use eco-friendly products and advanced equipment to deep clean and revitalize your carpets.',
                'link' => 'https://humucarenannies.humucarecleaning.co.uk/',
            ],
            [
                'image' => 'https://humucarecleaning.co.uk/Service_images/manmop.webp',
                'title' => 'HumucarePay',
                'description' => 'Crystal-clear results every time — we offer both interior and exterior window cleaning for homes and businesses.',
                'link' => 'https://humucarepay.payceler.net/',
            ],
        ];

        foreach ($services as $data) {
            Service::create($data);
        }
    }
}
