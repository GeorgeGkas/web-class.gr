<?php
    define( 'MAXLEN' , 6 );
    define( 'CRACK' , '098f6bcd4621d373cade4e832627b4f6' );
    
    $chars = array_merge( 
                range( 0, 9 ), // 10
                range( 'a', 'z' ) // 26
            );
    $diglen = count( $chars );
    
    function inc( &$array, $pos ) {
        global $diglen;
        global $chars;
        
        if ( $pos >= count( $array ) ) {
            return false;
        }
        
        if ( ++$array[ $pos ] >= $diglen ) {
            $array[ $pos ] = 0;
            return inc( $array, $pos + 1 );
        }
        return true;
    }
    
    for ( $numchars = 0; $numchars <= MAXLEN; ++$numchars ) {
        echo "Testing $numchars-digits passwords...\n";
        if ( $numchars == 0 ) {
            $mm = array();
        }
        else {
            $mm = array_fill( 0, $numchars, 0 );
        }
        do {
            $ll = '';
            for ( $j = 0; $j < count( $mm ); ++$j ){
                $ll .= $chars[ $mm[ $j ] ];
            }
            if ( md5( $ll ) == CRACK ) {
                echo 'Password: ' . $ll . "\n";
                exit();
            }
        } while ( inc( $mm, 0 ) );
    }
?>

