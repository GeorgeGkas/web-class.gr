<ol><?php
	foreach( $posts as $post ) {
		?><li><strong><?php
			echo $post[ 1 ];
		?>: </strong><?php
			echo $post[ 0 ];
		?></li><?php
	}
?></ol>