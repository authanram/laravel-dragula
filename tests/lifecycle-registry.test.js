import { expect, test } from 'vitest';
import { Registry } from '../resources/js/lifecycle/registry';
import { createLifecycleRegistry } from '../resources/js/lifecycle/main';

test('basic test', () => {
    const handle = { any: 'handle' };
    const registry = new Registry();

    registry.register(handle, 'someKey');

    expect(registry.resolve('someKey')).toEqual(handle);
});

test('createLifecycleRegistry test', () => {
    const handle = { any: 'handle' };
    const registry = createLifecycleRegistry({});

    registry.register(handle, 'someKey');

    expect(registry.resolve('someKey')).toEqual(handle);
});
