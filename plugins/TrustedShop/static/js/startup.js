pimcore.registerNS("pimcore.plugin.trustedshop");

pimcore.plugin.trustedshop = Class.create(pimcore.plugin.admin, {
    getClassName: function() {
        return "pimcore.plugin.trustedshop";
    },

    initialize: function() {
        pimcore.plugin.broker.registerPlugin(this);
    },
 
    pimcoreReady: function (params,broker){
        // alert("Example Ready!");
    }
});

var trustedshopPlugin = new pimcore.plugin.trustedshop();

