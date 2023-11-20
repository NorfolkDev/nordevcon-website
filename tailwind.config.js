const { fontFamily } = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            colors: {
                "wave-purple": "#53345D",
                "wave-pink": "#AC4B74",
                "wave-orange": "#FA7268",
            },
            fontFamily: {
                sans: ["Roboto", ...fontFamily.sans],
                condensed: ["Roboto Condensed", ...fontFamily.sans],
            },
        },
    },
    plugins: [],
};
