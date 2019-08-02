-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2019 at 02:18 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `croudfunding`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE `access` (
  `sno` bigint(20) NOT NULL,
  `username` varchar(225) NOT NULL,
  `access` longtext NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`sno`, `username`, `access`, `user_type`) VALUES
(1, '1', '*', 'admin'),
(2, 'omkeshg51@gmail.com', '1,2', 'NGO'),
(3, 'demo1@gmail.com', '2,3', 'NGO'),
(4, 'om@gmail.com', '2,8,9,10', 'NGO'),
(5, 'om@gmail.com', '2,8,9,10', 'NGO'),
(6, 'om@gmail.com', '2,8,9,10', 'NGO'),
(7, 'om@gmail.com', '2,8,9,10', 'NGO'),
(8, 'omkesh@gmail.com', '2,8,9,10', 'NGO'),
(9, 'omkesh@gmail.com', '2,8,9,10', 'NGO'),
(10, 'om@gmail.com', '2,8,9,10', 'NGO'),
(11, '1@gmail.com', '2,8,9,10', 'NGO'),
(12, 's@ghf.c', '2,8,9,10', 'NGO'),
(13, 'h@gmai.com', '2,8,9,10', 'NGO'),
(14, '1@gma.com', '2,8,9,10', 'NGO'),
(15, 'jackson@gmail.com', '2,8,9,10', 'NGO'),
(16, 'kjglkajl@hjljgf.com', '15,16,17,18,19,20,21,22', 'FundRiser'),
(17, 'omkeshg51@gmail.com', '15,16,17,18,19,20,21,22', 'FundRiser'),
(18, 'raj@gmail.com', '2,17', 'SocialActivist'),
(19, 'raj@gmail.com', '2,17', 'SocialActivist'),
(20, 'abc@gmail.com', '15,16,17,18,19,20,21,22', 'FundRiser'),
(21, 'abc1@gmail.com', '2,3', 'NGO'),
(22, 'jackson@gmail.com', '2,3', 'SocialActivist'),
(23, 'omkeshg51@gmail.com', '2,3', 'FundRiser'),
(24, 'omkeshg51@gmail.com', '2,3', 'FundRiser'),
(25, 's@ghf.c', '2,3', 'NGO'),
(26, 's12@ghf.c', '2,3', 'SocialActivist'),
(27, 's22@ghf.c', '2,3', 'FundRiser');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `sno` int(100) NOT NULL,
  `blogtital` varchar(200) NOT NULL,
  `blog` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  `blogby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`sno`, `blogtital`, `blog`, `image`, `datetime`, `blogby`) VALUES
(8, 'Taskforce report has the future success of all schools and students at its heart', '<p style=\"margin-bottom: 8px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; font-family: &quot;Source Sans Pro&quot;, sans-serif; vertical-align: baseline; line-height: 1.47059; color: rgb(87, 87, 87);\">I am heartened with the direction taken by the&nbsp;<a rel=\"noopener noreferrer\" href=\"https://conversation.education.govt.nz/assets/TSR/Tomorrows-Schools-Review-Report-13Dec2018.PDF\" target=\"_blank\" style=\"margin: 0px; padding: 0px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgba(34, 34, 34, 0.35); border-left-color: initial; border-image: initial; outline: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; color: rgb(34, 34, 34);\">Tomorrow’s Schools Independent Taskforce</a>. The members recommend system and structural changes which will require far greater ‘working together’ and will ultimately make our schooling futures stronger.</p><p style=\"margin-bottom: 8px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; font-family: &quot;Source Sans Pro&quot;, sans-serif; vertical-align: baseline; line-height: 1.47059; color: rgb(87, 87, 87);\">My concerns have long centred around children and teachers in schools serving low-income communities, and how some children’s school-enabled life chances have diminished at the same time as others living in wealthier communities have reaped educational rewards. We have some schools, generally in financially poorer communities, which are inadequately maintained, unhealthy to learn in, and curriculum-wise are under-resourced. It is hard to attract teachers and leaders to such schools. Competition and choice in education have benefited those with the ‘right’ cultural and economic capital, those who understand the education system, and with their financial and networking resources are able to work it to their own children’s advantage. One consequence is that New Zealand’s measured gap in school achievement between financially wealthy communities and low income communities remains one of the widest in those surveyed under UNESCO’s PISA studies. At the same time as schooling standards for some have declined, their living standards have also deteriorated. Children have been attending school while hungry, poorly housed and in poor health. In brief, three decades of competition and choice-based policies have privileged some and failed far too many. The Taskforce review is welcome and well overdue.</p><p style=\"margin-bottom: 8px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; font-family: &quot;Source Sans Pro&quot;, sans-serif; vertical-align: baseline; line-height: 1.47059; color: rgb(87, 87, 87);\">I was a Board of Trustees member; the staff representative (teacher) elected in the first election in 1989. I went on to a career in Teacher Education and lecturing at University. Much of my research and focus has been, and is, on the inequities which emerged as Tomorrow’s Schools (TS) policies were embedded. My Doctorate was researched in a school I once taught and governed in, Takiwa school (pseudonym), a Decile 1 area school in Tai Tokerau. In the mid-to-late 1990s there was some optimism regarding what TS permitted and enabled. In Takiwa, a group of what I describe as entrepreneurs (teachers and parents) went to the BOT with a plan to have a school within a school, where children would be taught in vertically grouped classes, using Playcentre as a model for pedagogy. For three years the resulting ‘Kiwi’ classes provided an education which truly met the needs of an opting-in cohort of children, from a low-income rural community. A combination of conditions (including TS) and motivations allowed democratic and participatory voice. It was an inspirational innovation which only concluded when its champions departed the community. Those were halcyon days before the TS policies showed how troublesome, and inequitable, they could be. Takiwa school, like many other Decile 1-3 schools, has struggled in the intervening years. &nbsp;</p><p style=\"margin-bottom: 8px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; font-family: &quot;Source Sans Pro&quot;, sans-serif; vertical-align: baseline; line-height: 1.47059; color: rgb(87, 87, 87);\">Teachers’ hearts rarely leave a school and a community they have happily taught in, even after a physical departure. I am no exception. As I reflected as an academic on education policy and practice, Takiwa School and its community remained a key referral point. In the last 15 or so years, post the Kiwi initiative, Takiwa School has struggled. Driving past often showed very tired buildings, badly in need of maintenance and a paint. The roll has dropped dramatically even though it provides the only secondary schooling within a 50km radius – both primary and secondary students are currently bussed or driven to other schools. The falling roll means that primary school classes are limited in number, and of necessity they are vertically grouped. The subjects offered at secondary level are restricted because student numbers for some subjects are too low to employ a specialist teacher. The school houses are still there but many show signs of neglect. Principals have come and gone on a far too regular basis, some are ‘relievers’ and some have had limited previous leadership experience. It is difficult for the school to attract experienced teachers, as choosing to apply for a teaching position also involves making a lifestyle choice. Professional learning and development (PLD) in isolated areas is often hard to locate and expensive to access, hence teachers can be professionally shortchanged and disadvantaged. At the same time dedicated professionals and BOTs have done their very best to provide a high standard of schooling; this community undoubtedly cares about its children and their education.</p><p style=\"margin-bottom: 8px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; font-family: &quot;Source Sans Pro&quot;, sans-serif; vertical-align: baseline; line-height: 1.47059; color: rgb(87, 87, 87);\">If the recommendations come to fruition, how might schools in low-income communities, like Takiwa, benefit from the changes signaled? While far from being an exhaustive list, here are some possibilities: &nbsp;An Education Hub will support BOTs and take away some of the more onerous aspects of their work, such as property maintenance. There will be greater stability in school leadership, with the Hub being responsible for Principal appointments. Leadership advisors will support the Principal, who will be in the role for up to five years. The BOT will not be the employer of staff, thus diluting potential tensions and conflicts of interest which can emerge in isolated communities such as Takiwa. Mana whenua representation will be compulsory (Takiwa has always met this requirement, in a natural way through the election process). School rolls will likely stabilise as limits will be placed on other schools recruiting out-of-zone students. A Learning Support Coordinator will be appointed in each school, and specialist staff for children with special needs will be more easily accessible through the Education Hub. Staff PLD will be more readily available and accessible. Equity resourcing will mean school’s operational, staffing and property formulas will increase.</p>', 'Abacus school image-0-2000-0-1357.jpg', '', ''),
(9, 'Kidblog opens the door for Hilliard City School students', '<header class=\"article-header\" style=\"box-sizing: inherit; color: rgb(36, 98, 144); font-family: Lato, sans-serif; font-size: 16px; background-color: rgb(254, 254, 254);\"><h1 class=\"entry-title single-title\" itemprop=\"headline\" style=\"box-sizing: inherit; font-size: 2.5rem; margin-top: 0px; margin-bottom: 0.5rem; padding: 0px; font-family: Lato, sans-serif; color: rgb(36, 98, 144); text-rendering: optimizelegibility; line-height: 1.4;\">Kidblog opens the door for Hilliard City School students</h1><p class=\"byline\" style=\"box-sizing: inherit; margin-bottom: 1rem; padding: 0px; font-size: inherit; line-height: 1.6; text-rendering: optimizelegibility; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(71, 82, 93);\">February 12, 2019	<span style=\"box-sizing: inherit;\">?&nbsp;<a href=\"https://kidblog.org/home/author/lkniffin/\" title=\"Posts by Laura Kniffin\" rel=\"author\" style=\"box-sizing: inherit; line-height: inherit; color: rgb(36, 98, 144); text-decoration-line: underline; cursor: pointer; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.3);\">Laura Kniffin</a></span></p></header><section class=\"entry-content\" itemprop=\"articleBody\" style=\"box-sizing: inherit; color: rgb(71, 82, 93); font-family: Lato, sans-serif; font-size: 16px; background-color: rgb(254, 254, 254);\"><p style=\"box-sizing: inherit; margin-bottom: 1rem; padding: 0px; font-size: inherit; line-height: 1.6; text-rendering: optimizelegibility; font-family: &quot;Open Sans&quot;, sans-serif;\"><img class=\"alignnone wp-image-4604 size-full\" src=\"https://s3.amazonaws.com/home.kidblog.org/home/wp-content/uploads/20190212151503/AdobeStock_52159297.png\" alt=\"\" width=\"790\" height=\"526\" srcset=\"https://s3.amazonaws.com/home.kidblog.org/home/wp-content/uploads/20190212151503/AdobeStock_52159297.png 790w, https://s3.amazonaws.com/home.kidblog.org/home/wp-content/uploads/20190212151503/AdobeStock_52159297-640x426.png 640w, https://s3.amazonaws.com/home.kidblog.org/home/wp-content/uploads/20190212151503/AdobeStock_52159297-768x511.png 768w\" sizes=\"(max-width: 790px) 100vw, 790px\" style=\"box-sizing: inherit; border-style: none; display: inline-block; max-width: 100%; height: auto;\"></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; padding: 0px; font-size: inherit; line-height: 1.6; text-rendering: optimizelegibility; font-family: &quot;Open Sans&quot;, sans-serif;\"><span style=\"box-sizing: inherit;\">Hilliard City School District established an Admin Pro membership with Kidblog in 2015. Since then, their teachers and students have created over 42,000 posts and 100,000 comments. Each year,</span><span style=\"box-sizing: inherit;\">&nbsp;a growing number of teachers are&nbsp;interested in publishing student work with Kidblog and request access to the platform.</span></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; padding: 0px; font-size: inherit; line-height: 1.6; text-rendering: optimizelegibility; font-family: &quot;Open Sans&quot;, sans-serif;\"><span style=\"box-sizing: inherit;\">Cathy Mere is an Elementary Literacy Instructional Leader with Hilliard. She has successfully used Kidblog in her various classrooms for eight years.&nbsp;</span><span style=\"box-sizing: inherit;\">Once Cathy realized that a number of other teachers in her school were using Kidblog under individual teacher memberships, it became apparent that a district-wide membership made sense.</span></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; padding: 0px; font-size: inherit; line-height: 1.6; text-rendering: optimizelegibility; font-family: &quot;Open Sans&quot;, sans-serif;\"><span style=\"box-sizing: inherit;\">Her favorite features?&nbsp;</span><span style=\"box-sizing: inherit;\">“The ability to adjust audience levels, and sharing tools… also, the ability to moderate posts and comments has been so helpful. I also love how we can connect classes.”</span></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; padding: 0px; font-size: inherit; line-height: 1.6; text-rendering: optimizelegibility; font-family: &quot;Open Sans&quot;, sans-serif;\"><span style=\"box-sizing: inherit;\">Mark Pohlman, Director of Instructional Technology at Hilliard, agrees.&nbsp;</span><span style=\"box-sizing: inherit;\">“Absolutely with the moderation tools – especially on the project side.”</span></p><p style=\"box-sizing: inherit; margin-bottom: 1rem; padding: 0px; font-size: inherit; line-height: 1.6; text-rendering: optimizelegibility; font-family: &quot;Open Sans&quot;, sans-serif;\"><span style=\"box-sizing: inherit;\">Mark and Cathy are both administrators of their Kidblog Admin Pro organization. Since launching Kidblog district-wide, they have integrated several projects in which Kidblog is the central publishing tool. Most recently, they have started a</span>&nbsp;K-12 project in collaboration with Columbus State University.</p><p style=\"box-sizing: inherit; margin-bottom: 1rem; padding: 0px; font-size: inherit; line-height: 1.6; text-rendering: optimizelegibility; font-family: &quot;Open Sans&quot;, sans-serif;\"><span style=\"box-sizing: inherit;\">Hilliard’s 3rd and 4th grade teachers partner with a GenE course professor and pair students on a reading assignment. “Sometimes it will be a whole class, and sometimes our 4th-grade teacher will just pick the 15 students that need some more motivation or engagement.”</span></p></section>', 'ED2.jpg', '', ''),
(10, 'Education – A driving force out of Poverty', '<p><br></p><div class=\"entry-header\" style=\"margin: 0px 0px 30px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: roboto; vertical-align: baseline; color: rgb(50, 50, 50);\"><h1 class=\"jeg_post_title\" style=\"margin-top: -2.5em; margin-bottom: 0.4em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: 4em; font-family: roboto; vertical-align: baseline; color: rgb(17, 17, 17); text-rendering: optimizelegibility; letter-spacing: -0.04em; min-height: 2em; position: relative;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; box-shadow: rgb(255, 255, 255) 7px 0px 0px, rgb(255, 255, 255) -7px 0px 0px;\">52 Education Blogs You Should Follow</span></h1><div class=\"jeg_meta_container\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; position: relative;\"><div class=\"jeg_post_meta jeg_post_meta_1\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 13px; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(160, 160, 160); display: flex; align-items: center; align-content: flex-start;\"><div class=\"meta_left\" style=\"margin: 0px 1em 0px 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: inline-block;\"><div class=\"jeg_meta_author\" style=\"margin: 0px 6px 0px 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: inline-block;\"><span class=\"meta_text\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">by</span>&nbsp;<a href=\"https://www.teachthought.com/author/teachthought-staff/\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(201, 18, 18);\">TeachThought Staff</a></div>&nbsp;<div class=\"jeg_meta_date\" style=\"margin: 0px 6px 0px 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: inline-block;\">&nbsp;<a href=\"https://www.teachthought.com/pedagogy/52-education-blogs-you-should-follow/\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: inherit;\">October 22, 2018</a></div>&nbsp;<div class=\"jeg_meta_category\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: inline-block;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><span class=\"meta_text\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">in</span>&nbsp;<a href=\"https://www.teachthought.com/category/pedagogy/\" rel=\"category tag\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: inherit;\">Teaching</a></span></div></div><div class=\"meta_right\" style=\"margin: 0px 0px 0px auto; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: inline-block; text-align: right; flex: 1 0 auto;\"><div class=\"jeg_meta_comment\" style=\"margin: 0px 0px 0px 15px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: inherit; vertical-align: baseline; display: inline-block;\"><a href=\"https://www.teachthought.com/pedagogy/52-education-blogs-you-should-follow/#respond\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(50, 50, 50);\"><span class=\"fa fa-comment-o\" style=\"margin: 0px 2px 0px 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(20, 118, 183);\"></span>&nbsp;107</a></div></div></div></div></div><div class=\"jeg_share_top_container\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: roboto; vertical-align: baseline; color: rgb(50, 50, 50);\"><div class=\"jeg_share_button clearfix\" style=\"margin: 0px 0px 30px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><div class=\"jeg_share_stats\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><div class=\"jeg_share_count\" style=\"margin: 0px 15px 0px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1; font-family: inherit; vertical-align: baseline; float: left; text-align: center; position: relative;\"><div class=\"counts\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: 26px; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(201, 18, 18);\">119</div><span class=\"sharetext\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 11px; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(160, 160, 160);\">SHARES</span></div><div class=\"jeg_views_count\" style=\"margin: 0px 15px 0px 0px; padding: 0px 15px 0px 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1; font-family: inherit; vertical-align: baseline; float: left; text-align: center; position: relative;\"><div class=\"counts\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: 26px; line-height: inherit; font-family: inherit; vertical-align: baseline;\">9.4k</div><span class=\"sharetext\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 11px; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(160, 160, 160);\">VIEWS</span></div></div><div class=\"jeg_sharelist\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; float: none; display: flex; flex-wrap: wrap; align-items: flex-start;\"><a href=\"https://www.pinterest.com/pin/create/bookmarklet/?pinFave=1&amp;url=https%3A%2F%2Fwww.teachthought.com%2Fpedagogy%2F52-education-blogs-you-should-follow%2F&amp;media=/wp-content/uploads/2013/01/viralbus-2.jpg&amp;description=52+Education+Blogs+You+Should+Follow\" rel=\"nofollow\" class=\"jeg_btn-pinterest expanded\" style=\"margin: 0px 5px 5px 0px; padding: 0px 12px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 38px; font-family: inherit; vertical-align: baseline; color: rgb(255, 255, 255); float: left; width: auto; max-width: none; height: 38px; white-space: nowrap; background: rgb(207, 40, 48); border-radius: 0px; text-align: center; display: flex; flex: 1 1 0%; justify-content: center; backface-visibility: hidden; transition: all 0.2s ease 0s;\"><span class=\"fa fa-pinterest\" style=\"margin: 0px; padding: 0px; border: 0px; font-size: 18px; line-height: inherit; vertical-align: baseline;\"></span><span style=\"margin: 0px 0px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: 13px; line-height: inherit; font-family: inherit; vertical-align: baseline; position: relative;\">Pin</span></a><a href=\"http://www.facebook.com/sharer.php?u=https%3A%2F%2Fwww.teachthought.com%2Fpedagogy%2F52-education-blogs-you-should-follow%2F\" rel=\"nofollow\" class=\"jeg_btn-facebook expanded\" style=\"margin: 0px 5px 5px 0px; padding: 0px 12px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 38px; font-family: inherit; vertical-align: baseline; color: rgb(255, 255, 255); float: left; width: auto; max-width: none; height: 38px; white-space: nowrap; background: rgb(69, 98, 159); border-radius: 0px; text-align: center; display: flex; flex: 1 1 0%; justify-content: center; backface-visibility: hidden; transition: all 0.2s ease 0s;\"><span class=\"fa fa-facebook-official\" style=\"margin: 0px; padding: 0px; border: 0px; font-size: 18px; line-height: inherit; vertical-align: baseline;\"></span><span style=\"margin: 0px 0px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: 13px; line-height: inherit; font-family: inherit; vertical-align: baseline; position: relative;\">Share</span></a><a href=\"https://twitter.com/intent/tweet?text=52+Education+Blogs+You+Should+Follow&amp;url=https%3A%2F%2Fwww.teachthought.com%2Fpedagogy%2F52-education-blogs-you-should-follow%2F\" rel=\"nofollow\" class=\"jeg_btn-twitter expanded\" style=\"margin: 0px 5px 5px 0px; padding: 0px 12px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 38px; font-family: inherit; vertical-align: baseline; color: rgb(255, 255, 255); float: left; width: auto; max-width: none; height: 38px; white-space: nowrap; background: rgb(94, 178, 239); border-radius: 0px; text-align: center; display: flex; flex: 1 1 0%; justify-content: center; backface-visibility: hidden; transition: all 0.2s ease 0s;\"><span class=\"fa fa-twitter\" style=\"margin: 0px; padding: 0px; border: 0px; font-size: 18px; line-height: inherit; vertical-align: baseline;\"></span><span style=\"margin: 0px 0px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: 13px; line-height: inherit; font-family: inherit; vertical-align: baseline; position: relative;\">Tweet</span></a><a href=\"https://www.teachthought.com/pedagogy/52-education-blogs-you-should-follow/#\" class=\"jeg_btn-toggle\" style=\"margin: 0px 0px 5px; padding: 0px 10px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 38px; font-family: inherit; vertical-align: baseline; color: rgb(255, 255, 255); float: left; width: 44px; max-width: 44px; height: 38px; white-space: nowrap; background: rgb(189, 189, 189); border-radius: 0px; text-align: center; display: flex; flex: 1 1 0%; justify-content: center; backface-visibility: hidden; transition: all 0.2s ease 0s;\"><span class=\"fa fa-share\" style=\"margin: 0px; padding: 0px; border: 0px; font-size: 18px; line-height: inherit; vertical-align: baseline; transition: transform 0.2s ease 0s;\"></span></a></div></div></div><div class=\"jeg_ad jeg_article jnews_content_top_ads \" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: roboto; vertical-align: baseline; text-align: center; color: rgb(50, 50, 50);\"></div><div class=\"entry-content no-share\" style=\"margin: 0px 0px 30px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: roboto; vertical-align: baseline; position: relative; color: rgb(50, 50, 50); transform: none;\"><div class=\"jeg_share_button share-float jeg_sticky_share clearfix share-monocrhome\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; left: 0px; top: 0px; position: relative; overflow: visible; min-height: 1px;\"><div class=\"jegStickyHolder\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><div class=\"theiaStickySidebar\" style=\"margin: 0px; padding: 0px 0px 1px; border: 0px; font: inherit; vertical-align: baseline; backface-visibility: hidden; position: fixed; top: 20px; left: 370px; width: 0px;\"><div class=\"jeg_share_float_container\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"></div></div></div></div><div class=\"content-inner \" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 16px; line-height: 1.625em; font-family: inherit; vertical-align: baseline; color: rgb(51, 51, 51); word-break: normal; overflow-wrap: break-word;\"><p style=\"margin-bottom: 1.25em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: &quot;droid serif&quot;; vertical-align: baseline; text-rendering: optimizelegibility;\"><a href=\"http://www.flickr.com/photos/viralbus/273298437/sizes/o/in/photostream/\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; color: rgb(201, 18, 18);\"><img class=\"alignnone size-full wp-image-6247\" src=\"https://www.teachthought.com/wp-content/uploads/2013/01/viralbus-2.jpg\" alt=\"viralbus-2\" width=\"756\" height=\"567\" srcset=\"/wp-content/uploads/2013/01/viralbus-2.jpg 756w, /wp-content/uploads/2013/01/viralbus-2-300x225.jpg 300w\" sizes=\"(max-width: 756px) 100vw, 756px\" data-pin-no-hover=\"true\" style=\"margin: 5px 20px 20px 0px; padding: 0px; font: inherit; max-width: 100%; height: auto;\"></a></p><p style=\"margin-bottom: 1.25em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: &quot;droid serif&quot;; vertical-align: baseline; text-rendering: optimizelegibility;\">If you are a teacher, student, parent, or administrator, you should be following education blogs. Why? Simply because blogs are an ever-increasing way to spark ideas, creativity, and innovation. The following list is a compilation of blogs for those interested in education.</p><div class=\"jeg_ad jeg_ad_article jnews_content_inline_ads  \" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; text-align: center;\"></div><p style=\"margin-bottom: 1.25em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: &quot;droid serif&quot;; vertical-align: baseline; text-rendering: optimizelegibility;\">Written by parents, administrators, businessmen, teachers, and administrators, these blogs stand out with their unique style and excellent content.</p><p style=\"margin-bottom: 1.25em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: &quot;droid serif&quot;; vertical-align: baseline; text-rendering: optimizelegibility;\">Take a look at the 51 options below. And if you count&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\"><a title=\"TeachThought.com\" href=\"http://ttdev.www.teachthought.com/\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; color: rgb(201, 18, 18);\">the blog you’re on</a></span>, that makes 52.</p><h2 style=\"margin: 0.83em 0px 0.5em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1.953em; line-height: 1.35; vertical-align: baseline; color: rgb(17, 17, 17); text-rendering: optimizelegibility;\">Traditional Elementary Education</h2><p style=\"margin-bottom: 1.25em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: &quot;droid serif&quot;; vertical-align: baseline; text-rendering: optimizelegibility;\">1.&nbsp;<a href=\"http://blog.cathyjonelson.com/\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; color: rgb(201, 18, 18);\">Cathy Nelson</a></p><p style=\"margin-bottom: 1.25em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: &quot;droid serif&quot;; vertical-align: baseline; text-rendering: optimizelegibility;\">Cathy Nelson’s blog is for educators and library media specialists who are interested in technology integration in the classroom. She offers help, resources, and ideas from her own personal experience. She won the EduBlog award in 2007 and 2008.</p><p style=\"margin-bottom: 1.25em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: &quot;droid serif&quot;; vertical-align: baseline; text-rendering: optimizelegibility;\">2.&nbsp;<a href=\"http://coolcatteacher.blogspot.com/\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; color: rgb(201, 18, 18);\">Cool Cat Teacher</a></p><div class=\"jeg_ad jeg_ad_article jnews_content_inline_2_ads  \" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; text-align: center;\"></div><p style=\"margin-bottom: 1.25em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: &quot;droid serif&quot;; vertical-align: baseline; text-rendering: optimizelegibility;\">Cool Cat is a local teacher, author, and non-profit initiator, dedicated to inspiring fellow teachers with innovative and fresh ideas for reaching students in the classroom. Be sure to check out The Captivating Teacher Manifesto.</p><p style=\"margin-bottom: 1.25em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: &quot;droid serif&quot;; vertical-align: baseline; text-rendering: optimizelegibility;\">3.&nbsp;<a href=\"http://www.principalspage.com/theblog/\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; color: rgb(201, 18, 18);\">Principals Page</a></p><p style=\"margin-bottom: 1.25em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: &quot;droid serif&quot;; vertical-align: baseline; text-rendering: optimizelegibility;\">A blog centered on school administration issues. In addition to personal anecdotes, tips, and education philosophy, he writes various articles for other websites that you can find on his site.</p></div></div>', 'signup cover.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `sno` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`sno`, `title`, `description`, `date`, `image`) VALUES
(1, 'match', 'today\'s match', '02/27/2019', '453002.JPG'),
(2, 'dfsd', 'hjbhhhjajhskjashdkj  adjad ad asd  da d  dsa da d as d dsadc csa c  c acc  ac s c cas c a cs', '01/27/2019', 'maxresdefault.jpg'),
(3, 'dfsd', 'hjbhhhjajhskjashdkj  adjad ad asd  da d  dsa da d as d dsadc csa c  c acc  ac s c cas c a cs', '01/27/2019', 'maxresdefault.jpg'),
(4, 'dfsd', 'hjbhhhjajhskjashdkj  adjad ad asd  da d  dsa da d as d dsadc csa c  c acc  ac s c cas c a cs', '01/27/2019', 'maxresdefault.jpg'),
(5, 'match', 'today\'s match', '02/27/2019', '453002.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `fundrisersdetails`
--

CREATE TABLE `fundrisersdetails` (
  `sno` bigint(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ContactNo` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fundrisersdetails`
--

INSERT INTO `fundrisersdetails` (`sno`, `Name`, `email`, `ContactNo`, `Address`, `status`, `password`) VALUES
(1, 'rajesh', 'raj@gmail.com', '45466', 'LALA KA BAZAR, CHOBEY KI GALI, MANIK NIWAS LASHKAR', 'Active', '111'),
(2, 'shivam', 'abc@gmail.com', '875884555', 'gwalior', '', '111222');

--
-- Triggers `fundrisersdetails`
--
DELIMITER $$
CREATE TRIGGER `FundRiserToUserIdManager` AFTER INSERT ON `fundrisersdetails` FOR EACH ROW INSERT into useridmanager (sno,id,user_type) VALUES (null,NEW.email,'FundRiser')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `linkmanager`
--

CREATE TABLE `linkmanager` (
  `sno` int(255) NOT NULL,
  `linkname` varchar(225) NOT NULL,
  `link` varchar(225) NOT NULL,
  `linkgroup` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `ismainmenu` varchar(225) NOT NULL,
  `scope` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `linkmanager`
--

INSERT INTO `linkmanager` (`sno`, `linkname`, `link`, `linkgroup`, `status`, `ismainmenu`, `scope`) VALUES
(1, 'Dashboard', 'dashboard.php', 'Dashboard', 'ACTIVE', 'YES', 'mainsite'),
(2, 'Needy Persons', 'display_person.php', 'Needy Person', 'ACTIVE', 'YES', 'mainsite'),
(3, 'Gallery', 'add_our_gallery.php', 'Gallery', 'ACTIVE', 'YES', 'mainsite'),
(4, 'Sponsors', 'add_our_sponsors.php', 'Sponsors', 'ACTIVE', 'YES', 'mainsite'),
(5, 'Add Says', 'add_says.php', 'Master', 'ACTIVE', 'YES', 'mainsite'),
(6, 'Add Slider', 'add_slider.php', 'Master', 'ACTIVE', 'YES', 'mainsite'),
(7, 'NGo', 'display_ngo_details.php', 'NGO', 'ACTIVE', 'YES', 'mainsite'),
(8, 'Fundrisers', 'display_fundrisers.php', 'Fundrisers', 'ACTIVE', 'YES', 'mainsite'),
(9, 'Social Activist', 'display_social_activists.php', 'Social Activist', 'ACTIVE', 'YES', 'mainsite'),
(10, 'Patient Detail', 'homecontent.php', 'Patient Detail', 'ACTIVE', 'YES', 'mainsite'),
(11, 'Insert Helpus', 'insert_helpus.php', 'Master', 'ACTIVE', 'YES', 'mainsite'),
(12, 'Blog', 'add_blog.php', 'Blog', 'ACTIVE', 'YES', 'mainsite'),
(13, 'Add Event', 'add_event.php', 'Event', 'ACTIVE', 'YES', 'mainsite'),
(14, 'Show Blogs', 'show_details.php', 'Blog', 'ACTIVE', 'YES', 'mainsite'),
(15, 'Education', 'browsefundrisers.php?id=education', 'Browse Fundrisers', 'ACTIVE', 'YES', 'mainsite'),
(16, 'Food', 'browsefundrisers.php?id=food', 'Browse Fundrisers', 'ACTIVE', 'YES', 'mainsite'),
(17, 'Water', 'browsefundrisers.php?id=water', 'Browse Fundrisers', 'ACTIVE', 'YES', 'mainsite'),
(18, 'Sports', 'browsefundrisers.php?id=sports', 'Browse Fundrisers', 'ACTIVE', 'YES', 'mainsite'),
(19, 'Children', 'browsefundrisers.php?id=children', 'Browse Fundrisers', 'ACTIVE', 'YES', 'mainsite'),
(20, 'Community', 'browsefundrisers.php?id=community', 'Browse Fundrisers', 'ACTIVE', 'YES', 'mainsite'),
(21, 'Creativity', 'browsefundrisers.php?id=creativity', 'Browse Fundrisers', 'ACTIVE', 'YES', 'mainsite'),
(22, 'Health', 'browsefundrisers.php?id=health', 'Browse Fundrisers', 'ACTIVE', 'YES', 'mainsite');

-- --------------------------------------------------------

--
-- Table structure for table `needypersondetails`
--

CREATE TABLE `needypersondetails` (
  `sno` bigint(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `InitialAmount` varchar(255) NOT NULL,
  `ContactNo` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Tital` varchar(255) NOT NULL,
  `NeedFor` varchar(255) NOT NULL,
  `idproof` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `medicalinvoice` int(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `needypersondetails`
--

INSERT INTO `needypersondetails` (`sno`, `Name`, `InitialAmount`, `ContactNo`, `Address`, `Tital`, `NeedFor`, `idproof`, `photo`, `medicalinvoice`, `description`) VALUES
(1, 'raju shrivastava', '45000', '546565464', 'alkfsldmf ldjfljlrv', 'help raju to fight blood cancer', 'Health', '1207336267_charmander[1].gif', 'Dragon ball gt goku10.gif', 0, 'Lorem ipsum dolor sit amet, consectetur adipi elit. Cras mollis ligula mauris, vitae porttitor nunc maximus Integer fringilla place acLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mauris, vitae porttitor nunc maximus a. Integer fringilla p'),
(3, 'shivam', '100000', '4545455454', 'jhansi', 'help raju to fight blood cancer', 'Education', 'couple-3064048__340.jpg', 'maxresdefault.jpg', 0, 'Lorem ipsum dolor sit amet, consectetur adipi elit. Cras mollis ligula mauris, vitae porttitor nunc maximus Integer fringilla place acLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mauris, vitae porttitor nunc maximus a. Integer fringilla p'),
(5, 'Neeraj sharma', '50000', '7898946545498', 'chawdi bazar', 'help raju to fight blood cancer', 'Education', '', 'EiffelTw.jpg', 0, 'Lorem ipsum dolor sit amet, consectetur adipi elit. Cras mollis ligula mauris, vitae porttitor nunc maximus Integer fringilla place acLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mauris, vitae porttitor nunc maximus a. Integer fringilla p'),
(6, 'chetan', '50000', '7898946545498', 'chawdi bazar', 'help raju to fight blood cancer', 'Sports', '', 'EiffelTw.jpg', 0, 'Lorem ipsum dolor sit amet, consectetur adipi elit. Cras mollis ligula mauris, vitae porttitor nunc maximus Integer fringilla place acLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mauris, vitae porttitor nunc maximus a. Integer fringilla p'),
(7, 'Rishav', '100000', '4545455454', 'jhansi', 'help raju to fight blood cancer', 'Food', 'couple-3064048__340.jpg', 'maxresdefault.jpg', 0, 'Lorem ipsum dolor sit amet, consectetur adipi elit. Cras mollis ligula mauris, vitae porttitor nunc maximus Integer fringilla place acLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mauris, vitae porttitor nunc maximus a. Integer fringilla p'),
(8, 'Akshay', '1000000', '65465321', 'Agra', 'help raju to fight blood cancer', 'Sports', '', 'a.jpg', 0, 'kdkbkhg hjfdlalkj kjfkajlk'),
(9, 'Akshay', '1000000', '65465321', 'Agra', 'help raju to fight blood cancer', 'Education', '', 'a.jpg', 0, 'kdkbkhg hjfdlalkj kjfkajlk');

-- --------------------------------------------------------

--
-- Table structure for table `ngodetails`
--

CREATE TABLE `ngodetails` (
  `sno` bigint(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ContactNo` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngodetails`
--

INSERT INTO `ngodetails` (`sno`, `Name`, `email`, `password`, `ContactNo`, `Address`, `status`) VALUES
(1, 'ngo1', 'ngo1@gmail.com', '123456', '8758845', 'jhansi', ''),
(2, 'demo', 'demo1@gmail.com', '123456', '123321312', 'dfdsds', ''),
(6, 'om', 'om@gmail.com', '123456', '572973298', 'Gwalior', ''),
(7, 'shivam', 'abc1@gmail.com', '111222', '5644545', 'gwalior', '');

--
-- Triggers `ngodetails`
--
DELIMITER $$
CREATE TRIGGER `ngoToUserIdManager` AFTER INSERT ON `ngodetails` FOR EACH ROW INSERT into useridmanager (sno,id,user_type) VALUES (null,NEW.email,'NGO')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `Pdetailconent`
--

CREATE TABLE `Pdetailconent` (
  `sno` int(255) NOT NULL,
  `personid` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Pdetailconent`
--

INSERT INTO `Pdetailconent` (`sno`, `personid`, `img`, `text`) VALUES
(1, '1', '<p><img src=\"http://192.168.1.222/cf/croudfunding/img/event/event-one.png\" alt=\"\"></p>', '<p>\r\n                                            </p><div class=\"event-time-and-place\">\r\n                                                <span class=\"ev-time\">  10:00 - 05:00</span>\r\n                                                <span class=\"ev-place\">  New Jorgia</span>\r\n                                            </div><p>\r\n                                            </p><h3><a href=\"http://192.168.1.222/cf/croudfunding/event.php#\">EVENT TITLE GOES HERE</a></h3><p><a href=\"http://192.168.1.222/cf/croudfunding/event.php#\"><br></a></p><p>Lorem Ipsum is simply \r\ndummy text of the printing and typesetting industry. Lorem Ipsum has \r\nbeen the industry\'s standard dummy text ever since the 1500s, when an \r\nunknown printer took a galley of type and scrambled it to make a type \r\nspecimen book. It has survived not only five centuries, but also the \r\nleap into electronic typesetting, remaining essentially unchanged. It \r\nwas popularised in the 1960s with the release of Letraset sheets \r\ncontaining Lorem Ipsum passages, and more recently with desktop \r\npublishing software like Aldus PageMaker including versions of Lorem \r\nIpsum. It is a long established fact that a reader will be distracted by\r\n the readable content of a page when looking at its layout. </p><p><a href=\"http://192.168.1.222/cf/croudfunding/event.php#\"><br></a><div class=\"blog-pagination pull-left\"><nav>\r\n                                </nav>\r\n                            </div>\r\n                        \r\n                    </p>'),
(3, '3', 'video.mp4', '<p>\r\n                                            </p><div class=\"event-time-and-place\">\r\n                                                <span class=\"ev-time\">  10:00 - 05:00</span>\r\n                                                <span class=\"ev-place\">  New Jorgia</span>\r\n                                            </div><p>\r\n                                            </p><h3><a href=\"http://192.168.1.222/cf/croudfunding/event.php#\">EVENT TITLE GOES HERE</a></h3><p><a href=\"http://192.168.1.222/cf/croudfunding/event.php#\"><br></a></p><p>Lorem Ipsum is simply \r\ndummy text of the printing and typesetting industry. Lorem Ipsum has \r\nbeen the industry\'s standard dummy text ever since the 1500s, when an \r\nunknown printer took a galley of type and scrambled it to make a type \r\nspecimen book. It has survived not only five centuries, but also the \r\nleap into electronic typesetting, remaining essentially unchanged. It \r\nwas popularised in the 1960s with the release of Letraset sheets \r\ncontaining Lorem Ipsum passages, and more recently with desktop \r\npublishing software like Aldus PageMaker including versions of Lorem \r\nIpsum. It is a long established fact that a reader will be distracted by\r\n the readable content of a page when looking at its layout. </p><p><a href=\"http://192.168.1.222/cf/croudfunding/event.php#\"><br></a><div class=\"blog-pagination pull-left\"><nav>\r\n                                </nav>\r\n                            </div>\r\n                        \r\n                    </p>');

-- --------------------------------------------------------

--
-- Table structure for table `socialactivist`
--

CREATE TABLE `socialactivist` (
  `sno` bigint(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ContactNo` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `socialactivist`
--

INSERT INTO `socialactivist` (`sno`, `Name`, `email`, `ContactNo`, `Address`, `password`, `status`) VALUES
(1, 'rajat chaurasia', 'raj@gmail.com', '4984549465', 'alkfsldmf ldjfljlrv', '123456', ''),
(2, 'jatin', 'jackson@gmail.com', '6576546546', 'gwalior', '111111', '');

--
-- Triggers `socialactivist`
--
DELIMITER $$
CREATE TRIGGER `SocialActivistToUserIdManager` AFTER INSERT ON `socialactivist` FOR EACH ROW INSERT into useridmanager (sno,id,user_type) VALUES (null,NEW.email,'SocialActivist')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `useridmanager`
--

CREATE TABLE `useridmanager` (
  `sno` bigint(20) NOT NULL,
  `id` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `login__status` varchar(255) NOT NULL,
  `last_login` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useridmanager`
--

INSERT INTO `useridmanager` (`sno`, `id`, `user_type`, `login__status`, `last_login`) VALUES
(1, '1', 'admin', '', ''),
(2, 'omkeshg51@gmail.com', 'NGO', '', ''),
(3, 'omkeshg51@gmail.com', 'NGO', '', ''),
(4, 'omkeshg51@gmail.com', 'SocialActivist', '', ''),
(5, 'omkeshg51@gmail.com', 'SocialActivist', '', ''),
(6, 'omkeshg51@gmail.com', 'SocialActivist', '', ''),
(7, 'omkeshg51@gmail.com', 'SocialActivist', '', ''),
(8, 'omkeshg51@gmail.com', 'SocialActivist', '', ''),
(9, 'raj@gmail.com', 'FundRiser', '', ''),
(10, 'ngo1@gmail.com', 'NGO', '', ''),
(11, 'demo1@gmail.com', 'NGO', '', ''),
(12, 'om@gmail.com', 'NGO', '', ''),
(13, 'omkesh@gmail.com', 'NGO', '', ''),
(14, 'omkesh@gmail.com', 'NGO', '', ''),
(15, 'om@gmail.com', 'NGO', '', ''),
(16, '1@gmail.com', 'NGO', '', ''),
(17, 's@ghf.c', 'NGO', '', ''),
(18, 'h@gmai.com', 'NGO', '', ''),
(19, '1@gma.com', 'NGO', '', ''),
(20, 'jackson@gmail.com', 'NGO', '', ''),
(21, 'omkeshg51@gmail.com', 'FundRiser', '', ''),
(22, 'raj@gmail.com', 'SocialActivist', '', ''),
(23, 'abc@gmail.com', 'FundRiser', '', ''),
(24, 'abc1@gmail.com', 'NGO', '', ''),
(25, 'jackson@gmail.com', 'SocialActivist', '', ''),
(26, 'omkeshg51@gmail.com', 'FundRiser', '', ''),
(27, 'omkeshg51@gmail.com', 'FundRiser', '', ''),
(28, 's@ghf.c', 'NGO', '', ''),
(29, 's12@ghf.c', 'SocialActivist', '', ''),
(30, 's22@ghf.c', 'FundRiser', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` bigint(20) NOT NULL,
  `username` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `name`, `password`, `status`) VALUES
(1, 'admin', 'admin', '111222', 'Active');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `userstoUserIdManager` AFTER INSERT ON `users` FOR EACH ROW INSERT into useridmanager (sno,id,user_type) VALUES (null,NEW.sno,'admin')
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `fundrisersdetails`
--
ALTER TABLE `fundrisersdetails`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `linkmanager`
--
ALTER TABLE `linkmanager`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `needypersondetails`
--
ALTER TABLE `needypersondetails`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `ngodetails`
--
ALTER TABLE `ngodetails`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `Pdetailconent`
--
ALTER TABLE `Pdetailconent`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `socialactivist`
--
ALTER TABLE `socialactivist`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `useridmanager`
--
ALTER TABLE `useridmanager`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access`
--
ALTER TABLE `access`
  MODIFY `sno` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fundrisersdetails`
--
ALTER TABLE `fundrisersdetails`
  MODIFY `sno` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `linkmanager`
--
ALTER TABLE `linkmanager`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `needypersondetails`
--
ALTER TABLE `needypersondetails`
  MODIFY `sno` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ngodetails`
--
ALTER TABLE `ngodetails`
  MODIFY `sno` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Pdetailconent`
--
ALTER TABLE `Pdetailconent`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `socialactivist`
--
ALTER TABLE `socialactivist`
  MODIFY `sno` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `useridmanager`
--
ALTER TABLE `useridmanager`
  MODIFY `sno` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
