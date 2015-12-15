import { memory } from '../../../helpers/memory';
import { module, test } from 'qunit';

module('Unit | Helper | memory');

test('with even gigabytes', function(assert) {
    assert.equal(memory(2048), '2go');
});

test('with odd gigabytes', function(assert) {
    assert.equal(memory(2560), '2560mo');
});

test('with megabytes', function(assert) {
    assert.equal(memory(512), '512mo');
});
