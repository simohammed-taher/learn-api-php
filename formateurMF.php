<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="http://localhost:81/api/formateurM.php" method="POST">
    <div>
      <label for="form1Example1">Id</label>
      <input type="numbre" id="form1Example1"  name="id"/>
  </div>
  <div>
      <label for="form1Example1">Nom</label>
      <input type="text" id="form1Example1"  name="nom"/>
  </div>
  <div>
       <label for="form1Example2">Prenom</label>
        <input type="text" id="form1Example2"  name="prenom"/>
  </div>
  <button type="submit">Modifier</button>
</form>
</body>
</html>