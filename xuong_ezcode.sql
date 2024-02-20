-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th2 20, 2024 lúc 05:14 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xuong_ezcode`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id_account` int NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `action` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id_account`, `hoten`, `sdt`, `username`, `password`, `email`, `action`) VALUES
(1, 'phí quang vinh', '0981085402', 'vinhphis', 'admin', 'vinhpqph37185@fpt.edu.vn', 1),
(2, 'vinh', '0981085402', 'vinhquang', 'QXcyft2K4m', 'zephy2882004@gmail.com', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id_bill` int NOT NULL,
  `id_course` int NOT NULL,
  `id_account` int NOT NULL,
  `action` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id_bill`, `id_course`, `id_account`, `action`) VALUES
(19, 1, 1, 1),
(20, 2, 1, 1),
(21, 5, 1, 1),
(22, 3, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_category` int NOT NULL,
  `name_category` varchar(255) NOT NULL,
  `image_category` varchar(255) NOT NULL,
  `action` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_category`, `name_category`, `image_category`, `action`) VALUES
(1, 'PHP', 'd-1.png', 1),
(2, 'javascript', 'd-2.png', 1),
(3, 'Html5 Css3', 'd-3.png', 1),
(4, 'Java', 'd-4.png', 1),
(5, 'Python', 'd-5.png', 1),
(8, 'scss', 'java-application-development.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course`
--

CREATE TABLE `course` (
  `id_course` int NOT NULL,
  `id_category` int NOT NULL,
  `name_course` varchar(255) NOT NULL,
  `image_course` varchar(255) NOT NULL,
  `price_course` varchar(255) NOT NULL,
  `mota_course` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `rating` int NOT NULL,
  `action` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `course`
--

INSERT INTO `course` (`id_course`, `id_category`, `name_course`, `image_course`, `price_course`, `mota_course`, `rating`, `action`) VALUES
(1, 3, 'Html Css Cơ Bản', 'ngonngu (3).png', 'Miễn Phí', 'HTML (HyperText Markup Language) là ngôn ngữ đánh dấu sử dụng để xây dựng cấu trúc và nội dung của trang web. Bằng cách sử dụng các thẻ HTML, bạn có thể tạo ra các phần tử như tiêu đề, đoạn văn bản, hình ảnh, liên kết và bảng.\r\n\r\n<br>\r\nCSS (Cascading Style Sheets) là ngôn ngữ kiểu trang được sử dụng để tạo kiểu và trình bày trang web. Bằng cách sử dụng CSS, bạn có thể thay đổi màu sắc, kích thước, vị trí và hiệu ứng của các phần tử trên trang web.', 0, 1),
(2, 3, 'Html Css Nâng Cao', 'ngonngu (3).png', '999999', 'là các ngôn ngữ đánh dấu và kiểu trang web. HTML5 được sử dụng để xây dựng cấu trúc và nội dung của trang web, trong khi CSS3 được sử dụng để tạo kiểu và trình bày trang web. Khóa học HTML5 CSS3 giúp bạn hiểu về cú pháp HTML5 và CSS3, các thẻ và thuộc tính quan trọng, và cách sử dụng HTML5 và CSS3 để tạo ra các trang web đẹp và tương tác.', 5, 1),
(3, 5, 'Python Nâng Cao', 'ngonngu (1).png', '1500000', 'là một ngôn ngữ lập trình đơn giản và dễ học, được sử dụng rộng rãi cho việc phát triển ứng dụng web, khoa học dữ liệu, và trí tuệ nhân tạo. Khóa học Python giúp bạn hiểu về cú pháp Python, các khái niệm cơ bản như biến, điều kiện, và vòng lặp, và cách sử dụng Python để xử lý dữ liệu và xây dựng các ứng dụng.', 5, 1),
(4, 2, 'Javascript Pro Max', 'ngonngu (4).png', '1999999', 'là một ngôn ngữ lập trình phía máy khách được sử dụng để tạo ra các hiệu ứng tương tác trên trang web. Khóa học JavaScript giúp bạn hiểu về cú pháp JavaScript, các khái niệm cơ bản như biến, hàm, và điều kiện, và cách sử dụng JavaScript để tương tác với HTML và CSS trên trang web.', 5, 1),
(5, 2, 'Javascript cơ bản', 'ngonngu (4).png', 'Miễn Phí', 'là một ngôn ngữ lập trình phía máy khách được sử dụng để tạo ra các hiệu ứng tương tác trên trang web. Khóa học JavaScript giúp bạn hiểu về cú pháp JavaScript, các khái niệm cơ bản như biến, hàm, và điều kiện, và cách sử dụng JavaScript để tương tác với HTML và CSS trên trang web.', 0, 1),
(6, 3, 'html css', 'HTML-CSS3.jpg', 'free', 'khóa học ok', 0, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_bill`),
  ADD KEY `id_billfk1` (`id_account`),
  ADD KEY `id_billfk2` (`id_course`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`),
  ADD KEY `id_coursefk1` (`id_category`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bill` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `course`
--
ALTER TABLE `course`
  MODIFY `id_course` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `id_billfk1` FOREIGN KEY (`id_account`) REFERENCES `account` (`id_account`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `id_billfk2` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `id_coursefk1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
