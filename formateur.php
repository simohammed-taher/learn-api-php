
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
    if(isset($_POST['formateur'])){
        $id = $_id['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];

        if (!empty($id) && !empty($nom) && !empty($prenom)) {
            $sql = ('INSERT INTO formateur (id,nom,prenom) VALUES (?, ?, ?)');
            $sqlState = $pdo->prepare($sql);
            $sqlState = $sqlState->execute([$id,$nom,$prenom]);}else{
            echo "Tous les champs sont obligatoires.";
            }
            
    // echo $name;
    // var_dump($_POST);
}else{
    http_response_code(400);
}
?>