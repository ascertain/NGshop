pimcore.registerNS("pimcore.plugin.pimtools.importreport");
pimcore.plugin.pimtools.importreport = Class.create({

    searchParams:{start:0, limit:25},

    initialize:function () {
        this.getTabPanel();
    },

    activate:function () {
        var tabPanel = Ext.getCmp("pimcore_panel_tabs");
        tabPanel.activate("pimtools_import_report");
    },

    getTabPanel:function () {
        if (!this.panel) {
            this.panel = new Ext.Panel({
                id:"pimtools_import_report",
                title:t("pimtools_import_report"),
                border:false,
                layout:"fit",
                iconCls:"pimtools_import_report",
                closable:true
            });

            var tabPanel = Ext.getCmp("pimcore_panel_tabs");
            tabPanel.add(this.panel);
            tabPanel.activate("pimtools_import_report");

            this.panel.on("destroy", function () {
                pimcore.globalmanager.remove("pimtools_import_report");
            }.bind(this));


            // create the Data Store
            this.store = new Ext.data.JsonStore({
                root:'p_results',
                totalProperty:'p_totalCount',
                idProperty:'id',
                remoteSort:true,
                autoSave: true,
                writer: new Ext.data.JsonWriter({
                    encode: true
                }),
                fields:[
                    'id', 'importDate', 'action', 'type', 'productpath', 'productid', 'message', 'state', 'processedDate', 'user'
                ],
                url:'/plugin/PimTools/admin/show'
            });

            this.resultpanel = new Ext.grid.GridPanel({
                //autoHeight: true,
                store:this.store,
                title:t("pimtools_import_report"),
                trackMouseOver:false,
                disableSelection:true,
                loadMask:true,
                autoScroll:true,
                region:"center",
                // grid columns
                columns:[
                    {
                        xtype: 'actioncolumn',
                        width: 10,
                        items: [
                            {
                                tooltip: t('open'),
                                icon: "/pimcore/static/img/icon/pencil_go.png",
                                handler: function (grid, rowIndex) {
                                    var data = grid.getStore().getAt(rowIndex);
                                    pimcore.helpers.openObject(data.data.productid, "object");
                                }.bind(this)
                            }
                        ]
                    },
                    {
                        xtype: 'actioncolumn',
                        width: 10,
                        items: [
                            {
                                tooltip: t('pimtools_import_report_mark_as_processed'),
                                icon: "/pimcore/static/img/icon/wand.png",
                                handler: function (grid, rowIndex) {
                                    var data = grid.getStore().getAt(rowIndex);
                                    if(data.data.state == 1) {
                                        data.set("state", 0);
                                    } else {
                                        data.set("state", 1);
                                    }
//                                    this.store.save();
                                }.bind(this)
                            }
                        ]
                    },
                    {
                        header:t("pimtools_import_report_import_date"),
                        dataIndex:'importDate',
                        width:40,
                        align:'left',
                        /*hidden: true,*/
                        sortable:true
                    },
                    {
                        /*id:'p_message',*/
                        header:t("pimtools_import_report_action"),
                        dataIndex:'action',
                        width:30,
                        sortable:true
                    },
                    {
                        /*id:'p_message',*/
                        header:t("pimtools_import_report_type"),
                        dataIndex:'type',
                        width:30,
                        sortable:true
                    },
                    {
                        header:t("pimtools_import_report_productid"),
                        dataIndex:'productid',
                        width:25,
                        sortable:true
                    },
                    {
                        header:t("pimtools_import_report_productpath"),
                        dataIndex:'productpath',
                        width:130,
                        sortable:true
                    },
                    {
                        header:t("pimtools_import_report_message"),
                        dataIndex:'message',
                        width:130,
                        sortable:true
                    },
                    {
                        header:t("pimtools_import_report_state"),
                        dataIndex:'state',
                        width:20,
                        renderer: function(val) {
                            if(val == 1) {
                                return '<img src="/pimcore/static/img/icon/bool.png">';
                            } else {
                                return "";
                            }

                        },
                        sortable:true
                    },
                    {
                        header:t("pimtools_import_report_processed_date"),
                        dataIndex:'processedDate',
                        width:40,
                        sortable:false
                    },
                    {
                        header:t("pimtools_import_report_user"),
                        dataIndex:'user',
                        width:50,
                        sortable:true
                    }
                ],



                listeners: {
                    rowdblclick : function(grid, rowIndex, event ) {
                        console.log(pimcore.plugin.pimtools.detailwindow);
                        new pimcore.plugin.pimtools.detailwindow(this.store.getAt(rowIndex).data);
                    }.bind(this)
                },

                // customize view config
                viewConfig:{
                    forceFit:true,
                    enableRowBody:false,
                    showPreview:false

                },

                // paging bar on the bottom
                bbar:new Ext.PagingToolbar({
                    pageSize:this.searchParams.limit,
                    store:this.store,
                    displayInfo:true,
                    displayMsg:t("pimtools_import_display_results"),
                    emptyMsg:t("pimtools_import_report_no_search_results"),
                    items:[]
                })
            });

            this.fromDate = new Ext.form.DateField({
                //id:'from_date',
                name:'from_date',
                xtype:'datefield'
            });

            this.fromTime = new Ext.form.TimeField({
                //id:'from_time',
                name:'from_time',
                width:60,
                xtype:'timefield'
            });

            this.toDate = new Ext.form.DateField({
                //id:'to_date',
                name:'to_date',
                xtype:'datefield'
            });

            this.toTime = new Ext.form.TimeField({
                //id:'to_time',
                name:'to_time',
                width:60,
                xtype:'timefield'
            });

            this.searchpanel = new Ext.FormPanel({
                region:"east",
                title:t("pimtools_import_report_search_form"),
                width:340,
                height:500,
                border:true,
                autoScroll:true,
                buttons:[
                    {
                        text:t("pimtools_import_report_reset"),
                        handler:this.clearValues.bind(this),
                        iconCls:"pimtools_import_report_clear_button"
                    },
                    {
                        text:t("pimtools_import_report_search"),
                        handler:this.find.bind(this),
                        iconCls:"pimtools_import_report_search_button"
                    }
                ],
                items:[
                    {
                        xtype:'fieldset',
                        //title: t('carsearch_parameters6'),
                        //id:'pimtools_import_report_search_form',
                        //collapsible: true,
                        autoHeight:true,
                        labelWidth:150,
                        items:[
                            {
                                xtype:'compositefield',
                                fieldLabel:t('pimtools_import_report_search_from'),
                                combineErrors:true,
                                //id:'from',
                                name:'from',
                                items:[this.fromDate /*, this.fromTime */]
                            },
                            {
                                xtype:'compositefield',
                                fieldLabel:t('pimtools_import_report_search_to'),
                                combineErrors:true,
                                //id:'to',
                                name:'to',
                                items:[this.toDate /*, this.toTime*/]
                            },
                            {
                                xtype:'combo',
                                //id:'action',
                                name:'action',
                                fieldLabel:t('pimtools_import_report_action'),
                                width:150,
                                listWidth:150,
                                mode:'local',
                                typeAhead:true,
                                editable:false,
                                forceSelection:true,
                                triggerAction:'all',
                                store:new Ext.data.JsonStore({
                                    autoDestroy:true,
                                    url:'/plugin/PimTools/admin/actions-json',
                                    root:'actions',
                                    autoLoad:true,
                                    idProperty:'key',
                                    fields:['key', 'value']
                                }),
                                displayField:'value',
                                valueField:'key'
                            },
                            {
                                xtype:'combo',
                                name:'type',
                                fieldLabel:t('pimtools_import_report_type'),
                                width:150,
                                listWidth:150,
                                mode:'local',
                                typeAhead:true,
                                editable:false,
                                forceSelection:true,
                                triggerAction:'all',
                                store:new Ext.data.JsonStore({
                                    autoDestroy:true,
                                    url:'/plugin/PimTools/admin/types-json',
                                    root:'types',
                                    autoLoad:true,
                                    idProperty:'key',
                                    fields:['key', 'value']
                                }),
                                displayField:'value',
                                valueField:'key'
                            },
                            {
                                xtype:'combo',
                                //id:'state',
                                name:'state',
                                fieldLabel:t('pimtools_import_report_state'),
                                width:150,
                                listWidth:150,
                                mode:'local',
//                                typeAhead:true,
                                forceSelection:true,
                                triggerAction:'all',
                                store:new Ext.data.ArrayStore({
                                    autoDestroy:true,
                                    idIndex: 0,
                                    fields:['key', 'value'],
                                    data: [
                                        ['all', t('pimtools_import_report_all')],
                                        ['not_processed', t('pimtools_import_report_not_processed')],
                                        ['processed', t('pimtools_import_report_processed')]
                                    ]
                                }),
                                displayField:'value',
                                valueField:'key'
                            },
                            {
                                xtype:'textfield',
                                //id:'productid',
                                name:'productid',
                                fieldLabel:t('pimtools_import_report_productid'),
                                width:150,
                                listWidth:150
                            }
                        ]
                    }
                ]});

            this.layout = new Ext.Panel({
                border:false,
                layout:"border",
                items:[this.searchpanel, this.resultpanel]
            });


            this.panel.add(this.layout);
            this.store.load({params:this.searchParams});
            pimcore.layout.refresh();
        }
        return this.panel;
    },

    clearValues:function () {
        this.searchpanel.getForm().reset();

        this.searchParams.fromDate = null;
        this.searchParams.toDate = null;
        this.searchParams.importaction = null;
        this.searchParams.importtype = null;
        this.searchParams.state = null;
        this.searchParams.productid = null;
        this.store.baseParams = this.searchParams;
        this.store.reload({
            params:this.searchParams
        });
    },


    find:function () {
        var formValues = this.searchpanel.getForm().getFieldValues();

        if(this.fromDate.getValue()) {
            this.searchParams.fromDate = this.fromDate.getValue().getTime() / 1000;
        } else {
            this.searchParams.fromDate = null;
        }

        if(this.toDate.getValue()) {
            this.searchParams.toDate = this.toDate.getValue().getTime() / 1000;
        } else {
            this.searchParams.toDate = null;
        }
        this.searchParams.importaction = formValues.action;
        this.searchParams.importtype = formValues.type;
        this.searchParams.state = formValues.state;
        this.searchParams.productid = formValues.productid;

        this.store.baseParams = this.searchParams;

        this.store.reload({
            params:this.searchParams
        });
    }


});
