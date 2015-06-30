pimcore.registerNS("pimcore.plugin.pimtools.detailwindow");
pimcore.plugin.pimtools.detailwindow = Class.create({
    getClassName: function (){
        return "pimcore.plugin.pimtools.detailwindow";
    },

    initialize: function (data) {
        this.data = data;
        // console.log(data);
        this.getInputWindow();
        this.detailWindow.show();
    },


    getInputWindow: function () {

        if(!this.detailWindow) {
            this.detailWindow = new Ext.Window({
                width: 600,
                height: 500,
                iconCls: "pimtools_import_icon",
                title: t('pimtools_import_detailinformation'),
                closeAction:'close',
                plain: true,
                maximized: false,
                autoScroll: true,
                modal: true,
                buttons: [
                    {
                        text: t('close'),
                        handler: function(){
                            this.detailWindow.hide();
                            this.detailWindow.destroy();
                        }.bind(this)
                    }
                ]
            });

            this.createPanel();
        }
        return this.detailWindow;
    },


    createPanel: function() {
        var items = [];
        items.push({
            xtype: "textfield",
            fieldLabel: t('pimtools_import_report_import_date'),
            name: "timestamp",
            readOnly: true,
            value: this.data.importDate,
            width: 400
        });
        items.push({
            xtype: "textarea",
            fieldLabel: t('pimtools_import_report_message'),
            name: "message",
            readOnly: true,
            value: this.data.message,
            width: 400,
            height: 200
        });
        items.push({
            xtype: "textfield",
            fieldLabel: t('pimtools_import_report_action'),
            name: "type",
            readOnly: true,
            value: this.data.action,
            width: 400
        });
        items.push({
            xtype: "textfield",
            fieldLabel: t('pimtools_import_report_type'),
            name: "type",
            readOnly: true,
            value: this.data.type,
            width: 400
        });
        items.push(new Ext.form.CompositeField({
            items: [{
                xtype: "textfield",
                fieldLabel: t('id'),
                name: "productid",
                readOnly: true,
                value: this.data.productid,
                width: 70
            },
            {
                xtype: "textfield",
                fieldLabel: t('pimtools_import_report_productpath'),
                name: "productpath",
                readOnly: true,
                value: this.data.productpath,
                width: 300
            },
            {
                xtype: "button",
                iconCls: "pimcore_icon_edit",
                handler: function() {
                    pimcore.helpers.openObject(this.data.productid);
                    this.detailWindow.destroy();
                }.bind(this)
            }]
        }));

        items.push({
            xtype: "textfield",
            fieldLabel: t('pimtools_import_report_state'),
            name: "state",
            readOnly: true,
            value: this.data.state,
            width: 400
        });

        items.push({
            xtype: "textfield",
            fieldLabel: t('pimtools_import_report_processed_date'),
            name: "processedDate",
            readOnly: true,
            value: this.data.processedDate,
            width: 400
        });
        items.push({
            xtype: "textfield",
            fieldLabel: t('user'),
            name: "user",
            readOnly: true,
            value: this.data.user,
            width: 400
        });


        var panel = new Ext.form.FormPanel({
            border: false,
            frame:false,
            bodyStyle: 'padding:10px',
            items: items,
            labelWidth: 130,
            collapsible: false,
            autoScroll: true
        });

        this.detailWindow.add(panel);
    }

});