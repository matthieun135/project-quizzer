<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz Histoire</title>
</head>
<body>
    <h1>Quizz Histoire</h1>
    <p>Bonne chance à vous !</p>
    <form action="reponsesquizz.php" method="post">
        <p>Question 1 : Combien d'années a duré la guerre de 100 ans ? </p>
        <input type="radio" name="question1" value="102 ans">102 ans<br>
        <input type="radio" name="question1" value="100 ans">100 ans<br>
        <input type="radio" name="question1" value="124 ans">124 ans<br>
        <input type="radio" name="question1" value="116 ans">116 ans<br>
        <input type="hidden" name="question" value="1">
        <input type="submit" value="Suivant">
    </form> 
    <form action="reponsesquizz.php" method="post">
        <p>Question 2 : En quelle année a eu lieu la révolution Française ? </p>
        <input type="radio" name="question2" value="1492">1492<br>
        <input type="radio" name="question2" value="1918">1918<br>
        <input type="radio" name="question2" value="1789">1789<br>
        <input type="radio" name="question2" value="1998">1998<br>
        <input type="hidden" name="question" value="2">
        <input type="submit" value="Suivant">
    </form> 
    <form action="reponsesquizz.php" method="post">
        <p>Question 3 : Quel roi a fait construire le château de Versailles ? </p>
        <input type="radio" name="question3" value="Louis XIV">Louis XIV<br>
        <input type="radio" name="question3" value="Louis XIII">Louis XIII<br>
        <input type="radio" name="question3" value="Louis XV">Louis XV<br>
        <input type="radio" name="question3" value="Louis XVI">Louis XVI<br>
        <input type="hidden" name="question" value="3">
        <input type="submit" value="Suivant">
    </form>
    <form action="reponsesquizz.php" method="post">
        <p>Question 4 : En quelle année Christophe Colombe a t-il découvert l'Amérique? </p>
        <input type="radio" name="question4" value="1523">1523<br>
        <input type="radio" name="question4" value="1492">1492<br>
        <input type="radio" name="question4" value="1789">1789<br>
        <input type="radio" name="question4" value="1806">1806<br>
        <input type="hidden" name="question" value="4">
        <input type="submit" value="Suivant">
    </form>
</body>
</html>