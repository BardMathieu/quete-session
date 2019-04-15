<?php
//-----------NAV----------------------------------------------

// rajoute s'enrigistrer si pas enregistré ou deconnection

function deconnection(){
    if(isset($_SESSION['user']))  {
        echo '<li><a  href="./inc/deco.php">Deconnection</a></li>';
    }
}

// démarre la session

function checkuser(){
    if ((isset($_POST['loginname'])) and (!empty($_POST['loginname']))){
        $pseudo=htmlentities($_POST['loginname']);
        $_SESSION['user']=$pseudo;
        $_SESSION['panier']=array();
        $_SESSION['panier']['name']=array();
        $_SESSION['panier']['srcimg']=array();
        header('Location: index.php');

    }elseif ((isset($_POST['loginname'])) and (empty($_POST['loginname']))){
        echo 'Champs vide';
    }
}

function redirect(){
    if(!isset($_SESSION['user'])) {
        header('Location: login.php');
    }
}
function redirectleretour(){
    if(isset($_SESSION['user'])) {
        header('Location: index.php');
    }
}
function name(){
    if(isset($_SESSION['user'])){
        return $_SESSION['user'];
    }else{
        return 'Wilder';
    }
}
function panier(){
    if((isset($_POST['submit'])) and (isset($_SESSION['user']))){
        array_push($_SESSION['panier']['name'],$_POST['name']);
        array_push($_SESSION['panier']['srcimg'],$_POST['srcimg']);
    }
}
function afficheproduit(){
    $nbArticles=count($_SESSION['panier']['name']);
    if($nbArticles>0){
        for ($i=0 ;$i < $nbArticles ; $i++){?>
            <div class="row mar">
                <div class="col-md-6">
                    <img src="<?php echo $_SESSION['panier']['srcimg'][$i] ?>" width="200px" height="200px" class="center-block">
                </div>
                <div class="col-md-6 text-center">
                    <h3><?php echo $_SESSION['panier']['name'][$i] ?></h3>
                </div>
            </div> <?php
        }
    }
}
