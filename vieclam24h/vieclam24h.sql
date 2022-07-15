-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 14, 2022 lúc 06:27 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vieclam24h`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(100) NOT NULL,
  `admin_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin_pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin_users`
--

INSERT INTO `admin_users` (`id`, `admin_email`, `admin_pass`, `first_name`, `last_name`, `admin_type`) VALUES
(1, 'vieclam24h@gmail.com', '123', 'Khương', 'Hoàng', 'Admin'),
(2, 'nhanvien@gmail.com', '123', 'Nhân', 'Viên', 'Staff');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(100) NOT NULL,
  `title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `sub_title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(9999) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id`, `title`, `sub_title`, `content`, `img`) VALUES
(1, 'Hướng dẫn viết cv xin thực tập bằng tiếng Nhật mới nhất năm 2021', 'Hồ sơ/cv xin thực tập bằng tiếng Nhật hay còn gọi là rirekisho (履歴書) dành cho các bạn đang có nhu cầu xin thực tập hoặc xin việc vào ...', '', 'blog1.jpg'),
(2, 'Top từ vựng tiếng anh chuyên ngành marketing nhất định bạn phải biết', 'Top từ vựng tiếng anh chuyên ngành. Tổng hợp các từ vựng tiếng anh chuyên ngành marketing mới nhất 2021 dành cho các marketer.', '', 'blog2.jpg'),
(3, 'Điều chỉnh chiến lược tìm việc ngay nếu bạn thấy 4 dấu hiệu này!', 'Bất kỳ ai khi chưa có việc đều mong muốn tìm được một công việc phù hợp sớm. Tuy nhiên dù đã gửi hồ sơ tới rất nhiều nơi mà bạn vẫn chưa ...', '', 'image_4.jpg'),
(4, 'Điểm danh những công việc thời vụ giúp sinh viên kiếm bộn tiền dịp cuối năm', 'Cuối năm là dịp thị trường lao động hoạt động nhộn nhịp với nhu cầu mua bán, giao dịch, du lịch vô cùng sôi nổi. Hệ quả là nhu cầu tìm ...', '', 'about.jpg'),
(5, 'Công nhân “gồng” mình làm thêm để có tiền chi Tết', 'Cuối năm là dịp thị trường lao động hoạt động nhộn nhịp với nhu cầu mua bán, giao dịch, du lịch vô cùng sôi nổi. Hệ quả là nhu cầu tìm ...', '', 'image_5.jpg'),
(6, 'Điểm danh 5 công việc làm Tết phổ biến nhất cho công nhân – lao động phổ thông', 'Cuối năm là dịp thị trường lao động hoạt động nhộn nhịp với nhu cầu mua bán, giao dịch, du lịch vô cùng sôi nổi. Hệ quả là nhu cầu tìm ...', '', 'image_6.jpg'),
(7, 'Doanh nghiệp tìm cách “giữ chân” người lao động sau Tết', 'Cuối năm là dịp thị trường lao động hoạt động nhộn nhịp với nhu cầu mua bán, giao dịch, du lịch vô cùng sôi nổi. Hệ quả là nhu cầu tìm ...', '', 'image_7.jpg'),
(9, 'Thực tập sinh chăm sóc khách hàng tại Vinhomes', 'Vinhomes – thuộc tập đoàn Vingroup tuyển dụng thực tập sinh chăm sóc khách hàng. ', 'áasasasaaaaaa', 'image_2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `job_type` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `job_location` varchar(100) NOT NULL,
  `job_des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `jobs`
--

INSERT INTO `jobs` (`job_id`, `customer_email`, `job_title`, `category`, `job_type`, `company`, `job_location`, `job_des`) VALUES
(1, 'khuong1102bk@gmail.com', 'Lập Trình Viên Front End (Fresh / Jr)\n', 'Công nghệ thông tin', 'Internship', 'KTN', 'Hà Nội', '- Làm việc, phối hợp công việc theo nhóm dưới sự phân công công việc của quản lý dự án.\r\n- Tham gia phát triển các dự án về Web, xây dựng các chức năng front-end của Website, Web application.\r\n- Triển khai giao diện HTML/CSS Javascript theo yêu cầu của leader trên hệ thống website xây dựng sẵn\r\n- Phối hợp với các back-end developers và web designers để cải thiện tính khả dụng\r\n- Đảm bảo tiêu chuẩn đồ họa chất lượng cao và sự thống nhất trong brand\r\n- Thu thập ý kiến phản hồi và xây dựng các hướng giải quyết cho người sử dụng và khách hàng\r\n- Nghiên cứu, tìm hiểu các công nghệ về HTML/CSS Javascript mới nhất để áp dụng cái tiến sản phẩm\r\nTime và địa chỉ làm việc:\r\n✓ Buổi sáng: 8h0 – 12h0; Buổi chiều: 13h0-17h0.\r\n\r\nNghỉ 2 thứ 7/tháng và 4 chủ nhật\r\n\r\n✓ Làm tại văn phòng Taza Group: 14-16 Bình Lợi, P.13, Bình Thạnh'),
(3, 'vieclam24h@gmail.com', 'Nhân Viên Kỹ Thuật Viễn Thông Vnpt\n', 'Điện tử viễn thông', 'Full Time', 'VPNT', 'Cà Mau', '- Quản lý về kỹ thuật các dịch vụ viễn thông – công nghệ thông tin cung cấp cho khách hàng.\n\n- Phối hợp với bộ phận kinh doanh thực hiện các công tác chăm sóc khách hàng.\n\n- Thực hiện các nhiệm vụ khác theo yêu cầu của Lãnh đạo đơn vị. \n\n- Thực hiện lắp đặt, sửa chữa dịch vụ viễn thông (bao gồm cả truyền dẫn BTS, dịch vụ CNTT), xử lý sự cố mạng ngoại vi.\n\n- Trực tiếp quản lý tài sản tại các nhà trạm tổng đài, mạng ngoại vi được giao.\n\n- Quản lý, cập nhật dữ liệu mạng ngoại vi ODN.\n\n- Lắp đặt thiết bị mạng ngoại vi, mạng truy nhập, mạng cáp.\n\n- Giám sát chất lượng, vận hành bảo dưỡng mạng ngoại vi.\n\n- Kiểm tra bảo trì, xử lý các sự cố mạng cáp, tủ cáp, từ tủ cáp kết cuối đến nhà khách hàng…\n\n- Tham gia trực tiếp công tác tiếp thị, CSKH trên địa bàn.\n\n- Thu hồi thiết bị đầu cuối, vật tư tái sử dụng.\n\n- Có khả năng leo cột cao (sẽ được đào tạo sau khi tuyển dụng).'),
(15, 'Bibomart@gmail.com', 'Nhân Viên Marketing', 'Marketing / Truyền thông', 'Full Time', 'Bibomart TM', 'Phú Thọ', 'Công ty tnhh SOUTHWOOD là đơn vị nhập khẩu và phân phối sản phẩm gỗ nhựa ngoài trời ( wood plastic composite) như sàn, ốp tường, hệ lam ngoài trời... cần các ứng viên có thể:\n\nXây dựng kế hoạch quảng cáo : Thiết kế quảng cáo và thực thi kế hoạch Marketing (chọn thông điệp , thiết kế quảng cáo ,…)\nDựa vào kế hoạch Marketing, cần tìm đối tác phối hợp thực hiện, để đạt mục tiêu đề ra. Giám sát việc thực hiện của đối tác\nThực hiện marekting online xây dựng thương hiệu website và kéo khách hàng click, tham gia vào website, diễn dàn, mạng xã hội,….\nLên ý tưởng và trực tiếp viết nội dung quảng cáo (bao gồm: viết nội dung, trình bày nội dung, ý tưởng hình ảnh…).\nTrực tiếp triển khai các chiến dịch quảng cáo trên Facebook, Google theo ngân sách được duyệt.\nTheo dõi và tối ưu các chiến dịch quảng cáo\nThực hiện các vấn đề về SEO, Facebook Marketing, Youtube, Content, liên kết link….\nNghiên cứu, cập nhật công nghệ, thuật toán và thủ thuật mới của kênh quảng cáo.\nQuay video sản phẩm và hướng dẫn sử dụng sản phẩm\nThực hiện cải tạo, đề xuất trang web công ty theo xu hướng\nHỗ trợ khai thác data, tìm kiếm KH cũng bộ phận sale'),
(16, 'khuong1102bk@gmail.com', 'Back End Dev', 'Công nghệ thông tin', 'Freelance', 'KTN', 'Cà Mau', 'MÔ TẢ CÔNG VIỆC\nTham gia vào tất cả các khâu trong quá trình phát triển phần mềm, bao gồm: tìm hiểu yêu cầu, phân tích, thiết kế, nghiên cứu công nghệ mới…\n\nPhối hợp với các thành viên nhóm dự án khác dưới sự điều phối của Quản lý trực tiếp và tiếp xúc trực tiếp với khách hàng.\n\nCác công tác khác theo yêu cầu cấp trên.\n\nYÊU CẦU CÔNG VIỆC\nQUYỀN LỢI ĐƯỢC HƯỞNG\n\nThu nhập: Lương cơ bản 15 - 20 triệu đồng/tháng + thưởng + phụ cấp \n\nLương tháng thứ 13\n\nĐóng BHYT, BHXH, BHTN theo quy định của Luật LĐ và hưởng các chế độ phúc lợi theo quy định của công ty\n\nTham gia du lịch 1-2 lần/ năm.\n\nĐược cung cấp trang thiết bị đầy đủ để phục vụ công việc.\n\nĐược Free các khóa học tiếng Nhật tại trung tâm.\n\nChính sách hỗ trợ đào tạo, nghiên cứu công nghệ mới cho nhân viên phát triển chuyên môn, kĩ năng;\n\nCó nhiều cơ hội thăng tiến trong công việc.\n\nĐược làm việc trong môi trường năng động - thân thiện - trọng dụng.'),
(22, 'khuong1102bk@gmail.com', 'PHP Dev', 'Công nghệ thông tin', 'Part Time', 'KhuongTuNha', 'Hậu Giang', ' Được cấp Macbook, Monitor, Adapter, leader vui vẻ, nhiệt tình hướng dẫn, thường có party weekly, monthly, tôi trường cởi mở, được làm chung với nhiều team khác trong SEA, rất ít khi phải OT.\r\n\r\nThu nhập: Lương cơ bản 15 - 20 triệu đồng/tháng + thưởng + phụ cấp \r\n\r\nLương tháng thứ 13\r\n\r\nĐóng BHYT, BHXH, BHTN theo quy định của Luật LĐ và hưởng các chế độ phúc lợi theo quy định của công ty\r\n\r\nTham gia du lịch 1-2 lần/ năm.\r\n\r\nĐược cung cấp trang thiết bị đầy đủ để phục vụ công việc.\r\n\r\nĐược Free các khóa học tiếng Nhật tại trung tâm.\r\n\r\nChính sách hỗ trợ đào tạo, nghiên cứu công nghệ mới cho nhân viên phát triển chuyên môn, kĩ năng;\r\n\r\nCó nhiều cơ hội thăng tiến trong công việc.\r\n\r\nĐược làm việc trong môi trường năng động - thân thiện - trọng dụng.'),
(26, 'fpt@gmail.com', 'FrontEnd ', 'Công nghệ thông tin', 'Freelance', 'FPT Software', 'Hà Nội', 'MÔ TẢ CÔNG VIỆC\r\n\r\nQuản lý và duy trì hoạt động toàn bộ thiết bị công nghệ thông tin của công ty: hệ thống máy chủ server, máy tính, máy in, thiết bị mạng, điện tử,...\r\n\r\nQUYỀN LỢI ĐƯỢC HƯỞNG\r\n\r\nLương 10 - 15 triệu (thỏa thuận tùy kinh nghiệm)\r\nPhụ cấp xăng xe 300.000đ / tháng\r\nNghỉ 2 thứ 7 / tháng, nghỉ phép, du lịch, khám sức khỏe,...'),
(29, 'microsoft@gmail.com', 'Tester', 'Điện tử viễn thông', 'Internship', 'Microsoft', 'Bắc Kạn', 'MÔ TẢ CÔNG VIỆC\nTham gia vào tất cả các khâu trong quá trình phát triển phần mềm, bao gồm: tìm hiểu yêu cầu, phân tích, thiết kế, nghiên cứu công nghệ mới…\n\nPhối hợp với các thành viên nhóm dự án khác dưới sự điều phối của Quản lý trực tiếp và tiếp xúc trực tiếp với khách hàng.\n\nCác công tác khác theo yêu cầu cấp trên.\n\nYÊU CẦU CÔNG VIỆC\nQUYỀN LỢI ĐƯỢC HƯỞNG\n\nThu nhập: Lương cơ bản 15 - 20 triệu đồng/tháng + thưởng + phụ cấp \n\nLương tháng thứ 13\n\nĐóng BHYT, BHXH, BHTN theo quy định của Luật LĐ và hưởng các chế độ phúc lợi theo quy định của công ty\n\nTham gia du lịch 1-2 lần/ năm.\n\nĐược cung cấp trang thiết bị đầy đủ để phục vụ công việc.\n\nĐược Free các khóa học tiếng Nhật tại trung tâm.\n\nChính sách hỗ trợ đào tạo, nghiên cứu công nghệ mới cho nhân viên phát triển chuyên môn, kĩ năng;\n\nCó nhiều cơ hội thăng tiến trong công việc.\n\nĐược làm việc trong môi trường năng động - thân thiện - trọng dụng.'),
(33, 'fpt@gmail.com', 'Designer', 'Công nghệ thông tin', 'Freelance', 'FPT Software', 'Hà Nội', '- Design all branding & media for assigned brands: Below-the-line materials, landing page…\n\n- Continually improve the design of each assigned brand so that it effectively engages its target audience.\n\n- Establish visual communication across all products and platforms.\n\n- Actively contribute creative ideas for campaigns’ concept.'),
(34, 'fpt@gmail.com', 'Python Dev', 'Công nghệ thông tin', 'Part Time', 'FPT Software', 'Hà Nội', 'MÔ TẢ CÔNG VIỆC\nTham gia vào tất cả các khâu trong quá trình phát triển phần mềm, bao gồm: tìm hiểu yêu cầu, phân tích, thiết kế, nghiên cứu công nghệ mới…\n\nPhối hợp với các thành viên nhóm dự án khác dưới sự điều phối của Quản lý trực tiếp và tiếp xúc trực tiếp với khách hàng.\n\nCác công tác khác theo yêu cầu cấp trên.\n\nYÊU CẦU CÔNG VIỆC\nQUYỀN LỢI ĐƯỢC HƯỞNG\n\nThu nhập: Lương cơ bản 15 - 20 triệu đồng/tháng + thưởng + phụ cấp \n\nLương tháng thứ 13\n\nĐóng BHYT, BHXH, BHTN theo quy định của Luật LĐ và hưởng các chế độ phúc lợi theo quy định của công ty\n\nTham gia du lịch 1-2 lần/ năm.\n\nĐược cung cấp trang thiết bị đầy đủ để phục vụ công việc.\n\nĐược Free các khóa học tiếng Nhật tại trung tâm.\n\nChính sách hỗ trợ đào tạo, nghiên cứu công nghệ mới cho nhân viên phát triển chuyên môn, kĩ năng;\n\nCó nhiều cơ hội thăng tiến trong công việc.\n\nĐược làm việc trong môi trường năng động - thân thiện - trọng dụng.'),
(39, 'vingroup@gmail.com', 'Kiểm thử', 'Điện tử viễn thông', 'Full Time', 'Amazon Inc', 'Cao Bằng', '- Design all branding & media for assigned brands: Below-the-line materials, landing page…\n\n- Continually improve the design of each assigned brand so that it effectively engages its target audience.\n\n- Establish visual communication across all products and platforms.\n\n- Actively contribute creative ideas for campaigns’ concept.'),
(42, 'fpt@gmail.com', 'Chuyên Viên Phân Tích Nghiệp Vụ / Business Analyst', 'Giáo dục / Đào tạo', 'Part Time', 'FPT Software', 'Hà Nội', '• Xây dựng tài liệu mô tả nghiệp vụ, làm rõ các tài liệu hoạt động vận hành, quy trình biểu mẫu, kiểu dữ liệu và liên kết dữ liệu nghiệp vụ.\n• Đề xuất kịch bản vận hành hệ thống và các kiểu tài liệu, dữ liệu hệ thống phù hợp để giải quyết quy trình nghiệp vụ, biểu mẫu bằng hệ thống phần mềm.\n• Xây dựng kịch bản kiểm thử và thực hiện kiểm thử.\n• Tiếp nhận, phân tích và cập nhật các thay đổi trong quá trình vận hành.\n• Tham gia đào tạo và hỗ trợ người dùng.\n• Làm việc tại Số A66, Khu đấu giá QSDĐ 3ha, Phúc Diễn, Bắc Từ Liêm, Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobseeker`
--

CREATE TABLE `jobseeker` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `cv` varchar(1000) NOT NULL,
  `about` varchar(9999) NOT NULL,
  `img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `jobseeker`
--

INSERT INTO `jobseeker` (`id`, `email`, `password`, `first_name`, `last_name`, `dob`, `mobile_number`, `address`, `experience`, `cv`, `about`, `img`) VALUES
(1, 'nguyenminhtuan@gmail.com', '123', 'Tuan', 'Nguyen', '2000-09-17', '0241536472', 'Thái Nguyên', 'Từ 1 đến 2 năm kinh nghiệm', '', 'Tốt nghiệp ICTU', 'person_4.jpg'),
(2, 'levanvinh@gmail.com', '123', 'Vinh', 'Le', '1999-10-09', '0343243245', 'Thái Bình', 'Chưa có kinh nghiệm', 'MGHP.pdf', 'Tốt nghiệp ICTU', 'person_1.jpg'),
(4, 'nguyencuong@gmail.com', '123', 'Cường', 'Nguyễn', '1999-12-12', '0348871829', 'Hà Nội', 'Chưa có kinh nghiệm', '', 'Học Vấn: Tốt nghiệp đại học ICTU\r\nKinh Nghiệm: 9 tháng làm BE cho công ty phần mềm B', 'person_3.jpg'),
(5, 'khuongtunha@gmail.com', '123', 'Khương', 'Hoàng', '2002-02-22', '0834183579', 'Bắc Kạn', 'Ít hơn 1 năm kinh nghiệm', 'TCXH.pdf', 'Học Vấn: Tốt nghiệp đại học ICTU\r\nKinh Nghiệm: 9 tháng làm BE cho công ty phần mềm B', 'person_1.jpg'),
(7, 'canhoangnam@gmail.com', '123', 'Nam', 'Hoang', '1999-11-11', '0147225866', 'Hà Tây', 'Từ 2 đến 3 năm kinh nghiệm', 'Don xin.docx', 'Học Vấn: Tốt nghiệp đại học\r\nKinh Nghiệm: 5 tháng làm FE cho công ty phần mềm A', ''),
(11, 'anhvan@gmail.com', '123', 'Anh', 'Van', '', '0987654321', '', '', '', '', ''),
(12, 'hoangphuc@gmail.com', '123', 'Phuc', 'Hoang', '', '0987654321', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_apply`
--

CREATE TABLE `job_apply` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `file` varchar(1000) NOT NULL,
  `id_job` int(100) NOT NULL,
  `job_seeker` varchar(100) NOT NULL,
  `mobile_number` varchar(111) NOT NULL,
  `job_exp` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `job_apply`
--

INSERT INTO `job_apply` (`id`, `first_name`, `last_name`, `dob`, `file`, `id_job`, `job_seeker`, `mobile_number`, `job_exp`, `status`) VALUES
(1, 'Tuan', 'Nguyen', '2000-09-17', 'Don xin.docx', 26, 'nguyenminhtuan@gmail.com', '0241536472', 'Từ 2 đến 3 năm kinh nghiệm', 'Đã tuyển!'),
(20, 'Cường', 'Nguyễn', '2010-12-12', 'Don xin.docx', 15, 'nguyencuong@gmail.com', '0348871829', 'Ít hơn 1 năm kinh nghiệm', 'Đã tuyển!'),
(23, 'Tuấn', 'Nguyễn', '2000-12-12', 'TCXH.pdf', 30, 'nguyentuan@gmail.com', '0348871829', 'Chưa có kinh nghiệm', 'Chờ xét duyệt'),
(27, 'Vinh', 'Le', '1999-10-09', 'Don xin.docx', 1, 'levanvinh@gmail.com', '0343243245', 'Chưa có kinh nghiệm', 'Đã tuyển!'),
(29, 'Khương', 'Hoàng', '2002-02-22', 'MGHP.pdf', 34, 'khuongtunha@gmail.com', '0834183579', 'Từ 1 đến 2 năm kinh nghiệm', 'Không đạt!'),
(31, 'Anh', 'Van', '1999-01-05', 'New Microsoft Word Document.docx', 16, 'anhvan@gmail.com', '0987654321', 'Từ 1 đến 2 năm kinh nghiệm', 'Đang chờ'),
(32, 'Khương', 'Hoàng', '2002-02-22', 'New Microsoft Word Document.docx', 22, 'khuongtunha@gmail.com', '0834183579', 'Từ 1 đến 2 năm kinh nghiệm', 'Đang chờ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_category`
--

CREATE TABLE `job_category` (
  `id` int(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `job_category`
--

INSERT INTO `job_category` (`id`, `category`, `des`) VALUES
(9, 'Bất động sản', 'Nhân viên kinh doanh, tư vấn'),
(10, 'Bưu chính - Viễn thông', 'Nhân viên lắp đặt sửa chữa ...'),
(13, 'Điện tử viễn thông', 'Nhân viên lắp đặt sửa chữa ...'),
(14, 'Du lịch', 'Hướng dẫn viên, biên dịch...'),
(15, 'Giáo dục / Đào tạo', 'Giáo viên, gia sư...'),
(16, 'Hành chính / Văn phòng', 'Nhân viên, quản lý...'),
(17, 'Khách sạn / Nhà hàng', 'Nhân viên, đầu bếp...'),
(18, 'Kiến trúc', 'Kiến trúc sư, kỹ sư...'),
(19, 'Marketing / Truyền thông', 'PR'),
(20, 'Môi trường', 'Nhân viên vệ sinh...'),
(21, 'Ngân hàng / Tài chính', 'Kế toán...'),
(22, 'Thiết kế đồ họa', 'Ill...'),
(23, 'Kỹ Sư', '.....'),
(24, 'Công nghệ thông tin', 'Dev, Tester, designer...');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `recruiter`
--

CREATE TABLE `recruiter` (
  `id` int(100) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `recruiter`
--

INSERT INTO `recruiter` (`id`, `email`, `password`, `company`, `first_name`, `last_name`, `address`, `mobile_number`, `img`) VALUES
(1, 'fpt@gmail.com', '123', 'FPT Software', 'Tuấn', 'Phạm', 'Hà Nội', '0456789333', 'fpt.png'),
(2, 'microsoft@gmail.com', '123', 'Microsoft', 'Nadella', 'Satya', 'Bắc Kạn', '0444333222', 'ms.png'),
(4, 'amazon@gmail.com', '123', 'Amazon Inc', 'Jeff', 'Bezos', 'Thái Nguyên', '0565555555', ''),
(5, 'facebook@gmail.com', '123', 'Facebook Inc.', 'Mark', 'Zuckerberg', 'TP Hồ Chí Minh', '0886661111', ''),
(6, 'manulife@gmail.com', '123', 'Manulife', 'Life', 'Manu', 'TP Hồ Chí Minh', '0348888888', ''),
(7, 'Bibomart@gmail.com', '123', 'Bibomart TM', 'Mart', 'BiBo', 'Hà Nội', '0348234545', ''),
(8, 'vingroup@gmail.com', '123', 'VinGroup', 'Vuong', 'Pham', 'Hà Nội', '0654764856', 'vin.png'),
(10, 'asdasd@gmail.com', '123', 'ádasdasd', 'ádasdas', 'ádasdas', 'Chợ Rã, Ba Bể, Bắc Kạn', '0348871829', 'ms.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Chỉ mục cho bảng `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `job_apply`
--
ALTER TABLE `job_apply`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `recruiter`
--
ALTER TABLE `recruiter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `job_apply`
--
ALTER TABLE `job_apply`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `job_category`
--
ALTER TABLE `job_category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `recruiter`
--
ALTER TABLE `recruiter`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
