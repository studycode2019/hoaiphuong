<?php

use Illuminate\Database\Seeder;

class KHACHHANGTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('KHACHHANG')->delete();
        
        \DB::table('KHACHHANG')->insert(array (
            0 => 
            array (
                'id' => 14,
                'ten' => 'Học',
                'sdt' => '0949391722',
                'ngaysinh' => '1994-09-16',
                'created_at' => '2018-12-29 00:45:34',
                'updated_at' => '2018-12-30 06:31:39',
            ),
            1 => 
            array (
                'id' => 15,
                'ten' => 'Lý Minh Thông',
                'sdt' => '0363898571',
                'ngaysinh' => '1998-09-20',
                'created_at' => '2018-12-29 04:52:52',
                'updated_at' => '2018-12-29 04:52:52',
            ),
            2 => 
            array (
                'id' => 18,
                'ten' => 'Thích',
                'sdt' => '0397210079',
                'ngaysinh' => '1990-01-01',
                'created_at' => '2018-12-29 11:56:14',
                'updated_at' => '2018-12-29 11:56:14',
            ),
            3 => 
            array (
                'id' => 309,
                'ten' => 'Hiếu',
                'sdt' => '0932830052',
                'ngaysinh' => '1995-01-01',
                'created_at' => '2019-01-02 06:45:03',
                'updated_at' => '2019-01-02 06:45:03',
            ),
            4 => 
            array (
                'id' => 310,
                'ten' => 'Anh Vinh',
                'sdt' => '0919114492',
                'ngaysinh' => '1995-01-01',
                'created_at' => '2019-01-02 06:46:37',
                'updated_at' => '2019-01-02 06:46:37',
            ),
            5 => 
            array (
                'id' => 311,
                'ten' => 'Nhâm Tấn Phát',
                'sdt' => '0949611347',
                'ngaysinh' => '1999-06-04',
                'created_at' => '2019-01-02 06:56:42',
                'updated_at' => '2019-01-02 06:56:42',
            ),
            6 => 
            array (
                'id' => 312,
                'ten' => 'Nguyên',
                'sdt' => '0332229924',
                'ngaysinh' => '1996-03-06',
                'created_at' => '2019-01-02 07:24:52',
                'updated_at' => '2019-01-02 10:26:24',
            ),
            7 => 
            array (
                'id' => 313,
                'ten' => 'Trương Vĩnh Khiêm',
                'sdt' => '0948633364',
                'ngaysinh' => '2000-04-20',
                'created_at' => '2019-01-02 08:44:13',
                'updated_at' => '2019-01-02 08:44:13',
            ),
            8 => 
            array (
                'id' => 318,
                'ten' => 'Toàn',
                'sdt' => '0762871737',
                'ngaysinh' => NULL,
                'created_at' => '2019-01-03 02:50:50',
                'updated_at' => '2019-01-03 02:50:50',
            ),
            9 => 
            array (
                'id' => 319,
            'ten' => 'Anh Thành (thiết kế banner giặc ủi)',
                'sdt' => '0932651201',
                'ngaysinh' => NULL,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2019-01-02 21:40:52',
            ),
            10 => 
            array (
                'id' => 320,
                'ten' => 'Vĩnh Minh',
                'sdt' => '0335881301',
                'ngaysinh' => NULL,
                'created_at' => '2019-01-02 23:30:58',
                'updated_at' => '2019-01-02 23:30:58',
            ),
            11 => 
            array (
                'id' => 321,
                'ten' => 'Hoàng Anh',
                'sdt' => '0949124611',
                'ngaysinh' => NULL,
                'created_at' => '2019-01-03 04:19:04',
                'updated_at' => '2019-01-03 04:19:04',
            ),
            12 => 
            array (
                'id' => 322,
                'ten' => 'Hoàng Anh',
                'sdt' => '0949124617',
                'ngaysinh' => NULL,
                'created_at' => '2019-01-03 04:50:21',
                'updated_at' => '2019-01-03 04:50:21',
            ),
            13 => 
            array (
                'id' => 323,
                'ten' => 'Nhân',
                'sdt' => '0944008140',
                'ngaysinh' => NULL,
                'created_at' => '2019-01-03 05:03:21',
                'updated_at' => '2019-01-03 05:03:21',
            ),
            14 => 
            array (
                'id' => 324,
                'ten' => 'Võ Thanh Lựa',
                'sdt' => '0123456789',
                'ngaysinh' => '1994-02-14',
                'created_at' => '2019-01-03 19:00:32',
                'updated_at' => '2019-01-03 19:00:32',
            ),
            15 => 
            array (
                'id' => 325,
                'ten' => 'Huỳnh Mai',
                'sdt' => '0770007753',
                'ngaysinh' => NULL,
                'created_at' => '2019-01-03 19:07:55',
                'updated_at' => '2019-01-03 19:07:55',
            ),
            16 => 
            array (
                'id' => 326,
                'ten' => 'Nguyễn Thị Kim Khương',
                'sdt' => '0333264420',
                'ngaysinh' => NULL,
                'created_at' => '2019-01-04 00:32:56',
                'updated_at' => '2019-01-04 00:35:24',
            ),
            17 => 
            array (
                'id' => 327,
                'ten' => 'Nguyễn Thị Mỹ Uyên',
                'sdt' => '0817172932',
                'ngaysinh' => NULL,
                'created_at' => '2019-01-04 01:40:38',
                'updated_at' => '2019-01-04 01:40:38',
            ),
            18 => 
            array (
                'id' => 328,
                'ten' => 'Ong Thanh Nhàn',
                'sdt' => '0907660129',
                'ngaysinh' => NULL,
                'created_at' => '2019-01-04 01:43:30',
                'updated_at' => '2019-01-04 01:43:30',
            ),
            19 => 
            array (
                'id' => 329,
                'ten' => 'Mai Thị Hồng Thắm',
                'sdt' => '0769690520',
                'ngaysinh' => '1997-12-07',
                'created_at' => '2019-01-04 19:16:17',
                'updated_at' => '2019-01-05 01:04:15',
            ),
            20 => 
            array (
                'id' => 330,
                'ten' => 'Nguyễn Thị Kim Ngân',
                'sdt' => '0857686539',
                'ngaysinh' => '1999-03-28',
                'created_at' => '2019-01-04 19:24:50',
                'updated_at' => '2019-01-04 19:24:50',
            ),
            21 => 
            array (
                'id' => 331,
                'ten' => 'Tài Anh',
                'sdt' => '0972936819',
                'ngaysinh' => '1998-12-01',
                'created_at' => '2019-01-04 23:53:47',
                'updated_at' => '2019-01-04 23:53:47',
            ),
            22 => 
            array (
                'id' => 332,
                'ten' => 'Minh',
                'sdt' => '0989936932',
                'ngaysinh' => NULL,
                'created_at' => '2019-01-05 00:28:25',
                'updated_at' => '2019-01-05 00:28:25',
            ),
            23 => 
            array (
                'id' => 333,
                'ten' => 'Anh Chiểu',
                'sdt' => '0986140614',
                'ngaysinh' => '1996-12-22',
                'created_at' => '2019-01-05 00:45:31',
                'updated_at' => '2019-01-05 00:45:31',
            ),
            24 => 
            array (
                'id' => 334,
                'ten' => 'Thành',
                'sdt' => '0965156424',
                'ngaysinh' => '1995-01-01',
                'created_at' => '2019-01-05 02:45:24',
                'updated_at' => '2019-01-05 02:45:24',
            ),
            25 => 
            array (
                'id' => 335,
                'ten' => 'Phạm Đức Nhuận',
                'sdt' => '0799554920',
                'ngaysinh' => '1997-01-15',
                'created_at' => '2019-01-05 23:25:32',
                'updated_at' => '2019-01-05 23:25:32',
            ),
            26 => 
            array (
                'id' => 336,
                'ten' => 'Lê Thị Xuân Nguyên',
                'sdt' => '0368085152',
                'ngaysinh' => '2000-03-21',
                'created_at' => '2019-01-06 20:00:44',
                'updated_at' => '2019-01-06 20:00:44',
            ),
            27 => 
            array (
                'id' => 337,
                'ten' => 'Nguyễn Hữu Nghĩa',
                'sdt' => '0799574010',
                'ngaysinh' => '1999-09-26',
                'created_at' => '2019-01-07 00:08:50',
                'updated_at' => '2019-01-07 00:08:50',
            ),
            28 => 
            array (
                'id' => 338,
                'ten' => 'Thanh Nguyên',
                'sdt' => '0702813903',
                'ngaysinh' => '1998-07-15',
                'created_at' => '2019-01-07 00:33:25',
                'updated_at' => '2019-01-07 00:33:25',
            ),
            29 => 
            array (
                'id' => 339,
                'ten' => 'Cẩm Hiếu',
                'sdt' => '0974494915',
                'ngaysinh' => '1997-07-21',
                'created_at' => '2019-01-09 00:09:42',
                'updated_at' => '2019-01-09 00:09:42',
            ),
            30 => 
            array (
                'id' => 340,
                'ten' => 'Bùi Văn Của',
                'sdt' => '0913402790',
                'ngaysinh' => '1997-03-15',
                'created_at' => '2019-01-09 03:24:56',
                'updated_at' => '2019-01-09 03:25:34',
            ),
            31 => 
            array (
                'id' => 341,
                'ten' => 'Phạm Trung Đức',
                'sdt' => '0946688727',
                'ngaysinh' => '2000-12-20',
                'created_at' => '2019-01-10 06:08:44',
                'updated_at' => '2019-01-10 06:08:44',
            ),
            32 => 
            array (
                'id' => 342,
                'ten' => 'Nguyễn Ngọc Giang',
                'sdt' => '0932960587',
                'ngaysinh' => NULL,
                'created_at' => '2019-01-10 06:17:32',
                'updated_at' => '2019-01-10 06:17:32',
            ),
            33 => 
            array (
                'id' => 343,
                'ten' => 'Nam',
                'sdt' => '091915469',
                'ngaysinh' => '1992-06-09',
                'created_at' => '2019-01-10 20:31:25',
                'updated_at' => '2019-01-10 20:31:25',
            ),
            34 => 
            array (
                'id' => 344,
                'ten' => 'Đỗ Trọng Sĩ',
                'sdt' => '0949690002',
                'ngaysinh' => '1998-12-12',
                'created_at' => '2019-01-10 21:18:13',
                'updated_at' => '2019-01-10 21:18:13',
            ),
            35 => 
            array (
                'id' => 345,
                'ten' => 'Sơn Pòn Pon',
                'sdt' => '0964026605',
                'ngaysinh' => '1995-12-17',
                'created_at' => '2019-01-11 17:54:00',
                'updated_at' => '2019-01-11 17:54:00',
            ),
            36 => 
            array (
                'id' => 347,
                'ten' => 'Trường',
                'sdt' => '0899023098',
                'ngaysinh' => '1998-08-02',
                'created_at' => '2019-01-11 21:13:04',
                'updated_at' => '2019-01-11 21:13:04',
            ),
            37 => 
            array (
                'id' => 348,
                'ten' => 'Nguyễn Trọng Nhân',
                'sdt' => '0762985988',
                'ngaysinh' => '1999-06-19',
                'created_at' => '2019-01-11 23:39:51',
                'updated_at' => '2019-01-12 00:20:36',
            ),
            38 => 
            array (
                'id' => 349,
                'ten' => 'Nguyễn Phước Khải',
                'sdt' => '0785462243',
                'ngaysinh' => '1997-03-05',
                'created_at' => '2019-01-11 23:45:29',
                'updated_at' => '2019-01-11 23:45:29',
            ),
            39 => 
            array (
                'id' => 350,
                'ten' => 'Chị Trân',
                'sdt' => '0945190358',
                'ngaysinh' => NULL,
                'created_at' => '2019-01-13 02:19:53',
                'updated_at' => '2019-01-13 02:19:53',
            ),
            40 => 
            array (
                'id' => 351,
                'ten' => 'BÙI THỊ TRANG',
                'sdt' => '0964296940',
                'ngaysinh' => '1998-09-02',
                'created_at' => '2019-01-13 19:01:53',
                'updated_at' => '2019-01-13 19:01:53',
            ),
            41 => 
            array (
                'id' => 352,
                'ten' => 'Mai Nguyễn Huỳnh Trân',
                'sdt' => '0914553944',
                'ngaysinh' => NULL,
                'created_at' => '2019-01-15 23:55:03',
                'updated_at' => '2019-01-15 23:55:03',
            ),
            42 => 
            array (
                'id' => 353,
                'ten' => '3123123',
                'sdt' => '0983636333',
                'ngaysinh' => NULL,
                'created_at' => '2019-01-16 06:30:43',
                'updated_at' => '2019-01-16 06:30:43',
            ),
            43 => 
            array (
                'id' => 354,
                'ten' => 'Trần Lê Kim Hương ',
                'sdt' => '0374170020',
                'ngaysinh' => '1993-05-01',
                'created_at' => '2019-01-16 06:58:14',
                'updated_at' => '2019-01-17 03:06:58',
            ),
            44 => 
            array (
                'id' => 355,
                'ten' => 'Đinh Huỳnh Thanh Trúc',
                'sdt' => '0703683108',
                'ngaysinh' => '2000-11-12',
                'created_at' => '2019-01-17 02:13:04',
                'updated_at' => '2019-01-17 02:13:04',
            ),
            45 => 
            array (
                'id' => 356,
                'ten' => 'Ngô Thị Diễm Trinh',
                'sdt' => '0342577067',
                'ngaysinh' => '1995-02-11',
                'created_at' => '2019-01-17 07:31:04',
                'updated_at' => '2019-01-17 07:31:04',
            ),
            46 => 
            array (
                'id' => 357,
                'ten' => 'Phi Long',
                'sdt' => '0919001733',
                'ngaysinh' => '1994-01-11',
                'created_at' => '2019-01-17 07:37:55',
                'updated_at' => '2019-01-17 07:37:55',
            ),
            47 => 
            array (
                'id' => 358,
                'ten' => 'Anh Khoa',
                'sdt' => '0839374125',
                'ngaysinh' => '1993-01-05',
                'created_at' => '2019-01-17 19:37:41',
                'updated_at' => '2019-01-17 19:37:41',
            ),
            48 => 
            array (
                'id' => 359,
                'ten' => 'Trần Thị Xuân Phượng',
                'sdt' => '0385075307',
                'ngaysinh' => '1999-12-12',
                'created_at' => '2019-01-18 19:56:41',
                'updated_at' => '2019-01-18 19:56:41',
            ),
            49 => 
            array (
                'id' => 360,
                'ten' => 'Nguyễn Minh Khang',
                'sdt' => '0989859577',
                'ngaysinh' => '1999-02-05',
                'created_at' => '2019-01-19 03:58:20',
                'updated_at' => '2019-01-19 03:58:20',
            ),
            50 => 
            array (
                'id' => 361,
                'ten' => 'Huỳnh Phi',
                'sdt' => '0912984840',
                'ngaysinh' => NULL,
                'created_at' => '2019-01-19 06:03:59',
                'updated_at' => '2019-01-19 06:03:59',
            ),
            51 => 
            array (
                'id' => 362,
                'ten' => 'Bùi Thiện Tâm',
                'sdt' => '0838300469',
                'ngaysinh' => '1999-11-01',
                'created_at' => '2019-01-20 19:58:09',
                'updated_at' => '2019-01-20 19:58:09',
            ),
            52 => 
            array (
                'id' => 363,
                'ten' => 'Tôn',
                'sdt' => '0348931438',
                'ngaysinh' => '1997-11-10',
                'created_at' => '2019-01-20 20:17:45',
                'updated_at' => '2019-01-20 20:17:45',
            ),
            53 => 
            array (
                'id' => 364,
                'ten' => 'Trần Thị Linh',
                'sdt' => '0966767205',
                'ngaysinh' => '1997-10-29',
                'created_at' => '2019-01-20 23:45:33',
                'updated_at' => '2019-01-20 23:45:33',
            ),
            54 => 
            array (
                'id' => 365,
                'ten' => 'Nguyễn Công Khải',
                'sdt' => '0364743983',
                'ngaysinh' => '1999-05-22',
                'created_at' => '2019-01-22 03:11:13',
                'updated_at' => '2019-01-22 03:13:11',
            ),
            55 => 
            array (
                'id' => 366,
                'ten' => 'Nguyễn Gia Phú',
                'sdt' => '0907374754',
                'ngaysinh' => '2000-01-16',
                'created_at' => '2019-01-22 10:37:38',
                'updated_at' => '2019-01-22 10:37:38',
            ),
            56 => 
            array (
                'id' => 367,
                'ten' => 'Nguyên Văn Thêm',
                'sdt' => '0383784378',
                'ngaysinh' => '1986-03-19',
                'created_at' => '2019-01-22 11:29:07',
                'updated_at' => '2019-01-22 11:29:07',
            ),
            57 => 
            array (
                'id' => 368,
                'ten' => 'Nguyễn Trọng Văn',
                'sdt' => '0334550899',
                'ngaysinh' => '2000-07-24',
                'created_at' => '2019-01-24 07:55:26',
                'updated_at' => '2019-01-24 07:55:26',
            ),
            58 => 
            array (
                'id' => 369,
                'ten' => 'Lê Quốc Hưng',
                'sdt' => '0762817049',
                'ngaysinh' => '1997-11-06',
                'created_at' => '2019-01-24 10:16:09',
                'updated_at' => '2019-01-24 10:16:09',
            ),
            59 => 
            array (
                'id' => 370,
                'ten' => 'Ngô Thị Diểm Trinh',
                'sdt' => '0345577067',
                'ngaysinh' => '1995-11-20',
                'created_at' => '2019-01-25 07:25:56',
                'updated_at' => '2019-01-25 07:25:56',
            ),
            60 => 
            array (
                'id' => 371,
                'ten' => 'Lê Chí Tâm',
                'sdt' => '0911673995',
                'ngaysinh' => '1995-08-30',
                'created_at' => '2019-01-25 09:15:29',
                'updated_at' => '2019-01-25 09:15:29',
            ),
            61 => 
            array (
                'id' => 372,
                'ten' => 'Thảo',
                'sdt' => '0907539588',
                'ngaysinh' => NULL,
                'created_at' => '2019-01-26 13:01:42',
                'updated_at' => '2019-01-26 13:01:42',
            ),
            62 => 
            array (
                'id' => 373,
                'ten' => 'Trần Phúc Thiện',
                'sdt' => '0961598388',
                'ngaysinh' => '0000-00-00',
                'created_at' => '2019-02-11 03:54:43',
                'updated_at' => '2019-02-11 03:54:43',
            ),
            63 => 
            array (
                'id' => 374,
                'ten' => 'Lượng',
                'sdt' => '0978206725',
                'ngaysinh' => '0000-00-00',
                'created_at' => '2019-02-11 04:09:51',
                'updated_at' => '2019-02-11 04:09:51',
            ),
            64 => 
            array (
                'id' => 375,
                'ten' => 'Anh Tài',
                'sdt' => '0939819960',
                'ngaysinh' => '0000-00-00',
                'created_at' => '2019-02-11 04:21:42',
                'updated_at' => '2019-02-11 04:21:42',
            ),
            65 => 
            array (
                'id' => 376,
                'ten' => 'Lâm Nhựt',
                'sdt' => '0834278147',
                'ngaysinh' => '1998-02-05',
                'created_at' => '2019-02-11 06:51:42',
                'updated_at' => '2019-02-11 06:51:42',
            ),
            66 => 
            array (
                'id' => 377,
                'ten' => 'Anh Lộc',
                'sdt' => '0907190868',
                'ngaysinh' => '0000-00-00',
                'created_at' => '2019-02-11 12:14:54',
                'updated_at' => '2019-02-11 12:14:54',
            ),
            67 => 
            array (
                'id' => 378,
                'ten' => 'Phạm Tiến Đạt',
                'sdt' => '0359525959',
                'ngaysinh' => '1997-01-01',
                'created_at' => '2019-02-12 03:41:01',
                'updated_at' => '2019-02-12 03:41:01',
            ),
            68 => 
            array (
                'id' => 379,
                'ten' => 'Oanh',
                'sdt' => '0942429120',
                'ngaysinh' => '0000-00-00',
                'created_at' => '2019-02-12 04:03:07',
                'updated_at' => '2019-02-12 04:03:07',
            ),
            69 => 
            array (
                'id' => 380,
                'ten' => 'Lê Trần Điền',
                'sdt' => '0924317130',
                'ngaysinh' => '1997-02-27',
                'created_at' => '2019-02-12 08:28:05',
                'updated_at' => '2019-02-12 08:28:05',
            ),
            70 => 
            array (
                'id' => 381,
                'ten' => 'Phạm Hà My',
                'sdt' => '0822548499',
                'ngaysinh' => '2000-12-04',
                'created_at' => '2019-02-13 01:56:32',
                'updated_at' => '2019-02-13 01:56:32',
            ),
            71 => 
            array (
                'id' => 382,
                'ten' => 'Lý Minh Thến',
                'sdt' => '0968260766',
                'ngaysinh' => '1997-03-02',
                'created_at' => '2019-02-13 06:07:48',
                'updated_at' => '2019-02-13 06:07:48',
            ),
            72 => 
            array (
                'id' => 383,
                'ten' => 'Lê Tuấn Tú',
                'sdt' => '0939120792',
                'ngaysinh' => '1985-12-14',
                'created_at' => '2019-02-13 10:23:29',
                'updated_at' => '2019-02-13 10:23:29',
            ),
            73 => 
            array (
                'id' => 384,
                'ten' => 'Anh Hiếu',
                'sdt' => '0942891896',
                'ngaysinh' => '0000-00-00',
                'created_at' => '2019-02-14 07:22:10',
                'updated_at' => '2019-02-14 07:22:20',
            ),
            74 => 
            array (
                'id' => 385,
                'ten' => 'Võ Thanh Lựa',
                'sdt' => '0961020096',
                'ngaysinh' => '0000-00-00',
                'created_at' => '2019-02-15 04:00:39',
                'updated_at' => '2019-02-15 04:00:39',
            ),
            75 => 
            array (
                'id' => 386,
                'ten' => 'Hứa Văn Quy',
                'sdt' => '0912763804',
                'ngaysinh' => '1999-12-29',
                'created_at' => '2019-02-15 08:35:57',
                'updated_at' => '2019-02-15 08:35:57',
            ),
            76 => 
            array (
                'id' => 387,
                'ten' => 'Tiết Thị Kim Úi',
                'sdt' => '0356685922',
                'ngaysinh' => '1997-03-03',
                'created_at' => '2019-02-15 10:25:11',
                'updated_at' => '2019-02-15 10:25:11',
            ),
            77 => 
            array (
                'id' => 388,
                'ten' => 'Lý thị Bé Ngoan',
                'sdt' => '0392824272',
                'ngaysinh' => '0000-00-00',
                'created_at' => '2019-02-15 10:46:23',
                'updated_at' => '2019-02-15 10:46:23',
            ),
            78 => 
            array (
                'id' => 389,
                'ten' => 'Chị Chi',
                'sdt' => '0947797247',
                'ngaysinh' => '0000-00-00',
                'created_at' => '2019-02-16 01:07:34',
                'updated_at' => '2019-02-16 01:07:34',
            ),
            79 => 
            array (
                'id' => 390,
                'ten' => 'Đặng Thị Quí Nương',
                'sdt' => '0344283377',
                'ngaysinh' => '1998-06-03',
                'created_at' => '2019-02-16 03:12:37',
                'updated_at' => '2019-02-16 03:12:37',
            ),
            80 => 
            array (
                'id' => 391,
                'ten' => 'Võ Minh Duy',
                'sdt' => '0387910945',
                'ngaysinh' => '1997-03-24',
                'created_at' => '2019-02-16 06:01:02',
                'updated_at' => '2019-02-16 06:01:02',
            ),
            81 => 
            array (
                'id' => 392,
                'ten' => 'Chị Phụng',
                'sdt' => '0941016989',
                'ngaysinh' => '0000-00-00',
                'created_at' => '2019-02-16 06:43:56',
                'updated_at' => '2019-02-16 06:43:56',
            ),
            82 => 
            array (
                'id' => 393,
                'ten' => 'Nguyễn Khánh Tường',
                'sdt' => '0334578244',
                'ngaysinh' => '0000-00-00',
                'created_at' => '2019-02-16 07:05:04',
                'updated_at' => '2019-02-16 07:05:04',
            ),
            83 => 
            array (
                'id' => 394,
                'ten' => 'Lê Thành Đạt',
                'sdt' => '0948133060',
                'ngaysinh' => '1994-12-01',
                'created_at' => '2019-02-17 06:38:20',
                'updated_at' => '2019-02-17 06:38:20',
            ),
            84 => 
            array (
                'id' => 395,
                'ten' => 'Võ Văn Nhả',
                'sdt' => '0328880440',
                'ngaysinh' => '1999-10-06',
                'created_at' => '2019-02-17 08:30:08',
                'updated_at' => '2019-02-17 08:30:08',
            ),
            85 => 
            array (
                'id' => 396,
                'ten' => 'đỗ thanh Vinh',
                'sdt' => '0383333100',
                'ngaysinh' => '1997-04-15',
                'created_at' => '2019-02-18 05:39:44',
                'updated_at' => '2019-02-18 05:39:44',
            ),
            86 => 
            array (
                'id' => 400,
                'ten' => 'Hà Thanh Hùng',
                'sdt' => '0939401878',
                'ngaysinh' => '0000-00-00',
                'created_at' => '2019-02-19 05:34:14',
                'updated_at' => '2019-02-19 05:34:14',
            ),
            87 => 
            array (
                'id' => 401,
                'ten' => 'Trần Việt Thanh Tạo',
                'sdt' => '0393495335',
                'ngaysinh' => '1999-07-12',
                'created_at' => '2019-02-19 05:51:45',
                'updated_at' => '2019-02-19 05:51:45',
            ),
            88 => 
            array (
                'id' => 402,
                'ten' => 'Nguyễn Mai Trúc',
                'sdt' => '0356842988',
                'ngaysinh' => '1996-03-15',
                'created_at' => '2019-02-19 05:59:14',
                'updated_at' => '2019-02-19 05:59:14',
            ),
            89 => 
            array (
                'id' => 403,
                'ten' => 'Hô Thị Mỹ Duyên',
                'sdt' => '0837589078',
                'ngaysinh' => '1999-04-17',
                'created_at' => '2019-02-19 06:02:58',
                'updated_at' => '2019-02-19 06:02:58',
            ),
            90 => 
            array (
                'id' => 404,
                'ten' => 'Lê Thúy Duy',
                'sdt' => '0774555393',
                'ngaysinh' => '0000-00-00',
                'created_at' => '2019-02-19 12:59:15',
                'updated_at' => '2019-02-19 14:09:46',
            ),
            91 => 
            array (
                'id' => 405,
                'ten' => 'Trương Thị Như Thanh',
                'sdt' => '0336403945',
                'ngaysinh' => '0000-00-00',
                'created_at' => '2019-02-19 13:05:14',
                'updated_at' => '2019-02-19 14:09:31',
            ),
            92 => 
            array (
                'id' => 406,
                'ten' => 'Nguyễn Tấn Toàn',
                'sdt' => '0968153695',
                'ngaysinh' => '1997-09-05',
                'created_at' => '2019-02-19 13:11:56',
                'updated_at' => '2019-02-19 13:11:56',
            ),
            93 => 
            array (
                'id' => 407,
                'ten' => 'Nguyễn Gia Thịnh',
                'sdt' => '0768031010',
                'ngaysinh' => '1997-03-11',
                'created_at' => '2019-02-19 13:13:13',
                'updated_at' => '2019-02-19 13:13:13',
            ),
            94 => 
            array (
                'id' => 408,
                'ten' => 'Nguyễn Thị Thu Ba',
                'sdt' => '0948567829',
                'ngaysinh' => '1998-12-09',
                'created_at' => '2019-02-19 13:17:29',
                'updated_at' => '2019-02-19 13:17:29',
            ),
            95 => 
            array (
                'id' => 409,
                'ten' => 'Nguyễn Thẩm Quyến',
                'sdt' => '0854964967',
                'ngaysinh' => '1998-12-01',
                'created_at' => '2019-02-19 13:18:17',
                'updated_at' => '2019-02-19 13:18:17',
            ),
            96 => 
            array (
                'id' => 410,
                'ten' => 'Phạm Trần Như Huỳnh',
                'sdt' => '0971544931',
                'ngaysinh' => '1995-09-07',
                'created_at' => '2019-02-19 13:28:25',
                'updated_at' => '2019-02-19 13:28:25',
            ),
            97 => 
            array (
                'id' => 411,
                'ten' => 'Trần Mộng	Kha',
                'sdt' => '0949506484',
                'ngaysinh' => '0000-00-00',
                'created_at' => '2019-02-19 13:34:13',
                'updated_at' => '2019-02-19 14:07:30',
            ),
            98 => 
            array (
                'id' => 412,
                'ten' => 'Huỳnh Hữu	Nghĩa',
                'sdt' => '0364539648',
                'ngaysinh' => '1997-01-01',
                'created_at' => '2019-02-19 13:37:26',
                'updated_at' => '2019-02-19 13:37:26',
            ),
            99 => 
            array (
                'id' => 413,
                'ten' => 'Nguyễn Trương Giang',
                'sdt' => '0978480744',
                'ngaysinh' => '1996-07-06',
                'created_at' => '2019-02-19 13:39:01',
                'updated_at' => '2019-02-19 13:39:01',
            ),
            100 => 
            array (
                'id' => 414,
                'ten' => 'Dương Cẩm Bình',
                'sdt' => '0942301497',
                'ngaysinh' => '1995-09-24',
                'created_at' => '2019-02-19 13:48:20',
                'updated_at' => '2019-02-19 13:48:20',
            ),
            101 => 
            array (
                'id' => 415,
                'ten' => 'Lê Minh Quân',
                'sdt' => '0911159539',
                'ngaysinh' => '1996-10-03',
                'created_at' => '2019-02-20 06:59:58',
                'updated_at' => '2019-02-20 06:59:58',
            ),
            102 => 
            array (
                'id' => 416,
                'ten' => 'Khôi',
                'sdt' => '0977775334',
                'ngaysinh' => '1999-07-30',
                'created_at' => '2019-02-20 08:11:27',
                'updated_at' => '2019-02-20 08:11:27',
            ),
            103 => 
            array (
                'id' => 417,
                'ten' => 'Như',
                'sdt' => '0939175704',
                'ngaysinh' => '0000-00-00',
                'created_at' => '2019-02-20 08:17:16',
                'updated_at' => '2019-02-20 08:17:16',
            ),
            104 => 
            array (
                'id' => 418,
                'ten' => 'Tường',
                'sdt' => '0963758119',
                'ngaysinh' => '0000-00-00',
                'created_at' => '2019-02-20 13:09:38',
                'updated_at' => '2019-02-20 13:09:38',
            ),
            105 => 
            array (
                'id' => 419,
                'ten' => 'Nguyễn Cô Băng',
                'sdt' => '0909959762',
                'ngaysinh' => '1989-04-04',
                'created_at' => '2019-02-21 01:47:46',
                'updated_at' => '2019-02-21 01:52:13',
            ),
            106 => 
            array (
                'id' => 420,
                'ten' => 'Thanh Ngân',
                'sdt' => '0778178651',
                'ngaysinh' => '1999-02-27',
                'created_at' => '2019-02-21 03:16:40',
                'updated_at' => '2019-02-21 03:16:40',
            ),
            107 => 
            array (
                'id' => 421,
                'ten' => 'Long Văn Thông',
                'sdt' => '0942753542',
                'ngaysinh' => '1995-08-01',
                'created_at' => '2019-02-22 01:04:40',
                'updated_at' => '2019-02-22 01:04:40',
            ),
            108 => 
            array (
                'id' => 422,
                'ten' => 'Tăng Vĩnh Phước',
                'sdt' => '0947090961',
                'ngaysinh' => '2000-04-30',
                'created_at' => '2019-02-22 03:05:19',
                'updated_at' => '2019-02-22 03:09:30',
            ),
            109 => 
            array (
                'id' => 423,
                'ten' => 'nguyen dinh khôi',
                'sdt' => '0939943923',
                'ngaysinh' => '0000-00-00',
                'created_at' => '2019-02-22 06:29:46',
                'updated_at' => '2019-02-22 06:29:46',
            ),
            110 => 
            array (
                'id' => 424,
                'ten' => 'Phạm Văn Thắng',
                'sdt' => '0379183080',
                'ngaysinh' => '0000-00-00',
                'created_at' => '2019-02-23 00:53:17',
                'updated_at' => '2019-02-23 00:53:17',
            ),
            111 => 
            array (
                'id' => 425,
                'ten' => 'Trần Thanh Nghiệp',
                'sdt' => '0855929288',
                'ngaysinh' => '1997-12-24',
                'created_at' => '2019-02-24 09:31:35',
                'updated_at' => '2019-02-24 09:31:35',
            ),
            112 => 
            array (
                'id' => 426,
                'ten' => 'Trân',
                'sdt' => '0939655309',
                'ngaysinh' => '1995-12-07',
                'created_at' => '2019-02-25 02:09:39',
                'updated_at' => '2019-02-25 02:09:39',
            ),
            113 => 
            array (
                'id' => 427,
                'ten' => 'Trần Thanh Tiến',
                'sdt' => '0994503488',
                'ngaysinh' => '1998-09-13',
                'created_at' => '2019-02-25 12:09:49',
                'updated_at' => '2019-02-25 12:09:49',
            ),
            114 => 
            array (
                'id' => 428,
                'ten' => 'Lê Thị Ngọc Minh',
                'sdt' => '0792871292',
                'ngaysinh' => '1997-01-23',
                'created_at' => '2019-02-26 09:51:35',
                'updated_at' => '2019-02-26 09:51:35',
            ),
            115 => 
            array (
                'id' => 429,
                'ten' => 'Hoàng Tú',
                'sdt' => '0932830599',
                'ngaysinh' => '0000-00-00',
                'created_at' => '2019-02-26 09:57:43',
                'updated_at' => '2019-02-26 09:57:43',
            ),
            116 => 
            array (
                'id' => 430,
                'ten' => 'nguyễn văn tiên',
                'sdt' => '0911086951',
                'ngaysinh' => '1997-03-29',
                'created_at' => '2019-02-27 00:38:18',
                'updated_at' => '2019-02-27 00:38:18',
            ),
            117 => 
            array (
                'id' => 431,
                'ten' => 'Trần Thị Anh THu',
                'sdt' => '0857855019',
                'ngaysinh' => '1999-12-10',
                'created_at' => '2019-02-27 03:56:45',
                'updated_at' => '2019-02-27 03:56:45',
            ),
            118 => 
            array (
                'id' => 432,
                'ten' => 'Nguyễn Xuân Thịnh',
                'sdt' => '0933858040',
                'ngaysinh' => '1991-07-03',
                'created_at' => '2019-02-28 07:25:52',
                'updated_at' => '2019-02-28 07:25:52',
            ),
            119 => 
            array (
                'id' => 433,
                'ten' => 'Thanh',
                'sdt' => '0396342709',
                'ngaysinh' => '1998-01-12',
                'created_at' => '2019-02-28 08:37:33',
                'updated_at' => '2019-02-28 08:37:33',
            ),
            120 => 
            array (
                'id' => 434,
                'ten' => 'Mỹ Huyền',
                'sdt' => '0907008263',
                'ngaysinh' => '0000-00-00',
                'created_at' => '2019-02-28 08:49:11',
                'updated_at' => '2019-02-28 08:49:11',
            ),
            121 => 
            array (
                'id' => 437,
                'ten' => 'Muốn',
                'sdt' => '0942543867',
                'ngaysinh' => '1991-01-01',
                'created_at' => '2019-03-02 01:52:02',
                'updated_at' => '2019-03-02 01:52:02',
            ),
            122 => 
            array (
                'id' => 438,
                'ten' => 'Lại Lâm Phát',
                'sdt' => '0907808906',
                'ngaysinh' => '1995-05-05',
                'created_at' => '2019-03-03 02:31:11',
                'updated_at' => '2019-03-03 02:31:11',
            ),
        ));
        
        
    }
}
