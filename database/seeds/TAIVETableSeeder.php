<?php

use Illuminate\Database\Seeder;

class TAIVETableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('TAIVE')->delete();
        
        \DB::table('TAIVE')->insert(array (
            0 => 
            array (
                'id' => 4,
                'ten' => 'Microsoft Office 2013',
                'mota' => '',
                'link' => 'https://drive.google.com/open?id=1AXDQcFPQ0WISiiaXA5id1hcXC38o7yGS',
                'sha1' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-02-21 13:54:43',
                'updated_at' => '2019-02-21 14:02:04',
            ),
            1 => 
            array (
                'id' => 5,
                'ten' => 'Microsoft Office 2016',
                'mota' => '',
                'link' => 'https://drive.google.com/open?id=1bmoVtSdTGQyulug_Tek-w-Glj9Ikb_zq',
                'sha1' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-02-21 13:54:59',
                'updated_at' => '2019-02-21 13:54:59',
            ),
            2 => 
            array (
                'id' => 6,
                'ten' => 'Microsoft Office 2010',
                'mota' => '',
                'link' => 'https://drive.google.com/open?id=1A8Pg4hfWPGBGFaY9QKchgPqS6-hQjwSV',
                'sha1' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-02-21 13:55:16',
                'updated_at' => '2019-02-21 13:55:16',
            ),
            3 => 
            array (
                'id' => 7,
                'ten' => 'Microsoft Office 2007',
                'mota' => '',
                'link' => 'https://drive.google.com/open?id=18zeKYmAc3dEgotrFNg1vXyqqwtKeWCMo',
                'sha1' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-02-21 13:55:36',
                'updated_at' => '2019-02-21 13:55:36',
            ),
            4 => 
            array (
                'id' => 8,
                'ten' => 'Microsoft Office 2003',
                'mota' => '',
                'link' => 'https://drive.google.com/open?id=1bnXE7RF9HtP1YUDVssWtDpYyUp1Zq3ZW',
                'sha1' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-02-21 13:55:50',
                'updated_at' => '2019-02-21 13:55:50',
            ),
            5 => 
            array (
                'id' => 9,
                'ten' => 'KMSPico v10.2.0',
                'mota' => '',
                'link' => 'https://drive.google.com/open?id=1FRqwLBrb_-DG7J5tY3nkvNNTYz5FdMpZ',
                'sha1' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-02-21 13:56:44',
                'updated_at' => '2019-02-21 13:56:44',
            ),
            6 => 
            array (
                'id' => 10,
                'ten' => 'UltraISO v9.5.2',
                'mota' => '',
                'link' => 'https://drive.google.com/open?id=1cN-LQe0oXtJdsxK0bdJLvskaFXsdwSur',
                'sha1' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-02-21 13:57:02',
                'updated_at' => '2019-02-21 13:57:02',
            ),
        ));
        
        
    }
}
