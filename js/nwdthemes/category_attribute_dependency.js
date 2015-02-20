/**
 * Nwdthemes Attributedependency Extension
 *
 * @package     Attributedependency
 * @author      Nwdthemes <mail@nwdthemes.com>
 * @link        http://nwdthemes.com/
 * @copyright   Copyright (c) 2015. Nwdthemes
 * @license     http://en.wikipedia.org/wiki/MIT_License
 */

categoryAttributeDependency = Class.create();

categoryAttributeDependency.prototype = {

	initialize: function (htmlId) {
		this.element = $(htmlId);
		this.dependentElements = $$("[id^="+htmlId+"]");
		this.refreshView();
		this.bindEvents();
	},

	bindEvents: function () {
		Event.observe(this.element, "change", this.refreshView.bind(this));
		Event.observe(this.element, "keyup", this.refreshView.bind(this));
		Event.observe(this.element, "keydown", this.refreshView.bind(this));
	},

	refreshView: function () {
		var that = this;
		this.dependentElements.each(function(el){
			if (that.element.id != el.id) {
				if (that.element.value == '1') {
					el.up(1).show();
				} else {
					el.up(1).hide();
				}
			}
		});
	}
};