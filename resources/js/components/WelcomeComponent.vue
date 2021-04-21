<template>
    <div class="content">
        <div class="header">
            <h1>{{ msg }}</h1>
            <p>What would you like to do?</p>
            <div id="menu-options">
                <router-link to="/write">Write</router-link> |
                <router-link to="/read">Read</router-link>
            </div>
            <router-view />
        </div>
    </div>
</template>

<script>
export default {
    name: "Welcome",
    props: {
        msg: String,
    },
};
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.content {
    margin-top: 60px;
}
.menu-options {
    color: #42b983;
    margin: 20px;
}
</style>
