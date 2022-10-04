export class Registry {
    instances = {};

    register(handle, key) {
        this.instances[key] = handle;

        return this;
    }

    resolve(key) {
        return this.instances[key] || null;
    }
}
