<?php

ShortcodeParser::get()->register('YouTube', array('YouTubeUtil','YouTubeShortCodeHandler'));

HtmlEditorConfig::get('cms')->enablePlugins(array('ytsc' => '../../../youtubevideos/javascript/editor_plugin.js'));
HtmlEditorConfig::get('cms')->insertButtonsAfter('anchor', 'ytsc');