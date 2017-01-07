<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 	two.inc.php
* @Package:	Spectral theme for GetSimple CMS
* @Action:	Could be Latest Posts or Permanent Info
*
*****************************************************/
?>
					<section id="two" class="wrapper alt style2">
					<?php
						nm_set_custom_maxposts(3);
						nm_custom_display_recent('
							<section class="spotlight rmfp_recent_{{ post_number }}">
							<div class="image"><img src="{{ post_image_url }}" alt="" /></div><div class="content">
								<h2><a href="{{ post_link }}">{{ post_title }}</a></h2>
								<span class="rmfp_content">{{ post_content }}</span>
							</div>
						</section>
						');
					?>
					</section>
