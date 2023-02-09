app.component('search-filter-space', {
    template: $TEMPLATES['search-filter-space'],

    setup() {
        // os textos estão localizados no arquivo texts.php deste componente 
        const text = Utils.getTexts('search-filter-space')
        return { text }
    },

    props: {
        position: {
            type: String,
            default: 'list'
        },
        pseudoQuery: {
            type: Object,
            required: true
        }
    },

    data() {
        return {
            terms: $TAXONOMIES.area.terms,
        }
    },

    computed: {
    },

    methods: {
        clearFilters() {

            delete this.pseudoQuery['@verified'];
            delete this.pseudoQuery['type'];
            this.pseudoQuery['term:area'].length = 0;

            delete this.pseudoQuery['acessibilidade'];
            
        },
    },
});