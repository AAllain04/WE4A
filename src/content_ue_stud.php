<?php
session_start();
if (!isset($_SESSION['userRole']) || $_SESSION['userRole'] !== 'student') {
    header('Location: ../public/index.php');
    exit();
}

// Liste simulée de posts (ordre décroissant)
$posts = [
    [
        'type' => 'message',
        'auteur' => 'Prof. Dupont',
        'contenu' => 'N’oubliez pas de lire le chapitre 4.',
        'date' => '2025-04-06 10:30'
    ],
    [
        'type' => 'fichier',
        'auteur' => 'Prof. Dupont',
        'fichier' => 'cours_chapitre4.pdf',
        'lien' => '#',
        'date' => '2025-04-05 14:00'
    ],
];

// Récupération du titre du cours
$courseTitle = isset($_GET['title']) ? htmlspecialchars($_GET['title']) : 'Cours inconnu';

include('../src/views/header.php');
include('../src/views/nav.php') 
?>


<!DOCTYPE html>
<html lang="fr">
<?php
// Récupérer le titre du cours depuis l'URL
$courseTitle = isset($_GET['title']) ? htmlspecialchars(urldecode($_GET['title'])) : 'Cours inconnu';
?>
<!-- <div id="page" data-region="mainpage" data-usertour="scroller" class="drawers   drag-container"> -->
    <div class="main-inner-wrapper main-inner-outside-none main-inner-outside-nextmaincontent">
        <div id="topofscroll" class="main-inner">
            <div id="learnrpage" class="contentwrapper">
                <!-- MNL -->
                <!-- header -->
                <header id="page-header" class="header-maxwidth d-print-none">
                    <div class="w-100">

                        <!-- 1: acceuil/fise.... -->
                        <div class="d-flex flex-wrap">
                            <div id="page-navbar">
                                <nav aria-label="Barre de navigation">
                                    <ol class="breadcrumb">                                    
                                        <li class="breadcrumb-item"><a href="moodle.php">Accueil</a></li>                 
                                        <li class="breadcrumb-item"><span><?= $courseTitle ?></span></li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="ml-auto d-flex"></div>
                            <div id="course-header"></div>
                        </div>

                        <!-- 2: titre de ue -->
                        <div class="d-flex">
                            <div class="mr-auto">
                                <!-- MNL -->
                                <div class="page-context-header"><div class="page-header-headings"><h1 class="h2"><span><?= $courseTitle ?></span></h1></div></div>
                            </div>
                            <div class="header-actions-container ml-auto" data-region="header-actions-container"></div>
                        </div>
                    </div>   
                </header>


                <!-- faut faire des modifications -->
                <!-- content -->
                 <?php
                    // Connexion à la base de données
                    $conn = new mysqli("localhost", "root", "", "moodle_database");

                    // Vérifier la connexion
                    if ($conn->connect_error) {
                        die("Erreur de connexion : " . $conn->connect_error);
                    }

                    // Requête pour récupérer uniquement les messages et fichiers publiés par les professeurs
                    $sql = "SELECT * FROM posts WHERE author_role = 'prof' AND status = 'published' AND (type = 'message' OR type = 'partage de fichier')";
                    $result = $conn->query($sql);
                ?>

<div id="page-content" class="pb-3 d-print-block">
    <div id="region-main-box">
        <section id="region-main" aria-label="Contenu">
            <span class="notifications" id="user-notifications"></span>
            <div role="main">
                <span id="maincontent"></span>
                <div class="course-content">
                    <div class="stateready">
                        <h2 class="accesshide">Publications des professeurs</h2>
                        <ul class="topics" data-for="course_sectionlist">
                            <li class="section course-section main clearfix">
                                <div class="course-section-header d-flex">
                                    <div class="d-flex align-items-start position-relative">
                                        <h3 class="sectionname course-content-item d-flex align-items-center mb-0">
                                            Messages et fichiers publiés
                                        </h3>
                                    </div>
                                </div>
                                
                                <div id="coursecontentcollapse0" class="content course-content-item-content collapse show">
                                    <ul class="section m-0 p-0 img-text d-block">
                                        
                                        <?php
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<li class="activity activity-wrapper forum modtype_forum hasinfo">';
                                                echo '<div class="activity-item focus-control">';

                                                // Icône pour le type de publication
                                                echo '<div class="activity-icon activityiconcontainer smaller collaboration courseicon align-self-start mr-2">';
                                                if ($row['type'] == 'message') {
                                                    echo '<img src="../public/assets/message.png" class="activityicon" alt="Message">';
                                                } else if ($row['type'] == 'partage de fichier') {
                                                    echo '<img src="../public/assets/téléchargement.png" class="activityicon" alt="Fichier">';
                                                }
                                                echo '</div>';

                                                // Affichage du titre et du contenu
                                                echo '<div class="activity-name-area activity-instance d-flex flex-column mr-2">';
                                                echo '<div class="activitytitle media modtype_forum position-relative align-self-start">';
                                                echo '<div class="media-body align-self-center">';
                                                echo '<div class="activityname">';

                                                // Titre et contenu
                                                echo '<strong>' . htmlspecialchars($row['title']) . '</strong>';
                                                echo '<p>' . nl2br(htmlspecialchars($row['content'])) . '</p>';

                                                // Si c'est un fichier, afficher un lien de téléchargement
                                                if ($row['type'] == 'partage de fichier' && !empty($row['file_name'])) {
                                                    echo '<p><a href="' . htmlspecialchars($row['file_path']) . '" target="_blank">Télécharger : ' . htmlspecialchars($row['file_name']) . '</a></p>';
                                                }

                                                echo '</div></div></div></div></div></li>';
                                            }
                                        } else {
                                            echo '<li>Aucun message ou fichier partagé par les professeurs.</li>';
                                        }
                                        ?>

                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>                      
        </section>
    </div>
</div>

<?php
$conn->close();
?>

                
        </div>
    </div>
</div>

<?php include('../src/views/footer.php') ?>