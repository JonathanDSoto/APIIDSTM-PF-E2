const Ziggy = {
    url: "http://localhost",
    port: null,
    defaults: {},
    routes: {
        "sanctum.csrf-cookie": {
            uri: "sanctum/csrf-cookie",
            methods: ["GET", "HEAD"],
        },
        "ignition.healthCheck": {
            uri: "_ignition/health-check",
            methods: ["GET", "HEAD"],
        },
        "ignition.executeSolution": {
            uri: "_ignition/execute-solution",
            methods: ["POST"],
        },
        "ignition.updateConfig": {
            uri: "_ignition/update-config",
            methods: ["POST"],
        },
        login: { uri: "login", methods: ["GET", "HEAD"] },
        logout: { uri: "logout", methods: ["POST"] },
        register: { uri: "register", methods: ["GET", "HEAD"] },
        "password.request": { uri: "password/reset", methods: ["GET", "HEAD"] },
        "password.email": { uri: "password/email", methods: ["POST"] },
        "password.reset": {
            uri: "password/reset/{token}",
            methods: ["GET", "HEAD"],
            parameters: ["token"],
        },
        "password.update": { uri: "password/reset", methods: ["POST"] },
        customers: { uri: "customers", methods: ["GET", "HEAD"] },
        "customers.store": { uri: "customers", methods: ["POST"] },
        "customers.show": {
            uri: "customers/{id}",
            methods: ["GET", "HEAD"],
            parameters: ["id"],
        },
        "customers.update": {
            uri: "customers/{id}",
            methods: ["PUT"],
            parameters: ["id"],
        },
        "customers.delete": {
            uri: "customers/{id}",
            methods: ["DELETE"],
            parameters: ["id"],
        },
        instructors: { uri: "instructors", methods: ["GET", "HEAD"] },
        "instructors.store": { uri: "instructors", methods: ["POST"] },
        "instructors.show": {
            uri: "instructors/{id}",
            methods: ["GET", "HEAD"],
            parameters: ["id"],
        },
        "instructors.update": {
            uri: "instructors/{id}",
            methods: ["PUT"],
            parameters: ["id"],
        },
        "instructors.delete": {
            uri: "instructors/{id}",
            methods: ["DELETE"],
            parameters: ["id"],
        },
    },
};

if (typeof window !== "undefined" && typeof window.Ziggy !== "undefined") {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
