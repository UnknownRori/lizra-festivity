/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
                'sm': '240px',
                'md': '640px',
                'lg': '800px',
                'xl': '1024px',
                '2xl': '1280px',
                '3xl': '1680px',
            },

        },
    },
    plugins: [],
}
