import Ember from 'ember';
import $ from 'jquery';

export default Ember.Test.registerHelper('jsonServer', function(app, data) {
    return $.extend(true, {
        id: 1,
        hostname: 'foobar.com',
        ip: '100.100.100.100',
        status: 'on',
        image: 1,
        flavor: 1
    }, data);
});
