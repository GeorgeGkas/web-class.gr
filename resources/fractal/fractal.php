<?php
    /*
        Developer: Dionysis "dionyziz" Zindros <dionyziz@kamibu.com>
                   Petros Aggelatos <petros@kamibu.com>
                   
        Copyright (c) 2010, Dionysis Zindros and Petros Aggelatos
        All rights reserved.

        Redistribution and use in source and binary forms, with or without
        modification, are permitted provided that the following conditions are met:
            * Redistributions of source code must retain the above copyright
              notice, this list of conditions and the following disclaimer.
            * Redistributions in binary form must reproduce the above copyright
              notice, this list of conditions and the following disclaimer in the
              documentation and/or other materials provided with the distribution.
            * Neither the name of Dionysis Zindros nor Petros Aggelatos nor the
              names of its contributors may be used to endorse or promote products
              derived from this software without specific prior written permission.

        THIS SOFTWARE IS PROVIDED BY DIONYSIS ZINDROS AND PETROS AGGELATOS ``AS IS'' AND ANY
        EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
        WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
        DISCLAIMED. IN NO EVENT SHALL KAMIBU BE LIABLE FOR ANY
        DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
        (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
        LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
        ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
        (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
        SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
    */

    define( "WIDTH", 800 );
    define( "HEIGHT", 600 );
    define( "MIN_X", -2 );
    define( "MAX_X", 1 );
    define( "MIN_Y", -1 );
    define( "MAX_Y", 1 );
    define( "N", 15 );
    define( "M", 2 );
    define( "RESOLUTION_X", 0.002 );
    define( "RESOLUTION_Y", RESOLUTION_X );

    set_time_limit( 200 );

    function square( $a ) {
        return array(
            $a[ 0 ] * $a[ 0 ] - $a[ 1 ] * $a[ 1 ],
            2 * $a[ 0 ] * $a[ 1 ]
        );
    }

    function transform_x( $x ) {
        return WIDTH * ( $x - MIN_X ) / ( MAX_X - MIN_X );
    }

    function transform_y( $y ) {
        return HEIGHT * ( - $y - MIN_Y ) / ( MAX_Y - MIN_Y );
    }

    function add( $x, $y ) {
        return array(
            $x[ 0 ] + $y[ 0 ],
            $x[ 1 ] + $y[ 1 ]
        );
    }

    function value( $x ) {
        return $x[ 0 ] * $x[ 0 ] + $x[ 1 ] + $x[ 1 ];
    }

    function Mandelbrot( $x, $y ) {
        $z = 0;
        $c = array( $x, $y );
        for ( $i = 0; $i < N; ++$i ) {
            $z = add( square( $z ), $c );
            if ( value( $z ) > M ) {
                return $i;
            }
        }
        return true;
    }

    $im = imagecreatetruecolor( WIDTH, HEIGHT );
    $white = imagecolorallocate( $im, 255, 255, 255 );
    $color = array();
    for ( $i = 0; $i < N; ++$i ) {
        $clr = $i / N;
        $color[ $i ]  = imagecolorallocate( $im, 200 * $clr, 255 * $clr, 100 + $clr * 155 );
    }

    imagefill( $im, 0, 0, $white );

    for ( $x = MIN_X; $x <= MAX_X; $x += RESOLUTION_X ) {
        for ( $y = MIN_Y; $y <= MAX_Y; $y += RESOLUTION_Y ) {
            $i = Mandelbrot( $x, $y );
            imagesetpixel( $im, transform_x( $x ), transform_y( $y ), $color[ $i ] );
        }
    }

    header( "Content-type: image/png" );
    imagepng( $im );
?>
