import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css", // Asegúrate de incluir tu archivo CSS aquí
                "resources/js/app.js", // Archivo JavaScript principal
            ],
            refresh: true,
        }),
    ],
});
