<?php
function _connect($argHostname = NULL,
                  $argUsername = NULL,
                  $argPassword = NULL,
                  $argDatabasename = NULL, $persist=false)
{
    $_connectionID = @mysqli_init();
    if (!$_connectionID) {
        die('mysqli_init failed');
    }
    if (!$_connectionID->options(MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0')) {
        die('Setting MYSQLI_INIT_COMMAND failed');
    }

    if (!$_connectionID->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5)) {
        die('Setting MYSQLI_OPT_CONNECT_TIMEOUT failed');
    }
    $ok = mysqli_real_connect($_connectionID,
                                    $argHostname,
                                    $argUsername,
                                    $argPassword,
                                    $argDatabasename,3306, $socket= '/var/lib/mysql/mysql.sock');
    if (!$_connectionID->real_connect( $argHostname,
                                $argUsername,
                                $argPassword,
                                $argDatabasename , 3306, $socket= '/var/lib/mysql/mysql.sock') ) {
        die('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
    }
    var_dump($ok);

    echo 'Success... ' . $mysqli->host_info . "\n";
    $_connectionID->close();

}

_connect ('localhost','esdev','esdev','find_at');

?>
