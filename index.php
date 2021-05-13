<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
            <h1>Generateur de mot de passe</h1>
        <form action='listPasswd.php'>
            Combien de mot de passe ? : <input type='number' Name='nbrPasswd'  min="1" max="50" value="1">
            <br>
            La taille de mot depasse : <input type='number' Name='nbrCaract' min="1" max="50" value="10">
            <br>
            Type de mot de passe :     <select name='typePasswd'>
            <option value='1'>Chiffres uniquement</option>
            <option value='2'>Lettres uniquement</option>
            <option value='3'>Chiffres et lettres</option>
            <option value='4'>Tout caractères</option>
            </select>
            <br>
            <input type='submit' value='Générer' class="btn">
        </form>

        
</body>
</html>
         
           