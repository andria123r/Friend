
<!DOCTYPE html> 
<html lang="en">
    <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>andria</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/fontawesome.min.css"/>
    <link rel="stylesheet" href="css/web.css"/>
    </head>
    <body class="bg-white  text-black">
        <div class="container">
            <h1 class="text-center">Contact me </h1>
            
            <form class="cont"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> "method="POST">
           
            <input  class="from-control" type="text"  max="10" main="3"   name="username" placeholder="username" />
                <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                </svg>
                
                <input class="from-control" type="email" name="email" placeholder="email" />
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-open-fill" viewBox="0 0 16 16">
                    <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.314l6.709 3.932L8 8.928l1.291.718L16 5.714V5.4a2 2 0 0 0-1.059-1.765l-6-3.2ZM16 6.873l-5.693 3.337L16 13.372v-6.5Zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516ZM0 13.373l5.693-3.163L0 6.873v6.5Z"/>
                  </svg>
                  
                <input class="from-control" type="text" name="cellphone" placeholder="phone" />
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
                    <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
                  </svg>
                
                <textarea class="form-control" name="massage" placeholder="your massage" >
                </textarea>
               
                <input class="btn btn-success btn-block" type="submit" value="send" name="send">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                    <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                  </svg>
            </form>
        </div>
        
        <script src="js/an.js.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/aav.js"></script>

    </body>
</html>
<?php
// define variables and set to empty values


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = ($_POST['username']);
  $mail = ($_POST['email']);
  $cell = ($_POST['cellphone']);
  $msg = ($_POST['massage']);

  $headers = 'from: ' .$mail .'\r\n';
$myEmail ="andria.jesus412@gmail.com";
$subject = "Contact from";
  if(empty($formErrors)){
    
    mail($myEmail,$subject, $msg, $headers);
}
}
?>

