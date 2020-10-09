<?php
$deleteActionUrl = strpos( $deleteActionUrl, '?' ) ? "$deleteActionUrl&mid=" : "$deleteActionUrl?mid=";
?>
<script id="mapperSuggestTemplate" type="text/x-handlebars-template">
	<div class="mapper-item" cmt-app="<?= $app ?>" cmt-controller="<?= $controller ?>" cmt-action="<?= $deleteAction ?>" action="<?= $deleteActionUrl ?>{{mid}}" cmt-keep>
		<span class="spinner hidden-easy">
			<span class="cmti cmti-spinner-1 spin"></span>
		</span>
		<span class="mapper-item-remove btn-icon-o"><i class="icon cmti cmti-close cmt-click"></i></span>
		<span class="name">{{name}}</span>
		<input class="mid" type="hidden" name="mid" value="{{mid}}" />
	</div>
</script>
