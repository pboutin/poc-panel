import DS from 'ember-data';

export default DS.RESTAdapter.extend({
    host: 'http://pocpanel.dev',
    namespace: 'api'
});