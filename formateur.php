
<?php include_once('data.php') ?>
<?php


    //  $sql = 'INSERT INTO formateur (id,nom,prenom) VALUES (:id, :nom, :prenom)';
    //  $sqlState = $pdo->prepare($sql);
    //  $sqlState->bindValue(':id', 'formateur id');
    //  $sqlState->bindValue(':nom', 'formateur name');
    //  $sqlState->bindValue(':prenom', 'formateur prenom');
    //  $sqlState->execute();
    //  $formateurs = $pdo->query("SELECT * FROM formateur")->fetchAll(PDO::FETCH_ASSOC);


$method= $_SERVER['REQUEST_METHOD'];
if ($method=='POST')
   {
    if(isset($_POST['nom']) && isset($_POST['prenom'])  ){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];

        if (!empty($nom) && !empty($prenom)) {
            $sql = 'INSERT INTO formateur  (nom,prenom) VALUES (?, ?)';
            $sqlState = $pdo->prepare($sql);
            $inserted = $sqlState->execute([$nom,$prenom]);
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
    // echo $name;
    // var_dump($_POST);
}else{
    http_response_code(400);
}
?>