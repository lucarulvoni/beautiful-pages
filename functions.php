<?php


//funzione split titolo da path pagina
function explode_title() {
$title = ($_SERVER['REQUEST_URI']); 
$title_new = explode("/", $title);
$ultimo = end($title_new);

$estensioni = ['.php','.html','.htm','.asp'];
$elimina_ultimi_chr = substr($ultimo, 0, -4);
    return $elimina_ultimi_chr; 
}


function recupera_password() {


}

function elimina_user() {


}



function vero_ip() {
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
  }


  function email_exist(){

  extract($_POST);
  include_once('./backend/connection.php');
  $sql=mysqli_query($conn,"SELECT * FROM login where email='$email'");
  if(mysqli_num_rows($sql)>0)
  {
      echo "Email Id Already Exists"; 
    exit;
  }
}

  function crea_user(){
    
    $user = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];
  
    //check dati ricevuti
    $user = htmlspecialchars($user);
    $password = htmlspecialchars($password);
    //$indirizzo_ip = $_SERVER['REMOTE_ADDR'];
    $ip = vero_ip();
    $data_registrazione = date('Y-m-d');
    $ultimo_accesso = date('Y-m-d');  

  

    if(isset($_POST['submit'])) {

    try {
      
      include_once('./backend/connection.php');
      //creiamo una sessione
      session_start();
      $_SESSION["username"] = $user; 


        $sql = "INSERT INTO login (username, password, email, ip, first_access, last_access)
    VALUES ('$user', '$password','$email','$ip','$data_registrazione','$ultimo_accesso')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    header("Location:login.php");
    } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

    }  

  
}


  
function login_users() {

    $login = $_POST['login'];
    $password = $_POST['password'];
    $ip = vero_ip();
    $data_registrazione = date('d/m/Y');    
    $data_ultimo_accesso = date('d/m/Y');

    
}

function check_user_exist(){


}



 


function options(){
    define('MASTER','Luca Rulvoni');
    define('FOUNDER','Luca Rulvoni');
    define('VERSION','0.1');
    define('EMAIL','hack@spritecoder.com');
    define('COUPON','AAA0001QWE2321');
    return MASTER;
}










?>