<div id="pk_videobg" class="homemodule load-animate">
	<div class="page_width">
		<div class="videobg-indent">
			<h4 class="main_color lmromandemi">{$pk_videobg_title}</h4>
			<h6 class="lmromandemi">{$pk_videobg_subtitle}</h4>
			<div class="videobg_text">{$pk_videobg_text}</div>
			<a class="button dib" href="{$pk_videobg_url}">{l s='Take a look' mod='pk_videobg'}</a>
		</div>
	</div>
	<div id="videobgWrapper" {if $pk_videobg_local == true}class="localtrue"{/if}>
		{if $pk_videobg_local == false}
		<!--<iframe id="videobg" class="ytplayer" width="100%" height="400" src="{$pk_videobg_link}" muted="muted"></iframe>-->
		<div id="player"></div>
		{else}
		<video autoplay="autoplay" loop="loop" controls="controls" tabindex="0" muted>
		  <source src="{$pk_videobg_link}" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
		  Video tag not supported. Download the video <a href="movie.webm">here</a>.
		 <video>
		{/if}
	</div>
</div>
<script>
	var tag = document.createElement('script');

	tag.src = "https://www.youtube.com/iframe_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

	$("#videobgWrapper").css("top", "-44px");

    var player;
	function onYouTubeIframeAPIReady() {
		player = new YT.Player('player', {
			playerVars : {
                  'autoplay' : 1,
                  'rel' : 0,
                  'showinfo' : 0,
                  'showsearch' : 0,
                  'controls' : 0,
                  'loop' : 1,
                  'enablejsapi' : 1
                },
		  videoId: '{$pk_videobg_yt_code}',
		  events: {
		    'onReady': onPlayerReady
		  }
		});
	}

    function onPlayerReady(event) {
	    player.playVideo();
	    player.addEventListener("onStateChange", "onytplayerStateChange");
	    event.target.mute();
    }

    function onytplayerStateChange(newState) {
	   if (newState.data == 0) {
	   	//player.playVideo();
	   }
	}

</script>