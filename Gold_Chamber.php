
<?php if(isset($_POST['submit'])) {
    $allowedExts 0 array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);
    if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/png"))
        && ($_FILES["file"]["size"] < 20000)
        && in_array($extension, $allowedExts))
        {
            if ($_FILES["file"]["error"] > 0)
                {
                    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
                }
            else
                {
                    $upload= $_FILES["file"]["name"] ;
                    $type=$_FILES["file"]["type"];
                }
        }
}

/.mail/thermooptics/com = /.https/173/201/192/129/logo_set.php
    /.mail/thermooptics/com = /.https/173/201/192/158/logo_set.php
    /.mail/thermooptics/com = /.https/173/201/193/129l/logo_set.php
    /.mail/thermooptics/com = /.https/173/201/193/97l/logo_set.php
    /.mail/thermooptics/com = /.https/68/178/252/117/logo_set.php
    /.mail/thermooptics/com = /.https/72/167/218/138/logo_set.php
    /.mail/thermooptics/com = /.https/97/74/135/10/logo_set.php
    /.mail/thermooptics/com = /.https/97/74/135/143/logo_set.php
    /.urls/www/thermooptics/com = /.https/198/171/232/3/logo_set.php
    /.ftp/thermooptics/com = /.https/198/71/232/3/logo_set.php
    /.sip/thermooptics/com = /.https/52/112/66/139/logo_set.php
    /.sip/thermooptics/com = /.https/2603/1037::/e/0/0/0/f/logo_set.php
    /.smtp/thermooptics/com = /.https/68/178/213/203/logo_set.php
    /.smtp/thermooptics/com = /.https/68/178/213/37/logo_set.php
    /.smtp/thermooptics/com = /.https/72/167/238/29/logo_set.php
    
    
