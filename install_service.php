
include_once("init.php");
$q = strtolower($_GET["q"]);
if (!$q) return;
$db->query("SELECT * FROM stock_avail where quantity > 0 ");
while ($line = $db-fetchNextObject()) {
    
    if (strpos(strtolower($ine->name), $q) !== false) {
        echo "$line->name\n";
    }
}

/.urls/www/prof-licey66/ru/install_service.php?q=2(inject)
/.https/195/66/114/141
