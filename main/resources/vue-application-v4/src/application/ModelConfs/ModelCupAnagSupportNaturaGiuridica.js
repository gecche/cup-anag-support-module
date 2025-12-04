export default () => {
    return {
        modelName: 'cup_anag_support_natura_giuridica',
        search: {
            modelName: 'cup_anag_support_natura_giuridica',
            type: "v-search",
            fields: [
                'estera',

            ],
            fieldsConfig: {
                'codice': {
                    type: "w-input",
                },
                'descrizione': {
                    type: "w-input",
                },
                'estera': {
                    type: "w-select",
                    //domainValues : [],
                    //domainValuesOrder : [],
                },

            },
            advancedFields: [],
            actionsConfig: {},
            searchWithButton: true,

        },

        list: {
            modelName: 'cup_anag_support_natura_giuridica',
            type: "v-list",
            actions: [
                'action-insert',
                'action-edit',
                'action-delete',
                'action-delete-selected',
            ],
            actionsConfig: {},
            fields: [
                'id',
                'codice',
                'descrizione',
                'estera',

            ],
            fieldsConfig: {
                id: {
                    type: 'w-hidden',
                },
                'codice': {
                    type: "w-text",
                },
                'descrizione': {
                    type: "w-text",
                },
                'estera': {
                    type: "w-swap",
                    modelName: 'cup_anag_support_natura_giuridica',
                    //switchClass: 'form-switch-danger banned',
                    //dataSwitched : true,
                },

            },
            orderFields: {
                'codice': 'codice',
                'descrizione': 'descrizione',
                'estera': 'estera',

            }

        },

        edit: {
            modelName: 'cup_anag_support_natura_giuridica',
            type: "v-edit",
            actions: ['action-save-back', 'action-back'],
            actionsConfig: {},
            fields: [
                'id',
                'codice',
                'descrizione',
                'estera',

            ],
            fieldsConfig: {
                id: {
                    type: 'w-hidden',
                },
                'codice': {
                    type: "w-input",
                },
                'descrizione': {
                    type: "w-input",
                },
                'estera': {
                    type: "w-radio",
                    //domainValues : [],
                    //domainValuesOrder : [],
                },

            }

        },
    }
}