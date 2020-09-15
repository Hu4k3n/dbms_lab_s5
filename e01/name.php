<?php
 try{
    $pdo = new PDO('mysql:host=localhost;dbname=studinfo','root','',[PDO::ATTR_ERRMODE => PDO :: ERRMODE_EXCEPTION]);
}catch(PDOException $e){
    die('Could not Connect :' .$e->getMessage());
}
$cgpa=($_POST['sgpa1']+$_POST['sgpa2']+$_POST['sgpa3']+$_POST['sgpa4']+$_POST['sgpa5']+$_POST['sgpa6']+$_POST['sgpa7']+$_POST['sgpa8'])/8
$statement = $pdo->prepare("insert into biodata values('{$_POST['roll_no']}',
                                                        '{$_POST['name']}',
                                                        '{$_POST['dob']}',
                                                        '{$_POST['address']}',
                                                        {$_POST['mob']},
                                                        '{$_POST['mail']}',
                                                        {$_POST['sgpa1']},
                                                        {$_POST['sgpa2']},
                                                        {$_POST['sgpa3']},
                                                        {$_POST['sgpa4']},
                                                        {$_POST['sgpa5']},
                                                        {$_POST['sgpa6']},
                                                        {$_POST['sgpa7']},
                                                        {$_POST['sgpa8']},
                                                        {$cgpa},
                                                        '{$_POST['hobb']}',
                                                        '{$_POST['residence']}',
                                                        '{$_POST['reference']}');");
try{

    $statement->execute();
}
catch(PDOException $e)
{
    die('already exists'.$e->getMessage());
}
?>