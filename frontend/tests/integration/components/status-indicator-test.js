import { moduleForComponent, test } from 'ember-qunit';
import hbs from 'htmlbars-inline-precompile';

moduleForComponent('status-indicator', 'Integration | Component | status indicator', {
  integration: true
});


test('status should display the good color', function(assert) {
    assert.expect(4);

    this.set('serverStatus', 'on');
    this.render(hbs`{{status-indicator status=serverStatus}}`);

    assert.equal(this.$('i').hasClass('text-success'), true, 'Should be green');
    assert.equal(this.$('i').hasClass('text-danger'), false, 'Should be red');

    this.set('serverStatus', 'off');

    assert.equal(this.$('i').hasClass('text-success'), false, 'Should be red');
    assert.equal(this.$('i').hasClass('text-danger'), true, 'Should be green');
});
