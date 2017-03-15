<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once('/home1/votethrd/public_html/wp-content/themes/kleo-child/paginate.php'); 
?>

<div id="<?php echo $wdType; ?>-media-tabs" class="rtm-tabs-container ">
	<ul class="rtm-tabs clearfix" data-hash="false">
		<?php
		$active_counter = 0;
		foreach ($allowed as $type) {
			$active_counter ++;
			?>
			<li <?php if ($active_counter == 1) echo "class='active'"; ?> >
				<a href="#<?php rtm_widget_get_tab_id($wdType, $type, $widgetid) ?>">
					<?php echo apply_filters('rtm_gallery_widget_media_type_title', $strings[$type], $type, $wdType); ?>
				</a>
			</li>
			<?php
		}

		// most rated albums
		if( $allow_most_rated_album ){
			$type = 'most_rated_album';
			if( empty( $most_rated_album_title ) ){
				$most_rated_album_title = apply_filters( 'rtm_gallery_widget_media_type_title', __( 'Most Rated ' . RTMEDIA_ALBUM_PLURAL_LABEL, 'rtmedia' ), $type, $wdType );
			}
			?>
			<li <?php if( $active_counter == 1 ) echo "class='active'"; ?> >
				<a href="#<?php rtm_widget_get_tab_id( $wdType, $type, $widgetid ) ?>">
					<?php echo $most_rated_album_title; ?>
				</a>
			</li>
			<?php
		}
		?>
	</ul>

	<?php
	foreach ($allowed as $type) {
		$active_counter ++;
		?>
		<div id="<?php rtm_widget_get_tab_id($wdType, $type, $widgetid) ?>" class="rt-media-tab-panel <?php if ($active_counter == 1) echo "active-div"; ?>">
			<?php
			$bp_media_widget_query = $widget_media_array[$type];
			$per_page = 10;
			$total_results = count($bp_media_widget_query);
			$total_pages = ceil($total_results / $per_page);
			
			//-------------if page is setcheck------------------//
			$show_page = '';
			if (isset($_GET['pagi'])) {
				$show_page = $_GET['pagi'];             //it will telles the current page
				if ($show_page > 0 && $show_page <= $total_pages) {
					$start = ($show_page - 1) * $per_page;
					$end = $start + $per_page;
				} else {
					$start = 0;              
					$end = $per_page;
				}
			} else {
				$start = 0;
				$end = $per_page;
				$total_results;
			}
			// display pagination
			$page = intval($_GET['pagi']);

			$tpages = $total_pages;
			if ($page <= 0)
				$page = 1;

			$reload = site_url('gallery'). "?tpages=" . $tpages;
			
			$active_counter = 0;
			if (sizeof($bp_media_widget_query) > 0) {
				?>
				<ul class="widget-item-listing clearfix">
				<?php
					//foreach ($bp_media_widget_query as $rt_media_gallery) {	
					for ($i = $start; $i < $end; $i++) {
					// make sure that PHP doesn't try to show results that don't exist
					if ($i == $total_results) {
					break;
				}
					?>
						<li class="rtmedia-list-item" style="height:<?php echo $thumbnail_height; ?>px; width:<?php echo $thumbnail_width; ?>px;">
							<?php do_action("rtmedia_gallery_widget_before_media", $bp_media_widget_query[$i]); ?>
							<a href ="<?php echo get_rtmedia_permalink($bp_media_widget_query[$i]->id); ?>" title="<?php echo $bp_media_widget_query[$i]->media_title; ?>">
							<div class="rtmedia-item-thumbnail">
							<img src="<?php rtmedia_image("rt_media_thumbnail", $bp_media_widget_query[$i]->id); ?>" alt="<?php echo $bp_media_widget_query[$i]->media_title; ?>">
							</div>
							</a>
							<?php do_action("rtmedia_gallery_widget_after_media", $bp_media_widget_query[$i]); ?>
						</li>
					<?php
					}
					//}
				?>
				</ul>
				<?php 
					echo '<div class="pagination"><ul>';
					if ($total_pages > 1) {
						echo paginate($reload, $show_page, $total_pages);
					}
					echo "</ul></div>";
				?>
				<?php
				} else {
				$media_string = $type;

				if ($type === 'all') {
					$media_string = 'media';
				}
				_e('No ' . str_replace("_", " ", $wdType) . ' ' . $media_string . ' found', 'rtmedia');
			}
			?>
		</div>
		<?php
	}
	// most rated albums
	if( $allow_most_rated_album ) {
		$type = 'most_rated_album';
	?>
		<div id="<?php rtm_widget_get_tab_id($wdType, $type, $widgetid) ?>" class="rt-media-tab-panel <?php if ($active_counter == 1) echo "active-div"; ?>">
			<?php

			$bp_media_widget_query = $widget_media_array[$type];
			if (sizeof($bp_media_widget_query) > 0) {
				?>
				<ul class="widget-item-listing clearfix">

					<?php
					foreach ($bp_media_widget_query as $rt_media_gallery) {
						?>

						<li class="rtmedia-list-item" style="height:<?php echo $thumbnail_height; ?>px; width:<?php echo $thumbnail_width; ?>px;">
							<?php do_action("rtmedia_gallery_widget_before_media", $rt_media_gallery); ?>
							<a href ="<?php echo get_rtmedia_permalink($rt_media_gallery->id); ?>" title="<?php echo $rt_media_gallery->media_title; ?>" class="no-popup">
								<div class="rtmedia-item-thumbnail">
									<img src="<?php rtmedia_image("rt_media_thumbnail", $rt_media_gallery->id); ?>" alt="<?php echo $rt_media_gallery->media_title; ?>">
								</div>
							</a>
							<?php do_action("rtmedia_gallery_widget_after_media", $rt_media_gallery); ?>
						</li>
						<?php
					}
					?>
				</ul>
				<?php
			} else {
				$media_string = $type;

				if ($type === 'all') {
					$media_string = 'media';
				}
				_e('No ' . str_replace("_", " ", $wdType) . ' ' . $media_string . ' found', 'rtmedia');
			}
			?>
		</div>
	<?php
	}
	?>
</div>
