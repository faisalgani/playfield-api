<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsertData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $procedure = "DROP TABLE IF EXISTS `about_apps`;
        CREATE TABLE `about_apps`  (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `title` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `cover` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `updated_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `type` tinyint(1) NULL DEFAULT NULL,
          `status` tinyint(1) NULL DEFAULT NULL,
          PRIMARY KEY (`id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of about_apps
        -- ----------------------------
        INSERT INTO `about_apps` VALUES (1, 'Who We Are', 'Sociis tincidunt ornare sed sed enim. Aliquam et massa, cursus nunc. Ultricies scelerisque quis id nulla feugiat tristique nec vulputate. Arcu vulputate at tortor auctor augue tortor nibh quis. Mauris, neque, nec malesuada lectus urna lobortis sed et sed. Eu faucibus facilisis at tortor velit sapien adipiscing ultricies. Lacus et facilisis dui integer odio adipiscing. Malesuada iaculis sit dolor ut molestie scelerisque. Quisque tortor, cursus mattis eget amet, enim vestibulum augue. Faucibus vitae placerat consequat praesent velit ullamcorper.\r\n\r\nVarius egestas mattis sit hendrerit. Amet tristique vitae adipiscing amet. Erat massa viverra nec quis. Tempus phasellus neque, eu, diam, porttitor ullamcorper nisl. Libero id adipiscing dictum aliquam facilisi. Condimentum scelerisque eu vitae ullamcorper mauris cras. Congue est vel, diam massa faucibus amet, nunc at pretium.', NULL, NULL, NULL, '2023-03-11 12:55:05', NULL, 1, 1);
        INSERT INTO `about_apps` VALUES (3, 'Privacy Policy on App Usage', 'Sociis tincidunt ornare sed sed enim. Aliquam et massa, cursus nunc. Ultricies scelerisque quis id nulla feugiat tristique nec vulputate. Arcu vulputate at tortor auctor augue tortor nibh quis. Mauris, neque, nec malesuada lectus urna lobortis sed et sed. Eu faucibus facilisis at tortor velit sapien adipiscing ultricies. Lacus et facilisis dui integer odio adipiscing. Malesuada iaculis sit dolor ut molestie scelerisque. Quisque tortor, cursus mattis eget amet, enim vestibulum augue. Faucibus vitae placerat consequat praesent velit ullamcorper.\r\n\r\nVarius egestas mattis sit hendrerit. Amet tristique vitae adipiscing amet. Erat massa viverra nec quis. Tempus phasellus neque, eu, diam, porttitor ullamcorper nisl. Libero id adipiscing dictum aliquam facilisi. Condimentum scelerisque eu vitae ullamcorper mauris cras. Congue est vel, diam massa faucibus amet, nunc at pretium.', NULL, NULL, NULL, '2023-03-11 12:35:20', NULL, 3, 1);
        INSERT INTO `about_apps` VALUES (5, 'tes', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis scelerisque purus dapibus iaculis. Phasellus sed dictum augue, aliquet consectetur urna. Morbi fringilla elementum facilisis. Proin venenatis, ante nec bibendum scelerisque, nulla purus venenatis ante, convallis tristique risus ipsum quis odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rutrum dolor id est pretium faucibus. Duis eu varius lorem. Fusce egestas enim id semper sodales.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Vestibulum et fermentum lectus. Nulla volutpat malesuada lorem, vitae mollis odio eleifend vel. Quisque in fermentum velit. Curabitur vulputate metus rutrum nisl finibus, et dictum metus pulvinar. Phasellus at consectetur tellus. Sed purus est, feugiat sit amet nibh et, consectetur auctor orci. Aliquam erat volutpat. Morbi eu massa finibus, bibendum urna nec, faucibus sapien. Vestibulum fringilla tempus quam, non molestie velit egestas ac. Morbi quis eleifend arcu.</p>', NULL, '2023-03-11 13:03:51', 'Super  admin', '2023-03-11 13:03:51', NULL, 2, 1);
        
        -- ----------------------------
        -- Table structure for auth
        -- ----------------------------
        DROP TABLE IF EXISTS `auth`;
        CREATE TABLE `auth`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
          `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
          `active` tinyint(1) NOT NULL DEFAULT 0,
          `last_login` datetime NULL DEFAULT NULL,
          `created_at` datetime NOT NULL DEFAULT '2022-08-18 03:35:49',
          `updated_at` datetime NOT NULL DEFAULT '2022-08-18 03:35:49',
          `deleted_at` datetime NULL DEFAULT NULL,
          `id_user` int(11) NULL DEFAULT NULL,
          PRIMARY KEY (`id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of auth
        -- ----------------------------
        INSERT INTO `auth` VALUES (1, 'admin@mail.com', '$2y$10$.9WpUCD7eAEyFNy1fXUWK.zhxjKI1ScJYf/L/2Li.jzO2A.FwJHDm', 1, NULL, '2022-08-18 03:35:49', '2022-08-18 03:35:49', NULL, 1);
        
        -- ----------------------------
        -- Table structure for bussiness_references
        -- ----------------------------
        DROP TABLE IF EXISTS `bussiness_references`;
        CREATE TABLE `bussiness_references`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `name` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `company` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `profile` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `email` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `address` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `website` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `phone_number` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `cover_image` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `updated_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          PRIMARY KEY (`id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of bussiness_references
        -- ----------------------------
        INSERT INTO `bussiness_references` VALUES (1, 'Mattew', '', 'Tempor phasellus ultrices magna aliquam accumsan. Ullamcorper nulla cursus commodo lobortis ipsum enim inter ac.', 'mattew@company.com', NULL, NULL, '082121000943', NULL, NULL, NULL, NULL, NULL);
        INSERT INTO `bussiness_references` VALUES (2, 'Alan', '', 'Tempor phasellus ultrices magna aliquam accumsan. Ullamcorper nulla cursus commodo lobortis ipsum enim inter ac.', 'alan@company.com', NULL, NULL, '082121000944', NULL, NULL, NULL, NULL, NULL);
        INSERT INTO `bussiness_references` VALUES (3, 'Steve', '', 'Tempor phasellus ultrices magna aliquam accumsan. Ullamcorper nulla cursus commodo lobortis ipsum enim inter ac.', 'steve@company.com', NULL, NULL, '082121000945', NULL, NULL, NULL, NULL, NULL);
        INSERT INTO `bussiness_references` VALUES (4, 'test', 'company test', NULL, 'test_email@mailsac.com', NULL, 'www.test_company.com', '082121000945', NULL, '2023-02-27 07:50:50', 'John Cena', NULL, NULL);
        INSERT INTO `bussiness_references` VALUES (5, 'test', 'company test', NULL, 'test_email@mailsac.com', NULL, 'www.test_company.com', '082121000945', NULL, '2023-02-27 07:51:03', 'John Cena', NULL, NULL);
        
        -- ----------------------------
        -- Table structure for class
        -- ----------------------------
        DROP TABLE IF EXISTS `class`;
        CREATE TABLE `class`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `category_id` int(10) NOT NULL,
          `class_type` tinyint(1) NULL DEFAULT NULL,
          `class_name` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `start_time` datetime NULL DEFAULT NULL,
          `cover_image` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `location` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `capacity` int(10) NULL DEFAULT NULL,
          `keyword` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `updated_by` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `end_time` datetime NULL DEFAULT NULL,
          `phone_number` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          PRIMARY KEY (`id`, `category_id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of class
        -- ----------------------------
        INSERT INTO `class` VALUES (1, 1, 1, 'Weightlift Class', '2023-02-27 14:05:38', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', NULL, 10, 'weight,strength,body builder', NULL, NULL, NULL, NULL, '2023-02-27 14:05:38', NULL);
        INSERT INTO `class` VALUES (2, 1, 1, 'Bodyweight Training', '2023-02-27 15:06:25', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', NULL, 11, 'weight,strength,body builder', NULL, NULL, NULL, NULL, '2023-02-27 14:05:38', NULL);
        INSERT INTO `class` VALUES (3, 1, 1, 'Class 3', '2023-02-27 16:06:51', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', NULL, 5, 'dynamic', NULL, NULL, NULL, NULL, '2023-02-27 14:05:38', NULL);
        INSERT INTO `class` VALUES (4, 2, 1, 'Lorem ipsum ads 1', '2023-02-27 12:07:11', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', NULL, 20, 'dynamic,relax,healty', NULL, NULL, NULL, NULL, '2023-02-27 14:05:38', NULL);
        INSERT INTO `class` VALUES (5, 2, 1, 'Lorem ipsum ads 2', '2023-02-27 13:07:31', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', NULL, 10, 'dynamic,relax,healty', NULL, NULL, NULL, NULL, '2023-02-27 14:05:38', NULL);
        INSERT INTO `class` VALUES (6, 3, 1, 'Lorem ipsum ads 2', '2023-02-27 13:07:31', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', NULL, 10, 'dynamic,relax,healty', NULL, NULL, NULL, NULL, '2023-02-27 14:05:38', NULL);
        INSERT INTO `class` VALUES (7, 4, 2, 'Class Private 1', '2023-02-27 13:07:31', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', NULL, 3, 'strength,dynamic, relax,healty,', NULL, NULL, NULL, NULL, '2023-02-27 14:05:38', NULL);
        INSERT INTO `class` VALUES (8, 5, 2, 'Class Private 3', '2023-02-27 13:07:31', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', NULL, 5, 'strength,dynamic, relax,healty,', NULL, NULL, NULL, NULL, '2023-02-27 14:05:38', NULL);
        INSERT INTO `class` VALUES (9, 5, 2, 'Weightlift Private Class', '2023-03-02 13:07:31', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', NULL, 5, 'weight,strength,body builder', NULL, NULL, NULL, NULL, '2023-03-02 15:07:31', NULL);
        INSERT INTO `class` VALUES (10, 5, 2, 'Bodyweight Private Class', '2023-03-02 16:07:31', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', NULL, 5, 'weight,strength,body builder', NULL, NULL, NULL, NULL, '2023-03-02 17:07:31', NULL);
        
        -- ----------------------------
        -- Table structure for class_booking
        -- ----------------------------
        DROP TABLE IF EXISTS `class_booking`;
        CREATE TABLE `class_booking`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `class_id` int(10) NOT NULL,
          `member_id` int(10) NOT NULL,
          `booking_code` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `time_attended` datetime NULL DEFAULT NULL,
          `status` tinyint(1) NULL DEFAULT NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `updated_by` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          PRIMARY KEY (`id`, `class_id`, `member_id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of class_booking
        -- ----------------------------
        INSERT INTO `class_booking` VALUES (1, 1, 1, 'GroupClass0227080700001', NULL, 1, '2023-02-27 08:07:40', 'John Cena', NULL, NULL);
        
        -- ----------------------------
        -- Table structure for class_category
        -- ----------------------------
        DROP TABLE IF EXISTS `class_category`;
        CREATE TABLE `class_category`  (
          `id` int(10) NOT NULL AUTO_INCREMENT,
          `class_category` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `order` int(10) NULL DEFAULT NULL,
          `is_private` tinyint(1) NULL DEFAULT NULL,
          `active` tinyint(1) NULL DEFAULT NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_by` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          PRIMARY KEY (`id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of class_category
        -- ----------------------------
        INSERT INTO `class_category` VALUES (1, 'Cardio', 1, 0, 1, NULL, NULL, NULL, NULL);
        INSERT INTO `class_category` VALUES (2, 'Resistance Class', 2, 0, 1, NULL, NULL, NULL, NULL);
        INSERT INTO `class_category` VALUES (3, 'This Week', 3, 0, 1, NULL, NULL, NULL, NULL);
        INSERT INTO `class_category` VALUES (4, 'Cardio Private', 1, 1, 1, NULL, NULL, NULL, NULL);
        INSERT INTO `class_category` VALUES (5, 'Zumba Private', 2, 1, 1, NULL, NULL, NULL, NULL);
        
        -- ----------------------------
        -- Table structure for class_gallery
        -- ----------------------------
        DROP TABLE IF EXISTS `class_gallery`;
        CREATE TABLE `class_gallery`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `class_id` int(10) NOT NULL,
          `image` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `video` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `updated_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          PRIMARY KEY (`id`, `class_id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of class_gallery
        -- ----------------------------
        
        -- ----------------------------
        -- Table structure for event
        -- ----------------------------
        DROP TABLE IF EXISTS `event`;
        CREATE TABLE `event`  (
          `id` int(10) NOT NULL AUTO_INCREMENT,
          `name` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
          `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `image` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `event_date` datetime NULL DEFAULT NULL,
          `location` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `contact_number` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `capacity` int(10) NULL DEFAULT NULL,
          `price` int(10) NULL DEFAULT NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          PRIMARY KEY (`id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of event
        -- ----------------------------
        INSERT INTO `event` VALUES (1, 'Annual Playfield Premium Event', 'Vitae sem quis et suspendisse pellentesque cursus iaculis. Magna dui ullamcorper at aliquam eget. Euismod odio amet ornare quis. In eget arcu purus urna netus pellentesque.\r\n\r\nEt mauris nisi feugiat id nunc.', NULL, '2023-02-07 10:29:31', 'The City Ballroom', '08212100943', 200, 500000, NULL, NULL, NULL, NULL);
        INSERT INTO `event` VALUES (2, 'Annual Playfield Premium Event', 'Vitae sem quis et suspendisse pellentesque cursus iaculis. Magna dui ullamcorper at aliquam eget. Euismod odio amet ornare quis. In eget arcu purus urna netus pellentesque.\r\n\r\nEt mauris nisi feugiat id nunc.', NULL, '2023-02-07 10:29:31', 'The City Ballroom', '08212100943', 50, 1000000, NULL, NULL, NULL, NULL);
        INSERT INTO `event` VALUES (3, 'Annual Playfield Premium Event', 'Vitae sem quis et suspendisse pellentesque cursus iaculis. Magna dui ullamcorper at aliquam eget. Euismod odio amet ornare quis. In eget arcu purus urna netus pellentesque.\r\n\r\nEt mauris nisi feugiat id nunc.', NULL, '2023-02-07 10:29:31', 'The City Ballroom', '08212100943', 20, 100000, NULL, NULL, NULL, NULL);
        
        -- ----------------------------
        -- Table structure for event_booked
        -- ----------------------------
        DROP TABLE IF EXISTS `event_booked`;
        CREATE TABLE `event_booked`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `event_id` int(10) NOT NULL,
          `member_id` int(10) NOT NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `updated_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          PRIMARY KEY (`id`, `event_id`, `member_id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of event_booked
        -- ----------------------------
        
        -- ----------------------------
        -- Table structure for event_gallery
        -- ----------------------------
        DROP TABLE IF EXISTS `event_gallery`;
        CREATE TABLE `event_gallery`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `event_id` int(10) NOT NULL,
          `image` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `video` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `updated_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          PRIMARY KEY (`id`, `event_id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of event_gallery
        -- ----------------------------
        
        -- ----------------------------
        -- Table structure for facilities
        -- ----------------------------
        DROP TABLE IF EXISTS `facilities`;
        CREATE TABLE `facilities`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `category_id` int(10) UNSIGNED NOT NULL,
          `name` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `location` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `image` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `video` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `updated_by` datetime NULL DEFAULT NULL,
          PRIMARY KEY (`id`, `category_id`) USING BTREE,
          INDEX `key_category`(`category_id`) USING BTREE,
          CONSTRAINT `key_category` FOREIGN KEY (`category_id`) REFERENCES `facilities_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
        ) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of facilities
        -- ----------------------------
        INSERT INTO `facilities` VALUES (1, 1, 'GYM', '2 Floor', 'Vitae sem quis et suspendisse pellentesque cursus iaculis. Magna dui ullamcorper at aliquam eget. Euismod odio amet ornare quis. In eget arcu purus urna netus pellentesque.\r\nEt mauris nisi feugiat id nunc.', NULL, NULL, NULL, NULL, NULL, NULL);
        INSERT INTO `facilities` VALUES (2, 1, 'Sauna', '2 Floor', 'Vitae sem quis et suspendisse pellentesque cursus iaculis. Magna dui ullamcorper at aliquam eget. Euismod odio amet ornare quis. In eget arcu purus urna netus pellentesque.\r\nEt mauris nisi feugiat id nunc.', NULL, NULL, NULL, NULL, NULL, NULL);
        INSERT INTO `facilities` VALUES (3, 2, 'Lounge', '1 Floor', 'Vitae sem quis et suspendisse pellentesque cursus iaculis. Magna dui ullamcorper at aliquam eget. Euismod odio amet ornare quis. In eget arcu purus urna netus pellentesque.\r\nEt mauris nisi feugiat id nunc.', NULL, NULL, NULL, NULL, NULL, NULL);
        
        -- ----------------------------
        -- Table structure for facilities_category
        -- ----------------------------
        DROP TABLE IF EXISTS `facilities_category`;
        CREATE TABLE `facilities_category`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `category` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `sort_order` int(10) NULL DEFAULT NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `updated_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          PRIMARY KEY (`id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of facilities_category
        -- ----------------------------
        INSERT INTO `facilities_category` VALUES (1, 'Fitness & Health', '<p>Category For Musical Radio</p>', 1, NULL, NULL, NULL, NULL);
        INSERT INTO `facilities_category` VALUES (2, 'Entertainment & Relaxation', '<p>Category For Musical Radio</p>', 2, NULL, NULL, NULL, NULL);
        
        -- ----------------------------
        -- Table structure for failed_jobs
        -- ----------------------------
        DROP TABLE IF EXISTS `failed_jobs`;
        CREATE TABLE `failed_jobs`  (
          `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
          `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
          `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
          `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
          `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
          `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
          `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
          PRIMARY KEY (`id`) USING BTREE,
          UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of failed_jobs
        -- ----------------------------
        
        -- ----------------------------
        -- Table structure for member
        -- ----------------------------
        DROP TABLE IF EXISTS `member`;
        CREATE TABLE `member`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `member_code` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `first_name` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `last_name` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `phone_number` varchar(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `email` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `address` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `profile_picture` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `recommendation` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `updated_by` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `id_business_index` int(10) NULL DEFAULT NULL,
          PRIMARY KEY (`id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of member
        -- ----------------------------
        INSERT INTO `member` VALUES (1, '0001', 'John', 'Cena', '081546995801', 'jonh-cena@mailsac.com', 'Bandung', NULL, 'healty,dynamic', '2023-02-27 13:33:07', NULL, '2023-02-27 07:38:24', 'John Cena', 5);
        
        -- ----------------------------
        -- Table structure for member_recommendation
        -- ----------------------------
        DROP TABLE IF EXISTS `member_recommendation`;
        CREATE TABLE `member_recommendation`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `member_id` int(10) NOT NULL,
          `recommendation` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `updated_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          PRIMARY KEY (`id`, `member_id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of member_recommendation
        -- ----------------------------
        INSERT INTO `member_recommendation` VALUES (1, 1, 'relax', NULL, NULL, NULL, NULL);
        INSERT INTO `member_recommendation` VALUES (2, 1, 'dynamic', NULL, NULL, NULL, NULL);
        
        -- ----------------------------
        -- Table structure for membership
        -- ----------------------------
        DROP TABLE IF EXISTS `membership`;
        CREATE TABLE `membership`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `skin_type` int(10) UNSIGNED NOT NULL,
          `member_id` int(10) UNSIGNED NOT NULL,
          `start_date` datetime NULL DEFAULT NULL,
          `end_date` datetime NULL DEFAULT NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `updated_by` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          PRIMARY KEY (`id`, `skin_type`, `member_id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of membership
        -- ----------------------------
        INSERT INTO `membership` VALUES (1, 1, 1, '2023-02-27 14:20:39', '2024-02-27 14:20:42', NULL, NULL, NULL, NULL);
        
        -- ----------------------------
        -- Table structure for migrations
        -- ----------------------------
        DROP TABLE IF EXISTS `migrations`;
        CREATE TABLE `migrations`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
          `batch` int(11) NOT NULL,
          PRIMARY KEY (`id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of migrations
        -- ----------------------------
        INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
        INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
        INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
        INSERT INTO `migrations` VALUES (4, '2014_10_12_100000_create_password_reset_tokens_table', 2);
        INSERT INTO `migrations` VALUES (5, '2019_12_14_000001_create_personal_access_tokens_table', 2);
        
        -- ----------------------------
        -- Table structure for news
        -- ----------------------------
        DROP TABLE IF EXISTS `news`;
        CREATE TABLE `news`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `category_id` int(10) NOT NULL,
          `is_breaking_news` tinyint(1) NULL DEFAULT NULL,
          `title` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `news` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `image` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `updated_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          PRIMARY KEY (`id`, `category_id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of news
        -- ----------------------------
        INSERT INTO `news` VALUES (1, 1, 1, 'Ipsum Dolot Sit Amet', 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet consectetur adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum[d] exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?  At vero eos et accusamus et iusto odio dignissimo.', NULL, NULL, NULL, NULL, NULL);
        INSERT INTO `news` VALUES (2, 2, 1, 'Lorem2 Ipsum Dolot Sit Amet', 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet consectetur adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum[d] exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?  At vero eos et accusamus et iusto odio dignissimo.', NULL, NULL, NULL, NULL, NULL);
        INSERT INTO `news` VALUES (3, 1, 0, 'Lorem3 Ipsum Dolot Sit Amet', 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet consectetur adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum[d] exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?  At vero eos et accusamus et iusto odio dignissimo.', NULL, NULL, NULL, NULL, NULL);
        INSERT INTO `news` VALUES (4, 1, 0, 'Lorem Ipsum Dolot Sit Amet', 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet consectetur adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum[d] exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?  At vero eos et accusamus et iusto odio dignissimo.', NULL, NULL, NULL, NULL, NULL);
        INSERT INTO `news` VALUES (5, 1, 0, 'Lorem Ipsum Dolot Sit Amet', 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet consectetur adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum[d] exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?  At vero eos et accusamus et iusto odio dignissimo.', NULL, NULL, NULL, NULL, NULL);
        
        -- ----------------------------
        -- Table structure for news_category
        -- ----------------------------
        DROP TABLE IF EXISTS `news_category`;
        CREATE TABLE `news_category`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `category` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `sort_order` int(10) NULL DEFAULT NULL,
          `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `updated_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          PRIMARY KEY (`id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of news_category
        -- ----------------------------
        INSERT INTO `news_category` VALUES (1, 'Popular', 1, NULL, NULL, NULL, NULL, NULL);
        INSERT INTO `news_category` VALUES (2, 'Business', 2, NULL, NULL, NULL, NULL, NULL);
        INSERT INTO `news_category` VALUES (3, 'Lifestyle', 3, NULL, NULL, NULL, NULL, NULL);
        INSERT INTO `news_category` VALUES (4, 'Food', 4, NULL, NULL, NULL, NULL, NULL);
        INSERT INTO `news_category` VALUES (5, 'Politics', 5, NULL, NULL, NULL, NULL, NULL);
        
        -- ----------------------------
        -- Table structure for partner
        -- ----------------------------
        DROP TABLE IF EXISTS `partner`;
        CREATE TABLE `partner`  (
          `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
          `category_id` int(11) UNSIGNED NOT NULL,
          `partner_name` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `partner_logo` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `about` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `active` tinyint(1) NULL DEFAULT NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `updated_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          PRIMARY KEY (`id`) USING BTREE,
          INDEX `partner_category`(`category_id`) USING BTREE,
          CONSTRAINT `partner_category` FOREIGN KEY (`category_id`) REFERENCES `partner_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
        ) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of partner
        -- ----------------------------
        INSERT INTO `partner` VALUES (1, 1, 'Health 1', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', 1, NULL, NULL, NULL, NULL);
        INSERT INTO `partner` VALUES (2, 1, 'Health 2', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', 1, NULL, NULL, NULL, NULL);
        INSERT INTO `partner` VALUES (3, 1, 'Health 3', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', 1, NULL, NULL, NULL, NULL);
        INSERT INTO `partner` VALUES (4, 1, 'Health 4', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', 1, NULL, NULL, NULL, NULL);
        INSERT INTO `partner` VALUES (5, 2, 'Finance 1', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', 1, NULL, NULL, NULL, NULL);
        INSERT INTO `partner` VALUES (6, 2, 'Finance 2', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', 1, NULL, NULL, NULL, NULL);
        INSERT INTO `partner` VALUES (7, 2, 'Finance 3', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', 1, NULL, NULL, NULL, NULL);
        INSERT INTO `partner` VALUES (8, 2, 'Finance 4', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', 1, NULL, NULL, NULL, NULL);
        INSERT INTO `partner` VALUES (9, 3, 'Banking 1', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', 1, NULL, NULL, NULL, NULL);
        INSERT INTO `partner` VALUES (10, 3, 'Banking 2', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', 1, NULL, NULL, NULL, NULL);
        INSERT INTO `partner` VALUES (11, 3, 'Banking 3', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', 1, NULL, NULL, NULL, NULL);
        INSERT INTO `partner` VALUES (12, 3, 'Banking 4', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', 1, NULL, NULL, NULL, NULL);
        INSERT INTO `partner` VALUES (13, 4, 'Branding 1', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', 1, NULL, NULL, NULL, NULL);
        INSERT INTO `partner` VALUES (14, 4, 'Branding 2', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', 1, NULL, NULL, NULL, NULL);
        INSERT INTO `partner` VALUES (15, 4, 'Branding 3', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', 1, NULL, NULL, NULL, NULL);
        INSERT INTO `partner` VALUES (16, 4, 'Branding 4', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', 1, NULL, NULL, NULL, NULL);
        
        -- ----------------------------
        -- Table structure for partner_category
        -- ----------------------------
        DROP TABLE IF EXISTS `partner_category`;
        CREATE TABLE `partner_category`  (
          `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
          `category` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `status` tinyint(1) NULL DEFAULT NULL,
          `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `updated_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          PRIMARY KEY (`id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of partner_category
        -- ----------------------------
        INSERT INTO `partner_category` VALUES (1, 'Health', 1, NULL, NULL, NULL, '2023-03-13 03:14:43', NULL);
        INSERT INTO `partner_category` VALUES (2, 'Finance', 1, NULL, NULL, NULL, NULL, NULL);
        INSERT INTO `partner_category` VALUES (3, 'Banking', 1, NULL, NULL, NULL, NULL, NULL);
        INSERT INTO `partner_category` VALUES (4, 'Branding', 1, NULL, NULL, NULL, NULL, NULL);
        
        -- ----------------------------
        -- Table structure for partner_deals
        -- ----------------------------
        DROP TABLE IF EXISTS `partner_deals`;
        CREATE TABLE `partner_deals`  (
          `id` int(10) NOT NULL,
          `partner_id` int(10) UNSIGNED NOT NULL,
          `promo` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `expired_date` datetime NULL DEFAULT NULL,
          `term` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `active` tinyint(1) NULL DEFAULT NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `updated_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          PRIMARY KEY (`id`, `partner_id`) USING BTREE,
          INDEX `keyPartner`(`partner_id`) USING BTREE,
          CONSTRAINT `keyPartner` FOREIGN KEY (`partner_id`) REFERENCES `partner` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
        ) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of partner_deals
        -- ----------------------------
        INSERT INTO `partner_deals` VALUES (1, 1, '30% Discount on Beverages', '2023-03-31 11:24:54', 'Lorem ipsum dolor sit amet consectetur.\r\nAenean eros neque arcu vulputate adipiscing sed gravida. \r\nIpsum tellus fermentum massa pellentesque vitae lorem. \r\nAliquam laoreet diam aliquet facilisi enim massa nullam id molestie. \r\nTristique amet accumsan id morbi urna eu est.', NULL, NULL, NULL, NULL, NULL);
        INSERT INTO `partner_deals` VALUES (2, 1, '30% Discount on Beverages', '2023-03-30 11:25:30', 'Lorem ipsum dolor sit amet consectetur.\r\nAenean eros neque arcu vulputate adipiscing sed gravida. \r\nIpsum tellus fermentum massa pellentesque vitae lorem. \r\nAliquam laoreet diam aliquet facilisi enim massa nullam id molestie. \r\nTristique amet accumsan id morbi urna eu est.', NULL, NULL, NULL, NULL, NULL);
        INSERT INTO `partner_deals` VALUES (3, 2, '30% Discount on Beverages', '2023-03-30 11:25:30', 'Lorem ipsum dolor sit amet consectetur.\r\nAenean eros neque arcu vulputate adipiscing sed gravida. \r\nIpsum tellus fermentum massa pellentesque vitae lorem. \r\nAliquam laoreet diam aliquet facilisi enim massa nullam id molestie. \r\nTristique amet accumsan id morbi urna eu est.', NULL, NULL, NULL, NULL, NULL);
        INSERT INTO `partner_deals` VALUES (4, 3, '30% Discount on Beverages', '2023-03-30 11:25:30', 'Lorem ipsum dolor sit amet consectetur.\r\nAenean eros neque arcu vulputate adipiscing sed gravida. \r\nIpsum tellus fermentum massa pellentesque vitae lorem. \r\nAliquam laoreet diam aliquet facilisi enim massa nullam id molestie. \r\nTristique amet accumsan id morbi urna eu est.', NULL, NULL, NULL, NULL, NULL);
        INSERT INTO `partner_deals` VALUES (5, 4, '30% Discount on Beverages', '2023-03-30 11:25:30', 'Lorem ipsum dolor sit amet consectetur.\r\nAenean eros neque arcu vulputate adipiscing sed gravida. \r\nIpsum tellus fermentum massa pellentesque vitae lorem. \r\nAliquam laoreet diam aliquet facilisi enim massa nullam id molestie. \r\nTristique amet accumsan id morbi urna eu est.', NULL, NULL, NULL, NULL, NULL);
        INSERT INTO `partner_deals` VALUES (6, 5, '30% Discount on Beverages', '2023-03-30 11:25:30', 'Lorem ipsum dolor sit amet consectetur.\r\nAenean eros neque arcu vulputate adipiscing sed gravida. \r\nIpsum tellus fermentum massa pellentesque vitae lorem. \r\nAliquam laoreet diam aliquet facilisi enim massa nullam id molestie. \r\nTristique amet accumsan id morbi urna eu est.', NULL, NULL, NULL, NULL, NULL);
        
        -- ----------------------------
        -- Table structure for password_reset_tokens
        -- ----------------------------
        DROP TABLE IF EXISTS `password_reset_tokens`;
        CREATE TABLE `password_reset_tokens`  (
          `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
          `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
          `created_at` timestamp NULL DEFAULT NULL,
          PRIMARY KEY (`email`) USING BTREE
        ) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of password_reset_tokens
        -- ----------------------------
        
        -- ----------------------------
        -- Table structure for password_resets
        -- ----------------------------
        DROP TABLE IF EXISTS `password_resets`;
        CREATE TABLE `password_resets`  (
          `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
          `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
          `created_at` timestamp NULL DEFAULT NULL,
          INDEX `password_resets_email_index`(`email`) USING BTREE
        ) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of password_resets
        -- ----------------------------
        
        -- ----------------------------
        -- Table structure for personal_access_tokens
        -- ----------------------------
        DROP TABLE IF EXISTS `personal_access_tokens`;
        CREATE TABLE `personal_access_tokens`  (
          `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
          `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
          `tokenable_id` bigint(20) UNSIGNED NOT NULL,
          `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
          `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
          `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
          `last_used_at` timestamp NULL DEFAULT NULL,
          `expires_at` timestamp NULL DEFAULT NULL,
          `created_at` timestamp NULL DEFAULT NULL,
          `updated_at` timestamp NULL DEFAULT NULL,
          PRIMARY KEY (`id`) USING BTREE,
          UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
          INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of personal_access_tokens
        -- ----------------------------
        
        -- ----------------------------
        -- Table structure for phone_number_service
        -- ----------------------------
        DROP TABLE IF EXISTS `phone_number_service`;
        CREATE TABLE `phone_number_service`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `title` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `phone_number` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `active` tinyint(1) NULL DEFAULT NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `updated_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          PRIMARY KEY (`id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of phone_number_service
        -- ----------------------------
        INSERT INTO `phone_number_service` VALUES (1, 'Customer Service Number', '082121000945', 1, NULL, NULL, NULL, NULL);
        INSERT INTO `phone_number_service` VALUES (2, 'Booked Private Class', '082121000946', 1, NULL, NULL, NULL, NULL);
        
        -- ----------------------------
        -- Table structure for room
        -- ----------------------------
        DROP TABLE IF EXISTS `room`;
        CREATE TABLE `room`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `room_name` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `location` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `cover_image` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `active` tinyint(1) NULL DEFAULT NULL,
          `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `updated_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          PRIMARY KEY (`id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of room
        -- ----------------------------
        INSERT INTO `room` VALUES (1, 'Meeting Room A', '1rd Floor', NULL, 1, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', NULL, NULL, NULL, NULL);
        INSERT INTO `room` VALUES (2, 'Meeting Room B', '2rd Floor', NULL, 1, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', NULL, NULL, NULL, NULL);
        INSERT INTO `room` VALUES (3, 'Karaoke Room', '3rd Floor', NULL, 1, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet gravida diam eu dictum. Duis malesuada a arcu ac accumsan. Proin ultrices nibh ex, finibus sodales eros finibus eu. Nunc id est vitae mauris facilisis hendrerit. Mauris sapien dui, malesuada a sapien eget, molestie malesuada diam. Morbi scelerisque sem mauris, at fringilla eros finibus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed malesuada, urna non accumsan finibus, arcu sem mattis justo, et eleifend turpis turpis id tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rutrum dignissim scelerisque. Nulla volutpat, nunc sit amet luctus mattis, odio diam lacinia sapien, ut fringilla massa mi at diam. Nam rutrum porta congue. Donec in ipsum elit. Fusce consectetur ligula eu augue sollicitudin, nec facilisis nunc mollis.</span><br></p>', NULL, NULL, NULL, NULL);
        
        -- ----------------------------
        -- Table structure for room_booking
        -- ----------------------------
        DROP TABLE IF EXISTS `room_booking`;
        CREATE TABLE `room_booking`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `member_id` int(10) NOT NULL,
          `booking_code` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `time_attended` datetime NULL DEFAULT NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `updated_by` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          PRIMARY KEY (`id`, `member_id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of room_booking
        -- ----------------------------
        INSERT INTO `room_booking` VALUES (1, 1, '001', '2023-02-15 15:32:11', NULL, NULL, NULL, NULL);
        INSERT INTO `room_booking` VALUES (3, 1, '0227064400001', NULL, '2023-02-27 06:44:57', 'John Cena', NULL, NULL);
        
        -- ----------------------------
        -- Table structure for room_booking_detail
        -- ----------------------------
        DROP TABLE IF EXISTS `room_booking_detail`;
        CREATE TABLE `room_booking_detail`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `booked_id` int(10) NOT NULL,
          `room_schedule_id` int(10) NOT NULL,
          `time_booked` time NULL DEFAULT NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `updated_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `date_booked` date NULL DEFAULT NULL,
          PRIMARY KEY (`id`, `booked_id`, `room_schedule_id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of room_booking_detail
        -- ----------------------------
        INSERT INTO `room_booking_detail` VALUES (1, 1, 2, '15:35:05', NULL, NULL, NULL, NULL, '2023-02-15');
        INSERT INTO `room_booking_detail` VALUES (3, 3, 3, '15:35:05', NULL, NULL, NULL, NULL, '2023-02-27');
        
        -- ----------------------------
        -- Table structure for room_gallery
        -- ----------------------------
        DROP TABLE IF EXISTS `room_gallery`;
        CREATE TABLE `room_gallery`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `room_id` int(10) UNSIGNED NOT NULL,
          `image` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `video` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          PRIMARY KEY (`id`, `room_id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of room_gallery
        -- ----------------------------
        
        -- ----------------------------
        -- Table structure for room_schedule
        -- ----------------------------
        DROP TABLE IF EXISTS `room_schedule`;
        CREATE TABLE `room_schedule`  (
          `id` int(10) NOT NULL,
          `room_id` int(10) UNSIGNED NOT NULL,
          `start_time` time NULL DEFAULT NULL,
          `end_time` time NULL DEFAULT NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_by` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          PRIMARY KEY (`id`) USING BTREE
        ) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of room_schedule
        -- ----------------------------
        INSERT INTO `room_schedule` VALUES (1, 1, '07:00:00', '08:00:00', NULL, NULL, NULL, NULL);
        INSERT INTO `room_schedule` VALUES (2, 1, '09:00:00', '11:00:00', NULL, NULL, NULL, NULL);
        INSERT INTO `room_schedule` VALUES (3, 1, '13:00:00', '14:00:00', NULL, NULL, NULL, NULL);
        INSERT INTO `room_schedule` VALUES (4, 1, '15:00:00', '18:00:00', NULL, NULL, NULL, NULL);
        INSERT INTO `room_schedule` VALUES (5, 2, '07:00:00', '10:00:00', NULL, NULL, NULL, NULL);
        INSERT INTO `room_schedule` VALUES (6, 2, '12:00:00', '14:00:00', NULL, NULL, NULL, NULL);
        INSERT INTO `room_schedule` VALUES (7, 2, '15:00:00', '17:00:00', NULL, NULL, NULL, NULL);
        INSERT INTO `room_schedule` VALUES (8, 3, '12:00:00', '14:00:00', NULL, NULL, NULL, NULL);
        
        -- ----------------------------
        -- Table structure for skin_benefits
        -- ----------------------------
        DROP TABLE IF EXISTS `skin_benefits`;
        CREATE TABLE `skin_benefits`  (
          `id` int(10) NOT NULL,
          `skin_type` int(10) NOT NULL,
          `benefits` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `updated_by` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          PRIMARY KEY (`id`, `skin_type`) USING BTREE
        ) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of skin_benefits
        -- ----------------------------
        
        -- ----------------------------
        -- Table structure for skin_type
        -- ----------------------------
        DROP TABLE IF EXISTS `skin_type`;
        CREATE TABLE `skin_type`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `type_skin` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `created_at` datetime NULL DEFAULT NULL,
          `created_by` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          `updated_at` datetime NULL DEFAULT NULL,
          `updated_by` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
          PRIMARY KEY (`id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of skin_type
        -- ----------------------------
        INSERT INTO `skin_type` VALUES (1, 'Diamond', NULL, NULL, NULL, NULL);
        INSERT INTO `skin_type` VALUES (2, 'Gold', NULL, NULL, NULL, NULL);
        INSERT INTO `skin_type` VALUES (3, 'Platinum', NULL, NULL, NULL, NULL);
        
        -- ----------------------------
        -- Table structure for system_group
        -- ----------------------------
        DROP TABLE IF EXISTS `system_group`;
        CREATE TABLE `system_group`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `group` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
          `active` tinyint(1) NOT NULL DEFAULT 1,
          `created_at` datetime NOT NULL DEFAULT '2022-08-18 03:35:49',
          `updated_at` datetime NOT NULL DEFAULT '2022-08-18 03:35:49',
          PRIMARY KEY (`id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of system_group
        -- ----------------------------
        INSERT INTO `system_group` VALUES (1, 'Super Admin', 1, '2022-08-18 03:35:49', '2022-08-18 03:35:49');
        
        -- ----------------------------
        -- Table structure for system_member
        -- ----------------------------
        DROP TABLE IF EXISTS `system_member`;
        CREATE TABLE `system_member`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `id_user` int(10) UNSIGNED NOT NULL,
          `id_group` int(10) UNSIGNED NOT NULL,
          `active` tinyint(1) NOT NULL DEFAULT 1,
          `created_at` datetime NOT NULL DEFAULT '2022-08-18 03:35:49',
          `updated_at` datetime NOT NULL DEFAULT '2022-08-18 03:35:49',
          PRIMARY KEY (`id`) USING BTREE,
          INDEX `system_member_id_user_foreign`(`id_user`) USING BTREE,
          INDEX `system_member_id_group_foreign`(`id_group`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;
        
        -- ----------------------------
        -- Records of system_member
        -- ----------------------------
        INSERT INTO `system_member` VALUES (1, 1, 1, 1, '2022-08-18 03:35:49', '2022-08-18 03:35:49');
        
        -- ----------------------------
        -- Table structure for system_menu
        -- ----------------------------
        DROP TABLE IF EXISTS `system_menu`;
        CREATE TABLE `system_menu`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `menu` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
          `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
          `icon` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
          `parent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
          `class` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
          `state` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
          `order` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
          `active` tinyint(1) NOT NULL DEFAULT 1,
          `created_at` datetime NOT NULL DEFAULT '2022-08-18 03:35:49',
          `updated_at` datetime NOT NULL DEFAULT '2022-08-18 03:35:49',
          PRIMARY KEY (`id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 39 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of system_menu
        -- ----------------------------
        INSERT INTO `system_menu` VALUES (1, 'Setting', '#', 'fas fa-cogs', '', '', '', '10', 1, '2023-02-14 03:40:31', '2023-03-07 08:32:52');
        INSERT INTO `system_menu` VALUES (2, 'Users', '/admin/users', 'fas fa-users', '1', '', '', '10.1', 1, '2023-02-14 03:42:27', '2023-03-07 08:32:53');
        INSERT INTO `system_menu` VALUES (3, 'Menu', '/admin/system_menu', 'fas fa-newspaper', '1', '', '', '10.2', 1, '2023-02-14 03:43:28', '2023-03-07 08:32:53');
        INSERT INTO `system_menu` VALUES (4, 'User Group', '/admin/system_member', 'fas fa-layer-group', '1', '', '', '10.3', 1, '2023-02-14 03:44:34', '2023-03-07 08:32:53');
        INSERT INTO `system_menu` VALUES (5, 'User Role', '/admin/system_role', 'fas fa-user-tag', '1', '', '', '10.4', 1, '2023-02-14 03:46:04', '2023-03-07 08:32:53');
        INSERT INTO `system_menu` VALUES (6, 'Group', '/admin/system_group', 'fas fa-user-lock', '1', '', '', '10.5', 1, '2023-02-14 03:47:51', '2023-03-07 08:32:53');
        INSERT INTO `system_menu` VALUES (7, 'Facilities', '#', 'fas fa-spa', '', '', '', '5', 1, '2023-02-14 03:48:53', '2023-03-07 08:32:50');
        INSERT INTO `system_menu` VALUES (8, 'Facilities Category', '/admin/facilities_category', '', '7', '', '', '5.1', 1, '2023-02-14 03:49:21', '2023-03-07 08:32:50');
        INSERT INTO `system_menu` VALUES (9, 'Facilities List', '/admin/facilities', '', '7', '', '', '5.2', 1, '2023-02-14 03:49:58', '2023-03-07 08:32:50');
        INSERT INTO `system_menu` VALUES (10, 'News', '#', 'far fa-newspaper', '', '', '', '6', 1, '2023-02-14 03:51:37', '2023-03-07 08:32:50');
        INSERT INTO `system_menu` VALUES (11, 'News Category', '/admin/news_category', '', '10', '', '', '6.1', 1, '2023-02-14 03:52:22', '2023-03-07 08:32:50');
        INSERT INTO `system_menu` VALUES (12, 'News List', '/admin/news', '', '10', '', '', '6.2', 1, '2023-02-14 03:52:55', '2023-03-07 08:32:50');
        INSERT INTO `system_menu` VALUES (13, 'Event', '#', 'far fa-calendar-alt', '', '', '', '7', 1, '2023-02-14 03:54:13', '2023-03-11 13:23:52');
        INSERT INTO `system_menu` VALUES (14, 'Rooms', '#', 'fa fa-bookmark', '', '', '', '4', 1, '2023-02-14 03:58:07', '2023-03-07 08:32:49');
        INSERT INTO `system_menu` VALUES (15, 'Room List', '/admin/room', '', '14', '', '', '4.1', 1, '2023-02-14 04:00:42', '2023-03-07 08:32:49');
        INSERT INTO `system_menu` VALUES (16, 'Room Booked', '/admin/room_booked', '', '14', '', '', '4.2', 1, '2023-02-14 04:01:10', '2023-03-07 08:32:49');
        INSERT INTO `system_menu` VALUES (17, 'Classes', '#', 'fa fa-school', '', '', '', '3', 1, '2023-02-14 04:03:07', '2023-03-07 08:32:48');
        INSERT INTO `system_menu` VALUES (18, 'Class Category', '/admin/class_category', '', '17', '', '', '3.1', 1, '2023-02-14 04:04:35', '2023-03-07 08:32:49');
        INSERT INTO `system_menu` VALUES (19, 'Private Class', '/admin/private_class', '', '17', '', '', '3.2', 1, '2023-02-14 04:04:58', '2023-03-07 08:32:49');
        INSERT INTO `system_menu` VALUES (20, 'Group Class', '/admin/group_class', '', '17', '', '', '3.3', 1, '2023-02-14 04:05:24', '2023-03-07 08:32:49');
        INSERT INTO `system_menu` VALUES (21, 'F&B', '#', 'fa fa-utensils', '', '', '', '8', 1, '2023-02-14 04:06:17', '2023-03-07 08:32:51');
        INSERT INTO `system_menu` VALUES (22, 'Food Category', '/admin/food_category', '', '21', '', '', '8.1', 1, '2023-02-14 04:09:50', '2023-03-07 08:32:51');
        INSERT INTO `system_menu` VALUES (23, 'Menu List', '/admin/menu', '', '21', '', '', '8.2', 1, '2023-02-14 04:10:29', '2023-03-07 08:32:51');
        INSERT INTO `system_menu` VALUES (24, 'Menu Addon', '/admin/menu_addon', '', '21', '', '', '8.3', 1, '2023-02-14 04:11:06', '2023-03-07 08:32:51');
        INSERT INTO `system_menu` VALUES (25, 'Menu Order', '/admin/menu_order', '', '21', '', '', '8.4', 1, '2023-02-14 04:12:30', '2023-03-07 08:32:52');
        INSERT INTO `system_menu` VALUES (26, 'Membership', '#', 'fa fa-address-card', '', '', '', '1', 1, '2023-02-14 04:14:08', '2023-02-14 04:16:44');
        INSERT INTO `system_menu` VALUES (27, 'Member List', '/admin/member', '', '26', '', '', '1.1', 1, '2023-02-14 04:14:51', '2023-02-14 04:16:44');
        INSERT INTO `system_menu` VALUES (28, 'Benefits', '/admin/benefits', '', '26', '', '', '1.2', 1, '2023-02-14 04:15:58', '2023-02-14 04:16:44');
        INSERT INTO `system_menu` VALUES (29, 'Apps Settings', '#', 'fas fa-tools', '', '', '', '9', 1, '2023-03-07 08:28:21', '2023-03-07 08:32:52');
        INSERT INTO `system_menu` VALUES (30, 'About', '/admin/about', '', '29', '', '', '9.1', 1, '2023-03-07 08:29:13', '2023-03-07 08:32:52');
        INSERT INTO `system_menu` VALUES (31, 'Term & Conditions', '/admin/term_and_conditions', '', '29', '', '', '9.2', 1, '2023-03-07 08:29:47', '2023-03-07 08:32:52');
        INSERT INTO `system_menu` VALUES (32, 'Privacy & Policy', '/admin/privacy_and_policy', '', '29', '', '', '9.3', 1, '2023-03-07 08:30:53', '2023-03-07 08:32:52');
        INSERT INTO `system_menu` VALUES (33, 'Partner', '#', 'fas fa-handshake', '', '', '', '2', 1, '2023-03-07 08:31:34', '2023-03-07 08:32:48');
        INSERT INTO `system_menu` VALUES (34, 'Partner List', '/admin/partner', '', '33', '', '', '2.1', 1, '2023-03-07 08:31:59', '2023-03-07 08:32:48');
        INSERT INTO `system_menu` VALUES (35, 'Partner Promo', '/admin/partner_promo', '', '33', '', '', '2.2', 1, '2023-03-07 08:32:20', '2023-03-07 08:32:48');
        INSERT INTO `system_menu` VALUES (36, 'Booked', '/admin/event_booked', '', '13', '', '', '7.2', 1, '2023-03-11 13:23:32', '2023-03-11 13:24:31');
        INSERT INTO `system_menu` VALUES (37, 'Event List', '/admin/event', '', '13', '', '', '7.1', 1, '2023-03-11 13:24:16', '2023-03-11 13:24:31');
        INSERT INTO `system_menu` VALUES (38, 'Partner Category', '/admin/partner_category', '', '33', '', '', NULL, 1, '2023-03-13 02:36:29', '2023-03-13 02:36:29');
        
        -- ----------------------------
        -- Table structure for system_role
        -- ----------------------------
        DROP TABLE IF EXISTS `system_role`;
        CREATE TABLE `system_role`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `id_menu` int(10) UNSIGNED NOT NULL,
          `id_group` int(10) UNSIGNED NOT NULL,
          `active` tinyint(1) NOT NULL DEFAULT 1,
          `created_at` datetime NOT NULL DEFAULT '2022-08-18 03:35:49',
          `updated_at` datetime NOT NULL DEFAULT '2022-08-18 03:35:49',
          PRIMARY KEY (`id`) USING BTREE,
          INDEX `system_role_id_menu_foreign`(`id_menu`) USING BTREE,
          INDEX `system_role_id_group_foreign`(`id_group`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 139 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of system_role
        -- ----------------------------
        INSERT INTO `system_role` VALUES (101, 1, 1, 1, '2023-03-13 02:36:56', '2023-03-13 02:36:56');
        INSERT INTO `system_role` VALUES (102, 2, 1, 1, '2023-03-13 02:36:56', '2023-03-13 02:36:56');
        INSERT INTO `system_role` VALUES (103, 3, 1, 1, '2023-03-13 02:36:56', '2023-03-13 02:36:56');
        INSERT INTO `system_role` VALUES (104, 4, 1, 1, '2023-03-13 02:36:56', '2023-03-13 02:36:56');
        INSERT INTO `system_role` VALUES (105, 5, 1, 1, '2023-03-13 02:36:57', '2023-03-13 02:36:57');
        INSERT INTO `system_role` VALUES (106, 6, 1, 1, '2023-03-13 02:36:57', '2023-03-13 02:36:57');
        INSERT INTO `system_role` VALUES (107, 7, 1, 1, '2023-03-13 02:36:57', '2023-03-13 02:36:57');
        INSERT INTO `system_role` VALUES (108, 8, 1, 1, '2023-03-13 02:36:57', '2023-03-13 02:36:57');
        INSERT INTO `system_role` VALUES (109, 9, 1, 1, '2023-03-13 02:36:58', '2023-03-13 02:36:58');
        INSERT INTO `system_role` VALUES (110, 10, 1, 1, '2023-03-13 02:36:58', '2023-03-13 02:36:58');
        INSERT INTO `system_role` VALUES (111, 11, 1, 1, '2023-03-13 02:36:58', '2023-03-13 02:36:58');
        INSERT INTO `system_role` VALUES (112, 12, 1, 1, '2023-03-13 02:36:58', '2023-03-13 02:36:58');
        INSERT INTO `system_role` VALUES (113, 13, 1, 1, '2023-03-13 02:36:59', '2023-03-13 02:36:59');
        INSERT INTO `system_role` VALUES (114, 14, 1, 1, '2023-03-13 02:36:59', '2023-03-13 02:36:59');
        INSERT INTO `system_role` VALUES (115, 15, 1, 1, '2023-03-13 02:36:59', '2023-03-13 02:36:59');
        INSERT INTO `system_role` VALUES (116, 16, 1, 1, '2023-03-13 02:36:59', '2023-03-13 02:36:59');
        INSERT INTO `system_role` VALUES (117, 17, 1, 1, '2023-03-13 02:37:00', '2023-03-13 02:37:00');
        INSERT INTO `system_role` VALUES (118, 18, 1, 1, '2023-03-13 02:37:00', '2023-03-13 02:37:00');
        INSERT INTO `system_role` VALUES (119, 19, 1, 1, '2023-03-13 02:37:00', '2023-03-13 02:37:00');
        INSERT INTO `system_role` VALUES (120, 20, 1, 1, '2023-03-13 02:37:00', '2023-03-13 02:37:00');
        INSERT INTO `system_role` VALUES (121, 21, 1, 1, '2023-03-13 02:37:01', '2023-03-13 02:37:01');
        INSERT INTO `system_role` VALUES (122, 22, 1, 1, '2023-03-13 02:37:01', '2023-03-13 02:37:01');
        INSERT INTO `system_role` VALUES (123, 23, 1, 1, '2023-03-13 02:37:01', '2023-03-13 02:37:01');
        INSERT INTO `system_role` VALUES (124, 24, 1, 1, '2023-03-13 02:37:01', '2023-03-13 02:37:01');
        INSERT INTO `system_role` VALUES (125, 25, 1, 1, '2023-03-13 02:37:02', '2023-03-13 02:37:02');
        INSERT INTO `system_role` VALUES (126, 26, 1, 1, '2023-03-13 02:37:02', '2023-03-13 02:37:02');
        INSERT INTO `system_role` VALUES (127, 27, 1, 1, '2023-03-13 02:37:02', '2023-03-13 02:37:02');
        INSERT INTO `system_role` VALUES (128, 28, 1, 1, '2023-03-13 02:37:02', '2023-03-13 02:37:02');
        INSERT INTO `system_role` VALUES (129, 29, 1, 1, '2023-03-13 02:37:03', '2023-03-13 02:37:03');
        INSERT INTO `system_role` VALUES (130, 30, 1, 1, '2023-03-13 02:37:03', '2023-03-13 02:37:03');
        INSERT INTO `system_role` VALUES (131, 31, 1, 1, '2023-03-13 02:37:03', '2023-03-13 02:37:03');
        INSERT INTO `system_role` VALUES (132, 32, 1, 1, '2023-03-13 02:37:03', '2023-03-13 02:37:03');
        INSERT INTO `system_role` VALUES (133, 33, 1, 1, '2023-03-13 02:37:04', '2023-03-13 02:37:04');
        INSERT INTO `system_role` VALUES (134, 34, 1, 1, '2023-03-13 02:37:04', '2023-03-13 02:37:04');
        INSERT INTO `system_role` VALUES (135, 35, 1, 1, '2023-03-13 02:37:04', '2023-03-13 02:37:04');
        INSERT INTO `system_role` VALUES (136, 36, 1, 1, '2023-03-13 02:37:04', '2023-03-13 02:37:04');
        INSERT INTO `system_role` VALUES (137, 37, 1, 1, '2023-03-13 02:37:05', '2023-03-13 02:37:05');
        INSERT INTO `system_role` VALUES (138, 38, 1, 1, '2023-03-13 02:37:05', '2023-03-13 02:37:05');
        
        -- ----------------------------
        -- Table structure for users
        -- ----------------------------
        DROP TABLE IF EXISTS `users`;
        CREATE TABLE `users`  (
          `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
          `first_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
          `last_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
          `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
          `phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
          `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
          `contract_date` date NOT NULL DEFAULT '2022-08-18',
          `gender` tinyint(1) NOT NULL DEFAULT 1,
          `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
          `created_at` datetime NOT NULL DEFAULT '2022-08-18 03:35:49',
          `updated_at` datetime NOT NULL DEFAULT '2022-08-18 03:35:49',
          `deleted_at` datetime NULL DEFAULT NULL,
          `active` tinyint(1) NULL DEFAULT NULL,
          PRIMARY KEY (`id`) USING BTREE
        ) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;
        
        -- ----------------------------
        -- Records of users
        -- ----------------------------
        INSERT INTO `users` VALUES (1, 'Super ', 'admin', NULL, NULL, 'admin@mail.com', '2022-08-16', 1, NULL, '2022-08-16 07:39:43', '2022-08-16 07:39:43', NULL, 1);
        
        SET FOREIGN_KEY_CHECKS = 1;";
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
