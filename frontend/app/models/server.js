import DS from 'ember-data';
import Ember from 'ember';

export default DS.Model.extend({
    hostname:       DS.attr('string', {defaultValue: 'exemple.org'}),
    ip:             DS.attr('string'),
    status:         DS.attr('string'),

    flavor:         DS.belongsTo('flavor'),
    image:          DS.belongsTo('image'),

    isRebooting: false,

    isBusy: Ember.computed('isSaving', 'isRebooting', function() {
        return this.get('isSaving') || this.get('isRebooting');
    })
});
