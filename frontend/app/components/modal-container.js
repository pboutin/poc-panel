import Ember from 'ember';

export default Ember.Component.extend({
    didInsertElement() {
        this.$('._modal').modal('show');
    },
    willDestroyElement() {
        this.$('._modal').modal('hide');
    }
});
