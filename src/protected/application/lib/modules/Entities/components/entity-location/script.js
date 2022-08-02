
app.component('entity-location', {
    template: $TEMPLATES['entity-location'],
    emits: [],

    setup(props, { slots }) {
        const hasSlot = name => !!slots[name]
        return { hasSlot }
    },

    props: {
        
    },
});
