			<div class="menu_blc">
				<p class="ttl">Category</p>
				<ul>
					<?php wp_list_categories('title_li&hide_empty=0'); ?>
				</ul>
			</div>
			<div class="menu_blc">
				<p class="ttl">Archive</p>
				<ul>
					<?php
						$string = wp_get_archives(array(
										'show_post_count' => 1, 
										'echo' => 0
									));
						echo preg_replace('/<\/a>&nbsp;(\([0-9]*\))/', ' <span class="count">$1</spn></a>', $string);
					?>
				</ul>
			</div>