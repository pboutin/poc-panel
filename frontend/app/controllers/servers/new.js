import Ember from 'ember';

export default Ember.Controller.extend({
    actions: {
        save() {
            this.get('model').save().then(function() {
                this.transitionToRoute('servers');
            }.bind(this));
        },
        cancel() {
            this.transitionToRoute('servers');
        }
    }
});
