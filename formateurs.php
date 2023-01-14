
<?php include_once('data.php') ?>
<?php
    $sql = 'SELECT * FROM formateur';
    $sqlState = $pdo->prepare($sql);
    $formateurs = $pdo->query("SELECT * FROM formateur")->fetchAll(PDO::FETCH_ASSOC);
    header('Content-Type: application/json');
    echo json_encode($formateurs, JSON_PRETTY_PRINT);

?>



