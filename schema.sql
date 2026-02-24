CREATE TABLE IF NOT EXISTS `research_type`(
  `id` INT AUTO_INCREMENT NOT NULL,
  `name` VARCHAR(55) NOT NULL,
  `description` TEXT NOT NULL,
  PRIMARY KEY(`id`) 
);

CREATE TABLE IF NOT EXISTS `research`(
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NOT NULL,
  `research_type_id` INT NOT NULL UNIQUE,
  `abstract` TEXT NOT NULL,
  `researcher_name` VARCHAR(30) NOT NULL,
 ` publication_year` YEAR NOT NULL DEFAULT YEAR(CURRENT_DATE),
  `status` ENUM('draft', 'published') NOT NULL,
  `created_at` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` DATE,
  `deleted_at` DATE,
  PRIMARY KEY(`id`),
  FOREIGN KEY(`research_type_id`) REFERENCES `research_type`(`id`) ON DELETE SET NULL
);
