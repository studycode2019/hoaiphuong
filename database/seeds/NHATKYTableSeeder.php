<?php

use Illuminate\Database\Seeder;

class NHATKYTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('NHATKY')->delete();
        
        \DB::table('NHATKY')->insert(array (
            0 => 
            array (
                'id' => 3,
                'biennhan_id' => 308,
                'nhanvien_id' => 1,
                'noidung' => 'Hello 1',
                'created_at' => '2019-01-01 16:10:35',
                'updated_at' => '2019-01-01 16:10:35',
                'congkhai' => 0,
            ),
            1 => 
            array (
                'id' => 4,
                'biennhan_id' => 308,
                'nhanvien_id' => 1,
                'noidung' => 'Hello 2',
                'created_at' => '2019-01-01 16:29:36',
                'updated_at' => '2019-01-01 16:29:36',
                'congkhai' => 0,
            ),
            2 => 
            array (
                'id' => 5,
                'biennhan_id' => 309,
                'nhanvien_id' => 1,
                'noidung' => 'Đã báo giá bàn phím 220k+công thay 50k',
                'created_at' => '2019-01-02 06:48:05',
                'updated_at' => '2019-01-02 06:48:05',
                'congkhai' => 0,
            ),
            3 => 
            array (
                'id' => 6,
                'biennhan_id' => 309,
                'nhanvien_id' => 1,
                'noidung' => 'Đã thay bàn phím',
                'created_at' => '2019-01-02 08:23:10',
                'updated_at' => '2019-01-02 08:23:10',
                'congkhai' => 0,
            ),
            4 => 
            array (
                'id' => 7,
                'biennhan_id' => 311,
                'nhanvien_id' => 1,
                'noidung' => 'Đã cài Windows 10 LTSC',
                'created_at' => '2019-01-02 09:05:49',
                'updated_at' => '2019-01-02 09:05:49',
                'congkhai' => 0,
            ),
            5 => 
            array (
                'id' => 8,
                'biennhan_id' => 310,
                'nhanvien_id' => 1,
                'noidung' => 'Đã sửa lỗi do cấu hình BIOS bật SecureBoot không cho chạy Legacy,',
                'created_at' => '2019-01-02 09:45:27',
                'updated_at' => '2019-01-02 09:45:27',
                'congkhai' => 0,
            ),
            6 => 
            array (
                'id' => 9,
                'biennhan_id' => 310,
                'nhanvien_id' => 1,
                'noidung' => 'Máy sử dụng pin máy, không có pin CMOS',
                'created_at' => '2019-01-02 09:51:16',
                'updated_at' => '2019-01-02 09:51:16',
                'congkhai' => 0,
            ),
            7 => 
            array (
                'id' => 10,
                'biennhan_id' => 310,
                'nhanvien_id' => 1,
                'noidung' => 'Báo giá pin 850K, bạn không sửa',
                'created_at' => '2019-01-02 10:47:04',
                'updated_at' => '2019-01-02 10:47:04',
                'congkhai' => 0,
            ),
            8 => 
            array (
                'id' => 11,
                'biennhan_id' => 310,
                'nhanvien_id' => 1,
                'noidung' => 'Đã gọi lấy máy',
                'created_at' => '2019-01-02 10:47:11',
                'updated_at' => '2019-01-02 10:47:11',
                'congkhai' => 0,
            ),
            9 => 
            array (
                'id' => 12,
                'biennhan_id' => 311,
                'nhanvien_id' => 1,
                'noidung' => 'Đã cài driver và phần mềm',
                'created_at' => '2019-01-02 10:49:28',
                'updated_at' => '2019-01-02 10:49:28',
                'congkhai' => 0,
            ),
            10 => 
            array (
                'id' => 13,
                'biennhan_id' => 311,
                'nhanvien_id' => 1,
                'noidung' => 'Đã gọi lấy máy',
                'created_at' => '2019-01-02 10:58:54',
                'updated_at' => '2019-01-02 10:58:54',
                'congkhai' => 0,
            ),
            11 => 
            array (
                'id' => 14,
                'biennhan_id' => 311,
                'nhanvien_id' => 1,
                'noidung' => 'Đã giao máy, thu 35K',
                'created_at' => '2019-01-02 11:28:55',
                'updated_at' => '2019-01-02 11:28:55',
                'congkhai' => 0,
            ),
            12 => 
            array (
                'id' => 15,
                'biennhan_id' => 310,
                'nhanvien_id' => 1,
                'noidung' => 'Đã lấy máy, không thu tiền',
                'created_at' => '2019-01-02 12:42:43',
                'updated_at' => '2019-01-02 12:42:43',
                'congkhai' => 0,
            ),
            13 => 
            array (
                'id' => 30,
                'biennhan_id' => 311,
                'nhanvien_id' => 1,
                'noidung' => 'Thử nghiệm công kahi',
                'created_at' => '2019-01-03 01:58:08',
                'updated_at' => '2019-01-03 01:58:08',
                'congkhai' => 0,
            ),
            14 => 
            array (
                'id' => 31,
                'biennhan_id' => 311,
                'nhanvien_id' => 1,
                'noidung' => 'Có công khai',
                'created_at' => '2019-01-03 01:58:18',
                'updated_at' => '2019-01-03 01:58:18',
                'congkhai' => 1,
            ),
            15 => 
            array (
                'id' => 32,
                'biennhan_id' => 311,
                'nhanvien_id' => 1,
                'noidung' => 'có công kahi 2',
                'created_at' => '2019-01-03 02:01:15',
                'updated_at' => '2019-01-03 02:01:15',
                'congkhai' => 1,
            ),
            16 => 
            array (
                'id' => 33,
                'biennhan_id' => 312,
                'nhanvien_id' => 1,
                'noidung' => 'Không thấy tình trạng như khách báo',
                'created_at' => '2019-01-02 20:32:38',
                'updated_at' => '2019-01-02 20:32:38',
                'congkhai' => 1,
            ),
            17 => 
            array (
                'id' => 34,
                'biennhan_id' => 312,
                'nhanvien_id' => 1,
                'noidung' => 'Đã phát hiện lỗi do tác dụng của phím Fn',
                'created_at' => '2019-01-02 20:45:02',
                'updated_at' => '2019-01-02 20:45:02',
                'congkhai' => 1,
            ),
            18 => 
            array (
                'id' => 35,
                'biennhan_id' => 312,
                'nhanvien_id' => 1,
                'noidung' => 'Đã gọi lấy máy',
                'created_at' => '2019-01-02 20:45:22',
                'updated_at' => '2019-01-02 20:45:22',
                'congkhai' => 1,
            ),
            19 => 
            array (
                'id' => 36,
                'biennhan_id' => 312,
                'nhanvien_id' => 1,
                'noidung' => 'Đã giao máy, miễn phí',
                'created_at' => '2019-01-02 21:16:14',
                'updated_at' => '2019-01-02 21:16:14',
                'congkhai' => 1,
            ),
            20 => 
            array (
                'id' => 37,
                'biennhan_id' => 317,
                'nhanvien_id' => 1,
                'noidung' => 'Khách yêu cầu vệ sinh máy',
                'created_at' => '2019-01-04 19:45:46',
                'updated_at' => '2019-01-04 19:45:46',
                'congkhai' => 1,
            ),
            21 => 
            array (
                'id' => 38,
                'biennhan_id' => 314,
                'nhanvien_id' => 1,
                'noidung' => 'Đã hoàn thành',
                'created_at' => '2019-01-04 20:32:49',
                'updated_at' => '2019-01-04 20:32:49',
                'congkhai' => 1,
            ),
            22 => 
            array (
                'id' => 39,
                'biennhan_id' => 317,
                'nhanvien_id' => 1,
                'noidung' => 'Đã vệ sinh máy, đang cài lại Windows',
                'created_at' => '2019-01-05 00:01:26',
                'updated_at' => '2019-01-05 00:01:26',
                'congkhai' => 1,
            ),
            23 => 
            array (
                'id' => 40,
                'biennhan_id' => 320,
                'nhanvien_id' => 1,
                'noidung' => 'Đang cài đặt Photoshop CS6',
                'created_at' => '2019-01-05 01:21:34',
                'updated_at' => '2019-01-05 01:21:34',
                'congkhai' => 1,
            ),
            24 => 
            array (
                'id' => 41,
                'biennhan_id' => 316,
                'nhanvien_id' => 1,
                'noidung' => 'Đã cài Windows xong, đang cài Matlab 2013',
                'created_at' => '2019-01-05 01:26:49',
                'updated_at' => '2019-01-05 01:26:49',
                'congkhai' => 1,
            ),
            25 => 
            array (
                'id' => 42,
                'biennhan_id' => 320,
                'nhanvien_id' => 1,
                'noidung' => 'Đã cài đặt xong, đợi khách lấy máy',
                'created_at' => '2019-01-05 01:41:22',
                'updated_at' => '2019-01-05 01:41:22',
                'congkhai' => 0,
            ),
            26 => 
            array (
                'id' => 43,
                'biennhan_id' => 320,
                'nhanvien_id' => 1,
                'noidung' => 'Đã cài đặt xong, đợi khách lấy máy',
                'created_at' => '2019-01-05 01:41:33',
                'updated_at' => '2019-01-05 01:41:33',
                'congkhai' => 1,
            ),
            27 => 
            array (
                'id' => 44,
                'biennhan_id' => 316,
                'nhanvien_id' => 1,
                'noidung' => 'đang cài matlab',
                'created_at' => '2019-01-05 03:07:02',
                'updated_at' => '2019-01-05 03:07:02',
                'congkhai' => 0,
            ),
            28 => 
            array (
                'id' => 45,
                'biennhan_id' => 317,
                'nhanvien_id' => 1,
                'noidung' => 'vào boot win không được',
                'created_at' => '2019-01-05 03:07:42',
                'updated_at' => '2019-01-05 03:07:42',
                'congkhai' => 0,
            ),
            29 => 
            array (
                'id' => 46,
                'biennhan_id' => 316,
                'nhanvien_id' => 1,
                'noidung' => 'hoàn tất',
                'created_at' => '2019-01-05 06:33:38',
                'updated_at' => '2019-01-05 06:33:38',
                'congkhai' => 0,
            ),
            30 => 
            array (
                'id' => 47,
                'biennhan_id' => 317,
                'nhanvien_id' => 1,
                'noidung' => 'Đã chuyển qua Nhật Trân',
                'created_at' => '2019-01-05 20:03:49',
                'updated_at' => '2019-01-05 20:03:49',
                'congkhai' => 0,
            ),
            31 => 
            array (
                'id' => 48,
                'biennhan_id' => 317,
                'nhanvien_id' => 1,
                'noidung' => 'Đã cài Windows, đang cài driver',
                'created_at' => '2019-01-05 20:05:27',
                'updated_at' => '2019-01-05 20:05:27',
                'congkhai' => 1,
            ),
            32 => 
            array (
                'id' => 49,
                'biennhan_id' => 322,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong',
                'created_at' => '2019-01-05 20:06:52',
                'updated_at' => '2019-01-05 20:06:52',
                'congkhai' => 1,
            ),
            33 => 
            array (
                'id' => 50,
                'biennhan_id' => 321,
                'nhanvien_id' => 1,
                'noidung' => 'Đã liên hệ bên hãng, đợi phản hồi',
                'created_at' => '2019-01-05 20:13:26',
                'updated_at' => '2019-01-05 20:13:26',
                'congkhai' => 1,
            ),
            34 => 
            array (
                'id' => 51,
                'biennhan_id' => 319,
                'nhanvien_id' => 1,
                'noidung' => 'Đã cài đặt xong, đợi khách lấy máy',
                'created_at' => '2019-01-05 20:13:41',
                'updated_at' => '2019-01-05 20:13:41',
                'congkhai' => 1,
            ),
            35 => 
            array (
                'id' => 52,
                'biennhan_id' => 323,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong',
                'created_at' => '2019-01-06 06:05:05',
                'updated_at' => '2019-01-06 06:05:05',
                'congkhai' => 1,
            ),
            36 => 
            array (
                'id' => 53,
                'biennhan_id' => 323,
                'nhanvien_id' => 1,
                'noidung' => 'Đã trả máy cho khách hàng',
                'created_at' => '2019-01-06 06:05:25',
                'updated_at' => '2019-01-06 06:05:25',
                'congkhai' => 1,
            ),
            37 => 
            array (
                'id' => 54,
                'biennhan_id' => 318,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong, đợi khách lấy máy',
                'created_at' => '2019-01-06 06:44:10',
                'updated_at' => '2019-01-06 06:44:10',
                'congkhai' => 1,
            ),
            38 => 
            array (
                'id' => 55,
                'biennhan_id' => 318,
                'nhanvien_id' => 1,
                'noidung' => 'Đã giao máy cho khách, BẢO HÀNH MIỄN PHI ',
                'created_at' => '2019-01-06 19:21:44',
                'updated_at' => '2019-01-06 19:21:44',
                'congkhai' => 1,
            ),
            39 => 
            array (
                'id' => 56,
                'biennhan_id' => 321,
                'nhanvien_id' => 1,
                'noidung' => 'Khách hàng không phản hồi',
                'created_at' => '2019-01-06 19:22:10',
                'updated_at' => '2019-01-06 19:22:10',
                'congkhai' => 1,
            ),
            40 => 
            array (
                'id' => 57,
                'biennhan_id' => 325,
                'nhanvien_id' => 1,
                'noidung' => 'NT báo giá 150k, bh 12 tháng',
                'created_at' => '2019-01-07 01:04:44',
                'updated_at' => '2019-01-07 01:04:44',
                'congkhai' => 0,
            ),
            41 => 
            array (
                'id' => 58,
                'biennhan_id' => 325,
                'nhanvien_id' => 3,
                'noidung' => 'đã báo khách giá 200k',
                'created_at' => '2019-01-07 01:28:49',
                'updated_at' => '2019-01-07 01:28:49',
                'congkhai' => 0,
            ),
            42 => 
            array (
                'id' => 59,
                'biennhan_id' => 324,
                'nhanvien_id' => 1,
                'noidung' => 'Đã giao máy cho khách',
                'created_at' => '2019-01-07 02:59:24',
                'updated_at' => '2019-01-07 02:59:24',
                'congkhai' => 0,
            ),
            43 => 
            array (
                'id' => 60,
                'biennhan_id' => 326,
                'nhanvien_id' => 1,
                'noidung' => 'Không xử lý, đã trả máy khách',
                'created_at' => '2019-01-09 01:24:56',
                'updated_at' => '2019-01-09 01:24:56',
                'congkhai' => 1,
            ),
            44 => 
            array (
                'id' => 61,
                'biennhan_id' => 317,
                'nhanvien_id' => 2,
                'noidung' => 'Thứ 7 bạn lại lấy báo giá 100k tiền cài win vệ sinh với sữa chữa. Tặng bạn 1 chip wifi',
                'created_at' => '2019-01-09 06:07:57',
                'updated_at' => '2019-01-09 06:07:57',
                'congkhai' => 0,
            ),
            45 => 
            array (
                'id' => 62,
                'biennhan_id' => 327,
                'nhanvien_id' => 2,
                'noidung' => 'Phím không sử dụng được',
                'created_at' => '2019-01-09 07:31:13',
                'updated_at' => '2019-01-09 07:31:13',
                'congkhai' => 0,
            ),
            46 => 
            array (
                'id' => 63,
                'biennhan_id' => 330,
                'nhanvien_id' => 4,
                'noidung' => 'Đã xử lý xong, đã thu 20.000Đ',
                'created_at' => '2019-01-10 21:12:18',
                'updated_at' => '2019-01-10 21:12:18',
                'congkhai' => 1,
            ),
            47 => 
            array (
                'id' => 64,
                'biennhan_id' => 329,
                'nhanvien_id' => 4,
                'noidung' => 'Đã xử lý xong, chưa gọi khách./',
                'created_at' => '2019-01-10 21:23:26',
                'updated_at' => '2019-01-10 21:23:26',
                'congkhai' => 0,
            ),
            48 => 
            array (
                'id' => 65,
                'biennhan_id' => 327,
                'nhanvien_id' => 4,
                'noidung' => 'Đã xử lý xong, lỗi bàn phím',
                'created_at' => '2019-01-10 21:23:59',
                'updated_at' => '2019-01-10 21:23:59',
                'congkhai' => 0,
            ),
            49 => 
            array (
                'id' => 66,
                'biennhan_id' => 328,
                'nhanvien_id' => 4,
                'noidung' => 'Máy Acer, đã xử lý xong./',
                'created_at' => '2019-01-10 21:25:25',
                'updated_at' => '2019-01-10 21:25:25',
                'congkhai' => 1,
            ),
            50 => 
            array (
                'id' => 67,
                'biennhan_id' => 328,
                'nhanvien_id' => 4,
                'noidung' => 'Máy Dell, lỗi ổ cứng./',
                'created_at' => '2019-01-10 21:25:39',
                'updated_at' => '2019-01-10 21:25:39',
                'congkhai' => 1,
            ),
            51 => 
            array (
                'id' => 68,
                'biennhan_id' => 328,
                'nhanvien_id' => 4,
                'noidung' => 'Báo giá ổ 500GB mới 1tr2, cũ 700k./',
                'created_at' => '2019-01-10 21:26:04',
                'updated_at' => '2019-01-10 21:26:04',
                'congkhai' => 0,
            ),
            52 => 
            array (
                'id' => 69,
                'biennhan_id' => 328,
                'nhanvien_id' => 4,
                'noidung' => 'Báo giá ổ 500GB mới 1tr2, cũ 700k./',
                'created_at' => '2019-01-10 21:26:09',
                'updated_at' => '2019-01-10 21:26:09',
                'congkhai' => 1,
            ),
            53 => 
            array (
                'id' => 70,
                'biennhan_id' => 329,
                'nhanvien_id' => 3,
                'noidung' => 'đã gọi Chị Giang, chiều 11/1 Chị tới nhận',
                'created_at' => '2019-01-11 00:45:11',
                'updated_at' => '2019-01-11 00:45:11',
                'congkhai' => 0,
            ),
            54 => 
            array (
                'id' => 71,
                'biennhan_id' => 329,
                'nhanvien_id' => 3,
                'noidung' => 'đã gọi Chị Giang, chiều 11/1 Chị tới nhận',
                'created_at' => '2019-01-11 00:45:14',
                'updated_at' => '2019-01-11 00:45:14',
                'congkhai' => 0,
            ),
            55 => 
            array (
                'id' => 72,
                'biennhan_id' => 327,
                'nhanvien_id' => 3,
                'noidung' => 'đã báo giá bàn phím 275k +  công thay 20k.. chủ nhật tới mới quyết định thay bàn phím hay không.',
                'created_at' => '2019-01-11 01:10:09',
                'updated_at' => '2019-01-11 01:10:09',
                'congkhai' => 0,
            ),
            56 => 
            array (
                'id' => 73,
                'biennhan_id' => 328,
                'nhanvien_id' => 3,
                'noidung' => 'ổ 500gb đã báo khách 1tr2 + công thay 20k, khách đồng ý thay; máy dell cài thêm win 10',
                'created_at' => '2019-01-11 01:19:18',
                'updated_at' => '2019-01-11 01:19:18',
                'congkhai' => 0,
            ),
            57 => 
            array (
                'id' => 74,
                'biennhan_id' => 327,
                'nhanvien_id' => 5,
                'noidung' => 'Đã crack office 2010',
                'created_at' => '2019-01-11 01:21:51',
                'updated_at' => '2019-01-11 01:21:51',
                'congkhai' => 1,
            ),
            58 => 
            array (
                'id' => 75,
                'biennhan_id' => 327,
                'nhanvien_id' => 5,
                'noidung' => 'cài driver còn thiếu',
                'created_at' => '2019-01-11 01:22:07',
                'updated_at' => '2019-01-11 01:22:07',
                'congkhai' => 1,
            ),
            59 => 
            array (
                'id' => 76,
                'biennhan_id' => 328,
                'nhanvien_id' => 5,
                'noidung' => 'Đã thay ổ cứng và cài win',
                'created_at' => '2019-01-11 03:49:11',
                'updated_at' => '2019-01-11 03:49:11',
                'congkhai' => 1,
            ),
            60 => 
            array (
                'id' => 77,
                'biennhan_id' => 328,
                'nhanvien_id' => 3,
                'noidung' => 'chiều chủ nhật 13/1 khách lấy',
                'created_at' => '2019-01-11 04:39:43',
                'updated_at' => '2019-01-11 04:39:43',
                'congkhai' => 0,
            ),
            61 => 
            array (
                'id' => 78,
                'biennhan_id' => 332,
                'nhanvien_id' => 1,
                'noidung' => 'Đang xử lý./',
                'created_at' => '2019-01-11 17:57:52',
                'updated_at' => '2019-01-11 17:57:52',
                'congkhai' => 1,
            ),
            62 => 
            array (
                'id' => 79,
                'biennhan_id' => 332,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong, đã giao máy, thu 25K./',
                'created_at' => '2019-01-11 19:18:09',
                'updated_at' => '2019-01-11 19:18:09',
                'congkhai' => 1,
            ),
            63 => 
            array (
                'id' => 80,
                'biennhan_id' => 327,
                'nhanvien_id' => 1,
                'noidung' => 'Đợi khách phản hồi./',
                'created_at' => '2019-01-11 19:19:33',
                'updated_at' => '2019-01-11 19:19:33',
                'congkhai' => 1,
            ),
            64 => 
            array (
                'id' => 81,
                'biennhan_id' => 327,
                'nhanvien_id' => 3,
            'noidung' => 'ĐÃ GIAO KHÁCH (35K)',
                'created_at' => '2019-01-12 01:08:28',
                'updated_at' => '2019-01-12 01:08:28',
                'congkhai' => 0,
            ),
            65 => 
            array (
                'id' => 82,
                'biennhan_id' => 333,
                'nhanvien_id' => 2,
                'noidung' => 'Còn 2 cái driver lỗi',
                'created_at' => '2019-01-12 07:17:31',
                'updated_at' => '2019-01-12 07:17:31',
                'congkhai' => 0,
            ),
            66 => 
            array (
                'id' => 83,
                'biennhan_id' => 333,
                'nhanvien_id' => 2,
                'noidung' => 'đã giao khách',
                'created_at' => '2019-01-13 21:32:27',
                'updated_at' => '2019-01-13 21:32:27',
                'congkhai' => 0,
            ),
            67 => 
            array (
                'id' => 84,
                'biennhan_id' => 339,
                'nhanvien_id' => 2,
                'noidung' => 'Đã cài win 10, cài office chưa crack win + office, Kiểm tra phím chuột còn lỗi không + chưa vệ sinh máy',
                'created_at' => '2019-01-13 21:33:43',
                'updated_at' => '2019-01-13 21:33:43',
                'congkhai' => 0,
            ),
            68 => 
            array (
                'id' => 85,
                'biennhan_id' => 338,
                'nhanvien_id' => 5,
                'noidung' => 'Đã nhận máy ,nhưng chưa xử lý',
                'created_at' => '2019-01-14 01:46:21',
                'updated_at' => '2019-01-14 01:46:21',
                'congkhai' => 1,
            ),
            69 => 
            array (
                'id' => 86,
                'biennhan_id' => 339,
                'nhanvien_id' => 3,
                'noidung' => 'VỆ SINH MÁY GẤP',
                'created_at' => '2019-01-14 07:28:44',
                'updated_at' => '2019-01-14 07:28:44',
                'congkhai' => 0,
            ),
            70 => 
            array (
                'id' => 87,
                'biennhan_id' => 338,
                'nhanvien_id' => 1,
                'noidung' => 'Đã trả máy khách./',
                'created_at' => '2019-01-14 19:23:29',
                'updated_at' => '2019-01-14 19:23:29',
                'congkhai' => 1,
            ),
            71 => 
            array (
                'id' => 88,
                'biennhan_id' => 339,
                'nhanvien_id' => 2,
                'noidung' => 'đã giao khách',
                'created_at' => '2019-01-14 19:23:51',
                'updated_at' => '2019-01-14 19:23:51',
                'congkhai' => 0,
            ),
            72 => 
            array (
                'id' => 89,
                'biennhan_id' => 340,
                'nhanvien_id' => 1,
                'noidung' => 'Đã hoàn thành, đợi khách lấy máy.',
                'created_at' => '2019-01-16 00:11:48',
                'updated_at' => '2019-01-16 00:11:48',
                'congkhai' => 1,
            ),
            73 => 
            array (
                'id' => 90,
                'biennhan_id' => 339,
                'nhanvien_id' => 1,
                'noidung' => 'Khách phản hồi: Touchpad bị lỗi.',
                'created_at' => '2019-01-16 01:04:28',
                'updated_at' => '2019-01-16 01:04:28',
                'congkhai' => 1,
            ),
            74 => 
            array (
                'id' => 91,
                'biennhan_id' => 338,
                'nhanvien_id' => 1,
            'noidung' => 'Khách phản hồi: Tối thứ 7 (19/01) gửi kiểm tra lại.',
                'created_at' => '2019-01-16 01:09:11',
                'updated_at' => '2019-01-16 01:09:11',
                'congkhai' => 1,
            ),
            75 => 
            array (
                'id' => 92,
                'biennhan_id' => 329,
                'nhanvien_id' => 1,
                'noidung' => 'Khách phản hồi: Trình xem ảnh bị lỗi.',
                'created_at' => '2019-01-16 01:27:04',
                'updated_at' => '2019-01-16 01:27:04',
                'congkhai' => 1,
            ),
            76 => 
            array (
                'id' => 93,
                'biennhan_id' => 339,
                'nhanvien_id' => 1,
                'noidung' => 'Khách gửi kiểm tra touchpad + Vệ sinh máy.',
                'created_at' => '2019-01-16 03:09:57',
                'updated_at' => '2019-01-16 03:09:57',
                'congkhai' => 1,
            ),
            77 => 
            array (
                'id' => 94,
                'biennhan_id' => 342,
                'nhanvien_id' => 4,
                'noidung' => '123123',
                'created_at' => '2019-01-16 06:30:54',
                'updated_at' => '2019-01-16 06:30:54',
                'congkhai' => 0,
            ),
            78 => 
            array (
                'id' => 95,
                'biennhan_id' => 342,
                'nhanvien_id' => 4,
                'noidung' => 'ádasdasdasdasd',
                'created_at' => '2019-01-16 06:31:04',
                'updated_at' => '2019-01-16 06:31:04',
                'congkhai' => 0,
            ),
            79 => 
            array (
                'id' => 96,
                'biennhan_id' => 342,
                'nhanvien_id' => 4,
                'noidung' => 'đâsd',
                'created_at' => '2019-01-16 06:31:07',
                'updated_at' => '2019-01-16 06:31:07',
                'congkhai' => 0,
            ),
            80 => 
            array (
                'id' => 97,
                'biennhan_id' => 339,
                'nhanvien_id' => 4,
                'noidung' => 'Xong',
                'created_at' => '2019-01-16 06:31:22',
                'updated_at' => '2019-01-16 06:31:22',
                'congkhai' => 0,
            ),
            81 => 
            array (
                'id' => 98,
                'biennhan_id' => 343,
                'nhanvien_id' => 4,
                'noidung' => 'Đã xử lý xong, đã gọi khách lấy máy',
                'created_at' => '2019-01-16 20:53:17',
                'updated_at' => '2019-01-16 20:53:17',
                'congkhai' => 0,
            ),
            82 => 
            array (
                'id' => 99,
                'biennhan_id' => 343,
                'nhanvien_id' => 4,
                'noidung' => 'Đã xữ lý xong',
                'created_at' => '2019-01-16 20:53:20',
                'updated_at' => '2019-01-16 20:53:20',
                'congkhai' => 0,
            ),
            83 => 
            array (
                'id' => 100,
                'biennhan_id' => 343,
                'nhanvien_id' => 4,
                'noidung' => 'đã vệ sinh, đã báo giá quạt còn chờ chị trả lời',
                'created_at' => '2019-01-16 21:46:46',
                'updated_at' => '2019-01-16 21:46:46',
                'congkhai' => 0,
            ),
            84 => 
            array (
                'id' => 101,
                'biennhan_id' => 344,
                'nhanvien_id' => 1,
                'noidung' => 'Đã báo giá loa 350k, yêu cầu đặt cọc trước 50%.',
                'created_at' => '2019-01-17 18:58:16',
                'updated_at' => '2019-01-17 18:58:16',
                'congkhai' => 0,
            ),
            85 => 
            array (
                'id' => 102,
                'biennhan_id' => 346,
                'nhanvien_id' => 4,
                'noidung' => 'Đã thay màn hình.',
                'created_at' => '2019-01-17 20:50:48',
                'updated_at' => '2019-01-17 20:50:48',
                'congkhai' => 1,
            ),
            86 => 
            array (
                'id' => 103,
                'biennhan_id' => 346,
                'nhanvien_id' => 4,
                'noidung' => 'Đã vệ sinh máy.',
                'created_at' => '2019-01-17 20:50:55',
                'updated_at' => '2019-01-17 20:50:55',
                'congkhai' => 1,
            ),
            87 => 
            array (
                'id' => 104,
                'biennhan_id' => 346,
                'nhanvien_id' => 4,
                'noidung' => 'Đã xử lý xong, đợi khách lấy máy.',
                'created_at' => '2019-01-17 21:30:27',
                'updated_at' => '2019-01-17 21:30:27',
                'congkhai' => 1,
            ),
            88 => 
            array (
                'id' => 105,
                'biennhan_id' => 344,
                'nhanvien_id' => 4,
                'noidung' => 'Đã cài đặt xong, đợi khách lấy máy và đặt cọc.',
                'created_at' => '2019-01-17 21:31:31',
                'updated_at' => '2019-01-17 21:31:31',
                'congkhai' => 1,
            ),
            89 => 
            array (
                'id' => 106,
                'biennhan_id' => 346,
                'nhanvien_id' => 3,
                'noidung' => 'đã giao khách 700k bớt 5k dễ thồi^^',
                'created_at' => '2019-01-18 00:47:41',
                'updated_at' => '2019-01-18 00:47:41',
                'congkhai' => 0,
            ),
            90 => 
            array (
                'id' => 107,
                'biennhan_id' => 345,
                'nhanvien_id' => 3,
                'noidung' => 'chuyển qua NT kiểm tra mở máy lúc lên lúc không, có lúc sáng đèn nguồn nhưng không lên màn hình',
                'created_at' => '2019-01-18 00:55:27',
                'updated_at' => '2019-01-18 00:55:27',
                'congkhai' => 0,
            ),
            91 => 
            array (
                'id' => 108,
                'biennhan_id' => 344,
                'nhanvien_id' => 3,
                'noidung' => 'máy hư IC, loa bình thường',
                'created_at' => '2019-01-18 03:22:19',
                'updated_at' => '2019-01-18 03:22:19',
                'congkhai' => 0,
            ),
            92 => 
            array (
                'id' => 109,
                'biennhan_id' => 344,
                'nhanvien_id' => 4,
                'noidung' => 'Máy hư ic',
                'created_at' => '2019-01-18 03:26:33',
                'updated_at' => '2019-01-18 03:26:33',
                'congkhai' => 0,
            ),
            93 => 
            array (
                'id' => 110,
                'biennhan_id' => 344,
                'nhanvien_id' => 4,
                'noidung' => 'báo giá ic 460k khách không thay',
                'created_at' => '2019-01-18 03:26:52',
                'updated_at' => '2019-01-18 03:26:52',
                'congkhai' => 0,
            ),
            94 => 
            array (
                'id' => 111,
                'biennhan_id' => 344,
                'nhanvien_id' => 3,
                'noidung' => 'không sửa IC nữa, khách lấy về, chỉ tính phí cài win 35k',
                'created_at' => '2019-01-18 03:27:24',
                'updated_at' => '2019-01-18 03:27:24',
                'congkhai' => 0,
            ),
            95 => 
            array (
                'id' => 112,
                'biennhan_id' => 345,
                'nhanvien_id' => 4,
                'noidung' => 'mai 19/1 NT mới kiểm tra',
                'created_at' => '2019-01-18 05:54:23',
                'updated_at' => '2019-01-18 05:54:23',
                'congkhai' => 0,
            ),
            96 => 
            array (
                'id' => 113,
                'biennhan_id' => 344,
                'nhanvien_id' => 4,
                'noidung' => 'đang đợi khách tới lấy',
                'created_at' => '2019-01-18 05:57:12',
                'updated_at' => '2019-01-18 05:57:12',
                'congkhai' => 0,
            ),
            97 => 
            array (
                'id' => 114,
                'biennhan_id' => 344,
                'nhanvien_id' => 1,
                'noidung' => 'Không sửa loa, đã trả khách.',
                'created_at' => '2019-01-19 00:47:22',
                'updated_at' => '2019-01-19 00:47:22',
                'congkhai' => 1,
            ),
            98 => 
            array (
                'id' => 115,
                'biennhan_id' => 348,
                'nhanvien_id' => 2,
                'noidung' => 'Cài win 10 + netbean',
                'created_at' => '2019-01-20 03:20:59',
                'updated_at' => '2019-01-20 03:20:59',
                'congkhai' => 0,
            ),
            99 => 
            array (
                'id' => 116,
                'biennhan_id' => 348,
                'nhanvien_id' => 2,
                'noidung' => 'đã giao khách',
                'created_at' => '2019-01-20 03:21:04',
                'updated_at' => '2019-01-20 03:21:04',
                'congkhai' => 0,
            ),
            100 => 
            array (
                'id' => 117,
                'biennhan_id' => 351,
                'nhanvien_id' => 1,
                'noidung' => 'Xác đinh hư ổ cứng.',
                'created_at' => '2019-01-20 21:29:21',
                'updated_at' => '2019-01-20 21:29:21',
                'congkhai' => 1,
            ),
            101 => 
            array (
                'id' => 118,
                'biennhan_id' => 351,
                'nhanvien_id' => 1,
                'noidung' => 'Báo giá ổ cứng 500GB cũ = 580K; 500GB mới = 1190K.',
                'created_at' => '2019-01-20 21:35:34',
                'updated_at' => '2019-01-20 21:35:34',
                'congkhai' => 1,
            ),
            102 => 
            array (
                'id' => 119,
                'biennhan_id' => 351,
                'nhanvien_id' => 1,
                'noidung' => 'Đã liên hệ khác lấy máy, không sửa.',
                'created_at' => '2019-01-20 21:36:22',
                'updated_at' => '2019-01-20 21:36:22',
                'congkhai' => 1,
            ),
            103 => 
            array (
                'id' => 120,
                'biennhan_id' => 350,
                'nhanvien_id' => 1,
                'noidung' => 'Đã cài Windows 10, đã update.',
                'created_at' => '2019-01-20 21:44:18',
                'updated_at' => '2019-01-20 21:44:18',
                'congkhai' => 1,
            ),
            104 => 
            array (
                'id' => 121,
                'biennhan_id' => 352,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong, đã thu 25.000đ',
                'created_at' => '2019-01-20 21:55:36',
                'updated_at' => '2019-01-20 21:55:36',
                'congkhai' => 1,
            ),
            105 => 
            array (
                'id' => 122,
                'biennhan_id' => 350,
                'nhanvien_id' => 1,
                'noidung' => 'Đang cài driver bàn phím, touchpad.',
                'created_at' => '2019-01-20 22:02:38',
                'updated_at' => '2019-01-20 22:02:38',
                'congkhai' => 1,
            ),
            106 => 
            array (
                'id' => 123,
                'biennhan_id' => 345,
                'nhanvien_id' => 3,
                'noidung' => 'Lỗi main, chiều 21/1 NT gọi báo cụ thể',
                'created_at' => '2019-01-21 00:06:57',
                'updated_at' => '2019-01-21 00:06:57',
                'congkhai' => 0,
            ),
            107 => 
            array (
                'id' => 124,
                'biennhan_id' => 350,
                'nhanvien_id' => 5,
                'noidung' => 'Đã cài office và driver',
                'created_at' => '2019-01-21 01:30:47',
                'updated_at' => '2019-01-21 01:30:47',
                'congkhai' => 1,
            ),
            108 => 
            array (
                'id' => 125,
                'biennhan_id' => 347,
                'nhanvien_id' => 2,
                'noidung' => 'Cài win, cài phần mềm Adobe',
                'created_at' => '2019-01-21 01:30:57',
                'updated_at' => '2019-01-21 01:30:57',
                'congkhai' => 0,
            ),
            109 => 
            array (
                'id' => 126,
                'biennhan_id' => 350,
                'nhanvien_id' => 5,
                'noidung' => 'Gọi khách chưa được',
                'created_at' => '2019-01-21 01:31:01',
                'updated_at' => '2019-01-21 01:31:01',
                'congkhai' => 1,
            ),
            110 => 
            array (
                'id' => 127,
                'biennhan_id' => 347,
                'nhanvien_id' => 2,
                'noidung' => 'Đã cài xong đợi khách nhận',
                'created_at' => '2019-01-21 01:31:14',
                'updated_at' => '2019-01-21 01:31:14',
                'congkhai' => 0,
            ),
            111 => 
            array (
                'id' => 128,
                'biennhan_id' => 350,
                'nhanvien_id' => 5,
                'noidung' => 'Đã liên hệ được với khách',
                'created_at' => '2019-01-21 01:37:04',
                'updated_at' => '2019-01-21 01:37:04',
                'congkhai' => 1,
            ),
            112 => 
            array (
                'id' => 129,
                'biennhan_id' => 345,
                'nhanvien_id' => 3,
                'noidung' => 'SỬA MAIN 360K, bảo hành 3 tháng',
                'created_at' => '2019-01-21 02:21:53',
                'updated_at' => '2019-02-08 03:46:30',
                'congkhai' => 1,
            ),
            113 => 
            array (
                'id' => 130,
                'biennhan_id' => 351,
                'nhanvien_id' => 2,
                'noidung' => 'đã gọi Chị Giang, chiều 11/1 Chị tới nhận',
                'created_at' => '2019-01-21 04:09:34',
                'updated_at' => '2019-01-21 04:09:34',
                'congkhai' => 0,
            ),
            114 => 
            array (
                'id' => 131,
                'biennhan_id' => 351,
                'nhanvien_id' => 2,
                'noidung' => 'đã giao khách',
                'created_at' => '2019-01-21 04:09:45',
                'updated_at' => '2019-01-21 04:09:45',
                'congkhai' => 0,
            ),
            115 => 
            array (
                'id' => 132,
                'biennhan_id' => 351,
                'nhanvien_id' => 3,
                'noidung' => 'đã giao khách',
                'created_at' => '2019-01-21 04:22:50',
                'updated_at' => '2019-01-21 04:22:50',
                'congkhai' => 0,
            ),
            116 => 
            array (
                'id' => 133,
                'biennhan_id' => 345,
                'nhanvien_id' => 3,
                'noidung' => 'đã gọi báo giá, đang chờ khách quyết định sửa hay không',
                'created_at' => '2019-01-21 04:24:18',
                'updated_at' => '2019-01-21 04:24:18',
                'congkhai' => 0,
            ),
            117 => 
            array (
                'id' => 134,
                'biennhan_id' => 350,
                'nhanvien_id' => 3,
                'noidung' => 'ĐÃ GIAO KHÁCH',
                'created_at' => '2019-01-21 05:35:23',
                'updated_at' => '2019-01-21 05:35:23',
                'congkhai' => 0,
            ),
            118 => 
            array (
                'id' => 135,
                'biennhan_id' => 353,
                'nhanvien_id' => 3,
                'noidung' => 'ĐÃ CÀI',
                'created_at' => '2019-01-21 05:37:49',
                'updated_at' => '2019-01-21 05:37:49',
                'congkhai' => 0,
            ),
            119 => 
            array (
                'id' => 136,
                'biennhan_id' => 354,
                'nhanvien_id' => 3,
                'noidung' => 'bạn đem máy về do chiều còn thuyết trình, đem lại sau',
                'created_at' => '2019-01-22 03:13:59',
                'updated_at' => '2019-01-22 03:13:59',
                'congkhai' => 0,
            ),
            120 => 
            array (
                'id' => 137,
                'biennhan_id' => 347,
                'nhanvien_id' => 3,
                'noidung' => '23/1 hoặc 24/1 bạn tới nhận',
                'created_at' => '2019-01-22 07:26:05',
                'updated_at' => '2019-01-22 07:26:05',
                'congkhai' => 0,
            ),
            121 => 
            array (
                'id' => 138,
                'biennhan_id' => 356,
                'nhanvien_id' => 5,
                'noidung' => 'đã chuyển qua NT',
                'created_at' => '2019-01-22 12:36:30',
                'updated_at' => '2019-01-22 12:36:30',
                'congkhai' => 1,
            ),
            122 => 
            array (
                'id' => 140,
                'biennhan_id' => 356,
                'nhanvien_id' => 2,
                'noidung' => 'Nhật Trân báo giá 400k thay chip loa, nhưng chỉ nghe  1 bên, bên loa còn lại bị hư',
                'created_at' => '2019-01-23 06:43:28',
                'updated_at' => '2019-01-23 06:43:28',
                'congkhai' => 0,
            ),
            123 => 
            array (
                'id' => 141,
                'biennhan_id' => 347,
                'nhanvien_id' => 3,
            'noidung' => 'NHỚ THU 50K (CÀI WIN&CÀI PHẦN MỀM)',
                'created_at' => '2019-01-23 07:27:50',
                'updated_at' => '2019-01-23 07:27:50',
                'congkhai' => 0,
            ),
            124 => 
            array (
                'id' => 142,
                'biennhan_id' => 347,
                'nhanvien_id' => 5,
                'noidung' => 'ĐÃ GIAO ĐÃ THU',
                'created_at' => '2019-01-23 10:25:26',
                'updated_at' => '2019-01-23 10:25:26',
                'congkhai' => 0,
            ),
            125 => 
            array (
                'id' => 143,
                'biennhan_id' => 356,
                'nhanvien_id' => 5,
                'noidung' => 'ĐÃ GỌI BÁO GIÁ LOA 450K+IC 400K TỔNG 850K',
                'created_at' => '2019-01-23 10:26:25',
                'updated_at' => '2019-01-23 10:26:25',
                'congkhai' => 0,
            ),
            126 => 
            array (
                'id' => 144,
                'biennhan_id' => 356,
                'nhanvien_id' => 4,
                'noidung' => 'mai nhận máy',
                'created_at' => '2019-01-23 12:45:11',
                'updated_at' => '2019-01-23 12:45:11',
                'congkhai' => 0,
            ),
            127 => 
            array (
                'id' => 145,
                'biennhan_id' => 356,
                'nhanvien_id' => 4,
                'noidung' => 'khách không đồng ý sửa mai nhận máy',
                'created_at' => '2019-01-23 12:48:18',
                'updated_at' => '2019-01-23 12:48:18',
                'congkhai' => 0,
            ),
            128 => 
            array (
                'id' => 146,
                'biennhan_id' => 357,
                'nhanvien_id' => 3,
                'noidung' => 'đã gọi NT, ngày mai 25/1 bên đó mới kiểm tra',
                'created_at' => '2019-01-24 06:58:53',
                'updated_at' => '2019-01-24 06:58:53',
                'congkhai' => 0,
            ),
            129 => 
            array (
                'id' => 147,
                'biennhan_id' => 358,
                'nhanvien_id' => 5,
                'noidung' => 'Đã xử lý xong, đã gọi khách lấy máy.',
                'created_at' => '2019-01-24 08:52:36',
                'updated_at' => '2019-01-24 08:52:36',
                'congkhai' => 1,
            ),
            130 => 
            array (
                'id' => 148,
                'biennhan_id' => 357,
                'nhanvien_id' => 5,
                'noidung' => 'Đang kiểm tra.',
                'created_at' => '2019-01-24 08:53:30',
                'updated_at' => '2019-01-24 08:53:30',
                'congkhai' => 1,
            ),
            131 => 
            array (
                'id' => 149,
                'biennhan_id' => 358,
                'nhanvien_id' => 3,
                'noidung' => 'ĐÃ GIAO KHÁCH',
                'created_at' => '2019-01-24 11:05:54',
                'updated_at' => '2019-01-24 11:05:54',
                'congkhai' => 0,
            ),
            132 => 
            array (
                'id' => 150,
                'biennhan_id' => 345,
                'nhanvien_id' => 3,
                'noidung' => 'QUA TẾT KHÁCH LẤY',
                'created_at' => '2019-01-24 11:06:25',
                'updated_at' => '2019-02-08 03:46:31',
                'congkhai' => 1,
            ),
            133 => 
            array (
                'id' => 151,
                'biennhan_id' => 359,
                'nhanvien_id' => 3,
                'noidung' => 'báo giá 1tr8',
                'created_at' => '2019-01-24 12:26:56',
                'updated_at' => '2019-01-24 12:26:56',
                'congkhai' => 0,
            ),
            134 => 
            array (
                'id' => 152,
                'biennhan_id' => 359,
                'nhanvien_id' => 3,
                'noidung' => 'ĐÃ MUA GIÁ 1TR8. DEALED!',
                'created_at' => '2019-01-25 02:13:10',
                'updated_at' => '2019-01-25 02:13:10',
                'congkhai' => 0,
            ),
            135 => 
            array (
                'id' => 153,
                'biennhan_id' => 357,
                'nhanvien_id' => 3,
                'noidung' => 'VẪN ĐANG KIỂM TRA',
                'created_at' => '2019-01-25 08:44:20',
                'updated_at' => '2019-01-25 08:44:20',
                'congkhai' => 0,
            ),
            136 => 
            array (
                'id' => 154,
                'biennhan_id' => 360,
                'nhanvien_id' => 3,
                'noidung' => 'đã xong..',
                'created_at' => '2019-01-25 09:59:52',
                'updated_at' => '2019-01-25 09:59:52',
                'congkhai' => 0,
            ),
            137 => 
            array (
                'id' => 155,
                'biennhan_id' => 362,
                'nhanvien_id' => 7,
                'noidung' => 'Đã xử lý xong, đã giao máy.',
                'created_at' => '2019-01-26 13:03:11',
                'updated_at' => '2019-01-26 13:03:11',
                'congkhai' => 1,
            ),
            138 => 
            array (
                'id' => 156,
                'biennhan_id' => 357,
                'nhanvien_id' => 7,
                'noidung' => 'Đã xử lý xong, đã giao máy.',
                'created_at' => '2019-01-26 13:03:53',
                'updated_at' => '2019-01-26 13:03:53',
                'congkhai' => 1,
            ),
            139 => 
            array (
                'id' => 157,
                'biennhan_id' => 363,
                'nhanvien_id' => 7,
                'noidung' => 'Đã xử lý xong, đã giao máy, thu 780K.',
                'created_at' => '2019-01-26 13:10:15',
                'updated_at' => '2019-01-26 13:10:15',
                'congkhai' => 0,
            ),
            140 => 
            array (
                'id' => 158,
                'biennhan_id' => 364,
                'nhanvien_id' => 1,
                'noidung' => 'Asia/Ho_Chi_Minh',
                'created_at' => '2019-01-26 18:50:45',
                'updated_at' => '2019-02-08 04:33:17',
                'congkhai' => 1,
            ),
            141 => 
            array (
                'id' => 159,
                'biennhan_id' => 364,
                'nhanvien_id' => 1,
                'noidung' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
                'created_at' => '2019-01-28 02:24:17',
                'updated_at' => '2019-01-28 02:24:17',
                'congkhai' => 1,
            ),
            142 => 
            array (
                'id' => 160,
                'biennhan_id' => 364,
                'nhanvien_id' => 1,
                'noidung' => 'Eget nunc scelerisque viverra mauris in aliquam sem.',
                'created_at' => '2019-01-28 02:24:26',
                'updated_at' => '2019-01-28 02:24:26',
                'congkhai' => 1,
            ),
            143 => 
            array (
                'id' => 161,
                'biennhan_id' => 364,
                'nhanvien_id' => 1,
                'noidung' => ' GENERATED LOREM IPSUM  5     COPY  Icon copy  red Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Donec adipiscing tristique risus nec feugiat in. Eu augue ut lectus arcu bibendu',
                'created_at' => '2019-01-28 02:24:33',
                'updated_at' => '2019-02-08 04:33:14',
                'congkhai' => 1,
            ),
            144 => 
            array (
                'id' => 162,
                'biennhan_id' => 364,
                'nhanvien_id' => 1,
                'noidung' => ' GENERATED LOREM IPSUM  5     COPY  Icon copy  red Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Donec adipiscing tristique risus nec feugiat in. Eu augue ut lectus arcu bibendu',
                'created_at' => '2019-01-28 02:24:41',
                'updated_at' => '2019-02-08 04:45:44',
                'congkhai' => 0,
            ),
            145 => 
            array (
                'id' => 163,
                'biennhan_id' => 367,
                'nhanvien_id' => 1,
                'noidung' => 'Cài đặt phần mềm tại chỗ.',
                'created_at' => '2019-02-11 07:03:25',
                'updated_at' => '2019-02-11 07:03:25',
                'congkhai' => 1,
            ),
            146 => 
            array (
                'id' => 164,
                'biennhan_id' => 367,
                'nhanvien_id' => 1,
                'noidung' => 'Đã cài đặt xong Camtasia, đang chia lại ổ cứng.',
                'created_at' => '2019-02-11 07:32:48',
                'updated_at' => '2019-02-11 07:32:48',
                'congkhai' => 1,
            ),
            147 => 
            array (
                'id' => 165,
                'biennhan_id' => 367,
                'nhanvien_id' => 1,
                'noidung' => 'Mật khẩu máy: lamnhut',
                'created_at' => '2019-02-11 07:35:33',
                'updated_at' => '2019-02-11 07:35:33',
                'congkhai' => 0,
            ),
            148 => 
            array (
                'id' => 166,
                'biennhan_id' => 367,
                'nhanvien_id' => 1,
                'noidung' => 'Đã chia ổ cứng xong, đang cài đặt Premiere.',
                'created_at' => '2019-02-11 07:51:39',
                'updated_at' => '2019-02-11 07:51:39',
                'congkhai' => 1,
            ),
            149 => 
            array (
                'id' => 167,
                'biennhan_id' => 368,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong, đã giao máy.',
                'created_at' => '2019-02-12 03:51:19',
                'updated_at' => '2019-02-12 03:51:19',
                'congkhai' => 1,
            ),
            150 => 
            array (
                'id' => 168,
                'biennhan_id' => 345,
                'nhanvien_id' => 1,
                'noidung' => 'Đã giao máy.',
                'created_at' => '2019-02-12 03:51:49',
                'updated_at' => '2019-02-12 03:51:49',
                'congkhai' => 1,
            ),
            151 => 
            array (
                'id' => 169,
                'biennhan_id' => 365,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong, đã giao máy.',
                'created_at' => '2019-02-12 03:52:04',
                'updated_at' => '2019-02-12 03:52:04',
                'congkhai' => 1,
            ),
            152 => 
            array (
                'id' => 170,
                'biennhan_id' => 366,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong, đã giao máy.',
                'created_at' => '2019-02-12 03:52:27',
                'updated_at' => '2019-02-12 03:52:27',
                'congkhai' => 1,
            ),
            153 => 
            array (
                'id' => 171,
                'biennhan_id' => 367,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong, đã giao máy.',
                'created_at' => '2019-02-12 03:52:36',
                'updated_at' => '2019-02-12 03:52:36',
                'congkhai' => 1,
            ),
            154 => 
            array (
                'id' => 172,
                'biennhan_id' => 371,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong, đã gọi khách lấy máy.',
                'created_at' => '2019-02-12 04:06:35',
                'updated_at' => '2019-02-12 04:06:35',
                'congkhai' => 1,
            ),
            155 => 
            array (
                'id' => 173,
                'biennhan_id' => 370,
                'nhanvien_id' => 1,
                'noidung' => 'Đang kiểm tra.',
                'created_at' => '2019-02-12 04:07:50',
                'updated_at' => '2019-02-12 04:07:50',
                'congkhai' => 1,
            ),
            156 => 
            array (
                'id' => 174,
                'biennhan_id' => 369,
                'nhanvien_id' => 1,
                'noidung' => 'Đang xử lý',
                'created_at' => '2019-02-12 04:16:21',
                'updated_at' => '2019-02-12 04:16:21',
                'congkhai' => 1,
            ),
            157 => 
            array (
                'id' => 175,
                'biennhan_id' => 369,
                'nhanvien_id' => 1,
                'noidung' => 'Đã cài đặt Windows thành công, đang cập nhật và cài đặt driver',
                'created_at' => '2019-02-12 04:38:41',
                'updated_at' => '2019-02-12 04:38:41',
                'congkhai' => 1,
            ),
            158 => 
            array (
                'id' => 176,
                'biennhan_id' => 370,
                'nhanvien_id' => 1,
                'noidung' => 'Lỗi bàn phím',
                'created_at' => '2019-02-12 04:39:00',
                'updated_at' => '2019-02-12 04:39:00',
                'congkhai' => 1,
            ),
            159 => 
            array (
                'id' => 177,
                'biennhan_id' => 370,
                'nhanvien_id' => 1,
                'noidung' => 'Báo giá bàn phím Dell 3458 giá 220K + phí thay 20K',
                'created_at' => '2019-02-12 04:39:38',
                'updated_at' => '2019-02-12 04:39:38',
                'congkhai' => 1,
            ),
            160 => 
            array (
                'id' => 178,
                'biennhan_id' => 369,
                'nhanvien_id' => 3,
                'noidung' => 'khách đã nhận máy',
                'created_at' => '2019-02-12 10:02:41',
                'updated_at' => '2019-02-12 10:02:41',
                'congkhai' => 0,
            ),
            161 => 
            array (
                'id' => 179,
                'biennhan_id' => 371,
                'nhanvien_id' => 1,
                'noidung' => 'Khách đã nhận máy, thu 35K.',
                'created_at' => '2019-02-13 08:26:18',
                'updated_at' => '2019-02-13 08:26:18',
                'congkhai' => 1,
            ),
            162 => 
            array (
                'id' => 180,
                'biennhan_id' => 373,
                'nhanvien_id' => 1,
                'noidung' => 'Đang xử lý.',
                'created_at' => '2019-02-13 08:42:15',
                'updated_at' => '2019-02-13 08:42:33',
                'congkhai' => 1,
            ),
            163 => 
            array (
                'id' => 181,
                'biennhan_id' => 371,
                'nhanvien_id' => 1,
                'noidung' => 'Gửi cài Office 2010',
                'created_at' => '2019-02-13 09:03:00',
                'updated_at' => '2019-02-13 09:03:00',
                'congkhai' => 1,
            ),
            164 => 
            array (
                'id' => 182,
                'biennhan_id' => 371,
                'nhanvien_id' => 1,
                'noidung' => 'Đã cài đặt Office thành công, đang giao máy.',
                'created_at' => '2019-02-13 09:13:44',
                'updated_at' => '2019-02-13 09:13:44',
                'congkhai' => 1,
            ),
            165 => 
            array (
                'id' => 183,
                'biennhan_id' => 373,
                'nhanvien_id' => 1,
                'noidung' => 'Đã cài đặt xong, đợi khách lấy máy.',
                'created_at' => '2019-02-13 11:39:15',
                'updated_at' => '2019-02-13 11:39:15',
                'congkhai' => 1,
            ),
            166 => 
            array (
                'id' => 184,
                'biennhan_id' => 374,
                'nhanvien_id' => 1,
                'noidung' => 'Đang kiểm tra',
                'created_at' => '2019-02-13 11:56:51',
                'updated_at' => '2019-02-13 11:56:51',
                'congkhai' => 1,
            ),
            167 => 
            array (
                'id' => 185,
                'biennhan_id' => 372,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong, đã giao máy.',
                'created_at' => '2019-02-13 11:58:26',
                'updated_at' => '2019-02-13 11:58:26',
                'congkhai' => 1,
            ),
            168 => 
            array (
                'id' => 186,
                'biennhan_id' => 374,
                'nhanvien_id' => 3,
                'noidung' => 'chuyển Nhựt Trân',
                'created_at' => '2019-02-14 00:47:41',
                'updated_at' => '2019-02-14 00:47:41',
                'congkhai' => 0,
            ),
            169 => 
            array (
                'id' => 187,
                'biennhan_id' => 373,
                'nhanvien_id' => 3,
                'noidung' => 'khách đã nhận máy',
                'created_at' => '2019-02-14 00:49:14',
                'updated_at' => '2019-02-14 00:49:14',
                'congkhai' => 0,
            ),
            170 => 
            array (
                'id' => 188,
                'biennhan_id' => 376,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong, đã giao máy.',
                'created_at' => '2019-02-15 03:41:26',
                'updated_at' => '2019-02-15 03:41:26',
                'congkhai' => 1,
            ),
            171 => 
            array (
                'id' => 189,
                'biennhan_id' => 379,
                'nhanvien_id' => 5,
                'noidung' => 'mật khẩu 12345678',
                'created_at' => '2019-02-15 08:40:31',
                'updated_at' => '2019-02-15 08:40:31',
                'congkhai' => 1,
            ),
            172 => 
            array (
                'id' => 190,
                'biennhan_id' => 379,
                'nhanvien_id' => 1,
                'noidung' => 'Đang xử lý.',
                'created_at' => '2019-02-16 00:53:50',
                'updated_at' => '2019-02-16 00:53:50',
                'congkhai' => 1,
            ),
            173 => 
            array (
                'id' => 191,
                'biennhan_id' => 384,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong, đã giao máy, thu 280K',
                'created_at' => '2019-02-16 04:33:25',
                'updated_at' => '2019-02-16 04:33:25',
                'congkhai' => 1,
            ),
            174 => 
            array (
                'id' => 192,
                'biennhan_id' => 382,
                'nhanvien_id' => 1,
                'noidung' => 'Hư CPU, báo giá thay 250K',
                'created_at' => '2019-02-16 04:35:20',
                'updated_at' => '2019-02-16 04:35:20',
                'congkhai' => 1,
            ),
            175 => 
            array (
                'id' => 193,
                'biennhan_id' => 382,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong, đã gọi khách lấy máy.',
                'created_at' => '2019-02-16 04:35:38',
                'updated_at' => '2019-02-16 04:35:41',
                'congkhai' => 1,
            ),
            176 => 
            array (
                'id' => 194,
                'biennhan_id' => 381,
                'nhanvien_id' => 1,
                'noidung' => 'Đã cài lại Windows, đang kiểm tra Wifi',
                'created_at' => '2019-02-16 04:36:16',
                'updated_at' => '2019-02-16 04:36:16',
                'congkhai' => 1,
            ),
            177 => 
            array (
                'id' => 195,
                'biennhan_id' => 381,
                'nhanvien_id' => 1,
                'noidung' => 'Đã gửi máy qua NT kiểm tra',
                'created_at' => '2019-02-16 04:36:24',
                'updated_at' => '2019-02-16 04:36:24',
                'congkhai' => 0,
            ),
            178 => 
            array (
                'id' => 196,
                'biennhan_id' => 379,
                'nhanvien_id' => 1,
                'noidung' => 'Đã cài Windows, chưa cài office',
                'created_at' => '2019-02-16 04:36:54',
                'updated_at' => '2019-02-16 04:36:54',
                'congkhai' => 0,
            ),
            179 => 
            array (
                'id' => 197,
                'biennhan_id' => 382,
                'nhanvien_id' => 1,
                'noidung' => 'Đã giao máy, thu 250K',
                'created_at' => '2019-02-16 09:48:08',
                'updated_at' => '2019-02-16 09:48:08',
                'congkhai' => 1,
            ),
            180 => 
            array (
                'id' => 198,
                'biennhan_id' => 383,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong, đã giao máy khách, MIỄN PHÍ',
                'created_at' => '2019-02-16 09:48:42',
                'updated_at' => '2019-02-16 09:48:42',
                'congkhai' => 1,
            ),
            181 => 
            array (
                'id' => 199,
                'biennhan_id' => 386,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong, đợi khách lấy máy.',
                'created_at' => '2019-02-16 09:49:55',
                'updated_at' => '2019-02-16 09:49:55',
                'congkhai' => 1,
            ),
            182 => 
            array (
                'id' => 200,
                'biennhan_id' => 386,
                'nhanvien_id' => 1,
                'noidung' => 'Đã liên hệ khách.',
                'created_at' => '2019-02-16 09:50:06',
                'updated_at' => '2019-02-16 09:50:06',
                'congkhai' => 1,
            ),
            183 => 
            array (
                'id' => 201,
                'biennhan_id' => 386,
                'nhanvien_id' => 2,
                'noidung' => 'Đã giao khách',
                'created_at' => '2019-02-16 13:37:59',
                'updated_at' => '2019-02-16 13:37:59',
                'congkhai' => 0,
            ),
            184 => 
            array (
                'id' => 202,
                'biennhan_id' => 379,
                'nhanvien_id' => 6,
                'noidung' => 'Đã cài đặt xong, đợi khách lấy máy.',
                'created_at' => '2019-02-18 04:57:17',
                'updated_at' => '2019-02-18 04:57:17',
                'congkhai' => 1,
            ),
            185 => 
            array (
                'id' => 203,
                'biennhan_id' => 374,
                'nhanvien_id' => 3,
                'noidung' => 'thay vỏ 380k + công thay 50k',
                'created_at' => '2019-02-19 06:22:26',
                'updated_at' => '2019-02-19 06:22:26',
                'congkhai' => 0,
            ),
            186 => 
            array (
                'id' => 204,
                'biennhan_id' => 388,
                'nhanvien_id' => 3,
                'noidung' => 'thay màn hình 960k + công thay 50k, bảo hành 12 tháng',
                'created_at' => '2019-02-19 06:23:38',
                'updated_at' => '2019-02-19 06:23:38',
                'congkhai' => 0,
            ),
            187 => 
            array (
                'id' => 205,
                'biennhan_id' => 390,
                'nhanvien_id' => 3,
                'noidung' => 'khách đem về ngay, không sửa',
                'created_at' => '2019-02-19 06:24:30',
                'updated_at' => '2019-02-19 06:24:30',
                'congkhai' => 0,
            ),
            188 => 
            array (
                'id' => 206,
                'biennhan_id' => 381,
                'nhanvien_id' => 3,
                'noidung' => 'đã giao',
                'created_at' => '2019-02-19 06:25:10',
                'updated_at' => '2019-02-19 06:25:10',
                'congkhai' => 0,
            ),
            189 => 
            array (
                'id' => 207,
                'biennhan_id' => 379,
                'nhanvien_id' => 1,
                'noidung' => 'Khách đã nhận máy, thu 75K.',
                'created_at' => '2019-02-19 11:14:25',
                'updated_at' => '2019-02-19 11:14:25',
                'congkhai' => 0,
            ),
            190 => 
            array (
                'id' => 208,
                'biennhan_id' => 374,
                'nhanvien_id' => 1,
                'noidung' => 'Đã lấy máy về từ NT',
                'created_at' => '2019-02-19 11:14:57',
                'updated_at' => '2019-02-19 11:14:57',
                'congkhai' => 0,
            ),
            191 => 
            array (
                'id' => 209,
                'biennhan_id' => 374,
                'nhanvien_id' => 1,
                'noidung' => 'Báo giá 380K + 50 phí sửa chữa.',
                'created_at' => '2019-02-19 11:15:21',
                'updated_at' => '2019-02-19 11:15:21',
                'congkhai' => 1,
            ),
            192 => 
            array (
                'id' => 210,
                'biennhan_id' => 374,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong, đã gọi khách lấy máy.',
                'created_at' => '2019-02-19 11:15:29',
                'updated_at' => '2019-02-20 09:54:32',
                'congkhai' => 0,
            ),
            193 => 
            array (
                'id' => 211,
                'biennhan_id' => 388,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong, đã giao máy.',
                'created_at' => '2019-02-19 11:19:08',
                'updated_at' => '2019-02-19 11:19:08',
                'congkhai' => 1,
            ),
            194 => 
            array (
                'id' => 212,
                'biennhan_id' => 392,
                'nhanvien_id' => 1,
                'noidung' => 'Đang xử lý.',
                'created_at' => '2019-02-19 11:20:37',
                'updated_at' => '2019-02-19 11:20:37',
                'congkhai' => 1,
            ),
            195 => 
            array (
                'id' => 213,
                'biennhan_id' => 393,
                'nhanvien_id' => 1,
                'noidung' => 'Đã kiểm tra.',
                'created_at' => '2019-02-19 11:24:51',
                'updated_at' => '2019-02-19 11:24:51',
                'congkhai' => 1,
            ),
            196 => 
            array (
                'id' => 214,
                'biennhan_id' => 393,
                'nhanvien_id' => 1,
                'noidung' => 'Phát hiện bàn phím lỗi.',
                'created_at' => '2019-02-19 11:31:48',
                'updated_at' => '2019-02-19 11:31:48',
                'congkhai' => 1,
            ),
            197 => 
            array (
                'id' => 215,
                'biennhan_id' => 392,
                'nhanvien_id' => 1,
                'noidung' => 'Báo giá bàn phím 280K + phí sữa chữa 20K.',
                'created_at' => '2019-02-19 12:42:36',
                'updated_at' => '2019-02-20 01:31:20',
                'congkhai' => 0,
            ),
            198 => 
            array (
                'id' => 216,
                'biennhan_id' => 392,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong, đã gọi khách lấy máy.',
                'created_at' => '2019-02-19 13:32:29',
                'updated_at' => '2019-02-19 13:32:33',
                'congkhai' => 1,
            ),
            199 => 
            array (
                'id' => 217,
                'biennhan_id' => 389,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong, đã giao máy.',
                'created_at' => '2019-02-19 13:33:54',
                'updated_at' => '2019-02-19 13:33:54',
                'congkhai' => 1,
            ),
            200 => 
            array (
                'id' => 218,
                'biennhan_id' => 395,
                'nhanvien_id' => 1,
                'noidung' => 'Đa',
                'created_at' => '2019-02-19 16:56:14',
                'updated_at' => '2019-02-19 16:56:14',
                'congkhai' => 0,
            ),
            201 => 
            array (
                'id' => 219,
                'biennhan_id' => 395,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong, đã gọi khách lấy máy.',
                'created_at' => '2019-02-19 16:56:32',
                'updated_at' => '2019-02-19 16:56:39',
                'congkhai' => 1,
            ),
            202 => 
            array (
                'id' => 220,
                'biennhan_id' => 393,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong, đã giao máy, thu 280K',
                'created_at' => '2019-02-20 01:31:05',
                'updated_at' => '2019-02-20 01:31:07',
                'congkhai' => 1,
            ),
            203 => 
            array (
                'id' => 221,
                'biennhan_id' => 392,
                'nhanvien_id' => 1,
                'noidung' => 'Đã giao máy, thu 120K',
                'created_at' => '2019-02-20 01:31:35',
                'updated_at' => '2019-02-20 01:31:35',
                'congkhai' => 1,
            ),
            204 => 
            array (
                'id' => 222,
                'biennhan_id' => 395,
                'nhanvien_id' => 1,
                'noidung' => 'Phát đang giữ máy',
                'created_at' => '2019-02-20 01:31:48',
                'updated_at' => '2019-02-20 01:31:48',
                'congkhai' => 0,
            ),
            205 => 
            array (
                'id' => 223,
                'biennhan_id' => 394,
                'nhanvien_id' => 2,
                'noidung' => 'Đã xử lý xong, đợi khách lấy máy.',
                'created_at' => '2019-02-20 08:10:00',
                'updated_at' => '2019-02-20 08:10:00',
                'congkhai' => 1,
            ),
            206 => 
            array (
                'id' => 224,
                'biennhan_id' => 397,
                'nhanvien_id' => 2,
                'noidung' => 'Báo giá vệ sinh 150K',
                'created_at' => '2019-02-20 08:21:50',
                'updated_at' => '2019-02-20 08:21:52',
                'congkhai' => 0,
            ),
            207 => 
            array (
                'id' => 225,
                'biennhan_id' => 374,
                'nhanvien_id' => 6,
                'noidung' => 'Báo giá pin 280K, đã thay cho khách',
                'created_at' => '2019-02-20 09:54:21',
                'updated_at' => '2019-02-20 09:54:21',
                'congkhai' => 1,
            ),
            208 => 
            array (
                'id' => 226,
                'biennhan_id' => 374,
                'nhanvien_id' => 6,
                'noidung' => 'Đã xử lý xong, đã gọi khách lấy máy.',
                'created_at' => '2019-02-20 09:54:30',
                'updated_at' => '2019-02-20 09:54:30',
                'congkhai' => 1,
            ),
            209 => 
            array (
                'id' => 227,
                'biennhan_id' => 395,
                'nhanvien_id' => 6,
                'noidung' => 'Khách đã nhận máy',
                'created_at' => '2019-02-20 09:54:46',
                'updated_at' => '2019-02-20 09:54:46',
                'congkhai' => 1,
            ),
            210 => 
            array (
                'id' => 228,
                'biennhan_id' => 391,
                'nhanvien_id' => 6,
                'noidung' => 'Đã xử lý xong, khách đã lấy máy.',
                'created_at' => '2019-02-20 09:55:15',
                'updated_at' => '2019-02-20 09:55:15',
                'congkhai' => 1,
            ),
            211 => 
            array (
                'id' => 229,
                'biennhan_id' => 397,
                'nhanvien_id' => 2,
                'noidung' => 'Đã xong',
                'created_at' => '2019-02-20 10:25:25',
                'updated_at' => '2019-02-20 10:25:25',
                'congkhai' => 0,
            ),
            212 => 
            array (
                'id' => 230,
                'biennhan_id' => 400,
                'nhanvien_id' => 1,
                'noidung' => 'Pin máy lỗi',
                'created_at' => '2019-02-21 04:13:20',
                'updated_at' => '2019-02-21 04:13:24',
                'congkhai' => 1,
            ),
            213 => 
            array (
                'id' => 231,
                'biennhan_id' => 400,
                'nhanvien_id' => 1,
                'noidung' => 'Phát hiện lỗi Windows, đã cài đặt lại',
                'created_at' => '2019-02-21 04:13:40',
                'updated_at' => '2019-02-21 04:13:40',
                'congkhai' => 1,
            ),
            214 => 
            array (
                'id' => 232,
                'biennhan_id' => 400,
                'nhanvien_id' => 1,
                'noidung' => 'Đã cài đặt driver, ca sau cài đặt PM',
                'created_at' => '2019-02-21 04:14:02',
                'updated_at' => '2019-02-21 04:14:02',
                'congkhai' => 0,
            ),
            215 => 
            array (
                'id' => 233,
                'biennhan_id' => 401,
                'nhanvien_id' => 1,
                'noidung' => 'Đã chuyển qua NT kiểm tra',
                'created_at' => '2019-02-21 04:14:27',
                'updated_at' => '2019-02-21 04:14:27',
                'congkhai' => 0,
            ),
            216 => 
            array (
                'id' => 234,
                'biennhan_id' => 401,
                'nhanvien_id' => 1,
                'noidung' => 'Đang kiểm tra',
                'created_at' => '2019-02-21 04:14:37',
                'updated_at' => '2019-02-23 02:29:27',
                'congkhai' => 1,
            ),
            217 => 
            array (
                'id' => 235,
                'biennhan_id' => 394,
                'nhanvien_id' => 1,
                'noidung' => 'Đã giao máy, thu 50K',
                'created_at' => '2019-02-21 13:19:55',
                'updated_at' => '2019-02-21 13:19:55',
                'congkhai' => 1,
            ),
            218 => 
            array (
                'id' => 236,
                'biennhan_id' => 400,
                'nhanvien_id' => 1,
                'noidung' => 'Khách yêu cầu báo giá pin, đang đợi giá NT',
                'created_at' => '2019-02-22 02:56:34',
                'updated_at' => '2019-02-22 02:56:34',
                'congkhai' => 0,
            ),
            219 => 
            array (
                'id' => 237,
                'biennhan_id' => 400,
                'nhanvien_id' => 1,
                'noidung' => 'Đã cài đặt xong phần mềm, đợi báo giá pin.',
                'created_at' => '2019-02-22 02:56:49',
                'updated_at' => '2019-02-22 02:56:49',
                'congkhai' => 1,
            ),
            220 => 
            array (
                'id' => 238,
                'biennhan_id' => 378,
                'nhanvien_id' => 1,
                'noidung' => 'test',
                'created_at' => '2019-02-22 04:02:33',
                'updated_at' => '2019-02-22 04:02:33',
                'congkhai' => 0,
            ),
            221 => 
            array (
                'id' => 239,
                'biennhan_id' => 403,
                'nhanvien_id' => 1,
                'noidung' => 'Ca sau gỡ iMindmap cũ và cài đặt lại',
                'created_at' => '2019-02-22 04:05:20',
                'updated_at' => '2019-02-22 04:05:22',
                'congkhai' => 0,
            ),
            222 => 
            array (
                'id' => 240,
                'biennhan_id' => 403,
                'nhanvien_id' => 4,
                'noidung' => '25k',
                'created_at' => '2019-02-22 12:10:07',
                'updated_at' => '2019-02-22 12:10:07',
                'congkhai' => 0,
            ),
            223 => 
            array (
                'id' => 241,
                'biennhan_id' => 405,
                'nhanvien_id' => 4,
                'noidung' => '150k  Chiều gọi báo giá khách',
                'created_at' => '2019-02-23 02:11:25',
                'updated_at' => '2019-02-23 02:11:25',
                'congkhai' => 0,
            ),
            224 => 
            array (
                'id' => 242,
                'biennhan_id' => 405,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong, đợi khách lấy máy.',
                'created_at' => '2019-02-23 07:09:39',
                'updated_at' => '2019-02-23 07:09:39',
                'congkhai' => 1,
            ),
            225 => 
            array (
                'id' => 243,
                'biennhan_id' => 378,
                'nhanvien_id' => 1,
                'noidung' => 'hello phát',
                'created_at' => '2019-02-23 07:32:22',
                'updated_at' => '2019-02-23 07:32:22',
                'congkhai' => 0,
            ),
            226 => 
            array (
                'id' => 244,
                'biennhan_id' => 378,
                'nhanvien_id' => 1,
                'noidung' => 'cần thơ',
                'created_at' => '2019-02-23 07:32:51',
                'updated_at' => '2019-02-23 07:32:51',
                'congkhai' => 1,
            ),
            227 => 
            array (
                'id' => 245,
                'biennhan_id' => 378,
                'nhanvien_id' => 1,
                'noidung' => '',
                'created_at' => '2019-02-23 07:39:54',
                'updated_at' => '2019-02-23 07:39:54',
                'congkhai' => 1,
            ),
            228 => 
            array (
                'id' => 246,
                'biennhan_id' => 378,
                'nhanvien_id' => 1,
                'noidung' => '',
                'created_at' => '2019-02-23 07:39:59',
                'updated_at' => '2019-02-23 07:39:59',
                'congkhai' => 1,
            ),
            229 => 
            array (
                'id' => 247,
                'biennhan_id' => 378,
                'nhanvien_id' => 1,
                'noidung' => '',
                'created_at' => '2019-02-23 07:40:01',
                'updated_at' => '2019-02-23 07:40:01',
                'congkhai' => 1,
            ),
            230 => 
            array (
                'id' => 248,
                'biennhan_id' => 378,
                'nhanvien_id' => 1,
                'noidung' => 'my ơ',
                'created_at' => '2019-02-23 08:23:40',
                'updated_at' => '2019-02-23 08:23:50',
                'congkhai' => 1,
            ),
            231 => 
            array (
                'id' => 249,
                'biennhan_id' => 401,
                'nhanvien_id' => 1,
                'noidung' => 'Báo giá 480K, khách không sửa',
                'created_at' => '2019-02-25 03:09:26',
                'updated_at' => '2019-02-25 03:09:26',
                'congkhai' => 1,
            ),
            232 => 
            array (
                'id' => 250,
                'biennhan_id' => 401,
                'nhanvien_id' => 1,
                'noidung' => 'Khách đã nhận lại máy.',
                'created_at' => '2019-02-25 03:09:37',
                'updated_at' => '2019-02-25 03:09:37',
                'congkhai' => 1,
            ),
            233 => 
            array (
                'id' => 251,
                'biennhan_id' => 406,
                'nhanvien_id' => 1,
                'noidung' => 'Đang xử lý.',
                'created_at' => '2019-02-25 03:12:59',
                'updated_at' => '2019-02-25 06:57:33',
                'congkhai' => 1,
            ),
            234 => 
            array (
                'id' => 252,
                'biennhan_id' => 405,
                'nhanvien_id' => 1,
                'noidung' => 'Khách đã nhận máy, thu 150K.',
                'created_at' => '2019-02-25 03:16:35',
                'updated_at' => '2019-02-25 03:16:42',
                'congkhai' => 1,
            ),
            235 => 
            array (
                'id' => 253,
                'biennhan_id' => 406,
                'nhanvien_id' => 1,
                'noidung' => 'Máy không cài được driver màn hình??',
                'created_at' => '2019-02-25 06:57:42',
                'updated_at' => '2019-02-25 06:57:45',
                'congkhai' => 0,
            ),
            236 => 
            array (
                'id' => 254,
                'biennhan_id' => 408,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong, đợi khách lấy máy.',
                'created_at' => '2019-02-25 07:55:02',
                'updated_at' => '2019-02-25 07:55:05',
                'congkhai' => 1,
            ),
            237 => 
            array (
                'id' => 255,
                'biennhan_id' => 408,
                'nhanvien_id' => 1,
                'noidung' => 'Chưa gọi được khách',
                'created_at' => '2019-02-25 07:55:17',
                'updated_at' => '2019-02-25 07:55:17',
                'congkhai' => 0,
            ),
            238 => 
            array (
                'id' => 256,
                'biennhan_id' => 406,
                'nhanvien_id' => 1,
            'noidung' => 'Ca sau gọi bạn hỏi kiểm tra phần cứng (chưa gọi đc)',
                'created_at' => '2019-02-25 07:55:45',
                'updated_at' => '2019-02-25 07:55:45',
                'congkhai' => 0,
            ),
            239 => 
            array (
                'id' => 257,
                'biennhan_id' => 407,
                'nhanvien_id' => 1,
                'noidung' => 'đã giao máy',
                'created_at' => '2019-02-25 09:09:28',
                'updated_at' => '2019-02-25 09:09:28',
                'congkhai' => 0,
            ),
            240 => 
            array (
                'id' => 258,
                'biennhan_id' => 409,
                'nhanvien_id' => 1,
                'noidung' => 'Đã kiểm tra, lỗi ổ cứng yếu',
                'created_at' => '2019-02-25 14:05:54',
                'updated_at' => '2019-02-25 14:05:54',
                'congkhai' => 1,
            ),
            241 => 
            array (
                'id' => 259,
                'biennhan_id' => 410,
                'nhanvien_id' => 2,
                'noidung' => 'Chưa Crack win cài office cài phần mềm',
                'created_at' => '2019-02-25 14:11:56',
                'updated_at' => '2019-02-25 14:11:56',
                'congkhai' => 0,
            ),
            242 => 
            array (
                'id' => 260,
                'biennhan_id' => 408,
                'nhanvien_id' => 3,
                'noidung' => 'đã giao cho khách - anh Phú',
                'created_at' => '2019-02-25 15:19:31',
                'updated_at' => '2019-02-25 15:19:31',
                'congkhai' => 0,
            ),
            243 => 
            array (
                'id' => 261,
                'biennhan_id' => 409,
                'nhanvien_id' => 3,
                'noidung' => 'đã giao cho khách - anh Phú',
                'created_at' => '2019-02-25 15:20:29',
                'updated_at' => '2019-02-25 15:20:29',
                'congkhai' => 0,
            ),
            244 => 
            array (
                'id' => 262,
                'biennhan_id' => 406,
                'nhanvien_id' => 3,
                'noidung' => 'đã chuyển qua nhật trân - anh phú',
                'created_at' => '2019-02-25 15:21:14',
                'updated_at' => '2019-02-25 15:21:14',
                'congkhai' => 0,
            ),
            245 => 
            array (
                'id' => 263,
                'biennhan_id' => 410,
                'nhanvien_id' => 3,
                'noidung' => 'đã cài xong và đã gọi khách lấy máy',
                'created_at' => '2019-02-26 09:11:32',
                'updated_at' => '2019-02-26 09:11:32',
                'congkhai' => 0,
            ),
            246 => 
            array (
                'id' => 264,
                'biennhan_id' => 413,
                'nhanvien_id' => 3,
                'noidung' => 'đã thu 20k',
                'created_at' => '2019-02-26 09:59:15',
                'updated_at' => '2019-02-26 09:59:15',
                'congkhai' => 0,
            ),
            247 => 
            array (
                'id' => 265,
                'biennhan_id' => 414,
                'nhanvien_id' => 5,
                'noidung' => 'Đã cài win + office 2007+cs6',
                'created_at' => '2019-02-27 03:50:19',
                'updated_at' => '2019-02-27 04:20:44',
                'congkhai' => 1,
            ),
            248 => 
            array (
                'id' => 266,
                'biennhan_id' => 414,
                'nhanvien_id' => 5,
                'noidung' => 'Đã gọi khách lấy máy',
                'created_at' => '2019-02-27 03:50:31',
                'updated_at' => '2019-02-27 04:20:48',
                'congkhai' => 1,
            ),
            249 => 
            array (
                'id' => 267,
                'biennhan_id' => 415,
                'nhanvien_id' => 5,
                'noidung' => 'Đang chờ xử lý.',
                'created_at' => '2019-02-27 03:58:11',
                'updated_at' => '2019-02-27 03:58:11',
                'congkhai' => 1,
            ),
            250 => 
            array (
                'id' => 268,
                'biennhan_id' => 415,
                'nhanvien_id' => 5,
                'noidung' => 'Đã xử lý xong và giao máy',
                'created_at' => '2019-02-27 04:18:14',
                'updated_at' => '2019-02-27 04:18:14',
                'congkhai' => 1,
            ),
            251 => 
            array (
                'id' => 269,
                'biennhan_id' => 411,
                'nhanvien_id' => 1,
                'noidung' => 'Kiểm tra không thấy vấn đề như khách báo.',
                'created_at' => '2019-02-27 04:19:10',
                'updated_at' => '2019-02-27 04:19:10',
                'congkhai' => 1,
            ),
            252 => 
            array (
                'id' => 270,
                'biennhan_id' => 411,
                'nhanvien_id' => 1,
                'noidung' => 'Ca sau gọi lại hỏi khách',
                'created_at' => '2019-02-27 04:19:29',
                'updated_at' => '2019-02-27 04:19:29',
                'congkhai' => 0,
            ),
            253 => 
            array (
                'id' => 271,
                'biennhan_id' => 414,
                'nhanvien_id' => 1,
                'noidung' => '50k nhé',
                'created_at' => '2019-02-27 04:21:25',
                'updated_at' => '2019-02-27 04:21:25',
                'congkhai' => 0,
            ),
            254 => 
            array (
                'id' => 272,
                'biennhan_id' => 411,
                'nhanvien_id' => 5,
                'noidung' => 'Đã gọi khách tìm hiểu về vấn đề chóp tắt màn hình thì khách kiêu cài lại win 7 và office 2013',
                'created_at' => '2019-02-27 04:28:17',
                'updated_at' => '2019-02-27 06:43:44',
                'congkhai' => 1,
            ),
            255 => 
            array (
                'id' => 273,
                'biennhan_id' => 411,
                'nhanvien_id' => 5,
            'noidung' => 'Ca sau cài lại win 7 và office 2013 (đã copy users qua ổ D)',
                'created_at' => '2019-02-27 04:30:43',
                'updated_at' => '2019-02-27 04:30:43',
                'congkhai' => 0,
            ),
            256 => 
            array (
                'id' => 274,
                'biennhan_id' => 411,
                'nhanvien_id' => 1,
                'noidung' => 'Đã sao lưu dữ liệu thành công, đang cài Windows',
                'created_at' => '2019-02-27 06:41:56',
                'updated_at' => '2019-02-27 06:41:56',
                'congkhai' => 1,
            ),
            257 => 
            array (
                'id' => 275,
                'biennhan_id' => 406,
                'nhanvien_id' => 1,
                'noidung' => 'Báo giá sửa main 420K, đợi khách phản hồi.',
                'created_at' => '2019-02-27 06:55:18',
                'updated_at' => '2019-02-27 06:57:58',
                'congkhai' => 0,
            ),
            258 => 
            array (
                'id' => 276,
                'biennhan_id' => 406,
                'nhanvien_id' => 1,
                'noidung' => 'Không sửa, đợi lấy máy về',
                'created_at' => '2019-02-27 06:58:15',
                'updated_at' => '2019-02-27 06:58:15',
                'congkhai' => 0,
            ),
            259 => 
            array (
                'id' => 277,
                'biennhan_id' => 406,
                'nhanvien_id' => 6,
                'noidung' => 'đã gọi NT: sửa hên xui 50/50, bảo hành 1 tháng',
                'created_at' => '2019-02-27 06:58:42',
                'updated_at' => '2019-02-27 06:58:42',
                'congkhai' => 0,
            ),
            260 => 
            array (
                'id' => 278,
                'biennhan_id' => 411,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong, đã gọi khách lấy máy.',
                'created_at' => '2019-02-27 08:48:43',
                'updated_at' => '2019-02-27 08:48:43',
                'congkhai' => 1,
            ),
            261 => 
            array (
                'id' => 279,
                'biennhan_id' => 411,
                'nhanvien_id' => 6,
                'noidung' => 'khách đã lấy máy',
                'created_at' => '2019-02-27 11:10:41',
                'updated_at' => '2019-02-27 11:10:41',
                'congkhai' => 0,
            ),
            262 => 
            array (
                'id' => 280,
                'biennhan_id' => 414,
                'nhanvien_id' => 6,
                'noidung' => 'mai 28/2 khách lấy',
                'created_at' => '2019-02-27 11:56:17',
                'updated_at' => '2019-02-27 11:56:17',
                'congkhai' => 0,
            ),
            263 => 
            array (
                'id' => 281,
                'biennhan_id' => 406,
                'nhanvien_id' => 6,
                'noidung' => 'đã đem về trung tâm.. không sửa được',
                'created_at' => '2019-02-27 14:15:18',
                'updated_at' => '2019-02-27 14:15:18',
                'congkhai' => 0,
            ),
            264 => 
            array (
                'id' => 282,
                'biennhan_id' => 406,
                'nhanvien_id' => 6,
                'noidung' => 'gọi khách tới nhận lại nhưng không nghe máy..',
                'created_at' => '2019-02-27 14:15:48',
                'updated_at' => '2019-02-27 14:15:48',
                'congkhai' => 0,
            ),
            265 => 
            array (
                'id' => 283,
                'biennhan_id' => 406,
                'nhanvien_id' => 6,
                'noidung' => 'đã gọi được',
                'created_at' => '2019-02-27 14:21:16',
                'updated_at' => '2019-02-27 14:21:16',
                'congkhai' => 0,
            ),
            266 => 
            array (
                'id' => 284,
                'biennhan_id' => 406,
                'nhanvien_id' => 6,
                'noidung' => 'KHÁCH ĐÃ NHẬN MÁY',
                'created_at' => '2019-02-27 14:25:05',
                'updated_at' => '2019-02-27 14:25:05',
                'congkhai' => 0,
            ),
            267 => 
            array (
                'id' => 285,
                'biennhan_id' => 416,
                'nhanvien_id' => 6,
                'noidung' => 'Đang chờ xử lý.',
                'created_at' => '2019-02-28 07:29:41',
                'updated_at' => '2019-02-28 07:29:41',
                'congkhai' => 1,
            ),
            268 => 
            array (
                'id' => 286,
                'biennhan_id' => 417,
                'nhanvien_id' => 6,
                'noidung' => 'Đang chờ xử lý.',
                'created_at' => '2019-02-28 08:20:59',
                'updated_at' => '2019-02-28 08:20:59',
                'congkhai' => 1,
            ),
            269 => 
            array (
                'id' => 287,
                'biennhan_id' => 418,
                'nhanvien_id' => 6,
                'noidung' => 'Đang chờ xử lý.',
                'created_at' => '2019-02-28 08:38:49',
                'updated_at' => '2019-02-28 08:38:49',
                'congkhai' => 1,
            ),
            270 => 
            array (
                'id' => 288,
                'biennhan_id' => 419,
                'nhanvien_id' => 4,
                'noidung' => 'Đang chờ xử lý.',
                'created_at' => '2019-02-28 08:53:21',
                'updated_at' => '2019-02-28 08:53:21',
                'congkhai' => 1,
            ),
            271 => 
            array (
                'id' => 289,
                'biennhan_id' => 419,
                'nhanvien_id' => 4,
                'noidung' => 'Báo giá 170k ',
                'created_at' => '2019-02-28 08:53:38',
                'updated_at' => '2019-02-28 08:53:48',
                'congkhai' => 0,
            ),
            272 => 
            array (
                'id' => 290,
                'biennhan_id' => 417,
                'nhanvien_id' => 6,
                'noidung' => 'KHÁCH ĐÃ NHẬN MÁY',
                'created_at' => '2019-02-28 10:58:42',
                'updated_at' => '2019-02-28 10:58:42',
                'congkhai' => 0,
            ),
            273 => 
            array (
                'id' => 291,
                'biennhan_id' => 419,
                'nhanvien_id' => 6,
                'noidung' => 'ĐÃ vệ sinh',
                'created_at' => '2019-02-28 14:39:18',
                'updated_at' => '2019-02-28 14:39:18',
                'congkhai' => 0,
            ),
            274 => 
            array (
                'id' => 292,
                'biennhan_id' => 419,
                'nhanvien_id' => 6,
                'noidung' => 'đã cài sap2000 nhưng chưa crack được',
                'created_at' => '2019-02-28 14:39:48',
                'updated_at' => '2019-02-28 14:39:48',
                'congkhai' => 0,
            ),
            275 => 
            array (
                'id' => 293,
                'biennhan_id' => 416,
                'nhanvien_id' => 6,
                'noidung' => 'Tiến hành cài win 10',
                'created_at' => '2019-02-28 14:40:25',
                'updated_at' => '2019-02-28 14:40:25',
                'congkhai' => 0,
            ),
            276 => 
            array (
                'id' => 294,
                'biennhan_id' => 416,
                'nhanvien_id' => 6,
                'noidung' => 'Tiến hành cài win 10',
                'created_at' => '2019-02-28 14:40:25',
                'updated_at' => '2019-02-28 14:40:25',
                'congkhai' => 0,
            ),
            277 => 
            array (
                'id' => 295,
                'biennhan_id' => 419,
                'nhanvien_id' => 1,
                'noidung' => 'Đang xử lý phần mềm SAP2000',
                'created_at' => '2019-03-01 01:18:20',
                'updated_at' => '2019-03-01 01:18:20',
                'congkhai' => 1,
            ),
            278 => 
            array (
                'id' => 296,
                'biennhan_id' => 419,
                'nhanvien_id' => 1,
                'noidung' => 'Không cài đặt được SAP2000, đã báo khách lấy máy.',
                'created_at' => '2019-03-01 03:28:11',
                'updated_at' => '2019-03-01 03:28:11',
                'congkhai' => 1,
            ),
            279 => 
            array (
                'id' => 297,
                'biennhan_id' => 416,
                'nhanvien_id' => 1,
                'noidung' => 'Đã xử lý xong, đã gọi khách lấy máy.',
                'created_at' => '2019-03-01 03:29:19',
                'updated_at' => '2019-03-01 03:29:19',
                'congkhai' => 1,
            ),
            280 => 
            array (
                'id' => 298,
                'biennhan_id' => 420,
                'nhanvien_id' => 3,
                'noidung' => 'Đang chờ xử lý.',
                'created_at' => '2019-03-01 07:27:22',
                'updated_at' => '2019-03-01 07:27:22',
                'congkhai' => 1,
            ),
            281 => 
            array (
                'id' => 299,
                'biennhan_id' => 421,
                'nhanvien_id' => 3,
                'noidung' => 'Đang chờ xử lý.',
                'created_at' => '2019-03-01 08:37:16',
                'updated_at' => '2019-03-01 08:37:16',
                'congkhai' => 1,
            ),
            282 => 
            array (
                'id' => 300,
                'biennhan_id' => 421,
                'nhanvien_id' => 1,
                'noidung' => 'Đã cài Windows xong, đang cài đặt Driver',
                'created_at' => '2019-03-01 12:34:39',
                'updated_at' => '2019-03-01 12:34:42',
                'congkhai' => 1,
            ),
            283 => 
            array (
                'id' => 301,
                'biennhan_id' => 420,
                'nhanvien_id' => 3,
                'noidung' => 'gửi qua nt gấp trong ngày phải sửa xong',
                'created_at' => '2019-03-01 14:02:40',
                'updated_at' => '2019-03-01 14:02:40',
                'congkhai' => 0,
            ),
            284 => 
            array (
                'id' => 302,
                'biennhan_id' => 420,
                'nhanvien_id' => 3,
                'noidung' => 'Phát đã gửi qua NT',
                'created_at' => '2019-03-02 01:25:38',
                'updated_at' => '2019-03-02 01:25:38',
                'congkhai' => 0,
            ),
            285 => 
            array (
                'id' => 303,
                'biennhan_id' => 422,
                'nhanvien_id' => 3,
                'noidung' => 'Đang chờ xử lý.',
                'created_at' => '2019-03-02 01:53:39',
                'updated_at' => '2019-03-02 01:53:39',
                'congkhai' => 1,
            ),
            286 => 
            array (
                'id' => 304,
                'biennhan_id' => 422,
                'nhanvien_id' => 3,
                'noidung' => 'Phương đem qua NT',
                'created_at' => '2019-03-02 03:51:02',
                'updated_at' => '2019-03-02 03:51:02',
                'congkhai' => 0,
            ),
            287 => 
            array (
                'id' => 305,
                'biennhan_id' => 423,
                'nhanvien_id' => 3,
                'noidung' => 'Đang chờ xử lý.',
                'created_at' => '2019-03-03 02:32:08',
                'updated_at' => '2019-03-03 02:32:08',
                'congkhai' => 1,
            ),
            288 => 
            array (
                'id' => 306,
                'biennhan_id' => 423,
                'nhanvien_id' => 3,
                'noidung' => 'Mới nhận máy chưa xử lý + khách hỏi Ram 2G',
                'created_at' => '2019-03-03 02:35:24',
                'updated_at' => '2019-03-03 02:35:24',
                'congkhai' => 0,
            ),
            289 => 
            array (
                'id' => 307,
                'biennhan_id' => 423,
                'nhanvien_id' => 3,
                'noidung' => 'đã gửi qua PC132',
                'created_at' => '2019-03-03 09:48:29',
                'updated_at' => '2019-03-03 09:48:29',
                'congkhai' => 0,
            ),
        ));
        
        
    }
}
