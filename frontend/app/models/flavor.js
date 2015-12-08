import DS from 'ember-data';

export default DS.Model.extend({
    name:           DS.attr('string'),
    ram:            DS.attr('number'),
    cpu:            DS.attr('number'),
    disk:           DS.attr('number'),
    hourlyRate:     DS.attr('number')
});
