import { expect, test } from 'vitest';
import { Lifecycle } from '../resources/js/lifecycle/lifecycle';
import { createLifecycle } from '../resources/js/lifecycle/main';

test('basic test', () => {
    const lifecycle = new Lifecycle(
        () => ({ initial: 'object' }),
    );

    lifecycle.on('init', handle => ({
        ...handle(),
        updatedOne: 'at-init',
    }));

    lifecycle.on('init', handle => ({
        ...handle,
        updatedTwo: 'at-init',
    }));

    lifecycle.fire('init', {
        ...lifecycle.handle,
        added: 'while-fired',
    });

    expect(lifecycle.handle).toEqual(
        {
            initial: 'object',
            updatedOne: 'at-init',
            updatedTwo: 'at-init',
        },
    );
});

test('createLifecycle test', () => {
    const handle = { lifecycle: 'handle' };
    const lifecycle = createLifecycle(handle);

    lifecycle.on('test', object => ({
        ...object,
        hasBeen: 'updated',
    }));

    lifecycle.fire('test');

    expect(lifecycle.handle).toEqual({
        ...handle,
        hasBeen: 'updated',
    });
});
