<!--Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare-->





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHPbadwords</title>
</head>
<body>
<header>
        <h2>Scrivi qualcosa e poi una parola da censurare</h2>
        <form action="censure.php" method="get">
            <input type="text" name="paragraph" placeholder="Inserisci testo">
            <input type="text" name="censored" placeholder="Inserisci la parola che vuoi  censurare">
            <button type="submit">Invia</button>
        </form>
        
    </header>
    
</body>
</html>