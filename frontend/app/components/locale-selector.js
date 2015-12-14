import Ember from 'ember';

export default Ember.Component.extend({
    i18n: Ember.inject.service(),

    locales: [
        {key: 'en', label: 'English'},
        {key: 'fr', label: 'Français'}
    ],

    actions: {
        change(lang) {
            this.set('i18n.locale', lang);
        }
    }
});
