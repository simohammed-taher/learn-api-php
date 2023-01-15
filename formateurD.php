
<?php include_once('data.php') ?>
<?php
$method= $_SERVER['REQUEST_METHOD'];
if ($method=='POST')
   {
    if(isset($_POST['id']) ){
        $nom = $_POST['id'];
        if (!empty($id)) {
            $sql = 'DELETE FROM formateur WHERE id = ?';
            $sqlState = $pdo->prepare($sql);
            $inserted = $sqlState->execute([$id]);
            if($inserted ){
                echo 'gooood';
            }else{
                
                http_response_code(400);
            }
            }else{
                http_response_code(400);
            }
        }else{
            http_response_code(400);
        }         
}else{
    http_response_code(400);
}
?>