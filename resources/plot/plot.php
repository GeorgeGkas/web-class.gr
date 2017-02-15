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

    header( 'Content-type: image/png' );

    define( 'WIDTH', 800 );
    define( 'HEIGHT', 600 );
    define( 'STEP', 0.001 );
    define( 'FONT', dirname( __FILE__ ) . '/verdana.ttf' );

    $im = imagecreatetruecolor( WIDTH, HEIGHT );
    $black = imagecolorallocate( $im, 0, 0, 0 );
    $white = imagecolorallocate( $im, 255, 255, 255 );
    $orange = imagecolorallocate( $im, 255, 200, 100 );
    $gray = imagecolorallocate( $im, 200, 200, 200 );
    imagefill( $im, 0, 0, $white );

    function f( $x ) {
        return sin( 10 * $x ) / 2;
    }

    function draw( $x1, $y1, $x2, $y2 ) {
        global $im, $black, $orange;

        $x1 = transform_x( $x1 );
        $x2 = transform_x( $x2 );

        $y1 = transform_y( $y1 );
        $y2 = transform_y( $y2 );

        imageline( $im, $x1, $y1, $x2, $y2, $black );
    }

    function draw_fill( $x1, $y1, $x2, $y2 ) {
        global $im, $orange;

        $x1 = transform_x( $x1 );
        $x2 = transform_x( $x2 );

        $y1 = transform_y( $y1 );
        $y2 = transform_y( $y2 );
        
        imagepolygon( $im, array(
            $x1, $y1,
            $x2, $y2,
            $x2, transform_y( 0 ),
            $x1, transform_y( 0 )
        ), 4, $orange );

        imagefill( $im, ( $x1 + $x2 ) / 2, ( $y1 + $y2 + 2 * transform_y( 0 ) ) / 4, $orange );
    }

    function transform_x( $x ) {
        return $x * ( WIDTH / 2 ) + WIDTH / 2;
    }

    function transform_y( $y ) {
        return HEIGHT / 2 - $y * ( HEIGHT / 2 );
    }

    function draw_axes() {
        global $im, $black, $gray;

        for ( $x = -1.1; $x <= 1.1; $x += 0.2 ) {
            imagearc( $im, transform_x( $x ), transform_y( y ), 3, 3, 0, 360, $black );
            imagettftext( $im, 10, 0, transform_x( $x ) - 10, transform_y( 0 ) - 4, $black, FONT, $x );
            for ( $y = 0; $y <= HEIGHT; $y += 30 ) {
                imageline( $im, transform_x( $x ), $y, transform_x( $x ), $y + 10, $gray );
            }
            imagearc( $im, transform_x( $x ), transform_y( f( $x ) ), 3, 3, 0, 360, $black );
            for ( $xprime = 0; $xprime <= transform_x( $x ); $xprime += 30 ) {
                imageline( $im, $xprime, transform_y( f( $x ) ), $xprime + 10, transform_y( f( $x ) ), $gray );
            }
            imagettftext( $im, 10, 0, transform_x( $x ) + 4, transform_y( f( $x ) ), $black, FONT, round( f( $x ), 2 ) );
        }

        // x axis
        imageline( $im, 0, HEIGHT / 2, WIDTH, HEIGHT / 2, $black );
        // y axis
        imageline( $im, WIDTH / 2, 0, WIDTH / 2, HEIGHT, $black );

        // box
        imageline( $im, 0, 0, WIDTH, 0, $black );
        imageline( $im, 0, 0, 0, HEIGHT, $black );
        imageline( $im, 0, HEIGHT - 1, WIDTH - 1, HEIGHT - 1, $black );
        imageline( $im, WIDTH - 1, 0, WIDTH - 1, HEIGHT - 1, $black );
    }

    function draw_f() {
        global $im, $orange;

        $prevx = -1.1;
        $prevy = f( -1.1 );
        for ( $x = -1.1; $x <= 1.1; $x += STEP ) {
            $y = f( $x );
            draw_fill( $prevx, $prevy, $x, $y );
            $prevx = $x;
            $prevy = $y;
        }

        $prevx = -1;
        $prevy = f( -1 );
        for ( $x = -1 + STEP; $x <= 1.1; $x += STEP ) {
            $y = f( $x );
            draw( $prevx, $prevy, $x, $y );
            $prevx = $x;
            $prevy = $y;
        }
    }

    draw_f();
    draw_axes();

    imagepng( $im );
?>
