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
                japonica: {
                    50: "#fdf5f3",
                    100: "#fbe9e5",
                    200: "#f8d8d0",
                    300: "#f2bcaf",
                    400: "#e89581",
                    500: "#df826c",
                    600: "#c6563c",
                    700: "#a6462f",
                    800: "#8a3c2a",
                    900: "#733729",
                    950: "#3e1a11",
                },
            },
        },
    },
    plugins: [],
};
