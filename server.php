<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sstyle.css">
    <style>body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #508154;
    color: #e6e6e6;
    padding: 10px;
    text-align: center;
}

nav ul {
    list-style: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 10px;
}
main {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
}

footer {
    background-color: #508154;
    color: #fff;
    text-align: center;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
}
button:hover{
    background-color: rgb(224, 165, 165);
}
</style>
    <title> Home</title>
</head>
<body>
    <header>
        <h1 style="font-family: Verdana, Geneva, Tahoma, sans-serif;">PAGE SERVICE</h1>
        <nav>
            <ul>
                <li><a href="home.html"><button>Accueil</button></a></li>
                <li><button type="button" onclick="window.open('contact.php')" class="login-button">Contact</button></li>
                <li><button type="button" onclick="window.open('index.php')" class="login-button">About</button></li>
                
                
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Welcome !!</h2>
            <h2>Bienvenue sur le système de gestion des étudiants</h2>
            <p>Ce système vous permet de gérer la liste des étudiants de manière simple et efficace.</p>
        </section>

        <section>
            <h2>Fonctionnalités principales</h2>
            <ul>
                <li>Afficher la liste des étudiants</li>
                <li>Ajouter de nouveaux étudiants</li>
            </ul>
        </section>

        <section>
            <h2>Service</h2>
            <p>Cette page de service permet de gérer la liste des étudiants. Vous pouvez afficher la liste actuelle des étudiants, ainsi que ajouter de nouveaux étudiants à la base de données.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 page service</p>
    </footer>
</body>
</html>
