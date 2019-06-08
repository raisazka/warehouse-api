<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'id' => 'WH1-D000008',
            'item_type_id' => '1',
            'item_description' => 'D250 Quartz Silent Blade',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-D000011',
            'item_type_id' => '1',
            'item_description' => 'D350 Quartz Silent Blade',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-M000001',
            'item_type_id' => '2',
            'item_description' => 'Marble Glass Blade (DMX)',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-4000004',
            'item_type_id' => '2',
            'item_description' => '4" Sintered segment Blade (3SD-4GB-S)',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-4000003',
            'item_type_id' => '2',
            'item_description' => '4" Dry Diamond Wheel (Bonsun)',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-4000001',
            'item_type_id' => '2',
            'item_description' => '4" Cawasa Diamond Cutting (Red)',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-4000002',
            'item_type_id' => '2',
            'item_description' => '4" Diamond Cutting',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-C000006',
            'item_type_id' => '2',
            'item_description' => 'Cutter Box',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-T000001',
            'item_type_id' => '3',
            'item_description' => 'Tenax Ager Exchaner 1L',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-S000005',
            'item_type_id' => '3',
            'item_description' => 'Silicon Wax 1L',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-W000004',
            'item_type_id' => '3',
            'item_description' => 'WD-40',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-T000002',
            'item_type_id' => '3',
            'item_description' => 'Thinner',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-C000004',
            'item_type_id' => '4',
            'item_description' => 'Compress Foam',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => '2000003',
            'item_type_id' => '5',
            'item_description' => '24mm Masking Tape',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-4000006',
            'item_type_id' => '5',
            'item_description' => '48mm Masking Tape',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-C000003',
            'item_type_id' => '6',
            'item_description' => 'C320 sanding disc',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-C000001',
            'item_type_id' => '6',
            'item_description' => 'C120 sanding disc',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-C000002',
            'item_type_id' => '6',
            'item_description' => 'C24 sanding disc',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-M000003',
            'item_type_id' => '7',
            'item_description' => 'Marble Glue Transparent Box',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-M000002',
            'item_type_id' => '7',
            'item_description' => 'Marble Glue',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-H000001',
            'item_type_id' => '7',
            'item_description' => 'Hardener',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-5000001',
            'item_type_id' => '8',
            'item_description' => '5M Measuring Tape',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);
        DB::table('items')->insert([
            'id' => 'WH1-L000002',
            'item_type_id' => '8',
            'item_description' => 'L-Shape Ruler',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);
        DB::table('items')->insert([
            'id' => 'WH1-F000001',
            'item_type_id' => '9',
            'item_description' => 'F-Clamp (4")',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-F000002',
            'item_type_id' => '9',
            'item_description' => 'F-Clamp (6")',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-W000003',
            'item_type_id' => '9',
            'item_description' => 'Water Spray 1L',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-S000004',
            'item_type_id' => '9',
            'item_description' => 'Silicon Gun (Tajima)',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-D000024',
            'item_type_id' => '9',
            'item_description' => 'Diamond Crayon (Red)',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-C000005',
            'item_type_id' => '9',
            'item_description' => 'Crayon (Black)',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-W000005',
            'item_type_id' => '9',
            'item_description' => 'White Cement',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-4000005',
            'item_type_id' => '9',
            'item_description' => '45" Degree Fixtures',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-S000006',
            'item_type_id' => '10',
            'item_description' => 'Silicon White Box',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-S000003',
            'item_type_id' => '10',
            'item_description' => 'Silicon Clear Box',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-S000008',
            'item_type_id' => '10',
            'item_description' => 'Silicone X1',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-S000009',
            'item_type_id' => '10',
            'item_description' => 'Silicone X2',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-S000010',
            'item_type_id' => '10',
            'item_description' => 'Silicone X4',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-S000011',
            'item_type_id' => '10',
            'item_description' => 'Silicone X5',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-S000012',
            'item_type_id' => '10',
            'item_description' => 'Silicone X6',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-S000013',
            'item_type_id' => '10',
            'item_description' => 'Silicone X7',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-S000007',
            'item_type_id' => '10',
            'item_description' => 'Silicone Black',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-D0000016',
            'item_type_id' => '11',
            'item_description' => 'D6 x 100L x 12B',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-D000021',
            'item_type_id' => '11',
            'item_description' => 'D8 x 100L x 12B',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-D000001',
            'item_type_id' => '11',
            'item_description' => 'D10 x 100L x 12B',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-D000001',
            'item_type_id' => '11',
            'item_description' => 'D10 x 100L x 12B',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-D000002',
            'item_type_id' => '11',
            'item_description' => 'D100 x 100L x 12B',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-D000003',
            'item_type_id' => '11',
            'item_description' => 'D105 x 100L x 12B',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-D000004',
            'item_type_id' => '11',
            'item_description' => 'D110 x 100L x 12B',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-D000005',
            'item_type_id' => '11',
            'item_description' => 'D15 x 100L x 12B',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-D000006',
            'item_type_id' => '11',
            'item_description' => 'D20 x 100L x 12B',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-D000007',
            'item_type_id' => '11',
            'item_description' => 'D25 x 100L x 12B',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);
        
        DB::table('items')->insert([
            'id' => 'WH1-D000009',
            'item_type_id' => '11',
            'item_description' => 'D30 x 100L x 12B',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-D000010',
            'item_type_id' => '11',
            'item_description' => 'D35 x 100L x 12B',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-D000012',
            'item_type_id' => '11',
            'item_description' => 'D40 x 100L x 12B',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-D000013',
            'item_type_id' => '11',
            'item_description' => 'D45 x 100L x 12B',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-D000014',
            'item_type_id' => '11',
            'item_description' => 'D50 x 100L x 12B',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-D000015',
            'item_type_id' => '11',
            'item_description' => 'D55 x 100L x 12B',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-D000017',
            'item_type_id' => '11',
            'item_description' => 'D60 x 100L x 12B',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-D000018',
            'item_type_id' => '11',
            'item_description' => 'D65 x 100L x 12B',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-D000019',
            'item_type_id' => '11',
            'item_description' => 'D70 x 100L x 12B',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-D000020',
            'item_type_id' => '11',
            'item_description' => 'D75 x 100L x 12B',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-D000022',
            'item_type_id' => '11',
            'item_description' => 'D80 x 100L x 12B',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-D000023',
            'item_type_id' => '11',
            'item_description' => 'D90 x 100L x 12B',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => '2000001',
            'item_type_id' => '12',
            'item_description' => '20 x 50T x 1/2 G',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => '2000002',
            'item_type_id' => '13',
            'item_description' => '20 x 50T x 1/2 G',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-W000001',
            'item_type_id' => '14',
            'item_description' => 'Water Boots (Buffalo)',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-B000001',
            'item_type_id' => '15',
            'item_description' => 'BMJ Safety Shoes',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-S000001',
            'item_type_id' => '15',
            'item_description' => 'Safety Boots (Kings)',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-M000004',
            'item_type_id' => '16',
            'item_description' => 'Mask',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-G000001',
            'item_type_id' => '16',
            'item_description' => 'Glove',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-E000001',
            'item_type_id' => '16',
            'item_description' => 'Eye Glass Protection',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-W000002',
            'item_type_id' => '16',
            'item_description' => 'Water Glue',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-S000002',
            'item_type_id' => '16',
            'item_description' => 'Silicon Card',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-L000001',
            'item_type_id' => '16',
            'item_description' => 'Logo',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);

        DB::table('items')->insert([
            'id' => 'WH1-G000002',
            'item_type_id' => '16',
            'item_description' => 'Green PVC Apron',
            'size' => '-',
            'expiry_date' => '2019-12-20',
            'stock' => 1,
            'warehouse_id' => 1
        ]);
    }
}
