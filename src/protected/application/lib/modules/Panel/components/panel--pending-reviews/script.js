app.component('panel--pending-reviews', {
    template: $TEMPLATES['panel--pending-reviews'],

    components: {
        carousel: Vue3Carousel.Carousel,
        slide: Vue3Carousel.Slide,
        pagination: Vue3Carousel.Pagination,
        navigation: Vue3Carousel.Navigation
    },

    setup() {
        // os textos estão localizados no arquivo texts.php deste componente 
        const text = Utils.getTexts('panel--pending-reviews')
        return { text }
    },

    created() {
        this.loading = false;
    },

    data() {
        return {
            loading: true,
            entities: $MAPAS.opportunitiesCanBeEvaluated,

            // carousel settings
            settings: {
                itemsToShow: 1.2,
                snapAlign: 'center',
            },
            breakpoints: {
                1300: {
                    itemsToScrool: 2.95,
                    itemsToShow: 2.3,
                    snapAlign: "start"
                },
                1200: {
                    itemsToScrool: 2.8,
                    itemsToShow: 2.2,
                    snapAlign: "start"
                },
                1100: {
                    itemsToScrool: 2.6,
                    itemsToShow: 2,
                    snapAlign: "start"
                },
                1000: {
                    itemsToShow: 1.8,
                    snapAlign: "start"
                },
                900: {
                    itemsToShow: 1.4,
                    snapAlign: "start"
                },
                800: {
                    itemsToShow: 1.2,
                    snapAlign: "start"
                },
                700: {
                    itemsToShow: 1.8,
                    snapAlign: "start"
                },
                600: {
                    itemsToScrool: 1.8,
                    itemsToShow: 1.9,
                    snapAlign: "start"
                },
                500: {
                    itemsToScrool: 1.5,
                    itemsToShow: 1.25,
                    snapAlign: "start"
                },
                400: {
                    itemsToScrool: 1.4,
                    itemsToShow: 1.2,
                    snapAlign: "start"
                },
                360: {
                    itemsToScrool: 1,
                    itemsToShow: 1.,
                    snapAlign: "start"
                },
                340: {
                    itemsToScrool: 1,
                    itemsToShow: 1.,
                    snapAlign: "start"
                },
            }
        }
    },
    methods: {
        resizeSlides() {
            this.$refs.carousel.updateSlideWidth();
        }
    },

});