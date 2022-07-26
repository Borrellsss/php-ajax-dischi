var app = new Vue(
    {
        el: "#root",
        data: {
            discs: [],
        },
        methods: {

        },
        mounted() {
            axios.get("http://localhost:8888/php-ajax-dischi/api.php").then((response) => {
                // !DEBUG
                // console.log(response.data);

                this.discs = response.data;
                // !DEBUG
                // console.log(this.discs);
            })
        },
    }
);