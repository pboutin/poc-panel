import Ember from 'ember';
import $ from 'jquery';

export default Ember.Test.registerHelper('jsonImage', function(app, data) {
    return $.extend(true, {
        id: 1,
        name: 'Ubuntu',
        type: 'Linux',
        version: '12.04 LTS',
        minRam: 1024,
        minCpu: 1,
        minDisk: 10 * 1024
    }, data);
});
