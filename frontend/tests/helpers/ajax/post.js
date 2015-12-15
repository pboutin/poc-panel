import Ember from 'ember';
import $ from 'jquery';

export default Ember.Test.registerHelper('ajaxPost', function(app, endpoint, response) {
    return $.mockjax({
        url: endpoint,
        type: 'POST',
        responseText: JSON.stringify(response),
        responseTime: 0
    });
});
