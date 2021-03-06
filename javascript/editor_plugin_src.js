(function() {
	tinymce.create('tinymce.plugins.YouTubeShortcodePlugin', {
		init : function(ed, url) {
			var t = this;

			t.editor = ed;
			
			ed.addCommand('ytscInsertShortcode', function() {
				var str = '[YouTube id= width= height= related=0]Description[/YouTube]';

				ed.execCommand('mceInsertContent', false, str);
			});

			// Register buttons
			ed.addButton('ytsc', {
				title : 'Insert YouTube Shortcode',
				image : 'youtubevideos/images/youtube.png',
				cmd : 'ytscInsertShortcode'
			});
		},

		getInfo : function() {
			return {
				longname : 'YouTube Shortcode',
				author : 'Studio Bonito Ltd',
				authorurl : 'http://studiobonito.co.uk',
				infourl : 'http://studiobonito.co.uk',
				version : '1.0'
			};
		}
	});

	// Register plugin
	tinymce.PluginManager.add('ytsc', tinymce.plugins.YouTubeShortcodePlugin);
})();