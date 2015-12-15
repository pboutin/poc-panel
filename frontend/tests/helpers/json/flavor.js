import Ember from 'ember';
import $ from 'jquery';

export default Ember.Test.registerHelper('jsonFlavor', function(app, data) {
    return $.extend(true, {
        id: 1,
        name: 'lambda',
        ram: 1024,
        cpu: 1,
        disk: 100 * 1024,
        hourlyRate: 0.024
    }, data);
});
