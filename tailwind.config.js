const { fontFamily } = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Roboto", ...fontFamily.sans],
                condensed: ["Roboto Condensed", ...fontFamily.sans],
            },
        },
    },
    plugins: [],
};
