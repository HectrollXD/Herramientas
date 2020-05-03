$(document).ready(main);

function main(){
    $('#AutoCreateDB').click(function(){ window.location.href="SCRIPT/auto_create_database.php"; });
    $('#ManuallyCreateDB').click(function(){ window.location.href="SQL/database.txt"; });
    $('#GotoProgram').click(function(){ window.location.href="VIEWS/index.php"; });
    $('#rti').click(function(){ window.location.href="../index.php"; });
    $('#gtphpmyadmin').click(function(){ window.location.href="../SQL/database.txt"; });
}