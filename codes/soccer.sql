-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 09, 2018 at 10:39 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `soccer`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `match_id` int(11) NOT NULL,
  `match_details` int(11) NOT NULL,
  `home_goal` int(11) NOT NULL,
  `away_goal` int(11) NOT NULL,
  `home_shoot` int(11) NOT NULL,
  `away_shoot` int(11) NOT NULL,
  `home_target` int(11) NOT NULL,
  `away_target` int(11) NOT NULL,
  `home_corner` int(11) NOT NULL,
  `away_corner` int(11) NOT NULL,
  `home_save` int(11) NOT NULL,
  `away_save` int(11) NOT NULL,
  `home_yellow` int(11) NOT NULL,
  `away_yellow` int(11) NOT NULL,
  `home_red` int(11) NOT NULL,
  `away_red` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`match_id`, `match_details`, `home_goal`, `away_goal`, `home_shoot`, `away_shoot`, `home_target`, `away_target`, `home_corner`, `away_corner`, `home_save`, `away_save`, `home_yellow`, `away_yellow`, `home_red`, `away_red`) VALUES
(1, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 3, 1, 3, 2, 10, 2, 9, 3, 2, 1, 1, 1, 2, 0, 1),
(5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 11, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 12, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 13, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 15, 2, 4, 0, 0, 0, 0, 2, 1, 0, 0, 0, 0, 0, 0),
(11, 22, 1, 1, 8, 5, 7, 9, 3, 4, 2, 2, 1, 3, 0, 0),
(12, 21, 4, 1, 2, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 16, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 23, 1, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `game_code` int(11) NOT NULL,
  `game_home` varchar(255) NOT NULL,
  `game_home_goal` int(11) NOT NULL,
  `game_away` varchar(255) NOT NULL,
  `game_away_goals` int(11) NOT NULL,
  `game_stadium` varchar(255) NOT NULL,
  `game_date` date NOT NULL,
  `game_time` time NOT NULL,
  `game_status` varchar(255) NOT NULL,
  `game_winner` varchar(255) NOT NULL,
  `game_week` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`game_code`, `game_home`, `game_home_goal`, `game_away`, `game_away_goals`, `game_stadium`, `game_date`, `game_time`, `game_status`, `game_winner`, `game_week`) VALUES
(3, 'Sherwana Football Club', 1, 'Brayati Football Club', 3, 'Franso Hariri Stadium', '0000-00-00', '00:00:00', 'completed', '', 0),
(16, 'Zeravani Sport Club', 4, 'Ararat Sport Club', 0, 'Franso Hariri Stadium', '0000-00-00', '00:00:00', 'completed', '', 0),
(21, 'Erbil Football Club', 4, 'Peshmerga-Erbil Football Club', 1, 'Franso Hariri Stadium', '0000-00-00', '00:00:00', 'completed', 'Erbil Football Club', 0),
(22, 'Zaxo Sport Club', 1, 'Newroz Football Club', 1, 'Franso Hariri Stadium', '0000-00-00', '00:00:00', 'completed', 'draw', 2),
(23, 'Erbil Football Club', 1, 'Newroz Football Club', 3, 'Franso Hariri Stadium', '0000-00-00', '00:00:00', 'completed', 'Erbil Football Club', 1),
(24, 'Erbil Football Club', 0, 'Zeravani Sport Club', 0, 'Franso Hariri Stadium', '0000-00-00', '00:00:00', 'live', '', 3),
(25, 'Sherwana Football Club', 0, 'Ararat Sport Club', 0, 'Franso Hariri Stadium', '2018-06-15', '23:00:00', 'not-started', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `leagues`
--

CREATE TABLE `leagues` (
  `league_id` int(11) NOT NULL,
  `league_name` varchar(255) NOT NULL,
  `league_teams` int(11) NOT NULL,
  `league_year` varchar(255) NOT NULL,
  `league_winner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leagues`
--

INSERT INTO `leagues` (`league_id`, `league_name`, `league_teams`, `league_year`, `league_winner`) VALUES
(4, 'Kurdistan Primer League', 20, '2017-2018', 'Not-Set');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `username`, `fullname`, `password`, `email`, `image`, `level`) VALUES
(1, 'muhammed', 'Muhammed Sardar', '123', 'muhammed@yahoo.com', 'm1.jpg', 'administrator'),
(2, 'Ahmed', 'Ahmed', '123', 'kurd_moh@yahoo.com', 'default.jpg', 'referee'),
(3, 'Mashxal', '', '123', 'kurd_moh@yahoo.com', 'default.jpg', 'editor');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `player_code` int(11) NOT NULL,
  `player_name` varchar(255) NOT NULL,
  `player_team` int(11) NOT NULL,
  `player_position` varchar(255) NOT NULL,
  `player_nationality` varchar(255) NOT NULL,
  `player_dob` date NOT NULL,
  `player_dressno` int(11) NOT NULL,
  `player_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`player_code`, `player_name`, `player_team`, `player_position`, `player_nationality`, `player_dob`, `player_dressno`, `player_photo`) VALUES
(1, 'Sarhang Mohsin', 1, 'GK', 'Kurdish', '1988-03-09', 21, '1.jpg'),
(5, 'Didar Hamid', 1, 'GK', 'Kurdish', '1980-05-16', 22, 'didar.jpg'),
(6, 'Abdullah Hamad Hassan', 1, 'GK', 'Kurdish', '1984-12-14', 1, 'erbil_AbdullahHassan.jpg'),
(7, 'Niaz Maghdid Abdullah', 1, 'DF', 'Kurdish', '1990-11-09', 2, 'Erbil_NiazMaghdid.jpg'),
(8, 'Dildar Khdr Farhan', 1, 'DF', 'Kurdish', '1991-11-28', 3, 'Erbil_DildarKhdr.jpg'),
(9, 'Harem Tahsin Nasraddin', 1, 'DF', 'Kurdish', '1995-05-15', 6, 'Erbil_HaremTahsin.jpg'),
(10, 'Ahmed Khalid', 1, 'DF', 'Kurdish', '1994-01-08', 26, 'Erbil_AhmadKhalid.jpg'),
(11, 'Amir Ismael Muhammed', 1, 'DF', 'Kurdish', '1992-05-14', 15, 'Erbil_AmirIsmael.jpg'),
(12, 'Bilal Yousif Saeed', 1, 'DF', 'Kurdish', '1990-10-07', 20, 'Erbil_BilalYousif.jpg'),
(13, 'Hidayat Latif Abdullah', 1, 'MF', 'Kurdish', '1994-05-14', 11, 'Erbil_HidayatLatif.jpg'),
(14, 'Kosrat Baiz Ali', 1, 'MF', 'Kurdish', '1991-09-21', 10, 'Erbil_KosratBaiz.jpg'),
(15, 'Rivan Saeed-Ahmad Abdulkarim', 1, 'MF', 'Kurdish', '1989-05-14', 19, 'Erbil_RevanSaidAHmad.jpg'),
(16, 'Hogir Hussain Abdullah', 1, 'MF', 'Kurdish', '1991-05-14', 18, 'Erbil_HogirHussaiAbudllah.jpg'),
(17, 'Rabar Khalid', 1, 'MF', 'Kurdish', '1994-12-14', 7, 'Erbil_RabarKhalid.jpg'),
(18, 'Sardar Yasin Mustafa', 1, 'MF', 'Kurdish', '1995-01-06', 25, 'Erbil_SardarYasin.jpg'),
(19, 'Evan Khalid', 1, 'MF', 'Kurdish', '1990-05-22', 24, 'Erbil_EvanKhalid.jpg'),
(20, 'Dana Osman Saeed', 1, 'FW', 'Kurdish', '1991-02-01', 9, 'Erbil_DanaOsman.jpg'),
(21, 'Younis Shkur', 1, 'FW', 'Kurdish', '1988-05-15', 17, 'Erbil_YonisShKur.jpg'),
(22, 'Barzan Sherzad', 1, 'FW', 'Kurdish', '1990-07-07', 23, 'Erbil_BarzanSherzad.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `setting_no` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `sfooter` text NOT NULL,
  `slide1` varchar(255) NOT NULL,
  `stitle1` varchar(255) NOT NULL,
  `sbody1` text NOT NULL,
  `slide2` varchar(255) NOT NULL,
  `stitle2` varchar(255) NOT NULL,
  `sbody2` text NOT NULL,
  `copyright` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`setting_no`, `title`, `logo`, `sfooter`, `slide1`, `stitle1`, `sbody1`, `slide2`, `stitle2`, `sbody2`, `copyright`) VALUES
(1, 'Topi Pe', 'logo.png', 'Topi Pê is the first Kurdish website which cover the latest news and activities about Kurdistan Football League', '1.jpg', 'Kurdistan <br> Football League', 'Champions!', '3.jpg', 'Topî <br> Pê', 'We are pro', '<span>Topi Pe</span><span>© </span> 2018');

-- --------------------------------------------------------

--
-- Table structure for table `stadiums`
--

CREATE TABLE `stadiums` (
  `stadium_id` int(11) NOT NULL,
  `stadium_name` varchar(255) NOT NULL,
  `stadium_city` varchar(255) NOT NULL,
  `stadium_capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stadiums`
--

INSERT INTO `stadiums` (`stadium_id`, `stadium_name`, `stadium_city`, `stadium_capacity`) VALUES
(1, 'Franso Hariri Stadium', 'Erbil', 55000),
(2, 'Sulemani Stadium', 'Slemani', 10000),
(3, 'Duhok Stadium', 'Duhok', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `team_code` int(11) NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `team_abb` varchar(255) NOT NULL,
  `team_stadium` varchar(255) NOT NULL,
  `team_coach` varchar(255) NOT NULL,
  `team_info` text NOT NULL,
  `team_founded` varchar(255) NOT NULL,
  `team_logo` varchar(255) NOT NULL,
  `team_photo` text NOT NULL,
  `trophy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_code`, `team_name`, `team_abb`, `team_stadium`, `team_coach`, `team_info`, `team_founded`, `team_logo`, `team_photo`, `trophy`) VALUES
(1, 'Erbil Football Club', 'EFC', 'Franso Hariri Stadium', 'Razi Shneshil', 'ABCD', '1908', 'erbil.jpg', 'erbil.jpg', 5),
(3, 'Zaxo Sport Club', 'ZSC', 'Zaxo Stadium', 'Salih Raazi', '', '1987', 'zaxo.jpg', 'zakho.jpg', 0),
(4, 'Newroz Football Club', 'NFC', 'Newroz Arina', 'Bsafa Nuri', '', '1994', 'neworz.jpg', 'Newroz FC team.jpg', 0),
(5, 'Sherwana Football Club', 'SFC', 'Sherwana Stadium', 'Karwan Muhammed', 'Founded in Kalar towen.', '1992', 'sherwana.jpg', 'Sherwana.jpg', 0),
(6, 'Brayati Football Club', 'BFC', 'Brayati Stadium', 'Fatih Hama Khan', '', '1984', 'brayati.jpg', 'brayati team.jpg', 0),
(7, 'Peshmerga-Erbil Football Club', 'PEFC', 'Franso Hariri International Stadium', 'Samad Jawhaer', '', '2004', 'peshmarga.jpg', 'default.jpg', 0),
(9, 'Zeravani Sport Club', 'ZSC', 'Zeravani Stadium', 'Yasin Manaf', 'Zeravani won Kurdistan League 2016', '2011', 'zervani.jpg', '1nawroz.jpg', 0),
(10, 'Ararat Sport Club', 'ASC', 'Ararat Stadium', 'Saad Nasir', '', '1996', 'Ararart.jpg', 'Ararat Club.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `v_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `winner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`v_id`, `game_id`, `winner`) VALUES
(11, 24, 'draw'),
(12, 25, 'home');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`game_code`);

--
-- Indexes for table `leagues`
--
ALTER TABLE `leagues`
  ADD PRIMARY KEY (`league_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`player_code`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`setting_no`);

--
-- Indexes for table `stadiums`
--
ALTER TABLE `stadiums`
  ADD PRIMARY KEY (`stadium_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_code`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `game_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `leagues`
--
ALTER TABLE `leagues`
  MODIFY `league_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `player_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `stadiums`
--
ALTER TABLE `stadiums`
  MODIFY `stadium_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `team_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
