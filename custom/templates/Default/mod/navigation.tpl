<div class="card card-inverse">
  <div class="card-block">
    <ul class="nav nav-pills flex-column">
	  {foreach from=$MOD_LINKS key=name item=item}
	  <li class="nav-item">
		<a class="nav-link{if isset($item.active)} active{/if}" href="{$item.link}" target="{$item.target}">{$item.title}</a>
	  </li>
      {/foreach}
    </ul>
  </div>
</div>