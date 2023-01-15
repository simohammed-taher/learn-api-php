
<?php include_once('data.php') ?>
<?php
$method= $_SERVER['REQUEST_METHOD'];
// echo $method;
if ($method=='POST')
   {
    if(isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['prenom'])  ){
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        if (!empty($id) && !empty($nom) && !empty($prenom)) {
            $sql = 'UPDATE formateur SET  nom=? , prenom=? where id=?';
            $sqlState = $pdo->prepare($sql);
            $inserted = $sqlState->execute([$nom,$prenom,$id]);
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