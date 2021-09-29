const Offer = {
    data() {
        return {
        "person": {},              
        }
    },
computed:{
        prettyBirthday(){
            return dayjs(this.person.dob.date) ; 
        }
    },
methods:{
        fetchUserData(){
            fetch('https://randomuser.me/api/')
        .then( response => response.json())
        .then((parsedJSON) =>{
            console.log(parsedJSON);
            this.person = parsedJSON.results[0]
        })
        .catch(  err => {
            console.error(err)
        })
        }

    },
created(){
        this.fetchUserData();
    }
}


  Vue.createApp(Offer).mount('#offerApp')