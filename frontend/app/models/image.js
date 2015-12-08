import DS from 'ember-data';

export default DS.Model.extend({
    name:          DS.attr('string'),
    version:       DS.attr('string'),
    type:          DS.attr('string'),
    minRam:        DS.attr('number'),
    minCpu:        DS.attr('number'),
    minDisk:       DS.attr('number')
});
