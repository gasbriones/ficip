<form method="get"  id="searchform" action="<?php bloginfo('url'); ?>/">
<ul class="row">
	<li class="small-4 columns">
		<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
        <input type="hidden" value="2015" name="tag" id="tag" />
	</li>


	<li class="small-6 columns">
		<?php wp_dropdown_categories('child_of=19&orderby=name&show_option_all=ELEGIR UNA SECCION'.thisYear()); ?>
	</li>
	<li class="small-2 columns">

		<input type="submit" id="searchsubmit" style="height:37px;width:100%;" value="Ver" />
	</li>
</ul>
</form>