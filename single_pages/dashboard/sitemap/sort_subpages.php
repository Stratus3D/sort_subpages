<?php  defined('C5_EXECUTE') or die('Access Denied'); ?>
<script type="text/javascript">
CCM_LAUNCHER_SITEMAP = 'sort_subpages'; // we need this for when we are moving and copying - ?
</script>
<?php echo Loader::helper('concrete/dashboard')->getDashboardPaneHeaderWrapper(t('Sort Subpages'), t('Sort Subpages on sitemap.'), false, false);?>

	<?php 
	$dh = Loader::helper('concrete/dashboard/sitemap');
	if ($dh->canRead()) { ?>
	
		<div class="ccm-pane-options" id="ccm-<?php echo $searchInstance?>-pane-options">
		</div>
        <div class="ccm-pane-body ccm-pane-body-footer">
        <?php $pageSelector = Loader::helper('form/page_selector');
        print $pageSelector->sitemap(); ?>
        </div>
	<?php  } else { ?>
		<div class="ccm-pane-body ccm-pane-body-footer">
			<p><?php echo t("You must have access to the dashboard sitemap to search pages.")?></p>	
    </div>	
	<?php  } ?>

<?php echo Loader::helper('concrete/dashboard')->getDashboardPaneFooterWrapper(false); ?>
