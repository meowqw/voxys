new Vue({
    delimiters: ['{*', '*}'],
    el: '#connect',
    data: {
        name: '',
        phone: '',
        date: '',
        time: '',
        successMsg: false,
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

        getData: async function (url) {
            token = document.getElementsByName('csrfmiddlewaretoken')[0].value

            const response = await fetch(url, {
                headers: {
                    "Content-type": "application/json",
                    "X-CSRFTOKEN": token,
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

        sendMeet: async function () {

            let data = {
                'name': this.name,
                'phone': this.phone,
                'date': this.date,
                'time': this.time
            }

            if (Object.values(data).every(str => str.length > 0)) {
                let clientData = await this.postData('/api/client', data);
                data['client_id'] = clientData.data.id
                let meetingData = await this.postData('/api/meeting', data);
                if ('data' in meetingData) {
                    this.successMsg = true;
                }
            }


        }

    },
    async mounted() {
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
