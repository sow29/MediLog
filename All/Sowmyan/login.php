<?php
session_start();

include "db_con.php";

if ( isset( $_POST[ 'uname' ] ) && isset( $_POST[ 'password' ] ) ) {

  function validate( $data ) {
    $data = trim( $data );
    $data = stripslashes( $data );
    $data = htmlspecialchars( $data );
    return $data;
  }

  $uname = validate( $_POST[ 'uname' ] );
  $pass = validate( $_POST[ 'password' ] );

  $sql = "SELECT * FROM doctor where name = '$uname' AND password = md5('$pass')";

  $result = mysqli_query( $conn, $sql );

  if ( mysqli_num_rows( $result ) == 1 ) {

    header("location: ../html/home.html");

  } else {

    $_SESSION[ "error" ] = "username or password is incorrect";
    header( "location: index.php" ); //send user back to the login page.
    exit();

  }

} else {

  //header( "Location: index.php" );
  echo "error";

  exit();

}
?>
