import Ember from 'ember';

export default Ember.Controller.extend({
    actions: {
        power(server) {
            this.set('loading', true);
            Ember.$.ajax('/api/servers/' + server.get('id') + '/power', { method: 'PUT' })
                .done(function(payload) {
                    this.store.pushPayload(payload);
                    this.set('loading', false);
                }.bind(this));
        },
        destroy(server) {
            server.destroyRecord().then(function() {
                console.log('destroyed');
            });
        }
    }
});
