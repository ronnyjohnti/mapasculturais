app.component('opportunity-phases-timeline', {
	template: $TEMPLATES['opportunity-phases-timeline'],

	props: {
		big: {
			type: Boolean,
			default: false
		},
		center: {
			type: Boolean,
			default: false
		}
	},

    async created() {
        if($MAPAS.opportunityPhases && $MAPAS.opportunityPhases.length > 0) {
            this.phases = $MAPAS.opportunityPhases;
        } else {
            const api = new OpportunitiesAPI();
            this.phases = await api.getPhases(this.entity.id);
        }
    },

	data() {
        return {
			phases: [],
        }
    },

	methods: {
		dateFrom(id) {
			let item = this.getItemById(id);

			if (item.registrationFrom) {
				return item.registrationFrom.date('2-digit year');
			}	
			if (item.evaluationFrom) {
				return item.evaluationFrom.date('2-digit year');
			}
			return false;
		},

		dateTo(id) {
			let item = this.getItemById(id);

			if (item.registrationTo) {
				return item.registrationTo.date('2-digit year');
			}	
			if (item.evaluationTo) {
				return item.evaluationTo.date('2-digit year');
			}
			return false;
		},

		hour(id) {
			let item = this.getItemById(id);

			if (item.registrationTo) {
				return item.registrationTo.time();
			}
			if (item.evaluationTo) {
				return item.evaluationTo.time();
			}
			return false;
		},

		isActive(id) {
			let item = this.getItemById(id);

			if (item.registrationFrom && item.registrationTo) {
				if (item.registrationFrom._date <= new Date() && item.registrationTo._date >= new Date()) {
					return true;
				}
			}
			if (item.evaluationFrom && item.evaluationTo) {
				if (item.evaluationFrom._date <= new Date() && item.evaluationTo._date >= new Date()) {
					return true;
				}
			}
			return false;
		},

		itHappened(id) {
			let item = this.getItemById(id);

			if (item.registrationTo) {
				if (item.registrationTo._date < new Date()) {
					return true;
				}
			}
			if (item.evaluationTo) {
				if (item.evaluationTo._date < new Date()) {
					return true;
				}
			}
			return false;
		},

		getItemById(id) {
			return this.phases.find(x => x.id === id);
		},
	}
});