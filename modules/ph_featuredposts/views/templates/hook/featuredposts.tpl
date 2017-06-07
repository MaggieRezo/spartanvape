{if isset($recent_posts) && count($recent_posts) > 0}
<div class="ph_simpleblog simpleblog-featured block">
    <h4 class="title_block">{l s='Featured Posts' mod='ph_featuredposts'}</h4>
	<div class="ph_row blogpost-list-feat">
		{foreach from=$recent_posts item=post name=foo}
		{if $smarty.foreach.foo.index < 2}
		<section class="blog-item post-item-{$post.id_simpleblog_post}">
			<div class="post-item" data-postid="{$post.id_simpleblog_post}">
				{if isset($post.banner) && Configuration::get('PH_BLOG_DISPLAY_THUMBNAIL')}
					<figure>
						<a href="{$post.url}" title="">
							{if Configuration::get('ph_featuredposts_LAYOUT') == 'full'}
								<img src="{$post.banner_wide}" alt="{$post.meta_title}" class="img-responsive" />
							{else}
								<img src="{$post.banner_thumb}" alt="{$post.meta_title}" class="img-responsive" />
							{/if}
						</a>
						<div class="blog-info">
							{if Configuration::get('PH_BLOG_DISPLAY_DATE')}
							<div class="blog-date main_bg bshadow">
								<div>{$post.date_add|date_format:"%e <span>%b</span>"}</div>
							</div>
							{/if}					
							<div class="blog-post-likes grayshadow likes_{$post.id_simpleblog_post}" onclick="addRating({$post.id_simpleblog_post});"><svg class="svgic svgic-like"><use xlink:href="#si-like"></use></svg><div class="lmromandemi">{$post.likes}</div></div>
						</div>
					</figure>
				{/if}
				<h2>
					<a href="{$post.url}" title="{$post.meta_title}">{$post.meta_title}</a>
				</h2>
				<div class="post-content">					
					{if Configuration::get('PH_BLOG_DISPLAY_DESCRIPTION')}
						{$post.short_content|truncate:80:'...'}
					{/if}
				</div>	
				<a href="{$post.url}" title="{l s='Permalink to' mod='ph_featuredposts'} {$post.meta_title}" class="button">{l s='Read more' mod='ph_featuredposts'}</a>
				<div class="clearfix"></div>
			</div>
		</section><!-- .ph_col -->
		{/if}
		{/foreach}
	</div><!-- .ph_row -->
</div><!-- .ph_simpleblog -->
{else}
	<p class="warning">{l s='There are no posts' mod='ph_featuredposts'}</p>
{/if}

<script>
jQuery(document).ready(function() {
	$.each($(".simpleblog-featured .post-item"), function( index, value ) {
		  var pid = $(value).data("postid");
		  if ($.cookie('guest_{$cookie->id_guest}_'+pid) == "voted") {
			$(".post-item-"+pid+" .blog-post-likes").addClass("voted");
		}
	});	
});
function addRating(item_id) {	
	if ($.cookie('guest_{$cookie->id_guest}_'+item_id) != "voted") {
		$.cookie('guest_{$cookie->id_guest}_'+item_id, 'voted');
		$.post(baseDir+'modules/ph_simpleblog/ajax.php', {
			action:'addRating',
			item_id : item_id
		}, 
		function (data) {
			if (data.status == 'success') {		
				$(".post-item-"+item_id+" .blog-post-likes").addClass("voted");
				$(".post-item-"+item_id+" .blog-post-likes div").text(data.message);
			} else {
				alert(data.message);
			}
			
		}, 'json');
	} else {
		$.cookie('guest_{$cookie->id_guest}_'+item_id, '');
		$.post(baseDir+'modules/ph_simpleblog/ajax.php', {
			action:'removeRating',
			item_id : item_id
		}, 
		function (data) {
			if (data.status == 'success') {		
				$(".post-item-"+item_id+" .blog-post-likes div").text(data.message);
				$(".post-item-"+item_id+" .blog-post-likes").removeClass("voted");
			} else {
				alert(data.message);
			}
			
		}, 'json');
	}
	return false;
}
</script>