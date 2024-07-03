import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/libary/swiper-bundle.min.js",
                "resources/libary/swiper-bundle.min.css",
            ],
            refresh: true,
        }),
    ],
});
