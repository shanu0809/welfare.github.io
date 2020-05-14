-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 09:00 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `welfare`
--

-- --------------------------------------------------------

--
-- Table structure for table `amend`
--

CREATE TABLE `amend` (
  `articleno` varchar(50) DEFAULT NULL,
  `motive` varchar(50) DEFAULT NULL,
  `newlaw` varchar(600) DEFAULT NULL,
  `n1` varchar(400) DEFAULT NULL,
  `n2` varchar(400) DEFAULT NULL,
  `n3` varchar(400) DEFAULT NULL,
  `n4` varchar(400) DEFAULT NULL,
  `n5` varchar(400) DEFAULT NULL,
  `prov` varchar(500) DEFAULT NULL,
  `prov1` varchar(400) NOT NULL,
  `prov2` varchar(400) NOT NULL,
  `prov3` varchar(400) NOT NULL,
  `prov4` varchar(400) NOT NULL,
  `prov5` varchar(400) NOT NULL,
  `cases` varchar(500) DEFAULT NULL,
  `c1` varchar(300) DEFAULT NULL,
  `c2` varchar(300) DEFAULT NULL,
  `c3` varchar(300) DEFAULT NULL,
  `c4` varchar(300) DEFAULT NULL,
  `c5` varchar(300) DEFAULT NULL,
  `valid_from` date DEFAULT NULL,
  `valid_upto` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `amend`
--

INSERT INTO `amend` (`articleno`, `motive`, `newlaw`, `n1`, `n2`, `n3`, `n4`, `n5`, `prov`, `prov1`, `prov2`, `prov3`, `prov4`, `prov5`, `cases`, `c1`, `c2`, `c3`, `c4`, `c5`, `valid_from`, `valid_upto`) VALUES
('articleno', 'job', 'des', 'n1', 'n2', 'n3', 'n4', 'n5', 'prov', 'prov1', 'prov2', 'prov3', 'prov4', 'prov5', 'cases', 'c1', 'c2', 'c3', 'c4', 'c5', '0000-00-00', '0000-00-00'),
('Article 2', 'CAA', 'dsgsajgjlasjgljalj', '', '', '', '', '', 'gkjahghkahghakh', '', '', '', '', '', 'bjhjdhjdhjkdshkjhsfgj', '', '', '', '', '', '2020-05-05', '2020-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `cultural`
--

CREATE TABLE `cultural` (
  `id` int(20) NOT NULL,
  `articleno` varchar(100) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `des` varchar(400) DEFAULT NULL,
  `des1` varchar(400) DEFAULT NULL,
  `des2` varchar(400) DEFAULT NULL,
  `des3` varchar(400) DEFAULT NULL,
  `des4` varchar(400) DEFAULT NULL,
  `des5` varchar(400) DEFAULT NULL,
  `prov` varchar(400) DEFAULT NULL,
  `prov1` varchar(400) DEFAULT NULL,
  `prov2` varchar(400) DEFAULT NULL,
  `prov3` varchar(400) DEFAULT NULL,
  `prov4` varchar(400) DEFAULT NULL,
  `prov5` varchar(400) DEFAULT NULL,
  `newlaw` varchar(400) DEFAULT NULL,
  `n1` varchar(400) DEFAULT NULL,
  `n2` varchar(400) DEFAULT NULL,
  `n3` varchar(400) DEFAULT NULL,
  `n4` varchar(400) DEFAULT NULL,
  `n5` varchar(400) DEFAULT NULL,
  `vaild_from` date DEFAULT NULL,
  `valid_upto` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cultural`
--

INSERT INTO `cultural` (`id`, `articleno`, `title`, `des`, `des1`, `des2`, `des3`, `des4`, `des5`, `prov`, `prov1`, `prov2`, `prov3`, `prov4`, `prov5`, `newlaw`, `n1`, `n2`, `n3`, `n4`, `n5`, `vaild_from`, `valid_upto`) VALUES
(1, 'Article 29', NULL, 'Protection of interest of minorities.', '(1) It mandates \'any sections\' of citizen residing in the territory of India or any pass there of having a distinct language,script or culture of its own shall have the right to conserve the same. ', '(2) No citizen shall be denied admission into any educational institution maintained by the state or receiving aid out of state funds on grounds only of religion, race, caste, language or any of them.', NULL, NULL, NULL, 'Article 29 grants protection to both religious minorities as well as linguistic minorities.', 'Supreme Court held that right to conserve language include the right to agitate for the protection of the language.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Article 30', NULL, '(1) Under this minorities, whether based on religion or language shall have right to establish and administer educational institutions of their choice. ', '(2) State shall not discriminate against any educational institutions managed by a minority in granting aid.', NULL, NULL, NULL, NULL, 'Term \'minority\' not defined anywhere in constitution but it is of two types i.e. Linguistic and Religious.', 'Supreme Court explained meaning of linguistic minority and declared \"A Linguistic minority for the proposal of article 30(1) is one which must atleast have a separate spoken language\".', 'It is not necessary that the language should also have a distinct script for those who speak it to be a linguistic minority.', 'There are some language which have no script on their own, but nonetheless those sections of the who speak the language will be a linguistic minority entitled to the protection of article 30(1).', 'Religious Minority:- Supreme court held that a which is numerically less than 50%is religious minority.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exploit`
--

CREATE TABLE `exploit` (
  `articleno` varchar(200) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `des` varchar(400) DEFAULT NULL,
  `des1` varchar(400) DEFAULT NULL,
  `des2` varchar(400) DEFAULT NULL,
  `des3` varchar(400) DEFAULT NULL,
  `des4` varchar(400) DEFAULT NULL,
  `des5` varchar(400) DEFAULT NULL,
  `prov` varchar(400) DEFAULT NULL,
  `prov1` varchar(400) DEFAULT NULL,
  `prov2` varchar(400) DEFAULT NULL,
  `prov3` varchar(400) DEFAULT NULL,
  `prov4` varchar(400) DEFAULT NULL,
  `prov5` varchar(400) DEFAULT NULL,
  `newlaw` varchar(400) DEFAULT NULL,
  `n1` varchar(400) DEFAULT NULL,
  `n2` varchar(400) DEFAULT NULL,
  `n3` varchar(400) DEFAULT NULL,
  `n4` varchar(400) DEFAULT NULL,
  `n5` varchar(400) DEFAULT NULL,
  `valid_from` date DEFAULT NULL,
  `valid_upto` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exploit`
--

INSERT INTO `exploit` (`articleno`, `title`, `des`, `des1`, `des2`, `des3`, `des4`, `des5`, `prov`, `prov1`, `prov2`, `prov3`, `prov4`, `prov5`, `newlaw`, `n1`, `n2`, `n3`, `n4`, `n5`, `valid_from`, `valid_upto`) VALUES
('Article 23', NULL, '(1) Prohibition of traffic in human beings and forced labour and in case of any contravention of this provisions the state can prescribe punishment in accordance with law. ', '(2) State can compel an individual for compulsory service with without payment if it is in public interest and in imposing such services the state shall not make any descrimination on ground only of religion, race, caste, or class or any of them.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Article 24', '', 'Prohibits the employment of a child below the age of 14 years in any factory or mine or engaged in any other hazardous employment.', NULL, NULL, NULL, NULL, NULL, 'Parliament had promulgated a legislation Child And Adoloscent Labour (Prohibition And Regulation)Act, 1986 to regulate the child labour parctices in India.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `freedom`
--

CREATE TABLE `freedom` (
  `id` int(20) NOT NULL,
  `articleno` varchar(100) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `des` varchar(400) DEFAULT NULL,
  `des1` varchar(400) DEFAULT NULL,
  `des2` varchar(400) DEFAULT NULL,
  `des3` varchar(400) DEFAULT NULL,
  `des4` varchar(400) DEFAULT NULL,
  `des5` varchar(400) DEFAULT NULL,
  `prov` varchar(400) DEFAULT NULL,
  `prov1` varchar(400) DEFAULT NULL,
  `prov2` varchar(400) DEFAULT NULL,
  `prov3` varchar(400) DEFAULT NULL,
  `prov4` varchar(400) DEFAULT NULL,
  `prov5` varchar(400) DEFAULT NULL,
  `newlaw` varchar(400) DEFAULT NULL,
  `n1` varchar(400) DEFAULT NULL,
  `n2` varchar(400) DEFAULT NULL,
  `n3` varchar(400) DEFAULT NULL,
  `n4` varchar(400) DEFAULT NULL,
  `n5` varchar(400) DEFAULT NULL,
  `valid_from` date DEFAULT NULL,
  `valid_upto` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `freedom`
--

INSERT INTO `freedom` (`id`, `articleno`, `title`, `des`, `des1`, `des2`, `des3`, `des4`, `des5`, `prov`, `prov1`, `prov2`, `prov3`, `prov4`, `prov5`, `newlaw`, `n1`, `n2`, `n3`, `n4`, `n5`, `valid_from`, `valid_upto`) VALUES
(1, 'Article 19', 'It contain important democratic rights which embodies the basic freedom. All these rights are available only to the citizens and to shareholder of a company but not to foreigners or legal persons like companies or corporations etc.', '(1)(a) Freedom of speech and expression.', '(1)(b) Right to assemble peacefully and without arms.', '(1)(c) Right to form association or co-operation societies, we can make political parties, companies, partnership firms, societies, club, trade union or any other person\'s group.', 'Right to move freely throughout the territory of country to promote nationalism feelings and not prochialism.', '(1)(e) Freedom to reside and settle in any part of the territory of India. This article is to remove internal barriers within the country. ', '(1)(g) Freedom of profession, occupation, or trade or business. This article guarantees each of its citizens to do trade, occupation or business anywhere in the country. ', 'There are some restrictions on these articles on grounds of:-', 'Sovereignty and Integrity of India. ', 'Public order and morality.', 'For Article 19(1)(d) Supreme Court held that freedom of movement of prostitute can be restricted on the ground of public health and in the interest of public morals.', 'Bombay High Court validated the restrictions on the  movement of person affected by AIDS.', 'For Article 19(1)(e) restrictions are based on interest of general public and protection of interest of any schedule tribe. Judiciary on freedom of residence said that certain areas can be banned for certain kinds of persons like prostitutes and habitual offender.', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Article 20', 'Protection in respect of conviction of offences. This article has been to safeguard the right of persons accused of crime.\'Persons\' means any citizen, non-citizen, and corporation.', '(1) Ex-Post Facto Law:- It simply means that legislative cannot make a law which provides for punishment of acts which were committed prior to the date when it came into force.', '(2) Prohibits Double Jeopardy:- No person shall be prosecuted and punished for the same offence more than once, called Doctrine Of Double Jeopardy.', '(3) Self-Incrimination Law:- Constitution says that no one accused of any offence shall be compelled to be witnessed against himself.', NULL, NULL, 'A new law cannot punish an old act of crime.', 'Constitution barred double punishment for the same offence. ', 'Article 20(3), some kind of freedom or liberty.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Article 21', 'No person shall be deprived of his life and personal liberty except according to procedure established by law.But these procedures must be reasonable, fair and just and not arbitrary or fanciful.', 'It is not conferred against any person but against state. Right is available to both citizens and non-citizens.It is backbone article for both part iii and part iv of fundamental rights and DPSPs.', 'Inferred Rights in article 21:-', '(1) Right to live with human dignity\r\n(2) Right to decent environment including pollution free water and air and protection against hazardous industries.  \r\n(3) Right to livelihood.\r\n(4) Right to privacy.\r\n(5) Right to shelter.\r\n(6) Right to health.\r\n(7) Right to freedom of education upto 14 years of age.\r\n(8) Right to legal aid.\r\n(9) Right against solitary confinement.\r\n(10) Right to speedy trial', '(A) Every child of age group (6 to 14) shall have right to force and compulsory education.', NULL, NULL, 'Judiciary has been enlarging the scope of article with various activist judgement. Initially, the phrase \'personal liberty\' was narrowly interpreted to confine the protection of article 21 to freedom of person against unlawful detention by the supreme court.', 'Taking a wide interpretation of Article 21 judiciary includes \'principle of Natural Justice\', in its judgement and thus Supreme court ruled that any law that provides for depriving any person of his life and liberty shall have to be reasonable, fair and just and this is how it is introduced in Article 21.', 'Natural Justice:- Rights enjoyed by all individual. Its objective is to ensure degree of fairness and reasonable in decision making and avoid arbitrariness.', 'Some basic concept are:-\r\n', 'No person can be judge in his own case.', 'No bias and authority must act honestly and in an impartial manner.And no one shall be punished unheard i.e. both side must be heard.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Article 22', 'Protection against arrest and detention in certain cases.', '(1) It says a person who is arrested and detained shall be informed ground of arrest and detention and cannot be denied the right to consult and to be defended by a legal practitioner of his choice.', '(2) Arrested person would be produced before the nearest magistrate within 24 hours. 24 hours leaving holidays and if travel leaving travelling time.', '(3) It says that above safeguards are not available to:- Enemy alien, A person arrested under preventive detention.', '(4) Detention of a person cannot exceed 3- months unless an advisory board reports sufficient for extended detention.', NULL, NULL, 'Preventive detention:- In this one can detain without trial because there is potential to commit a crime in future. Hence such a detention is purely o the ground of suspicion.', 'Punitive detention:- One can detained after a proper trial only.\r\n', '(a) Supreme Court rule that arrest and detention under punitive detention of Article 22 don\'t cover arrest under the orders of a court, civil arrest, arrest on failure to pay income tax, and deportation of alien. ', '(b) They apply only to an act of a criminal or quasi-criminal nature or some activity prejudicial to public interest.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `frights`
--

CREATE TABLE `frights` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descp` varchar(500) NOT NULL,
  `prov` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `frights`
--

INSERT INTO `frights` (`id`, `title`, `descp`, `prov`) VALUES
(1, 'jdhfjh', 'dsngaghjdkhjhgaskhjhg', 'dsnghdajkhgkjahkjh'),
(2, 'fhfuytrytr', 'ggjhgjg668668768', 'bhjghhjghgjhgjhg'),
(3, 'bvnbvnbv', 'bjhghgjhgjgjhg', 'hbhjghgjgjhgjhg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passsword` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hobby1` varchar(200) NOT NULL,
  `hobby2` varchar(200) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `passsword`, `email`, `hobby1`, `hobby2`, `dob`) VALUES
(1, 'welfare', 'welfareleg', 'shanujaintdl05@gmail.com', 'singing', 'dancing', '1997-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE `religion` (
  `id` int(10) NOT NULL,
  `articleno` varchar(50) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `des` varchar(600) DEFAULT NULL,
  `des1` varchar(400) DEFAULT NULL,
  `des2` varchar(400) DEFAULT NULL,
  `des3` varchar(400) DEFAULT NULL,
  `des4` varchar(400) DEFAULT NULL,
  `des5` varchar(400) DEFAULT NULL,
  `prov` varchar(600) DEFAULT NULL,
  `prov1` varchar(400) DEFAULT NULL,
  `prov2` varchar(400) DEFAULT NULL,
  `prov3` varchar(400) DEFAULT NULL,
  `prov4` varchar(400) DEFAULT NULL,
  `prov5` varchar(400) DEFAULT NULL,
  `newlaw` varchar(400) DEFAULT NULL,
  `n1` varchar(400) DEFAULT NULL,
  `n2` varchar(400) DEFAULT NULL,
  `n3` varchar(400) DEFAULT NULL,
  `n4` varchar(400) DEFAULT NULL,
  `n5` varchar(400) DEFAULT NULL,
  `valid_from` date DEFAULT NULL,
  `valid_upto` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`id`, `articleno`, `title`, `des`, `des1`, `des2`, `des3`, `des4`, `des5`, `prov`, `prov1`, `prov2`, `prov3`, `prov4`, `prov5`, `newlaw`, `n1`, `n2`, `n3`, `n4`, `n5`, `valid_from`, `valid_upto`) VALUES
(1, 'Article 25(1)', NULL, 'It confers on all persons to enjoy the freedom of conscience and have right to entertain any religion belief and propagate it.But this right is subject to public order, morality and health.', NULL, NULL, NULL, NULL, NULL, 'It is clear that freedom of religion is not absolute but subject to scrutiny of judiciary. Use of loudspeakers, cracking on Diwali etc. can be banned to maintain public order, morality and health.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Article 25(2)', NULL, 'This article shall affect the operation of any existing law or prevent the state from making any law.', '(a) Regulating or restricting any economic, financial, political or other secular activity which may be associated with  religious practice.', '(b) Providing for social welfare and reforms or the throwing open of Hindu religious institutions of a public character to all classes and sections of Hindus.', NULL, NULL, NULL, 'Article 25 is available for citizens as well as non-citizens.It contains two explanations:-', '1. Wearing \'Kirpans\' in the profession of Sikh religion.', '2. Article 25(b), word Hindu include Sikhs, Jains and Buddhists.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Article 26', NULL, 'Provide freedom to all religious denominations.', '(1) Right to establish and maintain institutions for religious and charitable purposes.', '(2) Right to manage its own affairs in matter of religion.', '(3) Right to own and acquire movable and immovable property and,', '(4) Right to administer such property in accordance with law.', NULL, 'Supreme Court held that a religion denomination satisfying three conditions:-', '(1) It should be a group of individual who have a system of belief or doctrines which they regard as conducive to their spiritual well-being.', '(2) It should have a common organisation.', '(3) It should be designated by a distinctive name.', 'It is one of the judgement of Supreme Court observed that the constitutional legitimacy is above the religious practices and beliefs.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Article 27', NULL, 'No citizen would be compelled by the state to pay any taxes the proceeds of which can be used for promotion or maintenance of particular religion or religion institution.', 'Article 27 makes India a true secular state.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Article 28', NULL, 'Mandates that no religious institutions would be imparted in any educational institutions wholly maintained out of state funds.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `religions`
--

CREATE TABLE `religions` (
  `id` int(50) NOT NULL,
  `articleno` varchar(100) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `des` varchar(400) DEFAULT NULL,
  `des1` varchar(400) DEFAULT NULL,
  `des2` varchar(400) DEFAULT NULL,
  `des3` varchar(400) DEFAULT NULL,
  `des4` varchar(400) DEFAULT NULL,
  `des5` varchar(400) DEFAULT NULL,
  `prov` varchar(400) DEFAULT NULL,
  `prov1` varchar(400) DEFAULT NULL,
  `prov2` varchar(400) DEFAULT NULL,
  `prov3` varchar(400) DEFAULT NULL,
  `prov4` varchar(400) DEFAULT NULL,
  `prov5` varchar(400) DEFAULT NULL,
  `newlaw` varchar(400) DEFAULT NULL,
  `n1` varchar(400) DEFAULT NULL,
  `n2` varchar(400) DEFAULT NULL,
  `n3` varchar(400) DEFAULT NULL,
  `n4` varchar(400) DEFAULT NULL,
  `n5` varchar(200) DEFAULT NULL,
  `valid_from` date DEFAULT NULL,
  `valid_upto` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `religions`
--

INSERT INTO `religions` (`id`, `articleno`, `title`, `des`, `des1`, `des2`, `des3`, `des4`, `des5`, `prov`, `prov1`, `prov2`, `prov3`, `prov4`, `prov5`, `newlaw`, `n1`, `n2`, `n3`, `n4`, `n5`, `valid_from`, `valid_upto`) VALUES
(1, 'Article 14', 'States that government shall not deny to any person equality before law and equal protection of law.', 'It implies that no one is above law. ', 'Every citizen is subjected to the same law and same treatment and no one can legally claim any special treatment or privileged on any of the ground. ', 'Rule of law is the foundation of Indian democracy that states that the laws apply in the same manner to all irrespective of a person\'s status.', 'Equality before law prohibits discrimination and equal protection of law requires the state to give special treatment to a person in different situations in order to establish equality amongst all.', NULL, NULL, 'Certain constitutional diplomatic and other exceptions of it are:-', '1. Article 361- Provide certain immunities to the president and governor.', '2. Article 361\'A\'- No person shall be liable to any proceedings in any court for publishing a true report of proceedings of any house of the parliament or state legislature in newspaper, radio etc.', '3. Article 105- Provide that no person shall be liable to any proceedings in any court of its committee.', '4. Article 194- Provide that no person shall be liable to any proceedings in any court of its committee. \r\n This is for member of state legislature', '5. Article 31(C)- Exception to Article 14. It provides that the laws made by the state for implementation DPSPs in contained clause(a), clause(b), or clause(c) of article 39 cannot be challenged on the ground that they violet article 14. There are certain DPSPs which has upper hand over fundamental rights i.e. Article 39(b) and Article 39(c).', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Article 15', 'The provision to stop discrimination both by the state and private individuals.', '(1) It says that states shall not discriminate against any citizen on ground only of religion, race, caste, sex, or place of birth.', '(2) It says that no citizens shall be subjected to any disability, restrictions or conditions on ground of religion, race, caste, sex or place of birth. Access to shops, public restaurant, hotel, and place of birth.\r\nUse of wells, tanks, bathing ghats, roads and places at public and maintained wholly or partly by state funds or dedicated the use at any public.', '(3) Under this article state is permitted to make laws for women and children( to make special provisions for them).', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Article 16', NULL, '(1) Article provides for equal opportunity for all citizens in matter of employment or appointment to any office under the state.', '(2) No citizen be discriminated against or be ineligible for any employment under or office under the state on ground of only religion, race, caste, sex, decent, place of birth, or residence.', '(3) It provides that parliament can prescribe as a condition for certain employment or appointment in a state or U.T. or local authority or any other authority.  ', '(4) State can provide for reservation of appointment or posts in favor of any backword classes that is not adequately represented in the state service. ', '(5) This is for the recruitment of an employee of any religious organisation that the person of that religious community will be given priority under this article.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Article 17', 'This provides for the abolition of untouchability.', ' However, untouchability is not defined in constitution; it is based on birth, spread in hindu communities in which upper class people discriminate with lower class. ', ' ', NULL, NULL, NULL, NULL, 'Mysore High Court held that untouchability refers to the social disabilities certain class of person by reasons of their birth in certain cases.', 'Parliament made law to execute- Untouchability(offence) Act, 1955 it came into force  on 1/june/1995 under the provision of Article 35. In 1976, this law was further amended and renamed as- Protection Of Civil Rights Act, 1955.', 'This act lays down that whatever is open to general public should be open to the members of Schedule Castes.', 'No shopkeeper can refuse to sell them, no person may refuse to render any services to any person on the ground of untouchability.', 'Act made provisions for imprisonment and fine.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Article 18', 'It prohibits to conferring the title in the state.', '(1) It prevents the state from confirming any title except military and academics.', '(2) It prohibits the Indian citizens from receiving title from any foreign state.', '(3) Foreign nationals holding the office of profit or trust under the state may accept titles from the foreign government with the consent of president only.', '(4) A citizen or foreigner holding any office of profit or trust under state can accept any present, emolument or office from or under any foreign state with the consent of president.', NULL, NULL, 'In Indian democracy, there is no space for the artificial distinctions like nawab shahab, maharaja etc. among the society.', 'All these titles are abolished by Article 18 because it is against equal status of all.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `remedies`
--

CREATE TABLE `remedies` (
  `id` int(10) NOT NULL,
  `articleno` varchar(100) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `des` varchar(400) DEFAULT NULL,
  `des1` varchar(400) DEFAULT NULL,
  `des2` varchar(400) DEFAULT NULL,
  `des3` varchar(400) DEFAULT NULL,
  `des4` varchar(400) DEFAULT NULL,
  `des5` varchar(400) DEFAULT NULL,
  `prov` varchar(400) DEFAULT NULL,
  `prov1` varchar(400) DEFAULT NULL,
  `prov2` varchar(400) DEFAULT NULL,
  `prov3` varchar(400) DEFAULT NULL,
  `prov4` varchar(400) DEFAULT NULL,
  `prov5` varchar(400) DEFAULT NULL,
  `newlaw` varchar(400) DEFAULT NULL,
  `n1` varchar(400) DEFAULT NULL,
  `n2` varchar(400) DEFAULT NULL,
  `n3` varchar(400) DEFAULT NULL,
  `n4` varchar(400) DEFAULT NULL,
  `n5` varchar(400) DEFAULT NULL,
  `valid_from` date DEFAULT NULL,
  `valid_upto` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `remedies`
--

INSERT INTO `remedies` (`id`, `articleno`, `title`, `des`, `des1`, `des2`, `des3`, `des4`, `des5`, `prov`, `prov1`, `prov2`, `prov3`, `prov4`, `prov5`, `newlaw`, `n1`, `n2`, `n3`, `n4`, `n5`, `valid_from`, `valid_upto`) VALUES
(1, 'Article 32', 'Right to Constitutional Remedies through writs.', 'It enforce the fundamental rights of an aggrieved citizen.Rights guaranteed by constitution would have been worth nothing if constitution had not provided an effective mechanism for their enforcement.', '(1) It guarantees the right to move the Supreme Court by appropriate proceedings for the enforcement of the fundamental rights enumerated in part-iii of constitution.', '(2) Empowers Supreme Court to direct or order or to issue directions or order or writs.', '(3) Empowers parliament by special law to be empower to any other Central Administrative Tribunal(CAT) and State Administrative Tribunal(SAT) to exercise within local limits of its jurisdiction all or of the power exercisableby Supreme Court.  ', '(4) It says the right guaranteed by it shall not be suspended except as otherwise provided for by the constitution.', NULL, 'Writs and its scope:-\r\nIn case of the enforcement of fundamental rights, the jurisdiction of Supreme Court is original but not exclusive.\r\nOriginal means an aggrieved citizen can directly go to Supreme Court. It is not exclusive jurisdiction as it is concurrent with the jurisdiction of High Court under Article 226. Further parliament can empower any other court to issue these writs. ', '1. Habeas Corpus:- To enforce fundamental rights of individual liberty against unlawful detention. It can be issued against both state and individual.', '2. Mandamus:- meant for \'We Command\'. This writ is used by court to order the public official who has failed to perform his duty or refused to do his duty, to resume his work.It cannot be issued against individual or a body. ', '3. Certiorari:- Meant for \'to be certified\' or \'to be informed\' issued against judicial and quasi-judicial body.This writ is issued by court higher in authority to a lower court or tribunal ordering them either to transfer a case pending with them to itself or to squash their order in a case.', '4. Quo-warranto:- Meant for \'what is your authority?\' issued to prevent illegal suppression of a public office by a person. Through this writ the court enquire into legally of a claim of a person to a public office. \r\n\r\n', 'Supreme Court issues writ only to enforce fundamental rights not legal rights and it can issue against both government or a person whereas High Court issues writ to enforce fundamental rights and also for the enforcement of an ordinary legal rights and it can also issue against government authority within its territory jurisdiction only or a person residing. ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `right`
--

CREATE TABLE `right` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descp` varchar(500) NOT NULL,
  `prov` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cultural`
--
ALTER TABLE `cultural`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exploit`
--
ALTER TABLE `exploit`
  ADD PRIMARY KEY (`articleno`);

--
-- Indexes for table `freedom`
--
ALTER TABLE `freedom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frights`
--
ALTER TABLE `frights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `religion`
--
ALTER TABLE `religion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `religions`
--
ALTER TABLE `religions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remedies`
--
ALTER TABLE `remedies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `right`
--
ALTER TABLE `right`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cultural`
--
ALTER TABLE `cultural`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `freedom`
--
ALTER TABLE `freedom`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `frights`
--
ALTER TABLE `frights`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `religion`
--
ALTER TABLE `religion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `religions`
--
ALTER TABLE `religions`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `remedies`
--
ALTER TABLE `remedies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `right`
--
ALTER TABLE `right`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
