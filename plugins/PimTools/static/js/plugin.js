pimcore.registerNS("pimcore.plugin.pimtools");

pimcore.plugin.pimtools = Class.create(pimcore.plugin.admin,{

    getClassName: function (){
        return "pimcore.plugin.pimtools";
    },

    initialize: function(){
		pimcore.plugin.broker.registerPlugin(this);

        var searchButton = Ext.get("pimcore_menu_settings");

        this.navEl = Ext.get(
            searchButton.insertHtml(
                "afterEnd",
                '<li id="pimcore_menu_pimtools" class="pimcore_menu_item icon-table">' + t('pimtools') + '</li>'
            )
        );


	},

    uninstall: function(){
        //TODO remove from menu
    },

    pimcoreReady: function (params,broker) {
        var toolbar = pimcore.globalmanager.get("layout_toolbar");

        var parentMenu = toolbar.pimTools;
        if(!parentMenu) {
            parentMenu = new Ext.menu.Menu({cls: "pimcore_navigation_flyout"});
            toolbar.pimTools = parentMenu;
            this.navEl.on("mousedown", toolbar.showSubMenu.bind(parentMenu));
        }

        var item = {
            text: t("pimtools_import_report"),
            iconCls: "pimtools_import_report",
            handler: function () {
                try {
                    pimcore.globalmanager.get("pimtools_import_report").activate();
                }
                catch (e) {
                    //console.log(e);
                    pimcore.globalmanager.add("pimtools_import_report", new pimcore.plugin.pimtools.importreport());
                }
            }
        }

        parentMenu.add(item);

    }

});

new pimcore.plugin.pimtools();