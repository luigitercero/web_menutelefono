<?php
	/*
	Template Name: Productos
	*/
	get_header();
?>
<div class="central_block">
	<div class="row content_section_center">
		<?php $args = array(
			'posts_per_page'   => -1,
			'offset'           => 0,
			'category'         => '',
			'category_name'    => 'fregaderos',
			'orderby'          => 'post_date',
			'order'            => 'DESC',
			'include'          => '',
			'exclude'          => '',
			'meta_key'         => '',
			'meta_value'       => '',
			'post_type'        => 'producto',
			'post_mime_type'   => '',
			'post_parent'      => '',
			'post_status'      => 'publish',
			'suppress_filters' => true
		);
		$productos = get_posts( $args );
		?>
		<div class="large-12 medium-12 small-12 columns section_center section_center_A contenedor_texto">
		<h2 ><?php echo get_the_category($productos[0])[0] ->name?></h2>
		<?php
			echo '<div class="content_list_p">';
			foreach ($productos as $key => $producto) {
				$id = $producto ->ID;
				$url = wp_get_attachment_url( get_post_thumbnail_id($id,'large') );
				echo '<div class="content_product">
						<img src="'.$url.'" alt="">
						<div class="data_product">
							<span>'.$producto ->post_title.'</span>
							<span><a href="'.get_permalink($id).'">ver detalles</a></span>
						</div>
					</div>';
			}
			echo '</div>';
		?>
		</div>
		<?php $args = array(
			'posts_per_page'   => -1,
			'offset'           => 0,
			'category'         => '',
			'category_name'    => 'grifos',
			'orderby'          => 'post_date',
			'order'            => 'DESC',
			'include'          => '',
			'exclude'          => '',
			'meta_key'         => '',
			'meta_value'       => '',
			'post_type'        => 'producto',
			'post_mime_type'   => '',
			'post_parent'      => '',
			'post_status'      => 'publish',
			'suppress_filters' => true
		);
		$productos = get_posts( $args );
		?>
		<div class="large-12 medium-12 small-12 columns section_center section_center_A contenedor_texto">
		<h2 ><?php echo get_the_category($productos[0])[0] ->name?></h2>
		<?php
			echo '<div class="content_list_p">';
			foreach ($productos as $key => $producto) {
				$id = $producto ->ID;
				$url = wp_get_attachment_url( get_post_thumbnail_id($id,'large') );
				echo '<div class="content_product">
						<img src="'.$url.'" alt="">
						<div class="data_product">
							<span>'.$producto ->post_title.'</span>
							<span><a href="'.get_permalink($id).'">ver detalles</a></span>
						</div>
					</div>';
			}
			echo '</div>';
		?>
		</div>
		<?php $args = array(
			'posts_per_page'   => -1,
			'offset'           => 0,
			'category'         => '',
			'category_name'    => 'bidets',
			'orderby'          => 'post_date',
			'order'            => 'DESC',
			'include'          => '',
			'exclude'          => '',
			'meta_key'         => '',
			'meta_value'       => '',
			'post_type'        => 'producto',
			'post_mime_type'   => '',
			'post_parent'      => '',
			'post_status'      => 'publish',
			'suppress_filters' => true
		);
		$productos = get_posts( $args );
		?>
		<div class="large-12 medium-12 small-12 columns section_center section_center_A contenedor_texto">
		<h2><?php echo get_the_category($productos[0])[0] ->name?></h2>
		<?php
			echo '<div class="content_list_p">';
			foreach ($productos as $key => $producto) {
				$id = $producto ->ID;
				$url = wp_get_attachment_url( get_post_thumbnail_id($id,'large') );
				echo '<div class="content_product">
						<img src="'.$url.'" alt="">
						<div class="data_product">
							<span>'.$producto ->post_title.'</span>
							<span><a href="'.get_permalink($id).'">ver detalles</a></span>
						</div>
					</div>';
			}
			echo '</div>';
		?>
		</div>
	</div>
</div>
<?php get_footer();?>