import Ember from 'ember';

export default Ember.Controller.extend({
    actions: {
        save() {
            var self = this;
            this.get('model').save().then(function() {
                self.transitionToRoute('servers');
            });
        },
        cancel() {
            this.transitionToRoute('servers');
        }
    }
});
