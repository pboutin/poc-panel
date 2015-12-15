import Ember from 'ember';
import $ from 'jquery';

export default Ember.Test.registerHelper('ajaxGet', function(app, endpoint, response) {
    return $.mockjax({
        url: endpoint,
        type: 'GET',
        dataType: 'json',
        responseText: JSON.stringify(response),
        responseTime: 0
    });
});
