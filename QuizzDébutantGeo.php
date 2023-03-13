<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz Débutant Géo</title>
</head>
<body>
    <h1>Quizz (histoire/géo) facile</h1>
    <p>Bonne chance à vous !</p>
    <form action="reponsesquizz.php" method="post">
        <p>Question 1 : Quelle est la capitale de la France ?</p>
        <input type="radio" name="question1" value="Paris">Paris<br>
        <input type="radio" name="question1" value="Lyon">Lyon<br>
        <input type="radio" name="question1" value="Marseille">Marseille<br>
        <input type="radio" name="question1" value="Bordeaux">Bordeaux<br>
        <input type="hidden" name="question" value="1">
        <input type="submit" value="Suivant">
    </form> 
    <form action="reponsesquizz.php" method="post">
        <p>Question 2 : Quelles couleurs constituent le drapeau de l'Espagne ?</p>
        <input type="radio" name="question2" value="Rouge et noir">Rouge et noir<br>
        <input type="radio" name="question2" value="Bleu, jaune et rouge">Bleu, jaune et rouge<br>
        <input type="radio" name="question2" value="Bleu et jaune">Bleu et jaune<br>
        <input type="radio" name="question2" value="Rouge et jaune">Rouge et jaune<br>
        <input type="hidden" name="question" value="2">
        <input type="submit" value="Suivant">
    </form>
    <form action="reponsesquizz.php" method="post">
        <p>Question 3 : Qui est le/la président(e) actuel(le) des États-Unis ?</p>
        <input type="radio" name="question3" value="Donald Trump">Donald Trump<br>
        <input type="radio" name="question3" value="Vladimir Poutine">Vladimir Poutine<br>
        <input type="radio" name="question3" value="Joe Biden">Joe Biden<br>
        <input type="radio" name="question3" value="Hillary Clinton">Hillary Clinton<br>
        <input type="hidden" name="question" value="3">
        <input type="submit" value="Suivant">
    </form>
</body>
</html>
