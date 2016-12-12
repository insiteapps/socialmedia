
<div id="SocialMedia">
	<% with $SiteConfig %>
        <% loop $SocialMediaList %>
            <a href="$Link" class="socialmedia" title="{$Name}" target="_blank">
                <img src="{$Icon.URL}" class="img-responsive" alt="{$Name}" />
            </a>
        <% end_loop %>
    <% end_with %>
</div>