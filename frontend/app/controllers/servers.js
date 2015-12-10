import Ember from 'ember';

export default Ember.Controller.extend({
    actions: {
        power(server) {
            server.set('isRebooting', true);
            Ember.$.ajax('/api/servers/' + server.get('id') + '/power', { method: 'PUT' })
                .done(function(payload) {
                    this.store.pushPayload(payload);
                    server.set('isRebooting', false);
                }.bind(this));
        },
        destroy(server) {
            server.destroyRecord().then(function() {
                console.log('destroyed');
            });
        }
    }
});
