-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 05:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `user_email`, `user_pass`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE `book_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `arrivals` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=pending,1=confirm, 2=cancelled\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`id`, `name`, `email`, `destination`, `package`, `arrivals`, `status`) VALUES
(1, 'Nalina', 'nalina@gmail.com', 'lalitpur', '', '2022-05-25', 0),
(6, 'test01', 'test@gmail.com', 'pokhara', '', '2022-06-01', 0),
(7, 'aarati01', 'aarati@gmail.com', 'balkumari', 'package2', '2022-06-04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `email`, `message`, `status`) VALUES
(1, 'user@gmail.com', 'hello', 0);

-- --------------------------------------------------------

--
-- Table structure for table `home_tbl`
--

CREATE TABLE `home_tbl` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_tbl`
--

INSERT INTO `home_tbl` (`id`, `title`, `image`, `description`) VALUES
(1, 'lalitpur', 'lalitpur.webp', 'Lalitpur, originally known as Patan, was a self-contained city-state. It is thought to be the earliest city in the Kathmandu Valley, having been founded in the third century BCE. Visit Durbar Square, which is home to several amazing temples and palaces, and browse the fair trade shops, which sell a wonderful selection of handcrafted goods. It is frequently crowded during the day as visitors cross the Bagmati River from neighboring Kathmandu, and it gets quiet at night as they return to the capital.\r\n\r\n'),
(2, 'bhaktapur', 'bhaktapur.webp', 'Bhaktapur is one among the three burghs that are counted as the greatest kingdom of the Malla era. Thus, there are more historical stories and pieces of evidence. However, this does not bound Bhaktapur to be limited. There are other aspects of Bhaktapur that draws your faces into a maze full of thoughts. Bhaktapur is a comparatively very clean city than the other major cities of Nepal. You can sense that right after crossing the Manohara River, which also marks the border of Kathmandu and Bhaktapur.'),
(3, 'lumbini', 'lumbini.jpg', 'The most important of all of the reasons you should visit Lumbini is that it is a World Heritage Site. It being a World heritage site in itself is a reason enough to go and visit it. Only those places which are really important and stand for something great are included in the World Heritage Site. If you are still questioning yourself, “is Lumbini worth visiting”, then think no more! The tranquility, aura and peace that you would experience in Lumbini makes it among the most holy places to visit in the world. Lumbini means Love in Sanskrit and the place ensures that your feel the spiritual love. Also read more about Beautiful temples in Nepal.');

-- --------------------------------------------------------

--
-- Table structure for table `package_tbl`
--

CREATE TABLE `package_tbl` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_tbl`
--

INSERT INTO `package_tbl` (`id`, `title`, `image`, `description`, `price`) VALUES
(4, 'Trekking ', 'R.jpg', 'This Package Includes Trekking Cost For 2 Months.', 'Rs 100000'),
(5, 'Chandragiri-Chitlang-Kulekhani', 'chitwan.jpg', 'The Chandragiri-chitlang-Kulekhani road is a historic route coming into or going out of Kathmandu and was once the only means to enter this enchanting valley. Vintage photographs show sixty porters struggling to carry a motor car along this road which was quite a feat considering the uphill climb to the Chandragiri pass before descending to Kathmandu.', 'Rs 50000'),
(6, 'Wildlife', 'tiger.jfif', 'Nepal’s wildlife is officially classified into two main categories: common and protected. The common category lists Nepal is a landlocked country located in South Asia with China in the north and India in the south, east and west.', 'Rs 60000');

-- --------------------------------------------------------

--
-- Table structure for table `service_tbl`
--

CREATE TABLE `service_tbl` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_tbl`
--

INSERT INTO `service_tbl` (`id`, `title`, `image`, `description`) VALUES
(1, 'pokhara', 'pokhara.jpg', 'It is the gateway to the Annapurna region where many a trekker finds his Shangri-La. Pokhara’s spellbinding beauty has been the subject of many travel writers. Its pristine air, the spectacular backdrop of the snowy peaks of the Annapurna Range and the serene Phewa, Begnas and Rupa Lakes, makes this destination ‘the Jewel of the Himalaya’. It is home to exceptionally warm and engaging people and is the starting point for treks into the Annapurna Himalaya, which dominates the skyline. The area along Fewa Tal, the largest lake in the valley, was first a camping ground for trekkers and has gradually developed into the tourist hub of this rapidly growing city.'),
(2, 'illam', 'illam.jpg', 'ILAM in Nepal is a place famous for its tea gardens. This city is one among the beautiful places to visit in the country. Ilam is among the highest and most beautiful destination in the country to enjoy tea vacations. The beautiful place is blessed with superb natural beauty and rich tradition of culture. You will love to spend your holidays in this place. Amongst all the beautiful destinations there are few places which are more preferred by the tourists than this wonderful destination in Nepal. The main attractions of this place are idyllic tea garden, tea room, historic bungalow and the tea gardens.	'),
(3, 'dolpa', 'dolpa.jpg', 'According to the park, the study has been started by connecting four snow leopards of the area to radio collars. Dolpa is rich not only in natural beauty but also in cultural, religious and historical aspects. The'),
(4, 'dharan', 'DHARAN.jpg', '\r\nDharan is one of the best places to visit in Sunsari District, Nepal. It is famous for its landscape and cleanliness. We can get many various street foods and also Chhurpi. Dharan, Queen of the Eastern Hills\r\nDharan is a famous tourist and pilgrimage center in Nepal’s eastern region and is a gateway to several attractions including the Kanchenjunga and Arun Valley.\r\nDharan, Queen of the Eastern Hills\r\nA beautiful city in Nepal’s eastern region, Dharan lies at the foothills of the Mahabharata range north of the Terai region with a stunning natural beauty that makes it one of Nepal’s best travel destinations.\r\nThe city is a prominent tourist center and acts as a gateway to several attractions in the eastern hills including the Kanchenjunga, Arun Valley, Makalu-Varun National Park and Dhankutta. Interestingly, Nepal’s second longest river Sapta Kosi runs nearby Dharan.'),
(5, 'chitwan', 'chitwan.jpg', 'Chitwan, being the 5th largest city of Nepal has tremendous offerings to the tourists. Chitwan is popular for cultural variations, jungle activities, pilgrimage tours and many more. Due to the geographical structure, a trip to Chitwan is easy. Sauraha is the main tourist destination in Chitwan. After the lockdown in the country due to the coronavirus outbreak, there are no international tourists and the domestic tourists have also decreased.'),
(6, 'hetauda', 'hetauda.jpg', 'Hetauda, the district capital for Makwanpur, is by far one of the quaintest, most well thought-out towns along the Tarai, thanks to its first Mir, or town chief. He laid out the major road-junctions, making it the central point it is, outside of the town. The roads to Chitwan, India and Kathmandu, don’t come near the town-centre. Trees line the streets, shop and market placement makes sense and the whole place gives an air of calm, tranquil organization. Three rivers: the Rapti, Kara and Bagi cut Hetauda in three lines, turning it into a triangular island, giving the place a unique character. All this water also aids in making the flaura and fauna of this jungle area quiet diverse. Flowers such as orchids grow in abundance in this environment, as does medicinal herbs or Jheribhuti. Just outside of town is another island, cut by two rivers, here is a centre for studying and learning all about the aforementioned jheributhi. These rivers also provide pleasant respite on those hot Tarai-day’s.');

-- --------------------------------------------------------

--
-- Table structure for table `signup_form`
--

CREATE TABLE `signup_form` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup_form`
--

INSERT INTO `signup_form` (`id`, `username`, `password`, `email`) VALUES
(1, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com'),
(2, 'nalina01', 'nalina123', 'nalina@gmail.com'),
(4, 'user01', 'user123', 'user@gmail.com'),
(5, 'abc01', 'abc123', 'abc@gmail.com'),
(7, 'nalisha01', 'nalisha123', 'nalisha@gmail.com'),
(8, 'nalina03', 'nalina123', 'nalina03@gmail.com'),
(9, 'nalina05', 'nalina123', 'nalina05@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_tbl`
--
ALTER TABLE `home_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_tbl`
--
ALTER TABLE `package_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_tbl`
--
ALTER TABLE `service_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup_form`
--
ALTER TABLE `signup_form`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_tbl`
--
ALTER TABLE `home_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `package_tbl`
--
ALTER TABLE `package_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `service_tbl`
--
ALTER TABLE `service_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `signup_form`
--
ALTER TABLE `signup_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
