/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './src/**/*.{html,js}',
        './node_modules/tw-elements/dist/js/**/*.js'
    ],
    theme: {
        extend: {
            screens: {
                xs: '375px',
              },
            colors: {
                danger: colors.rose,
                primary: colors.blue,
                success: colors.green,
                warning: colors.yellow,
            },
        },
        plugins: [
            require('tw-elements/dist/plugin'),
            require('flowbite/plugin')
        ],
    }
}
