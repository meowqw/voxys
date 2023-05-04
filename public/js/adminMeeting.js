new Vue({
    delimiters: ['{*', '*}'],
    el: '#app',
    data: {
        meetings: [],
    },
    methods: {
        updateData: async function (url, data) {
            token = document.getElementsByName('csrfmiddlewaretoken')[0].value

            const response = await fetch(url, {
                headers: {
                    "Content-type": "application/json",
                    "X-CSRFTOKEN": token,
                },
                body: JSON.stringify(data),
                method: "PATCH",
            });

            return response.json();
        },

        deleteData: async function(url) {
            const response = await fetch(url, {
                headers: {
                    "Content-type": "application/json",
                },
                method: "DELETE",
            });
        },

        getData: async function (url) {

            const response = await fetch(url, {
                headers: {
                    "Content-type": "application/json",
                },
                method: "GET",
            });

            return response.json();
        },

        // method for post request
        postData: async function (url, data) {
            // token = document.getElementsByName('csrfmiddlewaretoken')[0].value

            const response = await fetch(url, {
                headers: {
                    "Content-type": "application/json",
                    // "X-CSRFTOKEN": token,
                },
                body: JSON.stringify(data),
                method: "POST",
            });

            return response.json();
        },

        getMeetings: async function () {
            let data = await this.getData('/api/meeting');
            this.meetings = data.data;
        },

        deleteMeeting: async function (id) {
            await this.deleteData(`/api/meeting/${id}`);
            await this.getMeetings();
        }

    },
    async mounted() {
        await this.getMeetings();
    },
    watch: {
        successMsg() {
            setTimeout(() => {
                if (this.successMsg) {
                    this.successMsg = false;
                }
            }, 1500);
        }
    }
})
