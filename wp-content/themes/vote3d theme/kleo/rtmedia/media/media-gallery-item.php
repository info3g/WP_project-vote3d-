<?php
/** That's all, stop editing from here * */
global $rtmedia_backbone;
$rtmedia_backbone = array(
	'backbone' => false,
	'is_album' => false,
	'is_edit_allowed' => false
);
if ( isset( $_POST[ 'backbone' ] ) )
	$rtmedia_backbone['backbone'] = $_POST[ 'backbone' ];
if ( isset( $_POST[ 'is_album' ] ) )
	$rtmedia_backbone['is_album'] = $_POST[ 'is_album' ][0];
if ( isset( $_POST[ 'is_edit_allowed' ] ) )
	$rtmedia_backbone['is_edit_allowed'] = $_POST[ 'is_edit_allowed' ][0];
?>
<?php
global $activities_template;
$med_id = rtmedia_id();
 //echo "SELECT privacy FROM `{$wpdb->prefix}rt_rtm_media` WHERE id=$med_id"; 
$med_data = $wpdb->get_results("SELECT privacy FROM `{$wpdb->prefix}rt_rtm_media` WHERE id=$med_id");
$chck_privacy = $med_data[0]->privacy;

?>
<li class="rtmedia-list-item el-zero-fade"  id="<?php echo rtmedia_id(); ?>">
<?php //if($chck_privacy != 80 ) { ?>
	<?php do_action( 'rtmedia_before_item' ); ?>
	<a href ="<?php rtmedia_permalink(); ?>" title="<?php echo rtmedia_title(); ?>">
		<div class="rtmedia-item-thumbnail">
            <img src="<?php rtmedia_image("rt_media_thumbnail"); ?>" alt="<?php rtmedia_image_alt(); ?>" >
        </div>
        <?php if( apply_filters( 'rtmedia_media_gallery_show_media_title', true ) ){ ?>
            <div class="rtmedia-item-title">
                <h4 title="<?php echo rtmedia_title(); ?>">
                    <?php echo rtmedia_title(); ?>
                </h4>
            </div>
        <?php } ?>
	</a>
	<?php do_action( 'rtmedia_after_item' ); ?>
<?php //} ?>
</li>
