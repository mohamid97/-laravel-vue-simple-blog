<template>
    <div class="post" v-show="show">
        <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><router-link to="/">Home</router-link>  |</li>
                <li class="breadcrumb-item">Post |</li>
                <li class="breadcrumb-item active" aria-current="page">{{post.title}}
                </li>
            </ol>
        </nav>

        <div class="post-details">
            <div class="img">
                <img src="https://via.placeholder.com/728x500.png" class="img-thumbinal"/>
            </div>
            <div class="info">
                <h3>{{post.title}}</h3>
                <p class="details">
                    <span>{{post.created_at}} | {{post.updated_at}} |{{post.likes}}</span>
                </p>
                <hr>
                <p class="des">
                    {{post.des}}
                </p>

            </div>
        </div>
    </div>
</template>
<style scoped>
.post{
    margin: 50px 0 0 0;
}
</style>
<script>
export default {
    data(){
        return{
            show:false,
            id:this.$route.params.id,
            post:{


            }
        }
    },
    mounted(){
         this.getPost();

    },
    methods:{
        getPost(){
            axios.get('/api/post/'+ this.id)
            .then(res=>{

                this.post = res.data
                this.show = true;
            })
            .catch(err=>alert(err))
        }
    }
}
</script>
