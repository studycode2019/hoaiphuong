<?php

use Illuminate\Database\Seeder;

class LOPHOCTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('LOPHOC')->delete();
        
        \DB::table('LOPHOC')->insert(array (
            0 => 
            array (
                'id' => 1,
                'malophoc' => 'A13',
                'ten' => 'Tin học căn bản K13',
                'lichhoc' => '12 buổi, thứ 2-4-6, từ 18h00-19h30',
                'giaovien' => 'Thầy Tiến',
                'hocphi' => 700000,
                'ghichu' => '',
                'created_at' => '2019-02-15 02:42:24',
                'updated_at' => '2019-02-15 02:42:24',
            ),
            1 => 
            array (
                'id' => 2,
                'malophoc' => 'DRM.A13',
                'ten' => 'Tin Học Căn Bản K13',
                'lichhoc' => '15-246-C1',
                'giaovien' => 'Thầy Tiến',
                'hocphi' => 700000,
                'ghichu' => 'Nhân viên trung tâm',
                'created_at' => '2019-02-19 13:44:19',
                'updated_at' => '2019-02-19 13:44:19',
            ),
            2 => 
            array (
                'id' => 3,
                'malophoc' => 'DRM.C02',
                'ten' => 'Lập Trình Căn Bản K2',
                'lichhoc' => '15-246-C2',
                'giaovien' => 'Thầy Khanh',
                'hocphi' => 1200000,
                'ghichu' => 'Nhân viên trung tâm',
                'created_at' => '2019-02-19 14:03:43',
                'updated_at' => '2019-02-19 14:03:43',
            ),
        ));
        
        
    }
}
