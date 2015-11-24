(function() {
	var app = angular.module('configGen', []);

	app.controller('NginxDjangoController', function(){
		this.config = {};

		this.addSettings = function(settings) {
			settings.configs.push(this.config);
			this.config = {};
		};
	});

	app.controller('HtaccessRedirectController', function(){
		this.config = {};

		this.addSettings = function(settings) {
			settings.configs.push(this.config);
			this.config = {};
		};
	});
})();