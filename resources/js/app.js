import "./bootstrap";
import { createApp } from "vue";

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
    provide: {
        csrf: document
            .querySelector('meta[name="csrf-token"]')
            ?.getAttribute('content')
    }
});

app.mount("#app");
