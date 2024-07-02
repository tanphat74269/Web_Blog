-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2024 at 09:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `ds_bai_viet`
--

CREATE TABLE `ds_bai_viet` (
  `id` int(11) NOT NULL,
  `loai_bai_viet_id` int(11) DEFAULT NULL,
  `hinh_anh` varchar(500) DEFAULT NULL,
  `tieu_de` varchar(500) DEFAULT NULL,
  `trich_dan` varchar(1000) DEFAULT NULL,
  `noi_dung` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ds_bai_viet`
--

INSERT INTO `ds_bai_viet` (`id`, `loai_bai_viet_id`, `hinh_anh`, `tieu_de`, `trich_dan`, `noi_dung`) VALUES
(62, 19, '668123dc2aa98-vietmalagi.png', 'Viết mã trong nghề lập trình', 'Để tạo ra một chương trình cần đầy đủ những dòng mã. Thế thì viết mã là gì...', '<span id=\"docs-internal-guid-b9263009-7fff-6565-ac84-85ae6538861a\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 15pt; font-family: Arial, sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\"><b>Viết mã trong nghề lập trình.</b></span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 15pt; font-family: Arial, sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">Trọng tâm trong code chủ yếu là các function thực hiện các chức năng của chương trình, vòng lặp for, câu lệnh if else và khai báo biến. Chương trình ở đây có nghĩa là game, ứng dụng di động, phần mềm máy tính, website.</span></p><br><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 15pt; font-family: Arial, sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">Mục đích cuối cùng của lập trình viên là viết ra chương trình giúp ích cho cuộc sống của con người. Chỉ nên học những đoạn mã trọng tâm trọng tâm và trọng tâm. Cốt lõi để tạo ra một chương trình hoàn chỉnh.</span></p><br><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 15pt; font-family: Arial, sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">Google map là ứng dụng giúp con người biết được đường đi ở nhiều nơi trên thế giới. Phần mềm soạn thảo Word giúp con người viết ra những dòng chữ đẹp và có định dạng. Game liên minh huyền thoại giúp con người giải trí. Trang website giúp con người bán hàng online, đưa sản phẩm đến với nhiều người dùng hơn.</span></p><br><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 15pt; font-family: Arial, sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">Nghề lập trình là việc dùng các đoạn mã để tạo ra một chương trình cụ thể. Người viết ra chương trình được gọi là lập trình viên. Để lập trình, cần học ngôn ngữ lập trình để giao tiếp với máy tính và bắt nó làm theo ý mình. Chẳng hạn, trong một trò game, chúng ta muốn nhân vật di chuyển bằng cách nhấn vào phím mũi tên. Vậy nên chúng ta cần viết một đoạn mã giao tiếp với máy tính và kêu nó làm theo như vậy.</span></p><br><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 15pt; font-family: Arial, sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">Một số ngôn ngữ lập trình phổ biến như: C/C++, C#, Php, JS, python, java.</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 15pt; font-family: Arial, sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">Để tạo ra game liên minh huyền thoại cần có nhiều nhóm người, mỗi nhóm đảm nhận một công việc việc cụ thể. Bao gồm: Đồ họa, back-end,..</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 15pt; font-family: Arial, sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">Các ứng dụng đều do lập trình viên tạo ra để phục vụ con người. Các ứng dụng phổ biến như: Facebook, Tiktok, Zalo, Instagram, Youtube,...</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 15pt; font-family: Arial, sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">Các game như: LMHT, liên quân mobile,.. đều do lập trình viên tạo ra</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 15pt; font-family: Arial, sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">Các trang web như: vnexpress.vn,... đều do lập trình viên tạo ra</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 15pt; font-family: Arial, sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">Các phần mềm như: word, excel, powerpoint đều do lập trình viên tạo ra</span></p><br><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 15pt; font-family: Arial, sans-serif; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">Người sử dụng chương trình thì chẳng quan tâm đến việc ai đã viết chương trình. Nhưng người viết ra chương trình hoàn toàn chỉnh lại sửa được các chức năng trong chương trình đó.</span></p><br></span>'),
(63, 19, '668128aa544c2-cacngonngu.png', 'Các ngôn ngữ lập trình phổ biến', 'Ngôn ngữ lập trình là ngôn ngữ cần tuân theo các cú pháp nghiêm ngặt để con người giao tiếp với máy tính', ''),
(64, 19, '66812a8146062-3.jpg', 'Niềm vui khi lập trình', 'Lập trình cho tôi cảm giác thật tuyệt sau khi giải quyết được vấn đề', ''),
(65, 19, '66812b117b594-4.jpg', 'Một số chương trình thường gặp thời sinh viên', 'Giải phương trình bậc hai bằng C++, chương trình quản lý sinh viên,...', ''),
(66, 18, '66812c92a260c-1.jpg', 'Tư duy là gì?', 'Thinking và giải quyết vấn đề', '<p style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 15pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\"><b>Tư duy là gì?</b></span></p><p style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:15pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Tư duy bao gồm tư duy logic và tư duy bằng hình ảnh. Tư duy logic là những suy nghĩ và suy luận đúng sai, suy luận bằng lời nói. Còn tư duy hình ảnh thì liên quan tới cảm xúc. Cảm xúc quyết định việc tư duy bằng hình ảnh. Để kích hoạt cảm xúc, chúng ta cần làm những điều sau: nghe nhạc, xem video có tác động tới cảm xúc(vui, buồn, sợ, phấn khích).</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-cc7f368c-7fff-529d-c06a-888afd58e9c0\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:15pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Để áp dụng tư duy logic vào cuộc sống, tôi thường sử dụng sơ đồ tư duy để tư duy. Bill Gates dành thời gian trong ngày để đọc sách và tư duy </span><a href=\"https://www.youtube.com/watch?v=uVYeGvABBIA\" style=\"text-decoration:none;\"><span style=\"font-size:15pt;font-family:Arial,sans-serif;color:#1155cc;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">https://www.youtube.com/watch?v=uVYeGvABBIA</span></a><span style=\"font-size:15pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"> . Ông ngồi và tư duy rất nhiều. Cảm xúc đi trước logic theo sau. Dopamine sẽ tiết ra rất nhiều khi chúng ta tư duy(thinking) và đạt được kết quả như những gì mà mình mong muốn.</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:15pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Việc tư duy là việc nghĩ ra các bước để giải quyết vấn đề một cách tốt nhất. Nó cần có suy nghĩ độc lập và kiến thức sẵn có ở bên trong mỗi người. Mỗi người sẽ có tư duy và cách giải quyết khác nhau khi cùng giải quyết một vấn đề, nhưng cuối cùng thì họ vẫn đạt được kết quả mà mình mong muốn không sớm thì muộn.&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><b style=\"font-weight:normal;\"><br></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:15pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Tư duy là cách bản thân tự đặt câu hỏi và tự trả lời cho tới khi vấn đề được giải quyết. Hay còn gọi là tư duy phản biện. Ví dụ về tư duy logic. Bạn sẽ làm gì khi bắt gặp người yêu của bạn được trai chở về nhà. Lúc này, việc đầu tiên cần làm là giữa bình tĩnh. Tiếp theo là dùng tư duy để suy luận xem chuyện gì đang xảy ra bằng cách quan sát móc nối các sự kiện trong quá khứ kết hợp với việc tra khảo. Chẳng phải mỗi lần bạn nghĩ ra một câu nói hay ho trong đầu thì đó là lúc bạn đang áp dụng tư duy logic rồi đó.</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><br><br></p>'),
(67, 18, '66812e7d9ac92-2.jpg', 'Thất bại chỉ là thứ cảm xúc ngắn hạn', 'Thứ  cảm xúc ấy sẽ qua nhanh thôi và để lại bài học cho chúng ta', ''),
(68, 19, '66812fa908bb0-5.jpg', 'Database là gì?', 'Cơ sở dữ liệu lưu trữ thông tin của một chương trình', ''),
(69, 19, '6681304b4e498-6.jpg', 'Lập trình viên - người kinh doanh chất xám', 'Sử dụng trí tuệ để tạo ra một hệ thống cho nhiều người dùng', ''),
(70, 19, '66813154d713e-7.jpg', 'Tư duy lập trình', 'Từ hư không tạo ra một phần mềm ', ''),
(71, 19, '668131dc524de-8.jpg', 'Phương pháp học lập trình', 'Mỗi người sẽ có phương pháp của riêng mình', ''),
(72, 20, '6681605e49ee3-1.jpg', 'Mô hình kinh doanh thông dụng', 'Các bước kinh doanh của đa số mọi người', ''),
(73, 21, '668160ee12fe5-1.jpg', 'Phương pháp đầu tư bất động sản', 'Nhà đất thuộc loại sản phẩm giá trị lớn', '');

-- --------------------------------------------------------

--
-- Table structure for table `loai_bai_viet`
--

CREATE TABLE `loai_bai_viet` (
  `id` int(11) NOT NULL,
  `ten_loai` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loai_bai_viet`
--

INSERT INTO `loai_bai_viet` (`id`, `ten_loai`) VALUES
(18, 'Tư duy'),
(19, 'Lập trình'),
(20, 'Kinh doanh'),
(21, 'Đầu tư');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ds_bai_viet`
--
ALTER TABLE `ds_bai_viet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_foreign_loaibvid` (`loai_bai_viet_id`);

--
-- Indexes for table `loai_bai_viet`
--
ALTER TABLE `loai_bai_viet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ds_bai_viet`
--
ALTER TABLE `ds_bai_viet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `loai_bai_viet`
--
ALTER TABLE `loai_bai_viet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ds_bai_viet`
--
ALTER TABLE `ds_bai_viet`
  ADD CONSTRAINT `fk_foreign_loaibvid` FOREIGN KEY (`loai_bai_viet_id`) REFERENCES `loai_bai_viet` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
