export default () => {
    return {
        modelName: 'cup_anag_support_attivita',
        search: {
            modelName: 'cup_anag_support_attivita',
            type: "v-search",
            fields: [],
            fieldsConfig: {
                'codice': {
                    type: "w-input",
                },
                'descrizione': {
                    type: "w-input",
                },

            },
            advancedFields: [],
            actionsConfig: {},
            searchWithButton: true,

        },

        list: {
            modelName: 'cup_anag_support_attivita',
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

            },
            orderFields: {
                'codice': 'codice',
                'descrizione': 'descrizione',

            }

        },

        edit: {
            modelName: 'cup_anag_support_attivita',
            type: "v-edit",
            actions: ['action-save-back', 'action-back'],
            actionsConfig: {},
            fields: [
                'id',
                'codice',
                'descrizione',

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

            }

        },
    }
}
