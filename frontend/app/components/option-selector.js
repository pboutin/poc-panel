import Ember from 'ember';

export default Ember.Component.extend({
    classNameBindings: ['isSelected:selected'],

    option: null,
    selection: null,

    click() {
        this.set('selection', this.get('option'));
    },

    isSelected: Ember.computed('selection', function() {
        return this.get('option.id') === this.get('selection.id');
    })
});
