export class Lifecycle {
    hooks = {};
    handle;

    constructor(handle) {
        this.handle = handle;
    }

    fire(hook) {
        this.hooks[hook].forEach(current => {
            this.handle = current.callback(this.handle);
        });
    }

    on(hook, callback) {
        this.hooks[hook] = this.hooks[hook] || [];
        this.hooks[hook].push({ hook, callback });
    }
}
