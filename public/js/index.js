const Offer = {
    data() {
        return {
           
"offers":[
    {   "id":1,
        "name":"John",
        "salary":80000, 
        "bonus":10000, 
        "company":"EY", 
        "offerdate":"2021-10-15"
    },
        
    {   
        "id":2,
        "name":"Sam",
        "salary":85000, 
        "bonus":9000, 
        "company":"Deloitte!", 
        "offerdate":"2021-09-02"
    }
    ]
        }
    },
    created(){
        fetch('https://randomuser.me/api/', )
        .then( response => response.json())
        .then( function (parsedJSON){
        })
        .catch( errFunc )
    }
}


  Vue.createApp(Offer).mount('#offerApp')