{foreach bors_lib_object::parent_lines($view) as $breadcrumb_line}
<ul class="breadcrumb">
	{foreach $breadcrumb_line as $x}
		{if $x.is_active}
			<li class="active">{$x.title}
		{else}
			<li><a href="{$x.url}">{$x.title}</a>
		{/if}
		{if not $x@last}
			<span class="divider">/</span>
		{/if}
			</li>
	{/foreach}
</ul>
{/foreach}
