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
                "dana-B": ["dana Bold"],
                "dana-Med": ["dana medium"],
                "dana-R": ["dana regular"],
                "morba-B": ["morba Bold"],
                "morba-Med": ["morba medium"],
                "morba-L": ["morba Light"],
                "dana-Nnm": ["DanaFaNum"],
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
                HomeMobail: "{{asset('/public/img/headerBgMobile.png') }}" ,

                HomeDesktop: "{{asset('/public/img/headerBgDesktop.png)",
            },
        },
    },
    plugins: [],
};