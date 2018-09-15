<html>
<head>
    <title> Hello php </title>
</head>

<body>

 Forms
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name">
    <br><br>
    E-mail: <input type="text" name="email">
    <br><br>
    Website: <input type="text" name="website">
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
$String = "the complete web developer ";
$replace =str_replace("the","The replaced sucesfuly",$String );
echo "$String";
echo "<br>";
echo "$replace";
echo "<br>";


//extract String
$extract = substr($String,4,12);
echo "$extract";
echo "<br>";

//Uppper Case
$uppercase = ucwords($String);
echo "$uppercase";
echo "<br>";

// to all upper case
$UPPERCASE = strtoupper($String);
echo "$UPPERCASE";
echo "<br>";

//Arrays
$array = array("ahmed","omar","farouq");
echo " array 2 = " .$array[2];
echo "<br>";
// explode arrays
// imploade


 // sessions store informations in the server for a while  the same as an array
if (!isset($_SESSION)) {
    session_start();
}

//Cockies long time
setcookie("name","value","time()+60*60*24*30","C:\ ","","yes","https");
echo $_COOKIE["name"];


// upload files
$err = $_FILES["Uploadeedfiles"] ["error"];
if ($err<= 0 ) // theere is no errors
{
    // it means like move to a permenant locations instead of the temporary one
    $files = $_FILES["Uploadeedfiles"] ["name"];
    $temp = $_FILES["Uploadeedfiles"] ["tmp_name"];
     move_uploaded_file($temp,"uploads/".$files);
}
 else {
     echo "Error while uploading the file : " .$err;
 }

 // emails
  $email = "farouk.benarous@gmail.com";
  $subject = "nothing";
  $message = "haw kirak chwiya ana khayek ";
  $headres = 'MIME-Version: 1.0' ."\r \n";
  $headres .= 'Content-type : text\html; charset = iso-8859-1'."\r \n";
  mail($email,$subject,$message,$headres);
 wordwrap($email,70,"\n",true);
 ?>

<?php
// FIles
$filehandler = fopen("test.txt","w")or die("Failed");
$text = "the text that we want to write in the test file";
fwrite($filehandler,$text);
fclose($filehandler);

//read a file
$fileread = fopen("test.txt","r");
$content = fread($fileread,filesize("test.txt"));
fclose($fileread);


// Read the first line
$filefirst = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($filefirst);
fclose($filefirst);

//write  in a file without erasing
$apendfile =  fopen("test.txt","a")or die("Failed");
fwrite($filehandler,"\n". "more content" );
fclose($apendfile);

echo $content;
include "test.txt";

// delete the file definetly
unlink("test.txt");

?>




<?php
// Filtring Data
// this contain are the deffirent  extentions that the php allows
filter_list();

// Sanitize a String
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;


//Error handling Send an email  report
//trigger error
//error handler function

function customError($errno, $errstr) {
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "Webmaster has been notified";
    error_log("Error: [$errno] $errstr",1,
        "someone@example.com","From: webmaster@example.com");
}

//set error handler
set_error_handler("customError",E_USER_WARNING);

//trigger error
$test=2;
if ($test>=1) {
    trigger_error("Value must be 1 or below",E_USER_WARNING);
}

// Exceptions

class customException extends Exception {
  public function errorMessage() {
    //error message
    $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
    .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
    return $errorMsg;
  }
}

$email = "someone@example...com";

try {
  //check if
  if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
    //throw exception if email is not valid
    throw new customException($email);
  }
}

catch (customException $e) {
  //display custom message
  echo $e->errorMessage();
}
?>




</body>
</html>
