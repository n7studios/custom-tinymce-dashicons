(function() {
	tinymce.PluginManager.add('custom_tinymce_dashicons', function(editor,url) {
		editor.addButton('custom_tinymce_dashicons', {
			title: 'Custom TinyMCE Dashicons',
			
			/**
			* We specify two CSS classes for the TinyMCE Editor Button:
			*
			* icon: this gets prefixed with i-mce-, resulting in the first CSS class = i-mce-icon
			*
			* dashicons-star-filled: this is the WordPress Dashicon - see http://melchoyce.github.io/dashicons/ for a list of valid classes,
			* any of which can be used here.
			*/
			icon: 'icon dashicons-star-filled',
			
			// Just to prove the plugin works :)
			onclick: function() {
				editor.insertContent('Button clicked!');	
			}
		})
	});
})();