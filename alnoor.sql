-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `about`;
CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about` text NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `about` (`id`, `about`, `updated_at`) VALUES
(0,	'<div class=\"about-description mb-lg-5\">\r\n<p>Founded in 2005, Al Noor Garments is a full line manufacturer and supplier of all types of garment specializing in Thobes , Abayas and Baju Koko. Since setting up the factories, the founding father-son duo AbdulKadar and Khalid along with the assistance of Undang have invested all their time and effort in bringing the latest technologies to deliver outstanding products. With two fully equipped and running factories and over 1,000 employees Al Noor produces and ships garments all over the world.</p>\r\n</div>\r\n<div class=\"quote\">\r\n<h5>“ Zero waste manufacturing and inventing new products from recycling non valued waste materials to save our Just One Earth ”</h5>\r\n<p>Boediman WIDJAJA - Founder & CEO Alnoor Garments</p>\r\n</div>',	'2019-07-18 12:24:21');

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE `administrator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `administrator` (`id`, `name`, `email`, `password`, `image`, `description`, `role`, `created_at`, `updated_at`) VALUES
(3,	'ADMIN ALNOOR',	'admin@alnoor.com',	'$2y$10$nlPzdYjoLvGp.fznwFslreEzSGqFBpE9vPfRu9VCPaWhZkh.3Rxje',	'1563415655profile.jpg',	'<p>ADMIN ALNOOR</p>',	1,	'2019-07-18 09:07:35',	'2019-07-20 07:35:20');

DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `banner` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(4,	'Alnoor Garments',	'<p>Full line manufacturer and supplier of all types of garment</p>\r\n<p>specializing in Thobes , Abayas and Baju Koko.</p>',	'1563494236banner.jpg',	'2019-07-19 06:57:16',	'2019-07-19 06:59:15'),
(5,	'Alnoor Garments',	'<p>Full line manufacturer and supplier of all types of garment</p>\r\n<p>specializing in Thobes , Abayas and Baju Koko.</p>',	'1563494418banner-2.jpg',	'2019-07-19 07:00:18',	'2019-07-19 07:00:18');

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL COMMENT '1=image,2=video',
  `object` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `caption` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `gallery` (`id`, `type`, `object`, `thumbnail`, `caption`, `created_at`, `updated_at`) VALUES
(11,	1,	'1563495446products.jpg',	'',	'<p>BAJU KOKO</p>',	'2019-07-19 07:17:26',	'2019-07-19 07:17:26'),
(12,	2,	'1563495495VID-20190708-WA0019.mp4',	'',	'<p>TEST VIDEO</p>',	'2019-07-19 07:18:15',	'2019-07-19 07:18:15');

DROP TABLE IF EXISTS `information`;
CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `tagline` text NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `gplus` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `phone_one` varchar(255) NOT NULL,
  `phone_two` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `maps` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `information` (`id`, `tagline`, `facebook`, `twitter`, `gplus`, `instagram`, `phone_one`, `phone_two`, `fax`, `email`, `maps`, `logo`, `updated_at`) VALUES
(0,	'<p>Al Noor Garments is a full line manufacturer and supplier of all types of garment specializing in Thobes , Abayas and Baju Koko.</p>',	'https://www.facebook.com',	'https://www.twitter.com',	'https://www.gplus.com',	'https://www.instagram.com',	'+62 21 2278 5123',	'+62 816 930 800',	'+629 1028310283021',	'support@alnoorgarments.com',	'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.350666973791!2d113.19122503727927!3d-7.752581294990548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7ad8993349f1b:0x7c634f536a317b0b!2sUD+Karya+Murni!5e0!3m2!1sen!2sid!4v1563379208445!5m2!1sen!2sid',	'1563580280DefaultLogo.png',	'2019-07-20 06:51:20');

DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `location` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `product` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(7,	'BAJU KOKO',	'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque in obcaecati exercitationem soluta fugit repellat, voluptate unde consequatur nulla, incidunt excepturi repudiandae? Atque aliquam eaque fuga, blanditiis beatae praesentium quas laboriosam earum voluptatibus necessitatibus illo tempore.</p>',	'1563494970products.jpg',	'2019-07-19 07:09:30',	'2019-07-19 10:54:52'),
(8,	'THOBES',	'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque in obcaecati exercitationem soluta fugit repellat, voluptate unde consequatur nulla, incidunt excepturi repudiandae? Atque aliquam eaque fuga, blanditiis beatae praesentium quas laboriosam earum voluptatibus necessitatibus illo tempore.</p>',	'1563495004products-2.jpg',	'2019-07-19 07:10:04',	'2019-07-19 10:54:57'),
(9,	'ABAYAS',	'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque in obcaecati exercitationem soluta fugit repellat, voluptate unde consequatur nulla, incidunt excepturi repudiandae? Atque aliquam eaque fuga, blanditiis beatae praesentium quas laboriosam earum voluptatibus necessitatibus illo tempore.</p>',	'1563495055products-3.jpg',	'2019-07-19 07:10:55',	'2019-07-19 10:55:01'),
(10,	'DENIM',	'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque in obcaecati exercitationem soluta fugit repellat, voluptate unde consequatur nulla, incidunt excepturi repudiandae? Atque aliquam eaque fuga, blanditiis beatae praesentium quas laboriosam earum voluptatibus necessitatibus illo tempore.</p>',	'1563495082products-4.jpg',	'2019-07-19 07:11:22',	'2019-07-19 10:55:05'),
(11,	'UNIFORM',	'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque in obcaecati exercitationem soluta fugit repellat, voluptate unde consequatur nulla, incidunt excepturi repudiandae? Atque aliquam eaque fuga, blanditiis beatae praesentium quas laboriosam earum voluptatibus necessitatibus illo tempore.</p>',	'1563495096products-5.jpg',	'2019-07-19 07:11:36',	'2019-07-19 10:55:09');

DROP TABLE IF EXISTS `service`;
CREATE TABLE `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `service` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(13,	'Sourcing all materials, fabrics and accessories',	'<p>With thorough knowledge of the fabric industry and good relationships with the vendors Al Noor sources and gathers top class raw materials for production.</p>',	'1563509790sourcing.jpg',	'2019-07-19 11:16:30',	'2019-07-19 11:16:30'),
(14,	'Sampling',	'<p>A dedicated sampling department at Al Noor uses latest technology such as computerized pattern and marker system and other sewing methods to create samples for clients.</p>',	'1563509813sampling.jpg',	'2019-07-19 11:16:53',	'2019-07-19 11:16:53'),
(15,	'Cutting',	'<p>After thorough fabric inspection AL Noor can cut thousands of units per style making sure the yield of the fabric is fully utilized and no wastage is done.</p>',	'1563509837cutting.jpg',	'2019-07-19 11:17:17',	'2019-07-19 11:17:17'),
(16,	'Mass Manufacturing and Quality Control',	'<p>With over 1,000 dedicated employees, Al Noor strives to produce the best quality of products with 100% inspection in all lines of production.</p>',	'1563509856quality-control.jpg',	'2019-07-19 11:17:36',	'2019-07-19 11:17:36'),
(17,	'Packing',	'<p>Once the garment is ready it is ironed and carefully folded to be boxed ready for delivery.</p>',	'1563509874packing.jpg',	'2019-07-19 11:17:54',	'2019-07-19 11:17:54');

DROP TABLE IF EXISTS `service_scheme`;
CREATE TABLE `service_scheme` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `service_scheme` (`id`, `image`, `updated_at`) VALUES
(0,	'1563576188services.jpg',	'2019-07-20 05:43:09');

DROP TABLE IF EXISTS `testimonial`;
CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `testimonial` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `testimonial` (`id`, `name`, `profession`, `testimonial`, `image`, `created_at`, `updated_at`) VALUES
(8,	'Lurch Schpellchek',	'Singapore LTD Buyer',	'<p>What a load of rubbish bits and bobs pear shaped owt to do with me bubble and squeak<br>jolly good morish tinkety tonk old fruit, car boot my good sir buggered plastered cheeky David,<br>haggle young delinquent say so I said bite your arm off easy peasy. Skive off it\'s all gone to pot<br>buggered.</p>',	'1563497082profile.jpg',	'2019-07-19 07:44:42',	'2019-07-19 07:48:36'),
(9,	'Lurch Schpellchek 2',	'Thailand LTD Buyer',	'<p>What a load of rubbish bits and bobs pear shaped owt to do with me bubble and squeak<br>jolly good morish tinkety tonk old fruit, car boot my good sir buggered plastered cheeky David,<br>haggle young delinquent say so I said bite your arm off easy peasy. Skive off it\'s all gone to pot<br>buggered.</p>',	'1563497082profile.jpg',	'2019-07-19 07:44:42',	'2019-07-19 08:08:34');

-- 2019-07-20 00:36:32
