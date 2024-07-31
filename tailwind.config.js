/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "secondary": "#060606",
                "primary": "#EE4700",
            },
            fontFamily: {
                "hanken-grotesk": ["Hanken Grotesk", "sans-serif"]
            },
            fontSize: {
                "2xs": ".550rem"
            }
        },
    },
    plugins: [],
}

