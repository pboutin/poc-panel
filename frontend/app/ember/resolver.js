import Resolver from 'ember/resolver';

export default Resolver.reopen({
    resolveTemplate: function(parsedName) {
        var isMobileBrowser = /Mobile|Android|BlackBerry/.test(navigator.userAgent);
        var defaultTemplate = this._super(parsedName);

        if (isMobileBrowser) {
            let mobileParsedName = this.parseName(parsedName.fullName + '-mobile');
            return this._super(mobileParsedName) || defaultTemplate;
        }
        return defaultTemplate;
    }
});
