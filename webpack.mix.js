const {mix} = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass('resources/assets/sass/app.scss', 'public/css')
	.sass('resources/assets/sass/index.scss', 'public/css')
	.sass('resources/assets/admin/sass/admin.scss', 'public/css').webpackConfig({
	module: {
		rules: [
			{
				test: /\.tsx?$/,
				loader: 'ts-loader',
				exclude: /node_modules/,
			},
		],
	},
	resolve: {
		extensions: ['*', '.js', '.jsx', '.vue', '.ts', '.tsx'],
	},
}).js('resources/assets/js/app.js', 'public/js')
	.js('resources/assets/admin/js/admin.js', 'public/js')
	


if (mix.inProduction()) {
	mix.version();
}


mix.copy('node_modules/trumbowyg/dist/ui/icons.svg', 'public/js/ui/icons.svg');
