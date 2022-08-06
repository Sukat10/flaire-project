module.exports = {
    purge: ["./resources/views/**/*.blade.php", "./resources/css/**/*.css"],
    theme: {
        extend: {
            container: {
                center: true,
                padding: {
                    DEFAULT: "1rem",
                    sm: "2rem",
                    lg: "4rem",
                    xl: "5rem",
                    "2xl": "6rem",
                },
            },
        },
        colors: {
            "app-red": "#a3002e",
            "app-blue": " #3a0062",
            "app-pink": " #F4E2E7",
        },
    },
    variants: {
        extends: {
            display: ["group-focus"],
            opacity: ["group-focus"],
            inset: ["group-focus"],
        },
    },
    plugins: [require("@tailwindcss/ui")],
};
