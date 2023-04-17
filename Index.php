<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patro|Regio Mons-Bo</title>
</head>
<body>
<span class="head">
    <img src="" alt="">
    <input type="search" id="chercher" name="chercher" checked>
    <!-- Code php qui va redirect par rapport a le input search -->
    <?php 
    $search = $_POST['chercher'];
    
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#chercher').on('keydown', function(e){
                if(e.keyCode == 13){ // Si l'utilisateur appuie sur la touche "Entrée"
                    var searchQuery = $(this).val(); // Récupérer les termes de recherche saisis par l'utilisateur
                    $.ajax({
                        url: 'search.php', // L'URL du fichier PHP qui effectue la recherche
                        method: 'POST',
                        data: {searchQuery: searchQuery}, // Les termes de recherche saisis par l'utilisateur
                        success: function(response){
                            // Afficher les résultats de la recherche
                            console.log(response);
                        }
                    });
                }
            });
        });
    </script>
</span>
</body>
</html>