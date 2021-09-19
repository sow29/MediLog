<?php

session_start();

include "db_con.php";

if ( isset( $_POST[ 'Uname' ] ) && isset( $_POST[ 'Pass' ] ) ) {

  function validate( $data ) {

    $data = trim( $data );

    $data = stripslashes( $data );

    $data = htmlspecialchars( $data );

    return $data;

  }

  $uname = validate( $_POST[ 'Uname' ] );

  $pass = validate( $_POST[ 'Pass' ] );

  $sql = "SELECT * FROM doctor where name = '$uname' AND password = md5('$pass')";

  $result = mysqli_query( $conn, $sql );

  if ( mysqli_num_rows( $result ) == 1 ) {

    echo "Logged in!";

  } else {

    //header( "Location: index.php?error=Incorect User name or password" );
    echo "password error";

    exit();

  }

} else {

  //header( "Location: index.php" );
  echo "error";

  exit();

}
?>