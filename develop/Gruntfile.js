module.exports = function(grunt) {
	grunt
			.initConfig({
				pkg : grunt.file.readJSON('package.json'),
				less : {
					development : {
						options : {
							compress : false,
							yuicompress : true,
							optimization : 2
						},
						files : {
							
							"style/src/<%= pkg.name %>single.css" : "style/src/<%= pkg.name %>single.less",
							"style/src/bootstrap.css" : "style/src/bootstrap.less"
						}
					}
				},
				concat : {
					companizer : {
						files : {
							'style/dest/<%= pkg.name %>.css' : [
									'style/src/<%= pkg.name %>single.css',
									'style/src/bootstrap.css','style/src/select2.css'  ],
							'script/dest/<%= pkg.name %>.js' : ['script/src/jquery.js', 'script/src/bootstrap.js','script/src/jquery-ui.js' ,'script/src/select2.js','script/src/dropdown.js','script/src/companizer.js' ],
						},
					},
				},

				cssmin : {
					options : {
						// TODO: disable `zeroUnits` optimization once clean-css
						// 3.2 is released
						// and then simplify the fix for
						// https://github.com/twbs/bootstrap/issues/14837
						// accordingly
						compatibility : 'ie8',
						keepSpecialComments : '*',
						sourceMap : true,
						advanced : false
					},
					minifyCore : {
						src : 'style/dest/<%= pkg.name %>.css',
						dest : 'style/dest/<%= pkg.name %>.min.css'
					}
				},

			    uglify: {
			      options: {
			        compress: {
			          warnings: false
			        },
			        mangle: true,
			        preserveComments: 'Companizer'
			      },
			      core: {
			        src: 'script/dest/<%= pkg.name %>.js',
			        dest: 'script/dest/<%= pkg.name %>.min.js'
			      }
			    },
				watch : {
					less : {
						files : ['style/src/*.less','script/src/*.js'],
						tasks : [ 'lesstocss', 'con', 'mincss', 'minjs' ]
					}
				},

			});
	require('load-grunt-tasks')(grunt);
	grunt.registerTask('default', [ 'lesstocss','con', 'mincss','minjs' ])
	grunt.registerTask('lesstocss', [ 'less' ]);
	grunt.registerTask('mincss', [ 'cssmin' ]);
	grunt.registerTask('minjs', [ 'uglify' ]);
	grunt.registerTask('con', [ 'concat' ]);
	grunt.registerTask('dev', [ 'less:development' ]);

};