<?php
/**
 * Created by PhpStorm.
 * User: stikks
 * Date: 8/4/16
 * Time: 6:10 PM
 */
$pdo = new PDO('mysql:dbname=niob;host=localhost;user=root;password=');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$list = array();
$users = "CREATE TABLE IF NOT EXISTS users (
    id serial,
	username varchar (50) PRIMARY KEY,
	password varchar (255) NOT NULL,
	is_admin BOOL DEFAULT FALSE,
	updated_at date DEFAULT NULL,
	created_at date DEFAULT NULL
	);";

array_push($list, $users);

$info = "CREATE TABLE IF NOT EXISTS niob_info(
  id serial PRIMARY KEY,
  surname varchar (255) NOT NULL,
  othernames TEXT NOT NULL,
  title varchar (255) NOT NULL,
  gender varchar (255) NOT NULL,
  religion varchar (255) NOT NULL,
  phone varchar (255) NOT NULL,
  email varchar (255) NOT NULL,
  address TEXT NOT NULL,
  niob_grade_title varchar (255) NOT NULL,
  member_registration_number varchar (255) NOT NULL,
  membership_number varchar (255) NOT NULL,
  corbon_admission_number varchar (255) NOT NULL,
  dob date DEFAULT NULL,
  niob_admission_date date DEFAULT NULL,
  corbon_date_of_admission date DEFAULT NULL,
  academic_qualification varchar (100) NOT NULL,
  member_year_of_education varchar (10) NOT NULL,
  member_current_employer TEXT NOT NULL,
  member_position_held TEXT NOT NULL,
  member_additional_infomation TEXT NOT NULL,
  profile_image TEXT NOT NULL,
  updated_at date DEFAULT NULL,
  created_at date DEFAULT NULL,
  FOREIGN KEY (email) REFERENCES users(username)
);";

array_push($list, $info);

$payment = "CREATE TABLE IF NOT EXISTS payments(
  id serial PRIMARY KEY,
  email varchar (255) NOT NULL,
  reference TEXT NOT NULL,
  amount varchar (255) NOT NULL,
  updated_at date DEFAULT NULL,
  created_at date DEFAULT NULL,
  FOREIGN KEY (email) REFERENCES users(username)
);";

array_push($list, $payment);

foreach ($list as $data) {
    $pdo->exec($data);
}

$et = "INSERT INTO users
  (username , password, is_admin)
VALUES
  ('admin', '21232f297a57a5a743894a0e4a801fc3', TRUE);";

$obj = $pdo->prepare($et);
$obj->execute();
