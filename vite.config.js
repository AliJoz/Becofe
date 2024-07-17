import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";
export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js","public/home/css/style.css",'public/admin/tali.css'],
            refresh: true,
        }),
    ],
});
