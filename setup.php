<?php
/**
 * Created by PhpStorm.
 * User: stikks
 * Date: 8/4/16
 * Time: 6:10 PM
 */
//$pdo = new PDO('mysql:dbname=lagosnio_niob;host=localhost;user=root;password=');
    $pdo = new PDO('mysql:dbname=lagosnio_niob;host=localhost;user=lagosnio_admin;password=UpR}8cl-u$wb');
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

$text = "CREATE TABLE IF NOT EXISTS payment_types(
  id serial PRIMARY KEY,
  name TEXT NOT NULL,
  code varchar (255) NOT NULL,
  price FLOAT DEFAULT 0.0
);";

array_push($list, $text);

$grd = "CREATE TABLE IF NOT EXISTS grades(
  id serial PRIMARY KEY,
  pt_code VARCHAR (255) NOT NULL,
  name TEXT NOT NULL,
  price FLOAT DEFAULT 0.0
);";

array_push($list, $grd);

$pq = "CREATE TABLE IF NOT EXISTS payment_reference(
  id serial PRIMARY KEY,
  username VARCHAR (255) NOT NULL,
  amount FLOAT DEFAULT 0.0,
  reference TEXT NOT NULL,
  description TEXT NOT NULL,
  status BOOL DEFAULT FALSE,
  updated_at date DEFAULT NULL,
  created_at date DEFAULT NULL
);";

array_push($list, $pq);

foreach ($list as $data) {
    $pdo->exec($data);
}

$et = "INSERT INTO users
  (username , password, is_admin)
VALUES
  ('admin', '21232f297a57a5a743894a0e4a801fc3', TRUE);";

$obj = $pdo->prepare($et);
$obj->execute();


$paymentTypes = array(
    array('code'=>'mem_enrol_fees', 'name'=> 'Membership Enrollment Fees',
    'grades'=>array(array('name'=>'Fellow'), array('name'=>'Corporate'), array('name'=>'Graduate'), array('name'=>'Associate'),
        array('name'=>"Licentiate"), array('name'=>'Technician'), array('name'=>'Student'), array('name'=>'Craftmen')
    )),

    array('code'=>'exam_enrol_fees', 'name'=>'Exanmination Enrollment Fees',
        'grades'=>array(array('name'=>'Corporate'), array('name'=>'Graduate'), array('name'=>'Associate'),
            array('name'=>"Licentiate"), array('name'=>'Technician'), array('name'=>'MCE(ELected Assoc)'))),

    array('code'=>'annual_dues', 'name'=>'Annual Dues', 'grades'=>array(array('name'=>'Graduate'))),

    array('code'=>'web_dev_levy', 'name'=>'Website Development Levy', 'grades'=>array(array('name'=>'Fellow'), array('name'=>'Corporate'), array('name'=>'Graduate'), array('name'=>'Associate'),
        array('name'=>"Licentiate"), array('name'=>'Technician'), array('name'=>'Craftmen'))),

    array('code'=>'late_exam_form', 'name'=>'Late Submission of Exam Form', 'price'=>0.0),
    array('code'=>'interview','name'=>'Interview', 'price'=>0.0), array('code'=>'donations', 'name'=>'Donations', 'price'=>0.0),
    array('code'=>'corp_cert', 'name'=>'Corporate Certificate', 'price'=>0.0),
    array('code'=>'arrears_prior_2010', 'name'=>'Arrears Prior 2010', 'price'=>0.0),
    array('code'=>'out_mcpdp', 'name'=>'Outstanding MCPDP FOR CORP/FELLOW INTV.', 'price'=>0.0),

    array('code'=>'inv_donation', 'name'=>'Investiture Donation', 'price'=>0.0),
    array('code'=>'agm','name'=>'Annual General Meeting', 'price'=>0.0,
        'grades'=>array(array('name'=>'Fellow'), array('name'=>'Corporate'), array('name'=>'Graduate'), array('name'=>'Associate'),
            array('name'=>"Licentiate"), array('name'=>'Technician'), array('name'=>'Student'), array('name'=>'Craftmen'), array('name'=>'MCE(ELected Assoc)'),
            array('name'=>'Direct Membership'), array('name'=>'MCE(ELected Grad)'), array('name'=>'Hon. Fellow'), array('name'=>'Affiliate'))),

    array('code'=>'sec_levy', 'name'=>'Secretariat Levy', 'price'=>0.0), array('code'=>'proc_fee','name'=>'Processing Fee', 'price'=>0.0),
    array('code'=>'constitution', 'name'=>'Constitution', 'price'=>0.0),
    array('code'=>'levies_fees', 'name'=>'Levies/Fees', 'price'=>0.0),
    array('code'=>'annual_dues_2009', 'name' => 'Annual Dues 2009', 'price'=>0.0, 'grades'=>array(array('name'=>'Fellow'))),
    array('code'=>'annual_dues_2010', 'name' => 'Annual Dues 2010', 'price'=>0.0, 'grades'=>array(array('name'=>'Fellow'), array('name'=>'Corporate'))),
    array('code'=>'annual_dues_2011', 'name' => 'Annual Dues 2011', 'price'=>0.0, 'grades'=>array(array('name'=>'Fellow'))),
    array('code'=>'annual_dues_2012', 'name' => 'Annual Dues 2012', 'price'=>0.0, 'grades'=>array(array('name'=>'Fellow'))),
    array('code'=>'annual_dues_2013', 'name' => 'Annual Dues 2013', 'price'=>0.0, 'grades'=>array(array('name'=>'Fellow'))),
    array('code'=>'annual_dues_2014', 'name' => 'Annual Dues 2014', 'price'=>0.0, 'grades'=>array(array('name'=>'Fellow'))),
        array('code'=>'annual_dues_2015', 'name' => 'Annual Dues 2015', 'price'=>0.0, 'grades'=>array(array('name'=>'Fellow'))),
    array('code'=>'annual_dues_2016', 'name' => 'Annual Dues 2016', 'price'=>0.0,
        'grades'=>array(array('name'=>'Fellow'), array('name'=>'Corporate'), array('name'=>'Graduate'), array('name'=>'Associate'))),
    array('code'=>'annual_dues_2017', 'name' => 'Annual Dues 2017', 'price'=>0.0, 'grades'=>array(array('name'=>'Fellow'))));

foreach ($paymentTypes as $pt) {
    $code = $pt['code'];
    $name = $pt['name'];

    $det = "INSERT INTO `payment_types` (code , name) VALUES ('$code', '$name');";
    $obj = $pdo->prepare($det);
    $resp = $obj->execute();

    if ($resp == true && array_key_exists('grades', $pt)) {
        foreach ($pt['grades'] as $gd) {
            $name = $gd['name'];

            $xet = "INSERT INTO `grades` (pt_code , name) VALUES ('$code', '$name');";
            $obj = $pdo->prepare($xet);
            $resp = $obj->execute();
        }
    }

}
echo 'Complete';
die();