<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz Animaux</title>
</head>
<body>
    <h1>Quizz Animaux</h1>
    <p>Bonne chance à vous !</p>
    <form action="reponsesquizz.php" method="post">
        <p>Question 1 : La sauterelle est capable de sauter 200 fois sa taille</p>
        <input type="radio" name="question1" value="Vrai">Vrai<br>
        <input type="radio" name="question1" value="Faux">Faux<br>
        <input type="hidden" name="question" value="1">
        <input type="submit" value="Suivant">
    </form> 
    <form action="reponsesquizz.php" method="post">
        <p>Question 2 : Quel animal croasse ?</p>
        <input type="radio" name="question2" value="Grenouille">Grenouille<br>
        <input type="radio" name="question2" value="Lama">Lama<br>
        <input type="radio" name="question2" value="Corbeau">Corbeau<br>
        <input type="radio" name="question2" value="Autruche">Autruche<br>
        <input type="hidden" name="question" value="2">
        <input type="submit" value="Suivant">
    </form>
    <form action="reponsesquizz.php" method="post">
        <p>Question 3 : Quel animal est le plus grand ?</p>
        <input type="radio" name="question3" value="Lion">Lion<br>
        <input type="radio" name="question3" value="Girafe">Girafe<br>
        <input type="radio" name="question3" value="Elephant">Elephant<br>
        <input type="radio" name="question3" value="Zèbre">Zèbre<br>
        <input type="hidden" name="question" value="3">
        <input type="submit" value="Suivant">
    </form>
    <form action="reponsesquizz.php" method="post">
        <p>Question 4 : Quel serpent est réputé comme étant le plus grand d'Afrique ?</p>
        <input type="radio" name="question4" value="Cobra">Cobra<br>
        <input type="radio" name="question4" value="Python">Python<br>
        <input type="radio" name="question4" value="Anaconda">Anaconda<br>
        <input type="radio" name="question4" value="Boa">Boa<br>
        <input type="hidden" name="question" value="4">
        <input type="submit" value="Suivant">
    </form>
</body>
</html>