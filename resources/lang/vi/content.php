<?php

return [
    'title' => 'Chuyển đổi Dấu thời gian thành Ngày - Chuyển đổi Dấu thời gian Unix',
    'h1' => 'Công cụ chuyển đổi Dấu thời gian Unix sang Ngày',
    'meta_keywords' => 'công cụ chuyển đổi dấu thời gian sang ngày',
    'meta_description' => 'Dễ dàng chuyển đổi dấu thời gian Unix sang ngày đọc được với công cụ chuyển đổi dấu thời gian trực tuyến miễn phí của chúng tôi. Nhanh chóng, chính xác và dễ sử dụng.',
    'meta_title' => 'Công cụ chuyển đổi Dấu thời gian sang Ngày - Chuyển đổi Dấu thời gian Unix tức thì',
    'locale' => 'vi-VN',
    'select_language' => 'Chọn Ngôn ngữ',
    'summary' => 'Dễ dàng chuyển đổi dấu thời gian Unix',
    'copy_time' => 'Sao chép',
    'done_copy' => 'Đã sao chép!',
    'begin_start' => 'Số giây từ ngày 01/01/1970 (UTC)',
    'enter_time' => 'Nhập Dấu thời gian',
    'enter_date' => 'Nhập Ngày & Giờ',
    'year' => 'Năm',
    'month' => 'Tháng',
    'day' => 'Ngày',
    'hour' => 'Giờ',
    'hour_24h' => 'Giờ (24h)',
    'minutes' => 'Phút',
    'seconds' => 'Giây',
    'format' => 'Định dạng',
    'your_time_zone' => 'Múi giờ của bạn',
    'relative' => 'Tương đối',
    'what_unix' => 'Dấu thời gian Unix là gì?',
    'unix_des' => 'Dấu thời gian Unix là cách theo dõi thời gian dưới dạng tổng số giây.
           Tính toán này bắt đầu từ Mốc Unix vào ngày 1 tháng 1 năm 1970 theo giờ UTC.
           Vì vậy, dấu thời gian Unix chỉ là số giây giữa một ngày cụ thể và Mốc Unix.
           Cần lưu ý (nhờ nhận xét từ khách truy cập trang web này) rằng điểm thời gian này về cơ bản không thay đổi dù bạn ở đâu trên thế giới.
           Điều này rất hữu ích cho các hệ thống máy tính trong việc theo dõi và sắp xếp thông tin ngày tháng trong các ứng dụng động và phân tán, cả trực tuyến và trên máy khách.',
    'human_time' => 'Thời gian Dễ đọc',
    '1_minute' => '1 Phút',
    '60_second' => '60 Giây',
    '1_hour' => '1 Giờ',
    '3600_second' => '3600 Giây',
    '1_day' => '1 Ngày',
    '86400_second' => '86400 Giây',
    '1_week' => '1 Tuần',
    '604800_second' => '604800 Giây',
    '1_month' => '1 Tháng (30.44 ngày)',
    '2629743_second' => '2629743 Giây',
    '1_year' => '1 Năm (365.24 ngày)',
    '31556926_second' => '31556926 Giây',
    '2038' => 'Điều gì xảy ra vào ngày 19 tháng 1 năm 2038?',
    '2038_des_1' => 'Vấn đề năm 2038 (còn được gọi là Y2038, Epochalypse, Y2k38 hoặc Unix Y2K) liên quan đến việc biểu diễn thời gian trong nhiều hệ thống kỹ thuật số dưới dạng số giây kể từ 00:00:00 UTC ngày 1
           tháng 1 năm 1970 và lưu trữ dưới dạng số nguyên 32-bit có dấu. Các triển khai như vậy không thể mã hóa thời gian sau 03:14:07 UTC ngày 19 tháng 1 năm 2038. Tương tự như vấn đề Y2K, vấn đề năm 2038
           xảy ra do không đủ khả năng lưu trữ để biểu diễn thời gian.',
    '2038_des_2' => 'Thời gian muộn nhất kể từ ngày 1 tháng 1 năm 1970 có thể được lưu trữ bằng số nguyên 32-bit có dấu là 03:14:07 vào thứ Ba, ngày 19 tháng 1 năm 2038 (231-1 = 2.147.483.647 giây sau ngày 1 tháng 1 năm 1970). Các chương trình
           cố gắng tăng thời gian vượt qua ngày này sẽ khiến giá trị được lưu trữ nội bộ dưới dạng số âm, mà các hệ thống này sẽ hiểu là đã xảy ra vào lúc 20:45:52 ngày
           thứ Sáu, 13 tháng 12 năm 1901 (2.147.483.648 giây trước ngày 1 tháng 1 năm 1970) thay vì ngày 19 tháng 1 năm 2038. Điều này do tràn số nguyên, khi bộ đếm hết các bit chữ số có thể sử dụng, và lật bit dấu thay thế.
           Điều này báo cáo một số âm lớn nhất và tiếp tục đếm ngược về 0, sau đó đếm lên qua các số nguyên dương một lần nữa. Những tính toán sai lầm trên các hệ thống như vậy có thể gây ra vấn đề cho người dùng và các bên liên quan khác.'
];
