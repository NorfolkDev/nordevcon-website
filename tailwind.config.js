const { fontFamily } = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
export default {
    content: ["./app/**/*.php", "./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            colors: {
                "wave-purple": "#53345D",
                "wave-pink": "#AC4B74",
                "wave-orange": "#FA7268",
            },
            fontFamily: {
                sans: ["Montserrat", ...fontFamily.sans],
                condensed: ["Roboto Condensed", ...fontFamily.sans],
            },
            keyframes: {
                'star-explode': {
                    '0%':   { transform: 'scale(1)',   opacity: '1' },
                    '50%':  { transform: 'scale(4)',   opacity: '0.5' },
                    '100%': { transform: 'scale(5)', opacity: '0' },
                },
            },
            animation: {
                'star-explode': 'star-explode 0.4s ease-out forwards',
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
};
