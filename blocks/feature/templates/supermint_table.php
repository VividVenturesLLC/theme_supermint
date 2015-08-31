<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$title = $linkURL ? ('<a href="' . $linkURL . '">' . h($title) . '</a>') : h($title);
$o = \Concrete\Package\ThemeSupermint\Src\Models\ThemeSupermintOptions::get();
?>
<table class="icon-table">
	<tr>
		<td class="i-icon">
			<i class="fa fa-<?php echo $icon?> fa-2x"></i>
		</td>
		<td <?php if (!$linkURL || ($linkURL && !$o->feature_link_button)) : ?>colspan="2"<?php endif ?>>
			<?php if ($title) : ?><h3><?php echo $title?></h3><?php endif ?>
			<?php if ($paragraph) : ?><p><?php echo h($paragraph) ?></p><?php endif ?>
		</td>
		<?php if ($linkURL && $o->feature_link_button) : ?>
		<td style="text-align:right">
			<a href="<?php echo $linkURL ?>" class="button button-flat-primary" target="_blank"><?php echo $o->feature_link_text ?></a>			
		</td>
		<?php endif ?>
	</tr>
</table>