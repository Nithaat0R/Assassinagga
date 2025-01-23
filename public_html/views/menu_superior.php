<header class="menu-superior">
    <div class="logo">
        <a href="../index.php">
            <img src="/img/logo.png" id="logo" class="responsive-img">
        </a>
    </div>
    <div class="centre"></div>
    <div class="perfil">
        <button id="button-hide-elements">
            <img src="/img/profile.png" id="profile" class="responsive-img">
        </button>
        <div id="menu-desplegable">
            <?php if(!isset($_SESSION['name'])){ ?>
                <ul>
                    <li><a href="../index.php?action=register">Registre</a></li>
                    <li><a href="../index.php?action=login">Log in</a></li>
                </ul>
            <?php } else { ?>
                <ul>
                    <li><a href="../index.php?action=compte">El meu compte</a></li>
                    <li><a href="../index.php?action=historic_comandes">Historic de <br>comandes</a></li>
                </ul>
            <?php } ?>
        </div>      
    </div>
</header>
<div class="subHeader"></div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#menu-desplegable li').hide();

        $('#button-hide-elements').click(function(){
            $('li').toggle('slow');
        });
    });
</script>