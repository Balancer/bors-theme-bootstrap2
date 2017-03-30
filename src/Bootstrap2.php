<?php

namespace B2\Theme;

class Bootstrap2 extends \B2\Theme\Common
{
	var $layout_class = \B2\Theme\Bootstrap2\Layout::class;

	function pre_show()
	{
		// Bootstrap's JavaScript requires jQuery
		\B2\jQuery::load();

		\bors_use('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css');
		\bors_use('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.min.css');
		\bors_use('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/js/bootstrap.min.js');

		return parent::pre_show();
	}
}
