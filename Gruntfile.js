// Wrapper
module.exports = function(grunt) {
	'use strict';

	// Task configuration
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		uncss: {
			dist: {
				files: {
					'dist/css/tiny.css': [
						'http://webwork/heikomamerow/']
				}
			}
		},


		compass: {
			dist: {
				options: {
					sassDir: 'sass',
					cssDir: 'css',
					imagesDir: 'img'
					//outputStyle: 'compressed'
				}
			}
		},


		watch: {
			compass: {
				files: ['sass/*.scss'],
				tasks: ['compass'],
				options: {
					sassDir: 'sass',
					cssDir: 'css',
					livereload: true
				}
			},
			livereload: {
				files: ['*.php', 'inc/**/*.php', 'js/**/*.js'],
				options: {
					livereload: true
				}
			}
		}
	});



	// Plugin loading (one for all)
	require('load-grunt-tasks')(grunt);


	// Register tasks
	grunt.registerTask('default', ['watch']);

}