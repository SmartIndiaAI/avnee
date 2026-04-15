<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            // Studio Categories (Brand ID 1)
            [
                'brand_id' => 1,
                'name' => 'Anarkali Sets',
                'slug' => 'anarkali-sets',
                'description' => 'Flowing silhouettes and intricate embroideries.',
                'is_active' => true,
                'show_in_menu' => true,
                'sort_order' => 1,
            ],
            [
                'brand_id' => 1,
                'name' => 'Sarees',
                'slug' => 'sarees',
                'description' => 'Six yards of pure elegance.',
                'is_active' => true,
                'show_in_menu' => true,
                'sort_order' => 2,
            ],
            [
                'brand_id' => 1,
                'name' => 'Lehenga Choli',
                'slug' => 'lehenga-choli',
                'description' => 'The perfect festive attire.',
                'is_active' => true,
                'show_in_menu' => true,
                'sort_order' => 3,
            ],
            [
                'brand_id' => 1,
                'name' => 'Western Wear',
                'slug' => 'western-wear',
                'description' => 'Modern styles with an ethnic touch.',
                'is_active' => true,
                'show_in_menu' => true,
                'sort_order' => 4,
            ],

            // Jewellery Categories (Brand ID 2)
            [
                'brand_id' => 2,
                'name' => 'Necklaces',
                'slug' => 'necklaces',
                'description' => 'Statement pieces for your neckline.',
                'is_active' => true,
                'show_in_menu' => true,
                'sort_order' => 1,
            ],
            [
                'brand_id' => 2,
                'name' => 'Earrings',
                'slug' => 'earrings',
                'description' => 'Dangling beauties and elegant studs.',
                'is_active' => true,
                'show_in_menu' => true,
                'sort_order' => 2,
            ],
            [
                'brand_id' => 2,
                'name' => 'Bangles & Bracelets',
                'slug' => 'bangles-bracelets',
                'description' => 'Adorn your wrists with gold and gems.',
                'is_active' => true,
                'show_in_menu' => true,
                'sort_order' => 3,
            ],
            [
                'brand_id' => 2,
                'name' => 'Bridal Sets',
                'slug' => 'bridal-sets',
                'description' => 'Complete sets for your special day.',
                'is_active' => true,
                'show_in_menu' => true,
                'sort_order' => 4,
            ],
        ];

        foreach ($categories as $cat) {
            Category::updateOrCreate(['slug' => $cat['slug']], $cat);
        }
    }
}
