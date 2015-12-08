import DS from 'ember-data';

export default DS.Model.extend({
    hostname:       DS.attr('string'),
    ip:             DS.attr('string'),
    status:         DS.attr('string')
});
