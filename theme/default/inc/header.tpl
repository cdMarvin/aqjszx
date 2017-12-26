<body style="background: url(theme/default/images/bg2.jpg) no-repeat;background-size: cover;" onload="akbzz_start()">

    <div class="content">
      <div class="header clearfix">
        <a href="/" class="logo" style="background: url(theme/default/images/bg.png);"></a>
        <embed class="focusFont" src="theme/default/images/flash.swf" quality="high" wmode="transparent" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" autostart="true" width="240" height="130">
      </div>
    </div>
    <div class="navbar">
      <div class="nav clearfix">
        <ul class="clearfix">
          <li><a href="{$site.root_url}" class="navlink">{$lang.home}</a></li>
          <!-- {foreach from=$nav_middle_list name=nav_middle_list item=nav} --> 
          <li>
            <a href="{$nav.url}" class="navlink">{$nav.nav_name}</a>
            <!-- {if $nav.child} -->
            <span class="sublink">
              <!-- {foreach from=$nav.child item=child} -->
                            <!-- {if $child.child} -->
                            <span class="sedlink">
                                <a href="{$child.url}" class="sublinkA" id="hassed">{$child.nav_name}</a>
                                <!-- {foreach from=$child.child item=children key=key} -->
                                    <a href="{$children.url}" class="sedlinkA" style="top:{$key*36}px;<!--{if strlen($children.nav_name) < 24}-->line-height:35px;<!--{/if}-->">{$children.nav_name}</a>
                                <!-- {/foreach} -->
                            </span>
                            <!-- {else} -->
              <a href="{$child.url}" class="sublinkA">{$child.nav_name}</a>
                            <!-- {/if} --> 
              <!-- {/foreach} -->
            </span>
            <!-- {/if} -->
          </li>
          <!-- {/foreach} -->
         
        </ul>
         <div class="searchdiv">
          <form action="{$site.root_url}" class="panel-2">
            <input type="text" class="search-title" name="s" id="search" />
            <input class="search-btn" name="submit" type="submit" value="" style="background-image: url(theme/default/images/search.png);">
          </form>
        </div> 
      </div>
    </div>