import "./bootstrap";
import { createApp } from "vue";
import route from "../../vendor/tightenco/ziggy";

const app = createApp({});

Object.entries(import.meta.glob("./**/*.vue", { eager: true })).forEach(
    ([path, definition]) => {
        app.component(
            path
                .split("/")
                .pop()
                .replace(/\.\w+$/, ""),
            definition.default,
        );
    },
);

app.mixin({
    methods: {
        route,
    },
});

app.mount("#app");
