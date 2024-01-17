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
                royalBlue: {
                    50: "#eef4ff",
                    100: "#dfebff",
                    200: "#c6d8ff",
                    300: "#a3befe",
                    400: "#7e98fb",
                    500: "#5f74f5",
                    600: "#525ceb",
                    700: "#343bce",
                    800: "#2d35a6",
                    900: "#2c3483",
                    950: "#1a1d4c",
                },
            },
        },
    },
    plugins: [],
};
