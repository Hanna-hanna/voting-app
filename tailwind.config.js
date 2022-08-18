//const { colors } = require('laravel-mix/src/Log');
const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                gray: colors.gray,
                'gray-background': '#f7f8fc'
            },
            fontFamily: {
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
            },
            spacing: {
                70: '17.5rem',
                175: '43.75rem'
            },
            maxWidth: {
                custom: '62.5rem'
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};