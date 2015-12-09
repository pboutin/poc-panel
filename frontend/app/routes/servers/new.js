import Ember from 'ember';

export default Ember.Route.extend({
    model() {
        return Ember.RSVP.hash({
            flavors: this.store.findAll('flavor'),
            images: this.store.findAll('image')
        });
    },
    setupController(controller, serverResponse) {
        controller.set('flavors', serverResponse.flavors);
        controller.set('images', serverResponse.images);

        let newServer = this.store.createRecord('server');
        newServer.set('flavor', serverResponse.flavors.get('firstObject'));
        newServer.set('image', serverResponse.images.get('firstObject'));
        controller.set('model', newServer);
    }
});
