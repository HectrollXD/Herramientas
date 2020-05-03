$(document).ready(main);

function main(){
    $('#AutoCreateDB').click(function(){ window.location.href="SCRIPT/auto_create_database.php"; });
    $('#rti').click(function(){ window.location.href="../index.php"; });
    $('#gtphpmyadmin').click(function(){ window.location.href="../SQL/database.txt"; });
}