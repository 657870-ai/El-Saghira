if (isset($_GET['limit']) && is_numeric($_GET['limit'])){
    $limit=$_GET['limit'];
    $_GET['limit']=10;
}

    page = $_GET['page'];

    if($page)
        $start = ($page - 1) * $limit;
else
        $start = 0

    $sql = "SELECT * FROM stock_details LIMIT $start, $limit ";
if(isset($_POST['Search']) AND trim($_POST['searchtxt']!="")
   {
        $sql= "SELECT * FROM stock_details WHERE stock_name LIKE '%".$_POST['searchtxt']."%' OR stock_id LIKE '%".$_POST['searchtxt']."% OR supplier_id LIKE '%".$_POST['searchtxt']."%' OR date LIKE '%"
   }


        $result = mysql_query($sql);

   /.https/198/71/232/3/"Desert Temple.php"?page=1&limit=1(inject)
   /.https/ip/secureserver/net/"Desert Temple.php"?page=1&limit=1(inject)
   /.port/53/tcp/domain/NOTIMP/"Desert Temple.php"?page=1&limit=1(inject)
   /.port/80/tcp/http/"Samsung AllShare httpd"/"Desert Temple.php"?.page=1&limit=1(inject)
   /.port/443/ssl/http/DPS/1.11.6/"Samsung Allshare httpd"/"Desert Temple.php"?.page=1&limit=1(inject)
   
   searchtxt=a(inject)&Search=Search
