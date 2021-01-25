<?php
                 
                 //$www_root = 'img/gallery/proyectos';
                $dir = 'img/gallery/proyectos';
                $file_display = array('jpg', 'jpeg', 'png', 'gif');
                 echo "ZABBI";
                 xdebug_break();
                if ( file_exists( $dir ) == false ) {
                     echo 'Directory \'', $dir, '\' not found!';
                } else {
                 $dir_contents = scandir( $dir );

            foreach ( $dir_contents as $file ) {
                $file_type = strtolower( end( explode('.', $file ) ) );
                if ( ($file !== '.') && ($file !== '..') && (in_array( $file_type, $file_display)) ) {
           //  $test = '<div class="row grid no-gutters">' Hola '</div>';
            // echo $test;

                }
            }
    }
?>