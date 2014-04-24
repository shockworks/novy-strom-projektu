module.exports = function (grunt) {
    var auth = {
        host: 'test_alfax_czgelf13.thinline.cz',
        port: 22,
        authKey: '/t/auth_keys/private_filezilla.'
    };grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            options: {
                // define a string to put between each file in the concatenated output
                separator: ';'
            },
            dist: {
                // the files to concatenate
                src: ['src/**/*.js'],
                // the location of the resulting JS file
                dest: 'dist/<%= pkg.name %>.js'
            }
        },

        jshint: {
            // define the files to lint
            files: ['gruntfile.js', 'src/**/*.js', 'test/**/*.js'],
            // configure JSHint (documented at http://www.jshint.com/docs/)
            options: {
                // more options here if you want to override JSHint defaults
                globals: {
                    jQuery: true,
                    console: true,
                    module: true
                }
            }
        },

        less: {
            development: {
                options: {
                    paths: ["assets/css"]
                },
                files: {
                    "css/style.css": "less/bootstrap/bootstrap.less"
                }
            },
            production: {
                options: {
                    paths: ["assets/css"],
                    cleancss: true,
                    modifyVars: {
                        imgPath: '"http://mycdn.com/path/to/images"',
                        bgColor: 'red'
                    }
                },
                files: {
                    "path/to/result.css": "path/to/source.less"
                }
            }
        },

        cssmin: {
            minify: {
                expand: true,
                cwd: 'css/',
                src: ['*.css', '!*.min.css'],
                dest: 'css/',
                ext: '.min.css'
            }
        },


        watch: {
            files: ['<%= jshint.files %>'],
            tasks: ['jshint']
        },

        deploy: {
            liveservers: {
                options:{
                    servers: [{
                        host: '123.123.123.12',
                        port: 22,
                        username: 'username',
                        password: 'password'
                    }],
                    cmds_before_deploy: ["some cmds you may want to exec before deploy"],
                    cmds_after_deploy: ["forever restart", "some other cmds you want to exec after deploy"],
                    deploy_path: 'your deploy path in server'
                }
            }
        },


        mkdir: {
            all: {
                options: {
                    create: ['css', 'files']
                }
            }
        },

        'sftp-deploy': {
            build: {
                auth: {
                    host: 'gelf13.thinline.cz',
                    port: 22,
                    authKey: 'privateKeyCustom'
                },
                src: 'css',
                dest: "test.alfax.cz/css",
                //exclusions: ['/path/to/source/folder/**/.DS_Store', '/path/to/source/folder/**/Thumbs.db', 'dist/tmp'],
                server_sep: '/'
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-qunit');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-git');
    grunt.loadNpmTasks('grunt-deploy');
    grunt.loadNpmTasks('grunt-mkdir');
    grunt.loadNpmTasks('grunt-sftp-deploy');

    grunt.registerTask('init', ['mkdir']);
    grunt.registerTask('test-deploy', ['sftp-deploy']);
    //grunt.registerTask('default', ['jshint' ]);
};