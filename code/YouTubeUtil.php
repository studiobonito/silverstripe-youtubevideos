<?php
class YouTubeUtil {

	public static function YouTubeShortCodeHandler($arguments,$caption= null,$parser = null) {
		if(empty($arguments['id'])) {
			return;
		}
			
		$customise = array();
		/*** SET DEFAULTS ***/
		$customise['YouTubeID'] = $arguments['id'];
		//play the video on page load
		$customise['autoplay'] = false;
		//set the caption
		$customise['caption'] = $caption ? Convert::raw2xml($caption) : false;
		//set dimensions
		$customise['width'] = 640;
		$customise['height'] = 385;
			
		//overide the defaults with the arguments supplied
		$customise = array_merge($customise,$arguments);
			
		//get our YouTube template
		$template = new SSViewer(array(
			'YouTube',
			BASE_PATH.'/youtubevideos/templates/YouTube.ss'
			));
			
		//return the customised template
		return $template->process(new ArrayData($customise));
	}
}