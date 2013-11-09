module.exports = function(grunt) {

	// Configuration of the project and plugins
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),			
			sass: {
				// This will be executed when we run the 'development' task below
				development: {
					options: {
						style: 'expanded'
					},
					files: {
						'stylesheets/theme-1.css': 'sass/theme-1.scss'
					}
				},
				// This will be executed when we run the 'deploy' task below
				deploy: {
					options: {
						style: 'compressed'
					},
					files: {
						 'stylesheets/theme-1.css': 'sass/theme-1.scss'
					}
				}
			},
			watch: {
				css: {
					files: '**/*.scss',
					tasks: ['sass:development']
				}
			}
	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	
	// Our tasks
	grunt.registerTask('development', ['sass:development']);
	grunt.registerTask('deploy', ['sass:deploy']);
	grunt.registerTask('default',['watch']);

};