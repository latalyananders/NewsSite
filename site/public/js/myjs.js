
    var app = new Vue({
        el: '#app',
        data:{
            news: window.news,
            pagenumber: 1,
            maxPage: window.maxPage
        },
        methods: {
            query: function () {
                var component = this;
                $url = "/query/";
            },
            nextPage: function () {
                var component = this;
                component.pagenumber++;
                $url = "/query/" + component.pagenumber;
                axios.get($url)
                    .then(function(response){
                        component.news = response.data;
                        console.log(component.news);
                    });
            },
            prevPage: function () {
                var component = this;
                component.pagenumber--;
                $url = "/query/" + component.pagenumber;
                axios.get($url)
                    .then(function(response){
                        component.news = response.data;
                        console.log(component.news);
                    });
            }
        }
    });