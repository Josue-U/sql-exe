<?php
declare(strict_types=1);
require 'fct-nq-answer.php';



$db = new PDO("mysql:host=mysql;dbname=classicmodels;port=3306", "root", "root"); //appel de la base de donnée


new_question(1);
$customerQuantity= $db->query("
SELECT *
FROM customers");
$result = $customerQuantity->fetchall(PDO::FETCH_ASSOC);

printr($result);

echo "We have 121 customers";

new_question(2);

$specifiedCustomer = $db->query("
SELECT customerNumber,
       contactLastName,
       contactFirstName
FROM customers
WHERE contactLastName = 'Young' AND
      contactFirstName = 'Mary' ");

$result = $specifiedCustomer->fetchall(PDO::FETCH_ASSOC);

printr($result);

echo "Customer number of Mary Young is 219";

new_question(3);
$specifiedCustomer = $db->query("
SELECT customerNumber,
       city, 
       addressLine1
FROM customers
WHERE city = 'Frankfurt'");

$result = $specifiedCustomer->fetchall(PDO::FETCH_ASSOC);

printr($result);

echo "Customer number who lives at Magazinweg 7, Frankfurt 60528 is 247";

new_question(4);

$firstEmployee = $db->query("
SELECT lastName,
        email
FROM employees
ORDER BY lastName");

$result = $firstEmployee->fetchall(PDO::FETCH_ASSOC);

printr($result);

echo "The email of the first employee is  lbondur@classicmodelcars.com";
new_question(5);

$firstEmployee = $db->query("
SELECT lastName,
        email
FROM employees
ORDER BY lastName DESC ");

$result = $firstEmployee->fetchall(PDO::FETCH_ASSOC);

printr($result);

echo "The email of the last employee is  gvanauf@classicmodelcars.com";

new_question(6);

$firstTruckProduct = $db->query("
SELECT productCode,
       productName,
       productLine, 
       productScale
FROM products
WHERE productLine = 'Trucks and buses'
ORDER BY productScale AND 
         productName
");

$result = $firstTruckProduct->fetchall(PDO::FETCH_ASSOC);

printr($result);

echo "The first the product code of all the products from the line 'Trucks and Buses', sorted first by productscale, then by productname is S50_1392";

new_question(7);
$firstEmployeeLastNameT = $db->query("SELECT  email FROM employees ORDER BY lastName LIKE 't%' ");

$result = $firstEmployeeLastNameT ->fetchall(PDO::FETCH_ASSOC);

printr($result);

echo "<br><br>La réponse est : dmurphy@classicmodelcars.com<br><br>";


new_question(8);
$customerNumber = $db -> query("SELECT customerNumber FROM payments WHERE paymentDate ='2004-01-19' ");

$result = $customerNumber -> fetchAll(PDO::FETCH_ASSOC);

echo "<br><br>La réponse est : 177<br><br>";

print_r($result);

new_question(9);
$numberOfcustomers = $db -> query("SELECT customerName FROM customers WHERE  state = 'NV' OR state = 'NY' ");

$result = $numberOfcustomers -> fetchAll(PDO::FETCH_ASSOC);

print_r($result);

echo "<br><br>La réponse est : 7<br><br>";


new_question(10);
$numberOfcustomers = $db -> query("SELECT customerName FROM customers WHERE state ='NV' OR state='NY' OR country != 'USA' ");

$result = $numberOfcustomers -> fetchAll(PDO::FETCH_ASSOC);

print_r($result);

echo "<br><br>La réponse est : 93<br><br>";


new_question(11);
$numberOfcustomers = $db -> query("SELECT customerName FROM customers WHERE state ='NV' OR state='NY' OR country != 'USA' AND creditLimit > '1000.00' ");

$result = $numberOfcustomers -> fetchAll(PDO::FETCH_ASSOC);

print_r($result);

echo "<br><br>La réponse est : 70<br><br>";


new_question(12);
$customerNoRep = $db -> query("SELECT customerName FROM customers WHERE salesRepEmployeeNumber IS NULL ");

$result = $customerNoRep -> fetchAll(PDO::FETCH_ASSOC);

print_r($result);

echo "<br><br>La réponse est : 22<br><br>";

new_question(13);
$commentOrder = $db -> query("SELECT comments FROM orders WHERE comments IS NOT NULL ");

$result = $commentOrder -> fetchAll(PDO::FETCH_ASSOC);

print_r($result);

echo "<br><br>La réponse est : 80<br><br>";


new_question(14);
$caution = $db -> query("SELECT orderNumber FROM orders WHERE comments LIKE '%caution%' ");

$result = $caution -> fetchAll(PDO::FETCH_ASSOC);

print_r($result);

echo "<br><br>La réponse est : 4<br><br>";



new_question(15);

new_question(16);