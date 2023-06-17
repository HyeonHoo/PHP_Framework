-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 21-01-25 20:43
-- 서버 버전: 10.3.22-MariaDB
-- PHP 버전: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `sale53`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `explanation`
--

CREATE TABLE `explanation` (
  `no53` int(11) NOT NULL,
  `name53` varchar(20) DEFAULT NULL,
  `comment53` varchar(255) DEFAULT NULL,
  `pic53` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `explanation`
--

INSERT INTO `explanation` (`no53`, `name53`, `comment53`, `pic53`) VALUES
(1, '캔버스에 유채', '유화의 유래는 이미 고대 그리스나 로마 시대로 거슬러 올라가며, 그 당시에 그려진 그림들, 특히 벽화에서 그 원시적 형태를 찾아 볼 수 있다. 중세시대에는 가톨릭교회의 장식 그림을 그리는 데 유화가 주로 사용되었으며, 15세기에는 그 기법이나 재료면에서 크게 발전하였다. 16세기 르네상스로 접어들면서 유화는 서양미술의 중요그림 형식으로 자리를 잡게 됐다.', 'can1.png'),
(2, '입체주의', '20세기 초반에 시작된 서양미술 사조 갈래 중의 하나. 폴 세잔이 입체주의의 동기를 제공한 것을 시작으로 동시대 많은 예술가들이 이러한 사조를 다양하게 시도하고 거쳐갔으며, 그 중 가장 유명한 예술가는 조르주 브라크와 파블로 피카소가 있으며, 그 외에 레제, 들로네 등이 입체주의 화가였다.', 'free1.png'),
(3, '청색시대', '피카소는 주로 검푸른 색이나 짙은 청록색의 색조를 띤 그림을 그렸고, 부득이한 경우에만 다른 색을 통해 온화한 색조를 나타내었다. 젊은 시절 파리에 머무는 동안 피카소는 자신의 그림에 주로 검푸른 색을 사용했다. 이 어두침침한 작품들은 스페인에서 영감을 받았으나 프랑스에서 채색되었다.', 'sea.png'),
(4, '장미빛 시대', '피카소(Picasso)의 절친한 친구 카사게마스(Carlos Casagemas)의 죽음과 가난으로 인해 어두운 눈으로  세상을 바라보던 청색 시대(1901~1904)를 지나, 피카소(Picasso)는 &lt;첫 번째 연인>  페르낭드 올리비에(Fernande Olivier)를 만나면서 행복과 사랑으로 가득한 장미(Rose)빛의  그림들을 그리기 시작했다.', 'rose1.png'),
(5, '큐비즘', '큐비즘(Cubism)이라는 용어의 기원은 조르즈 브라크의 풍경화에서 비롯되는 것으로 알려져 있다. 20세기 초 브라크는 프랑스의 남쪽 지중해 연안 지방 레스타크 (L\'Estaque)에서 사생을 하면서 풍경화를 그렸으며 이 풍경화를 두고 마티스가 입체적 희한함 (bizarreries cubique) 이라 풍자하는 데에서 유래되었다.', 'qu1.png');

-- --------------------------------------------------------

--
-- 테이블 구조 `genre`
--

CREATE TABLE `genre` (
  `no53` int(11) NOT NULL,
  `name53` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `genre`
--

INSERT INTO `genre` (`no53`, `name53`) VALUES
(1, '힙합'),
(2, '재즈'),
(3, '발라드'),
(5, '록'),
(6, '블루스'),
(7, 'E-D-M'),
(8, '클래식'),
(9, '엔카'),
(10, '트로트'),
(11, '컨트리');

-- --------------------------------------------------------

--
-- 테이블 구조 `gubun`
--

CREATE TABLE `gubun` (
  `no53` int(11) NOT NULL,
  `name53` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `gubun`
--

INSERT INTO `gubun` (`no53`, `name53`) VALUES
(2, '맥주'),
(3, '소주'),
(6, '아이스크림'),
(7, '빵'),
(14, '음료수'),
(23, '앙뇽'),
(24, '과자');

-- --------------------------------------------------------

--
-- 테이블 구조 `jaegos`
--

CREATE TABLE `jaegos` (
  `no53` int(11) NOT NULL,
  `music_no53` int(11) DEFAULT NULL,
  `jaego53` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `jaegos`
--

INSERT INTO `jaegos` (`no53`, `music_no53`, `jaego53`) VALUES
(1, 6, 32),
(2, 7, 30),
(3, 8, 28),
(4, 9, 9),
(5, 10, 2),
(6, 11, 45),
(7, 14, 33);

-- --------------------------------------------------------

--
-- 테이블 구조 `jangbu`
--

CREATE TABLE `jangbu` (
  `no53` int(11) NOT NULL,
  `io53` tinyint(4) DEFAULT NULL,
  `writeday53` date DEFAULT NULL,
  `product_no53` int(11) DEFAULT NULL,
  `price53` int(11) DEFAULT NULL,
  `numi53` int(11) DEFAULT NULL,
  `numo53` int(11) DEFAULT NULL,
  `prices53` int(11) DEFAULT NULL,
  `bigo53` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `jangbu`
--

INSERT INTO `jangbu` (`no53`, `io53`, `writeday53`, `product_no53`, `price53`, `numi53`, `numo53`, `prices53`, `bigo53`) VALUES
(1, 0, '2020-09-28', 1, 3000, 3, 0, 9000, '기네스'),
(2, 0, '2020-09-30', 2, 1500, 2, 0, 4500, '참이슬'),
(3, 0, '2020-09-30', 3, 1500, 2, 0, 3000, '매운맛'),
(4, 0, '2020-09-29', 3, 1500, 2, 0, 3000, '농심'),
(6, 0, '2020-09-30', 2, 5000, NULL, 0, 10000, '참이슬'),
(7, 0, '2020-09-30', 1, 5000, 2, 0, 10000, '농심'),
(8, 1, '2020-09-30', 1, 5000, 0, 30, 150000, '블랑'),
(9, 1, '2020-09-30', 2, 2500, 0, 40, 100000, '처음처럼'),
(13, 0, '2020-10-10', 6, 3900, 20, 0, 78000, ''),
(14, 0, '2020-10-10', 8, 1700, 20, 0, 34000, ''),
(15, 0, '2020-10-10', 5, 1500, 30, 0, 45000, ''),
(16, 0, '2020-10-10', 9, 3900, 25, 0, 97500, ''),
(17, 0, '2020-10-10', 7, 1200, 5, 0, 6000, ''),
(18, 0, '2020-10-10', 3, 1500, 20, 0, 30000, ''),
(19, 1, '2020-10-10', 6, 3900, 0, 5, 19500, ''),
(20, 1, '2020-10-10', 3, 1500, 0, 6, 9000, ''),
(21, 1, '2020-10-10', 9, 3900, 0, 4, 15600, ''),
(22, 1, '2020-10-10', 7, 1200, 0, 2, 2400, ''),
(23, 1, '2020-10-10', 8, 1700, 0, 5, 8500, ''),
(24, 1, '2020-10-10', 5, 1500, 0, 3, 4500, ''),
(25, 1, '2020-10-11', 9, 3900, 0, 15, 58500, ''),
(26, 0, '2020-10-13', 6, 3900, 2, 0, 7800, ''),
(27, 1, '2020-10-13', 7, 1200, 0, 2, 2400, ''),
(28, 1, '2020-11-13', 3, 1500, 0, 3, 4500, ''),
(29, 0, '2020-11-13', 6, 3900, 3, 0, 11700, ''),
(30, 1, '2020-11-14', 6, 3900, 0, 2, 7800, '');

-- --------------------------------------------------------

--
-- 테이블 구조 `member`
--

CREATE TABLE `member` (
  `no53` int(11) NOT NULL,
  `uid53` varchar(20) NOT NULL,
  `pwd53` varchar(20) NOT NULL,
  `name53` varchar(20) NOT NULL,
  `tel53` varchar(11) DEFAULT NULL,
  `rank53` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `member`
--

INSERT INTO `member` (`no53`, `uid53`, `pwd53`, `name53`, `tel53`, `rank53`) VALUES
(1, 'admin', '1234', '관리자', '01012341234', 1),
(2, 'id2', '1234', '노기효', '01094818426', 0),
(3, 'id3', '1234', '배안수', '01096029758', 0),
(4, 'id4', '1234', '윤상기', '01091834099', 0),
(5, 'id5', '1234', '남윤주', '01099745951', 0),
(6, 'id6', '1234', '고은이1', '01066752295', 0),
(7, 'id7', '1234', '이창기', '01094867737', 0),
(8, 'id8', '1234', '강주석', '01097175378', 0),
(9, 'id9', '1234', '김상준', '01073282001', 0),
(10, 'id10', '1234', '김강현', '01090696074', 0),
(11, 'id11', '1234', '양구민', '01089906973', 0),
(12, 'id12', '1234', '박철완', '01064517732', 0),
(13, 'id13', '1234', '이조규', '01064725207', 0),
(14, 'id14', '1234', '김안기', '01047835553', 0),
(15, 'id15', '1234', '황전하', '01098549069', 0),
(16, 'id16', '1234', '원정현', '01097953309', 0),
(17, 'id17', '1234', '김성현1', '01071564586', 0),
(18, 'id18', '1234', '윤고영', '01046674402', 0),
(19, 'id19', '1234', '손양진', '01093091586', 0),
(20, 'id20', '1234', '서천범', '01029609537', 0),
(21, 'id21', '1234', '최미은', '01095919293', 0),
(22, 'id22', '1234', '현자석', '01045525203', 0),
(23, 'id23', '1234', '고연진1', '01039039565', 0),
(24, 'id24', '1234', '임양진', '01047441735', 0),
(25, 'id25', '1234', '김진형', '01029752059', 0),
(27, 'id27', '1234', '김동진2', '01032374556', 0),
(28, 'id28', '1234', '박지영', '01032583779', 0),
(29, 'id29', '1234', '이양성', '01022293628', 0),
(30, 'id30', '1234', '박자형', '01035604903', 0),
(31, 'id31', '1234', '김다우', '01029114044', 0),
(32, 'id32', '1234', '임전철', '01030126920', 0),
(33, 'id33', '1234', '최구선', '01023734840', 0),
(34, 'id34', '1234', '정도솔', '01098643720', 0),
(35, 'id35', '1234', '이영석', '01065956653', 0),
(36, 'id36', '1234', '조경현', '01072265535', 0),
(37, 'id37', '1234', '김만석', '01034670483', 0),
(38, 'id38', '1234', '박만석', '01044184218', 0),
(39, 'id39', '1234', '김현진', '01024095317', 0),
(40, 'id40', '1234', '박솔희', '01075709030', 0),
(41, 'id41', '1234', '권하미', '01024517990', 0),
(42, 'id42', '1234', '이성민', '01036524847', 0),
(43, 'id43', '1234', '장도운', '01035337719', 0),
(44, 'id44', '1234', '고일남', '01096943617', 0),
(45, 'id45', '1234', '황지우', '01091057558', 0),
(46, 'id46', '1234', '정기근', '01025764748', 0),
(47, 'id47', '1234', '양자승', '01080972732', 0),
(48, 'id48', '1234', '윤성현', '01030685978', 0),
(49, 'id49', '1234', '최기문', '01027595634', 0),
(50, 'id50', '1234', '오시헌', '01020203572', 0),
(51, '1', '1', '11', '1  1   1   ', 1),
(52, 'ho9', '12345', '혀노', '12321  12  ', 1),
(53, 'maple123', '1234', '1메에에', '01012341234', 1),
(54, 'gajeoga123', '1234', '1선물환불', '01012341234', 1),
(55, '왔다감', '하윙', '김은서', '310310 310 ', 1),
(56, '또옴', 're하윙', '1김은서', '310310 310 ', 1),
(57, 'id53', '1234', 'admin', '01012341584', 1),
(58, 'tt', '12', 'tt', '01012341231', 1);

-- --------------------------------------------------------

--
-- 테이블 구조 `music`
--

CREATE TABLE `music` (
  `no53` int(11) NOT NULL,
  `genre_no53` int(11) DEFAULT NULL,
  `title53` varchar(20) DEFAULT NULL,
  `name53` varchar(20) DEFAULT NULL,
  `music_file53` varchar(255) DEFAULT NULL,
  `jaego53` int(11) DEFAULT NULL,
  `pic53` varchar(255) DEFAULT NULL,
  `comment53` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `music`
--

INSERT INTO `music` (`no53`, `genre_no53`, `title53`, `name53`, `music_file53`, `jaego53`, `pic53`, `comment53`) VALUES
(6, 3, '좋은날', '아이유', 'IU_Good_Day_Lyrics_(아이유_좋은_날_가사).mp3', 32, '아이유.jpg', '좋아'),
(7, 1, 'boogie_on&on', '빈지노', '(Beenzino)_-_Boogie_On_On_2_4_2_6,_Lyrics.mp3', 30, '빈지노.jpg', '2426'),
(8, 1, '호구', '기리보이', '일본어_해석_기리보이_-_호구_(Feat__브라더수)_(Prod__Fisherman_of_wybh)_호구가사,_Lyrics.mp3', 28, '기리보이.jpg', '호구다호구'),
(9, 5, 'Bohemian Rhapsody', 'Queen', 'Queen_-_Bohemian_Rhapsody().mp3', 9, '퀸.jpg', '레젼드'),
(10, 1, 'Aqua_Man', '빈지노', 'Aqua_Man.mp3', 2, '빈지노.jpg', '어장속에 물고기'),
(11, 2, 'Warm On A Cold Night', 'Honne', 'HONNE_-_Warm_On_A_Cold_Night.mp3', 45, '혼네.jpg', ''),
(14, 7, 'Roses', 'SAINt JHN ', 'SAINt_JHN_-_Roses_(Imanbek_Remix)_(Ghetto_Lenny_One_Takes).mp3', 33, 'SAINt_JHN.png', 'edm Regend');

-- --------------------------------------------------------

--
-- 테이블 구조 `picasso`
--

CREATE TABLE `picasso` (
  `no53` int(11) NOT NULL,
  `intro53` varchar(50) DEFAULT NULL,
  `sub_intro53` varchar(255) DEFAULT NULL,
  `pic53` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `picasso`
--

INSERT INTO `picasso` (`no53`, `intro53`, `sub_intro53`, `pic53`) VALUES
(3, '입체주의의 거장', '파블로 피카소의 천재성 덕분에 , 모든 미술가들은 그의 그늘에 가려진것처럼 보이게 만들기도 했다. 피카소는 일찍이 화가인 아버지에게서 그림을 배웠고, 열한 살이 되던 해에 라코루냐 미술학교에 입학하여 그림을 공부하기도 했다. 피카소는 열네살의 어린나이에 놀라운 사실주의 작품을 그려내기도 했다.', 'sadher.jpg');

-- --------------------------------------------------------

--
-- 테이블 구조 `playlist`
--

CREATE TABLE `playlist` (
  `no53` int(11) NOT NULL,
  `mu53` tinyint(4) DEFAULT NULL,
  `music_no53` int(11) DEFAULT NULL,
  `writeday53` date DEFAULT NULL,
  `jaego53` int(11) DEFAULT NULL,
  `mui53` int(11) DEFAULT NULL,
  `muo53` int(11) DEFAULT NULL,
  `jaegos53` int(11) DEFAULT NULL,
  `comment53` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `playlist`
--

INSERT INTO `playlist` (`no53`, `mu53`, `music_no53`, `writeday53`, `jaego53`, `mui53`, `muo53`, `jaegos53`, `comment53`) VALUES
(1, 0, 10, '2020-11-13', NULL, 25, 0, NULL, ''),
(2, 0, 11, '2020-11-13', NULL, 30, 0, NULL, '추가'),
(3, 0, 8, '2020-11-13', NULL, 40, 0, NULL, '호구다호구'),
(5, 0, 9, '2020-11-12', NULL, 15, 0, NULL, ''),
(6, 0, 9, '2020-11-14', NULL, 25, 0, NULL, 'ㅎㅎ'),
(7, 1, 11, '2020-11-14', NULL, 0, 15, NULL, 'undefined'),
(8, 1, 7, '2020-11-14', NULL, 0, 20, NULL, '2426'),
(9, 0, 7, '2020-11-14', NULL, 50, 0, NULL, ''),
(10, 0, 6, '2020-11-14', NULL, 62, 0, NULL, ''),
(12, 0, 11, '2020-11-15', NULL, 15, 0, NULL, 'ㅎㅇㅎㅇ'),
(13, 0, 11, '2020-11-15', NULL, 15, 0, NULL, 'ㅎㅎ'),
(14, 1, 9, '2020-11-15', NULL, 0, 31, NULL, '레젼드'),
(15, 1, 6, '2020-11-15', NULL, 0, 10, NULL, '좋아'),
(16, 1, 8, '2020-11-15', NULL, 0, 12, NULL, '호구다호구'),
(17, 1, 6, '2020-11-16', NULL, 0, 31, NULL, '좋아'),
(18, 1, 6, '2020-11-13', NULL, 0, 5, NULL, '좋아'),
(19, 1, 10, '2020-11-15', NULL, 0, 23, NULL, '어장속에 물고기'),
(20, 0, 6, '2020-11-13', NULL, 40, 0, NULL, '아이유짱'),
(21, 1, 6, '2020-11-15', NULL, 0, 24, NULL, '좋아'),
(22, 0, 14, '2020-11-16', NULL, 25, 0, NULL, '레젼드'),
(23, 0, 14, '2020-11-16', NULL, 23, 0, NULL, '레젼드'),
(24, 1, 14, '2020-11-16', NULL, 0, 15, NULL, 'edm Regend');

-- --------------------------------------------------------

--
-- 테이블 구조 `product`
--

CREATE TABLE `product` (
  `no53` int(11) NOT NULL,
  `gubun_no53` int(11) DEFAULT NULL,
  `name53` varchar(50) DEFAULT NULL,
  `price53` int(11) DEFAULT NULL,
  `jaego53` int(11) DEFAULT NULL,
  `pic53` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `product`
--

INSERT INTO `product` (`no53`, `gubun_no53`, `name53`, `price53`, `jaego53`, `pic53`) VALUES
(3, 24, '매운새우깡', 1500, 15, '매운새우깡.jpg'),
(5, 24, '포카칩', 1500, 27, '포카칩.jpg'),
(6, 2, '기네스 펠트로', 3900, 17, '기네스.png'),
(7, 7, '정통보름달', 1200, 1, '정통보름달.jpg'),
(8, 3, '참이슬', 1700, 15, '참이슬.jpg'),
(9, 2, '블랑', 3900, 6, '블랑.jpg'),
(12, 24, '빼뺴로', 1500, 0, '빼뺴로.jpg');

-- --------------------------------------------------------

--
-- 테이블 구조 `temp`
--

CREATE TABLE `temp` (
  `no53` int(11) NOT NULL,
  `product_no53` int(11) DEFAULT NULL,
  `jaego53` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `temp`
--

INSERT INTO `temp` (`no53`, `product_no53`, `jaego53`) VALUES
(1, 1, -25),
(2, 2, -38),
(3, 3, 15),
(4, 5, 27),
(5, 6, 17),
(6, 7, 1),
(7, 8, 15),
(8, 9, 6);

-- --------------------------------------------------------

--
-- 테이블 구조 `user`
--

CREATE TABLE `user` (
  `no53` int(11) NOT NULL,
  `uid53` varchar(20) NOT NULL,
  `pwd53` varchar(20) NOT NULL,
  `name53` varchar(20) NOT NULL,
  `nickname53` varchar(20) DEFAULT NULL,
  `tel53` varchar(11) DEFAULT NULL,
  `rank53` tinyint(4) DEFAULT NULL,
  `bgpic53` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `user`
--

INSERT INTO `user` (`no53`, `uid53`, `pwd53`, `name53`, `nickname53`, `tel53`, `rank53`, `bgpic53`) VALUES
(1, 'admin', '1234', '관리자', '퀸', '01012341234', 1, '퀸.jpg'),
(2, 'id2', '1234', '노기효', '', '01094818426', 0, ''),
(3, 'id3', '1234', '배안수', '', '01096029758', 0, ''),
(4, 'id4', '1234', '윤상기', '', '01091834099', 0, ''),
(5, 'id5', '1234', '남윤주', '', '01099745951', 0, ''),
(6, 'id6', '1234', '기리보이', '기리', '01066752295', 0, '기리보이.jpg'),
(7, 'id7', '1234', '이창기', '', '01094867737', 0, ''),
(8, 'id8', '1234', '1빈지노', 'beenzino', '01097175378', 0, '빈지노.jpg'),
(9, 'id9', '1234', '김상준', '', '01073282001', 0, ''),
(10, 'id10', '1234', '김강현', '', '01090696074', 0, ''),
(11, 'id11', '1234', '양구민', '', '01089906973', 0, ''),
(12, 'id12', '1234', '박철완', '', '01064517732', 0, ''),
(13, 'id13', '1234', '이조규', '', '01064725207', 0, ''),
(14, 'id14', '1234', '김안기', '', '01047835553', 0, ''),
(15, 'id15', '1234', '황전하', '', '01098549069', 0, ''),
(16, 'id16', '1234', '원정현', '', '01097953309', 0, ''),
(18, 'id18', '1234', '윤고영', '', '01046674402', 0, ''),
(19, 'id19', '1234', '손양진', '', '01093091586', 0, ''),
(20, 'id20', '1234', '서천범', '', '01029609537', 0, ''),
(21, 'id53', '1234', 'hooo', 'hinho', '01085591584', 1, 'ho1.jpg'),
(24, 'hone14', '1234', 'Honne', 'hoho', '01012348584', 0, '혼네.jpg'),
(25, 'ho', '1234', '신혀노', 'hogu', '01085151234', 1, NULL);

-- --------------------------------------------------------

--
-- 테이블 구조 `user2`
--

CREATE TABLE `user2` (
  `no53` int(11) NOT NULL,
  `uid53` varchar(20) NOT NULL,
  `pwd53` varchar(20) NOT NULL,
  `name53` varchar(20) NOT NULL,
  `tel53` varchar(11) DEFAULT NULL,
  `rank53` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `work`
--

CREATE TABLE `work` (
  `no53` int(11) NOT NULL,
  `ex_no53` int(11) DEFAULT NULL,
  `pi_no53` int(11) DEFAULT NULL,
  `title53` varchar(20) DEFAULT NULL,
  `sub_title53` varchar(255) DEFAULT NULL,
  `showroom53` varchar(20) DEFAULT NULL,
  `writeday53` int(5) DEFAULT NULL,
  `pic53` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `work`
--

INSERT INTO `work` (`no53`, `ex_no53`, `pi_no53`, `title53`, `sub_title53`, `showroom53`, `writeday53`, `pic53`) VALUES
(2, 1, NULL, 'First Communion', '1896 년 바르셀로나의 미술 전시회에서 아버지의 조언으로 15 세의 피카소가 창작 한 작품', '피카소 미술관', 1896, 'FirstCommunion.jpg'),
(3, 2, NULL, 'Woman In Blue', '모델의 신비로운 눈, 표현, 화려한 드레스와 투톤의 배경색이 새로운 자연주의 영향아래서, 새로운 형식의 작품으로 탄생된 작품', '레이나 소피아 국립미술관', 1901, 'womaninblue.jpg'),
(4, 3, NULL, 'The Life', '청색시대의 대표적인 작품으로, 깡마른 형상, 알콜중독자, 걸인, 창녀와 같은 극빈계층의 삶을 표현하고 있다. 이 그림은 엘그레코의 스타일을 연상케 한다.', '클리블랜드 미술관', 1903, 'TheLife.jpg'),
(5, 5, NULL, 'Still Life', '제목인 죽은새는 매우 찾기 어렵고, 깃털들은 서로 다른 평면에서 나타나고 있다.', '레이나소피아 국립미술관', 1912, 'StillLife.jpg'),
(6, 5, NULL, 'The Bread Flute', '인물과 커다란 석조구조물로 된 배경은 그리스적인 고전미를 보여주지만, 지중해적인 풍광을 더하고 있다.', '피카소 박물관', 1923, 'TheBreadFlute.jpg'),
(7, 4, NULL, 'The Dream', '이 시기의 피카소 작품은 내면의 세계를 반영하는 초현실주의 경향을 띤다. ', '개인소장(뉴욕)', 1932, 'thedream.jpg'),
(8, 2, NULL, 'La Toilette', '피카소는 여전히 두가지 색조의 단순한 배경을 즐겨 사용하고 있으며, 구상도 동일 하다. 그러나 색의 사용을 바꿈으로해서 그림을 완전히 다르게 보이게 하고 있다.', '알브라이트 녹스 아트 갤러리', 1906, 'LaToilette.jpg'),
(9, 4, NULL, 'Family of Acrobats', '핑크의 시기의 작품이다. 피카소는 서커스와 곡예를 종종 다루었다. 선과 색조가 더욱 생동감 있게 표현되고 있다.', '워싱턴 내셔널 갤러리', 1905, 'FamilyofAcrobats.jpg'),
(10, 1, NULL, 'The Harem', '핑크의 시대에 속하는 작품이긴 하지만, 아비뇽의 여인들과의 관련성을 생각케 하는 작품이다. 허큘레스를 연상하는 남자는 와인을 마시면서 욕망의 대상으로 여성들을 바라보고 있다.', '클리블랜드 미술관', 1906, 'TheHarem.jpg'),
(11, 4, NULL, 'Tumblers', '황토색과 연한 장밋빛을 많이 사용했다. 그림에는 곡예사나 그 가족들이 빈번하게 등장하는데 이는 단순히 이색적인 구경거리보다는 그들의 일상생활에 훨씬 흥미를 느꼈다.', 'Germany', 1905, 'tumblers.jpg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `explanation`
--
ALTER TABLE `explanation`
  ADD PRIMARY KEY (`no53`);

--
-- 테이블의 인덱스 `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`no53`);

--
-- 테이블의 인덱스 `gubun`
--
ALTER TABLE `gubun`
  ADD PRIMARY KEY (`no53`);

--
-- 테이블의 인덱스 `jaegos`
--
ALTER TABLE `jaegos`
  ADD PRIMARY KEY (`no53`);

--
-- 테이블의 인덱스 `jangbu`
--
ALTER TABLE `jangbu`
  ADD PRIMARY KEY (`no53`);

--
-- 테이블의 인덱스 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`no53`);

--
-- 테이블의 인덱스 `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`no53`);

--
-- 테이블의 인덱스 `picasso`
--
ALTER TABLE `picasso`
  ADD PRIMARY KEY (`no53`);

--
-- 테이블의 인덱스 `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`no53`);

--
-- 테이블의 인덱스 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`no53`);

--
-- 테이블의 인덱스 `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`no53`);

--
-- 테이블의 인덱스 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no53`);

--
-- 테이블의 인덱스 `user2`
--
ALTER TABLE `user2`
  ADD PRIMARY KEY (`no53`);

--
-- 테이블의 인덱스 `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`no53`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `explanation`
--
ALTER TABLE `explanation`
  MODIFY `no53` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 테이블의 AUTO_INCREMENT `genre`
--
ALTER TABLE `genre`
  MODIFY `no53` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 테이블의 AUTO_INCREMENT `gubun`
--
ALTER TABLE `gubun`
  MODIFY `no53` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- 테이블의 AUTO_INCREMENT `jaegos`
--
ALTER TABLE `jaegos`
  MODIFY `no53` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 테이블의 AUTO_INCREMENT `jangbu`
--
ALTER TABLE `jangbu`
  MODIFY `no53` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- 테이블의 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `no53` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- 테이블의 AUTO_INCREMENT `music`
--
ALTER TABLE `music`
  MODIFY `no53` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 테이블의 AUTO_INCREMENT `picasso`
--
ALTER TABLE `picasso`
  MODIFY `no53` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 테이블의 AUTO_INCREMENT `playlist`
--
ALTER TABLE `playlist`
  MODIFY `no53` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- 테이블의 AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `no53` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 테이블의 AUTO_INCREMENT `temp`
--
ALTER TABLE `temp`
  MODIFY `no53` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 테이블의 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `no53` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- 테이블의 AUTO_INCREMENT `user2`
--
ALTER TABLE `user2`
  MODIFY `no53` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `work`
--
ALTER TABLE `work`
  MODIFY `no53` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
