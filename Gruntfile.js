module.exports = function (grunt) {
  const pkg = grunt.file.readJSON("package.json");
  const sass = require("node-sass");

  grunt.initConfig({
    pkg: pkg,
    dirs: {
      css: "assets/css",
      scss: "assets/scss",
      images: "assets/images",
      js: "assets/js",
    },

    sass: {
      dist: {
        options: {
          sourcemap: true,
          implementation: sass,
        },
        files: {
          "<%= dirs.css %>/master.css": "<%= dirs.scss %>/master.scss",
        },
      },
    },

    watch: {
      css: {
        files: ["<%= dirs.scss %>/*.scss"],
        tasks: ["sass"],
        options: {
          livereload: true,
        },
      },
    },

    // Generate POT files.
    makepot: {
      target: {
        options: {
          domainPath: "/languages/",
          potFilename: "indblog.pot",
          type: "wp-theme",
          potHeaders: {
            "report-msgid-bugs-to":
              "https://github.com/ManiruzzamanAkash/IndBlog/issues",
            "language-team": "LANGUAGE <manirujjamanakash@gmail.com>",
          },
        },
      },
    },
  });

  grunt.loadNpmTasks("grunt-wp-i18n");
  grunt.loadNpmTasks("grunt-sass");
  grunt.loadNpmTasks("grunt-contrib-watch");
  grunt.registerTask("default", ["watch"]);
  grunt.registerTask("release", ["makepot", "sass"]);
};
