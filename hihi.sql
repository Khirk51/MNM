-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:8889
-- Thời gian đã tạo: Th12 18, 2022 lúc 06:40 AM
-- Phiên bản máy phục vụ: 5.7.34
-- Phiên bản PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hihi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `districts`
--

CREATE TABLE `districts` (
  `ID` int(10) NOT NULL,
  `DName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `motel`
--

CREATE TABLE `motel` (
  `Motel_Id` int(10) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` text,
  `Price` int(11) NOT NULL,
  `Area` int(11) NOT NULL,
  `Count_view` int(11) NOT NULL DEFAULT '0',
  `Address` varchar(255) NOT NULL,
  `Map` varchar(255) DEFAULT NULL,
  `Images` varchar(255) DEFAULT NULL,
  `User_id` int(10) NOT NULL,
  `Category_id` int(11) NOT NULL,
  `District_id` int(11) DEFAULT NULL,
  `Utilities` varchar(255) DEFAULT NULL,
  `Created_at` date DEFAULT NULL,
  `Phone` varchar(30) DEFAULT NULL,
  `Approve` varchar(30) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `motel`
--

INSERT INTO `motel` (`Motel_Id`, `Title`, `Description`, `Price`, `Area`, `Count_view`, `Address`, `Map`, `Images`, `User_id`, `Category_id`, `District_id`, `Utilities`, `Created_at`, `Phone`, `Approve`, `Status`) VALUES
(2, 'Phòng đơn tầng 1', 'Phòng sạch sẽ, trang trí giấy dán tường bắt mắt, nằm trong khu an ninh cao, khu phòng yên tĩnh. Có thợ bảo trì phòng, sửa chữa, nằm trong khu vực ít cúp điện và nước. Sân thượng phơi đồ thoáng mát, view toàn thành phố.', 3000000, 30, 15, '30 Nguyễn Du', '', 'Screen Shot 2022-12-17 at 13.28.41.png', 9, 1, 1, 'Giường, nệm ga gối; WC riêng với trang thiết bị cao cấp; Bàn ghế làm việc hiện đại; Tủ lạnh, máy lạnh; Tủ quần áo âm tường, bàn trang điểm; Internet cáp quang bắt tận phòng.', '2022-12-17', '', '1', 1),
(3, 'Phòng đôi tầng 2', 'Phòng mới - đẹp - đầy đủ tiện nghi. Cửa sổ thoáng mát, view  đẹp mắt. Đường nội bộ xe tải, đối diện hồ bơi, luôn mát mẻ.', 2500000, 30, 11, '20 Bạch Liêu', '', 'sedan-hang-c2-7653.png', 9, 2, 2, 'Máy giặt sấy: Chỉ cần 1 thao tác không tốn thời gian (miễn phí); Thang máy: Di chuyển thuận tiện; Internet cáp quang; Giờ giấc tự do, không chung chủ, cửa vân tay; Dọn vệ sinh hàng tuần (khu vực chung).', '2022-12-17', '', '1', 1),
(4, 'Phòng đôi tầng 1', 'Phòng thiết kế rộng rãi, có cửa sổ thông thoáng, đầy đủ ánh sáng vào phòng và bố trí rèm cửa, toilet riêng. Nội thất đầy đủ. View toàn thành phố.', 3200000, 25, 8, '80 Chu Văn An', '', 'pt5.jpg', 9, 2, 2, 'Nội thất: Giường nệm, tủ, tivi, tủ lạnh, máy lạnh, bàn làm việc, bếp nấu ăn. Kệ bếp thiết kế hiện đại. Máy lạnh mới 100%. Gác cao 1.8 m.', '2021-11-28', '092314764', 'Đã kiểm duyệt', 1),
(5, 'Phòng trọ giảm giá', 'Vị trí gần chợ, khu ăn uống sầm uất, gần bệnh viện, ngân hàng, spa, gym...\r\nWC riêng. Khu phố an ninh, dân trí cao, yên tĩnh. Phòng có nhiều cửa sổ thoáng mát, sạch sẽ, có cửa kiếng to nhìn view đẹp bên ngoài. Nhà có thang máy và sân thượng mát mẻ.', 2200000, 20, 12, '29 Nguyễn Văn Cừ', '', 'pt1.jpg', 9, 4, 1, 'Toilet riêng biệt trong phòng, nước nóng lạnh, thiết bị vệ sinh mới, cao cấp; Bếp riêng từng phòng, bao gồm cả bếp từ, bồn rửa; Cho ở 3 - 4 người và 2 xe máy; Khu vực gửi xe an ninh trong nhà, ra vào bằng khóa vân tay...Wifi tốc độ cao.', '2021-12-14', '092314764', 'Đã kiểm duyệt', 1),
(6, 'Phòng trọ giá sinh viên', 'Vị trí đẹp, gần nhiều trường đại học lớn. Nằm trong tòa nhà lớn: Có thang máy, máy phát điện dự phòng, có hầm để xe, có chống sét, phòng cháy chữa cháy nên cực kỳ an toàn, có thang thoát hiểm. ', 4500000, 25, 6, '158 Nguyễn Chí Thanh', '', 'pt6.jpg', 9, 3, 1, 'Nội thất: Điều hòa, giường nệm, kệ bếp, tủ bếp, nước nóng lạnh, bàn ăn, tủ lạnh; Nhà vệ sinh riêng đầy đủ thiết bị mới 100%; Hệ thống camera an ninh, báo cháy hiện đại, bảo vệ 24/24 rất an ninh không bao giờ có trộm cắp.', '2021-12-16', '035810767', 'Đã kiểm duyệt', 1),
(7, 'Phòng trọ ở từ 1-3 người', 'Phòng có kệ bếp - tolet - ban công - cửa sổ, phòng có nội thất đầy đủ, sạch sẽ, dọn vào ở ngay.', 3600000, 30, 2, '16 Lê Mao', NULL, 'pt7.jpg', 9, 3, NULL, 'Giờ tự do, ko cùng chủ, được nuôi Pet, khu phố văn hóa, yên tĩnh, hẻm thông, camera an ninh.  Giá giảm 40% cho mùa dịch; Ðiện nước giá nhà nước; Internet đầy đủ.\r\n', '2021-12-18', '035810767', 'Đã kiểm duyệt', 1),
(8, 'Phòng trọ cho thuê ', 'Phòng rộng và mát mẻ. Thiết kế tất cả các phòng đều có cửa sổ để đón nắng, gió. Nhà vệ sinh sạch đẹp, trang bị nội thất cao cấp. Sân thượng phơi đồ thoáng mát, view toàn thành phố.', 2800000, 25, 2, '20 Lê Lợi', NULL, 'pt8.jpg', 9, 2, NULL, 'Tự do giờ giấc, môi trường sống hiện đại. Đội ngũ bảo trì chuyên nghiệp thường trực tại tòa nhà. Hàng tuần có người vệ sinh cầu thang, hành lang, nhà xe...Dịch vụ vệ sinh phòng theo nhu cầu. Máy giặt công cộng.\n', '2021-12-20', '035810767', 'Đã kiểm duyệt', 1),
(9, '123', '123', 123123, 123123, 123123, '123123', NULL, '318679467_706420417474579_6741318116919218272_n.jpeg', 9, 2, 1, '123123123', '2022-12-17', '123123', '1', 1),
(10, '123', '123', 123123, 123123, 123123, '123123', NULL, '318679467_706420417474579_6741318116919218272_n.jpeg', 9, 2, 1, '123123123', '2022-12-17', '123123', '1', 2),
(11, '123123123', '123123', 1231231, 231231, 123123, '2312312312', NULL, '318679467_706420417474579_6741318116919218272_n.jpeg', 9, 1, NULL, '123123123', '2022-12-17', '123123', '1', 2),
(12, 'khirk', '123123', 123, 123, 123, '123', NULL, '281993264_3214182202144764_1804846814619456563_n.jpeg', 9, 1, NULL, '123', '2022-12-18', '123123', '1', 0),
(13, 'khirk012312', '123123', 123, 123, 1231, '123', NULL, '142721163_237684051200434_1120006859564654290_n.jpg', 9, 1, NULL, '123123', '2022-12-18', '123123', '1', 0),
(14, 'mb', '123', 123, 123, 123123, '123', NULL, 'pt.jpeg', 9, 1, NULL, '123', '2022-12-18', '123', '1', 0),
(15, '123123k', '123123', 123123, 123, 1231, '123', NULL, 'pt.jpeg', 9, 1, NULL, '123123123', '2022-12-18', '123123', '1', 0),
(16, '', 'vavaivai', 123123, 123123, 123, '123', NULL, 'pt.jpeg', 9, 1, NULL, '123', '2022-12-18', '123', '1', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `motel_category`
--

CREATE TABLE `motel_category` (
  `category_id` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `motel_category`
--

INSERT INTO `motel_category` (`category_id`, `categoryName`) VALUES
(1, 'Phòng trọ đơn'),
(2, 'Phòng trọ 2 người'),
(3, 'Phòng trọ 3 người'),
(4, 'Phòng trọ giá rẻ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` int(11) DEFAULT '0',
  `Phone` varchar(255) DEFAULT NULL,
  `Avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `Name`, `Username`, `Email`, `Password`, `Role`, `Phone`, `Avatar`) VALUES
(4, 'Nguyễn Thị Hà', 'nguyenha', 'ha@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2, '035437463', 'pt.jpeg'),
(9, 'Dat', 'dat', 'khirk@gmail.com', '$2y$10$6/ciVf3WEzzpmGRYVNdpyu5hB9QeMlBu4uZLm582og2d4Y9uXyH5q', 0, '0967843201', 'Screen Shot 2022-12-10 at 12.12.30.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `motel`
--
ALTER TABLE `motel`
  ADD PRIMARY KEY (`Motel_Id`);

--
-- Chỉ mục cho bảng `motel_category`
--
ALTER TABLE `motel_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `districts`
--
ALTER TABLE `districts`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `motel`
--
ALTER TABLE `motel`
  MODIFY `Motel_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `motel_category`
--
ALTER TABLE `motel_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
