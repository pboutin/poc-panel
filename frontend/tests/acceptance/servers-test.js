import { test } from 'qunit';
import moduleForAcceptance from 'frontend/tests/helpers/module-for-acceptance';

moduleForAcceptance('Acceptance | servers', {
    afterEach() {
        $.mockjax.clear();
    }
});


test('the server list is displayed', function(assert) {
    ajaxGet(/servers/, {
        servers: [jsonServer({
            hostname: 'potato.dev',
            ip: '23.23.23.23',
            image: 1,
            flavor: 1
        })],
        flavors: [jsonFlavor({ id: 1 })],
        images: [jsonImage({ id: 1 })]
    });

    visit('/servers');

    andThen(function() {
        assert.equal(currentURL(), '/servers');
        assert.equal(this.$('._servers tr').length, 1);
        assert.equal(this.$('._servers td:eq(0)').text(), 'potato.dev');
        assert.equal(this.$('._servers td:eq(1)').text(), '23.23.23.23');
    });
});

test('deploying a server, happy path', function(assert) {
    ajaxGet(/servers/, { servers: [], flavors: [], images: [] });

    visit('/servers');

    andThen(function() {
        ajaxGet(/images/, { images: [jsonImage({id: 1})] });
        ajaxGet(/flavors/, { flavors: [jsonFlavor({id: 1})] });

        click('._add-server');

        andThen(function() {
            assert.equal(currentURL(), '/servers/new');
            fillIn('._hostname', 'pboutin.net');
            click('._submit');

            ajaxPost(/servers/, { servers: [jsonServer({ hostname: 'pboutin.net' })] });

            andThen(function() {
                assert.equal(currentURL(), '/servers');
                assert.equal(this.$('._servers tr').length, 1);
            });
        });
    });
});
