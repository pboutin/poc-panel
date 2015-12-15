import { moduleForModel, test } from 'ember-qunit';

moduleForModel('image', 'Unit | Model | image', {
    // Specify the other units that are required for this test.
    needs: []
});

test('title is computed from the name and version', function(assert) {
    let image = this.subject({
        name: 'Ubuntu',
        version: '12.04 LTS'
    });

    assert.equal(image.get('title'), 'Ubuntu 12.04 LTS');
});
