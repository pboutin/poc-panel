import Ember from 'ember';

export default Ember.Component.extend({
    status: '',

    isPoweredOn: Ember.computed('status', function() {
        return this.get('status') === 'on';
    })
});
