module.exports = function(grunt) {

	// because why not
	"use strict";

	// 1. All configuration goes here
	grunt.initConfig({
		pkg: grunt.file.readJSON("package.json"),

		// this bad boy updates all the installed packages.
		devUpdate: {
        	main: {
            	options: {
                	reportUpdated: false,
                	updateType: "prompt",
                	semver: false
            	}
        	}
    	},

		// uglify: {
		// 	build: {
		// 		files: {
		// 			"assets/js/scripts.min.js": "assets/js/scripts.js"
		// 		}
		// 	}
		// },

		// jshint: {
		//     all: ['assets/js/scripts.js']
		// },

		// sass: {
		// 	global: {
		// 		options: {
		// 			style: "compressed",
		// 			precision: 10
		// 		},
		// 		files: {
		// 			"assets/css/style-unprefixed.css": "assets/scss/style.scss"
		// 		}
		// 	}
		// },

		// autoprefixer: {
		// 	global: {
		// 		src: "assets/css/style-unprefixed.css",
		// 		dest: "assets/css/style.css"
		// 	}
		// },

		watch: {
			options: {
				spawn: false
			},
			grunt: {
				files: ["Gruntfile.js"]
			},
			// js: {
			// 	files: ["assets/js/*.js"],
			// 	tasks: ["jshint", "uglify"]
			// },
			// css: {
			// 	files: ["assets/scss/*.scss"],
			// 	tasks: ["libsass", "autoprefixer"]
			// },
			compression: {
				files: ['assets/**/*', 'language/**/*', 'tmpl/**/*', 'helper.php', 'mod_magnificjoomla.php', 'mod_magnificjoomla.xml', "Gruntfile.js"],
				tasks: ["compress"]
			}
		},

		compress: {
			main: {
				options: {
					archive: "mod_magnificJoomla_0.x.x.zip",
					pretty: true,
					mode: 'zip'
				},
				files: [
					{expand: true, src: ['assets/css/magnific-popup.css'], dest: '/'},
					{expand: true, src: ['assets/css/index.html'], dest: '/'},
					{expand: true, src: ['assets/js/jquery.magnific-popup.min.js'], dest: '/'},
					{expand: true, src: ['assets/js/noConflict.js'], dest: '/'},
					{expand: true, src: ['assets/js/index.html'], dest: '/'},
					{expand: true, src: ['assets/index.html'], dest: '/'},
					{expand: true, src: ['language/**'], dest: '/'},
					{expand: true, src: ['tmpl/**'], dest: '/'},
					{expand: true, src: ['helper.php'], dest: '/'},
					{expand: true, src: ['index.html'], dest: '/'},
					{expand: true, src: ['mod_magnificjoomla.php'], dest: '/'},
					{expand: true, src: ['mod_magnificjoomla.xml'], dest: '/'},
				]
			}
		}
    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    require("load-grunt-tasks")(grunt);

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
  	grunt.registerTask("default", ["compress", "watch"]);
};
