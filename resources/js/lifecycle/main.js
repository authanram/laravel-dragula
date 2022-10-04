import { Lifecycle } from './lifecycle';
import { Registry } from './registry';

const createLifecycle = (handle) => new Lifecycle(handle);
const createLifecycleRegistry = (key, handle) => new Registry().register(handle, key);

if (typeof window !== 'undefined') {
    window.lifecycle = createLifecycle;
    window.lifecycleRegistry = createLifecycleRegistry;
}

export { createLifecycle, createLifecycleRegistry };
