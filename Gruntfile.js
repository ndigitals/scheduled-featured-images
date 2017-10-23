module.exports = function( grunt ) {

	'use strict';
	var banner = '/**\n * <%= pkg.homepage %>\n * Copyright (c) <%= grunt.template.today("yyyy") %>\n * This file is generated automatically. Do not edit.\n */\n';
	// Project configuration
	grunt.initConfig( {

		pkg: grunt.file.readJSON( 'package.json' ),

		addtextdomain: {
			options: {
				textdomain: 'scheduled-featured-images',
			},
			update_all_domains: {
				options: {
					updateDomains: true
				},
				src: [ '*.php', '**/*.php', '!node_modules/**', '!php-tests/**', '!bin/**' ]
			}
		},

		wp_readme_to_markdown: {
			your_target: {
				files: {
					'README.md': 'readme.txt'
				}
			},
		},

		makepot: {
			target: {
				options: {
					domainPath: '/languages',
					mainFile: 'scheduled-featured-images.php',
					potFilename: 'scheduled-featured-images.pot',
					potHeaders: {
						poedit: true,
						'x-poedit-keywordslist': true
					},
					type: 'wp-plugin',
					updateTimestamp: true
				}
			}
		},
		
		cssmin: {
			target: {
				files: [
					{
						expand: true,
						cwd: 'admin/css',
						src: ['*.css', '!*.min.css'],
						dest: 'admin/css',
						ext: '.min.css'
					},
					{
						expand: true,
						cwd: 'public/css',
						src: ['*.css', '!*.min.css'],
						dest: 'public/css',
						ext: '.min.css'
					}
			 ]
			}
		},
		
		uglify: {
			my_target: {
				options: {
					sourceMap: true
				},
				files: {
					'admin/js/admin.min.js': ['admin/js/admin.js'],
					'public/js/public.min.js': ['public/js/public.js']
				}
			}
		},
	} );

	grunt.loadNpmTasks( 'grunt-wp-i18n' );
	grunt.loadNpmTasks( 'grunt-wp-readme-to-markdown' );
	grunt.loadNpmTasks( 'grunt-contrib-cssmin' );
	grunt.loadNpmTasks( 'grunt-contrib-uglify' );
	grunt.registerTask( 'i18n', ['addtextdomain', 'makepot'] );
	grunt.registerTask( 'readme', ['wp_readme_to_markdown'] );
	grunt.registerTask( 'minify', ['cssmin', 'uglify'] );

	grunt.util.linefeed = '\n';

};
