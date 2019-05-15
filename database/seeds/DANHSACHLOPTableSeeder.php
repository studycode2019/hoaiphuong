<?php

use Illuminate\Database\Seeder;

class DANHSACHLOPTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('DANHSACHLOP')->delete();
        
        \DB::table('DANHSACHLOP')->insert(array (
            0 => 
            array (
                'id' => 1,
                'khachhang_id' => 311,
                'lophoc_id' => 1,
                'phieuthu_id' => NULL,
                'ghichu' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-02-15 03:51:56',
                'updated_at' => '2019-02-15 03:51:56',
            ),
            1 => 
            array (
                'id' => 2,
                'khachhang_id' => 385,
                'lophoc_id' => 1,
                'phieuthu_id' => NULL,
                'ghichu' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-02-15 04:00:44',
                'updated_at' => '2019-02-15 04:00:44',
            ),
            2 => 
            array (
                'id' => 3,
                'khachhang_id' => 414,
                'lophoc_id' => 1,
                'phieuthu_id' => NULL,
                'ghichu' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-02-19 13:48:27',
                'updated_at' => '2019-02-19 13:48:27',
            ),
            3 => 
            array (
                'id' => 4,
                'khachhang_id' => 412,
                'lophoc_id' => 2,
                'phieuthu_id' => NULL,
                'ghichu' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-02-19 14:04:25',
                'updated_at' => '2019-02-19 14:04:25',
            ),
            4 => 
            array (
                'id' => 5,
                'khachhang_id' => 409,
                'lophoc_id' => 2,
                'phieuthu_id' => NULL,
                'ghichu' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-02-19 14:07:17',
                'updated_at' => '2019-02-19 14:07:17',
            ),
        ));
        
        
    }
}
