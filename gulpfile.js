// import { rmSync } from 'node:fs';
import gulp from 'gulp';

import plumber from 'gulp-plumber';
// import htmlmin from 'gulp-htmlmin';

import server from 'browser-sync';
import notify from 'gulp-notify';
import size from 'gulp-size';
import newer from 'gulp-newer';
import webp from 'gulp-webp';
import imagemin from 'gulp-imagemin';
import * as dartSass from 'sass';
import gulpSass from 'gulp-sass';
import autoPrefixer from 'gulp-autoprefixer';
import shorthand from 'gulp-shorthand';
import gcmq from 'gulp-group-css-media-queries';
import cleanCss from 'gulp-clean-css';
import fonter from 'gulp-fonter';
import ttf2woff2 from 'gulp-ttf2woff2';
import svgo from 'gulp-svgmin';
import { stacksvg } from 'gulp-stacksvg';
import bemlinter from 'gulp-html-bemlinter';
import {deleteAsync} from 'del';
// import fileinclude from 'gulp-file-include';
import terser from 'gulp-terser';

const { src, dest, watch, series, parallel } = gulp;
const sass = gulpSass(dartSass);
const PATH_TO_SRC = './src/';
const PATH_TO_DIST = './dist/';
const PATH_TO_RAW = './raw/';
const PATHS_TO_STATIC = [
  `${PATH_TO_SRC}fonts/**/*.{woff2,woff}`,
  `${PATH_TO_SRC}*.ico`,
  `${PATH_TO_SRC}*.webmanifest`,
  `${PATH_TO_SRC}favicons/*.{png,svg}`,
  `${PATH_TO_SRC}vendor/**/*`,
  `${PATH_TO_SRC}images/**/*`,
  `${PATH_TO_SRC}policy.pdf`,
  `${PATH_TO_SRC}.htaccess`,
  `${PATH_TO_SRC}sitemap.xml`,
  `${PATH_TO_SRC}robots.txt`,
  `${PATH_TO_SRC}config.php`,
  `${PATH_TO_SRC}mail.php`,
  `${PATH_TO_SRC}js/swiper-bundle.min.js`,
  `${PATH_TO_SRC}css/swiper-bundle.min.css`,
  `!${PATH_TO_SRC}images/icons/**/*`,
  `!${PATH_TO_SRC}**/README.md`,
];

export function html() {
  return src(`${PATH_TO_SRC}**/*.php`)
  // .pipe(plumber({
  //   errorHandler: notify.onError(error => ({
  //       title: 'HTML',
  //       message: error.message
  //   }))
  // }))
  // .pipe(size({title: 'До сжатия'}))
  // .pipe(htmlmin({ collapseWhitespace: true }))
  // .pipe(size({title: 'После сжатия'}))
  .pipe(dest(`${PATH_TO_DIST}`))
  .pipe(server.stream());
}

export function lintBem () {
  return src(`${PATH_TO_SRC}*.html`)
    .pipe(bemlinter());
}

export function styles() {
  return src(`${PATH_TO_SRC}scss/main.scss`)
  .pipe(plumber({
    errorHandler: notify.onError(error => ({
        title: 'SCSS',
        message: error.message
    }))
  }))
  .pipe(sass().on('error', sass.logError))
  .pipe(autoPrefixer({
    cascade: false,
    overrideBrowserslist: ['last 10 versions']
  }))
  .pipe(shorthand())
  .pipe(gcmq())
  .pipe(size({title: 'До сжатия'}))
  .pipe(cleanCss())
  .pipe(size({title: 'После сжатия'}))
  .pipe(dest(`${PATH_TO_DIST}css/`))
  .pipe(server.stream());
}

export function images() {
  return src(`${PATH_TO_SRC}img/**/*.{jpg,jpeg,png,gif,svg}`)
  .pipe(plumber({
    errorHandler: notify.onError(error => ({
        title: 'IMAGES',
        message: error.message
    }))
  }))
  .pipe(newer(`${PATH_TO_DIST}img`))
  .pipe(size({title: 'До сжатия'}))
  .pipe(webp())
  .pipe(dest(`${PATH_TO_DIST}img`))
  .pipe(src(`${PATH_TO_SRC}img/**/*.{jpg,jpeg,png,gif,svg}`))
  .pipe(newer(`${PATH_TO_DIST}img`))
  .pipe(imagemin({
    progressive: true
  }))
  .pipe(size({title: 'После сжатия'}))
  .pipe(dest(`${PATH_TO_DIST}img/`));
}

export function fonts() {
  return src(`${PATH_TO_SRC}fonts/*.{eot,ttf,otf,otc,ttc,woff,woff2,svg}`)
  .pipe(plumber({
    errorHandler: notify.onError(error => ({
        title: 'FONTS',
        message: error.message
    }))
  }))
  .pipe(newer(PATH_TO_DIST))
  .pipe(fonter({
    formats: ['woff']
  }))
  .pipe(dest(`${PATH_TO_DIST}fonts/`))
  .pipe(src(`${PATH_TO_SRC}fonts/*.ttf`))
  .pipe(ttf2woff2())
  .pipe(dest(`${PATH_TO_DIST}fonts/`));
}

export function scripts() {
  return src(`${PATH_TO_SRC}js/*.js`)
  .pipe(terser())
  .pipe(dest(`${PATH_TO_DIST}js/`))
  .pipe(server.stream());
}

export function optimizeVector () {
  return src([`${PATH_TO_RAW}**/*.svg`])
    .pipe(svgo())
    .pipe(dest(`${PATH_TO_SRC}`));
}

export function createStack () {
  return src(`${PATH_TO_SRC}img/icons/**/*.svg`)
    .pipe(stacksvg())
    .pipe(dest(`${PATH_TO_DIST}img/icons`));
}

export function copyAssets () {
  return src(PATHS_TO_STATIC, { base: PATH_TO_SRC })
    .pipe(dest(PATH_TO_DIST));
}

export function startServer() {
  server.init({
      proxy: 'notologia.loc',
      notify: false,
  });
}

export function watcher() {
  watch(`${PATH_TO_SRC}**/*.php`, series(html));
  watch(`${PATH_TO_SRC}scss/**/*.scss`, series(styles));
  watch(`${PATH_TO_SRC}fonts/*.{eot,ttf,otf,otc,ttc,woff,woff2,svg}`, series(fonts));
  watch(`${PATH_TO_SRC}img/*.{jpg,jpeg,png,gif,svg}`, series(images));
  watch(`${PATH_TO_SRC}js/*.js`, series(scripts));
  watch(`${PATH_TO_SRC}img/icons/**/*.svg`, series(createStack, reloadServer));
  watch(PATHS_TO_STATIC, series(copyAssets, reloadServer));
};

function reloadServer (done) {
  server.reload();
  done();
}

// export function clear(done) {
//   rmSync(PATH_TO_DIST, {
//     force: true,
//     recursive: true,
//   });
//   done();
// }

export function clear() {
  return deleteAsync(['dist/*', '!dist/img']);
};

export function buildProd(done) {
  parallel(
    clear,
    series(html, styles, fonts, images, scripts, createStack, copyAssets),
    startServer,
    watcher
  )(done)
}

export function runDev(done) {
  parallel(
    clear,
    series(html, styles, fonts, images, scripts, createStack, copyAssets),
    startServer,
    watcher
  )(done)
}


