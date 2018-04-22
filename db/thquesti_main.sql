-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 22, 2018 at 06:19 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thquesti_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `analytics`
--

CREATE TABLE `analytics` (
  `analytic-id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `browser` int(11) NOT NULL,
  `details` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `stop` datetime NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `answer_count` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(3) NOT NULL,
  `qid` int(3) NOT NULL,
  `question_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer_val` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sorting` int(3) NOT NULL,
  `uid` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `device` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tricker` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `qid`, `question_type`, `title`, `answer_val`, `sorting`, `uid`, `timestamp`, `device`, `tricker`) VALUES
(1, 1, '1', 'question part 2', '', 1, 1, '2018-04-04 03:37:12', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 1),
(2, 2, '1', 'question part 1', '', 1, 1, '2018-04-04 03:33:30', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 1),
(3, 3, '1', 'question part 1', '', 1, 1, '2018-04-04 03:33:33', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 1),
(4, 4, '1', 'question part 1', '', 1, 1, '2018-04-04 03:33:34', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 1),
(5, 5, '1', 'question part 1', '', 1, 1, '2018-04-04 03:33:35', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 1),
(6, 6, '1', 'question part 1', '', 1, 1, '2018-04-04 03:33:35', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 1),
(7, 7, '1', 'question part 1', '', 1, 1, '2018-04-04 03:33:36', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 1),
(8, 1, '1', 'question part 1', '', 1, 2, '2018-04-07 14:06:28', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(9, 2, '1', 'question part 1', '', 1, 2, '2018-04-07 14:51:07', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(10, 3, '1', 'question part 1', '', 1, 2, '2018-04-07 14:51:06', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(11, 1, '1', 'question part 2', '', 1, 4, '2018-04-07 14:54:44', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(12, 2, '1', 'question part 2', '', 1, 4, '2018-04-07 14:54:45', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(13, 3, '1', 'question part 2', '', 1, 4, '2018-04-07 14:54:46', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(14, 4, '1', 'question part 2', '', 1, 4, '2018-04-07 14:54:46', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(15, 5, '1', 'question part 2', '', 1, 4, '2018-04-07 14:58:55', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(16, 6, '1', 'question part 2', '', 1, 4, '2018-04-07 14:58:55', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(17, 7, '1', 'question part 2', '', 1, 4, '2018-04-07 14:58:54', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(18, 8, '2', 'question part 2', '', 1, 4, '2018-04-07 14:58:54', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(19, 1, '1', 'question part 1', '', 1, 5, '2018-04-21 09:45:22', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(20, 2, '1', 'question part 1', '', 1, 5, '2018-04-21 09:45:24', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(21, 3, '1', 'question part 1', '', 1, 5, '2018-04-21 09:45:26', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(22, 4, '1', 'question part 1', '', 1, 5, '2018-04-21 09:45:28', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(23, 5, '1', 'question part 1', '', 1, 5, '2018-04-21 09:45:29', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(24, 6, '1', 'question part 1', '', 1, 5, '2018-04-21 09:45:31', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(25, 1, '1', 'question part 1', '', 1, 10, '2018-04-21 08:10:42', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(26, 7, '1', 'question part 1', '', 1, 5, '2018-04-21 09:45:33', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `qid` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `sorting` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qid`, `title`, `active`, `sorting`) VALUES
(1, 'ฉันไม่ใช่คนช่างวิตกกังวล', '1', 1),
(2, 'บ่อยครั้งที่ฉันรู้สึกว่าตัวเองด้อยกว่าผู้อื่น', '1', 2),
(5, 'เมื่อฉันตกอยู่ภายใต้ความกดดันมาก ๆ บางครั้งฉันรู้สึกเหมือนตัวเองจะแตกเป็นเสี่ยง ๆ', '1', 3),
(6, 'ฉันไม่ค่อยรู้สึกเหงา หรือซึมเศร้า', '1', 4),
(7, 'บ่อยครั้งที่ฉันรู้สึกเครียด และกระวนกระวายใจ', '1', 5),
(8, 'บางครั้งฉันรู้สึกว่าตัวเองไม่มีคุณค่าเลย', '1', 6),
(9, 'ฉันไม่ค่อยรู้สึกหวาดกลัว หรือวิตกกังวล', '1', 7),
(10, 'บ่อยครั้งที่ฉันรู้สึกโกรธจากการกระทำของคนอื่นที่แสดงต่อฉัน', '1', 8),
(11, 'บ่อยครั้งที่เมื่อเกิดความผิดพลาดขึ้น ฉันมักรู้สึกท้อแท้และยอมแพ้มัน', '1', 9),
(12, 'ฉันไม่ค่อยรู้สึกโศกเศร้าหรือหดหู่ใจ', '1', 10),
(13, 'บ่อยครั้งที่ฉันรู้สึกอ่อนแอ และต้องการให้คนอื่นมาช่วยแก้ปัญหาต่าง ๆ แทน', '1', 11),
(14, 'ในบางครั้งฉันรู้สึกอับอายมากจนอยากจะหลบหน้าจากคนอื่น', '1', 12),
(15, 'ฉันชอบให้มีคนอยู่รอบข้าง', '1', 13),
(16, 'ฉันเป็นคนหัวเราะง่าย', '1', 14),
(17, 'ฉันไม่คิดว่าตัวเองเป็นคนร่าเริง', '1', 15),
(18, 'ฉันชอบพบปะพูดคุยกับคนอื่น', '1', 16),
(19, 'ฉันชอบเข้าร่วมในการทำกิจกรรมต่าง ๆ', '1', 17),
(20, 'ปกติแล้วฉันชอบที่จะทำอะไรตามลำพัง', '1', 18),
(21, 'บ่อยครั้งที่ฉันรู้สึกว่าตนเองเต็มไปด้วยพลังมากมาย    จนอยากแสดงออกมา', '1', 19),
(22, 'ฉันมักเป็นคนร่าเริงแจ่มใส และมีขวัญกำลังใจสูง', '1', 20),
(23, 'ฉันไม่ใช่คนมองโลกในแง่ดี', '1', 21),
(24, 'ชีวิตของฉันเต็มไปด้วยกิจกรรม', '1', 22),
(25, 'ฉันเป็นคนกระฉับกระเฉงอย่างมาก', '1', 23),
(26, 'ฉันชอบที่จะทำอะไรตามวิธีของฉันเองมากกว่าการทำตามผู้อื่น', '1', 24),
(27, 'ฉันไม่ชอบเสียเวลาไปกับการคิดเพ้อฝัน', '1', 25),
(28, 'เมื่อฉันพบว่าวิธีใดเป็นวิธีการที่ถูกต้องในการทำสิ่งต่าง ๆ ให้เสร็จ ฉันก็มักจะใช้วิธีนั้นอยู่เป็นประจำ', '1', 26),
(29, 'ฉันมักมีวิธีการแก้ปัญหาด้วยวิธีที่ฉันพบจากศิลปะ หรือสิ่งที่ฉันพบในธรรมชาติ', '1', 27),
(30, 'การเชื่อว่าการปล่อยให้เด็กฟังคนเถียงกันจะมีแต่ทำให้เด็กเกิดความสับสนและเห็นตัวอย่างผิด ๆ', '1', 28),
(31, 'บทกวีส่งผลต่อความรู้สึกของฉันน้อยมาก หรือไม่มีผลเลย', '1', 29),
(32, 'บ่อยครั้งที่ฉันชอบลองชิมอาหารใหม่ ๆ และอาหารต่างชาติ', '1', 30),
(33, 'ฉันไม่ค่อยสังเกตเห็นอารมณ์ หรือความรู้สึกที่เกิดขึ้นในสถานการณ์ต่าง ๆ', '1', 31),
(34, 'ฉันเชื่อว่าเราควรยึดคำสั่งสอนทางศาสนา เพื่อใช้ในการตัดสินเรื่องศีลธรรมจรรยา', '1', 32),
(35, 'บางครั้งเมื่อฉันอ่านบทกวีหรือดูงานศิลปะ ฉันจะรู้สึกสั่นสะท้านหรือเกิดคลื่นแห่งความเร่าร้อน', '1', 33),
(36, 'ฉันมีความสนใจเกี่ยวกับการคาดเดาถึงปรากฏการณ์ทางธรรมชาติ หรือความรู้สึกของคนน้อยมาก', '1', 34),
(37, 'ฉันมีความสนใจใคร่รู้เกี่ยวกับเรื่องที่ประเทืองปัญญา', '1', 35),
(38, 'บ่อยครั้งที่ฉันสนุกกับเรื่องที่ต้องพิสูจน์หรือความคิดที่เป็นนามธรรม', '1', 36),
(39, 'ฉันพยายามสุภาพกับทุกคนที่ฉันพบ', '1', 37),
(40, 'บ่อยครั้งที่ฉันมีเรื่องโต้เถียงหรือขัดแย้งกับคนในครอบครัว หรือเพื่อนร่วมงาน', '1', 38),
(41, 'บางคนคิดว่าฉันเป็นคนเห็นแก่ตัวและถือตัวเองเป็นใหญ่', '1', 39),
(42, 'ฉันชอบการร่วมมือกันทำงานมากกว่าการแข่งขันกันทำงาน', '1', 40),
(43, 'ฉันค่อนข้างที่จะดูถูก หรือสงสัยในเจตนาของคนอื่น', '1', 41),
(44, 'ฉันเชื่อว่าคนส่วนใหญ่จะเอาเปรียบคนอื่น เมื่อพวกเขามีโอกาส', '1', 42),
(45, 'คนส่วนใหญ่ที่ฉันรู้จัก ชอบฉัน', '1', 43),
(46, 'บางคนคิดว่าฉันเป็นคนเย็นชาและมุ่งแต่ประโยชน์ส่วนตน', '1', 44),
(47, 'ฉันมักจะเป็นคนหัวแข็ง และยึดติดกับทัศนคติของตัวเอง', '1', 45),
(48, 'ปกติฉันจะเป็นคนที่คิดพิจารณาสิ่งต่าง ๆ อย่างละเอียดรอบคอบ', '1', 46),
(49, 'ถ้าฉันไม่ชอบใครแล้ว ฉันมักจะแสดงให้เขารู้', '1', 47),
(50, 'ถ้าจำเป็นฉันก็เต็มใจที่จะบงการให้คนอื่นทำตามความต้องการของตัวเอง', '1', 48),
(51, 'ฉันจะตั้งเป้าหมายการทำงานอย่างชัดเจน และมีการปฏิบัติเพื่อมุ่งสู่เป้าหมายอย่างเป็นขั้นตอน', '1', 53),
(52, 'ฉันมักเสียเวลานานกับการบังคับให้ตัวเองเริ่มลงมือทำงานอย่างจริงจัง\r\n', '1', 54),
(53, 'ฉันพยายามทำงานหนัก เพื่อทำให้สำเร็จตามเป้าหมายที่ตั้งไว้', '1', 55),
(54, 'เมื่อฉันตั้งใจจะทำอะไรแล้ว ฉันจะพยายามทำมันให้สำเร็จลุล่วงไปได้ด้วยดี', '1', 56),
(55, 'ฉันเก็บสิ่งของต่าง ๆ ให้สะอาดเรียบร้อยอยู่เสมอ', '1', 49),
(56, 'ฉันสามารถบังคับตัวเองให้ทำสิ่งต่าง ๆ ให้เสร็จภายในเวลาที่กำหนดได้เสมอ', '1', 50),
(57, 'ฉันไม่ใช่คนที่ทำอะไรเป็นระบบแบบแผน', '1', 51),
(58, 'ฉันพยายามทำงานที่ได้รับมอบหมายด้วยความตั้งใจสูง', '1', 52),
(59, 'บางครั้งฉันไม่ใช่คนที่ผู้อื่นพึ่งพา หรือไว้ใจได้อย่างที่ควรจะเป็น', '1', 57),
(60, 'ฉันเป็นคนที่สามารถทำให้งานต่าง ๆ สำเร็จเสมอ', '1', 58),
(61, 'ฉันไม่มีความสามารถในการจัดการสิ่งต่าง ๆ ให้เป็นระบบระเบียบ', '1', 59),
(62, 'ฉันกระหายถึงความเป็นเลิศในทุกสิ่งที่ฉันทำ', '1', 60);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `ukey` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `device` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tricker` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `ukey`, `timestamp`, `device`, `tricker`) VALUES
(1, '4fcfff1c7c22a583ceb4a942418dd9b4', '2018-04-04 01:33:20', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 1),
(2, '71d5ca961023c0634d5bfdd0a1d77f4a', '2018-04-07 12:06:24', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(3, '956c6d639fec07f605184612c814b328', '2018-04-07 12:51:09', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 1),
(4, 'a90b2ab066ddb850a6bea3079870a937', '2018-04-07 12:53:28', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(5, '69334085c5ff63cf2c4e753ce625fff7', '2018-04-07 12:59:01', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 1),
(6, 'd4a7e7d6355bf60abe297924f941be00', '2018-04-07 17:31:14', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(7, 'a175a654d76927ab83a76652abe3cb75', '2018-04-07 17:31:19', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 1),
(8, '6477a14a704cd8ef8d82f33ba46eb70e', '2018-04-07 17:31:21', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(9, '191979a4dce31b1d0682d5427b96dcd5', '2018-04-07 17:31:48', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 1),
(10, 'bff35e3fbad188358b89885f35f2d5aa', '2018-04-21 06:10:38', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(11, '21f727dbc7aca3072b1008023d14839b', '2018-04-21 06:29:07', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 1),
(12, 'e269ff45ba32e4cbb5612618c061ac8a', '2018-04-21 06:31:06', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(13, 'a60514d93907323f8bfdb65688799260', '2018-04-21 06:31:10', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 1),
(14, '60657661aeb1ea12aec7e486e04e4255', '2018-04-21 06:50:25', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(15, '10870f85af50b2ab68be190d5793bee7', '2018-04-21 06:50:44', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 1),
(16, 'beffed5af54a89591d16f612178f29fb', '2018-04-21 06:51:22', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 0),
(17, '3501d8977bb9fbf8c5bfb0b07d9733a6', '2018-04-21 06:52:40', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analytics`
--
ALTER TABLE `analytics`
  ADD PRIMARY KEY (`analytic-id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analytics`
--
ALTER TABLE `analytics`
  MODIFY `analytic-id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
