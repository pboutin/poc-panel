import Ember from 'ember';
import $ from 'jquery';

export default Ember.Component.extend({
    didInsertElement() {
        this.$('._modal').modal('show');
    },
    willDestroyElement() {
        this.$('._modal').modal('hide');
        $('body > .modal-backdrop').remove();
    }
});
