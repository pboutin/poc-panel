import Ember from 'ember';

export default Ember.Component.extend({
    tagName: 'label',
    classNameBindings: [':panel', 'isSelected:panel-success:panel-info'],

    option: null,
    selection: null,
    group: '',

    click() {
        this.set('selection', this.get('option'));
    },

    isSelected: Ember.computed('selection', function() {
        return this.get('option.id') === this.get('selection.id');
    })
});
