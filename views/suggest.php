<?php
$title = $widget->title;

$type	= $widget->type;
$label	= $widget->label;

$model	= $widget->model;
$column	= $widget->column;

$mapping = $widget->mapping;

$disabled = $widget->disabled;

$mapperClass = $widget->mapperClass;

$app		= $widget->app;
$controller	= $widget->controller;
$action		= $widget->action;
$actionUrl	= $widget->actionUrl;

$mapAction		= $widget->mapAction;
$mapActionUrl	= $widget->mapActionUrl;

$deleteAction		= $widget->deleteAction;
$deleteActionUrl	= $widget->deleteActionUrl;
?>
<div class="<?= $mapperClass ?>" template="mapperSuggestTemplate">
	<div class="auto-fill auto-fill-basic">
		<?php if( !$disabled ) { ?>
		<div class="auto-fill-source" cmt-app="<?= $app ?>" cmt-controller="<?= $controller ?>" cmt-action="<?= $action ?>" action="<?= $actionUrl ?>" cmt-keep cmt-custom>
			<div class="relative">
				<div class="auto-fill-search form-group clearfix">
					<?php if( isset( $label ) ) { ?>
						<label><?= $label ?></label>
					<?php } ?>
					<div class="frm-icon-element icon-right">
						<span class="icon cmti cmti-search"></span>
						<input class="cmt-key-up auto-fill-text search-name" type="text" name="name" placeholder="Search Option" autocomplete="off" />
					</div>
					<input class="search-type" type="hidden" name="type" value="<?= $type ?>" />
				</div>
				<div class="auto-fill-items-wrap">
					<ul class="auto-fill-items vnav"></ul>
				</div>
			</div>
		</div>
		<div class="trigger-map-item" cmt-app="<?= $app ?>" cmt-controller="<?= $controller ?>" cmt-action="<?= $mapAction ?>" action="<?= $mapActionUrl ?>">
			<input type="hidden" name="itemId" />
			<input type="hidden" name="column" value="<?= $column ?>" />
			<span class="cmt-click"></span>
		</div>
		<div class="filler-height"></div>
		<div class="mapper-items auto-fill-target">
		<?php
			if( isset( $mapping ) ) {

				$deleteUrl = strpos( $deleteActionUrl, '?' ) ? "$deleteActionUrl&mid=$mapping->id" : "$deleteActionUrl?mid=$mapping->id";
		?>
			<div class="mapper-item" cmt-app="<?= $app ?>" cmt-controller="<?= $controller ?>" cmt-action="<?= $deleteAction ?>" action="<?= $deleteUrl ?>">
				<span class="spinner hidden-easy">
					<span class="cmti cmti-spinner-1 spin"></span>
				</span>
				<span class="mapper-item-remove btn-icon-o"><i class="icon cmti cmti-close cmt-click"></i></span>
				<span class="name"><?= $mapping->name ?></span>
				<input class="mid" type="hidden" name="mid" value="<?= $mapping->id ?>" />
			</div>
		<?php } ?>
		</div>
		<?php } else { ?>
		<div class="mapper-items auto-fill-target">
			<?php if( isset( $mapping ) ) { ?>
			<div class="mapper-item">
				<span class="name"><?= $mapping->name ?></span>
			</div>
			<?php } ?>
		</div>
		<?php } ?>
	</div>
</div>

<?php include 'templates/suggest.php'; ?>
