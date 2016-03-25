{include file="header.tpl"}
					
{include file="leftmenu.tpl"}

<div id="videos">
	<h2>Video Tutorial</h2>
	
	{section name=dataVideo loop=$dataVideo}
		<div class="video">
			<center>
			<iframe src="http://www.youtube.com/embed/{$dataVideo[dataVideo].video}"></iframe>
			</center>
		</div>
	{/section}
	<div id="paging">
	{section name=num loop=$num}
		{if $num[num].url == "yes"}
			<span class=current>{$num[num].i}</span>
		{else}
		<a href="tutorial.php?next={$num[num].i}">{$num[num].i}</a>
		{/if}
	{/section}

	</div>
</div>


{include file="footer.tpl"}