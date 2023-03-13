<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz de géographie</title>
</head>
<body>
    <h1>Quizz (histoire/géo) intermédiaire</h1>
    <p>Bonne chance à vous !</p>
    <form action="Projet.php" method="post">
        <p>Question 1 : Quelle est la capitale des États-Unis ?</p>
        <input type="radio" name="question1" value="New York">New York<br>
        <input type="radio" name="question1" value="Washington DC">Washington DC<br>
        <input type="radio" name="question1" value="Los Angeles">Los Angeles<br>
        <input type="radio" name="question1" value="Hollywood">Hollywood<br>
        <input type="hidden" name="question" value="1">
        <input type="submit" value="Suivant">
    </form> 
    <form action="reponsesquizz.php" method="post">
        <p>Question 2 : Quelles couleurs constituent le drapeau de la Pologne ?</p>
        <input type="radio" name="question2" value="Rouge et noir">Rouge et noir<br>
        <input type="radio" name="question2" value="Bleu, jaune et rouge">Bleu, jaune et rouge<br>
        <input type="radio" name="question2" value="Bleu et jaune">Bleu et jaune<br>
        <input type="radio" name="question2" value="Rouge et blanc">Rouge et blanc<br>
        <input type="hidden" name="question" value="2">
        <input type="submit" value="Suivant">
    </form>
    <form action="reponsesquizz.php" method="post">
        <p>Question 3 : Combien sommes-nous sur Terre ? (en milliards d'êtres humains)</p>
        <input type="radio" name="question3" value="5">5<br>
        <input type="radio" name="question3" value="6">6<br>
        <input type="radio" name="question3" value="7">7<br>
        <input type="radio" name="question3" value="8">8<br>
        <input type="hidden" name="question" value="3">
        <input type="submit" value="Suivant">
    </form> 
    <form action="reponsesquizz.php" method="post">
        <p>Question 4 : Quel est le plus grand pays du monde en termes de superficie ?</p>
        <input type="radio" name="question4" value="États-Unis">États-Unis<br>
        <input type="radio" name="question4" value="Russie">Russie<br>
        <input type="radio" name="question4" value="Canada">Canada<br>
        <input type="radio" name="question4" value="Chine">Chine<br>
        <input type="hidden" name="question" value="4">
        <input type="submit" value="Suivant">
    </form> 
    <form action="reponsesquizz.php" method="post">
        <p>Question 5 : Quel est le plus grand désert du monde ?</p>
        <input type="radio" name="question5" value="Le désert de Mojave">Le désert de Mojave<br>
        <input type="radio" name="question5" value="Le désert d'Arabie">Le désert d'Arabie<br>
        <input type="radio" name="question5" value="Le Sahara">Le Sahara<br>
        <input type="radio" name="question5" value="Le désert de Gobi">Le désert de Gobi<br>
        <input type="hidden" name="question" value="5">
        <input type="submit" value="Suivant">
    </form> 
</body>
</html>