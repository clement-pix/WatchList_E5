import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',  // Vérifie que les vues Blade sont bien incluses
        './resources/**/*.js',         // Vérifie que les fichiers JS sont inclus
        './resources/**/*.vue',        // Si vous utilisez Vue.js
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
    purge: ['./resources/**/*.blade.php', './resources/**/*.js', './resources/**/*.vue'],
};
