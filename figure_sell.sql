-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2023 at 01:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `figure_sell`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Áo'),
(2, 'Đầm'),
(3, 'Quần'),
(4, 'Chân váy'),
(5, 'Giày/Dép'),
(6, 'Phụ Kiện'),
(7, 'Trẻ em');

-- --------------------------------------------------------

--
-- Table structure for table `figure`
--

CREATE TABLE `figure` (
  `figure_id` int(11) NOT NULL,
  `figure_name` varchar(255) NOT NULL,
  `type_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `figure`
--

INSERT INTO `figure` (`figure_id`, `figure_name`, `type_id`, `category_id`) VALUES
(1, 'áo sơ mi', 1, 1),
(3, 'áo thun', 1, 1),
(5, 'áo kiểu', 1, 1),
(6, 'áo peplum', 1, 1),
(7, 'áo croptop', 1, 1),
(8, 'áo vest/blazer', 2, 1),
(9, 'áo vest/blazer', 1, 1),
(10, 'áo thun', 2, 1),
(11, 'áo khoác', 2, 1),
(12, 'áo sơ mi', 2, 1),
(13, 'áo polo', 2, 1),
(14, 'áo len', 2, 1),
(15, 'đầm nữ', 1, 2),
(16, 'đầm maxi/voan', 1, 2),
(17, 'đầm thun', 1, 2),
(18, 'đầm dạ hội', 1, 2),
(20, 'quần jeans', 1, 3),
(21, 'quần dài', 1, 3),
(22, 'quần lửng/short', 1, 3),
(23, 'quần baggy', 1, 3),
(24, 'jumpsuit', 1, 3),
(25, 'quần baggy', 1, 3),
(26, 'quần baggy', 1, 3),
(27, 'quần baggy', 1, 3),
(28, 'quần baggy', 1, 3),
(29, 'quần jeans', 2, 3),
(30, 'quần lửng/short', 2, 3),
(31, 'quần dài', 2, 3),
(32, 'quần kaki', 2, 3),
(33, 'quần tây', 2, 3),
(34, 'chân váy', 1, 4),
(35, 'chân váy xếp li', 1, 4),
(36, 'chân váy chữ A', 1, 4),
(37, 'giày/dép', 1, 5),
(38, 'giày/dép', 2, 5),
(39, 'phụ kiện', 1, 6),
(40, 'phụ kiện', 2, 6),
(41, 'túi/ví', 1, 6),
(42, 'áo bé gái', 3, 7),
(43, 'quần bé gái', 3, 7),
(44, 'váy bé gái', 3, 7),
(45, 'chân váy bé gái', 3, 7),
(46, 'phụ kiện bé gái', 3, 7),
(47, 'áo bé trai', 4, 7),
(48, 'áo bé trai', 4, 7),
(49, 'phụ kiện bé trai', 4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL CHECK (`rating` >= 1 and `rating` <= 5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `voucher_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `figure_id` int(11) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `quantity`, `figure_id`, `image_url`, `created_at`, `updated_at`) VALUES
(0, 'ÁO TENCEL CỔ V PHỐI DÂY', 'Thiết kế áo kiểu được làm từ chất liệu lụa trơn. Độ dài áo vừa phải. Dáng áo suông. Tay áo lửng, ống tay được bo chun. Cổ dáng chữ V phối cùng những đường xếp cầu kỳ và dây thắt nơ.\n\nNhững chiếc áo suông luôn được ưu ái bởi form dáng rộng rãi, dễ dàng fit với mọi dáng người. Thiết kế áo cổ V này đem đến vẻ sang trọng và nữ tính cho những quý cô hiện đại. Chất liệu lụa cao cấp mang đến một chút độ bóng tự nhiên, góp phần khiến diện mạo nàng sáng bừng dù ở bất cứ không gian nào. Phần dây buộc trên cổ áo là điểm nhấn duyên dáng để nàng tự sáng tạo theo ý thích của mình.', 545.00, 10, 1, 'https://pubcdn.ivymoda.com/files/product/thumab/1400/2022/04/29/bbcce89a357e6e892d99ea4188cf4dbf.JPG', '2023-08-11 03:10:15', '2023-08-11 08:15:23'),
(1, 'ÁO TENCEL TRỄ VAI TAY PHỒNG', 'Áo kiểu trễ vai, tay ngắn bo gấu. Chần chun co giãn ở gấu tay và phần sau lưng. Dáng áo suông xòe thích hợp sơ vin cùng chân váy hay các kiểu quần khác nhau. Chất vải lụa nhăn mềm mại, thoáng mát cùng sắc hồng trendy nổi bật không những phù hợp với mọi tông da mà còn đem lại phong cách bắt mắt, nữ tính.Chiếc áo là item \"must have\" cho tủ đồ mùa hè của mọi cô nàng!', 545.00, 10, 1, 'https://pubcdn.ivymoda.com/files/product/thumab/1400/2023/04/03/adc620de3a4120edbf45b411d23cf012.jpg', '2023-08-11 08:52:08', '2023-08-11 08:52:08'),
(2, 'ÁO LỤA CỔ THUYỀN', 'Áo cổ thuyền với thiết kế đơn giản nhưng không kém phần tinh tế, màu sắc nhẹ nhàng phù hợp diện trong mùa hè mang lại cho người diện sự thoải mái và tự tin.\r\n\r\nChi tiết đặc biệt trên áo nằm ở phần áo xếp tầng, 2 bên tay xếp bèo bồng bềnh tạo nên điểm nhấn thú vị, khiến chiếc áo trở nên độc đáo hơn. Chất liệu lụa cao cấp tạo độ rủ nhất định giúp chiếc áo thêm bay bổng, nữ tính.\r\n\r\nKết hợp cùng quần jeans vừa năng động vừa nữ tính phù hợp đi chơi, dạo phố. Với set đồ đi làm có thể kết hợp sản phẩm cùng quần âu hoặc chân váy.', 575.00, 100, 3, 'https://pubcdn.ivymoda.com/files/product/thumab/1400/2023/06/01/e20179102e671c4a1786f639a2109251.jpg', '2023-08-11 18:38:51', '2023-08-11 18:39:25'),
(3, 'MUSE SET - ÁO CROPTOP CHUN EO PHỐI CHÂN VÁY CHỮ A', 'Muse set là sản phẩm thời trang sành điệu và nổi bật được phối hợp giữa áo croptop và chân váy ngắn chữ A. Chất liệu vải linen đồng bộ tạo cảm giác mềm mại và rất dễ chịu khi mặc.\r\n\r\nÁo croptop của Muse set với thiết kế cổ đức cùng điểm nhấn nổi bật là phần chun eo giúp tôn lên vòng eo thon gọn của người mặc, tạo sự quyến rũ và thu hút.\r\n\r\nChân váy được may theo dáng chữ A, có độ dài trên gối mang đến sự trẻ trung và năng động. Phía sau chân váy được trang bị khoá kéo tiện dụng, cùng đường may dây đan xen ở cạp tạo điểm nhấn, giúp bộ đồ trở nên phá cách và cá tính hơn.\r\n\r\nMuse set là sự kết hợp hoàn hảo giữa sự tinh tế và phong cách thời trang hiện đại, phù hợp với nhiều dịp khác nhau như đi chơi, dạo phố, hẹn hò hay dự tiệc.', 1120.00, 100, 36, 'https://pubcdn.ivymoda.com/files/product/thumab/1400/2023/04/20/2c9e743601f2eebf73ddd1af25c86013.jpg', '2023-08-12 02:59:35', '2023-08-12 02:59:35'),
(4, 'ÁO SƠ MI TENCEL DÁNG OVERSIZE', 'Áo sơ mi cổ đức, dáng oversize với thiết kế tay ngắn kèm dây buộc nơ tạo kiểu. Dọc thân áo là khuy cài kim loại thanh lịch. Áo xẻ tà 2 bên. Phía trước có 2 túi vuông trẻ trung. Chất liệu vải lụa với độ xuyên thấy nhẹ mang đến cảm giác nhẹ nhàng, thoáng mát\r\n\r\nNếu những chiếc sơ mi basic có phần hơi trang trọng và đứng đắn, thì mẫu sơ mi này lại tràn ngập nét trẻ trung và năng động. Dáng áo oversize phù hợp với mọi dáng người, giúp che mọi khuyết điểm hiệu quả. Phối cùng chân váy hay quần jeans là nàng đã có set đồ đi làm hay xuống phố thật xinh.', 795.00, 100, 1, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/05/12/8c0caedce98ca92e66adc7b9b7845e80.jpg', '2023-08-11 23:27:27', '2023-08-11 23:27:27'),
(5, 'ÁO TAPTA TRỄ VAI', 'Thiết kế áo Tapta trễ vai là một lựa chọn thời trang đầy cuốn hút và quyến rũ cho các cô gái yêu thích phong cách nữ tính và hiện đại. Với chất liệu vải Tapta cao cấp, sản phẩm mang lại sự mềm mại, êm ái và bóng bẩy cho người mặc.\r\n\r\nKiểu dáng được may theo phong cách peplum, với phần eo nhỏ và phần váy xòe nhẹ, giúp tôn lên vóc dáng và làm cho người mặc trông thêm quyến rũ và thu hút. Điểm nhấn đặc biệt của áo là phần trễ vai gợi cảm, giúp người mặc khoe trọn vẹn đôi vai trắng nõn và tạo nét thời trang đầy phong cách.', 645.00, 100, 5, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/01/07/81999fd2da47f4aba6e70e0f66adb7dc.jpg', '2023-08-11 23:28:50', '2023-08-11 23:28:50'),
(6, 'ÁO LEN NGẮN TAY PHỐI KẺ NGANG', 'Áo len ngắn tay được thiết kế với chất liệu len chọn lọc cao cấp, tạo nên hình ảnh mềm mại và sang trọng. Điểm nhấn nằm ở họa tiết kẻ ngang đầy ấn tượng trên nền màu áo đổi lập. Sự kết hợp tinh tế giúp tôn lên vẻ đẹp tối giản và tạo nên sự khác biệt trong thiết kế.\r\n\r\nNhờ sự thoải mái và dễ chịu mà chất liệu len cùng kiểu dáng basic của sản phẩm mang lại, chiếc áo sẽ là lựa chọn hoàn hảo cho những buổi đi chơi, dạo phố hay hẹn hò cùng bạn bè, gia đình. Thiết kế đa năng này còn có thể kết hợp với quần suông, baggy hoặc chân váy để tạo nên nhiều phong cách thời trang', 763.00, 100, 14, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/04/12/f7128d1dd2148158cd9455d5f11dc7bf.jpg', '2023-08-11 23:29:50', '2023-08-11 23:29:50'),
(7, 'ÁO SƠ MI LỤA THÊU HOA', 'Một thiết kế áo với chất liệu lụa nhẹ nhàng cùng chi tiết thêu hoa giúp nàng trở nên yêu kiều hơn. Áo cổ đức thời thượng cùng khuy cài kim loại tạo điểm nhấn. Mix áo cùng chân váy hoặc quần đều là sự lựa chọn hoàn hảo cho nàng đi làm và đi chơi.', 623.00, 100, 1, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/05/17/b530a02260b03cecd01b1ace2210a30d.jpg\r\n', '2023-08-11 23:30:43', '2023-08-11 23:30:43'),
(8, 'ÁO SƠ MI CROPTOP TRẮNG', 'Với dáng Croptop năng động, thiết kế sơ mi chính là sự lựa chọn hoàn hảo cho mùa hè này. Bạn dễ dàng mix áo cùng nhiều kiểu chân váy và quần khác nhau, để tạo nên phong cách cho riêng mình. \r\n\r\nÁo cổ đức, có phần giả túi được thêu chữ trước ngực bên cạnh hàng khuy mạ ánh kim kiêu sa. Thân sau áo xếp tà tạo khung hình tam giác độc đáo. ', 595.00, 100, 1, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/07/06/4483277e4b1a2ec6539f5f054c0b05ef.jpg', '2023-08-11 23:31:28', '2023-08-11 23:31:28'),
(9, 'ÁO SƠ MI TENCEL TAY NGẮN', 'Áo sơ mi cổ đức. Tay liền có gấu. Dáng áo xuông, 2 bên xẻ kiểu đuôi tôm. Cài bằng hàng khuy đôi có tà ẩn. \r\n\r\nMẫu áo sơ mi nữ được may bằng chất liệu lụa bóng mềm mại, thoáng mát, form suông rộng rãi. Mẫu áo sẽ phát huy nét lịch sự, nghiêm túc hơn nữa còn tôn đường cong cơ thể hơn khi được sơ vin cùng chiếc chân váy bút chì ôm nhẹ. Một outfit đi làm không tốn quá nhiều thời gian để lựa chọn, phối đồ cho nàng mỗi sáng.', 693.00, 100, 1, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/03/07/ac11597443a49a755396ca35998b8efd.jpg', '2023-08-11 23:32:18', '2023-08-11 23:32:18'),
(10, 'ÁO LỤA CỔ CÁCH ĐIỆU PHỐI NƠ LỆCH', 'Áo kiểu dáng suông, cổ 3 phân, kết hợp thiết nơ lệch phần cổ, nút cài 1 bên vai. Chất liệu lụa trơn có độ bắt sáng tạo cảm giác mềm mại, sang chảnh. \r\n\r\nNếu nàng theo đuổi phong cách sang chảnh, quý phái dành với nét đẹp cổ điển thì thiết kế áo sơ mi này chính là lựa chọn hoàn hảo dành cho bạn. Nàng có thể kết hợp mẫu áo này cùng chân váy bút chì hoặc quần âu diện đi làm, đi chơi.', 395.00, 100, 1, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/03/07/ee6b20bce310952bbf61a76e49d61d8d.jpg', '2023-08-11 23:33:44', '2023-08-11 23:33:44'),
(11, 'ÁO LỤA CÁNH TIÊN', 'Áo thiết kế cổ tròn, tay cánh tiên, trẻ trung và mát mẻ trong những ngày hè. Chất liệu lụa mỏng nhẹ, dáng áo suông phù hợp mix cùng nhiều kiểu quần, chân váy khác nhau.', 623.00, 100, 1, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/03/07/832d863250a8c8df1ad51951ea7f35f3.jpg', '2023-08-11 23:34:25', '2023-08-11 23:34:25'),
(12, 'ÁO SƠ MI TENCEL THÊU VIỀN', 'Một thiết kế áo với gam màu nữ tính. Chất liệu lụa nhẹ nhàng cùng chi tiết thêu viền tạo kiểu giúp nàng trở nên yêu kiều hơn. Mix áo cùng chân  váy hoặc quần đều là sự lựa chọn hoàn hảo cho nàng đi làm và đi chơi.', 763.00, 100, 1, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2022/07/05/1e0c1098ad25b7c1bc0527b53d7533a3.jpg', '2023-08-11 23:35:01', '2023-08-11 23:35:01'),
(13, 'ÁO SƠ MI LỤA THÊU HOA', 'Một thiết kế áo với chất liệu lụa nhẹ nhàng cùng chi tiết thêu hoa giúp nàng trở nên yêu kiều hơn. Áo cổ đức thời thượng cùng khuy cài kim loại tạo điểm nhấn. Mix áo cùng chân váy hoặc quần đều là sự lựa chọn hoàn hảo cho nàng đi làm và đi chơi.', 623.00, 100, 1, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/06/09/296de8055837d9ac112f6d4d9d443fd6.JPG', '2023-08-11 23:40:25', '2023-08-11 23:40:25'),
(14, 'MUSE SET - ÁO CROPTOP CHUN EO PHỐI CHÂN VÁY CHỮ A', 'Muse set là sản phẩm thời trang sành điệu và nổi bật được phối hợp giữa áo croptop và chân váy ngắn chữ A. Chất liệu vải linen đồng bộ tạo cảm giác mềm mại và rất dễ chịu khi mặc.\r\n\r\nÁo croptop của Muse set với thiết kế cổ đức cùng điểm nhấn nổi bật là phần chun eo giúp tôn lên vòng eo thon gọn của người mặc, tạo sự quyến rũ và thu hút.\r\n\r\nChân váy được may theo dáng chữ A, có độ dài trên gối mang đến sự trẻ trung và năng động. Phía sau chân váy được trang bị khoá kéo tiện dụng, cùng đường may dây đan xen ở cạp tạo điểm nhấn, giúp bộ đồ trở nên phá cách và cá tính hơn.\r\n\r\nMuse set là sự kết hợp hoàn hảo giữa sự tinh tế và phong cách thời trang hiện đại, phù hợp với nhiều dịp khác nhau như đi chơi, dạo phố, hẹn hò hay dự tiệc.', 1120.00, 100, 1, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/04/20/2c9e743601f2eebf73ddd1af25c86013.jpg', '2023-08-11 23:41:38', '2023-08-11 23:41:38'),
(15, 'ÁO SƠ MI TAY LỬNG THẮT NƠ', 'Áo kiểu dáng suông, tay lỡ, cổ đức cài khuy. Điểm nhấn là thiết kế tay áo may nhúm tạo phồng, phối cùng dây nơ thắt nữ tính.\r\n\r\nThiết kế trẻ trung này chắc chắn sẽ khiến những quý cô của IVY moda cảm thấy yêu thích. Màu sắc nổi bật cùng chất liệu vải thô sẽ giúp những ngày hè của nàng trở nên tươi mát hơn. Dáng áo suông với tay phồng rất phù hợp để nàng diện sơ vin cùng quần dài hay chân váy,', 665.00, 100, 1, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/03/20/0908b78976ae8f6f842f3067b6b22e67.jpg', '2023-08-11 23:42:55', '2023-08-11 23:42:55'),
(16, 'ÁO THUN ĐÍNH CHỮ NỔI', 'Áo thun cổ tròn. Tay áo ngắn. Dáng áo xuông. Mặt trước in chữ khác màu.\r\n\r\nChất liệu thun mịn, dầy dặn, không xù lông, thấm hút mồ hôi cực tốt, mềm mại cho làn da. Bạn có thể kết hợp với với quần bò, quần thể thao, chân váy, áo sơ mi hay áo khoác bên ngoài,...', 445.00, 100, 3, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/02/22/1661c9c95d99700ba708f8376de63587.jpg', '2023-08-11 23:43:37', '2023-08-11 23:43:37'),
(17, 'ÁO THUN ĐÍNH HOA', 'Áo thun cổ tròn, tay ngắn. Dáng dài suông. Mặt trước trang trí bông hoa tạo kiểu.\r\n\r\nChất liệu thun mang đặc tính co dãn, thấm hút mồ hôi vượt trội mang đến vẻ đẹp trẻ trung, năng động cho người mặc. Sản phẩm phù hợp với thời trang dạo phố, đi chơi, đi làm...\r\n\r\n\r\n', 325.00, 100, 3, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/03/10/4d70b88b9f14500b20a72729779ff4e4.jpg', '2023-08-11 23:44:29', '2023-08-11 23:44:29'),
(18, 'ÁO THUN IN HỌA TIẾT VẼ', 'Áo phông dáng oversize, tay ngắn, cổ tròn. Cổ có viền màu, phía trước ngực in họa tiết vẽ độc đáo. Chất liệu vải thun thoáng mát, co giãn nhẹ. Áo dễ dàng kết hợp với nhiều kiểu quần, phù hợp cho nàng diện hằng ngày.', 345.00, 100, 3, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/01/16/b34d73ed730e92a76cd445a478e06f7e.jpg', '2023-08-11 23:48:33', '2023-08-11 23:48:33'),
(19, 'ÁO THUN BLOOME', 'Thuộc dòng sản phẩm Ladies trẻ trung, hiện đại, thiế kế áo thun in chữ tinh giản nhưng đủ sành điệu để nàng tự tin xuống phố.\r\n\r\nÁo dáng basic tay ngắn phổ biến dễ dàng mix & match theo nhiều phong cách và cân mọi phong cách thời trang hiện nay. \r\n\r\nChất liệu thun cao cấp, thấm hút mồ hồi tốt, mang đến cảm giác mặc thoải mái ngày hè. ', 455.00, 100, 3, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/07/19/0bcc6d40fcafff09e34bc7a2fc79454c.jpg', '2023-08-11 23:53:32', '2023-08-11 23:53:32'),
(20, 'ÁO THUN TRƠN CỔ ĐỨC KHUY NGỌC TRAI', 'Áo thun cổ đức, cài bằng hàng khuy ngọc trai phía trước. Kiểu dáng, màu sắc basic, dáng suông cơ bản.\r\n\r\nChất liệu thun mang đặc tính co dãn, thấm hút mồ hôi vượt trội mang đến vẻ đẹp trẻ trung, năng động cho người mặc. Sản phẩm phù hợp với thời trang dạo phố, đi chơi, đi làm...\r\n\r\nMàu sắc: Trắng - Xanh Tím Than - Ghi Khói - Hồng san hô - Đen - Xanh Tím Than', 413.00, 100, 3, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/07/18/e61e47f023e445a6829b369a6463e83a.jpg', '2023-08-11 23:54:14', '2023-08-11 23:54:14'),
(21, 'ÁO THUN BABY TEE', 'Trẻ trung, năng động xuống phố ngày hè trong kiểu dáng thun Baby Tee đang được các bạn trẻ ưa chuộng hiện nay. \r\n\r\nThiết kế áo trơn, cổ tròn, tạo điểm nhấn in chữ nổi mặt sau. Bạn có thể kết hợp áo cùng nhiều kiểu chân váy và quần khác nhau để tạo nên phong cách riêng cho mình. ', 413.00, 100, 3, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/07/18/7d1581fd8d27aeb2fc9aeac028853fb6.jpg', '2023-08-11 23:54:58', '2023-08-11 23:54:58'),
(22, 'ÁO THUN BE CREATIVE', 'Áo thun cổ tròn. Tay áo ngắn. Dáng áo xuông. Mặt trước in chữ khác màu.\r\n\r\nChất liệu thun mịn, dầy dặn, không xù lông, thấm hút mồ hôi cực tốt, mềm mại cho làn da. Bạn có thể kết hợp với với quần bò, quần thể thao, chân váy, áo sơ mi hay áo khoác bên ngoài,...\r\n\r\nMàu sắc: Trắng - Cam Đào', 455.00, 100, 3, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2021/07/20/b870c450ef80bfe03f5d6009509f8890.JPG', '2023-08-11 23:56:01', '2023-08-11 23:56:01'),
(23, 'ÁO PHỐI HOA VOAN', 'Áo chất thun, cổ tròn, tay ngắn, dáng suông. Trên vai được phối cùng phụ kiện đính kết từ voan và ngọc trai.\r\n\r\nĐây là một mẫu áo thun tràn đầy vẻ dịu dàng và nữ tính dành cho những cô nàng mùa hè của IVY. Dáng áo trơn suông rất dễ để mix-match trong nhiều set đồ khác nhau. Áo có độ dài lửng nên nàng sơ vin hay thả dáng cũng đều xinh. Trên vai áo được đính kết phụ kiện từ voan và ngọc trai giúp tôn lên khí chất sang trọng, dịu dàng.\r\n\r\nMàu sắc: Trắng - Đen', 395.00, 100, 3, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2022/04/18/e7a0d89182e1a96e8c3761f9c0548d8f.JPG', '2023-08-11 23:57:04', '2023-08-11 23:57:04'),
(24, 'SET ÁO LINEN DÁNG PEPLUM VÀ QUẦN SOOC', 'Áo sơ mi linen cổ tàu chữ V. Phần viền tay áo và đuôi áo được may xếp nếp tạo điểm nhấn. Thiết kế dáng peplum có xếp ly tạo độ xòe nhẹ, vừa che khuyết điểm vừa khéo léo khoe vòng eo của nàng.\r\n\r\nQuần sooc linen cạp cao, có khóa kéo phía sau.\r\n\r\nĐây chính là set đồ dành cho những buổi đi chơi của nàng. Chẳng cần mix&match cầu kì, nàng vẫn sẽ nổi bật và thu hút bởi sự trẻ trung, nữ tính mà set đồ mang lại.', 594.00, 100, 6, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2022/06/29/441b605bd294582ff4e4974542810602.JPG', '2023-08-11 23:58:18', '2023-08-11 23:58:18'),
(25, 'ÁO PEPLUM XẺ TÀ', 'Thiết kế áo hai lớp vải, lớp ngoài là vải lụa xuyên thấu nhẹ nhàng, tạo hiệu ứng mờ ảo tôn vai, lớp trong là vải lót mềm mại giúp định hình dáng áo.\r\n\r\nCổ áo tròn được may nếp ly, mang đến vẻ nền nã và nữ tính cho thiết kế. Điểm nhấn đặc biệt là chi tiết hoa nổi gắn lệch bên eo cùng phần xẻ tà tinh tế ở vạt áo trước, giúp tôn lên vòng eo thon gọn và làm nổi bật cho vẻ đẹp của sản phẩm.\r\n\r\nÁo peplum xẻ tà có thể được kết hợp với nhiều trang phục và phụ kiện khác nhau. Bạn có thể phối nó với một chiếc chân váy midi hoặc quần cạp cao để tạo nên một bộ trang phục thanh lịch và nữ tính. Nếu muốn tạo ra một phong cách cá nhân và thời trang hơn, hãy kết hợp áo với một đôi quần jeans và giày cao gót.', 675.00, 100, 6, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/07/20/1b0e624de4f45aa11c25b0586ce87ac0.JPG', '2023-08-11 23:59:07', '2023-08-11 23:59:07'),
(26, 'FRENCH SET', 'Set đồ bao gồm một áo blazer cộc tay, áo quây 2 dây và một chiếc quần suông dài xếp ly eo, tạo nên một bộ trang phục hoàn hảo cho các buổi hẹn hò, tiệc tùng hay đi làm.\r\n\r\nÁo blazer ngắn tay phong cách có thiết kế đơn giản nhưng không kém phần tinh tế, với đường bó chun eo cách điệu, tôn lên vẻ ngoài gọn gàng và thời trang. Chất liệu vải mềm mại và thoáng mát giúp bạn cảm thấy thoải mái trong suốt ngày dài.\r\n\r\nÁo quây 2 dây cùng với chiếc quần suông dài xếp ly eo tạo nên một sự kết hợp hài hòa và tinh tế. Áo quây với kiểu dáng đơn giản nhưng không kém phần thanh lịch, phù hợp với nhiều phong cách thời trang khác nhau. Chiếc quần suông dài xếp ly eo giúp tôn lên đường cong và tạo cảm giác dễ chịu, thoải mái cho người mặc.\r\n\r\nCách phối đồ với set đồ bộ này rất đa dạng và dễ dàng. Bạn có thể kết hợp với một đôi giày cao gót để tạo nên vẻ ngoài thanh lịch và sang trọng. Hoặc bạn có thể chọn đôi giày thể thao để tạo nên một phong cách thời trang năng động và trẻ trung. Bất kể cách phối đồ nào bạn chọn, set đồ bộ này chắc chắn sẽ giúp bạn tự tin và nổi bật trong mọi hoàn cảnh.', 1365.00, 100, 8, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/04/12/cace34ad88c3dfa34f39d0ee0fbe6710.jpg', '2023-08-12 00:00:07', '2023-08-12 00:00:07'),
(27, 'QUẦN JEANS BAGGY', 'Mẫu quần Jeans Baggy cạp cao được lựa chọn là item không thế thiếu trong tủ đồ của bất kì bạn nữ nào. Với chất liệu denim cao cấp, sản phẩm có độ bền cao, đảm bảo bạn có thể mặc nó lâu dài mà không lo sợ sự mài mòn hay rách.\r\n\r\nKiểu dáng Baggy, ống ôm vừa phải tạo ra sự cân đối và thanh lịch cho thân hình của người mặc. Độ dài ngang mắt cá chân giúp tôn lên đôi chân, thiết kế lưng cao của sản phẩm giúp tạo hiệu ứng thon gọn cho vùng bụng và che khuyết điểm nếu có.\r\n\r\nThiết kế có thể dễ dàng phối với nhiều trang phục khác nhau. Bạn có thể kết hợp với áo thun tạo nên một phong cách thoải mái và năng động. Hoặc có thể mix cùng áo sơ mi và giày cao gót để có một vẻ ngoài lịch sự và sang trọng. Bạn cũng có thể thêm phụ kiện như mũ, túi xách hay dây nịt để tạo điểm nhấn cho trang phục.\r\n\r\nVới quần jean lưng cao này, bạn sẽ cảm nhận được sự tự tin và thoải mái trong mọi hoàn cảnh. Sản phẩm này không chỉ mang đến vẻ thời trang mà còn giúp bạn cảm thấy tự tin với vóc dáng của mình.', 763.00, 100, 20, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/08/03/3d676a78a03633a041b87edb953aaf68.jpg', '2023-08-12 00:01:32', '2023-08-12 00:01:32'),
(28, 'QUẦN TUYSI PHỐI KHUY', 'Quần dáng suông, chất liệu Tuysi. Phía trước có 2 túi hộp phối với đai dọc và khuy kim loại mạ màu vàng.\r\n\r\nNhững chiếc quần suông luôn đem đến vẻ phóng khoáng, tự do cùng sự sang trọng cần thiết cho các quý cô. Với một chiếc quần Tuysi như thế này, nàng có thể chọn phối cùng nhiều trang phục khác nhau, từ áo kiểu năng động cho đến áo sơ mi thanh lịch.\r\n\r\nMàu sắc: Tím lavender - Nâu cà phê - Đen', 297.00, 100, 21, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2022/05/09/68d23494220bad46481d64634a91355a.JPG', '2023-08-12 00:02:13', '2023-08-12 00:02:13'),
(29, 'QUẦN LỬNG ỐNG SUÔNG', 'Quần lửng, ống suông và rộng. Quần có cạp cao và túi hai bên. Có 4 chiếc khuy kim loại được đính dọc viền túi mỗi bên. Cài bằng khóa kéo sau lưng.\r\n\r\nQuần ống đứng trên nền vải trơn phù hợp phong cách chỉn chu nơi công sở. Dáng quần lửng giúp vẻ ngoài của nàng trông thanh thoát hơn. Phần khuy cài viền túi tạo điểm nhấn sang trọng và thời thượng. Chất liệu Tuysi mang đến cảm giác thoải mái, nhẹ nhàng, dễ là và không bị nhăn.\r\n\r\nMàu sắc: Xanh Tím Than - Nâu Cam', 357.00, 100, 22, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2022/03/08/7b9c8b125afd1430683ed2ffdd9bea38.JPG', '2023-08-12 00:02:58', '2023-08-12 00:02:58'),
(30, 'QUẦN BAGGY DÂY LƯNG THẮT NƠ', 'Với kiểu dáng ống đứng thanh thoát, chiếc quần này giúp tôn lên đôi chân dài và sẽ là sự lựa chọn hoàn hảo cho những buổi đi làm hay các sự kiện đặc biệt. Chất liệu tuýt si mềm mại và thoáng mát, giúp bạn cảm thấy thoải mái và tự tin suốt cả ngày dài.\r\n\r\nĐiểm nhấn của chiếc quần là dây lưng buộc nơ, tạo nên một chi tiết độc đáo và nữ tính, tôn thêm nét quyến rũ cho người mặc. Bạn có thể điều chỉnh độ chặt của dây lưng để tạo nên phom dáng hoàn hảo và phù hợp với từng thân hình.\r\n\r\nTừ sự kết hợp tinh tế giữa kiểu dáng, chất liệu và điểm nhấn độc đáo, chiếc quần này chắc chắn sẽ trở thành một món đồ yêu thích trong tủ quần áo của bạn.', 595.00, 100, 23, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/05/12/6a894a6648f5684ca14acd574aa286b1.jpg', '2023-08-12 00:03:39', '2023-08-12 00:03:39'),
(31, 'JUMPSUIT VEST PHỐI ĐAI', 'Thiết kế Jumpsuit dáng suông. Phần áo dáng cổ vest, tay ngắn vén ống. Quần ống đứng, độ dài chạm mắt cá chân. Chất liệu chính là lụa mềm có độ bóng nhẹ.\r\n\r\nNhững chiếc Jumpsuit đa năng chính là lựa chọn hàng đầu cho các quý cô hiện đại. Chẳng cần mix-match cầu kỳ, chỉ cần diện nguyên bộ Jumpsuit từ IVY moda, nàng đã có ngay một diện mạo hoàn chỉnh thu hút mọi ánh nhìn.\r\n\r\nMàu sắc: Đỏ ruby - Hồng san hô - Họa tiết Tím lavender', 895.00, 100, 24, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2022/05/09/55e6ed21b8a118717c90d63796b50661.JPG', '2023-08-12 00:05:33', '2023-08-12 00:05:33'),
(32, 'CHÂN VÁY DÀI PHỐI TÚI XẺ TÀ', 'Chất liệu vải mềm mại và thoáng mát mang lại cảm giác dễ chịu và thoải mái khi mặc. Với độ dài qua gối, thiết kế sẽ tôn lên vẻ đẹp dịu dàng và quý phái của người mặc.\r\n\r\nChân váy được thiết kế với phần xẻ tà ở phía sau, tạo nên vẻ sexy và thu hút mọi ánh nhìn. Điểm nhấn đặc biệt của sản phẩm là chi tiết túi hộp được phối trên hai bên, vừa mang phong cách thời trang, vừa tạo tính tiện lợi cho thiết kế. \r\n\r\nCó thể kết hợp với áo blazer hoặc sơ mi để tạo nên một phong cách trang nhã và sang trọng. Bạn có thể thêm vào bộ trang phục một đôi giày cao gót hoặc để tôn thêm chiều cao và thêm phần nữ tính cho bản thân.', 495.00, 100, 34, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/07/06/9949c6f5d084cae37f3ce1d667d98272.jpg', '2023-08-12 00:06:41', '2023-08-12 00:06:41'),
(33, 'ZUÝP TUYSI TÀ XẾP 2 LỚP', 'Chân váy công sở thiết kế zuýp đắp tà xếp thanh lịch và linh tế. Thiết kế cạp cao, có độ ôm nhẹ, hai tà xếp lên nhau tạo điểm nhấn bắt mắt. Sử dụng chất liệu Tuysi nhẹ nhàng, tăng cảm giác mặc thoải mái, thích hợp mọi thời tiết. \r\n\r\nBạn có thể lựa chọn chân váy mix cùng nhiều kiểu áo khác nhau để tạo nên vẻ đẹp thời trang riêng của mình. ', 495.00, 100, 35, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/07/06/d803c1462469133d843964641f7bfb87.jpg', '2023-08-12 00:07:40', '2023-08-12 00:07:40'),
(34, 'CHÂN VÁY CHIẾT LY CHÉO TRƯỚC', 'Thiết kế có dáng suông và xoè nhẹ về đuôi, với chiều dài đến ngang bắp chân, chân váy xếp ly đem đến cho người mặc vẻ đẹp thướt tha và tràn đầy cảm giác nữ tính.\r\n\r\nĐược làm từ chất liệu vải tuytsi mềm mại, sản phẩm mang đến sự thoải mái và linh hoạt trong mọi hoạt động. Chiết ly đặc biệt làm tôn lên đôi chân của người mặc và giúp che đi những khuyết điểm trên vùng bụng. Không chỉ thế, những đường dập ly tỉ mỉ còn hướng cái nhìn theo chiều dọc tạo cảm giác chân dài hơn, khéo léo che khuyết điểm chân, phù hợp với mọi dáng người để bất cứ cô nàng nào cũng có thể mặc đẹp.\r\n\r\nSản phẩm có thể kết hợp cùng áo thun tay ngắn để tạo nên một bộ trang phục hàng ngày đơn giản và năng động. Hoặc kết hợp với áo blazer cùng giày cao gót để tạo nên phong cách thời trang và sang trọng hơn. Với kiểu dáng đa năng, chiếc chân váy chiết ly chéo trước chắc chắn sẽ là một trong những món đồ yêu thích trong tủ quần áo của bạn.', 665.00, 100, 36, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/04/20/1126ad04a5e78ca1c47f4d4ed4135f8f.jpg', '2023-08-12 00:08:14', '2023-08-12 00:08:14'),
(35, 'ĐẦM LỤA CỔ ĐỔ', 'Đầm lụa 2 dây cổ đổ, thiết kế maxi ôm eo. Chất liệu lụa được xử lý màu ombre đặc biệt.\r\n\r\nThiết kế đơn giản với phần cổ đổ đầy quyến rũ của nàng. Thân váy ôm nhẹ ngực, eo tạo dáng hình cong hoàn hảo. Diện mẫu đầm này nàng sẽ trở thành quý cô sành điệu trong mọi buổi tiệc, cũng như nổi bật hơn trong mọi cuộc gặp gỡ đấy.', 447.00, 100, 15, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/08/11/d823888c609664c098b3e5f12dcd80df.JPG', '2023-08-12 00:09:03', '2023-08-12 00:09:03'),
(36, 'ĐẦM HAI DÂY TENCEL DÁNG MAXI', 'Đầm 2 dây dáng maxi xòe nhẹ. Kiểu dáng 2 dây giúp khoe bờ vai và mang lại nét quyến rũ cho người mặc. Chất liệu lụa cao cấp 2 lớp mang đến cảm giác dễ chịu, mềm nhẹ trên làn da, kết hợp cùng sắc hồng nổi bật không những tôn da mà còn đem lại nguồn năng lượng tươi mới.\r\n\r\nMột thiết kế dành cho những chuyến đi đầy nắng và gió trong mùa hè này. Đầm maxi dài khiến diện mạo nàng trông duyên dáng hơn. Dáng đầm thướt tha sẽ khiến mọi bước đi của nàng trông thật sinh động. ', 995.00, 100, 16, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/03/21/89bfd4e56185199caa480b4310e84ab0.jpg', '2023-08-12 00:09:45', '2023-08-12 00:09:45'),
(37, 'ĐẦM THUN DÁNG SUÔNG', 'Đầm thun cổ tròn, tay ngắn. Bo chun co giãn ở cổ áo và tay. In hình và chữ, đính hoa nổi khác màu phía trước tạo điểm nhấn. Độ dài qua gấu, xẻ 2 bên sườn.\r\n\r\nVải thun có tính chất làm mát, thấm hút mồ hôi tốt nên được sử dụng nhiều vào mùa nóng, mang lại cảm giấc rất thoải mái, dễ chịu và mát mẻ, làm dịu đi nhiều cái nóng mùa hè. Kiểu dáng basic dễ phối đồ nhưng vẫn không kém phần nổi bật.\r\n\r\nMàu sắc: Cam Đào - Tím lavender', 297.00, 100, 17, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2021/08/06/fa0513f1f22e42eaf9438e1e576e979f.JPG', '2023-08-12 00:10:30', '2023-08-12 00:10:30'),
(38, 'ĐẦM ĐUÔI CÁ TAY CAPE', 'Đầm dạ hội được thiết kế từ chất liệu tuytsi cao cấp. Vai đầm dáng cape cắt vòm may viền khác màu tạo điểm nhấn độc đáo. Phía trước đính bông hoa tăng thêm vẻ sang trọng. Đầm dáng đuôi cá ôm eo và xòe nhẹ phần tà.\r\n\r\nSang trọng nhưng không kém phần duyên dáng, chiếc đầm dạ hội này sẽ giúp nàng trở thành tâm điểm tại mọi bữa tiệc. Thiết kế vai áo tinh tế khéo léo che đi khuyết điểm khiến nàng chưa tự tin. Dáng đầm ôm nhẹ tôn lên trọn vẹn đường cong cơ thể nàng. Phía trước là phụ kiện hoa nổi bật giúp nâng tầm khí chất người mặc.', 1450.00, 100, 18, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/03/20/3919aa4d3fbf82ee6b8daf34f7dad30d.jpg', '2023-08-12 00:11:07', '2023-08-12 00:11:07'),
(39, 'TÚI DA XÁCH TAY', 'Mẫu túi xách tay size medium, chất liệu da PU. Bên trong lót vải, có 1 ngăn ẩn. Quai xách cố định, không tháo rời và điều chỉnh được. Thiết kế túi cơ bản phù hợp với mọi outfit của các cô nàng.\r\n\r\nKích thước túi: cao x rộng x ngang: 20 x 22 x 17cm', 399.00, 100, 41, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2022/07/06/32f6cc38632b07729327707599a675a1.jpg', '2023-08-12 00:12:08', '2023-08-12 00:12:08'),
(40, 'XĂNG ĐAN DA CAO GÓT', 'Xăng đan cao gót, có 4 quai mảnh bằng da. Gót nhọn bọc chất liệu cùng màu.\r\n\r\nGót cao 7cm', 149.00, 100, 37, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2022/08/04/078e55e3b8d1b6ea2423bc63be22285d.jpg', '2023-08-12 00:13:09', '2023-08-12 00:13:09'),
(41, 'KHĂN LỤA OMBRÉ', 'Khăn lụa vuông, phối màu Ombré hút mắt. Thiết kế khăn được làm từ chất liệu lụa mềm cao cấp, phù hợp để nàng diện như một chiếc áo yếm hay dùng làm phụ kiện cho quần áo, túi xác hằng ngày.', 325.00, 100, 39, 'https://pubcdn.ivymoda.com/files/product/thumab/400/2022/05/20/983aa75232b12ecc776d554fd9e09c85.JPG', '2023-08-12 00:14:05', '2023-08-12 00:14:05'),
(42, 'ÁO THUN PHỐI TÚI HỘP', 'Áo thun trơn cổ tròn basic sẽ là item không thể thiếu trong những ngày hè sắp tới cho mọi chàng trai.\r\n\r\nDáng áo trẻ trung dễ mặc cùng túi áo trước ngực lạ mắt mang cảm giác hiện đại. Chất áo thun thoáng mát cho các chàng trai vận động thoải mái không lo trong thời tiết mùa hè sắp tới.\r\n\r\nMàu sắc: Nude - Xanh Dương ', 207.00, 100, 10, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2022/05/27/d79001635b2af011e4e8dc5f88651eab.JPG', '2023-08-12 00:14:47', '2023-08-12 00:14:47'),
(43, 'ÁO KHOÁC GIÓ CỔ MŨ\r\n', 'Áo khoác gió 2 lớp phom suông rộng, giúp người mặc thoải mái trong từng cử động, nhưng đồng thời vẫn đảm bảo vừa vặn về số đo vai, độ dài tay, áo.\r\n\r\nThiết kế tỉ mỉ đến từng chi tiết đem đến cho những trải nghiệm tuyệt vời nhất trong thời tiết se lạnh với mũ liền kết cấu đặc biệt. Phần tay giắc lăng dáng xuông. 2 túi chéo có dây khóa kéo. Cài bằng dây khóa phía trước.\r\n\r\nChất liệu vinilon cao cấp giúp giữ ấm, chắn mưa, gió hiệu quả. Đặc biệt, vải nhẹ và thoáng, hạn chế bám bụi, dễ chăm sóc và bảo quản.\r\n\r\nSản phẩm mặc cùng quần đồng bộ MS 20E3085', 537.00, 100, 11, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/02/16/07fdbeaab44884f28d1217535975568a.jpg', '2023-08-12 00:15:32', '2023-08-12 00:15:32'),
(44, 'ÁO THUN KẺ PHỐI KẺ', 'Được ra đời vào những năm 60, là chiếc áo được dùng trong thể thao “hockey trên lưng ngựa” hay còn gọi là Polo. Và sau này đến năm 1920, nhà thiết kế René Lacoste biến tấu những chiếc áo polo dài tay thành những chiếc polo ngắn tay, và những chiếc áo polo đã sớm trở thành một trong những mẫu áo “kinh điển” luôn hiện diện trong tủ đồ của những quý ông hiện đại – Những chiếc áo polo mang dáng vẻ lịch sự nhưng vẫn vô cùng năng động, cuốn hút.\r\n\r\nChất liệu vải pique dệt - cotton sợi dệt mặt lưới, tạo ra được độ mềm và thoáng cho những người ưa vận động hay chơi thể thao, độ thấm hút mồ hôi tốt và có khả năng co giãn 4 chiều, đem đến cảm giác vô cùng thoải mái, dễ chịu khi sử dụng.\r\n\r\nForm áo Regular Fit viền chun co giãn ở tay áo giúp người mặc trở nên khỏe khoắn và năng động hơn. Phần cổ áo được may bằng vải từ thân áo với 3 khuy cài tạo nên thiết kế mới mẻ, trẻ trung và đầy sức sống.\r\n\r\nMàu sắc: Kẻ Xanh Dương', 207.00, 100, 13, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2021/09/10/948e0fd59d46f1523cf6513743ad819d.JPG', '2023-08-12 00:16:19', '2023-08-12 00:16:19'),
(45, 'ÁO SƠ MI VIỀN CỔ', 'Áo sơ mi cổ đức, tay dài, dáng slim fit ôm nhẹ. Phần cổ có đường viền. \r\n\r\nMẫu áo thích hợp mặc đi làm cho các chàng trai công sở. Thiết kế dài tay, lịch sự. Form slim fit gọn gàng. Màu sắc dễ mặc, trẻ trung. Chàng có thể sơ vin hay thả dáng đều đẹp. Phù hợp phối cùng quần tối màu.', 357.00, 100, 12, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2022/05/27/9261977f1c730d55b91607c9abd12ea4.JPG', '2023-08-12 00:16:58', '2023-08-12 00:16:58'),
(46, 'ÁO KHOÁC LEN CARDIGAN NAM', 'Áo khoác len của nam cổ V, tay dài. Có 2 túi vuông 2 bên không nắp, gấu bo viền co giãn. Độ ôm vừa vặn quanh ngực để tạo cảm giác thoải mái khi mặc.\r\n\r\nChất len dày dặn, giữ ấm tối đa cho cơ thể. Kiểu dáng vừa vặn với cơ thể và có phần khỏe khoắn, năng động. \r\n\r\nMàu sắc: Ghi Khói', 417.00, 100, 14, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2021/12/27/475d931533196423eca73bd3e9ef9160.JPG\r\n', '2023-08-12 00:18:01', '2023-08-12 00:18:01'),
(47, 'ÁO VEST KẺ', 'Áo vest cổ hai ve cách điệu. Tay dài có 4 khuy. Có 1 túi trước ngực, 2 vuông có nắp 2 bên, có 3 túi lót bên trong. Có 2 khuy cài mặt trước. Xẻ tà 2 bên phía sau.\r\n\r\nĐể tạo nên những bộ suit đẳng cấp, các nhà thiết kế tài ba của IVY Men tỉ mỉ trong từng đường chỉ, phom dáng cứng cáp từ cầu vai, vạt áo cho đến chiều dài chuẩn của ống tay đều được IVY Men chú trọng.\r\nĐi cùng là chất liệu cao cấp nhập khẩu từ Nhật Bản. Tất cả tạo nên những bộ Suit hoàn hảo - Chuẩn mực tối thượng của sự lịch lãm đầy nam tính.\r\n\r\nMàu sắc: Họa tiết Chì - Họa tiết Xanh Dương Đậm - Họa tiết Nâu Đen - Họa tiết Xanh Tím Than', 987.00, 100, 9, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2020/10/19/48dc9290220628b2c396a3e02a6185c9.jpg', '2023-08-12 00:18:40', '2023-08-12 00:18:40'),
(48, 'QUẦN BÒ SKINNY', 'Quần bò dáng skinny ôm nhẹ. Phía trước được đánh bạc sáng màu. Thiết kế năng động và trẻ trung, phù hợp cho những dịp đi chơi của chàng.', 357.00, 100, 29, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2022/04/29/3dcfd2748cd7ed891b986f5f627d31a0.JPG', '2023-08-12 00:19:13', '2023-08-12 00:19:13'),
(49, 'QUẦN LỬNG VẢI PHỐI SỢI TENCEL', 'Quần lửng ngang gối. Có 2 túi phía trước và 2 túi có khuy cài phía sau. Nhấn đường ly cố định 2 bên ống quần. Cài phía trước bằng khóa kéo và khuy.\r\n\r\nKhông chỉ là chất vải Khaki thông thường mà còn được phối 50% sợi Tencel giúp thiết kế có độ mềm, mát hơn quần khaki thông thường. Màu sắc cơ bản, độ dài ngang gối, có thể linh hoạt phối hợp với nhiều trang phục khác nhau trong mùa hè.\r\n\r\nMàu sắc: Xanh Oliu - Bạc Hà ', 207.00, 100, 30, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2021/09/11/977bebc9e514e1ed17a2399dcf2f391a.JPG', '2023-08-12 00:20:10', '2023-08-12 00:20:10'),
(50, 'QUẦN MIX KHÓA KÉO', 'Quần nam dài. Cạp chun có dây thắt. Chất vải Tuysi mềm, nhẹ, đứng form. Họa tiết vạch mờ giống như quần tây. Ống quần có mix khóa kéo ở hai bên. Phía trước có 2 túi chéo.\r\n\r\nChàng muốn thoải mái nhưng vẫn phải chỉn chu và sành điệu cho chyến dạo chơi ngày hè? Vậy một chiếc quần mix khóa kéo đặc biệt như thiết kế này thì sao. Bạn có thể điều chỉnh khóa kéo theo ý mình để tạo điểm nhấn cho set đồ. Cạp chung cùng dây thắt mang đến cảm giác năng động thể thao. Chất liệu Tuysi thoải mái nhưng giữ dáng tốt không kém gì một chiếc quần tây. Chàng có thể phối cùng áo thun hay áo sơ mi đều phù hợp cả.\r\n\r\nMàu sắc: Đen - Ghi khói', 327.00, 100, 31, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2022/03/29/285b1cb7a5d021ca081d89ecdd892a23.JPG', '2023-08-12 00:20:56', '2023-08-12 00:20:56'),
(51, 'QUẦN KHAKI CÁ TÍNH', 'Quần khaki, có 2 túi có nắp phía giữa ống quần và hai túi có nắp phía sau. Đai quần có đỉa. Cài phía trước bằng khóa kéo và khuy.\r\n\r\nNằm trong BST The Avenue, thiết kế này tạo nên sự tươi mới và cá tính. Chất vải khaki ít nhàu, không bai, không xù. Đường may chỉn chu, tinh tế khiến quần rất bền. Không chỉ phổ biến nơi công sở, bạn hoàn toàn có thể biến tấu cho riêng mình bằng cách mix-match cùng sơ mi, áo thun hoặc len mỏng để trở thành chàng trai lịch thiệp trong mọi trường hợp.\r\n\r\nMàu sắc: Xanh Tím Than - Đen', 378.00, 100, 32, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2020/05/12/e1a8a87f06c9918030da57b91b066188.jpg\r\n', '2023-08-12 00:21:43', '2023-08-12 00:21:43'),
(52, 'QUẦN DÀI FIT DÁNG', 'Quần dài, ống ôm nhẹ. Độ dài chạm mắt cá chân. Đai quần có khuy cài và đỉa. Khóa dạng kéo. Đằng sau có 2 túi giả.\r\n\r\nMột chiếc quần fit dáng là item mà mọi chàng trai không thể bỏ qua. Thiết kế ôm nhẹ tôn dáng khiến đôi chân người mặc trông dài và thon hơn rất nhiều. Sắc tối dễ mix-match cùng nhiều thiết kế áo khác. Với những chàng trai trẻ trung, đây sẽ là chiếc quần phù hợp cho cả ngày đi chơi và đi làm.\r\n\r\nMàu sắc: Kẻ chì - Kẻ xanh tím than', 387.00, 100, 33, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2022/03/29/db0d3353e479b05b24fb2448c7975dcc.JPG', '2023-08-12 00:22:18', '2023-08-12 00:22:18'),
(53, 'GIÀY LƯỜI NAM DA THẬT', 'Giày nam thiết kế kiểu giày lười, quai ngang có dây. Đế giày cao 3cm chắc chắn, chống trơn trượt. Đường may chi tiết, tỉ mỉ theo tiêu chuẩn. \r\n\r\nChất liệu da bò thật vẫn giữ được độ sáng nhẹ sang trọng và đường nét hiện đại mạnh mẽ. Block nguyên cao su đế có độ cao hồi, giảm xóc tốt giúp chuyển đổi dễ dàng hơn. Đế lót dày chú trọng vào sự bảo đảm thoải mái cho ngày dài bận rộn.  Kết hợp cùng quần âu, kaki, trang phục lịch sự.\r\n\r\nMàu sắc: Đen', 449.00, 100, 38, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2021/11/19/9c8779fe7870f56096fd5b926cdf17ae.JPG', '2023-08-12 00:23:01', '2023-08-12 00:23:01'),
(54, 'KẸP CÀ VẠT IVY MEN', 'Kẹp cà vạt IVY men  được làm bằng hợp kim cao cấp, chống rỉ sét, mang lại sự sang trọng và đẳng cấp cho các quý ông. Mẫu thiết kế với các họa tiết độc đáo và tinh tế. Sản phẩm được chúng tôi nghiên cứu và lựa chọn phù hợp với nhiều loại cà vạt, áo vest, ghi lê, sơ mi…\r\n\r\nChiều dài: 4cm\r\n\r\nMàu sắc: Đen - Bạc', 177.00, 100, 40, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2020/12/14/321983f2e6dc8ef877cc4213bb31050a.jpg', '2023-08-12 00:23:43', '2023-08-12 00:23:43'),
(55, 'SET BỘ ÁO THUN + ZUÝP HỌA TIẾT CHẤM BÁO', 'Áo thun cổ tròn, tay ngắn bo chun co giãn diềm bèo nhỏ. Dáng áo xuông. Zuýp xòe cùng màu đi kèm có cạp chun co giãn, dáng xòe và lót quần bên trong.\r\n\r\nMàu sắc: Họa tiết Trắng', 270.00, 100, 42, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2021/06/02/5e0fb9719530b992c6abb42c5355bd9a.jpg', '2023-08-12 00:24:26', '2023-08-12 00:24:26'),
(56, 'QUẦN SOOC GẤU NƠ', 'Quần sooc bé gái, cạp chun co giãn. Gấu gập 2 bên thắt nơ sẵn tạo kiểu. Dáng suông với độ dài ngang đùi.\r\n\r\nMàu sắc: Họa tiết Vàng Nghệ - Họa tiết Trắng', 145.00, 100, 43, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2021/06/02/8d6beef3ec6a8ef3278f38519c09b6fb.jpg', '2023-08-12 00:24:56', '2023-08-12 00:24:56'),
(57, 'ĐẦM ORGANZA DÁNG XÒE', 'Đầm organza 2 lớp, cổ tròn, tay ngắn bồng. Trang trí 1 trái tim nổi trước ngực. Cài bằng khóa kéo ẩn sau lưng.\r\n\r\nMàu sắc: Nude', 299.00, 100, 44, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2022/01/07/ea3dea845152e7088a9cb841cb278563.JPG', '2023-08-12 00:25:30', '2023-08-12 00:25:30'),
(58, 'CHÂN VÁY CHỮ A', 'Zuýp thô 2 lớp cạp chun co giãn. Phần thân chần chỉ tạo nhúm. Đuôi xòe kiểu đuôi cá. Chất liệu vải thô thấm hút mồ hôi (bên trong lót vải) \r\n\r\nMàu sắc: Hồng san hô - Vàng hoa cúc - Đỏ', 69.00, 100, 45, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2021/05/06/f6a6e02abb9365431cfa2cde9e5a9104.jpg', '2023-08-12 00:26:25', '2023-08-12 00:26:25'),
(59, 'SET 3 ĐÔI TẤT NGẮN BÉ GÁI', 'Tất trơn cotton 3 chiếc 3 màu, hạn chế vi khuẩn: Hút ẩm - Giữ ấm - Thoải mái - Mềm mại. Thành phần cotton tự nhiên có khả năng giữ nhiệt cao tạo cảm giác thư giãn khi mang. Bảo vệ và cải thiện sức khỏe khi sử dụng.\r\n\r\nThành phần: 80% Cotton - 15% Spandex - 5% Latex\r\n\r\nMàu sắc: 3 màu\r\n\r\n', 75.00, 100, 46, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2022/01/18/bfe32be9d9d6c8774563635c533d6ff6.JPG', '2023-08-12 00:27:01', '2023-08-12 00:27:01'),
(60, 'ÁO THUN BÉ TRAI NGẮN TAY', 'Áo thun được làm từ chất liệu thấm hút, không gây kích ứng cho da bé, giúp bé luôn cảm thấy thoải mái và khô ráo suốt cả ngày.\r\n\r\nBa mẹ có thể dễ dàng kết hợp áo với các loại quần, quần short hoặc jeans để tạo ra nhiều phong cách khác nhau cho bé. Ngoài ra, sản phẩm còn có nhiều màu sắc và họa tiết đa dạng để bạn lựa chọn phù hợp với sở thích và phong cách của bé trai.', 244.00, 100, 48, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2023/04/05/a3e5256f27af6a6eb6e2b3d4d877402a.jpg\r\n', '2023-08-12 00:27:38', '2023-08-12 00:27:38'),
(61, 'QUẦN DÀI KHAKI BÉ TRAI', 'Quần dài khaki cạp chun co giãn, 2 túi chéo 2 bên - 2 viền túi giả phía sau. Gấu bo chun co giãn.\r\n\r\nMàu sắc: Xanh Tím Than - Đen', 99.00, 100, 49, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2021/11/23/5f8d7bc6266d16bc17889f66ae6ccadd.JPG', '2023-08-12 00:28:49', '2023-08-12 00:28:49'),
(62, 'GIÀY THỂ THAO CÁ TÍNH BÉ TRAI', 'Giày thể thao cho bé trai được phối màu cá tính thích hợp cho con diện nhiều kiểu quần áo thời trang khác nhau theo phong cách năng động, khỏe khoắn.\r\n\r\nĐược tạo nên từ chất liệu vải lưới kết hợp da PU. Lớp lót đế rất dày dặn với nhiều lỗ thông khí giúp chân con thông thoáng tối đa, không gây hầm bí chân khi mang cả ngày dài. Đế giày siêu nhẹ, độ bám chống trơn trượt tốt , dễ dàng uốn cong nên hỗ trợ vận động rất tốt. Cho bé cảm giác tự tin, thoải mái trên từng bước đi. Thích hợp cho con diện đồ thời trang đi chơi, đi du lịch, đi học hay chạy bộ, các hoạt động thể thao...\r\n\r\nMàu sắc: Bạc - Đen', 445.00, 100, 49, 'https://pubcdn.ivymoda.com/files/product/thumab/1600/2021/09/27/ff9a166ca9e389a25a917a46b2f5d6ce.JPG', '2023-08-12 00:29:24', '2023-08-12 00:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `purchasehistory`
--

CREATE TABLE `purchasehistory` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `purchase_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(1, 'Nữ'),
(2, 'Nam'),
(3, 'Bé Gái'),
(4, 'Bé Trai');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created_at`, `fullname`, `address`, `phone`) VALUES
(17, 'cuong', '$2y$10$0bXfhxXo3w.IC/1P9tgAFO06JyXwUwSgas4GPOHAlP2VY/jolha/m', 'a@a', 'user', '2023-08-12 03:49:11', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE `vouchers` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vouchers`
--

INSERT INTO `vouchers` (`id`, `code`, `discount`, `start_date`, `end_date`) VALUES
(1, 'HK231', 120.00, '2023-08-12', '2023-08-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `figure`
--
ALTER TABLE `figure`
  ADD PRIMARY KEY (`figure_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `figure_id` (`figure_id`);

--
-- Indexes for table `purchasehistory`
--
ALTER TABLE `purchasehistory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `figure`
--
ALTER TABLE `figure`
  MODIFY `figure_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `purchasehistory`
--
ALTER TABLE `purchasehistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `figure`
--
ALTER TABLE `figure`
  ADD CONSTRAINT `figure_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`),
  ADD CONSTRAINT `figure_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD CONSTRAINT `orderitems_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `orderitems_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`figure_id`) REFERENCES `figure` (`figure_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
