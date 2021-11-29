

const loginApp = {
    data() {
        return {
            loginData: {
                email: '',
                password: ''
            }
        }
    },
    methods: {
        loginFunc() {
           if (this.loginData.email && this.loginData.password) {
               const loginFormData = new FormData();
               loginFormData.append('loginData', JSON.stringify(this.loginData));
               axiosInstance.post('/accountLogin', loginFormData)
                   .then(({data, status}) => {
                       if (status === 200) {
                           localStorage.setItem('token', data.token);
                           window.location = domain + '/home'
                           console.log(data.statusStr)
                       } else {
                           console.error('Unable to connect to the server')
                       }
                   })
                   .catch((error) => {
                       alert(error)
                   });
           } else  {

           }
        }
    }
}
Vue.createApp(loginApp).mount('#loginApp');
