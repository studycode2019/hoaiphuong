<?php

use Illuminate\Database\Seeder;

class PHIEUTHUDANHMUCTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('PHIEUTHU_DANHMUC')->delete();
        
        \DB::table('PHIEUTHU_DANHMUC')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ten' => 'Không phân loại',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'ten' => 'Giáo dục',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'ten' => 'Kỹ thuật',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
