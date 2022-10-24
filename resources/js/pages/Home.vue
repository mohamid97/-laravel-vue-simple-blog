<template>
    <div class="home">
        <br /><br /><br />
        <div v-for="post in posts" :key="post.id" class="row">
            <div class="col-md-2">
                <img src="https://via.placeholder.com/150" alt="" />
            </div>
            <div class="col-md-10">
                <h3><router-link :to="'/post/' + post.id ">{{post.title}}</router-link></h3>
                <p>
                     {{post.des}}.
                </p>
                <p><a class="text" href="#">Read more</a></p>
                <p>
                    <i class="icon-user"></i> by <a href="#">John</a> |
                    <i class="icon-calendar"></i> Sept 16th, 2012 |
                    <i class="icon-comment"></i> <a href="#">3 Comments</a> |
                    <i class="icon-share"></i> <a href="#">39 Shares</a> |
                    <i class="icon-tags"></i> Tags :
                    <a href="#"><span class="label label-info">Snipp</span></a>
                    <a href="#"
                        ><span class="label label-info">Bootstrap</span></a
                    >
                    <a href="#" ><span class="label label-info">UI</span></a>
                    <a href="#"><span class="label label-info">growth</span></a>
                </p>
            </div>
            <hr>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            posts: [],
        };
    },
    mounted() {
        this.getPosts();
    },
    methods: {
        getPosts() {
            axios
                .get("/api/getPosts")
                .then((res) => {
                    this.posts = res.data;
                })
                .catch((err) => alert(err));
        },
    },
};
</script>
