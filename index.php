<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Se connecter sur le site | UTBM</title>
    <link rel="stylesheet" href="Styles/login.css">
</head>

<body>
    <div id="main-container">
        
        <div id="box-login-form">
            <img class="utbm-logo" src="https://moodle.utbm.fr/pluginfile.php/1/theme_boost_union/logo/0x200/1739884911/225px-UTBM_Logo.jpg"/>
            <br>  

            <form action="/action_page.php">
            
                <input type="text" id="username" name="username" class="form-control" placeholder="Nom d'utilisateur">

                <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe">
                
                <input type="submit" class="form-control" onclick="CheckPassword()" value="Connexion">
            
            </form>
        
            <div id="box-forgotten-password" class="form-control">

                <a id="lost-password" href="https://moodle.utbm.fr/login/forgot_password.php"> Mot de passe perdu ?</a>
            </div>
        </div>

        
    </div>

    <script>
        function CheckPassword() {
            var password = document.getElementById("password");
            if (password.value.length < 4) {
                alert("Le mot de passe doit contenir au moins 4 caractères.");
                return false; 
            }
            return true; 
        }

       

    </script>
</body>
</html>
