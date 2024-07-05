import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    darkMode: "class",
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            screens: {
                lg: "900px",
            },
            colors: {
                brown: {
                    100: "#ECE0D1",
                    300: "#DBC1AC",
                    600: "#967259",
                    900: "#634832",
                },
                bg_log: "#242A38",
            },
            boxShadow: {
                norml: "0px 1px 10px 0px rgba(0, 0, 0, 0.05)",
            },
            spacing: {
                25: "6.25rem",
                30: "7.5rem",
                50: "12.5rem",
            },
            borderRadius: {
                "4xl": "2rem",
            },
            fontFamily: {
                "iran-B": "Iran Bold",
                "iran-Med": "Iran medum",
                "iran-R": "Iran regular",
                "iran-th": "Iran thin",
                "iran-num": "IranFaNum",
                "iran-black": "Iran Block",
                "iran-light": "Iran Light",
            },
            letterSpacing: {
                tightest: "-0.065em",
            },
            container: {
                center: true,
                padding: {
                    DEFAULT: "1rem",
                    lg: "0.625rem",
                },
            },
            backgroundImage: {
                HomeMobail: 'url("/img/headerBgMobile.png")',
                HomeDesktop: "url(/img/headerBgDesktop.png)",
            },
        },
        screens: {
            xs: "475px",
            sm: "576px",
            md: "760px",
            xl: "1024px",
            xxl: "1280px",
        },
    },
    plugins: [
        forms,
        typography,
        function ({ addVariant }) {
            addVariant("child", "&>*");
            addVariant("child-hover", "&>*:hover");
        },
        require("tailwind-scrollbar"),
    ],
};
