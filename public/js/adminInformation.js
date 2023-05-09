new Vue({
    delimiters: ['{*', '*}'],
    el: '#appInformation',
    data: {
        information: [],
        text: '',
        title: '',
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

        getInformation: async function () {
            let data = await this.getData('/api/information');
            this.information = data.data;
        },

        deleteInformation: async function (id) {
            await this.deleteData(`/api/information/${id}`);
            await this.getInformation();
        },
        addInformation: async function() {
            await this.postData('/api/information', {'title': this.title, 'text': this.text});
            await this.getInformation();
        }

    },
    async mounted() {
        await this.getInformation();
    },
})
