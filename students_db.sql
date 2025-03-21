CREATE TABLE IF NOT EXISTS `students` (
	`firstname` varchar(50) NOT NULL,
	`lastname` varchar(50) NOT NULL,
	`category_id` int NOT NULL,
	`photograph` varchar(255) NOT NULL,
	`birth_certificate` varchar(255) NOT NULL,
	`dob` date NOT NULL,
	`fathers_name` varchar(50) NOT NULL,
	`mothers_name` varchar(50) NOT NULL,
	`gender` enum NOT NULL,
	`student_id` int AUTO_INCREMENT NOT NULL,
	`present_address` text NOT NULL,
	`permanent_address` text NOT NULL,
	`phone_no` varchar(20) NOT NULL,
	`email` varchar(50) NOT NULL,
	`religion` varchar(10) NOT NULL
);

CREATE TABLE IF NOT EXISTS `category_master` (
	`category_id` int AUTO_INCREMENT NOT NULL,
	`category_name` varchar(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS `facilities_master` (
	`facility_id` int AUTO_INCREMENT NOT NULL,
	`facility_name` varchar(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS `student_facilities` (
	`facility_id` int NOT NULL,
	`student_id` int NOT NULL
);

CREATE TABLE IF NOT EXISTS `admin` (
	`admin_id` int NOT NULL,
	`username` varchar(20) NOT NULL
);


ALTER TABLE `category_master` ADD CONSTRAINT `category_master_fk0` FOREIGN KEY (`category_id`) REFERENCES `students`(`category_id`);

ALTER TABLE `student_facilities` ADD CONSTRAINT `student_facilities_fk0` FOREIGN KEY (`facility_id`) REFERENCES `facilities_master`(`facility_id`);

ALTER TABLE `student_facilities` ADD CONSTRAINT `student_facilities_fk1` FOREIGN KEY (`student_id`) REFERENCES `students`(`student_id`);
