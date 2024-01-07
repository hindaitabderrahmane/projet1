<?php

class GestionnaireProfesseurs {
    private $professeurs = [];

    // ... (autres méthodes et propriétés)

    public function selectProfesseurById($id, $conn) {
        $sql = "SELECT id, nom, prenom, matiere FROM professeurs WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $professeur = new Professeur($row['id'], $row['nom'], $row['prenom'], $row['matiere']);
            return $professeur;
        } else {
            return null;
        }
    }
}

$gestionnaireProfesseurs = new GestionnaireProfesseurs();
$conn = mysqli_connect("localhost", "root", " ", "testingdb");

if (!$conn) {
    die("La connexion a échoué: " . mysqli_connect_error());
}
$professeurTrouve = $gestionnaireProfesseurs->selectProfesseurById(1, $conn);

if ($professeurTrouve !== null) {
    // Faire quelque chose avec le professeur trouvé
    echo 'Nom du professeur: ' . $professeurTrouve->getNom();
} else {
    // Le professeur n'a pas été trouvé
    echo 'Professeur non trouvé.';
}

// N'oubliez pas de fermer la connexion après utilisation
mysqli_close($conn);
?>
