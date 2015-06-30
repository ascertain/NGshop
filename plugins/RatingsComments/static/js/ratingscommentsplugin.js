pimcore.registerNS("pimcore.plugin.ratingscomments");

pimcore.plugin.ratingscomments = Class.create(pimcore.plugin.admin, {

    getClassName: function () {
        return "pimcore.plugin.ratingscomments";
    },

    initialize: function() {
        pimcore.plugin.broker.registerPlugin(this);
    },

    pimcoreReady: function (params,broker){
        var toolbar = Ext.getCmp("pimcore_panel_toolbar");

        var insertPoint = pimcore.globalmanager.get("user").isAllowed("seemode") ? toolbar.items.length-6 : toolbar.items.length-5;
        toolbar.insert(insertPoint, {
            text: t('Comments'),
            iconCls: "pimcore_icon_menu_search",
            cls: "pimcore_main_menu",
            handler: this.showTab.bind(this)
        });
    },

    showTab: function() {
        this.panel = new Ext.Panel({
            id:         "comments_panel",
            title:      "Comments",
            iconCls:    "spark_fraud_check_panel_icon",
            border:     false,
            layout:     "fit",
            closable:   true,
            items:      [this.getGrid()]
        });

        var tabPanel = Ext.getCmp("pimcore_panel_tabs");
        tabPanel.add(this.panel);
        tabPanel.activate("comments_panel");

        pimcore.layout.refresh();
    },

    getGrid: function() {

        var proxy = new Ext.data.HttpProxy({
            url: '/plugin/RatingsComments/admin/get-all-comments'
        });
        var readerFields = [
            {name: 'c_id'},
            {name: 'c_o_id'},
            {name: 'c_shorttext'},
            {name: 'c_text'},
            {name: 'c_rating'},
            {name: 'c_user'},
            {name:'c_created'}
        ];
        var reader = new Ext.data.JsonReader({
            totalProperty: 'total',
            successProperty: 'success',
            root: 'comments',
            idProperty: 'c_id'
        }, readerFields);

        var writer = new Ext.data.JsonWriter();

        this.store = new Ext.data.Store({
            id: 'all_comments_store',
            restful: false,
            proxy: proxy,
            reader: reader,
            writer: writer,
            listeners: {
                write : function(store, action, result, response, rs) {
                }
            }
        });
        this.store.load();

        var expander = new Ext.ux.grid.RowExpander({
            tpl : new Ext.Template(
                '<p>{c_text}</p>'
            )
        });

        this.commentgrid = new Ext.grid.GridPanel({
            store: this.store,
            autoScroll: true,
            cm: new Ext.grid.ColumnModel({
                defaults: {
                    width: 20,
                    sortable: true
                },
                columns: [
                    expander,
                    {id:'c_id',header: t('id'), width: 5, dataIndex: 'c_id'},
                    {header: t('object_id'), width: 5, dataIndex: 'c_o_id'},
                    {header: t('comment'), width: 40, dataIndex: 'c_shorttext'},
                    {header: t('rating'), width: 10, dataIndex: 'c_rating'},
                    {header: t('user'), dataIndex: 'c_user'},
                    {header: t("created"),  sortable: true, dataIndex: 'c_created', renderer: function(d) {
                        var date = new Date(d * 1000);
                        return date.format("Y-m-d H:i:s");
                    }}
                ]
            }),
            viewConfig: {
                forceFit:true
            },
            width: 600,
            height: 300,
            plugins: expander,
            collapsible: true,
            animCollapse: false,
            tbar: [
                {
                    text: t('delete'),
                    handler: this.onCommentDelete.bind(this),
                    iconCls: "pimcore_icon_delete"
                },
                '-',
                {
                    text: t('reload'),
                    handler: function () {
                        this.store.reload();
                    }.bind(this),
                    iconCls: "pimcore_icon_reload"
                }
            ]
        });

        return this.commentgrid;
    },

    onCommentDelete: function () {
        var rec = this.commentgrid.getSelectionModel().getSelected();
        if (!rec) {
            return false;
        }
        this.commentgrid.store.remove(rec);
    },

    addRatingCommentingInfo: function (object, type) {

        Ext.Ajax.request({
            url: "/plugin/RatingsComments/admin/get-rating/",
            method: "get",
            params: {id:object.id,type:type},
            success: function (transport) {
                if (transport.status == 200 && transport.responseText != 'null') {
                    var dataJSON = Ext.util.JSON.decode(transport.responseText);
                    var len = object.tab.items.items[0].items.length;
                    object.tab.items.items[0].insert(len, "-");
                    object.tab.items.items[0].insert(len + 1,
                        {
                            text: dataJSON.average + ' ' + t('rating_points') + ' (' + dataJSON.total + ' ' + t('ratings_total') + ')',
                            xtype: 'tbtext',
                            cls: "rating_plugin_star"
                        }
                    );
                    object.tab.items.items[0].doLayout();
                }

            }.bind(this)
        });
        var items = object.tab.items.items[1].items;
        var commenttab = new pimcore.plugin.ratingscomments.comments(object, type);
        object.tab.items.items[1].insert(object.tab.items.items[1].items.length, commenttab.getLayout());
        object.tab.items.items[1].doLayout();
        pimcore.layout.refresh();
    },

    postOpenObject: function(object, type) {
        this.addRatingCommentingInfo(object, type);

    },
    postOpenDocument: function(object, type) {
        this.addRatingCommentingInfo(object, type);
    },
    postOpenAsset: function(object, type) {
        this.addRatingCommentingInfo(object, type);
    }

});

new pimcore.plugin.ratingscomments();