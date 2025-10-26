-- Create the new file_categories table
CREATE TABLE `file_categories` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Create the new files table
CREATE TABLE `files` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `category_id` int(5) unsigned NOT NULL,
  `filename` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `file_size` varchar(50) NOT NULL,
  `version_no` varchar(10) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `files_user_id_foreign` (`user_id`),
  KEY `files_category_id_foreign` (`category_id`),
  CONSTRAINT `files_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user_data` (`id_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `files_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `file_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Drop the old file category tables
DROP TABLE IF EXISTS `admin_files`;
DROP TABLE IF EXISTS `admin_files_versions`;
DROP TABLE IF EXISTS `aeld_files`;
DROP TABLE IF EXISTS `aeld_files_versions`;
DROP TABLE IF EXISTS `cild_files`;
DROP TABLE IF EXISTS `cild_files_versions`;
DROP TABLE IF EXISTS `if_completed_files`;
DROP TABLE IF EXISTS `if_completed_files_versions`;
DROP TABLE IF EXISTS `if_proposals_files`;
DROP TABLE IF EXISTS `if_proposals_files_versions`;
DROP TABLE IF EXISTS `lulr_files`;
DROP TABLE IF EXISTS `lulr_files_versions`;
DROP TABLE IF EXISTS `rp_completed_berf_files`;
DROP TABLE IF EXISTS `rp_completed_berf_files_versions`;
DROP TABLE IF EXISTS `rp_completed_nonberf_files`;
DROP TABLE IF EXISTS `rp_completed_nonberf_files_versions`;
DROP TABLE IF EXISTS `rp_proposal_berf_files`;
DROP TABLE IF EXISTS `rp_proposal_berf_files_versions`;
DROP TABLE IF EXISTS `rp_proposal_nonberf_files`;
DROP TABLE IF EXISTS `rp_proposal_nonberf_files_versions`;
DROP TABLE IF EXISTS `t_lr_files`;
DROP TABLE IF EXISTS `t_lr_files_versions`;
DROP TABLE IF EXISTS `t_pp_files`;
DROP TABLE IF EXISTS `t_pp_files_versions`;
DROP TABLE IF EXISTS `t_rs_files`;
DROP TABLE IF EXISTS `t_rs_files_versions`;
DROP TABLE IF EXISTS `approved_proposal`;
DROP TABLE IF EXISTS `approved_proposal_versions`;
