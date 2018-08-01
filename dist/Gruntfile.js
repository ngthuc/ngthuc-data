/**
 * Created by Sang Nguyen on 12/07/2015.
 */

//Gruntfile
module.exports = function(grunt) {


    //Initializing the configuration object
    grunt.initConfig({

        // minify all of our js files where possible
        uglify:{
            options: {
                mangle: false  // Use if you want the names of your functions and variables unchanged

            },
            primary: {
                files: [
                    {'./public/resources/js/custom.min.js': './resources/js/custom.js'}
                ]
            }
        },
        sass:{
            primary: {
                options: {
                    style: 'expanded',
                    noCache: true,
                    sourcemap: 'none'
                },
                files: {
                    './public/resources/css/style.min.css':'./resources/sass/main.scss'
                }
            }
        },
        cssmin: {
            options: {
                banner: '/*\nSite Name: blank theme\nAuthor: Nghia Minh Luong\nAuthor URI: http:/nghiadev.com\nCreationDate:<%= grunt.template.today("yyyy-mm-dd") %>\nVersion: 1.0\n*/\n'
            },
            primary: {
                files: {
                    './public/resources/css/style.min.css':'./public/resources/css/style.min.css',
                    './public/resources/css/normalize.css':'./public/resources/css/normalize.css'
                }
            }
        },
        watch:{
            javascript: {
                files: [
                    //watched files
                    './resources/js/*.js',
                ],
                tasks: ['uglify'],     //tasks to run
                options: {
                    livereload: true                        //reloads the browser
                }
            },
            sass: {
                files: [
                    './resources/sass/main.scss',
                    './resources/sass/includes/*.scss',
                    './resources/sass/partials/*.scss',
                    './resources/sass/sites/*.scss'
                ],  //watched files
                tasks: ['sass'],
                options: {
                    livereload: true                        //reloads the browser
                }//tasks to run
            },
            cssmin: {
                files: [
                    './public/resources/css/style.min.css',
                ],  //watched files
                tasks: ['cssmin'],
                options: {
                    livereload: true                        //reloads the browser
                }//tasks to run
            },
            livereload: {
                files: [
                    './resources/js/*.js',
                ],
                options: {
                    livereload: true
                }

            }

        }

    });
    // // Plugin loading
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    // Task definition
    grunt.registerTask('default', ['watch']);
    grunt.registerTask('build', ['uglify','sass','cssmin']);


};
