<?php

use Illuminate\Database\Seeder;

class NHANVIENTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('NHANVIEN')->delete();
        
        \DB::table('NHANVIEN')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sdt' => '0949611347',
                'matkhau' => '$2y$10$3T/2yTS8W41uOeaYWHYqUOIvtrDY8tT0MmAPF262wcR7AMmH5DNdS',
                'ten' => 'Phát Nhâm',
                'ngaysinh' => '1999-06-04',
                'remember_token' => 'hLjysj1QlmrMjcOcvcFENdZHQ7NT0X4SmYWkkyVWEIgOvRp48GgJnsfOqdQs',
                'created_at' => NULL,
                'updated_at' => '2019-02-12 04:52:17',
            ),
            1 => 
            array (
                'id' => 2,
                'sdt' => '0898843938',
                'matkhau' => '$2y$12$5qJy69iVEuGgP76WtJE2GeSzUjhnApWpeMqCCkszriVGQ5.g05P8q',
                'ten' => 'Hoài Phương',
                'ngaysinh' => '1995-06-25',
                'remember_token' => 'kUqeTCYXJ01HCpcKSTpzZ7hogG2hBGNOhokhWMpdmhzqhiYiGtTKiKqTfOxo',
                'created_at' => NULL,
                'updated_at' => '2019-01-02 13:13:22',
            ),
            2 => 
            array (
                'id' => 3,
                'sdt' => '0942301497',
                'matkhau' => '$2y$12$hltoQjOenrREzKRnnk1h6eh8JbSE21clmAcnhqH8GXqgnd1tXSSTG',
                'ten' => 'Cẩm Bình',
                'ngaysinh' => '1995-09-24',
                'remember_token' => '50Qd3OrMFcJsKXiif2ZxOCxybra8ZRKcIKWeEeTbQhR6MWNm9rJ2f8AY1NoG',
                'created_at' => NULL,
                'updated_at' => '2019-02-16 06:43:25',
            ),
            3 => 
            array (
                'id' => 4,
                'sdt' => '0963758119',
                'matkhau' => '$2y$12$LaQfJvPG.JUK6YWGA7BtseYiL/s3w13qLBu3hZ8c7rsJvIl0V2Soe',
                'ten' => 'Thanh Tường',
                'ngaysinh' => '2000-05-14',
                'remember_token' => 'dci14uWmpuwfl3Gi0qTteIbh1OanpB0cx1BU4egIzLgpisl2yhTZgqdFStGn',
                'created_at' => NULL,
                'updated_at' => '2019-01-19 06:23:45',
            ),
            4 => 
            array (
                'id' => 5,
                'sdt' => '0978453944',
                'matkhau' => '$2y$12$hSxtdldPn/pWl6OApwTE1OaoTGdgcqLA7eCOpGc63eFrUWtPZ6fJm',
                'ten' => 'Trung Kiệt',
                'ngaysinh' => '2000-02-13',
                'remember_token' => 'rFWDVFUyNndJJPEqAxqZUwfcURWSdywAvCUM1TwBebhOL63bV7xBZc5Otw94',
                'created_at' => NULL,
                'updated_at' => '2019-01-24 08:54:58',
            ),
            5 => 
            array (
                'id' => 6,
                'sdt' => '0961020096',
                'matkhau' => '$2y$12$yIA2xlywWGdXOuLGIbEdcuRHZiOTj5ZCsUXyp3dIdrJnVbbzDkuuO',
                'ten' => 'Phú',
                'ngaysinh' => '1994-01-01',
                'remember_token' => 'N3slmeOICDYLfuE7uvYW1RfswZNyKJMBIZPSp3dWjtrbG2uDoD5fiJzEYhel',
                'created_at' => NULL,
                'updated_at' => '2019-02-18 10:30:15',
            ),
            6 => 
            array (
                'id' => 7,
                'sdt' => '0888141811',
                'matkhau' => '$2y$12$lH2XLJXvyOTBIPOYVBiO2.8ryU/.6n3vPFgSP45KceyK8WvEoINDK',
                'ten' => 'Tư Vấn',
                'ngaysinh' => '2018-01-15',
                'remember_token' => 'c2Ikek0mxwUmv2ipxw1NMbPaex4lfM1oWdQIJUG7s2eZQkyiH9ecoxYUszA4',
                'created_at' => NULL,
                'updated_at' => '2019-01-24 09:28:00',
            ),
        ));
        
        
    }
}
